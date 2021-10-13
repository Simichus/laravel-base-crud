@extends('layouts.main')

@section('title', 'Edit')

@section('section-id', 'edit-comic')

@section('content')

<form method="POST" action="{{route('comics.update', $comic->id)}}">
    @method('PATCH')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
      <div class="form-text">Title goes here</div>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" name="description" rows="5">{{$comic->description}}</textarea>
      <div  class="form-text">Description goes here</div>
    </div>
    <div class="mb-3">
        <label for="thumbnail" class="form-label">Thumbnail</label>
        <input type="text" class="form-control" id="thumbnail" name="thumbnail" value="{{$comic->thumbnail}}">
        <div  class="form-text">Thumbnail goes here</div>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
        <div  class="form-text">Price goes here</div>
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
        <div  class="form-text">Series goes here</div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
                <div  class="form-text">Sale date goes here</div>
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
                <div  class="form-text">Type goes here</div>
            </div>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Modify</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </form>

@endsection