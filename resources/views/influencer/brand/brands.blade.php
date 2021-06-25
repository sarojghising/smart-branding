@extends('influencer.layouts.master')
@section('styles')
    @include('influencer.assets.css.datatables-css')
@endsection
@section('main-content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Influencer with brands</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('influencer.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Influencer with brands</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">
            {{-- <a href="{{ route('brand.categories.create') }}" class="btn btn-primary mt-4"><i class="fa fa-plus"></i> Create</a> --}}
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>
                            List of All influncer brands
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
                                        <th>Influencer Name</th>
                                        <th>Brand Name</th>
                                        <th>Payment Method</th>
                                        <th>Payment Amount</th>
                                        <th>Product Name</th>
                                        <th>Campaign Code</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if($selected_brand_list)
                                        @foreach ($selected_brand_list as $key => $post_selection)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                    {{ $post_selection->influencer->name ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $post_selection->brand->brand_name ?? '' }}
                                                </td>

                                                <td>
                                                    {{ $post_selection->payment->payment_method ?? '' }}
                                                </td>

                                                <td>
                                                    {{ number_format($post_selection->payment->payment_amount, 2) ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $post_selection->productService->title ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $post_selection->campaign->code ?? '' }}
                                                </td>
                                                <td>
                                                    <a href="" class="btn btn-info btn-sm"> <i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                    
                                    @endif


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
