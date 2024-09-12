<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Comment\CommentController;
use App\Http\Controllers\Admin\QuoteController;
;
//use Inertia\Inertia;

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

/**Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
*/
Route::get('/', [PagesController::class, 'index']);
Route::get('/it-services', [PagesController::class, 'itservices']);
Route::get('/it-services-detail', [PagesController::class, 'it_services_detail']);
Route::get('/case-study', [PagesController::class, 'case_study'])->name('case-study');
Route::get('/case-study-detail', [PagesController::class, 'case_study_detail'])->name('case-study-detail');
Route::get('/about-us', [PagesController::class, 'about_us'])->name('about-us');



//contact controller
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/request', [ContactController::class, 'request']);
Route::post('/request', [ContactController::class, 'request_store']);
Route::post('/contact', [ContactController::class, 'store']);
Route::post('/', [ContactController::class, 'message']);
//blog controller
Route::get('/blog', [BlogController::class, 'blog']);
//Route::get('/blog-detail', [BlogController::class, 'blog_detail']);
Route::get('/blog-detail/{id}', [BlogController::class, 'show']);

//Route::get('/dashboard', function () {
   // return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//require __DIR__.'/auth.php';
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::group(['middleware'=>['auth','user']], function(){
Route::get('/admin', [DashboardController::class, 'dashboard'])->name('admin');
Route::get('/role-register', [DashboardController::class, 'register']);
Route::get('/role-edit/{id}',[DashboardController::class,'registerededit']);
Route::put('/role-register-update/{id}',[DashboardController::class,'registeredeupdate']);
Route::delete('/role-delete/{id}',[DashboardController::class,'registerdelete']);
Route::get('/createblog',[DashboardController::class,'create_blog']);
Route::post('/createblog',[ArticleController::class,'store']);
Route::get('/blogtable',[ArticleController::class,'index']);
Route::get('/editblog/{id}',[ArticleController::class,'show']);
Route::put('/editblog/{id}',[ArticleController::class,'update']);
Route::delete('/editblog/{id}',[ArticleController::class,'destroy']);
Route::get('/quote',[QuoteController::class,'index']);
Route::delete('/quote/{id}',[QuoteController::class,'destroy']);
}); 

//comments route
Route::get('/blog-detail',[CommentController::class,'store']);
Route::post('/blog-detail/{id}',[CommentController::class,'store']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
