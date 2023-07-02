<section class="mt-4 md:mt-14 py-12 md:py-20 container px-4" data-aos="fade-up">
    <h2 class="text-3xl md:title-1">Kategori</h2>
    <div class="mt-10 grid grid-cols-3 md:grid-cols-6 gap-4">
        <div class="col-span-3 row-span-2 h-36 md:h-[320px] lg:h-[620px]">
            <a href="{{ route('katalog') }}"
                class="bg-slate-600 block p-12 rounded-2xl card-katalog h-full relative overflow-hidden">
                <img class="absolute top-0 bottom-0 left-0 right-0 object-cover h-full w-full"
                    src="{{ asset('/assets/img/atasan.png') }}" alt="">
                <div
                    class="category-name font-recia px-8 py-2 rounded-full bg-neutral-950 text-white caption-2 font-bold absolute bottom-5 left-5">
                    Atasan</div>
            </a>
        </div>
        <div class="col-span-3 md:col-span-2 h-full row-span-2">
            <div class="flex flex-col gap-4 h-full">
                <a href="{{ route('katalog') }}"
                    class="block bg-slate-600 p-12 card-katalog rounded-2xl h-full relative overflow-hidden">
                    <img class="absolute top-0 bottom-0 left-0 right-0 object-cover h-full w-full"
                        src="{{ asset('/assets/img/bawahan.png') }}" alt="">
                    <div
                        class="category-name font-recia px-8 py-2 rounded-full bg-neutral-950 text-white caption-2 font-bold absolute bottom-5 left-5">
                        Bawahan</div>
                </a>
                <a href="{{ route('katalog') }}"
                    class="block bg-slate-600 p-12 card-katalog rounded-2xl h-full relative overflow-hidden">
                    <img class="absolute top-0 bottom-0 left-0 right-0 object-cover h-full w-full"
                        src="{{ asset('/assets/img/aksesoris.png') }}" alt="">
                    <div
                        class="category-name font-recia px-8 py-2 rounded-full bg-neutral-950 text-white caption-2 font-bold absolute bottom-5 left-5">
                        Aksesoris</div>
                </a>
            </div>
        </div>
        <div class="col-span-3 md:col-span-1 row-span-2">
            <a href="{{ route('katalog') }}"
                class="bg-slate-600 block p-12 rounded-2xl card-katalog h-full relative overflow-hidden">
                <img class="absolute top-0 bottom-0 left-0 right-0 object-cover h-full w-full"
                    src="{{ asset('/assets/img/sale.png') }}" alt="">
                <div
                    class="category-name font-recia px-8 py-2 rounded-full bg-neutral-950 text-white caption-2 font-bold absolute bottom-5 left-5">
                    Sale</div>
            </a>
        </div>
    </div>
</section>
