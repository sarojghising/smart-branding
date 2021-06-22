@extends('admin.layouts.master')
@section('styles')
@include('brand.assets.css.datatables-css')
@endsection
@section('main-content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Product List</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('brand.dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Product List</strong>
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
                        List of All Products
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
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Video Link (optional)</th>
                                    <th>Image (optional)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @isset($products)
                                @foreach ($products as $key => $product)

                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        {{  $product->title }}
                                    </td>
                                    <td>
                                        {{  $product->description }}
                                    </td>
                                    <td>
                                        {{  $product->category->name ?? '' }}
                                    </td>

                                    <td>
                                         @if ($product->video_link)
                                                <a href="{{ $product->video_link }}" target="_blank">{{ $product->video_link }}</a>
                                         @else
                                            <p>This product did not have any Video URL</p>
                                         @endif
                                    </td>
                                    <td>
                                        @if ($product->image && $product->image != null)
                                            <img src="{{ asset('storage/images/product/'.$product->image) }}" alt="image" width="100">
                                        @else
                                           <p>This product has no image.</p>
                                        @endif
                                   </td>

                                    <td>
                                        <a href="#" class="btn btn-info btn-sm"> <i class="fa fa-eye"></i></a>
                                        <form action="{{ route('admin.product.delete',$product->id) }}" method="post" onsubmit="return confirm('Are you sure?')" class="mt-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                                @endisset


                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S.NO.</th>
                                    <th>Name</th>
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
