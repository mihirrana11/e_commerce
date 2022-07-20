<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
   public function cart()
   {
      $cart = Cart::where('user_id',Auth::id())->get();

      return view('/user/addtocart',compact('cart'));
   }

   public function productshow(Request $request)
   {
     if(Auth::check())
     {
         $prod_id = $request->input('id');
         if(Product::find($prod_id)){

            $cart = new Cart();
            $cart->prod_id =$prod_id();
            $cart->user_id = Auth::id();

            $cart->save();
         }
     }
   }

}
