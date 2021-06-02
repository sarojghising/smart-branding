@extends('brand.layouts.master')
@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>
                    @isset($category)
                    Edit Category
                    @else
                    Create Category
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
                @if (isset($category))
                <form action="{{ route('brand.categories.update',$category->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    @else
                    <form action="{{ route('brand.categories.store') }}" method="post">
                        @csrf
                        @endif
                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10"><input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') ?? @$category->name }}" placeholder="Enter Name">
                                @include('notification.input-error',['fieldName' => 'name'])
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
