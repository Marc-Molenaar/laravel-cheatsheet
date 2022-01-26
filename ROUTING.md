# Laravel Notes: Routing

### Navigation
- [Home](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/README.md)
- [Installation / Basics](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/INSTALLATION.md)
- [Controller](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/CONTROLLER.md)
- [Model](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/MODEL.md)
- [Migrations](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/MIGRATIONS.md)
- Routing

### Edit form example:
```blade
<form action="{{ route('example.store', $example->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="example">
    <input type="submit">
</form>
```

### Create form example:
```blade
<form action="{{ route('example.store') }}" method="POST">
    @csrf

    <input type="text" name="example">
    <input type="submit">
</form>
```

### CRUD endpoints
| Method | Path               | Action  | Route Name      |
|--------|--------------------|---------|-----------------|
| GET    | /example           | index   | example.index   |
| GET    | /example/{id}      | show    | example.show    |
| GET    | /example/create    | create  | example.create  |
| PUT    | /example/{id}      | update  | example.update  |
| GET    | /example/{id}/edit | edit    | example.edit    |
| DELETE | /example/{id}      | destroy | example.destroy |
