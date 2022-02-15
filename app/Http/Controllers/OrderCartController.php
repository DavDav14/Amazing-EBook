<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EBook;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Carbon;

class OrderCartController extends Controller
{
    public function addToCart(Ebook $ebook){

        $cart = Order::where('user_id',auth()->user()->id)->where('ebook_id', $ebook)->first();

        if($cart != null){
            $cart->save();

            return redirect('/home');
        }

        Order::create([
            'user_id' => auth()->user()->id,
            'ebook_id' => $ebook->id,
            'order_date' => now()
        ]);

        return redirect('/home');
    }

}
