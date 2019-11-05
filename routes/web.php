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

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    
    return "Cache is cleared";
});

Route::get('test-mail', function(){

    return 
        new App\Mail\NotifAdminDevis( 'houssem' , 'houssem@gmail.com', 'service 1' , 'msg');
});


Route::get('/', 'FrontController@index')->name('root_path');
Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact', 'ContactController@store')->name('contact.store');
Route::post('/demende-devis', 'DevisController@store')->name('devis.store');

Route::group(['prefix' => 'conseil-creation'], function () {

    Route::get('conseil', 'ServicesController@Conseil')->name('Conseil.index');

    Route::get('conseil/diagnostic-strategique', 'ServicesController@Conseil_diagnostic_strategique')
        ->name('Conseil_diagnostic_strategique.index')
    ;

    Route::get('conseil/strategie-de-communication', 'ServicesController@Conseil_strategie_communication')
        ->name('Conseil_strategie_communication.index')
    ;
});

Route::get('accompagnement', 'ServicesController@Accompagnement')->name('Accompagnement.index');

Route::group(['prefix' => 'identite-visuelle'], function () {

    Route::get('/', 'ServicesController@Identite_visuelle')
        ->name('Identite_visuelle.index')
    ;

    Route::get('/identite-visuelle', 'ServicesController@Identite_visuelle_Identite_visuelle')
        ->name('Identite_visuelle_Identite_visuelle.index')
    ;

    Route::get('/naming', 'ServicesController@Identite_visuelle_Naming')
        ->name('Identite_visuelle_Naming.index')
    ;

    Route::get('/marketing-publicitaire', 'ServicesController@Identite_visuelle_Marketing_publicitaire')
        ->name('Identite_visuelle_Marketing_publicitaire.index')
    ;
});

Route::group(['prefix' => 'web-digital'], function () {

    Route::get('site-internet', 'ServicesController@Site_internet')->name('Site_internet.index');
    Route::get('referencement', 'ServicesController@Referencement')->name('Referencement.index');
    Route::get('webmarketing', 'ServicesController@Webmarketing')->name('Webmarketing.index');
    Route::get('community-management', 'ServicesController@Community_management')->name('Community_management.index');
});

Route::group(['prefix' => 'image-video'], function () {

    Route::get('photographie', 'ServicesController@Photographie')->name('Photographie.index');
    Route::get('video-animation', 'ServicesController@Video_Animation')->name('Video_Animation.index');
});