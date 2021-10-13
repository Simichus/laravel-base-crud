@extends('layouts.main')

@section('title', 'Comics')

@section('section-id', 'comics-index')

@section('content')
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Series</th>
            <th scope="col">Type</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($comics as $comic)
            <tr>
                <td>{{$comic->title}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->type}}</td>
                <td>{{$comic->price}}</td>
                <td><a href="{{route('comics.show', $comic->id)}}" class="btn btn-warning me-2">Go</a>
                <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-danger">Edit</a></td>
            </tr>
            @empty
                <td colspan="5" class="text-center">Nessun risultato corrispondente</td>
            @endforelse
       
        </tbody>
    </table>
@endsection