@extends('layouts/books_layout')

@section('title')
Route - All Books
@endsection
@section('content')
@foreach($books as $book)

<!--<a href="{{url('books/edit',$book->id)}}">Edit</a>-->
<!--<a href="{{url('books/delete',$book->id)}}">Delete</a>-->

<h1><a href="{{url('books/show',$book->id)}}"> {{$book->name}} </a></h1>
<p>{{$book->desc}}</p>
@endforeach
@endsection
