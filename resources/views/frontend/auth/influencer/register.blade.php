@extends('frontend.layouts.master')
@section('title')
    Register Influencer
@endsection
@section('main-content')
<div class="user-form-area">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-lg-6 p-0">
                <div class="user-img">
                    <img src="{{ asset('frontend/template/assets/img/user-form-bg.jpg') }}" alt="User" />
                    {{-- <h1>Influencer Register Form</h1> --}}
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
                                    <h2>Influencer Register</h2>
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input

                                                    type="name"
                                                    class="form-control"
                                                    placeholder="Enter your First Name"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input

                                                    type="name"
                                                    class="form-control"
                                                    placeholder="Enter your Last Name"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input

                                                    type="url"
                                                    class="form-control"
                                                    placeholder="Enter your Facebook URL"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input

                                                    type="url"
                                                    class="form-control"
                                                    placeholder="Enter your Instagram URL"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    placeholder="Enter your Email"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input
                                                    type="password"
                                                    class="form-control"
                                                    placeholder="Enter your password"
                                                />
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <button
                                                type="submit"
                                                class="btn"
                                            >
                                                Sign UP
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="bottom">
                                    <p>
                                        Are You already Member?
                                        <a href="{{ route('influencer.login') }}"
                                            >Sign In</a
                                        >
                                    </p>
                                    <h4>OR</h4>
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i
                                                    class="
                                                        bx
                                                        bxl-facebook
                                                    "
                                                ></i>
                                                Connect with Facebook
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i
                                                    class="
                                                        bx
                                                        bxl-google
                                                    "
                                                ></i>
                                                Connect with Google
                                            </a>
                                        </li>
                                    </ul>
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