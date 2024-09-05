<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert As alert;

use App\Models\Products;
use App\Models\Category;


class Product extends Controller
{
    public function index(Request $req)
    {

        $product = Products::query();

        if(!empty($req->search))
        {

            $keyword = $req->search;

            $product->where(function ($query) use ($keyword) {

                $query->where('name', 'LIKE', '%' .$keyword. '%')
                    ->orWhere('detail', 'LIKE', '%' .$keyword. '%')
                ->orWhere('price', 'LIKE', '%' .$keyword. '%');

            });

        }

        $product->latest();
        $result = $product->paginate(5);


        return view('admin.product.index',
            [
                'products' => $result,
            ]

    );
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
        $req->validate([
            'products_name' => 'required',
            'products_price' => 'required|numeric',
            'products_category' => 'required',
            'products_image' => 'required|image',
            'products_detail' => 'required',
        ], [
            'products_name.required' => '*โปรดกรอกชื่อสินค้า',
            'products_price.required' => '*โปรดกรอกราคาสินค้า',
            'products_price.numeric' => '*ราคาสินค้าต้องเป็นตัวเลข',
            'products_category.required' => '*โปรดเลือกประเภทสินค้า',
            'products_image.required' => '*โปรดเลือกรูปภาพสินค้า',
            'products_image.image' => '*ไม่รองรับไฟล์, เลือกไฟล์นามสกุล jpg, png เท่านั้น',
            'products_detail.required' => '*โปรดกรอกรายละเอียดสินค้า',
        ]);


        if($req->hasFile('products_image'))
        {
            $image = $req->products_image->store('products');
        }else{
            $image = null;
        }




        $create = Products::create(
            [
                'name' => $req->products_name,
                'category_id' => $req->products_category,
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
    public function edit($id=null)
    {
        $product = Products::find($id);

        if(!empty($product->id))

            return view(
                
                'admin.product.edit',
                [
                    'category' => Category::all(),
                    'products' => $product,

                ]
            );
        else
        return redirect()->route('admin.product.index');


    }
    public function update(Request $req, $id)
    {

        $product = Products::find($id);

        if(empty($product->id))
        {
            // alert()->error('แจ้งเตือน', 'ผิดพลาดไม่สามารถแก้ไขได้, โปรดลองใหม่อีกครั้ง');
            return redirect()->route('admin.product.index');
        }

        $req->validate([
            'products_name' => 'required',
            'products_price' => 'required|numeric',
            'products_category' => 'required',
            // 'products_image' => 'required|image',
            'products_detail' => 'required',
        ], [
            'products_name.required' => '*โปรดกรอกชื่อสินค้า',
            'products_price.required' => '*โปรดกรอกราคาสินค้า',
            'products_price.numeric' => '*ราคาสินค้าต้องเป็นตัวเลข',
            'products_category.required' => '*โปรดเลือกประเภทสินค้า',
            // 'products_image.required' => '*โปรดเลือกรูปภาพสินค้า',
            'products_image.image' => '*ไม่รองรับไฟล์, เลือกไฟล์นามสกุล jpg, png เท่านั้น',
            'products_detail.required' => '*โปรดกรอกรายละเอียดสินค้า',
        ]);

        if($req->hasFile('products_image'))
        {
            $image = $req->products_image->store('products');
        }else{
            $image = $product->image;
        }

        $update = $product->update(
            [
                'name' => $req->products_name,
                'category_id' => $req->products_category,
                'price' => $req->products_price,
                'detail' => $req->products_detail,
                'image' => $image,
            ]
        );

        if(!empty($update))
        {
            // alert()->success('แจ้งเตือน','แก้ไขรายการสินค้าสำเร็จ');
            return redirect()->route('admin.product.index');
        }else{
            // alert()->error('แจ้งเตือน','แก้ไขการสินค้าไม่สำเร็จ');
            return redirect()->route('admin.product.edit');
        }

    }


    public function delete($id=null)
    {

        $product = Products::find($id);

        if(!empty($product->id))
        {
            $product->delete();
            // alert()->success('แจ้งเตือน','ลบรายการสินค้าสำเร็จ');
            return redirect()->route('admin.product.index');
        }else{
            // alert()->error('แจ้งเตือน','ลบรายการสินค้าไม่สำเร็จ');
            return redirect()->route('admin.product.index');
            }
        


    }


    public function getdata()
    {
        $data = Products::all();

        return response()->json($data);
    }

}
