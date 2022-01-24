# Laravel Notes: Model

### Navigation
- [Home](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/README.md)
- [Installation / Basics](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/INSTALLATION.mdt)
- [Controller](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/CONTROLLER.mdt)
- Model

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
