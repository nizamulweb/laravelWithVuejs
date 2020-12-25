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

Route::get('/', function () {
    return view('front');
});


//admin site
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/servce','ServiceController@addService');
//Route::post('/mservce','ServiceController@createService');

// /Service Controller

Route::get('/service', [
'uses' => 'ServiceController@addService',
'as' => 'service']);

Route::post('/createservice', [
'uses' => 'ServiceController@createService',
'as' => 'createservice']);

Route::get('/manageservice', [
'uses' => 'ServiceController@manageService',
'as' => 'mservice']);


// CustomerController

Route::get('/customer', [
'uses' => 'CustomerController@addCustomer',
'as' => 'customer']);

Route::post('/createcustomer', [
'uses' => 'CustomerController@createCustomer',
'as' => 'createcustomer']);

Route::get('/managecustomer', [
'uses' => 'CustomerController@manageCustomer',
'as' => 'mcustomer']);

//
// CustomerServiceController

Route::get('/customerservice/{customerId}', [
'uses' => 'CustomerServiceController@addCustomerService',
'as' => 'customerservice']);

Route::post('/createcustomerservice/{customerId}', [
'uses' => 'CustomerServiceController@createCustomerService',
'as' => 'createcustomerservice']);



