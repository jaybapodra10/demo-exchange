@extends('components.main')
@section('title')
    DIAMONDEXCH9
@endsection
@section('page_css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
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
