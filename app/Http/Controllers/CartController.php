<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{

    
    public function add(Request $request)
    {
            \Cart::add(array(
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'image' => $request->img,
                    'slug' => $request->slug
                )
            ));
            return redirect('/')->with('success_msg', 'Item is Added to Cart!');
        // return redirect()->route('cart.index')->with('success_msg', 'Item is Added to Cart!');

        // return redirect()->route('/')->with('success_msg', 'Item is Added to Cart!');
    }
    
    function update(Request $request)
    {
        \Cart::update($request->id,
             array(
                 'quantity' => array(
                    'relative' => false,
                    'value'=> $request->quantity
                 ),
                ));

            return Redirect('cart');
    }

    function remove(Request $request)
    {
        \Cart::remove($request->id);

        // dd($data);
        return Redirect('cart');
    }
}
