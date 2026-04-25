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

## Contact form

The Contact page ships with a fully styled form scaffold. To enable real submissions:

1. Install **Contact Form 7**, **WPForms**, or **Fluent Forms**.
2. Build your form and copy its ID.
3. Set the option:

```php
update_option( 'aipt_cf7_form_id', '123' ); // CF7 form ID
```

Or just paste a `[contact-form-7 id="123"]` shortcode into a fork of `page-contact.php`.

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
