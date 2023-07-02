@extends('layouts.app')

@section('content')
    <main class="py-14">
        <section class="container px-4 flex flex-col gap-5 items-center">
            <h1 class="text-center title-3 font-bold">Tambah Katalog</h1>
            <form action="{{ route('admin.store-katalog') }}" method="post" class="w-full max-w-[427px] flex flex-col gap-5"
                enctype="multipart/form-data">
                @csrf
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block mt-5 w-full p-2 text-gray-900 bg-red-200 rounded-md">
                        {{ message }}
                    </div>
                @endif
                <div class="form-group flex flex-col gap-3">
                    <label class="text-lg font-semibold" for="">Nama</label>
                    <input required class="input-field-2" type="text" name="nama" id="nama"
                        placeholder="Nama barang">
                    @error('nama')
                        <span class="text-sm text-red-800 text-opacity-80" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group flex flex-col gap-3">
                    <label class="text-lg font-semibold" for="">Kategori</label>
                    <input required class="input-field-2" type="text" name="kategori" id="kategori"
                        placeholder="kategori">
                    @error('kategori')
                        <span class="text-sm text-red-800 text-opacity-80" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group flex flex-col gap-3">
                    <label class="text-lg font-semibold" for="">Detail</label>
                    <input required class="input-field-2" type="text" name="detail" id="detail" placeholder="detail">
                    @error('detail')
                        <span class="text-sm text-red-800 text-opacity-80" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group flex flex-col gap-3">
                    <label class="text-lg font-semibold" for="">Harga</label>
                    <input required class="input-field-2" type="text" name="harga" id="harga" placeholder="harga">
                    @error('harga')
                        <span class="text-sm text-red-800 text-opacity-80" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group flex flex-col gap-3">
                    <label class="text-lg font-semibold" for="">Gambar</label>
                    <input type="file" name="images[]" id="images" class="" multiple>
                    @error('images')
                        <span class="text-sm text-red-800 text-opacity-80" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="flex flex-col mt-14 w-full gap-4">
                    <button type="submit" class="btn w-full items-center flex justify-center">Simpan</button>
                    <button class="btn-outline w-full">Edit</button>
                </div>
            </form>
        </section>

    </main>
@endsection
