@extends('components.main')
@section('title')
    DIAMONDEXCH9
@endsection
@section('page_css')
@endsection
@section('content')
<div class="login">
    <div class="wrapper">
        <div class="login-mn">
            <div class="text-center mb-4">
                <img src="images/logo.png" alt="">
            </div>
            <div class="log-fld">
                <h2 class="text-center">Sign In</h2>
                <form action="account-list" method="post">
                    @csrf <!-- {{ csrf_field() }} -->
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group mb-4">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-blue mb-3 w-100">Login <i class="fa fa-sign-in"></i></button>
                </form>
            </div>
            <div class="text-center mt-3 text-light">
                <span>© DIAMONDEXCH9 <a class="text-decoration-none link-light" href="">info@diamondexch.com</a></span>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page_scripts')
@endsection
