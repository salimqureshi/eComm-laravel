<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index() {
        $data = Product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id) {
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }

    function search(Request $req) {
        $data = Product::
        Where('name','like','%'.$req->input('query').'%')
        ->get();

        return view('search',['products'=>$data]);
    }

    function cartItem() {
        $user_id = session()->get('user')['id'];
        $items = cart::where('user_id',$user_id)->get();

        return count($items);
    }

    function addToCart(Request $req) {
        if($req->session()->has('user')) {
            $cart = new cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    function cartList() {
        $user_id = Session()->get('user')['id'];    
        $items = DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$user_id)
        ->get();

        return view('cartlist',['products'=>$items]);
    }

    function removeCart($id) {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow() {
        $user_id = Session()->get('user')['id'];    
        $total = DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$user_id)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }
}
