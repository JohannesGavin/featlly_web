<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Katalog;
use App\Models\Order;
use App\Models\UserOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        $katalog = Katalog::all();
        $order = UserOrder::all();

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
        $orders = UserOrder::all();
        $orderCarts = [];

        foreach ($orders as $order) {
            $cartIds = json_decode($order->carts, true);
            $carts = Cart::whereIn('id', $cartIds)->get();
            $orderCarts[$order->id] = $carts;
        }

        return view('admin-pesanan', ['orders' => $orders, "orderCarts" => $orderCarts]);
    }
}