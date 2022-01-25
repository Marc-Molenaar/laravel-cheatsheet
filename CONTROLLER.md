# Laravel Notes: Controller

### Navigation
- [Home](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/README.md)
- [Installation / Basics](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/INSTALLATION.md)
- Controller
- [Model](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/MODEL.md)
- [Migrations](https://github.com/Sjoerd-69/laravel-cheatsheet/blob/main/MIGRATIONS.md)

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


### Insert row with pre-defined values
```php
Example::create([
    'value1' => $example
]);
```

### Add DB class to controller
```php
use Illuminate\Support\Facades\DB;
```


### Select first row from table where statement
```php
$example = DB::table('example')->where('id', '=', $test)->first();
```


### Select all rows from table where statement
```php
$example = DB::table('example')->where('id', '=', $test)->get();
```


### Delete all rows from table where statement
```php
DB::table('example')->where('id', '=', $test)->delete();
```
