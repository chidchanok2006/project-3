<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert As alert;

use App\Models\Products;
use App\Models\Category;


class Product extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }
    public function add()
    {
        return view('admin.product.add',
            [
                'category' => Category::all(),
            ]
        );
    }
    public function insert(Request $req)
    {
        $req->validate(
            [
                'products_name' => 'required',




            ],
            [
                'products_name.required' => 'abcdefghijklmnopqrstuvwxyz'




            ]
        );

        if($req->hasFile('products_image'))
        {
            $image = $req->products_image->store('products');
        }else{
            $image = null;
        }




        $create = Products::create(
            [
                'name' => $req->products_name,
                'category_id' => $req->category_id,
                'price' => $req->products_price,
                'detail' => $req->products_detail,
                'image' => $image,
            ]
        );

        if(!empty($create))
        {
            // alert()->success('แจ้งเตือน','เพิ่มข้อมูลสำเร็จ');
            return redirect()->route('admin.product.index');

        }else{
            // alert()->error('แจ้งเตือน','เพิ่มข้อมูลไม่สำเร็จ');
            return redirect()->route('admin.product.add');
        }


    }
    public function edit()
    {
        return view('admin.product.edit');
    }


}
