@foreach($books as $book)
<h1>{{$book->name}}</h1>
<h4>{{$book->desc}}</h4>
<h5>{{$book->id}}</h5>
@endforeach