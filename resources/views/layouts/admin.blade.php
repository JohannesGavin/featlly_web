<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Featlly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @vite('resources/css/app.css')
</head>

<body class="grid grid-cols-12">
    <section class="col-span-2">
        <div class="h-full px-10 py-8 flex flex-col fixed bg-white">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('assets/img/logo-featlly.svg') }}" alt=""></a>
            </div>

            <div class="flex flex-col gap-12 mt-10">
                <a class="{{ Route::current()->getName() == 'admin.dashboard' ? 'font-bold text-primary-500' : '' }}"
                    href="{{ route('admin.dashboard') }}">Dashboard</a>
                <a class="{{ Route::current()->getName() == 'admin.katalog' ? 'font-bold text-primary-500' : '' }}"
                    href="{{ route('admin.katalog') }}">Katalog</a>
                <a class="{{ Route::current()->getName() == 'admin.pesanan' ? 'font-bold text-primary-500' : '' }}"
                    href="{{ route('admin.pesanan') }}">Pesanan</a>
                <a class="{{ Route::current()->getName() == 'admin.keluar' ? 'font-bold text-primary-500' : '' }}"
                    href="{{ route('logout') }}">Keluar</a>
            </div>
        </div>
    </section>
    <section class="col-span-10 border-l-[1px] border-slate-100">
        <div class="px-14 py-6">
            <p class="text-[30px] font-medium">@yield('title')</p>
        </div>
        <div class="w-full bg-primary-0 bg-opacity-40 p-14 min-h-screen">
            @if (session('success'))
                <div class="bg-green-100 p-3 rounded-md col-span-12 mb-5 text-green-800">{{ session('success') }}</div>
            @endif
            @yield('content')
        </div>
    </section>

    <script>
        AOS.init();
    </script>
</body>

</html>
