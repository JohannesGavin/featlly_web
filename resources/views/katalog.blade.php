@extends('layouts.app')

@section('content')
    <main class="py-14">
        <section class="container px-4 flex flex-col gap-5 items-center" data-aos="fade-up">
            <h1 class="text-center title-1">Katalog</h1>
            <div class="flex gap-4 items-center">
                <p class="">
                    kategori
                </p>
                <select name="" id="filter" class="input-field px-4 border-neutral-800">
                    <option value="all">Semua</option>
                    <option value="sale">Sale</option>
                    <option value="atasan">Atasan</option>
                    <option value="bawahan">Bawahan</option>
                    <option value="aksesoris">Aksesoris</option>
                    {{-- <option value="harga tertinggi">Harga tertinggi</option>
                    <option value="harga terendah">Harga terendah</option> --}}
                </select>
            </div>
        </section>

        <section id="all" class="container px-4 grid grid-cols-6 mt-12 md:mt-20 gap-10 mb-12 md:mb-20"
            data-aos="fade-up">
            @foreach ($katalogs as $item)
                <a href="{{ route('detail', ['id' => $item->id]) }}"
                    class="card-produk self-center flex flex-col h-full col-span-3 md:col-span-2">
                    <img src="{{ asset('storage/images/' . $item->gambar[0]) }}"
                        class="w-full md:w-full object-cover self-center h-32 md:h-[425px] bg-[#F4F3FC] rounded-2xl"
                        alt="">
                    <div class="flex flex-col gap-1 mt-2">
                        <p class="caption-2 text-neutral-300">{{ $item->kategori }}</p>
                        <p class="caption-2 font-medium">{{ $item->nama }}</p>
                        <div class="flex flex-col lg:flex-row lg:items-center gap-0 lg:gap-3">
                            @if ($item->harga_promo)
                                <p class="price line-through text-gray-400 md:mt-3 font-semibold footnote">
                                    Rp{{ number_format($item->harga, 2, '.', ',') }}
                                </p>
                                <p class="price md:mt-3 font-semibold footnote">
                                    Rp{{ number_format($item->harga_promo, 2, '.', ',') }}
                                </p>
                            @else
                                <p class="price md:mt-3 font-semibold footnote">
                                    Rp{{ number_format($item->harga, 2, '.', ',') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach

            @if (count($katalogs) === 0)
                <p class="col-span-6 text-xl text-gray-500 font-bold text-center">Saat ini belum ada katalog yang
                    tersedia...</p>
            @endif
        </section>

        <section id="sale" class="container px-4 grid grid-cols-6 mt-12 md:mt-20 gap-10 mb-12 md:mb-20"
            data-aos="fade-up">
            @foreach ($sale as $item)
                <a href="{{ route('detail', ['id' => $item->id]) }}"
                    class="card-produk self-center flex flex-col h-full col-span-3 md:col-span-2">
                    <img src="{{ asset('storage/images/' . $item->gambar[0]) }}"
                        class="w-full md:w-full object-cover self-center h-32 md:h-[425px] bg-[#F4F3FC] rounded-2xl"
                        alt="">
                    <div class="flex flex-col gap-1 mt-2">
                        <p class="caption-2 text-neutral-300">{{ $item->kategori }}</p>
                        <p class="caption-2 font-medium">{{ $item->nama }}</p>
                        <div class="flex flex-col lg:flex-row lg:items-center gap-0 lg:gap-3">
                            @if ($item->harga_promo)
                                <p class="price line-through text-gray-400 md:mt-3 font-semibold footnote">
                                    Rp{{ number_format($item->harga, 2, '.', ',') }}
                                </p>
                                <p class="price md:mt-3 font-semibold footnote">
                                    Rp{{ number_format($item->harga_promo, 2, '.', ',') }}
                                </p>
                            @else
                                <p class="price md:mt-3 font-semibold footnote">
                                    Rp{{ number_format($item->harga, 2, '.', ',') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach

            @if (count($sale) === 0)
                <p class="col-span-6 text-xl text-gray-500 font-bold text-center">Saat ini belum ada katalog yang
                    tersedia...</p>
            @endif
        </section>

        <section id="bawahan" class="container px-4 grid grid-cols-6 mt-12 md:mt-20 gap-10 mb-12 md:mb-20"
            data-aos="fade-up">
            @foreach ($bawahan as $item)
                <a href="{{ route('detail', ['id' => $item->id]) }}"
                    class="card-produk self-center flex flex-col h-full col-span-3 md:col-span-2">
                    <img src="{{ asset('storage/images/' . $item->gambar[0]) }}"
                        class="w-full md:w-full object-cover self-center h-32 md:h-[425px] bg-[#F4F3FC] rounded-2xl"
                        alt="">
                    <div class="flex flex-col gap-1 mt-2">
                        <p class="caption-2 text-neutral-300">{{ $item->kategori }}</p>
                        <p class="caption-2 font-medium">{{ $item->nama }}</p>
                        <div class="flex flex-col lg:flex-row lg:items-center gap-0 lg:gap-3">
                            @if ($item->harga_promo)
                                <p class="price line-through text-gray-400 md:mt-3 font-semibold footnote">
                                    Rp{{ number_format($item->harga, 2, '.', ',') }}
                                </p>
                                <p class="price md:mt-3 font-semibold footnote">
                                    Rp{{ number_format($item->harga_promo, 2, '.', ',') }}
                                </p>
                            @else
                                <p class="price md:mt-3 font-semibold footnote">
                                    Rp{{ number_format($item->harga, 2, '.', ',') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach

            @if (count($bawahan) === 0)
                <p class="col-span-6 text-xl text-gray-500 font-bold text-center">Saat ini belum ada katalog yang
                    tersedia...</p>
            @endif
        </section>

        <section id="atasan" class="container px-4 grid grid-cols-6 mt-12 md:mt-20 gap-10 mb-12 md:mb-20"
            data-aos="fade-up">
            @foreach ($atasan as $item)
                <a href="{{ route('detail', ['id' => $item->id]) }}"
                    class="card-produk self-center flex flex-col h-full col-span-3 md:col-span-2">
                    <img src="{{ asset('storage/images/' . $item->gambar[0]) }}"
                        class="w-full md:w-full object-cover self-center h-32 md:h-[425px] bg-[#F4F3FC] rounded-2xl"
                        alt="">
                    <div class="flex flex-col gap-1 mt-2">
                        <p class="caption-2 text-neutral-300">{{ $item->kategori }}</p>
                        <p class="caption-2 font-medium">{{ $item->nama }}</p>
                        <div class="flex flex-col lg:flex-row lg:items-center gap-0 lg:gap-3">
                            @if ($item->harga_promo)
                                <p class="price line-through text-gray-400 md:mt-3 font-semibold footnote">
                                    Rp{{ number_format($item->harga, 2, '.', ',') }}
                                </p>
                                <p class="price md:mt-3 font-semibold footnote">
                                    Rp{{ number_format($item->harga_promo, 2, '.', ',') }}
                                </p>
                            @else
                                <p class="price md:mt-3 font-semibold footnote">
                                    Rp{{ number_format($item->harga, 2, '.', ',') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach

            @if (count($atasan) === 0)
                <p class="col-span-6 text-xl text-gray-500 font-bold text-center">Saat ini belum ada katalog yang
                    tersedia...</p>
            @endif
        </section>

        <section id="aksesoris" class="container px-4 grid grid-cols-6 mt-12 md:mt-20 gap-10 mb-12 md:mb-20"
            data-aos="fade-up">
            @foreach ($aksesoris as $item)
                <a href="{{ route('detail', ['id' => $item->id]) }}"
                    class="card-produk self-center flex flex-col h-full col-span-3 md:col-span-2">
                    <img src="{{ asset('storage/images/' . $item->gambar[0]) }}"
                        class="w-full md:w-full object-cover self-center h-32 md:h-[425px] bg-[#F4F3FC] rounded-2xl"
                        alt="">
                    <div class="flex flex-col gap-1 mt-2">
                        <p class="caption-2 text-neutral-300">{{ $item->kategori }}</p>
                        <p class="caption-2 font-medium">{{ $item->nama }}</p>
                        <div class="flex flex-col lg:flex-row lg:items-center gap-0 lg:gap-3">
                            @if ($item->harga_promo)
                                <p class="price line-through text-gray-400 md:mt-3 font-semibold footnote">
                                    Rp{{ number_format($item->harga, 2, '.', ',') }}
                                </p>
                                <p class="price md:mt-3 font-semibold footnote">
                                    Rp{{ number_format($item->harga_promo, 2, '.', ',') }}
                                </p>
                            @else
                                <p class="price md:mt-3 font-semibold footnote">
                                    Rp{{ number_format($item->harga, 2, '.', ',') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach

            @if (count($aksesoris) === 0)
                <p class="col-span-6 text-xl text-gray-500 font-bold text-center">Saat ini belum ada katalog yang
                    tersedia...</p>
            @endif
        </section>
    </main>
@endsection


@push('scripts')
    <script>
        const elements = {
            "sale": $("#sale"),
            "bawahan": $("#bawahan"),
            "atasan": $("#atasan"),
            "all": $("#all"),
            "aksesoris": $("#aksesoris")
        };

        Object.values(elements).forEach(element => element.hide());
        $("#all").show()

        $("#filter").on("change", () => {
            const selectedFilter = $("#filter").val();
            Object.entries(elements).forEach(([key, value]) => {
                if (key === selectedFilter) {
                    value.show();
                } else {
                    value.hide();
                }
            });

            console.log("Z")
        });
    </script>
@endpush
