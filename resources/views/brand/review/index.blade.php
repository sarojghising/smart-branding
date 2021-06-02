@extends('brand.layouts.master')
@section('styles')
@include('brand.assets.css.datatables-css')
@include('brand.assets.css.toggle-css')
@endsection
@section('main-content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Review Submit</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('brand.dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>My Reivews</strong>
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
                        List of All Reviews
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
                    <div class="card mb-3">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <h3>CAMPAIGN TITLE: </h3>
                                    <p>{{ $review->campaign->title }}</p>
                                </div>
                                <div class="col-md-4">

                                    <h3>CAMPAIGN DURATION: </h3>
                                    <p> <i class="fa fa-calendar"></i> {{ $review->campaign->start_date }} - {{ $review->campaign->end_date }}</p>

                                </div>
                                <div class="col-md-4">
                                    <h3>CAMPAIGN COST: </h3>

                                    <p>{{ !empty($review->influencer) ? 'Nrs. '. ($review->influencer->rate * $review->no_of_post) : '' }}</p>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <h3>CAMPAIGN CODE: </h3>
                                    <p>{{ $review->campaign->code }}</p>
                                </div>
                                <div class="col-md-4">

                                    <h3>PRODUCT TITLE: </h3>
                                    <p>{{ $review->productService->title }}</p>

                                </div>
                                <div class="col-md-4">
                                    <h3>ESTIMATED IMPRESSION: </h3>

                                    <p>{{  $review->estimated_impression }}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>

                                    <th>Image</th>
                                    <th>FullName</th>
                                    <th>Facebook Followers</th>
                                    <th>Instagram Followers</th>
                                    <th>Post Type</th>
                                    <th>Qty</th>
                                    <th>rate</th>
                                    <th>Amount</th>
                                    <th>Impression</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($review)
                                <tr class="gradeX">
                                    <td>
                                       <img src="{{ $review->influencer->image }}" alt="image" width="100">
                                    </td>
                                    <td>
                                        {{ $review->influencer->name }}
                                    </td>
                                    <td>
                                        {{ $review->influencer->facebook_followers }}
                                    </td>
                                    <td>
                                        {{ $review->influencer->instagram_followers }}
                                    </td>
                                    <td>
                                        {{ $review->post_type }}
                                    </td>
                                    <td>
                                        {{ $review->no_of_post }}
                                    </td>
                                    <td>{{ $review->influencer->rate }}</td>
                                    <td>
                                        {{  'Nrs. '.($review->no_of_post * $review->influencer->rate) }}
                                    </td>
                                    <td>
                                        {{ $review->estimated_impression }}
                                    </td>
                                    <td>
                                        <div class="d-flex">

                                           <a href="{{ route('brand.review.submitted' , $review->id) }}"  onclick="return confirm('Are u sure want to submit your review ? ')" class="btn btn-info">Submit for Approval</a>
                                        </div>
                                    </td>

                                </tr>

                                @endisset
                            </tbody>
                            <tfoot>
                                <tr>

                                    <th>Image</th>
                                    <th>FullName</th>
                                    <th>Facebook Followers</th>
                                    <th>Instagram Followers</th>
                                    <th>Post Type</th>
                                    <th>Qty</th>
                                    <th>rate</th>
                                    <th>Amount</th>
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
