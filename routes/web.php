<?php

// use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BuyNowController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\CaptchaServiceController;
use App\Http\Controllers\AdminControllers\HomePageController;
use App\Http\Controllers\AdminControllers\ProductsPageController;
use App\Http\Controllers\AdminControllers\ServicesPageController;
use App\Http\Controllers\AdminControllers\BuyNowPageController;
use App\Http\Controllers\AdminControllers\ManageContactController;
use App\Http\Controllers\MetaTagsController;
use Illuminate\Support\Facades\Route;
// use App\Models\MetaTagsModel;
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

Route::get('/', [HomeController::class, 'getProducts']);
// Route::get('/services', [HomeController::class, 'getProducts']);
Route::get('/careers', function () {
    return view('guest.pages.careers');
});
Route::get('/careers', function () {
    return view('guest.pages.careers');
});
Route::get('/investors', function () {
    return view('guest.pages.investors');
});
Route::get('/contact', function () {
    return view('guest.pages.contact');
});
// Route::get('/products', [ProductsController::class, 'index']);
// Route::get('/products/getProducts', [ProductsController::class, 'getProducts']);
// Route::get('/services', [ServicesController::class, 'getServices']);
// Route::get('/buynow', [BuyNowController::class, 'getResellers']);
// // Route::get('/contact', [ContactController::class, 'getContacts']);
// Route::post('/subscribe', [SubscribeController::class, 'subscribe'])->name('subscribe.post');



// Route::get('/contact', [ContactController::class, 'getContacts']);
// Route::post('/send-email', [ContactController::class, 'sendEmail']);
// // Route::post('/captcha-validation', [ContactController::class, 'capthcaFormValidate']);
// Route::get('/reload-captcha', [ContactController::class, 'reloadCaptcha']);


// Route::middleware(['auth:sanctum', 'verified'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('admin.pages.dashboard');
//     });
//     Route::get('/admin/dashboard', function () {
//         return view('admin.pages.dashboard');
//     });

//     Route::get('/admin/settings', [MetaTagsController::class, 'getMeta']);
//     Route::put('/admin/settings/meta_tags', [MetaTagsController::class, 'updateMetaTags'])->name('meta_tags.put');

//     Route::get('/admin/contact', [ManageContactController::class, 'getContacts']);
//     Route::put('/admin/contact', [ManageContactController::class, 'updateContacts'])->name('contact.put');


//     Route::get('/admin/characteristics', [HomePageController::class, 'getItems']);
//     Route::post('/admin/characteristics', [HomePageController::class, 'createItems'])->name('upload.post');
//     Route::put('/admin/characteristics', [HomePageController::class, 'createItems'])->name('upload.put');
//     Route::delete('/admin/characteristics/delete/', [HomePageController::class, 'destroyItem']);

//     Route::get('/admin/Images/resize', [HomePageController::class, 'resizeImage']);
//     Route::get('/admin/sliders', [HomePageController::class, 'getSliders']);
//     Route::post('/admin/sliders', [HomePageController::class, 'createSlider'])->name('slider.post');
//     Route::put('/admin/sliders', [HomePageController::class, 'createSlider'])->name('slider.put');
//     Route::delete('/admin/sliders/delete/', [HomePageController::class, 'destroySlider']);

//     Route::get('/admin/products', [ProductsPageController::class, 'getProducts']);
//     Route::post('/admin/products', [ProductsPageController::class, 'createProducts'])->name('products.post');
//     Route::put('/admin/products', [ProductsPageController::class, 'createProducts'])->name('products.put');
//     Route::delete('/admin/products/delete/', [ProductsPageController::class, 'destroy']);

//     Route::get('/admin/services', [ServicesPageController::class, 'getServices']);
//     Route::post('/admin/services', [ServicesPageController::class, 'createServices'])->name('services.post');
//     Route::put('/admin/services', [ServicesPageController::class, 'createServices'])->name('services.put');
//     Route::delete('/admin/services/delete/', [ServicesPageController::class, 'destroy']);

//     Route::get('/admin/resellers', [BuyNowPageController::class, 'getResellers']);
//     Route::post('/admin/resellers', [BuyNowPageController::class, 'createResellers'])->name('resellers.post');
//     Route::put('/admin/resellers', [BuyNowPageController::class, 'createResellers'])->name('resellers.put');
//     Route::delete('/admin/resellers/delete/', [BuyNowPageController::class, 'destroy']);

//     // captcha

// });
