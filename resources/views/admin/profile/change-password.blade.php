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
                    <h5>Change Password</h5>
                </div>
                <div class="ibox-content">
                    <form method="post" action="{{ route('admin.change.password') }}">
                        @csrf
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Old Password</label>
                            <div class="col-sm-10"><input type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password">
                                @error('password')
                                <span class="form-text m-b-none text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">New Password</label>
                            <div class="col-sm-10"><input type="password"
                                    class="form-control @error('new_password') is-invalid @enderror"
                                    name="new_password">
                                @error('new_password')
                                <span class="form-text m-b-none text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group row"><label class="col-sm-2 col-form-label">Confirm
                                Password</label>
                            <div class="col-sm-10"><input type="password"
                                    class="form-control @error('new_confirm_password') is-invalid @enderror"
                                    name="new_confirm_password">
                                @error('new_confirm_password')
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
                                        class="fa fa-user"></i>&nbsp;Change Password</button>
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
