<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Middleware\AdminUser;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return redirect(app()->getLocale());
});

Route::prefix('{locale}')
->middleware(Localization::class)
->group(
    function(){
        Route::get('/', [HomeController::class, 'getHome'])->name('');

        Route::get('about',[HomeController::class, 'getAbout'])->name('about');
        
        Route::get('login',[LoginController::class, 'getLogin'])->name('login');
        Route::post('login',[LoginController::class, 'postLogin']);
        
        Route::get('signup',[SignupController::class, 'getSignup']);
        Route::post('signup',[SignupController::class, 'postSignup']);
        
        Route::get('logout', [LoginController::class, 'getLogout'])->name('logout');
        
        Route::prefix('admin')->middleware(AdminUser::class)->group(
            function(){
                Route::get('/', [AdminController::class,'getIndex']);

                Route::resource('genre',GenreController::class);
            }
        );
    }
);


