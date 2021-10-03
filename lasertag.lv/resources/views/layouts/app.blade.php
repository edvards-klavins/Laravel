<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Testx1') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<body>
    <div id="app">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity=
"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous">
    </script>
      
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity=
"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous">
    </script>
  
    <script src=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity=
"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous">
    </script>
  
  
</head>
  
<body>
    <!-- Nav Bar  -->
    <section id="navigation">
        <nav class="navbar navbar-expand-sm 
            navbar-dark bg-dark fixed-top">
            <div class="">

                <div class=" navbar-default ">
                    <ul class="navbar-nav  align-items-center ">

                        <li class="nav-item">
                            <a class="nav-link" href="#homee">
                                <img src="{{URL('/images/logo.png')}}" class="img-fluid img2 " alt="Responsive image " >
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#kontakti">
                                Kontakti
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#spele">
                                Par Spēli
                            </a>
                        </li>
  
                        <li class="nav-item">
                            <a class="nav-link" href="#cenas">
                                Cenas
                            </a>
                        </li>
  
                        <li class="nav-item ">
                            <a class="nav-link" href="#rgalerija">
                              Rēzeknes Arēna
                            </a>
                        </li>
  
                        <li class="nav-item ">
                            <a class="nav-link" href="#vietas">
                                Atrašanās vietas
                            </a>
                        </li>
  
                        <li class="nav-item ">
                            <a class="nav-link" href="#arena2">
                                Litenes Arēna
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
{{-- Links uz img  src="{{URL('/images/22.jpg')}}" --}}
