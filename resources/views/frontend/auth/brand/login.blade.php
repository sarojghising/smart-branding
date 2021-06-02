@extends('frontend.layouts.master')
@section('title')
    Login Brand
@endsection
@section('main-content')
<div class="user-form-area">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-lg-6 p-0">
                <div class="user-img">
                    <img src="{{ asset('frontend/template/assets/img/user-form-bg.jpg') }}" alt="User" />
                    {{-- <h1>Brand Login Form</h1> --}}
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
                                    <h2>Brand Sign In</h2>
                                    @include('notification.flashMessage')
                                </div>
                                <form action="{{ route('brand.submit.login.form') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    placeholder="Enter your email"
                                                    name="email"
                                                />
                                                @error('email')
                                                <div class="error" style="color: #c54f4f;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input
                                                    type="password"
                                                    class="form-control"
                                                    placeholder="Enter your password"
                                                    name="password"
                                                />

                                                @error('password')
                                                <div class="error" style="color: #c54f4f;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button
                                                type="submit"
                                                class="btn"
                                            >
                                              Sign In
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="bottom">
                                    <p>
                                        Are You New Member?
                                        <a href={{ route('brand.register.form') }}
                                            >Sign Up</a
                                        >
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
