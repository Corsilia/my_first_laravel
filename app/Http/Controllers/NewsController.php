<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function microsoft(){
        return view('microsoft');
    }
    public function bootstrap_index(){
        return view('bootstrap.bscdn');
    }
    public function bootstrap_about(){
        return view('bootstrap.bscdn_about');
    }
}
