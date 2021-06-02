@extends('brand.layouts.master')
@section('styles')
@include('brand.assets.css.datatables-css')
@include('brand.assets.css.toggle-css')
@endsection
@section('main-content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-content">
                    <div class="d-flex justify-content-spacebetween">
                        <img src="{{ asset('dashboard/img/success.jpg') }}" alt="image"  class="img-fluid" width="200" height="200">
                         <br> <br>
                         <br>

                        <h2 class="ml-3">Campaign Submitted</h2>
                        <hr>
                        Campaign Title : {{ $review->campaign->title   }} <br> <br>
                        Campaign Code : #{{$review->campaign->code }} <br> <br>
                        Total Budget :  {{ ($review->no_of_post * $review->influencer->rate) }} <br> <br>
                        Number of Influencer(s) : 1 <br> <br>
                        It is currently under review and you shall receive the notification from Uptrendly team on
                        campaign status within the next 2 working days.


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
