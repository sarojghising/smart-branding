@extends('admin.layouts.master')
@section('styles')
@include('brand.assets.css.datatables-css')
@include('brand.assets.css.toggle-css')
@endsection
@section('main-content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Brand Influencers</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Brand Influencers</strong>
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
                        List of All brand influencers
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
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                            <tr>

                                <th>S.NO</th>
                                <th>CAMPAIGN TITLE</th>
                                 <th>CAMPAIGN DURATION</th>
                                <th>CAMPAIGN COST</th>
                                <th>PRODUCT TITLE</th>
                                <th>ESTIMATED IMPRESSION</th>
                                <th>Influencer</th>
                                <th>Impression</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($post_selection)
                             @foreach ($post_selection as $key => $value)
                             <tr class="gradeX">
                                 <td>
                                     {{ $key + 1 }}
                                 </td>
                                 <td>
                                     {{ $value->campaign->title ?? '' }}
                                 </td>
                                 <td>
                                    {{ $value->campaign->start_date }} - {{ $value->campaign->end_date }}
                                 </td>
                                 <td>
                                    <p>{{ 'Nrs. '. ($value->influencer->rate * $value->no_of_post) }}</p>
                                 </td>
                                 <td>
                                    <p>{{ $value->productService->title }}</p>
                                 </td>
                                 <td>
                                    <p>{{  $value->estimated_impression }}</p>
                                 </td>
                                 <td>
                                     {{ $value->influencer->name }}
                                 </td>
                                 <td>
                                     {{ $value->influencer->impression }}
                                 </td>
                                 <td>

                                         <a href="{{ route('admin.notify.brand' , $brand->id) }}"
                                             onclick="return confirm('Are u sure want to notify brand ? ')"
                                             class="btn btn-info">notify Brand</a>
                                             <a href="{{ route('admin.rejected.brand', $brand->id) }}"
                                                onclick="return confirm('Are u sure want to rejected brand ? ')"
                                                class="btn btn-danger mt-2">rejected Brand</a>

                                 </td>

                             </tr>
                             @endforeach

                            @endisset
                        </tbody>
                        <tfoot>
                            <tr>

                                <th>S.NO</th>
                                <th>CAMPAIGN TITLE</th>
                                 <th>CAMPAIGN DURATION</th>
                                <th>CAMPAIGN COST</th>
                                <th>PRODUCT TITLE</th>
                                <th>ESTIMATED IMPRESSION</th>
                                <th>Influencer</th>
                                <th>Impression</th>
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
@include('admin.assets.js.toggle-js')
@endsection
