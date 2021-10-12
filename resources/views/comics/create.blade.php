@extends('layouts.main')

@section('title', 'Add')

@section('section-id', 'add-comic')

@section('content')

<form method="POST" action="{{route('comics.store')}}">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title">
      <div class="form-text">Title goes here</div>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" name="description" rows="5"></textarea>
      <div  class="form-text">Description goes here</div>
    </div>
    <div class="mb-3">
        <label for="thumbnail" class="form-label">Thumbnail</label>
        <input type="text" class="form-control" id="thumbnail" name="thumbnail">
        <div  class="form-text">Thumbnail goes here</div>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price">
        <div  class="form-text">Price goes here</div>
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" id="series" name="series">
        <div  class="form-text">Series goes here</div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
                <div  class="form-text">Sale date goes here</div>
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type">
                <div  class="form-text">Type goes here</div>
            </div>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Add</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </form>

@endsection