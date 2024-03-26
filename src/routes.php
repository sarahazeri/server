<?php

use Illuminate\Support\Facades\Route;

Route::get('server', function () {
    echo "Hello From Server Info Package";
});
Route::get('cpu', [\Sarahazeri\Server\InfoController::class,'cpu']);
