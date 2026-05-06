<?php

use App\Livewire\Admin\Brands\Index as BrandsIndex;
use App\Livewire\Admin\Brands\Create as BrandsCreate;
use App\Livewire\Admin\Brands\Edit as BrandsEdit;
use App\Livewire\Admin\Categories\Index as CategoriesIndex;
use App\Livewire\Admin\Categories\Create as CategoriesCreate;
use App\Livewire\Admin\Categories\Edit as CategoriesEdit;
use App\Livewire\Admin\Products\Index as ProductsIndex;
use App\Livewire\Admin\Products\Create as ProductsCreate;
use App\Livewire\Admin\Products\Edit as ProductsEdit;
use App\Livewire\Admin\Orders\Index as OrdersIndex;
use App\Livewire\Admin\Orders\Detail as OrdersDetail;
use App\Livewire\Admin\Sliders\Index as SlidersIndex;
use App\Livewire\Admin\Sliders\Create as SlidersCreate;
use App\Livewire\Admin\Sliders\Edit as SlidersEdit;
use App\Livewire\Admin\Coupons\Index as CouponsIndex;
use App\Livewire\Admin\Coupons\Create as CouponsCreate;
use App\Livewire\Admin\Coupons\Edit as CouponsEdit;
use App\Livewire\Admin\Users\Index as UsersIndex;
use App\Livewire\Admin\Settings\Index as SettingsIndex;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Cart;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\Shop;
use App\Livewire\User\Checkout;
use App\Livewire\User\Dashboard as UserDashboard;
use App\Livewire\Wishlist;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

// auth 
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

// user
Route::get('/', Home::class)->name('home');
Route::get('/shops', Shop::class)->name('shop');
Route::get('/cart', Cart::class)->name('cart');
Route::get('/wishlist', Wishlist::class)->name('wishlist');
Route::get('/contact', Contact::class)->name('contact');

Route::get('/user/dashboard', UserDashboard::class)->name('user.dashboard');
Route::get('/user/checkout', Checkout::class)->name('user.checkout');

// admin
Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');

Route::get('/admin/brands', BrandsIndex::class)->name('admin.brands.index');
Route::get('/admin/brands/create', BrandsCreate::class)->name('admin.brands.create');
Route::get('/admin/brands/id/edit', BrandsEdit::class)->name('admin.brands.edit');

Route::get('/admin/categories', CategoriesIndex::class)->name('admin.categories.index');
Route::get('/admin/categories/create', CategoriesCreate::class)->name('admin.categories.create');
Route::get('/admin/categories/id/edit', CategoriesEdit::class)->name('admin.categories.edit');

Route::get('/admin/products', ProductsIndex::class)->name('admin.products.index');
Route::get('/admin/products/create', ProductsCreate::class)->name('admin.products.create');
Route::get('/admin/products/id/edit', ProductsEdit::class)->name('admin.products.edit');

Route::get('/admin/orders', OrdersIndex::class)->name('admin.orders.index');
Route::get('/admin/orders/id', OrdersDetail::class)->name('admin.orders.detail');

Route::get('/admin/sliders', SlidersIndex::class)->name('admin.sliders.index');
Route::get('/admin/sliders/create', SlidersCreate::class)->name('admin.sliders.create');
Route::get('/admin/sliders/id/edit', SlidersEdit::class)->name('admin.sliders.edit');

Route::get('/admin/coupons', CouponsIndex::class)->name('admin.coupons.index');
Route::get('/admin/coupons/create', CouponsCreate::class)->name('admin.coupons.create');
Route::get('/admin/coupons/id/edit', CouponsEdit::class)->name('admin.coupons.edit');

Route::get('/admin/users', UsersIndex::class)->name('admin.users.index');

Route::get('/admin/settings', SettingsIndex::class)->name('admin.settings.index');

require __DIR__ . '/auth.php';
