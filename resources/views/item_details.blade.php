@extends('navbar')

@section('title','See Details')

@section('content')

<div class="container" style="margin: 50px 100px">
    <h1 style="color: #2b56b4; fw-bolder">Item Details</h1>
    <hr/>
    <div class="row">
      <div class="col-sm">
        <img class="img-fluid" style="padding:2%" src="{{ asset('/storage/images/' . $item->image) }}" alt="Item Image">
      </div>
      <div class="col-sm">
        <h2>{{$item->item_name}}</h2>
        <h5 class="fw-light">{{$item->category}}</h5>
        <br>
        <br>
        <h4 class="">Price</h4>
        <p>Rp. {{$item->price}}</p>
        <br>
        <h4 class="">Description</h4>
        <p>{{$item->description}}</p>
        <br>
        <br>

        @auth
        @if(Auth::user()->role == 'user')
        <form>
          <div class="row g-3 align-items-center mb-3">
            <div class="col-auto">
              <label class="col-form-label">Quantity :</label>
            </div>
            <div class="col-auto">
              <input type="number" id="quantity" name="quantity" min="1" class="form-control">
            </div>
            <button type="submit" class="btn btn-outline-secondary">Add to Cart</button>
          </div>
        </form>
        @endif
        @endauth

    </div>
  </div>
</div>


@endsection
