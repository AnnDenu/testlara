<?php

use Illuminate\Support\Facades\Route;
/*Главная страница*/ 
Route::get('/home', [\App\Http\Controllers\MainController::class, 'home'])->name('home');
/*Страница о компании*/ 
Route::get('/about', [\App\Http\Controllers\MainController::class, 'about'])->name('about');
/*Отзывы*/ 
Route::get('/reviews', [\App\Http\Controllers\MainController::class, 'reviews'])->name('reviews');
/*Отзывы*/ 
Route::post('/reviews/check', [\App\Http\Controllers\MainController::class, 'reviews_check'])->name('reviews_check');
/*Вход*/ 
Route::middleware('guest')->group(function() {
	Route::get('/login', function () {
		return view('login');
	});
	
	Route::post('/login', 'App\Http\Controllers\AuthController@postSignin');
});
/*Регистрацаия*/ 
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
/*Каталог курсов*/ 
Route::get('/courses', [\App\Http\Controllers\MainController::class, 'courses'])->name('courses');
/*Личный кабинет*/
Route::get('/lk', [\App\Http\Controllers\MainController::class, 'lk'])->name('lk');
/*Личный кабинет*/
Route::get('/author', [\App\Http\Controllers\MainController::class, 'author'])->name('author');

Route::get('/post/user/{id}', function ($id){
	return 'пост'. $id;
})->where('id','[0-9]+');

?>