@extends('frontend.layouts.master')
@section('title')
    Login Influencer
@endsection
@section('main-content')
<div class="user-form-area">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-lg-6 p-0">
                <div class="user-img">
                    <img src="{{ asset('frontend/template/assets/img/user-form-bg.jpg') }}" alt="User" />
                    {{-- <h1>Influencer Login Form</h1> --}}
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
                                    <h2>Influencer Sign In</h2>
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    placeholder="Enter your email"
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
                                              Sign In
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="bottom">
                                    <p>
                                        Are You New Member?
                                        <a href={{ route('influencer.login') }}
                                            >Sign Up</a
                                        >
                                 
                                   
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