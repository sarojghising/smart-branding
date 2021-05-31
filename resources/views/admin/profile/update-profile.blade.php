@extends('admin.layouts.master')
@section('styles')
@endsection
@section('main-content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            @include('admin.notification.flashMessage')
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Update Profile</h5>
                </div>
                <div class="ibox-content">
                    <form method="post" action="{{ route('admin.update.profile',$admin->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">FullName</label>
                            <div class="col-sm-10"><input type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $admin->name }}">
                                @error('name')
                                <span class="form-text m-b-none text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10"><input type="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ $admin->email }}"
                                    name="email">
                                @error('email')
                                <span class="form-text m-b-none text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-danger btn-sm" type="reset"><i
                                        class="fa fa-trash"></i>&nbsp;Cancel</button>
                                <button class="btn btn-primary btn-sm" type="submit"><i
                                        class="fa fa-user"></i>&nbsp;Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('scripts')
@endsection
