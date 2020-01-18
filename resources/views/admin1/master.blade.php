<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/index1.css')}}">
    <link rel="stylesheet" href="{{asset('job-details.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    {{--    Favicon--}}
    <link rel="apple-touch-icon" sizes="57x57" href="{{'images/favicon/apple-icon-57x57.png'}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{'images/favicon/apple-icon-60x60.png'}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{'images/favicon/apple-icon-72x72.png'}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{'images/favicon/apple-icon-76x76.png'}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{'images/favicon/apple-icon-114x114.png'}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{'images/favicon/apple-icon-114x114.png'}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{'images/favicon/apple-icon-144x144.png'}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{'images/favicon/apple-icon-152x152.png'}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{'images/favicon/apple-icon-180x180.png'}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{'images/favicon/android-icon-192x192.png'}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{'images/favicon/favicon-32x32.png'}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{'images/favicon/favicon-96x96.png'}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{'images/favicon/favicon-16x16.png'}}">
    <link rel="manifest" href="{{'images/favicon/manifest.json'}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{'images/favicon/ms-icon-144x144.png'}}">
    <meta name="theme-color" content="#ffffff">

{{--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>--}}
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}
{{--    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">--}}
{{--    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">--}}
{{--    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}

<!-- Compiled and Minified Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">

    <!-- jQuery Library -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous">
    </script>

    <!-- Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous">
    </script>

    <!-- Compiled and Minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous">
    </script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-sm bg-success navbar-dark">
        <a class="navbar-brand" href="index.php"><img src="{{asset('images/logo/Logo.jpeg')}}" alt="Logo" height="35px" width="35px"
                                                      class="logo"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('admin1/dashboard')}}">Dashboard</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

@yield('content')
<br><br><br><br><br>
<footer>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/about-us')}}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/contact-us')}}">Contact Us</a>
            </li>
        </ul>
    </nav>
</footer>
</body>
</html>
