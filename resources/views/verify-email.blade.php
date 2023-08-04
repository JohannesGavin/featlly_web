@extends('layouts.app')

@section('content')
    <main class="py-14">
        <div class="container px-4">
            @if (session('message'))
                <div class="bg-green-100 p-3 rounded-md col-span-12 mb-5 text-green-800">{{ session('message') }}</div>
            @endif
            @if (session('success'))
                <div class="bg-green-100 p-3 rounded-md col-span-12 mb-5 text-green-800">{{ session('success') }}</div>
            @endif
        </div>
        <section class="container px-4 py-20 flex flex-col gap-5 items-center justify-center">
            <img src="https://www.iconpacks.net/icons/1/free-mail-icon-142-thumb.png" alt="" width="80">
            <h1 class="text-center title-3 font-bold">Harap verifikasi email terlebih dahulu</h1>
            <p class="text-lg text-center">Kami sudah mengirimkan email verifikasi ke email yang terdaftar. Untuk melanjutkan
                menggunakan
                aplikasi, silahkan verifikasi melalui email yang sudah dikirimkan</p>

            <form method="post" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="btn mt-8 md:mt-12 w-full lg:w-[440px]">Kirim Ulang</button>
            </form>
            <a href="{{ route('logout') }}">Keluar</a>
        </section>

    </main>
@endsection