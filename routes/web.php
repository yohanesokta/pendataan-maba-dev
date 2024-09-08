<?php

use App\Http\Controllers\tambahuser;
use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/update');
});

Route::get('/close', function () {
    return redirect('/update');
});
Route::post('/add', [tambahuser::class, 'tambah']);
Route::get('/add', function () {
    return redirect('/');
});
Route::get('/lihat', [tambahuser::class, 'lihat']);
Route::get('/lihatjson', [tambahuser::class, 'datacuy']);
Route::get('/admin', [tambahuser::class, 'admin']);
Route::get('/delete', [tambahuser::class, 'delete']);
Route::get('/download', [tambahuser::class, 'download'])->name('json');


Route::get('/api/data', [tambahuser::class, 'apiGet']);
Route::get('/refor', [tambahuser::class, 'refor']);
Route::post('/update', [tambahuser::class, 'updateWeb']);
Route::get('/update', function () {
    return view('updatev02');
})->name('update');

Route::get('/web', function () {
    return view('vieweb');
});


Route::get('/api/view', [tambahuser::class, 'apiview']);
