<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('games')}}">{{__('Games')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('console')}}">{{__('Consoles')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('companies')}}">{{__('Companies')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('genre.index')}}">{{__('Genres')}}</a>
        </li>
        @auth
          <li class="nav-item">
            <a class="nav-link btn btn-danger" href="{{route('logout')}}">{{ __('logout')}}</a>
          </li>
        @endauth
      </ul>
    </div>
  </nav>