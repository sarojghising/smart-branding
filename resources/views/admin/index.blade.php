@extends('admin.layouts.master')
@section('main-content')
<div class="row">
    <div class="col-lg-3">
        <div class="ibox ">
            <div class="ibox-title">
                <span class="label label-success float-right">Total</span>
                <h5>Category</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{  \App\Models\Category::count() ?? '' }}</h1>
                {{-- <div class="stat-percent font-bold text-success">12<i class="fa fa-bolt"></i></div> --}}
                <small>Total Category</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox ">
            <div class="ibox-title">
                <span class="label label-info float-right">Total</span>
                <h5>Products</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{  \App\Models\ProductService::count() ?? '' }}</h1>
                {{-- <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div> --}}
                <small>New Product Services</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox ">
            <div class="ibox-title">
                <span class="label label-primary float-right">Total</span>
                <h5>Influencers</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{  \App\Models\Influencer::count() ?? '' }}</h1>
                {{-- <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div> --}}
                <small>New Reviews</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox ">
            <div class="ibox-title">
                <span class="label label-danger float-right">Total</span>
                <h5>Brand</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">{{  \App\Models\Brand::count() ?? '' }}</h1>
                {{-- <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i>
                </div> --}}
                <small>Total Audience</small>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Orders</h5>
                <div class="float-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-xs btn-white active">Today</button>
                        <button type="button" class="btn btn-xs btn-white">Monthly</button>
                        <button type="button" class="btn btn-xs btn-white">Annual</button>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <ul class="stat-list">
                            <li>
                                <h2 class="no-margins">2,346</h2>
                                <small>Total orders in period</small>
                                <div class="stat-percent">48% <i class="fa fa-level-up text-navy"></i>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 48%;" class="progress-bar"></div>
                                </div>
                            </li>
                            <li>
                                <h2 class="no-margins ">4,422</h2>
                                <small>Orders in last month</small>
                                <div class="stat-percent">60% <i class="fa fa-level-down text-navy"></i>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar"></div>
                                </div>
                            </li>
                            <li>
                                <h2 class="no-margins ">9,180</h2>
                                <small>Monthly income from orders</small>
                                <div class="stat-percent">22% <i class="fa fa-bolt text-navy"></i></div>
                                <div class="progress progress-mini">
                                    <div style="width: 22%;" class="progress-bar"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
