@extends('frontend.layouts.master')
@section('title')
Register Brand
@endsection
@section('main-content')
<div class="user-form-area">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-lg-6 p-0">
                <div class="user-img">
                    <img src="{{ asset('frontend/template/assets/img/user-form-bg.jpg') }}" alt="User" />
                    {{-- <h1>Brand Register Form</h1> --}}
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="user-content">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="user-content-inner">
                                <div class="top">
                                    {{-- <a href="sass.html">
                                        <img
                                            src="{{ asset('frontend/template/assets/img/logo.png') }}"
                                    alt="Logo"
                                    />
                                    </a> --}}
                                    <h2>Brand Register</h2>
                                     @include('notification.flashMessage')
                                </div>
                                <form action="{{ route('brand.register.form') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter your Brand Name" name="brand_name" />
                                            </div>
                                            @error('brand_name')
                                            <div class="error" style="color: #c54f4f;">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter your First Name" name="first_name" />
                                                </div>
                                                @error('first_name')
                                                <div class="error" style="color: #c54f4f;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter your Last Name" name="last_name" />
                                                    </div>
                                                    @error('last_name')
                                                    <div class="error" style="color: #c54f4f;">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="url" class="form-control" placeholder="Enter your website"
                                                name="website" />
                                        </div>
                                        @error('website')
                                        <div class="error" style="color: #c54f4f;">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <select name="country" id="country" class="form-control">
                                                        <option value="nepal">Nepal</option>
                                                        <option value="india">India</option>
                                                    </select>
                                                </div>
                                                @error('country')
                                                <div class="error" style="color: #c54f4f;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="number" class="form-control"
                                                            placeholder="Enter your Contact Number" name="mobile_no" />
                                                    </div>
                                                </div>

                                                @error('mobile_no')
                                                <div class="error" style="color: #c54f4f;">{{ $message }}</div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Enter your Email" />
                                        </div>
                                        @error('email')
                                        <div class="error" style="color: #c54f4f;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Enter your password" />
                                        </div>
                                        @error('password')
                                        <div class="error" style="color: #c54f4f;">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <button type="submit" class="btn">
                                            Register
                                        </button>
                                    </div>
                            </div>
                            </form>
                            <div class="bottom mt-3 text-center">
                                <a href="{{ route('home.page') }}" class="btn btn-secondary">Go Back</a>
                                <p>
                                    Are You already Member?
                                    <a href="{{ route('brand.login.form') }}">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
