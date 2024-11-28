<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowCarController;



Route::get('/', [HomeController::class, 'index']);

Route::view('/about', 'about')->name('about');












// this use domment file to define routes
// Route::get('/', function () {
//     $person = ['name' => 'John', 'age' => 30];
//     // dump($person);
//     // dd($person);    
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/product/{id}', function (string $id) {
//     return "Proudct ID=$id";
// });

// // Route Parameter Validation 
// Route::get('/product/{category?}', function (string $category = null) {
//     return "product category=$category";
// });

// // Route Parameter Regex Validation 
// Route::get('/product/{category?}', function (string $category = null) {
//     return "product category=$category";
// })->where('category', '[A-Za-z]+');

// // Route Parameter Validation 
// Route::get('{lang}/product/{id}', function (string $lang, string $id) {
//     // ...accordion-button
// })->where(['lang' => '[a-z]{2}', 'id' => '\d[4,]+']);

// // Route Parameter Validation 
// Route::get('/search/{search}', function (string $search) {
//     // ...accordion-button
//     return $search;
// })->where('search', '.+');

// //Named Routes
// Route::get('/', function () {
//     // $aboutPageUrl = route('/about');
//     $aboutPageUrl = route('about');
//     return view('welcome');
// })->name('product.show');

// Route::view('/about-us', 'about')->name('about');

// // Named Routes with Parameters
// Route::get('/', function () {
//     $productPageUrl = route('about');
//     $productUrl = route('product.view', ['lang' => 'en', 'id' => 1]);
//     return view('welcome');
// });

// Route::get('/about-us', 'about')->name('about');
// Route::get('/user/profile', function () {})->name('user.profile');
// Route::get('/current-user', function () {
//     return to_route('user.profile');
// });

// //route group
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/about', 'about')->name('about');

// Route::prefix('admin')->group(function () { 
//     Route::get('/user', function () {
//        return '/admin/user';
//     });
// });

// Route::prefix('admin')->group(function () { 
//     Route::get('/user', function () {
//        return '/user';
//     })->name('user');
// });

// //Fallback Routes 
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/about', 'about')->name('about');

// Route::fallback(function () {
//     return 'Page not found';
// });


// Route::get('/car', [CarController::class, 'index']);

// Route buy controller
// Route::controller(CarController::class)->group(function () {
//     Route::get('/car', 'index');
//     Route::get('/my-cars','myCars');
// });

// //single action controller
// Route::get('/car/invokable',CarController::class);
// Route::get('/car',[CarController::class,'index']);

