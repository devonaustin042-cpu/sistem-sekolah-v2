@extends('layouts.app')

@section('title', $title)

@section('content')
    <x-page-header 
        title="Ubah Data Kelas" 
        :description="'Memperbarui catatan atas kelas ' . ($schoolClass['name'] ?? 'XII AKL 1')" 
        :backUrl="route('classes.index')" 
        backText="Buku Induk" />

    <form action="{{ route('classes.update', ['id' => $schoolClass['id'] ?? 1]) }}" method="POST" class="space-y-6 border border-[#E5E3DB] bg-white p-8">
        @csrf
        @method('PUT')

        <div>
            <label for="name"
                class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Nama Kelas</label>
            <input type="text" id="name" name="name" value="{{ old('name', $schoolClass['name'] ?? 'XII AKL 1') }}"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
        </div>

        <div>
            <label for="grade" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Tingkat</label>
            <select id="grade" name="grade"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
                @php
                    $selectedGrade = old('grade', $schoolClass['grade'] ?? '');
                @endphp
                <option value="X" {{ $selectedGrade == 'X' ? 'selected' : '' }}>X</option>
                <option value="XI" {{ $selectedGrade == 'XI' ? 'selected' : '' }}>XI</option>
                <option value="XII" {{ $selectedGrade == 'XII' ? 'selected' : '' }}>XII</option>
            </select>
        </div>

        <div>
            <label for="major_id"
                class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Jurusan</label>
            <select id="major_id" name="major_id"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
                @foreach ($majors as $major)
                    @php
                        $majorId = $major['id'] ?? $major;
                        $selectedMajor = old('major_id', $schoolClass['major_id'] ?? '');
                    @endphp
                    <option value="{{ $majorId }}" {{ $selectedMajor == $majorId ? 'selected' : '' }}>
                        {{ $major['name'] ?? $major }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="teacher_id"
                class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Wali Kelas</label>
            <select id="teacher_id" name="teacher_id"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
                @foreach ($teachers as $teacher)
                    @php
                        $teacherId = $teacher['id'] ?? $teacher;
                        $selectedTeacher = old('teacher_id', $schoolClass['teacher_id'] ?? '');
                    @endphp
                    <option value="{{ $teacherId }}" {{ $selectedTeacher == $teacherId ? 'selected' : '' }}>
                        {{ $teacher['name'] ?? $teacher }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-end gap-4 border-t border-[#EFEDE6] pt-6">
            <a href="{{ route('classes.index') }}" class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">Batal</a>
            <button type="submit"
                class="bg-[#16213A] px-6 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">Perbarui
                Catatan</button>
        </div>
    </form>
@endsection