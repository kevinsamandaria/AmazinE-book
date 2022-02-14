<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Amazing E-book</title>

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .navbar{
            background-color: #343E7A;
            color: white
        }

        form{
            width: 300px;
        }
        a{
            font-size: 18px;
        }

        .footer{
            background-color: #343E7A;
            height: 10%;
        }

        #main{
            min-height: 58vh;
            height: auto !important;
            height: 100%;
            margin: 0 auto -60px;
        }

        select{
            width: 25px;
        }
        /* form{
            width: 30%;
        } */
    </style>
  </head>
  <body>
    {{-- Navbar --}}
    <nav class="navbar py-4">
        <div class="p-3 pb-md-1">
           <h1>Amazing E-Book</h1>
        </div>
        <div class="">
            <ul class="nav justify-content-end">
                @auth
                    @if (auth()->user()->role_id == 1)
                        <li class="nav-item">
                            <a class="nav-link text-light fs-4" aria-current="page" href="/">{{__('string.home')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fs-4" href="/cart">{{__('string.cart')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fs-4" href="/profile/{{auth()->user()->id}}">{{__('string.profile')}}</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-light fs-4" aria-current="page" href="/">{{__('string.home')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fs-4" href="/cart">{{__('string.cart')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fs-4" href="/profile/{{auth()->user()->id}}">{{__('string.profile')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fs-4" href="/admin">{{__('string.acc')}}</a>
                        </li>

                    @endif
                    <li class="nav-item">
                        <a class="nav-link text-light fs-4" href="/logout">{{__('string.logout')}}</a>
                    </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-light fs-4" aria-current="page" href="/login">{{__('string.login')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fs-4" href="/register">{{__('string.signup')}}</a>
                        </li>
                @endauth
            </ul>
        </div>
    </nav>

    <div class="col-xl-12 my-5" id="main">
        @yield('content')
    </div>

    <div class="footer">
        <div class="container text-center py-4">
            <div class="d-flex justify-content-between">
                <div class="">
                    <p class="text-light fst-italic">&#169Copyright Amazing E-Book 2022</p>
                </div>
                <div class="float-end">
                        <a class ="text-decoration-none text-light me-5" href="/change/id">Indonesia</a>
                        <a class ="text-decoration-none text-light" href="/change/en">English</a>
                </div>
            </div>
        </div>
    </div>
    {{-- </footer> --}}
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
  </body>
</html>
