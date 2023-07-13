@extends('layouts.app')

@section('content')
    <main class="py-8">
        <section class="container px-4 grid grid-cols-12">
            @if (session('success'))
                <div class="bg-green-100 p-3 rounded-md col-span-12 mb-5 text-green-800">{{ session('success') }}</div>
            @endif
            <div class="flex flex-col col-span-12 lg:col-span-4 gap-6 rounded-md order-2 md:order-1 mt-12 lg:mt-0">
                @if (Auth::user() !== null && Auth::user()->isAdmin())
                    <a href="{{ route('admin.dashboard') }}">Dashboard Admin</a>
                @endif
                <a href="{{ route('order') }}">Pesanan</a>
                <a href="{{ route('order-history') }}">Riwayat Pembelian</a>
                <a href="{{ route('logout') }}">Keluar</a>
            </div>
            <div class="col-span-12 lg:col-span-8 lg:mt-0 order-1 md:order-2">
                <h1 class="text-center headline font-bold">Informasi Akun:</h1>
                @guest
                    <div class="flex flex-col gap-8 mt-9 w-[440px] self-center justify-self-center mx-auto">
                        <a href="{{ route('login') }}" class="btn text-center w-full">Masuk</a>
                        <a href="{{ route('register') }}" class="btn-outline text-center w-full">Daftar</a>
                    </div>
                @else
                    <div class="mt-9 text-lg flex flex-col gap-7">
                        <div class="grid grid-cols-3">
                            <div class="text-sm md:text-lg font-semibold">Nama Lengkap:</div>
                            <div class="col-span-2 lg:col-span-2 text-neutral-500 text-sm md:text-lg">{{ $user->name }}</div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="text-sm md:text-lg font-semibold">Alamat:</div>
                            <div class="col-span-2 lg:col-span-2 text-neutral-500 text-sm md:text-lg">
                                @if (isset($user->alamat))
                                    {{ $user->alamat }}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="text-sm md:text-lg font-semibold">No. Telpon:</div>
                            <div class="col-span-2 lg:col-span-2 text-neutral-500 text-sm md:text-lg">
                                @if (isset($user->no_telp))
                                    {{ $user->no_telp }}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn mt-8 md:mt-12 w-full lg:w-[440px]">Ubah</button>
                @endguest
            </div>
        </section>
    </main>
@endsection
