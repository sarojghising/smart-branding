@extends('admin.auth.layout.master')
@section('title','Login Page')
@section('content')
<div>
    <h3>Welcome to Smart Branding Admin</h3>
    <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
        <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
    </p>
    <p>Login in. To see it in action.</p>
    <div>
        @include('notification.flashMessage')
    </div>
    <form role="form" action="{{ route('admin.login') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Enter Email">
            @if ($errors->has('email'))
            <small style="color:red;">{{ $errors->first('email') }}</small>
            @endif
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Enter Password">
            @if ($errors->has('password'))
            <small style="color:red;">{{ $errors->first('password') }}</small>
            @endif
        </div>
        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

        <a href="#" class="float-right"><small>Forgot password?</small></a>
    </form>
    <p class="m-t"> <small>Welcome To Smart Branding Admin &copy; <?php echo date('Y') ?></small> </p>
</div>
@endsection
