@extends('layouts.app')

@section('content')
    <main class="py-14">
        <section class="container px-4">
            @if (session('success'))
                <div class="bg-green-100 p-3 rounded-md col-span-12 mb-5 text-green-800">{{ session('success') }}</div>
            @endif
            @if (session('message'))
                <div class="bg-green-100 p-3 rounded-md col-span-12 mb-5 text-green-800">{{ session('message') }}</div>
            @endif
            <div class="hero bg-hero py-[97px] rounded-3xl flex flex-col items-center" data-aos="fade-up">
                <div class="flex flex-col items-center">
                    <h1 class="text-3xl md:title-1 text-center">
                        Gaperlu banyak tenaga <br>
                        tinggal klik & tunggu di rumah
                    </h1>
                    <p class="text-neutral-500 text-xs md:footnote max-w-[744px] text-center mt-4">kami percaya pada dunia di
                        mana membeli pakaian bekas adalah pilihan pertama semua orang.</p><br>
                        <a href="{{ route('katalog') }}" class="btn btn-primary px-10">Beli Sekarang</a>
                </div>
            </div>
        </section>

        @include('components.kategori')

        <section class="bg-hero relative md:pb-40" data-aos="fade-up">
            <div class="container px-4 py-12 md:py-20">
                <h2 class="text-3xl md:title-1 max-w-[686px]">
                    Tingkatkan permainan belanja Anda
                </h2>
                <p class="max-w-[686px] mt-3">kami membangun layanan untuk membantumu
                    dalam proses meningkatkan kepercayaan dalam berbelanja.</p>

                <div class="flex gap-10 md:gap-20 mt-8 md:mt-16 md:pb-52 flex-col md:flex-row">
                    <div class="step-container flex gap-7">
                        <div class="flex-grow p-2 rounded-full bg-white flex flex-col items-center justify-between">
                            <div class="h-[10px] w-[10px] rounded-full bg-neutral-800 mt-2"></div>
                            <div class="h-[10px] w-[10px] rounded-full bg-neutral-800"></div>
                            <img src="{{ asset('/assets/img/check.svg') }}" alt="">
                        </div>
                        <div class="flex flex-col gap-10">
                            <div>
                                <p class="md:title-3 text-2xl text-neutral-500 font-famil">Step 1</p>
                                <p class="text-xs md:footnote text-neutral-500">pilih produk kesukaan anda! dan tambahkan ke
                                    keranjang.
                                </p>
                            </div>
                            <div>
                                <p class="md:title-3 text-2xl text-neutral-500 font-famil">Step 2</p>
                                <p class="text-xs md:footnote text-neutral-500">klik tombol checkout.
                                </p>
                            </div>
                            <div>
                                <p class="md:title-3 text-2xl text-neutral-500 font-famil">Step 3</p>
                                <p class="text-xs md:footnote text-neutral-500">proses pembayaranmu
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="desc max-w-[369px]">
                        <h3 class="text-2xl md:title-2">mudah membeli</h3>
                        <p class="text-xs md:footnote">Featlly memudahkan kalian dalam proses membeli barang dengan
                            menggunakan
                            e-commerce terpercaya.</p>
                    </div>
                </div>
            </div>
            <img class="absolute bottom-0 right-9 hidden md:block" src="{{ asset('assets/img/iphone-13.png') }}"
                alt="">
        </section>

        <section class="container px-4" data-aos="fade-up">
            <h2 class="text-3xl md:title-1 py-4">kenapa Featlly?</h2>
            <p class="max-w-[563px] text-xs md:footnote text-neutral-700"> Featlly adalah penyedia produk thrift masa kini
                yang digemari oleh para remaja indonesia. <br> <br> memiliki kualitas pelayanan yang baik seperti:
            </p>

            <div class="flex flex-col mt-12 md:mt-24 gap-8 md:gap-20">
                <div class="flex gap-6 md:gap-16 items-center">
                    <img class="w-14 h-14 md:w-24 md:h-24" src="{{ asset('/assets/img/why-1.svg') }}" alt="">
                    <div class="text-neutral-500">
                        <p class="headline md:md:title-3 text-2xl text-neutral-500 font-famil">100% dicuci</p>
                        <p class="text-neutral-500">produk bersih dan aman.</p>
                    </div>
                </div>
                <div class="flex gap-6 md:gap-16 items-center">
                    <img class="w-14 h-14 md:w-24 md:h-24" src="{{ asset('/assets/img/why-2.svg') }}" alt="">
                    <div class="text-neutral-500">
                        <p class="headline md:md:title-3 text-2xl text-neutral-500 font-famil">bebas pengembalian</p>
                        <p class="text-neutral-500">barang tidak sesuai ekspetasi? jangan khawatir. anda dapat
                            mengembalikannya.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
