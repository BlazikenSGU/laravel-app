<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;

Route::get('/products', [
    ProductsController::class,
    'index'
])->name('products');

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);

// Route::get('products/{productName}', [
//     ProductsController::class,
//     'detail'
// ]);

// Route::get('/products/{id}', [
//     ProductsController::class,
//     'detail'
// ])->where('id', '[0-9]');


// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/users', function () {
//     return 'this is page user';
// });

// Route::get('/foods', function () {
//     return ['sushi', 'shashimi', 'tofu'];
// });

// Route::get('/aboutMe', function () {
//     return response()->json([
//         'name' => 'NGUYEN HOANG',
//         'email' => "tester123@gmail.com"
//     ]);
// });

// Route::get('/something', function () {
//     return redirect('/');
// });