@extends('layouts.back-end')
@section('search.target',route('admin.topping.index'))
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">ท็อปปิ้ง</h1>

    <a href="{{ route('admin.topping.add')}}" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
        </span>
        <span class="text">เพิ่มข้อมูล</span>
    </a>
    <p></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">ท็อปปิ้ง</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <!-- ใส่ชื่อแต่ละคอลัมของตัวเอง -->
                            <th>ID</th>
                            <th>ชื่อท็อปปิ้ง</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- ส่วนของข้อมูลของแต่ล่ะตาราง -->
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>
                                <form action="{{ route('admin.topping.edit') }}" method="get">
                                    <button type="submit" class="btn btn-warning">แก้ไข</button>
                                </form>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger">ลบ</button>
                            </td>
                        </tr>
                        <tr>
                            <!-- ส่วนของข้อมูลของแต่ล่ะตาราง -->
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>
                                <form action="{{ route('admin.topping.edit') }}" method="get">
                                    <button type="submit" class="btn btn-warning">แก้ไข</button>
                                </form>
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
