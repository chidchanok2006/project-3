@extends('layouts.back-end')
@section('search,target',route('admin.order.index'))
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">รายการสินค้า</h1>
    <p></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">รายการสินค้า</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <!-- ใส่ชื่อแต่ละคอลัมของตัวเอง -->
                            <th>ID</th>
                            <th>รหัสผู้สั่ง</th>
                            <th>รหัสการสั่งซื้อ</th>
                            <th>ราคารวม</th>
                            <th>อนุญาติชำระเงิน</th>
                            <th>ลบ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- ส่วนของข้อมูลของแต่ล่ะตาราง -->
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>154455154</td>
                            <td>Edinburgh</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        ชำระเสร็จสิ้น
                                    </label>
                                  </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger">ลบ</button>
                            </td>
                        </tr>
                        <tr>
                            <!-- ส่วนของข้อมูลของแต่ล่ะตาราง -->
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>154455154</td>
                            <td>Edinburgh</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                      ชำระเสร็จสิ้น
                                    </label>
                                  </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger">ลบ</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
