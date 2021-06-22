@extends('admin.layouts.master')
@section('styles')
@include('brand.assets.css.datatables-css')
@endsection
@section('main-content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Brand List</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('brand.dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Brand List</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>
                        List of All Brands
                    </h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>S.NO.</th>
                                    <th>Brand Name</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Mobile No</th>
                                    <th>Country</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @isset($brands)
                                @foreach ($brands as $key => $brand)

                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        {{  $brand->brand_name }}
                                    </td>
                                    <td>
                                        {{  $brand->first_name }}
                                    </td>
                                    <td>
                                        {{  $brand->last_name }}
                                    </td>

                                    <td>
                                        {{ $brand->email }}
                                    </td>
                                    <td>
                                        {{ $brand->mobile_no }}
                                    </td>
                                    <td>
                                        {{ $brand->country }}
                                    </td>

                                    <td>
                                        <a href="{{ route('admin.brand.view' ,$brand->id) }}"
                                            class="btn btn-info btn-sm"> <i class="fa fa-eye"></i></a>
                                        <form action="{{ route('admin.brand.delete',$brand->id) }}" method="post"
                                            onsubmit="return confirm('Are you sure?')" class="mt-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                                @endisset


                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S.NO.</th>
                                    <th>Brand Name</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Mobile No</th>
                                    <th>Country</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@include('admin.assets.js.datatable-js')
@endsection
