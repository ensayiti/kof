#### Getting Started

Create project with this composer command:

```bash
composer install
```

Setup your env:

```bash
cd xem-laravel-boilerplate
cp .env.example .env
```

Run migration & seeder:

```bash
php artisan migrate
php artisan db:seed
```

<p align="center">or</p>

```bash
php artisan migrate:fresh --seed
```

Generate key:

```bash
php artisan key:generate
```

Run :

```bash
npm run dev
OR
npm run build
```

```bash
php artisan serve
```

Now you can access with `/admin` path, using:

```bash
email: superadmin@starter-kit.com
password: superadmin
```

*It's recommend to run below command as suggested in [Filament Documentation](https://filamentphp.com/docs/3.x/panels/installation#improving-filament-panel-performance) for improving panel perfomance.*

```bash
php artisan icons:cache
```

| **Plugin**                                                                                          | **Author**                                          |
| :-------------------------------------------------------------------------------------------------- | :-------------------------------------------------- |
| [Filament Spatie Media Library](https://github.com/filamentphp/spatie-laravel-media-library-plugin) | [Filament Official](https://github.com/filamentphp) |
| [Filament Spatie Settings](https://github.com/filamentphp/spatie-laravel-settings-plugin)           | [Filament Official](https://github.com/filamentphp) |
| [Filament Spatie Tags](https://github.com/filamentphp/spatie-laravel-tags-plugin)                   | [Filament Official](https://github.com/filamentphp) |
| [Shield](https://github.com/bezhanSalleh/filament-shield)                                           | [bezhansalleh](https://github.com/bezhansalleh)     |
| [Exceptions](https://github.com/bezhansalleh/filament-exceptions)                                   | [bezhansalleh](https://github.com/bezhansalleh)     |
| [Breezy](https://github.com/jeffgreco13/filament-breezy)                                            | [jeffgreco13](https://github.com/jeffgreco13)       |
| [Logger](https://github.com/z3d0x/filament-logger)                                                  | [z3d0x](https://github.com/z3d0x)                   |
| [Ace Code Editor](https://github.com/riodwanto/filament-ace-editor)                                 | [riodwanto](https://github.com/riodwanto)           |

#### Plugins Recommendation

Other recommendations for your starter, in my personal opinion:

- [Rupadana - API Resources](https://filamentphp.com/plugins/rupadana-api-service) : Generate API for your Resources.
- [Bezhan Salleh - Language Switch](https://filamentphp.com/plugins/bezhansalleh-language-switch) : Zero config Language Switcher plugin for Filament Panels.
- [Kenepa - Resource Lock](https://filamentphp.com/plugins/kenepa-resource-lock) : Resource locking when other user begins editing a resource.
- [Baptiste Bouillot - Jobs monitor](https://filamentphp.com/plugins/croustibat-jobs-monitor) : Monitor background jobs.
- [Ralph J. Smit - Components](https://filamentphp.com/plugins/ralphjsmit-components) : A collection of handy components.
- [Tapp Network - Laravel Auditing](https://filamentphp.com/plugins/tapp-network-laravel-auditing) : Resource locking when other user begins editing a resource.
- [Shuvro Roy - Spatie Laravel Health](https://filamentphp.com/plugins/shuvroroy-spatie-laravel-health) : Health monitoring for Filament.
