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
Route::prefix('admin')
    ->namespace('Admin')
    ->group(function() {

    /**
     * Routes Profiles
    */
    
    // resource cria todas as rotas correspondente ao CRUD
    Route::resource('profiles','ACL\ProfileController');

    // Route::get('profiles','ACL\ProfileController@index')->name('profiles.index');
    // Route::post('profiles','ACL\ProfileController@store')->name('profiles.store');
    // Route::get('profiles/create','ACL\ProfileController@create')->name('profiles.create');
    // Route::delete('profiles/{id}','ACL\ProfileController@destroy')->name('profiles.destroy');
    // Route::put('profiles/{id}','ACL\ProfileController@update')->name('profiles.update');
    // Route::get('profiles/{id}','ACL\ProfileController@show')->name('profiles.show');
    // Route::get('profiles/{id}/edit','ACL\ProfileController@edit')->name('profiles.edit');


    /**
     *  Rotas Details Plans - Detalhes do Plano
     */
    Route::delete('plans/{url}/details/{idDetail}','DetailPlanController@destroy')->name('details.plan.destroy');
    Route::get('plans/{url}/details/{idDetail}/show','DetailPlanController@show')->name('details.plan.show');
    Route::put('plans/{url}/details/{idDetail}','DetailPlanController@update')->name('details.plan.update');
    Route::get('plans/{url}/details/{idDetail}/edit','DetailPlanController@edit')->name('details.plan.edit');
    Route::post('plans/{url}/details','DetailPlanController@store')->name('details.plan.store');
    Route::get('plans/{url}/details/create','DetailPlanController@create')->name('details.plan.create');
    Route::get('plans/{url}/details','DetailPlanController@index')->name('details.plan.index');

    /**
     * Rota dos Planos (plans)
     */
    Route::put('plans/{url}','PlanController@update')->name('plans.update');
    Route::any('plans/search', 'PlanController@search')->name('plans.search');
    Route::delete('plans/{url}','PlanController@destroy')->name('plans.destroy');
    Route::get('plans/{url}/show','PlanController@show')->name('plans.show');
    Route::post('plans','PlanController@store')->name('plans.store');
    Route::get('plans', 'PlanController@index')->name('plans.index');
    Route::get('plans/create', 'PlanController@create')->name('plans.create');
    Route::get('plans/{url}/edit','PlanController@edit')->name('plans.edit');
    /**
     *  Home Dashboard
     */
    Route::get('/', 'PlanController@index')->name('admin.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
