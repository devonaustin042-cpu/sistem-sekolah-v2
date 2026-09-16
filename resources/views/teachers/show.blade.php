@extends('layouts.app')

@section('title', $title)

@section('content')
    <x-page-header title="Budi Santoso" subtitle="Lembar Guru" description="NIP {{ $teacher['nip'] ?? '2024001' }}"
        :backUrl="route('teachers.index')" backText="Buku Induk">
        <x-slot:action>
            <a href="{{ route('teachers.edit', ['id' => 1]) }}"
                class="bg-[#16213A] px-5 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">Ubah</a>
        </x-slot:action>
    </x-page-header>

    <div class="mt-3 border border-[#E5E3DB] bg-white">
        <dl class="divide-y divide-[#EFEDE6] text-sm">
            <div class="flex justify-between px-8 py-4">
                <dt class="uppercase tracking-[0.1em] text-xs text-slate-400">NIP</dt>
                <dd class="font-medium text-[#16213A]">{{ $teacher['nip'] ?? '198501012024' }}</dd>
            </div>
            <div class="flex justify-between px-8 py-4">
                <dt class="uppercase tracking-[0.1em] text-xs text-slate-400">Nama Lengkap</dt>
                <dd class="font-medium text-[#16213A]">{{ $teacher['name'] ?? 'Budi Santoso' }}</dd>
            </div>
            <div class="flex justify-between px-8 py-4">
                <dt class="uppercase tracking-[0.1em] text-xs text-slate-400">Jenis Kelamin</dt>
                <dd class="font-medium text-[#16213A]">{{ $teacher['gender'] ?? 'Laki-laki' }}</dd>
            </div>
            <div class="flex justify-between px-8 py-4">
                <dt class="uppercase tracking-[0.1em] text-xs text-slate-400">Mata Pelajaran</dt>
                <dd class="font-medium text-[#16213A]">{{ $teacher['subject'] ?? 'Akuntansi Dasar' }}</dd>
            </div>
            <div class="flex justify-between px-8 py-4">
                <dt class="uppercase tracking-[0.1em] text-xs text-slate-400">No. Telepon</dt>
                <dd class="font-medium text-[#16213A]">{{ $teacher['phone_number'] ?? '08123456789' }}</dd>
            </div>
            <div class="flex justify-between items-center px-8 py-4">
                <dt class="uppercase tracking-[0.1em] text-xs text-slate-400">Status</dt>
                <dd class="font-medium text-[#16213A]">
                    <x-status-badge :status="$teacher['status'] ?? 'Aktif'" />
                </dd>
            </div>
        </dl>

        <div class="flex justify-end gap-4 border-t border-[#E5E3DB] px-8 py-5">
            <a href="{{ route('teachers.index') }}"
                class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">Kembali</a>
          <form action="" method="POST" onsubmit="return confirm('Hapus data guru ini dari buku induk?')"> @csrf
                @method('DELETE')
                <button type="submit"
                    class="border border-red-200 px-5 py-2.5 text-sm font-medium text-red-700 transition hover:bg-red-50">Hapus</button>
            </form>
        </div>
    </div>
@endsection