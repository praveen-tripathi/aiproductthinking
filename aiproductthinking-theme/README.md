# AI Product Thinking — WordPress Theme

A custom marketing theme for **aiproductthinking** — the intelligent product decision agent. It is a faithful WordPress port of the original `site-structure.html` design, with five pre-built pages (Home, How It Works, Solution, About, Contact), a one-click demo content importer, and a WXR XML file for the standard WordPress importer.

## What's included

```
aiproductthinking-theme/
├── style.css                   ← theme metadata + full design system
├── functions.php               ← theme setup, enqueues, helpers
├── header.php                  ← sticky header + primary nav
├── footer.php                  ← dark footer + columns
├── front-page.php              ← Home (hero, problem, why-now, steps, CTA)
├── page-how-it-works.php       ← How It Works template
├── page-solution.php           ← Solution template
├── page-about.php              ← About template
├── page-contact.php            ← Contact template (CF7-aware)
├── page.php / single.php / index.php / 404.php
├── screenshot.png              ← theme thumbnail
├── inc/demo-importer.php       ← Appearance → Import Demo Content
├── assets/
│   ├── js/main.js              ← mobile menu, contact pill state
│   └── images/                 ← 7 platform diagram images
└── wxr/aiproductthinking-demo.xml  ← WordPress eXtended RSS file
```

## Install in 60 seconds

1. **Download the theme zip**: in this repo, the packaged theme lives at the root as `aiproductthinking-theme.zip`. (If you cloned the repo and want to repackage, see "Package the theme" below.)
2. **Upload it** to WordPress: `Appearance → Themes → Add New → Upload Theme → Choose file → Install Now → Activate`.
3. **Import the demo content** — pick one of two paths:

### Option A · Built-in importer (recommended)

After activation, an admin notice appears: *"Welcome! Click below to create the five demo pages…"*. Click **Import Demo Content** (or go to `Appearance → Import Demo Content`), keep the **Override** checkbox ticked, and click **Run Import**.

The importer will:
- Create or update the five pages with the correct slugs (`home`, `how-it-works`, `solution`, `about`, `contact`).
- Assign the correct page templates (`page-how-it-works.php`, `page-solution.php`, `page-about.php`, `page-contact.php`).
- Set **Home** as the front page (`Settings → Reading → A static page`).
- Build a primary navigation menu and assign it to the **Primary Navigation** location.
- If a page with a matching slug already exists, its content is **overridden** (not duplicated).

### Option B · Standard WordPress Importer (WXR)

If you prefer the platform-native path:

1. `Tools → Import → WordPress` (install the *WordPress Importer* plugin if prompted).
2. Upload `wxr/aiproductthinking-demo.xml` from this theme folder.
3. Assign posts to the existing user, then **Submit**.

Note: the standard WordPress Importer **skips** existing pages with matching slugs by design. To override, use Option A.

## Customizing content

Each page is intentionally code-driven for design fidelity. To edit headlines, sub-text, problem cards, modules, KPIs, etc., open the corresponding template:

| Page          | Template                  |
| ------------- | ------------------------- |
| Home          | `front-page.php`          |
| How It Works  | `page-how-it-works.php`   |
| Solution      | `page-solution.php`       |
| About         | `page-about.php`          |
| Contact       | `page-contact.php`        |

For non-developer editing, you can later port any section into ACF Repeater fields and render them from the page's editor. The current templates are `__()`-wrapped, so you can also translate via Loco Translate or WPML.

## Site logo (Customizer)

The header and footer auto-render a logo uploaded via **Appearance → Customize → Site Identity → Logo**. The recommended dimensions are around **320×80 px** (PNG/SVG with transparent background). When no logo is set, the header falls back to the wordmark `aiproductthinking` with a gold pulse dot.

Behavior:
- **Header**: shows the uploaded logo at 40 px tall (32 px on mobile) inside the existing 66 px nav bar.
- **Footer**: same logo, tinted white via `filter: brightness(0) invert(1)` so it reads on the dark background. Already-white logos look correct as-is.

## Contact form (Contact Form 7)

The Contact page is wired to the **Contact Form 7** plugin. The form ID is configurable via the Customizer — there is no need to edit any PHP file.

### Setup

1. Install and activate the [Contact Form 7](https://wordpress.org/plugins/contact-form-7/) plugin.
2. Go to **Contact → Contact Forms**, open your default form (or create a new one called *Contact form 1*).
3. Copy the markup from `assets/contact-form-7-template.txt` (between the `BEGIN`/`END` markers) into the **Form** tab and save:

```
<label> Your name
    [text* your-name autocomplete:name placeholder "Your name"] </label>

<label> Your email
    [email* your-email autocomplete:email placeholder "you@company.com"] </label>

<label> Subject
    [text* your-subject placeholder "What is this about?"] </label>

<label> Your message (optional)
    [textarea your-message placeholder "Tell me about your perspective on this space, your background, or what kind of conversation you'd like to have…"] </label>

[submit "Submit"]
```

4. Confirm the **Mail** tab maps `[your-name]`, `[your-email]`, `[your-subject]`, `[your-message]` to your inbox.
5. Open `Contact → Contact Forms` and copy the **id** value from the shortcode column. CF7 shortcodes look like `[contact-form-7 id="f7daf39" title="Contact form 1"]` — copy the part between `id="` and `"`.
6. Go to `Appearance → Customize → Contact Form` and paste:
    - **Contact Form 7 — Form ID**: e.g. `f7daf39` (default), `123`, or whatever your form's ID is.
    - **Contact Form 7 — Form Title**: e.g. `Contact form 1` (default).
7. Click **Publish**. The contact page now renders your form.

> **Where to find the ID**: WordPress admin → `Contact → Contact Forms`. The shortcode column shows `[contact-form-7 id="…" title="…"]` for each form. Copy the `id` value into the Customizer field.

The theme ships with full CF7 styling that matches the rest of the page (forest-green submit button, focus states, validation messages, success/error banners). When CF7 is not installed, `page-contact.php` falls back to a static styled form with the same four fields so the page is never broken.

## Fonts and design tokens

Fonts come from Google Fonts (Fraunces serif + DM Sans). All design tokens are CSS variables defined at the top of `style.css`:

```css
--accent: #1a3a2a;   /* deep forest green */
--gold:   #b8943e;   /* editorial gold */
--ink:    #1a1814;   /* primary text */
--bg:     #f7f5f0;   /* warm cream background */
```

Override them in a child theme to rebrand without touching templates.

## Package the theme

To produce a clean, upload-ready zip from the source:

```bash
cd aiproductthinking-theme/..
zip -r aiproductthinking-theme.zip aiproductthinking-theme \
  -x "*.DS_Store" "*/.git*"
```

The resulting `aiproductthinking-theme.zip` is what you upload via `Appearance → Themes → Add New → Upload Theme`.

## Requirements

- WordPress **6.0+**
- PHP **7.4+**
- A modern browser for editorial typography rendering (Fraunces variable font)

## License

GPL v2 or later (matching WordPress).
