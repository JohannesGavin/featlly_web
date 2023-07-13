<div class="carousel relative w-full md:hidden bg-white">
    <div class="carousel-inner relative overflow-hidden w-full">
        @foreach ($katalog->gambar as $index => $image)
            <input class="carousel-open hidden" type="radio" id="carousel-{{ $index }}" name="carousel" aria-hidden="true"
                hidden="" checked="{{ $index === 0 ? 'checked' : '' }}">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <div class="block h-full w-full text-white text-5xl text-center">
                    <img src="{{ asset('storage/images/' . $image) }}"
                        class="bg-slate-100 h-full object-cover rounded-md mx-auto" alt="...">
                </div>
            </div>
        @endforeach

        <ol class="carousel-indicators">
            @foreach ($katalog->gambar as $index => $image)
                <li class="inline-block mr-3">
                    <label for="carousel-{{ $index }}"
                        class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-primary-500">•</label>
                </li>
            @endforeach
        </ol>
    </div>
</div>
