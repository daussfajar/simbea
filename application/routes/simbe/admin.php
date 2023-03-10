<?php

// use Illuminate\Support\Facades\Route;

defined('BASEPATH') or exit('No direct script access allowed');

Route::group('admin', function () {
     Route::get('/', 'simbe/admin/DashboardController@index');

     Route::group('master_data', function () {
          $url = 'simbe/admin/';

          // Wakil Rektor
          Route::get('warek', $url . 'MasterData_Warek_Controller@index');

          // BKAL
          Route::get('bkal', $url . 'MasterData_BKAL_Controller@index');
          Route::get('bkal/edit/(:any)', $url . 'MasterData_BKAL_Controller@ubah_penerima/$1/$5');
          Route::post('bkal/edit/(:any)/simpan', $url . 'MasterData_BKAL_Controller@simpan_penerima');
          Route::get('bkal/add', $url . 'MasterData_BKAL_Controller@tambah_penerima');
          Route::post('bkal/add/simpan', $url . 'MasterData_BKAL_Controller@simpan_tambah_penerima');

          // Kaprodi
          Route::get('kaprodi', $url . 'MasterData_Kaprodi_Controller@index');

          // Dosen
          Route::get('dosen', $url . 'MasterData_Dosen_Controller@index');

          // Mahasiswa
          Route::get('mahasiswa', $url . 'MasterData_Mahasiswa_Controller@index');
     });

     Route::group('beasiswa', function () {
          $url = 'simbe/admin/';

          Route::get('prestasi', $url . 'Beasiswa_Prestasi_Controller@index');
          Route::get('capaian', $url . 'Beasiswa_Capaian_Controller@index');
          Route::get('keuangan', $url . 'Beasiswa_Keuangan_Controller@index');
     });
});
