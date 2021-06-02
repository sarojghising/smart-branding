@extends('brand.layouts.master')
@section('styles')
@include('brand.assets.css.datatables-css')
@endsection
@section('main-content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Select Influencers</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('brand.dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>My Influencers</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>
                        List of All Influencer's
                    </h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>S.NO.</th>
                                    <th>Image</th>
                                    <th>FullName</th>
                                    <th>Facebook Followers</th>
                                    <th>Instagram Followers</th>
                                    <th>Impression</th>
                                    <th>rate</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @isset($influencers)
                                @foreach ($influencers as $key => $value)

                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img src="{{ $value->image }}" alt="image" width="50">
                                    </td>
                                    <td>
                                        {{ $value->name }}
                                    </td>
                                    <td>
                                        {{ $value->facebook_followers }}
                                    </td>
                                    <td>
                                        {{ $value->instagram_followers }}
                                    </td>
                                    <td>
                                        {{ $value->impression }}
                                    </td>
                                    <td>
                                        {{ number_format($value->rate,2) }}
                                    </td>
                                    <td>
                                        <form action="{{ route('brand.delete.influencer',$value->id) }}" method="post" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                                @endisset

                                {{-- <button class="btn btn-primary ml-3 mb-2 clickSelectedInfluencer">Next</button> --}}


                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S.NO.</th>
                                    <th>Image</th>
                                    <th>FullName</th>
                                    <th>Facebook Followers</th>
                                    <th>Instagram Followers</th>
                                    <th>Impression</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@include('admin.assets.js.datatable-js')
@endsection
