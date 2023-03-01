<?php

// This points to 'baz' method of 'bar' controller at '/foo' path under a GET request:
Route::get('foo', 'simbe/SimbeHome@index');
// Route::get('admin', 'simbe/SimbeAdmin@index');

Route::group('/', function () {
     Route::get('admin', 'simbe/SimbeAdmin@index');
     Route::get('admin/blank', 'simbe/SimbeAdmin@tes');
});
