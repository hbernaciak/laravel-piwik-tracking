My first Laravel package via composer done just for learning :)
But works, if you want to use Piwik tracking code in your project :)


## Usage

Add this middleware to the last array element to $middleware array in /app/Http/Kernel.php:

```php
protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        ...
        \App\Http\Middleware\PiwikCode::class
    ];
```

