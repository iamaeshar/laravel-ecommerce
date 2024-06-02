<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems = Cart::with('product')->where('carts.user_id', Auth::user()->id)->get();
        return view('cart.index', compact('cartItems'));
    }

    public function add($id) 
    {
        $cart = new Cart();
        $cart->product_id = $id;
        $cart->user_id = Auth::user()->id;
        $cart->quantity = 1;
        $cart->save();
    
        return redirect()->route('cart.index');
    }

    public function update(Request $request, $cartId)
    {
        if($request->quantity == 1) {
            return redirect()->route('cart.index');   
        }

        $cart = Cart::find($cartId);
        if(isset($cart)) {
            $cart['quantity'] = $request->quantity;
            $cart->save();
        }
        return redirect()->route('cart.index');
    }

    public function remove($cartId)
    {
        $cart = Cart::find($cartId);
        if(isset($cart)) {
            $cart->delete();
        }
        return redirect()->route('cart.index');
    }
}
