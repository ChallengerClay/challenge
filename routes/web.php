<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ConsoleType;
use App\Http\Controllers\ConsoleTypeController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegionController;
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
        Route::get('/', [HomeController::class, 'getHome']);

        Route::get('about',[HomeController::class, 'getAbout']);
        
        Route::get('login',[LoginController::class, 'getLogin']);
        Route::post('login',[LoginController::class, 'postLogin']);
        
        Route::get('signup',[SignupController::class, 'getSignup']);
        Route::post('signup',[SignupController::class, 'postSignup']);
        
        Route::get('logout', [LoginController::class, 'getLogout']);
        
        Route::prefix('admin')->middleware(AdminUser::class)->group(
            function(){
                Route::get('/', [AdminController::class,'getIndex']);
                
                Route::resource('company',CompanyController::class);
                Route::resource('game',GameController::class);
                Route::resource('console_type',ConsoleTypeController::class);
                Route::resource('region',RegionController::class);
            }
        );
    }
);


