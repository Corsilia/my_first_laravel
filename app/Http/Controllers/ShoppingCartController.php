<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function shopping_index(){
        return view('shopping.index');
    }
    public function checkout1(){
        return view('shopping.checkout1');
    }
    public function checkout2(){
        return view('shopping.checkout2');
    }
    public function checkout3(){
        return view('shopping.checkout3');
    }
    public function checkout4(){
        return view('shopping.checkout4');
    }
}
