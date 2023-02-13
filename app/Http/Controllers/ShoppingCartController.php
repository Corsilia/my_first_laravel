<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function bootstrap_index(){
        return view('bootstrap.bscdn');
    }
    public function bootstrap_about(){
        return view('bootstrap.bscdn_about');
    }
    public function shopping_index(){
        return view('shopping.index');
    }
    public function login(){
        return view('shopping.login');
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