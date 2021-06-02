@extends('brand.layouts.master')
@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>
                    @isset($product)
                    Edit Product Details
                    @else
                    Create Product Details
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
                @if (isset($product))
                <form action="{{ route('brand.products.update',$product->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @else
                    <form action="{{ route('brand.products.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @endif


                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">

                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ @$product->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @include('notification.input-error',['fieldName' => 'category_id'])
                            </div>
                        </div>

                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10"><input type="text" name="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title') ?? @$campaign->title }}" placeholder="Enter Title">
                                @include('notification.input-error',['fieldName' => 'title'])
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
                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Video Link
                                (Optional)</label>
                            <div class="col-sm-10">
                                <input type="url" name="video_link" id="video_link" class="form-control"
                                    value="{{ old('start_date') ?? @$campaign->start_date }}">
                            </div>
                        </div>

                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Image (Optional)</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" id="image" class="form-control">
                                @if (@$product->image)
                                <img src="{{ asset('storage/product/images'.$product->image) }}" alt="image"
                                    width="100">
                                @endif
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
