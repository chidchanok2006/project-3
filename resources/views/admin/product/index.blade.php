@extends('layouts.back-end')
@section('search.target',route('admin.product.index'))

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->

     <!-- ใช่ชื่อตารางของตัวเอง -->
    <h1 class="h3 mb-2 text-gray-800">Menu</h1>

        <a href="{{ route('admin.product.add')}}" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
            </span>
            <span class="text">เพิ่มข้อมูล</span>
        </a>
    <p></p>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Menu</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <!-- ใส่ชื่อแต่ละคอลัมของตัวเอง -->
                            <th>ลำดับ</th>
                            <th>ชื่อสินค้า</th>
                            <th>ประเภทสินค้า</th>
                            <th>ราคา</th>
                            <th>รายละเอียดสินค้า</th>
                            <th>รูปภาพสินค้า</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!$products->isEmpty())
                            @foreach ($products as $key => $item)
                                <tr>
                                    <!-- ส่วนของข้อมูลของแต่ล่ะตาราง -->
                                    <td>{{ $products->total() - ($products->firstItem() + $key) + 1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        @if(!empty($item->category->name))
                                            {{ $item->category->name }}
                                        @else
                                            <span class="text-danger">
                                                ไม่ระบุ
                                            </span>
                                        @endif
                                    </td>
                                    <td>{{ $item->price }}</td>
                                    <td>
                                        <a href="{{ asset($item->image) }}"
                                            data-lightbox="{{ $item->id }}"
                                            data-title="{{ $item->name }}"
                                        >
                                            <img
                                                src="{{ asset($item->image) }}"
                                                width="100px"
                                                height="80px"
                                                alt=""
                                            />
                                        </a> 
                                    </td>
                                    <td>{{ $item->detail }}</td>
                                    <td>
                                        <form action="{{ route('admin.product.edit', $item->id) }}" method="get">
                                            <button type="submit" class="btn btn-warning">แก้ไข</button>
                                        </form>
                                    </td>
                                    <td>
                                        <a type="button" 
                                            class="btn btn-danger"
                                            {{-- data-bs-toggle="modal"
                                            data-bs-target="#confrimDeleteId{{ $item->id }}" --}}
                                            href="{{ route('admin.product.delete', $item->id) }}"
                                        >
                                            ลบ
                                        </a>
                                        {{-- <div class="modal fade" id="confrimDeleteId{{ $item->id }}" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            ยืนยันการลบ
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        คุณต้องการลบสินค้า "{{ $item->name }}" หรือไม่ ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                            ยกเลิก
                                                        </button>
                                                        <a
                                                            href="{{ route('admin.product.delete', $item->id) }}"
                                                            class="btn btn-danger"
                                                        >
                                                            ยืนยันการลบ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center text-danger fw-bolder h5">
                                    <span class="bx bx-block"></span>
                                    ไม่มีข้อมูล
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
