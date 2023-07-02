@extends('layouts.app')

@section('content')
    <main class="py-14">
        <section class="container px-4">
            <div class="hero bg-hero py-[97px] rounded-3xl flex flex-col items-center">
                <img src="{{ asset('assets/img/dark-logo.svg') }}" class="w-[100px] md:w-[138px]" alt="">
                <div class="flex flex-col items-center px-3">
                    <h1 class="text-3xl md:title-1">
                        Ini adalah <span class="text-primary-500">Featlly</span>
                    </h1>
                    <p class="text-neutral-500 text-xs mt-2 md:footnote max-w-[744px] text-center">Kami memiliki tujuan untuk
                        membantu para remaja Indonesia dalam mengekspresikan dirinya melalui pakaian dan busana.</p>
                </div>
            </div>

            <section class="mt-14">
                <h2 class="text-3xl md:title-1">Kontak Kami</h2>
                <p class="max-w-[563px] text-xs md:footnote text-neutral-700">Jika ada yang ingin ditanyakan terkait produk
                    ataupun pengembalian barang bisa segera hubungi kontak dibawah ini.</p>

                <div class="flex flex-col mt-8 md:mt-28 gap-6 md:gap-12">
                    <div class="flex gap-3 md:gap-9 items-center body md:headline text-neutral-400">
                        <img class="h-10 w-10 md:h-20 md:w-20" src="{{ asset('assets/img/wa-icon.svg') }}" alt="">
                        +62 878 70883466
                    </div>
                    <div class="flex gap-3 md:gap-9 items-center body md:headline text-neutral-400">
                        <img class="h-10 w-10 md:h-20 md:w-20" src="{{ asset('assets/img/ig-icon.svg') }}" alt="">
                        @featlly
                    </div>
                    <div class="flex gap-3 md:gap-9 items-center body md:headline text-neutral-400">
                        <img class="h-10 w-10 md:h-20 md:w-20" src="{{ asset('assets/img/gmail-icon.svg') }}"
                            alt="">
                        featllythrift@gmail.com
                    </div>
                </div>
            </section>
        </section>
    </main>
@endsection
