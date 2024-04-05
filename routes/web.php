<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::controller(PostController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::view('/feature','frontend.feature')->name('feature');
    Route::view('/service','frontend.service')->name('service');
    Route::view('/menu','frontend.menu')->name('menu');
    Route::view('/profile','frontend.profile')->name('profile');
    Route::view('/location','frontend.location')->name('location');
    Route::view('/login','frontend.login')->name('login');
    
});








































// <?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PostController;
// use Faker\Guesser\Name;



//  Route::controller(PostController::class)->group(function(){


// Route::view('/',)->name('homepage');
// Route::view('/program','frontend/program')->name('program');
// Route::view('/faculty','frontend/faculty')->name('faculty');
// Route::view('/event','frontend/event')->name('events');
// Route::view('/about','frontend/about')->name('about');
// Route::view('/club','frontend/club')->name('club');
// Route::view('/committee','frontend/committee')->name('committee');
// Route::view('/upcoming','frontend/upcoming')->name('upcoming');
// Route::get('/membership','membership')->name('membership');

// Route::get('students', 'index')->name('index');
// Route::get('/create', 'create')->name('create');
// Route::post('/store', 'store')->name('store');
// Route::get('/show/{id}', 'show')->name('show');
// Route::get('/edit/{id}', 'edit')->name('edit');
// Route::put('/update/{id}','update')->name('update');
// Route::delete('/delete/{id}', 'destroy')->name('delete');


//  });