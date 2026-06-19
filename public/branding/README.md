# School branding

`branding.css` is **not** stored in Git (per-school colors).

After clone or deploy:

```bash
cp public/branding/branding.css.example public/branding/branding.css
```

Edit `public/branding/branding.css` for your institution, or point `.env` at another file:

```env
BRANDING_CSS=branding/usm.css
```
