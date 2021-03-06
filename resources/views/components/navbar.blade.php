<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="">Route</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
        @if(Auth::check())
        <li class="nav-item active">
        <a class="nav-link" href="{{url('books/list')}}">Books <span class="sr-only">(current)</span></a>
      </li>
        
        <li class="nav-item active">
        <a class="nav-link" href="{{url('users/notes')}}">Notes <span class="sr-only">(current)</span></a>
      </li>

        @if(Auth::user()->is_admin)
        <li class="nav-item active">
        <a class="nav-link" href="{{url('books/create')}}">Add Book <span class="sr-only">(current)</span></a>
      </li>
        
        <!--<li class="nav-item active">
        <a class="nav-link" href="{{url('categories/list')}}">Categories <span class="sr-only">(current)</span></a>
      </li>-->
        <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          @foreach($cats as $cat)
            <a class="dropdown-item" href="#">{{$cat->name}}</a>
          @endforeach
        </div>
      </li>

      @endif
        
        <li class="nav-item active">
        <a class="nav-link" href="{{url('users/logout')}}">Logout <span class="sr-only">(current)</span></a>
      </li>
        
        @else
        <li class="nav-item active">
        <a class="nav-link" href="{{url('users/register')}}">register <span class="sr-only">(current)</span></a>
      </li>
      
        <li class="nav-item active">
        <a class="nav-link" href="{{url('users/login')}}">login <span class="sr-only">(current)</span></a>
      </li>
      @endif
    
   </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
   