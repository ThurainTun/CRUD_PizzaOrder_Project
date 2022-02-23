<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />
    {{-- custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-size: 30px;color:#73200C">Pizza Project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ms-auto p-2 ">
                    <li class="nav-item" id="nav-item">
                        <a class="acitve" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>

                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item" id="nav-item">
                                <a href="{{ route('pizzas') }}" id="link_color">All Pizza Orders</a>
                            </li>
                            <li class="nav-item" id="nav-item" id="nav-btn">
                                <button class="btn btn-danger" type="button"><a
                                        href="{{ route('logout') }}">Logout</a></button>
                            </li>
                        @else
                            <li class="nav-item" id="nav-item" id="nav-btn">
                                <button class="btn btn-danger" type="button"><a href="{{ route('login') }}">Login as
                                        Admin</a></button>
                            </li>
                            {{-- @if (Route::has('register'))
                <li class="nav-item" id="nav-item"  id="nav-btn">
                  <button  class="btn btn-danger" type="button"><a href="{{route('register')}}">Register</a></button>
                </li>
            @endif --}}
                        @endauth
                    @endif

                </ul>
            </div>
        </div>
    </nav>
    <!-- nav -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
    @yield('navbar')
</body>

</html>
