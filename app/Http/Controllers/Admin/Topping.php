<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Topping extends Controller
{
    public function index()
    {
        return view('admin.topping.index');
    }

    public function add()
    {
        return view('admin.topping.add');
    }

    public function edit()
    {
        return view('admin.topping.edit');
    }
}
