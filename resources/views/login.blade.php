@extends('layouts.app')

@section('content')
    <main class="py-14">
        <section class="container px-4">
            <h1 class="title-1">Masuk</h1>
            <p class="footnote">Masukkan e-mail & password anda</p>

            <form action="{{ route('authenticate') }}" method="post" class="flex flex-col gap-4 mt-8 md:mt-12 max-w-[427px]">
                @csrf
                <div class="form-group flex flex-col gap-4">
                    <label class="text-lg" for="">Email</label>
                    <input class="input-field" type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group flex flex-col gap-4">
                    <label for="">Password</label>
                    <input class="input-field" type="password" name="password" id="password" placeholder="Password">
                </div>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <p class="text-error-500">{{ $errors->first('email') }}</p>
                    </span>
                @endif
                <div class="flex flex-col gap-4 mt-8 md:mt-10">
                    <button type="submit"
                        class="py-3 rounded-full bg-primary-main text-white w-fit min-w-[175px]">Masuk</button>
                    <p class="">Belum punya akun? <a href="{{ route('register') }}"
                            class="text-primary-main font-bold">Daftar</a></p>
                </div>
            </form>
        </section>
    </main>
@endsection
