# Laravel Notes

### Navigation
- Home
- [Installation / Basics](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/INSTALLATION.md)
- [Controller](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/CONTROLLER.md)
- [Model](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/MODEL.md)

### Useful sites:
- https://laravel.com/docs/8.x
- https://getbootstrap.com/docs/5.1/getting-started/introduction/


### Relations in an migration:
```php
$table->unsignedBigInteger('example_id');
$table->foreign('example_id')->references('id')->on('example');
```
