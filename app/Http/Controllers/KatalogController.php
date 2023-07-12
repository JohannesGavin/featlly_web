<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use App\Http\Requests\StoreKatalogRequest;
use App\Http\Requests\UpdateKatalogRequest;

class KatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $katalog = Katalog::all();

        return view('admin-katalog', ['katalog' => $katalog]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-add-katalog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKatalogRequest $request)
    {
        //
        $validatedData = $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'detail' => 'required',
            'harga' => 'required|numeric',
            'harga_promo' => '',
        ]);

        $katalog = new Katalog([
            'nama' => $validatedData['nama'],
            'kategori' => $validatedData['kategori'],
            'detail' => $validatedData['detail'],
            'harga' => $validatedData['harga'],
            'harga_promo' => $validatedData['harga_promo'],
            'is_sale' => $validatedData['harga_promo'] != 0
        ]);

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $imagePaths = [];

            foreach ($images as $image) {
                $timestamp = time();
                $filename = $timestamp . '_' . $image->getClientOriginalName();
                $image->storeAs('public/images', $filename);
                $imagePaths[] = $filename;
            }

            $katalog->gambar = $imagePaths;
        }

        $katalog->save();

        return redirect()->route('admin.katalog.index')->with('success', 'Katalog berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     */
    public function show(Katalog $katalog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Katalog $katalog)
    {
        return view('admin-edit-katalog', compact('katalog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKatalogRequest $request, Katalog $katalog)
    {
        //
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'detail' => 'required',
            'harga' => 'required|numeric',
            'harga_promo' => '',
        ]);

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $imagePaths = [];

            foreach ($images as $image) {
                $timestamp = time();
                $filename = $timestamp . '_' . $image->getClientOriginalName();
                $image->storeAs('public/images', $filename);
                $imagePaths[] = $filename;
            }

            $katalog->gambar = $imagePaths;
        }

        $katalog->nama = $request->input('nama');
        $katalog->kategori = $request->input('kategori');
        $katalog->detail = $request->input('detail');
        $katalog->harga = $request->input('harga');
        $katalog->harga_promo = $request->input('harga_promo');
        $katalog->is_sale = $katalog->harga_promo != "";

        $katalog->update();

        return redirect()->route('admin.katalog.index')->with('success', 'Katalog berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Katalog $katalog)
    {
        //
        $katalog->delete();

        return redirect()->route('admin.katalog.index')->with('success', 'Katalog berhasil dihapus');
    }
}