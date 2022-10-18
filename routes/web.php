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

Route::get('/', function () {
    return redirect('/sign-in');
});

// Auth::routes();
Route::get('/sign-in', 'LoginController@index');
Route::post('/sign-in', 'LoginController@login');
Route::get('/sign-out', 'LoginController@logout');
Route::get('home', 'HomeController@index');

Route::get('/profile/{id}', 'UserController@showProfile');
// Route::post('/profile', 'UserController@editProfile');

// Route Admin
Route::get('admin/home', 'AdminController@index');

Route::get('admin/get-user', 'UserController@index');
Route::get('/admin/show-user/{id}', 'UserController@showUser');
Route::post('/admin/show-user', 'UserController@showUser');
Route::get('/admin/create-user', 'UserController@showCreateUser');
Route::post('/admin/create-user', 'UserController@createUser');
Route::get('/admin/edit-user/{id}', 'UserController@showEditUser');
Route::post('/admin/edit-user', 'UserController@updateUser');
Route::get('/admin/delete-user/{id}', 'UserController@deleteUser');

Route::get('/admin/get-bagian', 'BagianController@GetBagian');
Route::get('/admin/show-bagian/{id}', 'BagianController@showBagian');
Route::post('/admin/show-bagian', 'BagianController@showBagian');
Route::get('/admin/create-bagian', 'BagianController@showCreateBagian');
Route::post('/admin/create-bagian', 'BagianController@CreateBagian');
Route::get('/admin/edit-bagian/{id}', 'BagianController@showEditBagian');
Route::post('/admin/edit-bagian', 'BagianController@updateBagian');
Route::get('/admin/delete-bagian/{id}', 'BagianController@deleteBagian');

Route::get('/admin/get-jabatan', 'JabatanController@GetJabatan');
Route::get('/admin/show-jabatan/{id}', 'JabatanController@showJabatan');
Route::post('/admin/show-jabatan', 'JabatanController@showJabatan');
Route::get('/admin/create-jabatan', 'JabatanController@showCreateJabatan');
Route::post('/admin/create-jabatan', 'JabatanController@CreateJabatan');
Route::get('/admin/edit-jabatan/{id}', 'JabatanController@showEditJabatan');
Route::post('/admin/edit-jabatan', 'JabatanController@updateJabatan');
Route::get('/admin/delete-jabatan/{id}', 'JabatanController@deleteJabatan');

Route::get('/admin/get-rootjab', 'RootJabatanController@GetRootJabatan');
Route::get('/admin/show-rootjab/{id}', 'RootJabatanController@showRootJabatan');
Route::post('/admin/show-rootjab', 'RootJabatanController@showRootJabatan');
Route::get('/admin/create-rootjab', 'RootJabatanController@showCreateRootJabatan');
Route::post('/admin/create-rootjab', 'RootJabatanController@CreateRootJabatan');
Route::get('/admin/edit-rootjab/{id}', 'RootJabatanController@showEditRootJabatan');
Route::post('/admin/edit-rootjab', 'RootJabatanController@updateRootJabatan');
Route::get('/admin/delete-rootjab/{id}', 'RootJabatanController@deleteRootJabatan');

Route::get('user/home', 'PenggunaController@index');

Route::get('/user/get-surat-eksternal', 'SuratEksternalController@getSuratEksternal');
Route::post('/user/get-surat-eksternal', 'SuratEksternalController@getSuratEksternalSearch');
Route::get('/user/show-surat-eksternal/{id}', 'SuratEksternalController@showSuratEksternal');
Route::post('/user/show-surat-eksternal', 'SuratEksternalController@showSuratEksternal');
Route::get('/user/create-surat-eksternal', 'SuratEksternalController@showCreateSuratEksternal');
Route::post('/user/create-surat-eksternal', 'SuratEksternalController@createSuratEksternal');
Route::get('/user/edit-surat-eksternal/{id}', 'SuratEksternalController@showEditSuratEksternal');
Route::post('/user/edit-surat-eksternal', 'SuratEksternalController@editSuratEksternal');
Route::get('/user/delete-surat-eksternal', 'SuratEksternalController@deleteSuratEksternal');
Route::get('/user/create-laporan_surat-eksternal', 'SuratEksternalController@csv');
Route::get('/user/download-surat-eksternal/{id}', 'SuratEksternalController@downloadSuratEksternal');


Route::get('/user/get-surat-internal', 'SuratInternalController@getSuratinternal');
Route::post('/user/get-surat-internal', 'SuratInternalController@getSuratinternalSearch');
Route::get('/user/show-surat-internal/{id}', 'SuratInternalController@showSuratInternal');
Route::post('/user/show-surat-internal', 'SuratInternalController@showSuratInternal');
Route::get('/user/create-surat-internal', 'SuratInternalController@showCreateSuratInternal');
Route::post('/user/create-surat-internal', 'SuratInternalController@createSuratInternal');
Route::get('/user/edit-surat-internal/{id}', 'SuratInternalController@showEditSuratInternal');
Route::post('/user/edit-surat-internal', 'SuratInternalController@editSuratInternal');
Route::get('/user/delete-surat-internal', 'SuratInternalController@deleteSuratInternal');
Route::get('/user/create-laporan-surat-internal', 'SuratInternalController@csv');

Route::get('/user/cetak-laporan-surat', 'LaporanController@index');
Route::post('/user/download-laporan-surat', 'LaporanController@csv');

Route::get('/user/create-disposisi/{id}', 'DisposisiController@index');
Route::get('/user/verif-disposisi/{id}', 'DisposisiController@verif');
Route::post('/user/create-disposisi', 'DisposisiController@store');
Route::get('/user/show-disposisi/{id}', 'DisposisiController@showDisposisi');
Route::get('/user/delete-disposisi/{id}', 'DisposisiController@deleteDisposisi');


Route::get('/user/get-disposisi-surat', 'DisposisiController@getDisposisi');

