<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function view(){
        $cart = Order::where('user_id', auth()->user()->id)->get();
        return view('cart', compact('cart'));
    }

    public function insert(Request $request){
        $book = Book::where('id',$request->id)->first();

        $cart['user_id'] = auth()->user()->id;
        $cart['book_id'] = $book->id;

        Order::create($cart);

        $cart = Order::where('user_id', auth()->user()->id)->get();
        return view('cart', compact('cart'));
    }

    public function delete(Request $request){
        Order::where('id', $request->id)->delete();
        return back();
    }

    public function submit(){
        Order::where('user_id', auth()->user()->id)->delete();

        return back();
    }
}
