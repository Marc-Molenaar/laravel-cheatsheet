# Laravel Cheatsheet

### Useful sites:
- https://laravel.com/docs/8.x
- https://getbootstrap.com/docs/5.1/getting-started/introduction/

### Setup Laravel:
Make sure you have npm and composer installed.
```
composer create-project laravel/laravel .
composer require laravel/ui
php artisan ui bootstrap
php artisan ui bootstrap --auth
npm i bootstrap-icons
npm install && npm run dev
npm run watch
```

### Create model, controller and migration:
```
php artisan make:model Example --migration --controller --resource   
```

### Migrations:
**Normal migration:**
```
php artisan migrate   
```
**Fresh migration:**
```
php artisan migrate:fresh
```

### Adding Bootstrap Icons to your Laravel project:
Go to **resources\sass\app.scss** and add this line of code:
```php
@import '~bootstrap-icons/font/bootstrap-icons';
```

### Relations in an model:
Make sure you include the model of the relation:
```php
use App\Models\Example;
```

**Has many**
```php
public function example() {
  return $this->hasMany(Example::class);
}
```
**Belongs to**
```php
public function example() {
  return $this->belongsTo(Example::class);
}
```

### Relations in an migration:
```php
$table->unsignedBigInteger('example_id');
$table->foreign('example_id')->references('id')->on('example');
```
