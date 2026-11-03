# ekkhuda-theme

WordPress theme for **[ekkhuda.org](https://ekkhuda.org)**, the Hindi (Hindustani) website of the GodAlone non-profit educational project. It presents the Quran-centred message in simple Hindi and is built to load fast on low-end phones.

## Features

- Mobile-first layout with a shared bottom bar and a "More" sheet (`inc-bottombar.php`)
- Hindi page templates: Introduction, FAQ, Is the Quran enough?, Is this for me?, Check it yourself, Contact, Legal (About / Privacy / Copyright)
- Tools: Zakat (charity) calculator, Ramadan calculator, Salat and Ramadan timing, Calculator 19
- Media: Audio Quran, Videos, Downloads, Library (books), Picture Messages (Quran verse pictures), Coloring Book
- Mathematical Miracle (Appendix 1) page
- No page-builder dependency; plain PHP templates, one stylesheet

## Requirements

- WordPress 6.x
- PHP 7.4 or newer

## Installation

1. Copy this folder into `wp-content/themes/` (for example `wp-content/themes/ekkhuda-premium/`).
2. In WordPress go to **Appearance > Themes** and activate it.
3. Create pages whose slugs match the templates (for example `faq`, `contact`, `quran-qa`, `charity`). Several templates are loaded automatically by slug through `functions.php`; others can be chosen under **Page Attributes > Template**.
4. Set the front page under **Settings > Reading**.

## Structure

- `functions.php` - setup, routing by page slug, assets
- `header.php`, `footer.php`, `front-page.php` - site shell and home page
- `page-*.php` - page templates
- `template-parts/`, `part-home-new.php` - home page sections
- `images/`, `assets/` - logos, icons and scripts

## Related projects

- [godalone-theme](https://github.com/GodAloneOSS/godalone-theme) - English site (godalone.in)
- [kadavulmattum-theme](https://github.com/GodAloneOSS/kadavulmattum-theme) - Tamil site (kadavulmattum.org)

## License

See the `LICENSE` file.
