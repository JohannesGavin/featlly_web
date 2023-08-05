<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Http\Requests\StoreWishlistRequest;
use App\Http\Requests\UpdateUserOrderRequest;
use App\Http\Requests\UpdateWishlistRequest;
use App\Models\Cart;
use App\Models\UserOrder;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function store(StoreWishlistRequest $request, $katalogId)
    {
        $existingCart = Wishlist::where('user_id', Auth::user()->id)
            ->where('katalog_id', $katalogId)
            ->first();

        if ($existingCart) {
            $existingCart->count++;
            $existingCart->save();

            return redirect()->back()->with('success', 'Barang sudah ada di wishlist');
        } else {
            $cart = new Wishlist([
                'user_id' => Auth::user()->id,
                'katalog_id' => $katalogId,
                'count' => 1,
            ]);

            $cart->save();
        }

        return redirect()->back()->with('success', 'Berhasil ditambahkan ke wishlist');
    }

    /**
     * Display the specified resource by user.
     */
    public function wishlistPages()
    {
        //
        $wishlists = Wishlist::where("user_id", Auth::user()->id)->get();

        $totalPrice = 0;

        foreach ($wishlists as $wish) {
            $totalPrice += ($wish->katalog->harga_promo ?? $wish->katalog->harga);
        }

        return view('wishlist', ["wishlists" => $wishlists, "totalPrice" => $totalPrice]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($wishlistId)
    {
        //
        $cart = Wishlist::where("id", $wishlistId)->first();
        $cart->delete();
        return redirect()->back()->with('success', 'Berhasil dihapus dari wishlist');
    }

    public function addToCart($wishlistId)
    {
        //
        $wishlist = Wishlist::where("id", $wishlistId)->first();

        $existingCart = Cart::where('user_id', Auth::user()->id)
            ->where('katalog_id', $wishlist->katalog->id)
            ->where('is_active', true)
            ->first();
        if ($existingCart) {
            $existingCart->count++;
            $existingCart->save();
        } else {
            $cart = new Cart([
                'user_id' => Auth::user()->id,
                'katalog_id' => $wishlist->katalog->id,
                'count' => 1,
            ]);

            $cart->save();
        }

        $wishlist->delete();
        return redirect()->back()->with('success', 'Berhasil dipindahkan ke keranjang');
    }
}