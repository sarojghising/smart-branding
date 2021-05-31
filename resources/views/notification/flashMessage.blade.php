@if (Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show error-message" role="alert">
    <strong>Oops!</strong> {{ Session::get('error') }}
</div>
@endif

@if (Session::has('success'))
<div class="alert alert-success alert-dismissible fade show success-message" role="alert">
    <strong>Hey!</strong> {{ Session::get('success') }}
</div>
@endif
