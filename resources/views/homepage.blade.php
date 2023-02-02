@extends('navbar')

@section('title','Homepage')

@section('css')
    <link rel="stylesheet" href="/css/style.css">
@endsection

@section('content')
    <div class="img-fluid">
        <img src="storage/images/homepage_image.png" style="width:100%; height:20%;">
        <div class="centered fw-bolder text-decoration-underline">Recycon</div>
    </div>

    <div class="text-center "style="margin: 50px 100px">
        <h1 style="color: #2b56b4; fw-bolder">About Us</h1>
        <hr/>
        <p class="fs-5">We are a shop, marketing sustainable and eco-friendly products - recycled or secondhanded products, we got you! </p>
        </div>

@endsection
