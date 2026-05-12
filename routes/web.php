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
use App\Livewire\ProductDetail;
use App\Livewire\Shop;
use App\Livewire\User\Checkout;
use App\Livewire\User\Dashboard as UserDashboard;
use App\Livewire\User\OrderDetail as UserOrderDetail;
use App\Livewire\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/shops', Shop::class)->name('shop');
Route::get('/product-detail/{product:slug}', ProductDetail::class)->name('product.detail');
Route::get('/contact', Contact::class)->name('contact');

// auth 
Route::middleware('guest')->group(function () {
  Route::get('/login', Login::class)->name('login');
  Route::get('/register', Register::class)->name('register');
});

// customer
Route::prefix('user')->middleware('auth')->name('user.')->group(function () {
  Route::get('/dashboard', UserDashboard::class)->name('dashboard');
  Route::get('/orders/{order}', UserOrderDetail::class)->name('orders.detail');
  Route::get('/checkout', Checkout::class)->name('checkout');
  Route::get('/cart', Cart::class)->name('cart');
  Route::get('/wishlist', Wishlist::class)->name('wishlist');
});

// admin
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
  Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');

  Route::get('/brands', BrandsIndex::class)->name('admin.brands.index');
  Route::get('/brands/create', BrandsCreate::class)->name('admin.brands.create');
  Route::get('/brands/{brand}/edit', BrandsEdit::class)->name('admin.brands.edit');

  Route::get('/categories', CategoriesIndex::class)->name('admin.categories.index');
  Route::get('/categories/create', CategoriesCreate::class)->name('admin.categories.create');
  Route::get('/categories/{category}/edit', CategoriesEdit::class)->name('admin.categories.edit');

  Route::get('/products', ProductsIndex::class)->name('admin.products.index');
  Route::get('/products/create', ProductsCreate::class)->name('admin.products.create');
  Route::get('/products/{product}/edit', ProductsEdit::class)->name('admin.products.edit');

  Route::get('/orders', OrdersIndex::class)->name('admin.orders.index');
  Route::get('/orders/{order}', OrdersDetail::class)->name('admin.orders.detail');

  Route::get('/sliders', SlidersIndex::class)->name('admin.sliders.index');
  Route::get('/sliders/create', SlidersCreate::class)->name('admin.sliders.create');
  Route::get('/sliders/{slider}/edit', SlidersEdit::class)->name('admin.sliders.edit');

  Route::get('/coupons', CouponsIndex::class)->name('admin.coupons.index');
  Route::get('/coupons/create', CouponsCreate::class)->name('admin.coupons.create');
  Route::get('/coupons/{coupon}/edit', CouponsEdit::class)->name('admin.coupons.edit');

  Route::get('/users', UsersIndex::class)->name('admin.users.index');

  Route::get('/settings', SettingsIndex::class)->name('admin.settings.index');
});

Route::get('/session', function (Request $request) {
  dd($request->session());
});

require __DIR__ . '/auth.php';
