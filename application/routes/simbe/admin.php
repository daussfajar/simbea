<?php

defined('BASEPATH') or exit('No direct script access allowed');

Route::group('admin', function () {
     Route::get('/', 'simbe/admin/DashboardController@index');

     Route::group('master_data', function () {
          $url = 'simbe/admin/';
          Route::get('mahasiswa', $url . 'MasterData_BKAL_Controller@index');
          Route::get('dosen', $url . 'bkal_controller@index');
     });
     Route::group('beasiswa', function () {
          Route::get('mahasiswa', 'simbe/simbeAdmin@index');
     });
});
