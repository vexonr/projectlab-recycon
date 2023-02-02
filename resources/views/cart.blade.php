@extends('navbar')

@section('title','My Cart')

@section('content')

<div class="container" style="margin: 50px 100px">
    <h1 style="color: #2b56b4; fw-bolder">My Cart</h1>
    <hr/>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Item ID</th>
            <th scope="col">Item Image</th>
            <th scope="col">Item Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total Price</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($carts as $cart_items)
            <tr>
                <td>{{$cart_items->item_id}}</td>
                {{-- <td><img class="img-fluid img-thumbnail" style="padding:2%; height:200px; width:auto; margin:10px;" src="{{ asset('/storage/images/' . $cart_items->items->item_image) }}" alt="Item Image"></td> --}}
                <td>{{$cart_items->items->item_name}}</td>
                <td>{{$cart_items->quantity}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection
