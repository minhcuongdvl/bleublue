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

Route::get('/', 'BleuController@index');

Route::get('/list-product', ['as'=>'list-product','uses'=>'ListController@index']);

Route::get('/list-productcat/{slug}', ['as'=>'list-productcat','uses'=>'ListController@listcatproduct']);

Route::get('/detail-product/{id}', ['as'=>'detail-product','uses'=>'DetailController@detailproduct']);

Route::get('/detail-product', 'DetailController@index');




Route::group(['prefix'=>'bleu-blue'],function(){
   Route::group(['prefix'=>'admin'], function (){
       Route::get('category', ['as'=>'listcate','uses'=>'AdminCatController@index']);
       
       Route::get('addcategory', ['as'=>'addcate','uses'=>'AdminCatController@addcategory']);
       Route::post('addcategory', ['as'=>'postcate','uses'=>'AdminCatController@postcategory']);
       
       Route::get('deletecategory/{id}', ['as'=>'deletecategory','uses'=>'AdminCatController@deletecategory']);

       Route::get('editcategory/{id}', ['as'=>'editcategory','uses'=>'AdminCatController@editcategory']);
       Route::post('editcategory/{id}', ['as'=>'editcategory','uses'=>'AdminCatController@posteditcategory']);

   });
     Route::group(['prefix'=>'admin'], function (){
       Route::get('product', ['as'=>'listproduct','uses'=>'AdminProductController@index']);
       Route::get('addproduct', ['as'=>'addproduct','uses'=>'AdminProductController@addproduct']);
       Route::post('addproduct', ['as'=>'postproduct','uses'=>'AdminProductController@postproduct']);

       Route::get('deleteproduct/{id}', ['as'=>'deleteproduct','uses'=>'AdminProductController@deleteproduct']);

       Route::get('editproduct/{id}', ['as'=>'editproduct','uses'=>'AdminProductController@editproduct']);
       Route::post('editproduct/{id}', ['as'=>'editproduct','uses'=>'AdminProductController@posteditproduct']);
       

   });
});


Route::get('/home', ['as'=>'home','uses'=>'LoginController@index']);
Route::post('/home', ['as'=>'home','uses'=>'LoginController@postLogin']);

Route::post('/registered', ['as'=>'registered','uses'=>'LoginController@registered']);






