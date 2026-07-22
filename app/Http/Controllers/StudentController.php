<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "Menampilkan halaman daftar siswa";
    }

    public function show($id)
    {
        return "Menampilkan siswa dengan ID: {$id}";
    }

    public function create()
    {
        return "Menampilkan halaman tambah siswa";
    }

    public function edit(string $id)
    {
        return "Menampilkan halaman edit siswa dengan ID: {$id}";
    }

  public function store()
    {
        return "Melakukan penambahan data siswa";
    }

    public function update(string $id)
    {
        return "Melakukan update data siswa dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data siswa dengan ID: {$id}";
    }
}
