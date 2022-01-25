# Laravel Cheatsheet: Installation / Basics

### Navigation
- [Home](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/README.md)
- Installation / Basics
- [Controller](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/CONTROLLER.md)
- [Model](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/MODEL.md)
- [Migrations](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/MIGRATIONS.md)

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

### Adding Bootstrap Icons to your Laravel project:
Go to **resources\sass\app.scss** and add this line of code:
```php
@import '~bootstrap-icons/font/bootstrap-icons';
```

### Clearing route cache:
```
php artisan route:cache
```

### CRUD buttons for table
```blade
<form action="{{ route('example.destroy', $example->id) }}" method="POST">
	<a href="{{route('example.show', $example->id)}}"><button type="button" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye-fill"></i></button></a>
	<a href="{{route('example.edit', $example->id)}}"><button type="button" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil-fill"></i></button></a>
	<button type="submit" onclick="return confirm('Weet u zeker dat u dit wilt verwijderen?')" class="btn btn-sm btn-outline-danger"><i class="bi bi-x-circle-fill"></i></button>
	@csrf
	@method('DELETE')
</form>
```

### Add button above table
```blade
<div class="d-flex justify-content-between">
    <h1>Example</h1>

    <div class="buttons">
        <a href="{{route('example.create')}}"><button type="button" class="btn btn-success"><i class="bi bi-plus-lg"></i> Toevoegen</button></a>
    </div>
</div>
```

### Notification
@if(session()->has('success'))
    <div class="alert alert-success my-3">
	{{ session()->get('success') }}
    </div>
@endif
