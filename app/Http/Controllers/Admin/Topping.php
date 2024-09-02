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
}
