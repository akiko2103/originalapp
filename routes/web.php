<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/augury', function () {
    return view('augury');
    
});
