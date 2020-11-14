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


// Authentication Routes...
Route::get('connexion', [
  'as' => 'login',
  'uses' => '\App\Http\Controllers\Auth\LoginController@showLoginForm'
]);
Route::post('connexion', [
  'as' => '',
  'uses' => '\App\Http\Controllers\Auth\LoginController@login'
]);
Route::post('deconnexion', [
  'as' => 'logout',
  'uses' => '\App\Http\Controllers\Auth\LoginController@logout'
]);

// Password Reset Routes...
Route::post('mot-de-passe/email', [
  'as' => 'password.email',
  'uses' => '\App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('mot-de-passe/reinitialisation', [
  'as' => 'password.request',
  'uses' => '\App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('mot-de-passe/reinitialisation', [
  'as' => 'password.update',
  'uses' => '\App\Http\Controllers\Auth\ResetPasswordController@reset'
]);
Route::get('mot-de-passe/reinitialisation/{token}', [
  'as' => 'password.reset',
  'uses' => '\App\Http\Controllers\Auth\ResetPasswordController@showResetForm'
]);

// Registration Routes...
Route::get('inscription', [
  'as' => 'register',
  'uses' => '\App\Http\Controllers\Auth\RegisterController@showRegistrationForm'
]);
Route::post('inscription', [
  'as' => '',
  'uses' => '\App\Http\Controllers\Auth\RegisterController@register'
]);

// End

Route::get('/', function () {
    return view('welcome');
})->name('index');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users','auth')->group(function() {

  // Index Admin
  Route::get('home', '\App\Http\Controllers\Admin\AdminViewController@index')->name('home');

  // Gestion des Utilisateurs par les Administrateurs
  Route::resource('users', '\App\Http\Controllers\Admin\UsersController');
  // Gestion des Offres par les Administrateurs
  Route::resource('offers', '\App\Http\Controllers\Admin\OffersController');
  // Gestion des Commandes par les Administrateurs
  Route::resource('orders', '\App\Http\Controllers\Admin\OrdersController');
  // Gestion des Roles par les Administrateurs
  Route::resource('roles', '\App\Http\Controllers\Admin\RolesController');
  // Gestion des Produits par les Administrateurs
  Route::resource('products', '\App\Http\Controllers\Admin\ProductsController');
  // Gestion des Etats des commandes par les Administrateurs
  Route::resource('states', '\App\Http\Controllers\Admin\StatesController');

});

  // Gestion des Comptes par les Utilisateurs
  Route::resource('users', '\App\Http\Controllers\UserController');
  // Gestion des Commandes par les Utilisateurs
  Route::resource('orders', '\App\Http\Controllers\OrderController');

  // Centre d'aide
  Route::get('help', '\App\Http\Controllers\UserViewController@help')->name('help');
  // Centre d'aide
  Route::get('about', '\App\Http\Controllers\UserViewController@about')->name('about');
  // Centre d'aide
  Route::get('contact', '\App\Http\Controllers\UserViewController@contact')->name('contact');
  // Centre d'aide
  Route::get('privacy', '\App\Http\Controllers\UserViewController@privacy')->name('privacy');
