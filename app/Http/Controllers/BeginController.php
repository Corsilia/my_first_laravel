<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeginController extends Controller
{
    public function today(){
        return '今天星期幾';
    }
}
