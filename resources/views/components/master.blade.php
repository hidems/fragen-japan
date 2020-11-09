<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        {{-- header --}}
        <section class="px-8 py-4">
            <header class="container mx-auto">
                <div class="flex justify-between">
                    {{-- Logo --}}
                    <h1>
                        <img
                            src="/images/logo.png"
                            alt="logo"
                            class="h-12"
                        >
                    </h1>

                    {{-- Login, Register and Logout --}}
                    @if (Route::has('login') && request()->path() != 'login' && request()->path() != 'register')
                        <div class="font-bold text-lg">
                            @auth
                                <form method="POST" action="/logout">
                                    @csrf

                                    <button class="font-bold text-lg text-gray-500 hover:text-gray-700">Logout</button>
                                </form>
                            @else
                                <a class="text-gray-500 hover:text-gray-700 mr-5" href="{{ route('login') }}">
                                    Login
                                </a>
                                @if (Route::has('register'))
                                    <a class="text-gray-500 hover:text-gray-700" href="{{ route('register') }}">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </div>
                    @endif

                </div>
           </header>
        </section>

        {{--
        <section>
            <div class="container mx-auto">
                <div class="flex items-center">
                    <div>
                        <p>F&A Seite von Japan</p>
                        <h1>Fragen über Japan</h1>
                        <h2>Lassen Sie uns über Japan diskutieren!!</h2>
                        <p>Hier konnen Sie über Japan fragen, und Ihnen Antwort hilft allen.</p>
                    </div>
                </div>
            </div>
        </section>
        --}}

        {{ $slot }}

    </div>

    <script> src="http://unpkg.com/turbolinks"</script>
</body>
</html>
