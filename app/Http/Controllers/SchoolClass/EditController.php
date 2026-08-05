<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{

    public function __invoke(Request $request, $id)
    {
        $title = "Sistem Sekolah - Ubah Kelas";
        $majors = [
            ['id' => 'AKL', 'name' => 'Akuntansi dan Keuangan Lembaga'],
            ['id' => 'TKJ', 'name' => 'Teknik Komputer dan Jaringan'],
            ['id' => 'BD', 'name' => 'Bisnis Digital'],
        ];

        $teachers = [
            ['id' => 1, 'name' => 'Budi Santoso'],
            ['id' => 2, 'name' => 'Siti Aminah'],
        ];

        return view('SchoolClass.edit', [
            'title' => $title,
            'majors' => $majors,
            'teachers' => $teachers
        ]);
    }
}
