@extends('layouts.app')

@section('title', $title)

@section('content')
    <x-page-header title="Akuntansi dan Keuangan Lembaga" subtitle="Lembar Jurusan" description="Code : {{ $major['code'] ?? 'AKL' }}"
        :backUrl="route('majors.index')" backText="Buku Induk">
        <x-slot:action>
            <a href="{{ route('majors.edit', $major['id'] ?? 1) }}"
                class="bg-[#16213A] px-5 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">Ubah</a>
        </x-slot:action>
    </x-page-header>

    <div class="mt-3 border border-[#E5E3DB] bg-white">
        <dl class="divide-y divide-[#EFEDE6] text-sm">
            <div class="flex justify-between px-8 py-4">
                <dt class="uppercase tracking-[0.1em] text-xs text-slate-400">Kode Jurusan</dt>
                <dd class="font-medium text-[#16213A]">{{ $major['code'] ?? 'AKL' }}</dd>
            </div>
            <div class="flex justify-between px-8 py-4">
                <dt class="uppercase tracking-[0.1em] text-xs text-slate-400">Nama Jurusan</dt>
                <dd class="font-medium text-[#16213A]">{{ $major['subject'] ?? 'Akuntansi dan Keuangan Lembaga' }}</dd>
            </div>
            <div class="flex justify-between px-8 py-4">
                <dt class="uppercase tracking-[0.1em] text-xs text-slate-400">Deskripsi</dt>
                <dd class="font-medium text-[#16213A]">{{ $major['description'] ?? 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.' }}</dd>
            </div>
        </dl>

        <div class="flex justify-end gap-4 border-t border-[#E5E3DB] px-8 py-5">
            <a href="{{ route('majors.index') }}"
                class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">Kembali</a>
          <form action="" method="POST" onsubmit="return confirm('Hapus data jurusan ini dari buku induk?')"></form>                @csrf
                @method('DELETE')
                <button type="submit"
                    class="border border-red-200 px-5 py-2.5 text-sm font-medium text-red-700 transition hover:bg-red-50">Hapus</button>
            </form>
        </div>
    </div>
@endsection