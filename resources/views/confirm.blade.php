@extends('layouts.app')

@section('content')
    <main class="py-14">
        <section class="container px-4 flex flex-col gap-5 items-center">
            <h1 class="text-center title-3 font-bold">Pesanan anda telah diterima</h1>
            <h2 class="text-xl font-semibold mt-3">Order ID 002382{{ $order->id }}</h2>
            <h2 class="text-xl font-semibold">Total Pembayaran Rp {{ number_format($totalPrice, 2, '.', ',') }}</h2>
            <h3 class="text-neutral-400 text-center max-w-[500px]">Harap melakukan pembayaran sebelum 1 x 24 jam atau pesanan
                anda dibatalkan oleh sistem</h3>

            <a href="{{ route('home') }}" class="btn-outline w-full max-w-[440px]">Kembali</a>

            <form action="{{ route('confirm-post', ['orderId' => $order->id]) }}" method="post" enctype="multipart/form-data"
                class="w-full max-w-[427px] flex flex-col gap-5 mt-10">
                @csrf
                @method('PUT')
                <div class="form-group flex flex-col gap-3">
                    <label class="text-lg font-semibold" for="">Order ID</label>
                    <input required class="input-field-2" type="text" name="id" id="name"
                        placeholder="Order id" disabled value="002382{{ $order->id }}">
                </div>
                <div class="form-group flex flex-col gap-3">
                    <label class="text-lg font-semibold" for="">Tanggal Pembayaran</label>
                    <input required class="input-field-2" type="date" name="tanggal" id="alamat" placeholder="Alamat">
                </div>
                <div class="form-group flex flex-col gap-3">
                    <label class="text-lg font-semibold" for="">Metode Pembayaran</label>
                    <input required class="input-field-2" type="text" name="metode" id="provinsi"
                        placeholder="OVO/Gopay/BCA">
                </div>
                <div class="form-group flex flex-col gap-3">
                    <label class="text-lg font-semibold" for="">Nama Pembayar</label>
                    <input required class="input-field-2" type="text" name="nama" id="kabupaten"
                        placeholder="Nama Pembayar">
                </div>
                
                <div class="form-group flex flex-col gap-3">
                    <label class="text-lg font-semibold" for="">Gambar</label>
                    <input type="file" name="images" id="images" class="" required>
                    @error('images')
                        <span class="text-sm text-red-800 text-opacity-80" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="flex flex-col mt-14 w-full gap-4">
                    <button type="submit" class="btn w-full items-center flex justify-center">Konfirmasi
                        pembayaran</button>
                </div>
            </form>
        </section>

    </main>
@endsection
