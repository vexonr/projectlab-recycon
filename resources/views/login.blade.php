@extends('navbar')

@section('title','Login')

@section('content')
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}

<div class="login-form">
    <div class="cotainer">
        <div style="margin: 50px 200px" class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body" style="margin-top:15px">
                        <form action="/login" method="POST">
                            {{ csrf_field() }}
                            <div class=" form-group row">
                                <label class="col-md-4 col-form-label text-md-right"></label>
                                <div class="mb-3 col-md-6">
                                    <input type="text" class="form-control" name="user_username" required placeholder="Username" value="{{ Cookie::get('cookie_username') != null ? Cookie::get('cookie_username') : '' }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class=" col-md-4 col-form-label text-md-right"></label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="user_password" required placeholder="Password" value="{{ Cookie::get('cookie_password') != null ? Cookie::get('cookie_password') : '' }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4" style="margin-top:20px">
                                    <div class="mb-3 form-check">
                                        <label>
                                            <input name="remember_me" type="checkbox" class="form-check-input">
                                            <label class="form-check-label" for="remember_me">Remember me</label>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
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
