<?php

use Illuminate\Support\Facades\Route;

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

if (\Illuminate\Support\Facades\App::environment('production')) {
    \Illuminate\Support\Facades\URL::forceScheme('https');
}

Route::get('/', function () {
    return view('welcome');
});

Route::get("/register/merchant", App\Http\Livewire\Auth\ProviderReg::class)->name('auth.merchant');
Route::get("/register/member", App\Http\Livewire\Auth\MemberReg::class)->name('auth.member');
Route::get("/register/plans", App\Http\Livewire\Auth\Subscribe::class)->name('auth.plans');

/*front*/

Route::get('provider/type/{type}', App\Http\Livewire\Front\TypesPage::class)->name('shop.types');

Route::get('provider/{provider}', App\Http\Livewire\Front\ProviderProfileComponent::class)->name('shop.provider');
Route::get('providers', App\Http\Livewire\Front\ProvidersComponent::class)->name('shop.providers');

Route::get('categories', App\Http\Livewire\Front\Categories::class)->name('shop.categories');
Route::get('category/{category}', App\Http\Livewire\Front\SingleCategory::class)->name('shop.category');

Route::get('blogs', App\Http\Livewire\Front\BlogsComponent::class)->name('shop.blogs');
Route::get('article', App\Http\Livewire\Front\BlogComponent::class)->name('shop.blog');

Route::get('doctors', App\Http\Livewire\Front\DoctorsComponent::class)->name('shop.doctors');
Route::get('doctor', App\Http\Livewire\Front\DoctorComponent::class)->name('shop.doctor');



/*merchant*/

Route::get('dashboard', App\Http\Controllers\HomeController::class)->name('dashboard')->middleware(['auth:sanctum', 'verified']);
/*admin*/

Route::post('ckeditor/upload', [App\Http\Controllers\CKEditorController::class,'upload'])->name('ckeditor.image-upload');

Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->group( function (){

    Route::get('roles', App\Http\Livewire\RolesComponent::class)->name('roles');
    Route::get('users', App\Http\Livewire\UsersComponent::class)->name('users');
    Route::get('provider-type', App\Http\Livewire\Admin\ProviderType::class)->name('provider.type');
    Route::get('providers', App\Http\Livewire\Admin\ProviderComponent::class)->name('providers');

    Route::get('plans', App\Http\Livewire\Admin\PlansComponent::class)->name('plans');
    Route::get('subscriptions', App\Http\Livewire\Admin\SubscriptionsComponent::class)->name('subscriptions');

    Route::get('appointments/{provider}', App\Http\Livewire\Merchant\AppointmentsComponent::class)->name('appointments');
    Route::get('merchant-services/{merchant}', App\Http\Livewire\Merchant\ServicesComponent::class)->name('merchant.services');

    Route::get('service-category', App\Http\Livewire\Admin\ServiceCategoryComponent::class)->name('service.category');
    Route::get('services', App\Http\Livewire\Admin\ServiceComponent::class)->name('services');

    Route::get('provider/{provider}', App\Http\Livewire\Admin\SingleMerchantComponent::class)->name('provider.show');

    Route::get('create/post', App\Http\Livewire\Blog\CreatePost::class)->name('blog.create');
    Route::get('posts', App\Http\Livewire\Blog\PostsComponent::class)->name('blogs');
});


