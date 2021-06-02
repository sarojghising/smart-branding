@extends('brand.layouts.master')
@section('styles')
 @include('brand.assets.css.datatables-css')
 @include('brand.assets.css.toggle-css')
@endsection
@section('main-content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>My Campaigns</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('brand.dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>My Campaigns</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
        <a href="{{ route('brand.campaigns.create') }}" class="btn btn-primary mt-4"><i class="fa fa-plus"></i> Create</a>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>
                       List of All Campaigns
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
                                    <th>Title</th>
                                    <th>Campaign Code</th>
                                     <th>Description</th>
                                     <th>Start Date</th>
                                    <th>end Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($campaigns)

                                 @foreach ($campaigns as $key => $campaign)

                                 <tr class="gradeX">
                                     <td>
                                         {{ $key + 1 }}
                                     </td>
                                     <td>
                                         {{ $campaign->title }}
                                     </td>
                                     <td>
                                         {{ $campaign->code }}
                                     </td>
                                     <td>
                                         {{ $campaign->description }}
                                     </td>
                                     <td>
                                         {{ $campaign->start_date }}
                                     </td>
                                     <td>
                                        {{ $campaign->end_date }}
                                     </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('brand.campaigns.edit', $campaign->id) }}" class="btn btn-info btn-sm mr-1"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('brand.campaigns.destroy',$campaign->id) }}" method="post" onsubmit="return confirm('Are you sure?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>

                                 </tr>

                                 @endforeach

                                @endisset
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S.NO.</th>
                                    <th>Title</th>
                                    <th>Campaign Code</th>
                                     <th>Description</th>
                                     <th>Start Date</th>
                                    <th>end Date</th>
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
 @include('admin.assets.js.toggle-js')
@endsection
