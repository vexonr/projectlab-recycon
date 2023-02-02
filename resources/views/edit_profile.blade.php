@extends('navbar')

@section('title','Edit Profile')

@section('content')

<div class="container" style="margin: 50px 100px">
    <h1 style="color: #2b56b4; fw-bolder">Edit Profile</h1>
    <hr/>
    <form action="/edit_profile" method="post" class="row g-3" enctype="multipart/form-data">
        @csrf
        <div class="col-sm-7">
            <label class="form-label fw-bold">Set Username</label>
            <input type="text" name="user_username" class="form-control" value="{{Auth::user()->username}}">
        </div>

        <div class="col-sm-7">
            <label class="form-label fw-bold">Set Email</label>
            <input name="user_email" type="email" class="form-control" placeholder="Email" value="{{Auth::user()->email}}">
        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Set New Changes</button>
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
