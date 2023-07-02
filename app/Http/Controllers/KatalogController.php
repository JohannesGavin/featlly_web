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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        ]);

        $katalog = new Katalog([
            'nama' => $validatedData['nama'],
            'kategori' => $validatedData['kategori'],
            'detail' => $validatedData['detail'],
            'harga' => $validatedData['harga'],
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

        return redirect()->route('admin.katalog')->with('success', 'Katalog berhasil ditambahkan');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKatalogRequest $request, Katalog $katalog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Katalog $katalog)
    {
        //
    }
}
