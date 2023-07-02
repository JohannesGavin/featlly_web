@extends('layouts.app')

@section('content')
    <main class="py-14">
        <section class="container px-4 flex flex-col gap-5 items-center">
            <h1 class="text-center title-3 font-bold">Informasi Pembelian</h1>

            <form action="{{ route('create-order-info', ['id' => auth()->user()->id]) }}" method="post"
                class="w-full max-w-[427px] flex flex-col gap-5">
                @csrf
                <div class="form-group flex flex-col gap-3">
                    <label class="text-lg font-semibold" for="">Nama Lengkap</label>
                    <input required class="input-field-2" type="text" name="name" id="name"
                        placeholder="Nama lengkap">
                </div>
                <div class="form-group flex flex-col gap-3">
                    <label class="text-lg font-semibold" for="">Alamat</label>
                    <input required class="input-field-2" type="text" name="alamat" id="alamat" placeholder="Alamat">
                </div>
                <div class="form-group flex flex-col gap-3">
                    <label class="text-lg font-semibold" for="">Provinsi</label>
                    <input required class="input-field-2" type="text" name="provinsi" id="provinsi"
                        placeholder="Provinsi">
                </div>
                <div class="form-group flex flex-col gap-3">
                    <label class="text-lg font-semibold" for="">Kabupaten/Kota</label>
                    <input required class="input-field-2" type="text" name="kabupaten" id="kabupaten"
                        placeholder="Kabupaten/Kota">
                </div>
                <div class="form-group flex flex-col gap-3">
                    <label class="text-lg font-semibold" for="">Kecamatan</label>
                    <input required class="input-field-2" type="text" name="kecamatan" id="kecamatan"
                        placeholder="Kecamatan">
                </div>
                <div class="form-group flex flex-col gap-3">
                    <label class="text-lg font-semibold" for="">Kelurahan</label>
                    <input required class="input-field-2" type="text" name="kelurahan" id="kelurahan"
                        placeholder="Kelurahan">
                </div>
                <div class="form-group flex flex-col gap-3">
                    <label class="text-lg font-semibold" for="">Kode Pos</label>
                    <input required class="input-field-2" type="number" name="kode_pos" id="kode_pos"
                        placeholder="Kode Pos">
                </div>
                <div class="form-group flex flex-col gap-3">
                    <label class="text-lg font-semibold" for="">No. Telepon</label>
                    <input required class="input-field-2" type="number" name="no_telp" id="no_telp"
                        placeholder="No. Telepon">
                </div>

                <div class="flex flex-col mt-14 w-full gap-4">
                    <button type="submit" class="btn w-full items-center flex justify-center">Lanjut ke
                        pemesanan</button>
                    <button class="btn-outline w-full">Simpan</button>
                </div>
            </form>
        </section>

    </main>
@endsection
