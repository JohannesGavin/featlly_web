@extends('layouts.app')

@section('content')
    <main class="py-14">
        <section class="container px-4">
            <h1 class="title-1">Daftar</h1>
            <p class="footnote">Masukkan nama lengkap, e-mail, & password anda</p>

            <form action="{{ route('store') }}" method="post" class="flex flex-col gap-4 mt-8 md:mt-12 max-w-[427px]">
                @csrf
                <div class="form-group flex flex-col gap-4">
                    <label class="text-lg" for="">Nama Lengkap</label>
                    <input required class="input-field" type="text" name="name" id="name"
                        placeholder="Nama lengkap">
                </div>
                <div class="form-group flex flex-col gap-4">
                    <label class="text-lg" for="">Email</label>
                    <input required class="input-field" type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group flex flex-col gap-4">
                    <label for="">Password</label>
                    <input required class="input-field" type="password" name="password" id="password"
                        placeholder="Password">
                </div>
                <div class="flex flex-col gap-4 mt-8 md:mt-10">
                    <button class="btn" type="submit">Daftar</button>
                    <p class="">Sudah punya akun? <a href="{{ route('login') }}"
                            class="text-primary-main font-bold">Masuk</a></p>
                </div>
            </form>
        </section>
    </main>
@endsection
