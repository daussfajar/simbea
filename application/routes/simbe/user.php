<?php

// use Illuminate\Support\Facades\Route;

defined('BASEPATH') or exit('No direct script access allowed');
$url = 'simbe/user/';

Route::group('user', function () {
     Route::get('/', 'simbe/admin/DashboardController@index');

     Route::group('master_data', function () {
          $url = 'simbe/admin/';

          Route::get('warek', $url . 'MasterData_Warek_Controller@index');

          // BKAL
          Route::get('bkal', $url . 'MasterData_BKAL_Controller@index');
          Route::get('bkal/edit/(:any)', $url . 'MasterData_BKAL_Controller@edit_penerima/$1/$5');
          Route::get('bkal/edit/(:any)/simpan', $url . 'MasterData_BKAL_Controller@simpan_penerima');

          Route::get('kaprodi', $url . 'MasterData_Kaprodi_Controller@index');
          Route::get('dosen', $url . 'MasterData_Dosen_Controller@index');
          Route::get('mahasiswa', $url . 'MasterData_Mahasiswa_Controller@index');
     });

     Route::group('data_diri', function () {
          $url = 'simbe/user/';

          Route::get('/', $url . 'DataDiri_Controller@index');
     });
});

// Route::get('daftar', $url . 'DataDiri_Controller@index');
