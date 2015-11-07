<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

	//////////////////ROUTE-GET/////////////////////////////

	Route::get('auth/login', 'Auth\AuthController@getLogin');

	Route::get('503', function(){
		return view('errors.503');
	});

		/////////////////////E-SHOPPER/////////////////////////
		Route::get('blog', 'ShopperController\ShopperController@getBlog');
		Route::get('blogs', 'ShopperController\ShopperController@getBlogSingle');
		Route::get('cart', 'ShopperController\ShopperController@getCart');
		Route::get('checkout', 'ShopperController\ShopperController@getCheckout');
		Route::get('contact', 'ShopperController\ShopperController@getContactUs');
		Route::get('product-detail', 'ShopperController\ShopperController@getProductDetail');
		Route::get('shop', 'ShopperController\ShopperController@getShop');
		////////////////////////////////////////////////////////


		///////////////////METRO-DASHBOARD//////////////////////
		Route::get('admin/auth/login', 'Auth\AuthController@getLogin');
		////////////////////////////////////////////////////////

	////////////////////////////////////////////////////////

	/////////////////////ROUTE-POST/////////////////////////

		///////////////////METRO-DASHBOARD//////////////////////
		Route::post('admin/auth/login', 'Auth\AuthController@postLogin');
		////////////////////////////////////////////////////////

	////////////////////////////////////////////////////////

	//////////////////ROUTE-CONTROLLER//////////////////////

	Route::controller('admin/dashboard', 'AdminDashboardController\AdminDashBoardController');
	Route::controller('/', 'ShopperController\ShopperController');

	////////////////////////////////////////////////////////



?>