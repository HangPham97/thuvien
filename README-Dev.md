php artisan admin:make UserController --model=App\\User

$router->resource('demo/users', UserController::class);





php artisan admin:make BookController --model=App\\Book

$router->resource('demo/books', BookController::class);