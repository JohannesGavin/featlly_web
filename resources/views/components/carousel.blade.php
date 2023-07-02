<div id="default-carousel" class="relative w-full md:hidden" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-72 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out mx-auto w-full" data-carousel-item>
            <img src="{{ asset('/assets/img/baju.png') }}" class="bg-slate-100 mx-auto" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out mx-auto w-full" data-carousel-item>
            <img src="{{ asset('/assets/img/baju.png') }}" class="bg-slate-100 mx-auto" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out mx-auto w-full" data-carousel-item>
            <img src="{{ asset('/assets/img/baju.png') }}" class="bg-slate-100 mx-auto" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out mx-auto w-full" data-carousel-item>
            <img src="{{ asset('/assets/img/baju.png') }}" class="bg-slate-100 mx-auto" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out mx-auto w-full" data-carousel-item>
            <img src="{{ asset('/assets/img/baju.png') }}" class="bg-slate-100 mx-auto" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="indicator w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
        <button type="button" class="indicator w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
        <button type="button" class="indicator w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
        <button type="button" class="indicator w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
            data-carousel-slide-to="3"></button>
        <button type="button" class="indicator w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
            data-carousel-slide-to="4"></button>
    </div>
</div>
