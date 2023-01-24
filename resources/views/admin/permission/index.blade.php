@extends('admin.layouts.main')
@section('title')
    AroaPartners || Admin - Dashboard
@endsection
@section('page')
    Permission
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <viewpermissions></viewpermissions>
        </div>
        <!-- /.col -->
    </div>
@endsection
