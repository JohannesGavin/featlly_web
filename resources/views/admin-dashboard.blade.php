@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="flex gap-9">
        <a href="{{ route('admin.katalog.index') }}" class="bg-white rounded-2xl pl-2 px-9 py-6 flex items-center">
            <img src="{{ asset('/assets/img/order-admin.svg') }}" alt="">
            <div class="flex flex-col justify-between">
                <p class="text-[48px]">{{ $katalog }}</p>
                <p class="text-4xl">Katalog</p>
            </div>
        </a>
        <a href="{{ route('admin.pesanan') }}" class="bg-white rounded-2xl pl-2 px-9 py-6 flex items-center">
            <img src="{{ asset('/assets/img/catalog-admin.svg') }}" alt="">
            <div class="flex flex-col justify-between">
                <p class="text-[48px]">{{ $order }}</p>
                <p class="text-4xl">Pesanan</p>
            </div>
        </a>
    </div>
@endsection
