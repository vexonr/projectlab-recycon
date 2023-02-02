@extends('navbar')

@section('title','Sign Up')

@section('content')

{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}

<div style="margin: 50px 200px" class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Sign Up</div>
                    <div class="card-body">
                        <form action={{url('/signup')}} method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right"></label>
                                <div class="mb-3 col-md-6">
                                    <input name="user_username" type="text" class="form-control" required autofocus placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right"></label>
                                <div class="mb-3 col-md-6">
                                    <input name="user_email" type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right"></label>
                                <div class="mb-3 col-md-6">
                                    <input name="user_password" type="password" id="password" class="form-control" name="user_password" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right"></label>
                                <div class="mb-3 col-md-6">
                                    <input type="password" id="password-confirm" class="form-control" name="user_password_confirmation" placeholder="Confirm Password">
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4 mb-3">
                                <button type="submit" class="btn btn-primary">
                                    Sign Up
                                </button>
                            </div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        </div>
                    @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection
