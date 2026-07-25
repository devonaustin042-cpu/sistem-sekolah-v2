<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SchoolClass\IndexController;
use App\Http\Controllers\SchoolClass\CreateController;
use App\Http\Controllers\SchoolClass\EditController;    
use App\Http\Controllers\SchoolClass\ShowController;
use App\Http\Controllers\SchoolClass\StoreController;
use App\Http\Controllers\SchoolClass\UpdateController;  
use App\Http\Controllers\SchoolClass\DestroyController; 
use App\Http\Controllers\MajorController;   
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


// Managemen Kelas
Route::name('SchoolClass.')->prefix('SchoolClass')->group(function(){

    // Halaman daftar kelas
    Route::get('/', IndexController::class)->name('index');

    // Halaman tambah kelas
    Route::get('/create', CreateController::class)->name('create');

    // Halaman edit kelas
    Route::get('/{id}/edit', EditController::class)->name('edit');

    // Halaman detail kelas
    Route::get('/{id}', ShowController::class)->name('show');

    // Logika Tambah Kelas
    Route::post('/', StoreController::class)->name('store');

    // Logika Edit Kelas
    Route::put('/{id}', UpdateController::class)->name('update');

    // Logika Hapus Kelas
    Route::delete('/{id}', DestroyController::class)->name('destroy');
});



// Managemen Major
Route::name('majors.')->prefix('majors')->group(function(){

    // Halaman daftar jurusan
    Route::get('/', [MajorController::class,'index'])->name('index');

    // Halaman tambah jurusan
    Route::get('/create', [MajorController::class,'create'])->name('create');

    // Halaman edit jurusan
    Route::get('/{id}/edit', [MajorController::class,'edit'])->name('edit');

    // Halaman detail jurusan
    Route::get('/{id}', [MajorController::class,'show'])->name('show');

    // Logika Tambah jurusan
    Route::post('/', [MajorController::class,'store'])->name('store');

    // Logika Edit jurusan
    Route::put('/{id}', [MajorController::class,'update'])->name('update');

    // Logika Hapus jurusan
    Route::delete('/{id}', [MajorController::class,'destroy'])->name('destroy');
});