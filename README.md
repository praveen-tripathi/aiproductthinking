# aiproductthinking

WordPress theme that ports the original `site-structure.html` design for **aiproductthinking — the intelligent product decision agent** into a fully editable WordPress site.

## Quick start

1. Download [`aiproductthinking-theme.zip`](./aiproductthinking-theme.zip) from the root of this repo.
2. In WordPress: `Appearance → Themes → Add New → Upload Theme → Choose file → Install Now → Activate`.
3. After activation, click **Import Demo Content** from the admin notice (or visit `Appearance → Import Demo Content`) and run the importer. This creates **Home**, **How It Works**, **Solution**, **About**, **Contact** with the right page templates, sets Home as the front page, and builds the primary navigation menu. Re-running with the override checkbox refreshes content for matching slugs without duplicating pages.

Prefer the standard WordPress importer? Use `aiproductthinking-theme/wxr/aiproductthinking-demo.xml` via `Tools → Import → WordPress`.

## Repository layout

| Path | What it is |
| --- | --- |
| `aiproductthinking-theme/` | The full WordPress theme source |
| `aiproductthinking-theme/wxr/aiproductthinking-demo.xml` | WordPress eXtended RSS file with the 5 demo pages |
| `aiproductthinking-theme.zip` | Pre-packaged, upload-ready theme zip |
| [Theme README](./aiproductthinking-theme/README.md) | Full theme documentation |

## Reproduce the zip

```bash
cd /path/to/repo
rm -f aiproductthinking-theme.zip
zip -rq aiproductthinking-theme.zip aiproductthinking-theme \
  -x "*.DS_Store" "*/.git*"
```

## License

GPL v2 or later.
