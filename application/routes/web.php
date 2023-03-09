<?php

include 'simbe/admin.php';
include 'simbe/user.php';

// This points to 'baz' method of 'bar' controller at '/foo' path under a GET request:
Route::get('foo', 'simbe/SimbeHome@index');
// Route::get('admin', 'simbe/SimbeAdmin@index');
