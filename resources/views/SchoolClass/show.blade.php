@extends('layouts.app')

@section('title', $title)

@section('content')
    <x-page-header :title="$schoolClass['name'] ?? 'XII AKL 1'" subtitle="Lembar Kelas" :description="'Jurusan ' . ($schoolClass['major'] ?? 'AKL')" :backUrl="route('classes.index')" backText="Buku Induk">
        <x-slot:action>
            <a href="{{ route('classes.edit', $schoolClass['id'] ?? 1) }}"
                class="bg-[#16213A] px-5 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">Ubah</a>
        </x-slot:action>
    </x-page-header>

    <div class="mt-3 border border-[#E5E3DB] bg-white">
    <dl class="divide-y divide-[#EFEDE6] text-sm">
        <div class="flex justify-between px-8 py-4">
            <dt class="uppercase tracking-[0.1em] text-xs text-slate-400">Nama Kelas</dt>
            <dd class="font-medium text-[#16213A]">{{ $schoolClass['name'] ?? 'XII AKL 1' }}</dd>
        </div>
        <div class="flex justify-between px-8 py-4">
            <dt class="uppercase tracking-[0.1em] text-xs text-slate-400">Tingkat</dt>
            <dd class="font-medium text-[#16213A]">{{ $schoolClass['grade'] ?? 'XII' }}</dd>
        </div>
        <div class="flex justify-between px-8 py-4">
            <dt class="uppercase tracking-[0.1em] text-xs text-slate-400">Jurusan</dt>
            <dd class="font-medium text-[#16213A]">{{ $schoolClass['major'] ?? 'Akuntansi' }}</dd>
        </div>
        <div class="flex justify-between px-8 py-4">
            <dt class="uppercase tracking-[0.1em] text-xs text-slate-400">Wali Kelas</dt>
            <dd class="font-medium text-[#16213A]">{{ $schoolClass['homeroom_teacher'] ?? 'Budi Santoso' }}</dd>
        </div>
    </dl>

    <div class="flex justify-end gap-4 border-t border-[#E5E3DB] px-8 py-5">
        <a href="{{ route('classes.index') }}"
            class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">Kembali</a>
        <form action="{{ route('classes.destroy', $schoolClass['id'] ?? 1) }}" method="POST" onsubmit="return confirm('Hapus data kelas ini dari buku induk?')">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="border border-red-200 px-5 py-2.5 text-sm font-medium text-red-700 transition hover:bg-red-50">Hapus</button>
        </form>
    </div>
    </div>
@endsection