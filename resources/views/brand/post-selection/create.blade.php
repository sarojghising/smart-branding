@extends('brand.layouts.master')
@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>
                    Post Selection Per Influencers
                </h5>

                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#" class="dropdown-item">Config option 1</a>
                        </li>
                        <li><a href="#" class="dropdown-item">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <form action="{{ route('brand.post.slection.store') }}" method="post">
                    @csrf
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Influencer</label>
                        <div class="col-sm-10">
                            <select name="influencer_id" id="influencer_id" class="form-control">
                                <option value="">--Select Any Influencer--</option>
                                @foreach ($influencers as $influencer)
                                <option value="{{ $influencer->id }}">
                                    {{ $influencer->name }} | Facebook - {{ $influencer->facebook_followers }}
                                    |Instagram - {{ $influencer->instagram_followers }}
                                </option>
                                @endforeach
                            </select>
                            @include('notification.input-error',['fieldName' => 'influencer'])
                        </div>
                    </div>

                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Campaigns</label>
                        <div class="col-sm-10">
                            <select name="campaign_id" id="campaign_id" class="form-control">
                                <option value="">--Select Any Campaign--</option>
                                @foreach ($campaigns as $campaign)
                                <option value="{{ $campaign->id }}">
                                    {{ $campaign->title }}
                                </option>
                                @endforeach
                            </select>
                            @include('notification.input-error',['fieldName' => 'campaign_id'])
                        </div>
                    </div>

                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Product Service</label>
                        <div class="col-sm-10">
                            <select name="product_service_id" id="product_service_id" class="form-control">
                                <option value="">--Select Any Product Service--</option>
                                @foreach ($product_services as $product_service)
                                <option value="{{ $product_service->id }}">
                                    {{ $product_service->title }}
                                </option>
                                @endforeach
                            </select>
                            @include('notification.input-error',['fieldName' => 'product_service_id'])
                        </div>
                    </div>

                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Select Post Type</label>
                        <div class="col-sm-10">
                            <select name="post_type" id="" class="form-control">
                                <option value="">--Select Post Type--</option>
                                <option value="HQ Video at Feed">HQ Video at Feed </option>
                                <option value="Self-Shot Video at Feed">Self-Shot Video at Feed</option>
                                <option value="HQ Photo at Feed">HQ Photo at Feed </option>
                                <option value="Self-Shot Photo at Feed">Self-Shot Photo at Feed</option>
                                <option value="HQ Video at Story">HQ Video at Story</option>
                                <option value="Any Creative at Story">Any Creative at Story</option>
                            </select>
                            @include('notification.input-error',['fieldName' => 'category_id'])
                        </div>
                    </div>

                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Number of Post</label>
                        <div class="col-sm-10">
                            <select name="no_of_post" id="no_of_post"
                                class="mb-2 mb-md-0 form-control form-control-sm autoX">
                                <option value="">--Select no of post--</option>
                                @foreach (range(1,100) as $value)
                                <option value="{{ $value }}">{{ $value }}</option>
                                @endforeach
                            </select>
                            @include('notification.input-error',['fieldName' => 'category_id'])
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-danger btn-sm" type="reset">Reset</button>
                            <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection
