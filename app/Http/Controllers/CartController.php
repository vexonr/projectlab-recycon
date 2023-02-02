<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // public function addCart(){

    //     $checkCart = Cart::where('user_id', '=', 1)->first();

    //     if (checkCart == null){

    //         $cart = new Cart();
    //         $cart->user_id = Auth::id();
    //         $cart->save();

    //         $cartDetails = new CartDetails();
    //         $cartDetails->cart_id = $cart->id;
    //         $cartDetails->product_id = $request->productId;
    //         $cartDetails->quantity = $request->quantity;
    //         $cartDetails->save();

    //         //NOT DONE YET
    //     }

    // }

    // public function seeCart(){
    //     $carts = Cart::all();

    //     $cart_details = DB::table('cart_details')
    //     ->join('cart_details','cart_id','=','carts.id')
    //     ->join('items','item_id','=','items.id');

    //     return view('cart', ['carts' => $carts, 'cart_details'=> $cart_details]);
    // }

    // public function seeCart(){
    //     $id = Auth::user()->id;
    //     $carts = Cart::where('user_id', '=', $id)->get();
    //     return view('cart', ['carts' => $carts]);
    // }

    


}
