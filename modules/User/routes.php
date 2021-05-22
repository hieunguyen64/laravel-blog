<?php
Route::namespace('Modules\User\Controllers')->group(function () {
    Route::get('login', 'LoginController@index');
});