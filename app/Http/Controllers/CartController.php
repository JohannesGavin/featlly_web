<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Http\Requests\UpdateUserOrderRequest;
use App\Models\UserOrder;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Type\Integer;

class CartController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCartRequest $request, $katalogId)
    {
        $existingCart = Cart::where('user_id', Auth::user()->id)
            ->where('katalog_id', $katalogId)
            ->where('is_active', true)
            ->first();

        if ($existingCart) {
            $existingCart->count++;
            $existingCart->save();
        } else {
            $cart = new Cart([
                'user_id' => Auth::user()->id,
                'katalog_id' => $katalogId,
                'count' => 1,
            ]);

            $cart->save();
        }

        return redirect()->back()->with('success', 'Berhasil ditambahkan ke keranjang');
    }

    /**
     * Display the specified resource by user.
     */
    public function cartPages()
    {
        //
        $carts = Cart::where("user_id", Auth::user()->id)->where('is_active', true)->get();
        $totalPrice = 0;

        foreach ($carts as $cart) {
            $totalPrice += ($cart->katalog->harga_promo ?? $cart->katalog->harga) * $cart->count;
        }

        return view('cart', ["carts" => $carts, "totalPrice" => $totalPrice]);
    }

    /**
     * Display the specified resource by user.
     */
    public function createOrderPages()
    {
        //
        $carts = Cart::where("user_id", Auth::user()->id)->where('is_active', true)->get();
        $totalPrice = 0;

        foreach ($carts as $cart) {
            $totalPrice += ($cart->katalog->harga_promo ?? $cart->katalog->harga) * $cart->count;
        }

        return view('create-order', ["carts" => $carts, "totalPrice" => $totalPrice]);
    }

    /**
     * Display the specified resource by user.
     */
    public function confirmOrder($orderId)
    {

        $latestOrder = UserOrder::where("id", $orderId)->first();
        $totalPrice = $latestOrder->harga;

        return view('confirm', ["totalPrice" => $totalPrice, "order" => $latestOrder]);
    }

    public function confirmPost(UpdateUserOrderRequest $request, $orderId)
    {
        $latestOrder = UserOrder::where("id", $orderId)->first();

        if ($request->hasFile('images')) {
            $images = $request->file('images');

            $timestamp = time();
            $filename = $timestamp . '_' . $images->getClientOriginalName();
            $images->storeAs('public/images', $filename);
            $imagePaths = $filename;

            $latestOrder->bukti_pembayaran = $imagePaths;
        }

        $latestOrder->update();
        $latestOrder->update([
            'status' => "Sudah Bayar",
            'keterangan' => "Sudah dibayar oleh " . $request->input("nama") . " pada tanggal " . $request->input("tanggal") . " dengan metode " . $request->input("metode")
        ]);

        return redirect()->route('profil')->with('success', 'Berhasil mengirim bukti pembayaran');
    }

    public function acceptPost(UpdateUserOrderRequest $request, $orderId)
    {
        $latestOrder = UserOrder::where("id", $orderId)->first();
        $latestOrder->update([
            'status' => "Dikonfirmasi",
        ]);

        return redirect()->route('admin.pesanan')->with('success', 'Berhasil mengkonfirmasi pembayaran');
    }

    public function rejectPost(UpdateUserOrderRequest $request, $orderId)
    {
        $latestOrder = UserOrder::where("id", $orderId)->first();
        $latestOrder->update([
            'status' => "Ditolak",
        ]);

        return redirect()->route('admin.pesanan')->with('success', 'Berhasil mengkonfirmasi pembayaran');
    }

    public function incrementCount($cartId)
    {
        //
        $cart = Cart::where("id", $cartId)->first();
        $cart->count = $cart->count + 1;
        $cart->save();
        return redirect()->back();
    }

    public function decrementCount($cartId)
    {
        //
        $cart = Cart::where("id", $cartId)->first();
        $cart->count = $cart->count - 1;
        $cart->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($cartId)
    {
        //
        $cart = Cart::where("id", $cartId)->first();
        $cart->delete();
        return redirect()->back()->with('success', 'Berhasil dihapus dari keranjang');
    }
}
