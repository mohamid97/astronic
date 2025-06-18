<?php

use App\Http\Controllers\Front\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use function PHPSTORM_META\map;
use GuzzleHttp\Exception\RequestException;



use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [
            'web',
            'localeSessionRedirect',
            'localizationRedirect',
            'localeViewPath',
        ]
    ],
    function () {

        Route::get('/', [FrontendController::class , 'index'])->name('home');
        Route::get('/about-us' , [FrontendController::class , 'about'])->name('about');
        Route::get('/contact-us' , [FrontendController::class , 'contact'])->name('contact');
        Route::get('partners' , [FrontendController::class , 'partners'])->name('partners');
        Route::get('/blog' , [FrontendController::class, 'blog'])->name('blog');
        Route::get('/blog/{slug}' , [FrontendController::class, 'blog_details'])->name('blog_details');
        Route::get('/apps' , [FrontendController::class , 'services'])->name('services');
        Route::get('/app/{slug}' , [FrontendController::class, 'service_details'])->name('service_details');
        Route::get('category/{slug}' , [FrontendController::class, 'category_details'])->name('category_details');
        Route::get('/our-projects' , [FrontendController::class, 'projects'])->name('projects');
        Route::get('/project/{name}' , [FrontendController::class, 'project_details'])->name('project_details');
        Route::get('/category_product' , [FrontendController::class, 'category_product'])->name('category_product');
        Route::get('request/{product_id}' , [FrontendController::class, 'request'])->name('request');
        Route::post('/send/message' , [FrontendController::class, 'message'])->name('send.contact');
        Route::get('projects' , [FrontendController::class, 'projects'])->name('projects');




    }
);




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















//Route::get('/service/{slug}' , [FrontendController::class, 'service_details'])->name('service_details');
//Route::get('/get-services' , [FrontendController::class, 'get_service_category']);
//Route::get('/projects' , [FrontendController::class, 'projects'])->name('projects');
//Route::get('/latest_blog' , [FrontendController::class, 'latest_blog'])->name('latest_blog');
//
//
//// messsages from contacts
//
//Route::post('/send/message' , [FrontendController::class, 'message'])->name('send.contact');
//
//
//// payments
//Route::get('/pay' , function(){
//    return view('front.payments.index');
//});



// paypal  // used require srmklive/paypal:~3.0

// Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
// Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
// Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
// Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');