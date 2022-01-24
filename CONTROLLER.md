# Laravel Cheatsheet: Controller

### Navigation
- [Home](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/README.md)
- [Installation](https://github.com/Sjoerd-69/laravel-cheatshee/blob/main/INSTALLATION.mdt)
- Controller
- [Model](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/MODEL.md)

### Update Controller
```php
$request->validate([
	'name' => 'required',
]);

$test->update($request->all());

return redirect()->route('test.index')
                 ->with('success','Succesvol aangepast');
```


### Store controller
```php
$request->validate([
	'name' => 'required',
]);

Test::create($request->all());

return redirect()->route('test.index')->with('success','Toegevoegd');
```


### Destroy controller
```php
$test->delete();
    
return redirect()->route('test.index')
                 ->with('success','Verwijderd');
```
