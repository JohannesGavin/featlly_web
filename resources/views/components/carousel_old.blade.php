<div id="default-carousel" class="relative w-full md:hidden" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-72 overflow-hidden rounded-lg md:h-96">
        @foreach ($katalog->gambar as $index => $image)
            <div class="hidden duration-700 ease-in-out mx-auto w-full"
                data-carousel-item="{{ $index === 0 ? 'active' : '' }}">
                <img src="{{ asset('storage/images/' . $image) }}" class="bg-slate-100 mx-auto" alt="...">
            </div>
        @endforeach
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        @foreach ($katalog->gambar as $index => $image)
            <button type="button" class="indicator w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="{{ $index }}"></button>
        @endforeach
    </div>
</div>
