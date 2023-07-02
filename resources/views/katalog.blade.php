@extends('layouts.app')

@section('content')
    <main class="py-14">
        <section class="container px-4 flex flex-col gap-5 items-center" data-aos="fade-up">
            <h1 class="text-center title-1">Katalog</h1>
            <div class="flex gap-4 items-center">
                <p class="">
                    kategori
                </p>
                <select name="" id="" class="input-field px-4 border-neutral-800">
                    <option value="atasan">Atasan</option>
                    <option value="bawahan">Bawahan</option>
                    <option value="aksesoris">Aksesoris</option>
                    <option value="sale">Sale</option>
                    <option value="harga tertinggi">Harga tertinggi</option>
                    <option value="harga terendah">Harga terendah</option>
                </select>
            </div>
        </section>

        <section class="container px-4 grid grid-cols-6 mt-12 md:mt-20 gap-10 mb-12 md:mb-20" data-aos="fade-up">
            @foreach ($katalogs as $item)
                <a href="{{ route('detail') }}" class="card-produk self-center flex flex-col col-span-3 md:col-span-2">
                    <img src="{{ asset('storage/images/' . $item->gambar[0]) }}"
                        class="w-32 md:w-[425px] object-cover self-center h-32 md:h-[425px] bg-[#F4F3FC] rounded-2xl"
                        alt="">
                    <div class="flex flex-col gap-1 mt-2">
                        <p class="caption-2 text-neutral-300">{{ $item->kategori }}</p>
                        <p class="caption-2 font-medium">{{ $item->nama }}</p>
                        <p class="price md:mt-3 font-semibold footnote">Rp{{ $item->harga }}</p>
                    </div>
                </a>
            @endforeach

            @if (count($katalogs) === 0)
                <p class="col-span-6 text-xl text-gray-500 font-bold text-center">Saat ini belum ada katalog yang
                    tersedia...</p>
            @endif
        </section>
    </main>
@endsection
