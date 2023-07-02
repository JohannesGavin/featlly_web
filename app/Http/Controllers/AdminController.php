<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        $katalog = Katalog::all();
        $order = Order::all();

        return view('admin-dashboard', ['katalog' => count($katalog), 'order' => count($order)]);
    }

    public function adminKatalog()
    {
        $katalog = Katalog::all();

        return view('admin-katalog', ['katalog' => $katalog]);
    }

    public function addKatalogView()
    {
        return view('admin-add-katalog');
    }

    public function adminPesanan()
    {
        $orders = Order::all();
        return view('admin-pesanan', ['orders' => $orders]);
    }
}
