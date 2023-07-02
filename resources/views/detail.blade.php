@extends('layouts.app')

@section('content')
    <main class="py-14">
        <section class="container px-4 flex gap-5 flex-col md:flex-row">
            @include('components.carousel')
            
            <div class="flex-grow flex-1 gap-4 hidden md:grid grid-cols-2">
                <img src="{{ asset('/assets/img/baju.png') }}" class="bg-[#F4F3FC] rounded-2xl col-span-1" alt="">
                <img src="{{ asset('/assets/img/baju.png') }}" class="bg-[#F4F3FC] rounded-2xl col-span-1" alt="">
                <img src="{{ asset('/assets/img/baju.png') }}" class="bg-[#F4F3FC] rounded-2xl col-span-1" alt="">
                <img src="{{ asset('/assets/img/baju.png') }}" class="bg-[#F4F3FC] rounded-2xl col-span-1" alt="">
            </div>
            <div class="flex-1 flex-grow d">
                <p class="text-xs md:text-base text-primary-main">Atasan</p>
                <h1 class="text-2xl md:headline font-bold">Crewneck Plato Projector</h1>
                <p class="text-sm md:text-lg text-neutral-400">Great Condition 9,5/10. Size M Unisex Bahu : 45 Cm Lingkar
                    Dada : 110 Cm
                    Panjang Lengan : 58 Cm Lingkar Pinggang : 110 Cm Panjang : 67 Cm </p>

                <p class="mt-8 text-2xl md:headline font-bold">Rp99.000</p>

                <div class="flex flex-col gap-4 mt-7">
                    <button class="btn-outline w-full lg:w-[440px]">Tambahkan ke Keranjang <img
                            src="{{ asset('assets/img/cart-blue.svg') }}" alt=""></button>
                    <button class="btn-outline w-full lg:w-[440px]">Tambahkan Ke Wishlist <img
                            src="{{ asset('assets/img/love-blue.svg') }}" alt=""></button>
                </div>
            </div>
        </section>

        <section class="container px-4 grid grid-cols-6 mt-12 md:mt-20 gap-10 mb-12 md:mb-20">
            <h2 class="col-span-6 headline font-bold">Anda mungkin juga suka</h2>
            @foreach ([1, 2, 3] as $item)
                <a href="{{ route('detail') }}" class="card-produk self-center flex flex-col col-span-3 md:col-span-2">
                    <img src="{{ asset('/assets/img/baju.png') }}"
                        class="w-32 md:w-[425px] object-cover self-center h-32 md:h-[425px] bg-[#F4F3FC] rounded-2xl"
                        alt="">
                    <div class="flex flex-col gap-1 mt-2">
                        <p class="caption-2 text-neutral-300">atasan</p>
                        <p class="caption-2 font-medium">Crewneck Plato Projector</p>
                        <p class="price md:mt-3 font-semibold footnote">Rp99.000</p>
                    </div>
                </a>
            @endforeach
        </section>
    </main>
@endsection
