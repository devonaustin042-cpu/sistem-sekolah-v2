<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Managemen Siswa
Route::name('students.')->prefix('students')->group(function(){

    // Halaman daftar siswa
    Route::get('/', [StudentController::class,'index'])->name('index');

    // Halaman tambah siswa
    Route::get('/create', [StudentController::class,'create'])->name('create');

     // Halaman edit siswa
    Route::get('/{id}/edit', [StudentController::class,'edit'])->name('edit');

    // Halaman detail siswa
    Route::get('/{id}', [StudentController::class,'show'])->name('show');

    // Logika Tambah Siswa
    Route::post('/', [StudentController::class,'store'])->name('store');

    // Logika Edit Siswa
    Route::put('/{id}', [StudentController::class,'update'])->name('update');

    // Logika Hapus Siswa
    Route::delete('/{id}', [StudentController::class,'destroy'])->name('destroy');
});

// Managemen Guru
Route::name('teachers.')->prefix('teachers')->group(function(){
    
    // Halaman daftar guru
    Route::get('/', [TeacherController::class,'index'])->name('index');

    // Halaman tambah guru
    Route::get('/create', [TeacherController::class,'create'])->name('create');

     // Halaman edit guru
    Route::get('/{id}/edit', [TeacherController::class,'edit'])->name('edit');

    // Halaman detail guru
    Route::get('/{id}', [TeacherController::class,'show'])->name('show');

    // Logika Tambah Guru
    Route::post('/', [TeacherController::class,'store'])->name('store');

    // Logika Edit Guru
    Route::put('/{id}', [TeacherController::class,'update'])->name('update');

    // Logika Hapus Guru
    Route::delete('/{id}', [TeacherController::class,'destroy'])->name('destroy');
});