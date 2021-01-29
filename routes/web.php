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

Route::get('/', 'XSiteController@home');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');



//middleware auth untuk admin
Route::group(['middleware' => ['auth', 'checkrole:admin']], function () {
    Route::get('/xsiswa', 'XsiswaController@index');
    Route::post('/xsiswa/create', 'XsiswaController@create');
    Route::get('/xsiswa/{xsiswa}/edit', 'XsiswaController@edit');
    Route::post('/xsiswa/{xsiswa}/update', 'XsiswaController@update');
    Route::get('/xsiswa/{xsiswa}/delete', 'XsiswaController@delete');
    Route::get('/xsiswa/{id}/profile', 'XsiswaController@profile');

    Route::get('/xguru', 'XguruController@index');
    Route::post('/xguru/create', 'XguruController@create');
    Route::get('/xguru/{xguru}/edit', 'XguruController@edit');
    Route::post('/xguru/{xguru}/update', 'XguruController@update');
    Route::get('/xguru/{xguru}/delete', 'XguruController@delete');
    Route::get('/xguru/{id}/profile', 'XguruController@profile');

    Route::get('/xmapel', 'XmapelController@index');
    Route::post('/xmapel/create', 'XmapelController@create');
    Route::get('/xmapel/{xmapel}/edit', 'XmapelController@edit');
    Route::post('/xmapel/{xmapel}/update', 'XmapelController@update');
    Route::get('/xmapel/{xmapel}/delete', 'XmapelController@delete');
    Route::get('/xmapel/{id}/profile', 'XmapelController@profile');
   
    
    /*Route::get('/xsiswa/exportExcel', 'XsiswaController@exportExcel');
    Route::get('/xsiswa/exportPDF', 'XsiswaController@exportPDF');*/
    
    /*Route::get('/xposts', 'XpostController@index')->name('xposts.index');
    Route::get('xpost/add', [
        'uses' => 'XpostController@add',
        'as' => 'xposts.add',
    ]);
    Route::post('xpost/create', [
        'uses' => 'XpostController@create',
        'as' => 'xposts.create',
    ]);*/
});


//middleware untuk admin, siswa
Route::group(['middleware' => ['auth', 'checkrole:admin,xsiswa']], function () {
    Route::get('/dashboard', 'DashboardController@index');
});

Route::group(['middleware' => ['auth', 'checkrole:xsiswa,xguru']], function () {
    Route::get('/xprofilsaya', 'XsiswaController@xprofilsaya');
    Route::get('/xmapel/materi', 'XmapelController@xmateri');
});



//Slug tidak boleh mendahului
Route::get('/{slug}', [
    'uses' => 'XSiteController@singlexpost',
    'as' => 'xsite.single.xpost',
]);