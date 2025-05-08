<?php

use App\Http\Controllers\back\MataPelajaranController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('back.admin.dashboard');
});

Route::get('/MataPelajaran', [MataPelajaranController::class, 'index'])
->name('get.mapel');
Route::post('/MataPelajaran/create', [MataPelajaranController::class, 'store'])
->name('post.mapel');
Route::put('/MataPelajaran/edit/{id}', [MataPelajaranController::class, 'update'])
->name('edit.mapel');