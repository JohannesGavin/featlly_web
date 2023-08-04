<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Cart;
use App\Models\UserOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function addOrder(Request $request)
    {
        $user = Auth::user();

        $sumOfPrices = 0;
        $ids = [];

        $activeCarts = Cart::where('is_active', true)->get(); // cek cart yang sudah dipunyai user dengan status codingan

        foreach ($activeCarts as $cart) {
            $sumOfPrices += ($cart->katalog->harga_promo ?? $cart->katalog->harga) * $cart->count; // untuk menjumlahkan 
            array_push($ids, $cart->id);
        }

        Cart::where('user_id', $user->id)->update(['is_active' => false]); // untuk nge set cart agar tidak aktif

        $order = new UserOrder([
            'harga' => $sumOfPrices,
            'keterangan' => "",
            'status' => "Belum Bayar",
        ]);

        $order->user_id = $user->id;
        $order->carts = json_encode($ids);

        $order->save();

        return redirect()->route('confirm', ["orderId" => $order->id])->with('success', 'Pesanan telah berhasil dibuat!');
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
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
