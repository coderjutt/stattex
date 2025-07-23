<?php

use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ServicesController;
use App\Http\Controllers\Dashboard\SubServiceController;
use App\Http\Controllers\Dashboard\ProductsController;
use App\Http\Controllers\Dashboard\SubscriberController;


// frontend Routes 
Route::get('/',[FrontendController::class,'index'])->name('home');
Route::get('about_us',[FrontendController::class,'about'])->name('about_us');
Route::get('services',[FrontendController::class,'services'])->name('services');
Route::get('products',[FrontendController::class,'product'])->name('product');
Route::get('contact',[FrontendController::class,'contact'])->name('contact');
Route::post('/contact', [FrontendController::class, 'submitContactForm'])->name('contact.submit');
Route::post('/subscribers/store', [SubscriberController::class, 'store'])->name('subscribers.store');
Route::get('/subscribers/store', function () {
    return redirect('/'); // or wherever you want to send people
});



// Route::get('/Dashboard', function () {
//     return view('Dashboard.index');
// });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
//    admin pannel
    Route::get('admin_dashboard',[DashboardController::class,'index'])->name('dashboard');
    
    // Services
    Route::get('admin/services',[ServicesController::class,'index'])->name('admin_services');
    Route::get('admin/services/create',[ServicesController::class,'create'])->name('admin_services_create');
    Route::post('admin/services/create',[ServicesController::class,'store'])->name('services.store');
    Route::get('admin/services/{id}/edit', [ServicesController::class, 'edit'])->name('admin_services_edit');
    Route::put('admin/services/{service}', [ServicesController::class, 'update'])->name('admin_services_update');
    Route::delete('admin/services/{id}', [ServicesController::class, 'destroy'])->name('admin_services_destroy');
     
    // subservices
    Route::get('admin/subservices',[SubServiceController::class,'index'])->name('admin_subservices');
    Route::get('admin/subservices/create',[SubServiceController::class,'create'])->name('admin_subservices_create');
    Route::post('admin/subservices/create',[SubServiceController::class,'store'])->name('subservices.store');
    Route::delete('admin/subservices/{id}', [SubServiceController::class, 'destroy'])->name('admin_subservices_destroy');
    Route::get('admin/subservices/{id}/edit', [SubServiceController::class, 'edit'])->name('admin_subservices_edit');
    Route::put('admin/subservices/{subservice}', [SubServiceController::class, 'update'])->name('admin_subservices_update');
    // products
    Route::get('admin/products',[ProductsController::class, ('index')])->name('admin_products');
    Route::get('admin/products/create',[ProductsController::class, ('create')])->name('admin_products_create');
    Route::post('admin/products/create',[ProductsController::class, ('store')])->name('admin_products_store');
    Route::delete('admin/product/delete/{id}',[ProductsController::class,"destroy"])->name("admin_product_destroy");
    Route::get('admin/products/{id}/edit',[ProductsController::class,'edit'])->name('admin_product_edit');
    Route::put('admin/product/{product}', [ProductsController::class, 'update'])->name('admin_product_update');

    Route::get('admin/users',[UserController::class,'index'])->name('admin_users');
    Route::get('admin/users/create',[UserController::class,'create'])->name('admin_users_create');
    Route::post('admin/users/create',[UserController::class,'store'])->name('admin_users_store');
    Route::delete('admin/users/{id}', [UserController::class, 'destroy'])->name('admin_users_destroy');

    // subscribers
    Route::get('admin/subscribers',[SubscriberController::class,'index'])->name('admin_subscribers');
    Route::get('/admin/subscribers/export', [SubscriberController::class, 'export'])->name('subscribers.export');


});

require __DIR__.'/auth.php';
