@extends('navbar')

@section('title','Edit Password')

@section('content')

<div class="container" style="margin: 50px 100px">
    <h1 style="color: #2b56b4; fw-bolder">Edit Password</h1>
    <hr/>
    <form action="/edit_password" method="post" class="row g-3" enctype="multipart/form-data">
        @csrf

        <div class="col-sm-7">
            <label class="form-label fw-bold">Old Password</label>
            <input name="user_password" type="password" id="password" class="form-control" placeholder="Old Password">
        </div>

        <div class="col-sm-7">
            <label class="form-label fw-bold">New Password</label>
            <input name="new_user_password" type="password" id="password" class="form-control" placeholder="New Password">
        </div>

        <div class="col-sm-7">
            <label class="form-label fw-bold">Re-enter New Password</label>
            <input type="password" id="password-confirm" class="form-control" name="new_user_password_confirmation" placeholder="Confirm Password">
        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Save New Password</button>
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

@endsection
