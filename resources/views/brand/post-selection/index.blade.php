@extends('brand.layouts.master')
@section('styles')
@include('brand.assets.css.datatables-css')
@endsection
@section('main-content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Post Selection</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('brand.dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Post Selection</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
        <a href="{{ route('brand.post.selection.create') }}" class="btn btn-primary mt-4"><i class="fa fa-plus"></i> Create</a>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>
                        List of All Post Selection
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
                                    <th>Campaign Cost</th>
                                    <th>Estimated Impression</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @isset($post_selections)
                                @foreach ($post_selections as $key => $post_selection)

                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        @if (file_exists(public_path() . '/storage/images/profile/' . $post_selection->influencer->image) && $post_selection->influencer->image != null)
                                        <img src="{{ asset('storage/images/profile/' .  $post_selection->influencer->image) }}"
                                            alt="image" width="50">
                                    @else
                                    <img src="{{ $post_selection->influencer->image }}" alt="image" width="50">

                                    @endif
                                        
                                    </td>
                                    <td>
                                        {{ $post_selection->influencer->name }}
                                    </td>
                                    <td>
                                        {{ $post_selection->influencer->facebook_followers }}
                                    </td>
                                    <td>
                                        {{ $post_selection->influencer->instagram_followers }}
                                    </td>
                                    <td>
                                        {{ $post_selection->influencer->impression }}
                                    </td>
                                    <td>
                                        {{ $post_selection->campaign_cost }}
                                    </td>
                                    <td>
                                        {{ $post_selection->estimated_impression }}
                                    </td>

                                    <td>
                                        <a href="{{ route('brand.list.of.review', $post_selection->id) }}" class="btn btn-info btn-sm"> <i class="fa fa-eye"></i></a>
                                        <form action="{{ route('brand.post.selection.delete',$post_selection->id) }}" method="post" onsubmit="return confirm('Are you sure?')" class="mt-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                                @endisset


                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S.NO.</th>
                                    <th>FullName</th>
                                    <th>Image</th>
                                    <th>Facebook Followers</th>
                                    <th>Instagram Followers</th>
                                    <th>Impression</th>
                                    <th>Campaign Cost</th>
                                    <th>Estimated Impression</th>
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
