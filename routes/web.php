<?php

use Illuminate\Support\Facades\Route;
//this  is the Target Class reference
use App\Http\Controllers\GetquoteController;



Route::get('/', function () {
    return view('home');
});

//This Route is only for view that return without any mehtod and function
Route::view('home', 'home');
Route::view('process', 'process');
Route::view('about', 'about');
Route::view('services', 'services');
Route::view('portifolio', 'portifolio');
Route::view('blog', 'blog');
Route::view('post', 'post');
Route::view('createpost', 'createpost');
Route::view('getquotelist', 'getquotelist');
//Route::view('getquote', 'getquote');
/*Route::view('registeruser', 'registeruser');
Route::view('companydetails', 'companydetails');
//Route::view('customersay', 'customersay');
Route::view('entryportoflio', 'entryportoflio');*/

//My Auth or Login System routes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//these are contact routers
Route::get('contact', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact');
Route::post('contact', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact.store');
//the view of the controller contact 
Route::resource('contactlist', ContactController::class);
//here is the route for getquote and download link creation
Route::resource('getquote', GetquoteController::class);
//getquote things was very very bad to complete hahahahahha
Route::resource('books', 'GetquoteController');
Route::get('books/{uuid}/download', 'GetquoteController@download')->name('books.download');





 



