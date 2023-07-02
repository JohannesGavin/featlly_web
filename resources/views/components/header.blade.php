<header class="bg-white shadow-navbar sticky top-0 z-50">
    <nav class="container px-4 bg-white border-gray-200 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex h-[90px] flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="/">
                <img src="{{ asset('assets/img/logo-featlly.svg') }}" alt=""></a>
            <div class="flex items-center lg:order-2 gap-4">
                <div class="hidden md:flex gap-5">
                    <a href="{{ route('wishlist') }}" class="icon">
                        <img src="{{ asset('assets/img/love-plus.svg') }}" alt=""></a>
                    <a href="{{ route('cart') }}" class="icon">
                        <img src="{{ asset('assets/img/cart.svg') }}" alt=""></a>
                    <a href="{{ route('profil') }}" class="icon">
                        <img src="{{ asset('assets/img/user.svg') }}" alt=""></a>
                </div>

                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <div class="fade-in hidden shadow-navbar md:shadow-none justify-between items-center w-full lg:flex lg:w-auto lg:order-1 md:static absolute top-[90px] left-0 bg-white px-8"
                id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0 py-8">
                    <li>
                        <a href="{{ route('katalog') }}"
                            class="nav-item-mobile {{ Route::current()->getName() == 'katalog' ? 'font-bold' : '' }}">Katalog</a>
                    </li>
                    <li>
                        <a href="{{ route('tentang-kami') }}"
                            class="nav-item-mobile {{ Route::current()->getName() == 'tentang-kami' ? 'font-bold' : '' }}">Tentang
                            Kami</a>
                    </li>
                    <li class="md:hidden">
                        <a href="{{ route('wishlist') }}"
                            class="nav-item-mobile {{ Route::current()->getName() == 'wishlist' ? 'font-bold' : '' }}">Wishlist</a>
                    </li>
                    <li class="md:hidden">
                        <a href="{{ route('cart') }}"
                            class="nav-item-mobile {{ Route::current()->getName() == 'cart' ? 'font-bold' : '' }}">Keranjang</a>
                    </li>
                    <li class="md:hidden">
                        <a href="{{ route('profil') }}"
                            class="nav-item-mobile {{ Route::current()->getName() == 'profil' ? 'font-bold' : '' }}">Profil</a>
                    </li>
                    <li
                        class="flex pr-4 pl-3 gap-6 mt-4 font-medium hidden md:hidden lg:flex-row lg:space-x-8 lg:mt-0 py-8 items-center">
                        <a href="{{ route('wishlist') }}" class="icon">
                            <img src="{{ asset('assets/img/love-plus.svg') }}" alt=""></a>
                        <a href="{{ route('cart') }}" class="icon">
                            <img src="{{ asset('assets/img/cart.svg') }}" alt=""></a>
                        <a href="{{ route('profil') }}" class="icon">
                            <img src="{{ asset('assets/img/user.svg') }}" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
