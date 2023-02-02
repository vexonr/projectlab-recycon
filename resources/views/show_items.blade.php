@extends('navbar')

@section('title','See Items')

@section('content')
<div style="margin: 50px 100px">
    <h1 style="color: #2b56b4; fw-bolder">Our Products</h1>
    <hr/>
    <div style="margin-top: 50px">
        <div class="row" style="justify-content:space-evenly">
            @foreach ($items as $item)
            <div class="card" style="width: 18rem;margin-top:1%; margin-bottom:1%">
                <img class="card-img-top" src="{{ asset('/storage/images/' . $item->image) }}" alt="Item Image">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{$item->item_name}}</h5>
                    <p class="card-text fw-light">{{$item->category}}</p>
                    <br>
                    <p class="card-text">Rp. {{$item->price}}</p>
                    <a href="{{url('item_details/'.$item->item_id)}}" style="margin-top: 10px" class="btn btn-outline-dark">See Details</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{$items->links()}}
</div>
@endsection
