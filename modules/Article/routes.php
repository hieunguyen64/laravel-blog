<?php
Route::namespace("Modules\Article\Controllers")->group(function () {
    Route::prefix("/")->group(function () {
        Route::get("/", "IndexController@index");
    });
});