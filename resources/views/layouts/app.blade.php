<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>      

        <div id="app">

            @include('partials.app-nav')

            <section class="section">
                <div class="container">
                    <div class="columns">
                        @if(!\Auth::guest())                                                           
                            <div class="column is-one-quarter">
                                @include('partials.app-sidenav')
                            </div>

                            <div class="column">
                                @yield('content')
                            </div>
                        @else                         
                        <div class="column is-half is-offset-one-quarter">
                                @yield('content')
                            </div>
                        @endif
                    </div>
                </div>
            </section>
        </div>

    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
            <p>
                <strong>Creddi</strong> by <a href="https://github.com/tetshi/creddi">Travis Ray</a>.
            </p>
            <p>
                <a class="icon" href="https://github.com/tetshi/creddi">
                <i class="fa fa-heart"></i>
                </a>
            </p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
