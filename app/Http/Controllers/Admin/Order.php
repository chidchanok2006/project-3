<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Order extends Controller
{
    public function index(){
        return view('admin.order.index');
    }

    public function add(){
        return view('admin.order.add');
    }
}
