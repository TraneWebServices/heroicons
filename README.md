<p align="center">
  <a href="https://tws.custura.de/#gh-light-mode-only" target="_blank">
    <img src="./.github/logo-light.svg" alt="Heroicons" width="300">
  </a>
  <a href="https://tws.custura.de/#gh-dark-mode-only" target="_blank">
    <img src="./.github/logo-dark.svg" alt="Heroicons" width="300">
  </a>
</p>
<p align="center">

  Beautiful hand-crafted SVG icons, by the makers of [TailwindLabs], and converted for `Blade` component.
<p>
<p align="center">
    <a href="https://github.com/tranewebservices/heroicons/actions/workflows/tests.yml"><img src="https://github.com/tranewebservices/heroicons/actions/workflows/tests.yml/badge.svg" alt="Heroicons Tests"></a>
    <a href="https://github.com/tranewebservices/heroicons/blob/main/LICENSE"><img src="https://img.shields.io/badge/License-Mit-brightgreen.svg" alt="License"></a>
</p>
<div align="center">
  Hey 👋 thanks for considering making a donation, with these donations I can continue working to contribute to opensource projects.
  
  [![Donate](https://img.shields.io/badge/Via_PayPal-blue)](https://www.paypal.com/donate/?hosted_button_id=V6YPST5PUAUKS)
</div>

## Install
```bash
composer require tws/heroicons
```

```json
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/tranewebservices/heroicons"
        }
    ]
```

#### Publish (Optional)
```bash
php artisan vendor:publish --tag="heroicons.config"
```
```bash
php artisan vendor:publish --tag="heroicons.views"
```

## Usage
You can find a list of all icons and variants on the [Heroicons] website

**Available variants:**
- mini.solid
- solid
- outline

```blade
<x-icon name="user" />
<x-icon name="user" solid />
<x-icon name="user" solid mini />
<x-icon name="user" variant="solid" />
<x-icon class="w-5 h-5 text-teal-600" name="user" />

<x-heroicons::outline.user />
<x-heroicons::solid.user />
<x-heroicons::mini.solid.user class="w-5 h-5" />
```

[TailwindLabs]:<https://github.com/tailwindlabs>
[Heroicons]:<https://heroicons.com>
