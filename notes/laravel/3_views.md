### Working with Views in Laravel 5.4

-   Creating Views:
    -   Views contain the HTML served by your application. They're stored in the `resources/views` directory.
    -   Here's how you return a view:

```
Route::get('/', function () {
    return view('greeting', ['name' => 'James']);
});
```

-   Passing Data to Views:
    -   As seen above, you can pass data to views by providing an array of data as the second parameter to the `view` function.

*Tip: Check out Blade, Laravel's powerful templating engine. It allows you to create layouts easily.*