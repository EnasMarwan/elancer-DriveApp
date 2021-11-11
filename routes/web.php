<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilesController;

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

Route::get('/dashboard', function ()
{
    // return view ('index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/files',[FilesController::class, 'index'])->name('library.index')->middleware(['auth']);
Route::get('/create',[FilesController::class, 'createfolder'])->name('create.folder');
Route::get('/{id}/file',[FilesController::class, 'getfile'])->name('file.get');
Route::get('/{id}/download',[FilesController::class, 'downloadfile'])->name('file.download');
Route::get('/createe',[FilesController::class, 'addtofolder'])->name('add.folder');
Route::get('/{id}/files',[FilesController::class, 'filesinfolder'])->name('show.files');
Route::get('/upload',[FilesController::class, 'create'])->middleware(['auth'])->name('create.file');
Route::post('/upload',[FilesController::class, 'store'])->name('library.store');
Route::delete('/{id}',[FilesController::class, 'destroy'])->name('file.destroy');
