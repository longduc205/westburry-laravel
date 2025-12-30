<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);

Route::get('/hello', function () {
    return 'Hello Laravel Docker!';
});
