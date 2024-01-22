<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Subscriber; //import laravel controller from the directory file
use App\Http\Controllers\SubsController; // import laravel controller from the directory file
use App\Http\Controllers\donateController; // import laravel controller from the directory file
use App\Http\Controllers\LoginController;// import laravel controller from the directory file
use App\Http\Controllers\UsersController;// import laravel controller from the directory file
use App\Http\Controllers\MemberController;// import laravel controller from the directory file
use App\Http\Controllers\BanController;// import laravel controller from the directory file
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Method 1 ===========================================
Route::get('/', function () {
    return view('welcome');
});
// Method 2 ==========================================
Route::view("home",'home');

// Home Page =========================================
// @ about.blade.php
        Route::get("/about",function(){
            return view('about');
        });

// @ donate.blade.php
        // Route::get('/donate',function(){
        //     return view('donate');
        // });

// @ chronicle.blade.php => pass data without routing
//      Route::get('/{career}',function($career){
//          return view('chronicle',['career'=>$career]);
//      });
        Route::get('/chronicle',function(){
            return view('chronicle');
        });
// =======================================================

// Controller file: Subscriber.php========================
        Route::get("user/{userName}",[Subscriber::class,'helloController']);
//========================================================

// View file: subscriber.blade.php========================
        // Route::get("/subs",function(){
        //     return view("subscriber");
        // });
//========================================================

// Conroller file: SubsController.php=====================
        Route::get("/subs/{nameSubss}",[SubsController::class,'loadSubs']);
//========================================================

// Conroller file: donateController.php=====================
        Route::get("donate",[donateController::class,'loadDonate']);
//========================================================

// Conroller file for : POST       LoginController.php===========
        Route::post("login",[LoginController::class,'getData']);
//========================================================

// Conroller file for : LoginController.php============
        Route::view("login",'login');
//========================================================

// View file for : patrion.blade.php============
        Route::view('patrion','patrion')->name('patrion');
//===============================================

// View file for : noaccess.blade.php============
        Route::view("noaccess","noaccess");
//===============================================

// View file for : noaccess_2.blade.php============
        Route::get('noaccess_2', function () {
                return view('noaccess_2');
        })->middleware('protectedPage2')->name('noaccess_2');
//===============================================

// Middleware for 2 view file : patrion.blade.php & home.blade.php ============
        Route::group(['middleware'=>['protectedPage']],function(){
                Route::view('patrion','patrion')->name('patrion');
                Route::view("home",'home');
        });
//===============================================

// View file for : congrats.blade.php============
Route::view("congrats","congrats");
//===============================================


// View file for : users.blade.php============
Route::get("users",[UsersController::class,'userData']);
//===============================================

// Controller file for : MemberController.php============
Route::get("members",[MemberController::class,'getData']);
//=======================================================

// Controller file for : BanController.php============
Route::get("ban",[BanController::class,'displayBan']);
//=======================================================
