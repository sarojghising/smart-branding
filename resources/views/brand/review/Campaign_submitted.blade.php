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
                        <img src="{{ asset('dashboard/img/success.jpg') }}" alt="image" class="img-fluid" width="200"
                            height="200">
                        <br> <br>
                        <br>

                        <h2 class="ml-3">Campaign Submitted</h2>
                        <hr>
                        Campaign Title : {{ $post_selection->campaign->title   }} <br> <br>
                        Campaign Code : # {{$post_selection->campaign->code }} <br> <br>
                        Total Budget : {{ ($post_selection->no_of_post * $post_selection->influencer->rate) }} <br> <br>
                        Number of Influencer(s) : 1 <br> <br>
                        It is currently under review and you shall receive the notification from growBrand team on
                        campaign status within the next 2 working days.
                    </div>
                    {{-- {{ dd($post_selection) }} --}}
                    <hr>
                    <div class="d-flex justify-content-center">
                        <form action="https://uat.esewa.com.np/epay/main" method="POST">
                            <input value="{{ ($post_selection->no_of_post * $post_selection->influencer->rate) + 350  }}" name="tAmt" type="hidden">
                            <input value="{{  $post_selection->no_of_post * $post_selection->influencer->rate }}" name="amt" type="hidden">
                            <input value="50" name="txAmt" type="hidden">
                            <input value="200" name="psc" type="hidden">
                            <input value="100" name="pdc" type="hidden">
                            <input value="EPAYTEST" name="scd" type="hidden">
                            <input value="{{ $post_selection->id }}" name="pid" type="hidden">
                            <input value="http://127.0.0.1:8000/payment-verify?q=su" type="hidden"
                                name="su">
                            <input value="http://127.0.0.1:8000/payment-verify?q=fu" type="hidden"
                                name="fu">
                            <input value="{{ 'Rs. '.number_format($post_selection->no_of_post * $post_selection->influencer->rate,2) }} Pay With eSewa" type="submit" class="btn btn-primary">
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


