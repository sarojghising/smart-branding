@extends('brand.layouts.master')
@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>
                    @isset($campaign)
                    Edit Campaign Details
                    @else
                    Create Campaign Details
                    @endisset
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
                @if (isset($campaign))
                <form action="{{ route('brand.campaigns.update',$campaign->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    @else
                    <form action="{{ route('brand.campaigns.store') }}" method="post">
                        @csrf
                        @endif
                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10"><input type="text" name="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title') ?? @$campaign->title }}" placeholder="Enter Title">
                                @include('notification.input-error',['fieldName' => 'title'])
                            </div>
                        </div>
                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Code</label>
                            <div class="col-sm-10"><input type="text" name="code"
                                    class="form-control @error('code') is-invalid @enderror"
                                    value="{{ old('code') ?? @$campaign->code }}"
                                    placeholder="Enter Code eg. titlein...">
                                @include('notification.input-error',['fieldName' => 'code'])
                            </div>
                        </div>
                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('description') is-invalid @enderror" rows="3"
                                    name="description" placeholder="Enter Description"
                                    style="resize: none;">{{ old('description') ?? @$campaign->description }}</textarea>
                                @include('notification.input-error',['fieldName' => 'description'])
                            </div>
                        </div>
                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Start Date</label>
                            <div class="col-sm-10">
                                <input type="date" name="start_date" id="start_date" class="form-control" value="{{ old('start_date') ?? @$campaign->start_date }}">
                            </div>
                        </div>

                        <div class="form-group  row"><label class="col-sm-2 col-form-label">End Date</label>
                            <div class="col-sm-10">
                                <input type="date" name="end_date" id="end_date" class="form-control" value="{{ old('end_date') ?? @$campaign->end_date }}">
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
