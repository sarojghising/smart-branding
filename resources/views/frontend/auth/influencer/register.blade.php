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
                                    @include('notification.flashMessage')
                                </div>
                                <form action="{{ route('influencer.register.form.submit') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input

                                                    type="name"
                                                    class="form-control"
                                                    placeholder="Enter your FullName"
                                                    name="name"
                                                />
                                            </div>
                                            @error('name')
                                            <div class="error" style="color: #c54f4f;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        {{ $errors }}
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input

                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Enter your Facebook Followers e.g. 28.51k"
                                                    name="facebook_followers"
                                                />
                                            </div>
                                            @error('facebook_followers')
                                            <div class="error" style="color: #c54f4f;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input

                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Enter your Instagram Followers 25.51k"
                                                    name="instagram_followers"
                                                />
                                            </div>
                                            @error('instagram_followers')
                                            <div class="error" style="color: #c54f4f;">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input

                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Enter your Impression e.g. 16k - 29k"
                                                    name="impression"
                                                />
                                            </div>
                                            @error('impression')
                                            <div class="error" style="color: #c54f4f;">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input

                                                    type="number"
                                                    class="form-control"
                                                    placeholder="Enter your Rating Number e.g. 1-20"
                                                    name="rate"
                                                    min="1"
                                                    max="20"
                                                />
                                            </div>
                                            @error('rate')
                                            <div class="error" style="color: #c54f4f;">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    placeholder="Enter your Email"
                                                    name="email"
                                                />
                                            </div>

                                            @error('email')
                                            <div class="error" style="color: #c54f4f;">{{ $message }}</div>
                                            @enderror
                                            
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input
                                                    type="password"
                                                    class="form-control"
                                                    placeholder="Enter your password"
                                                    name="password"
                                                />
                                            </div>
                                            @error('password')
                                            <div class="error" style="color: #c54f4f;">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input
                                                    type="file"
                                                    class="form-control"
                                                    name="image"
                                                    placeholder="Choose Profile pic"
                                                />
                                            </div>
                                            @error('image')
                                            <div class="error" style="color: #c54f4f;">{{ $message }}</div>
                                            @enderror
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
                                        <a href="{{ route('influencer.login.form') }}"
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
