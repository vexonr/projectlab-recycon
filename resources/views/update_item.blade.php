@extends('navbar')

@section('title','Update Item')

@section('content')

<div class="container" style="margin: 50px 100px">
    <h1 style="color: #2b56b4; fw-bolder">Update Item Info</h1>
    <hr/>
    <form action="/update_item/{{$item->item_id}}" method="post" class="row g-3" enctype="multipart/form-data">
        @csrf
        <div class="col-sm-3">
          <label class="form-label fw-bold">Item ID</label>
          <input type="text" name="item_id" class="form-control" value="{{$item->item_id}}" disabled>
        </div>

        <div class="col-sm-3">
          <label class="form-label fw-bold">Item Price</label>
          <input type="text" name="item_price" class="form-control" value="{{old('price',$item->price)}}" placeholder="Price must be >1000">
        </div>

        <div class="col-sm-3">
            <label class="form-label fw-bold">Category</label>
            <label class="visually-hidden" for="autoSizingSelect">Category</label>
            <select name="item_category" class="form-select" id="autoSizingSelect">
              <option selected value="{{$item->category}}">{{$item->category}}</option>
              <option value="Second">Second</option>
              <option value="Recycled">Recycled</option>
            </select>
          </div>

        <div class="col-6">
          <label class="form-label fw-bold">Item Name</label>
          <input type="text" name="item_name" class="form-control" value="{{$item->item_name}}" placeholder="Max. 20 Characters">
        </div>

        <div class="col-12">
            <label class="form-label fw-bold">Item Description</label>
            <textarea class="form-control" rows="4" placeholder="Max. 200 Characters" name="item_description">{{$item->description}}</textarea>
        </div>

        <div class="col-6">
            <label class="form-label fw-bold">Current Image</label>
            <input type="text" class="form-control" value="{{$item->image}}" disabled>
            <img class="img-fluid img-thumbnail" style="padding:2%; height:200px; width:auto; margin:10px;" src="{{ asset('/storage/images/' . $item->image) }}" alt="Item Image">
        </div>

        <div class="col-6">
            <label for="formFile" class="form-label fw-bold">Upload New Image</label>
            <input class="form-control" type="file" name="item_image" value="{{$item->image}}">
        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Update Item</button>
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

@endsection
