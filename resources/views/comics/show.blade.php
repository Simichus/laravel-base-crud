@extends('layouts.main')

@section('title', $comic->title)

@section('section-id', 'comic-show')

@section('content')
    <div class="row">
        <div class="col-4">
            <img src="{{$comic->thumbnail}}" alt="{{$comic->title}}" width="400" class="img-fluid">
        </div>
        <div class="col-8">
            <h1 class="py-3">{{$comic->title}}</h1>
            <p>{{$comic->description}}</p>
            <hr>
            <div><strong>Type:</strong> {{$comic->type}}</div>
            <div><strong>Series:</strong> {{$comic->series}}</div>
            <div><strong>Sale date:</strong> {{$comic->sale_date}}</div>
            <div><strong>Price:</strong> {{$comic->price}}</div>
        </div>
    </div>
@endsection