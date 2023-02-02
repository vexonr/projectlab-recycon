@extends('navbar')

@section('title','Add Item')

@section('content')

<div class="container" style="margin: 50px 100px">
    <h1 style="color: #2b56b4; fw-bolder">Add a New Item</h1>
    <hr/>
    <form action={{url('/add_item')}} method="post" class="row g-3" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-sm-3">
          <label class="form-label fw-bold">Item ID</label>
          <input type="text" name="item_id" class="form-control" placeholder="Example: AC069">
        </div>

        <div class="col-sm-3">
          <label class="form-label fw-bold">Item Price</label>
          <input type="text" name="item_price" class="form-control" placeholder="Price must be >1000">
        </div>

        <div class="col-sm-3">
            <label class="form-label fw-bold">Category</label>
            <label class="visually-hidden" for="autoSizingSelect">Category</label>
            <select class="form-select" id="autoSizingSelect" name="item_category">
              <option value="Second">Second</option>
              <option value="Recycled">Recycled</option>
            </select>
          </div>

        <div class="col-6">
          <label class="form-label fw-bold">Item Name</label>
          <input type="text" name="item_name" class="form-control" placeholder="Max. 20 Characters">
        </div>

        <div class="col-12">
            <label class="form-label fw-bold">Item Description</label>
            <textarea class="form-control" rows="4" placeholder="Max. 200 Characters" name="item_description"></textarea>
        </div>

        <div class="col-6">
            <label for="formFile" class="form-label fw-bold">Upload Image</label>
            <input class="form-control" type="file" name="item_image">
        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Add Item</button>
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
