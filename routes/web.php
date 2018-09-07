<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', function () {
    // Base Url info (Laravel URL uses absolute path)
    $baseUrl = URL::to('/');
    return "BaseUrl: {$baseUrl}";
});

Route::get('/test-db', function () {
    // You need to set database followed README.md first
    $activeRecord = \App\Models\Records::first();
    // Result handler
    if ($activeRecord)
        return $activeRecord->toArray();
    else
        return var_export($activeRecord, true);
});
