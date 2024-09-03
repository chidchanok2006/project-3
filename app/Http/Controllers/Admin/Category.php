<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Category extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function add()
    {
        return view('admin.category.add');
    }

    public function edit()
    {
        return view('admin.category.edit');
    }
}
