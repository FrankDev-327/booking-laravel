<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealthCheck;

Route::group([
    'prefix' => 'health-check',
], function () {
    Route::get('/', HealthCheck::class);
});
