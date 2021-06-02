@extends('brand.layouts.master')
@section('styles')
<link href="{{ asset('dashboard/css/plugins/select2/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('dashboard/css/plugins/chosen/bootstrap-chosen.css') }}" rel="stylesheet" />

@endsection
@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>
                    Target Audience
                </h5>

                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#" class="dropdown-item">Config option 1</a>
                        </li>
                        <li><a href="#" class="dropdown-item">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">


                <form action="{{ route('brand.target.audience.store') }}" method="post">
                    @csrf
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10 d-flex">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="all">
                                <label class="form-check-label" for="gender">
                                    All
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" name="gender" value="male">
                                <label class="form-check-label" for="gender">
                                    Male
                                </label>
                            </div>
                            <div class="form-check ml-3">
                                <input class="form-check-input" type="radio" name="gender" value="female">
                                <label class="form-check-label" for="gender">
                                    Female
                                </label>
                            </div>
                            @include('notification.input-error',['fieldName' => 'gender'])
                        </div>
                    </div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Age Specification</label>
                        <div class="col-sm-10 d-flex">
                            <select name="age_specification" id="age_specification" class="form-control">
                                @foreach (range(12,40) as $value)
                                <option value="{{ $value.'-' .($value + 10) }}">{{ $value.'-'. ($value + 10) }}</option>
                                @endforeach
                            </select>
                        </div>
                        @include('notification.input-error',['fieldName' => 'age_specification'])
                    </div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Total Followers</label>
                        <div class="col-sm-10 d-flex">
                            <input type="text" name="total_followers" id="total_followers" class="form-control"
                                placeholder="Eg:- 5000 - 2340000....">
                        </div>
                        @include('notification.input-error',['fieldName' => 'total_followers'])
                    </div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Average engagement per post
                        </label>
                        <div class="col-sm-10 d-flex">
                            <input type="text" name="average_engagement_per_post" id="average_engagement_per_post"
                                class="form-control" placeholder="Eg:- 5000 - 10000000....">
                        </div>
                        @include('notification.input-error',['fieldName' => 'average_engagement_per_post'])
                    </div>

                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Average views per video post
                        </label>
                        <div class="col-sm-10 d-flex">
                            <input type="text" name="average_views_per_video_post" id="average_views_per_video_post"
                                class="form-control" placeholder="Eg:- 10000 - 5000000....">
                        </div>
                        @include('notification.input-error',['fieldName' => 'average_views_per_video_post'])
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Locations</label>
                        <div class="col-sm-10">
                            <select data-placeholder="Choose a Location..." name="locations[]" class="chosen-select" multiple
                                style="width:350px;" tabindex="4">
                                <option value="">Select</option>
                                <option value="Bhairahawa">Bhairahawa</option>
                                <option value="Bhimphedi">Bhimphedi</option>
                                <option value="Biratnagar">Biratnagar</option>
                                <option value="Birendranagar">Birendranagar</option>
                                <option value="Birganj">Birganj</option>
                                <option value="Butwal">Butwal</option>
                                <option value="Birganj">Birganj</option>
                                <option value="Dadeldhura">Dadeldhura</option>
                                <option value="Dhangadhi">Dhangadhi</option>
                                <option value="Godawari">Godawari</option>
                                <option value="Hanumannagar">Hanumannagar</option>
                                <option value="Hetauda">Hetauda</option>
                                <option value="Ilam">Ilam</option>
                                <option value="Janakpur">Janakpur</option>
                                <option value="Jitpur">Jitpur</option>
                                <option value="Jumla">Jumla</option>
                                <option value="Kathmandu">Kathmandu</option>
                                <option value="Nepalganj">Nepalganj</option>
                                <option value="Pokhara">Pokhara</option>
                                <option value="Ramechhap">Ramechhap</option>
                                <option value="Salyan">Salyan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Preferred Posting Time
                    </label>
                    <div class="col-sm-10 d-flex">
                        <input type="time" name="posting_time" id="posting_time"
                            class="form-control">
                    </div>
                    @include('notification.input-error',['fieldName' => 'posting_time'])
                </div>
            </div>

        </div>
        <div class="form-group row">
            <div class="col-sm-4 col-sm-offset-2">
                <button class="btn btn-danger btn-sm" type="reset">Reset</button>
                <button class="btn btn-primary btn-sm" type="submit">Submit</button>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>
@endsection
@section('scripts')
<!-- Chosen -->
<script src="{{ asset('dashboard/js/plugins/chosen/chosen.jquery.js') }}"></script>
<!-- Select2 -->
<script src="{{asset('dashboard/js/plugins/select2/select2.full.min.js') }}"></script>

<script>
    /* chosen Staff and Order */
    $(".chosen-select").chosen({ width: "100%" });


</script>
@endsection
