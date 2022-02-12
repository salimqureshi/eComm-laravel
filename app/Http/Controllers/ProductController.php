<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $data = Product::all();
        return view('product',['products'=>$data]);
    }

    public function detail($id) {
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }

    public function search(Request $req) {
        $data = Product::
        Where('name','like','%'.$req->input('query').'%')
        ->get();

        return view('search',['products'=>$data]);
    }

    public function addToCart(Request $req) {
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
}
