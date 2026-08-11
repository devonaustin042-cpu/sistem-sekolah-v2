@extends('layouts.app')

@section('title', $title)

@section('content')
    <x-page-header title="Catat Jurusan Baru" description="Isi data untuk mendaftarkan jurusan ke buku induk."
        :backUrl="route('majors.index')" backText="Buku Induk" />

    <form action="" method="POST" class="space-y-6 border border-[#E5E3DB] bg-white p-8">

        <div>
            <label for="code"
                class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Kode Jurusan</label>
            <input type="text" id="code" name="code" placeholder="Contoh: AKL, TKJ, BiD"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm placeholder:text-slate-400 focus:border-[#A16207] focus:bg-white focus:outline-none">
        </div>

        <div>
            <label for="name" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Nama
                Jurusan</label>
            <input type="text" id="name" name="name" placeholder="Contoh: Akuntansi dan Keuangan Lembaga"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm placeholder:text-slate-400 focus:border-[#A16207] focus:bg-white focus:outline-none">
        </div>

        <div>
            <label for="description" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Deskripsi</label>
            <textarea id="description" name="description" placeholder="Deskripsi jurusan"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm placeholder:text-slate-400 focus:border-[#A16207] focus:bg-white focus:outline-none"></textarea>
        </div>
            </select>
        </div>

        <div class="flex justify-end gap-4 border-t border-[#EFEDE6] pt-6">
            <a href="{{ route('majors.index') }}"
                class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">Batal</a>
            <button type="submit"
                class="bg-[#16213A] px-6 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">Simpan
                ke Buku Induk</button>
        </div>
    </form>
@endsection