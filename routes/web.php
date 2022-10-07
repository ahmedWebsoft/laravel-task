<?php

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

const cms = 'CMS\\';
const auth = 'Auth\\';

//auth middlware and user stats
// userStatus checks to see if the person is active or not
// session work
Route::group(['middleware' => ['auth', 'userStatus']], function () {

    //     .oooooo.   ooo        ooooo  .oooooo..o
    //     d8P'  `Y8b  `88.       .888' d8P'    `Y8
    //    888           888b     d'888  Y88bo.
    //    888           8 Y88. .P  888   `"Y8888o.
    //    888           8  `888'   888       `"Y88b
    //    `88b    ooo   8    Y     888  oo     .d8P
    //     `Y8bood8P'  o8o        o888o 8""88888P'

    //here lies cms routesasdasdas
    Route::post('logout', auth . 'LoginController@logout')->name('logout');

    Route::namespace(cms)->group(function () {

        // blank page
        Route::get('/', 'DashboardController@empty')->name('empty');

        //Datatables ajax
        Route::get('/users/datatable', 'UsersController@datatable')->name('users.datatable');
        Route::get('/roles/datatable', 'RoleController@datatable')->name('roles.datatable');
        
        // Task ------------------$$$ DataTables $$$--------------------------------------------[[
        //----------------------------------------------------------------------------------
        
        

        // Ajax Gets Validation
        Route::get('/users/validater/{id}', 'UsersController@validater')->name('users.validater');
        Route::get('/roles/validater/{id}', 'RoleController@validater')->name('roles.validater');

    });

    // permission middlware
    //checks to see if the user has persmission or not

    // menuStatus middlware
    // check to see if the menus on the right hand sides are active
    Route::group(['middleware' => ['permission', 'menuStatus']], function () {
        Route::namespace(cms)->group(function () {
            // Media
            // Route::get('/media', 'MediaGalleryController@index')->name('media');

            // dashboard
            Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

            //users
            Route::get('/users', 'UsersController@index')->name('users');
            Route::get('/users/create', 'UsersController@create')->name('users.create');
            Route::post('/users/store', 'UsersController@store')->name('users.store');
            Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::put('/users/{user}/update', 'UsersController@update')->name('users.update');
            Route::patch('/users/status', 'UsersController@status')->name('users.status');
            Route::delete('/users/destroy', 'UsersController@destroy')->name('users.destroy');

            // User Self Settings
            Route::get('/users/settings', 'UsersController@settings')->name('users.settings');
            Route::patch('/users/settings', 'UsersController@patch')->name('users.settings');

            //users
            Route::get('/roles', 'RoleController@index')->name('roles');
            Route::get('/roles/create', 'RoleController@create')->name('roles.create');
            Route::post('/roles/store', 'RoleController@store')->name('roles.store');
            Route::get('/roles/{role}/edit', 'RoleController@edit')->name('roles.edit');
            Route::put('/roles/{role}/update', 'RoleController@update')->name('roles.update');
            Route::delete('/roles/destroy', 'RoleController@destroy')->name('roles.destroy');

            //Payment..
            Route::post('/payment','MoneySetupController@postPaymentStripe')->name('payment');
           
            //------------------------------------------------------------------------------------------------------->
  
        });
    });
});

// ooooo                              o8o
// `888'                              `"'
//  888          .ooooo.   .oooooooo oooo  ooo. .oo.
//  888         d88' `88b 888' `88b  `888  `888P"Y88b
//  888         888   888 888   888   888   888   888
//  888       o 888   888 `88bod8P'   888   888   888
// o888ooooood8 `Y8bod8P' `8oooooo.  o888o o888o o888o
//                        d"     YD
//                        "Y88888P'

//here lies cms login routes
Route::namespace(auth)->group(function () {
    // session work
    // special routes for fogetting session history
    Route::post('login/forget', 'SessionController@destroyAndLogin')->name('login.forget');

    Route::group(['middleware' => ['guest']], function () {

        // login route for cms start

        // Authentication Routes...
        Route::get('login', 'LoginController@showLoginForm')->name('login');
        Route::post('login', 'LoginController@checkTwoFactor')->name('login');

        Route::group(['middleware' => ['userStatus']], function () {
            // Two factor Authentication
            Route::get('verify', 'LoginController@verify')->name('verify');
            Route::post('verify', 'LoginController@validateTwoFactor')->name('verify');
        });

        // Password Reset Routes...
        Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'ResetPasswordController@reset');

        // login route for cms end
    });
});

Route::get('exzed/cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    return 'cache clear';
});
