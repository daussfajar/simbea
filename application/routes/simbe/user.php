<?php

// use Illuminate\Support\Facades\Route;

defined('BASEPATH') or exit('No direct script access allowed');

Route::group('user', function () {
     $url = 'simbe/user/';
     Route::get('dashboard', 'simbe/admin/DashboardController@index');

     // Route::group('master_data', function () {
     //      $url = 'simbe/admin/';

     //      Route::get('warek', $url . 'MasterData_Warek_Controller@index');

     //      // BKAL
     //      Route::get('bkal', $url . 'MasterData_BKAL_Controller@index');
     //      Route::get('bkal/edit/(:any)', $url . 'MasterData_BKAL_Controller@edit_penerima/$1/$5');
     //      Route::get('bkal/edit/(:any)/simpan', $url . 'MasterData_BKAL_Controller@simpan_penerima');

     //      Route::get('kaprodi', $url . 'MasterData_Kaprodi_Controller@index');
     //      Route::get('dosen', $url . 'MasterData_Dosen_Controller@index');
     //      Route::get('mahasiswa', $url . 'MasterData_Mahasiswa_Controller@index');
     // });
     
     // Data Diri
     Route::get('profil', $url . 'DataDiri_Controller@index');

     // Lap. Perkembangan
     Route::get('prestasi', $url . 'PrestasiAkademik_Controller@index');
     Route::get('capaian', $url . 'CapaianNon_Controller@index');
     Route::get('biaya', $url . 'BiayaPendidikan_Controller@index');

     Route::group('lap', function () {
          $url = 'simbe/user/';

          Route::get('/', $url . 'DataDiri_Controller@index');
     });
});

// Route::get('daftar', $url . 'DataDiri_Controller@index');
