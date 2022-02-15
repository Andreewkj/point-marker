<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Point Maker</title>
</head>
<body>
    <header>
        <div class="px-3 py-2 bg-dark text-white">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
              </a>
    
              <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                @guest
                <li>
                  <a href="{{ route('login') }}"class="nav-link text-secondary">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"></use></svg>
                    Login
                  </a>
                </li>
                <li>
                  @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"></use></svg>
                    Register
                  </a>
                  @endif
                </li>
                @else
                <li>
                  <a href="#" class="nav-link text-secondary">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"></use></svg>
                    Home
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"></use></svg>
                    Dashboard
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"></use></svg>
                    Opportunities
                  </a>
                </li>
                <li>
                  <a href="{{ route('logout') }}" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"></use></svg>
                    Log Out
                  </a>
                </li>

                @endguest
                
              </ul>
            </div>
          </div>
        </div>
        @if (session('message'))
          <div class="alert alert-success">
              {{ session('message') }}
          </div>
        @endif

        <!--<div class="px-3 py-2 border-bottom mb-3">
          <div class="container d-flex flex-wrap justify-content-center">
            <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
              <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
    
            <div class="text-end">
              <button type="button" class="btn btn-light text-dark me-2">Login</button>
              <button type="button" class="btn btn-primary">Sign-up</button>
            </div>
          </div>
        </div> -->
      </header>
      <div class="container mt-4">      
    <form action="{{route('register')}}" method="post">
      @csrf
      <div class="jumbotron text-center">
        <h1 class="display-1" id="time"></h1>
        <p class="display-6" id="day"></p>
        <button type="submit" class="btn btn-primary btn-lg" id="time">
          Logar
        </button>
      </div>
    </form>
      </div>
      
     <div class="container mt-4">
      <ul class="list-group">
          <p class="display-6">Marcações do dia</p>
        <?php $i=1 ?>
        @foreach ($markups as $markup)
          <li class="list-group-item" id="dayMarkups">{{$i}} -- {{$markup}}</li>
        <?php $i++ ?>
        @endforeach
        
      </ul>   
    </div>
    <script src="{{ asset('js/oclock.js') }}"></script>
</body>
</html>