composer create-project laravel/laravel bite-s

cd bite-s

composer require laravel/jetstream filament/filament joelbutcher/socialstream

//Using version ^4.2 for laravel/jetstream
php artisan jetstream:install livewire
npm install
npm run build
php artisan migrate

//Using version ^3.1 for filament/filament
php artisan filament:install --panels

//Using version ^5.3 for joelbutcher/socialstream
php artisan socialstream:install filament

composer require spatie/laravel-permission
/Using version ^3.1 for
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"

composer require -W --dev laravel-shift/blueprint


//install resources in filament
php artisan make:filament-resource <model> --generate


//install plugins in filament
composer require bezhansalleh/filament-shield eightynine/filament-approvals
