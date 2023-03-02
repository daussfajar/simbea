<?php

// This points to 'baz' method of 'bar' controller at '/foo' path under a GET request:
Route::get('foo', 'simbe/SimbeHome@index');
// Route::get('admin', 'simbe/SimbeAdmin@index');


Route::group('admin', function () {
     Route::get('/', 'simbe/SimbeAdmin@index');

     Route::group('master_data', function () {
          $url = 'simbe/simbeaController/';
          Route::get('mahasiswa', $url . 'MasterData_BKAL_Controller@index');
          Route::get('dosen', $url . 'SimbeMahasiswa@index');
     });
     Route::group('beasiswa', function () {
          Route::get('mahasiswa', 'simbe/simbeAdmin@index');
     });
});
