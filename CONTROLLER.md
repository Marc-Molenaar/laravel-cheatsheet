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

### Example Line editor
```php
// Check if TestLine exists
if($request->test_line):

	// Delete all test lines
	TestLine::where('test_id', 'LIKE', $test->id)->delete();

	foreach($request->test_line as $line):

		$example = Example::where('id', 'LIKE', $line['example_id'])->first();
		
		// Check if all required values aren't empty
		if( !empty($line['example_id']) &&
			!empty($example->price) &&
			!empty($line['amount'])
		):

			// Create TestLine
			TestLine::create([
				'example_id' => $line['example_id'],
				'test_id' => $test->id,
				'amount' => $line['amount'],
				'price' => $example->price,
				'description' => $line['description'],
			]);

		endif; // required values

	endforeach; // loop through TestLine

endif; // TestLine not empty
```
