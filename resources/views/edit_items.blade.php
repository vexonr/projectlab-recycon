@extends('navbar')

@section('title','Edit Items')

@section('content')

<div class="container" style="margin: 50px 100px">
    <h1 style="color: #2b56b4; fw-bolder">Edit Items</h1>
    <hr/>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Item ID</th>
            <th scope="col">Item Name</th>
            <th scope="col">Item Description</th>
            <th scope="col">Item Price</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($items as $index => $item)
            <tr>
                <th scope="row">{{ $index +1 }}</th>
                <td>{{$item->item_id}}</td>
                <td>{{$item->item_name}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->category}}</td>
                <td>
                    <a href="{{url('update_item/'.$item->item_id)}}" type="button" class="btn btn-warning">Update</button>
                    <a href="{{url('delete_item/'.$item->item_id)}}" type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection
