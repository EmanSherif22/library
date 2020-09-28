@extends('layouts/books_layout')

@section('title')
{{$book->name}} | Book
@endsection
@section('content')

<a href="{{url('books/edit',$book->id)}}">Edit</a>
<a href="{{url('books/delete',$book->id)}}">Delete</a>

<h1>{{$book->name}}</h1>
<h4>{{$book->desc}}</h4>

<img src="{{asset($book->image)}}" class="img-fluid" width="500"/>

<br/>
@foreach($book->categories as $category)
{{$category->name}},
@endforeach

@endsection



