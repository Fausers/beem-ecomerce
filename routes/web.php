<?php

use App\Http\Controllers\Commerce\AddressController;
use App\Http\Controllers\Commerce\BlogController;
use App\Http\Controllers\Commerce\CartController;
use App\Http\Controllers\Commerce\OrderController;
use App\Http\Controllers\Commerce\WebsiteController;
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
| Middleware options can be located in `app/Http/Kernel.php`
|
*/

// Homepage Route
Route::group(['middleware' => ['web', 'checkblocked']], function () {
    Route::get('/', 'App\Http\Controllers\WelcomeController@welcome')->name('welcome');
    Route::get('/terms', 'App\Http\Controllers\TermsController@terms')->name('terms');
    Route::get('/contact_us', [WebsiteController::class,'contactUs'])->name('contact_us');
    Route::get('/stores', [WebsiteController::class,'stores'])->name('stores');

    Route::get('category/{name}', [WebsiteController::class,'category'])->name('category');

    Route::get('/response', [OrderController::class,'response'])->name('response');
    Route::get('/categs', [OrderController::class,'categs'])->name('categs');
    Route::get('/balance', [OrderController::class,'app'])->name('balance');
    Route::get('/iframe', [OrderController::class,'iframe'])->name('iframe');
    Route::get('/callback', [OrderController::class,'beemPay'])->name('callback');

    Route::get('/products_grid', [WebsiteController::class,'grid'])->name('grid');
    Route::get('/products_list', [WebsiteController::class,'list'])->name('list');
    Route::get('/products/{id}/{name}', [WebsiteController::class,'product'])->name('product');

    //    Cart
    Route::get('/checkout', [CartController::class,'showCart'])->name('checkout');
    Route::get('/cart/add/{id}', [CartController::class,'addProduct'])->name('add_to_cart');

    Route::get('/cart', [CartController::class,'pay'])->name('pay');

//    Blog
    Route::get('/tips', [BlogController::class,'index'])->name('tips');
    Route::get('/tips/tip/{id}/{name}', [BlogController::class,'post'])->name('tip');

//    OTP
    Route::get('/otp', [OrderController::class,'otp'])->name('otp');
    Route::get('/otp/verify', [OrderController::class,'pinVerify'])->name('verify_otp');
});

// Authentication Routes
Auth::routes();

// Public Routes
Route::group(['middleware' => ['web', 'activity', 'checkblocked']], function () {

    // Activation Routes
    Route::get('/activate', ['as' => 'activate', 'uses' => 'App\Http\Controllers\Auth\ActivateController@initial']);

    Route::get('/activate/{token}', ['as' => 'authenticated.activate', 'uses' => 'App\Http\Controllers\Auth\ActivateController@activate']);
    Route::get('/activation', ['as' => 'authenticated.activation-resend', 'uses' => 'App\Http\Controllers\Auth\ActivateController@resend']);
    Route::get('/exceeded', ['as' => 'exceeded', 'uses' => 'App\Http\Controllers\Auth\ActivateController@exceeded']);

    // Socialite Register Routes
    Route::get('/social/redirect/{provider}', ['as' => 'social.redirect', 'uses' => 'App\Http\Controllers\Auth\SocialController@getSocialRedirect']);
    Route::get('/social/handle/{provider}', ['as' => 'social.handle', 'uses' => 'App\Http\Controllers\Auth\SocialController@getSocialHandle']);

    // Route to for user to reactivate their user deleted account.
    Route::get('/re-activate/{token}', ['as' => 'user.reactivate', 'uses' => 'App\Http\Controllers\RestoreUserController@userReActivate']);
});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'checkblocked']], function () {

    // Activation Routes
    Route::get('/activation-required', ['uses' => 'App\Http\Controllers\Auth\ActivateController@activationRequired'])->name('activation-required');
    Route::get('/logout', ['uses' => 'App\Http\Controllers\Auth\LoginController@logout'])->name('logout');
});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'twostep', 'checkblocked']], function () {

    //  Homepage Route - Redirect based on user role is in controller.
    Route::get('/home', ['as' => 'public.home',   'uses' => 'App\Http\Controllers\UserController@index']);

    // Show users profile - viewable by other users.
    Route::get('profile/{username}', [
        'as'   => '{username}',
        'uses' => 'App\Http\Controllers\ProfilesController@show',
    ]);

    Route::get('/account', [WebsiteController::class,'account'])->name('account');
    Route::get('/account/orders', [WebsiteController::class,'orders'])->name('orders');
    Route::get('/account/open_orders', [WebsiteController::class,'openOrders'])->name('open_orders');
    Route::get('/account/cancelled_orders', [WebsiteController::class,'cancelledOrders'])->name('cancelled_orders');
    Route::get('/account/wishlist', [WebsiteController::class,'wishlist'])->name('wishlist');
//    Address
    Route::get('/account/addresses', [WebsiteController::class,'address'])->name('addresses');
    Route::get('/account/addresses/set_default/{id}', [AddressController::class,'setDefault'])->name('default_address');
    Route::get('/account/addresses/delete/{id}', [AddressController::class,'destroy'])->name('delete_address');
    Route::post('/account/address/store', [AddressController::class,'store'])->name('store_address');

    Route::get('/account/payments', [WebsiteController::class,'payments'])->name('payments');
    Route::get('/account/security', [WebsiteController::class,'security'])->name('security');
    Route::get('/account/notifications', [WebsiteController::class,'notifications'])->name('notifications');

//  Payments
    Route::get('/cart/pay/online', [OrderController::class,'beemPay'])->name('online');
    Route::get('/cart/pay/delivery', [OrderController::class,'deliveryOrder'])->name('delivery');

});

// Registered, activated, and is current user routes.
Route::group(['middleware' => ['auth', 'activated', 'currentUser', 'activity', 'twostep', 'checkblocked']], function () {

    // User Profile and Account Routes
    Route::resource(
        'profile',
        \App\Http\Controllers\ProfilesController::class,
        [
            'only' => [
                'show',
                'edit',
                'update',
                'create',
            ],
        ]
    );
    Route::put('profile/{username}/updateUserAccount', [
        'as'   => '{username}',
        'uses' => 'App\Http\Controllers\ProfilesController@updateUserAccount',
    ]);
    Route::put('profile/{username}/updateUserPassword', [
        'as'   => '{username}',
        'uses' => 'App\Http\Controllers\ProfilesController@updateUserPassword',
    ]);
    Route::delete('profile/{username}/deleteUserAccount', [
        'as'   => '{username}',
        'uses' => 'App\Http\Controllers\ProfilesController@deleteUserAccount',
    ]);

    // Route to show user avatar
    Route::get('images/profile/{id}/avatar/{image}', [
        'uses' => 'App\Http\Controllers\ProfilesController@userProfileAvatar',
    ]);

    // Route to upload user avatar.
    Route::post('avatar/upload', ['as' => 'avatar.upload', 'uses' => 'App\Http\Controllers\ProfilesController@upload']);
});

// Registered, activated, and is admin routes.
Route::group(['middleware' => ['auth', 'activated', 'role:admin', 'activity', 'twostep', 'checkblocked']], function () {
    Route::resource('/users/deleted', \App\Http\Controllers\SoftDeletesController::class, [
        'only' => [
            'index', 'show', 'update', 'destroy',
        ],
    ]);

    Route::resource('users', \App\Http\Controllers\UsersManagementController::class, [
        'names' => [
            'index'   => 'users',
            'destroy' => 'user.destroy',
        ],
        'except' => [
            'deleted',
        ],
    ]);
    Route::post('search-users', 'App\Http\Controllers\UsersManagementController@search')->name('search-users');

    Route::resource('themes', \App\Http\Controllers\ThemesManagementController::class, [
        'names' => [
            'index'   => 'themes',
            'destroy' => 'themes.destroy',
        ],
    ]);

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('routes', 'App\Http\Controllers\AdminDetailsController@listRoutes');
    Route::get('active-users', 'App\Http\Controllers\AdminDetailsController@activeUsers');
});

Route::redirect('/php', '/phpinfo', 301);
