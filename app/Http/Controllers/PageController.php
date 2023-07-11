<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tentangKami()
    {
        return view('tentang-kami');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function home()
    {
        return view('home');
    }

    public function katalog()
    {
        $katalogs = Katalog::all();
        $sale = Katalog::where('is_sale', 1)->get();
        $atasan = Katalog::where('kategori', "Atasan")->get();
        $bawahan = Katalog::where('kategori', "Bawahan")->get();
        $aksesoris = Katalog::where('kategori', "Aksesoris")->get();

        return view('katalog', compact('katalogs', 'sale', 'atasan', 'bawahan', 'aksesoris'));
    }

    public function detail($id)
    {
        $katalogs = Katalog::all();
        $katalog = Katalog::where('id', $id)->first();

        return view('detail', ["katalogs" => $katalogs, "katalog" => $katalog]);
    }

    public function cart()
    {
        return view('cart');
    }

    public function wishlist()
    {
        return view('wishlist');
    }

    public function buyInfo()
    {
        return view('buy-info');
    }

    public function confirm()
    {
        return view('confirm');
    }

    public function confirmPost()
    {
        if (Auth::check()) {
            $user = Auth::user();
        } else {
            $user = null;
        }

        return redirect()->route('profil')->with('success', 'Konfirmasi pembayaran berhasil');
    }

    public function createOrder()
    {
        return view('create-order');
    }

    public function profil()
    {
        if (Auth::check()) {
            $user = Auth::user();
        } else {
            $user = null;
        }

        return view('profil', ["user" => $user]);
    }

    public function order()
    {
        return view('order');
    }

    public function orderHistory()
    {
        return view('order-history');
    }

    // ADMIN
    public function adminDashboard()
    {
        return view('admin-dashboard');
    }

    public function adminKatalog()
    {
        return view('admin-katalog');
    }

    public function addKatalogView()
    {
        return view('admin-add-katalog');
    }

    public function adminPesanan()
    {
        return view('admin-pesanan');
    }

    public function orderInfo(Request $request, $id)
    {
        // Validate the input data
        $alamat = $request->input('alamat') . ", " . $request->input('provinsi') . ", " . $request->input('kabupaten') . ", " . $request->input('kecamatan') . ", " . $request->input('kelurahan') . ", " . $request->input('kode_pos');

        $validatedData = [
            'name' => $request->input('name'),
            'alamat' => $alamat,
            'no_telp' => $request->input('no_telp'),
        ];

        // Find the model instance by ID
        $model = User::findOrFail($id);

        // Update the model with the validated data
        $model->fill($validatedData);
        $model->save();
        // Redirect or return a response
        return redirect()->route('create-order')->with('success', 'Data updated successfully');
    }

    public function createOrderPost(Request $request, $id)
    {
        // nama, barang, alamat, jumlah, total harga, keterangan

        // Validate the input data
        $alamat = $request->input('alamat') . ", " . $request->input('provinsi') . ", " . $request->input('kabupaten') . ", " . $request->input('kecamatan') . ", " . $request->input('kelurahan') . ", " . $request->input('kode_pos');

        $validatedData = [
            'name' => $request->input('name'),
            'alamat' => $alamat,
            'no_telp' => $request->input('no_telp'),
        ];

        // Find the model instance by ID
        $model = User::findOrFail($id);

        // Update the model with the validated data
        $model->fill($validatedData);
        $model->save();
        // Redirect or return a response
        return redirect()->route('create-order')->with('success', 'Data updated successfully');
    }
}