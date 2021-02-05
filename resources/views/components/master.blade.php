<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Sie können sich hier über Japan austauschen. Vielleicht kennen Sie sich auch gut in Japan aus. Dann können anderen Leuten helfen, indem Sie deren Fragen beantworten.">
    <meta name="google-site-verification" content="8L69IizsVM2Q_C17im3gWUdfWVe4ogwYfD3c9hs-CAg" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fragen über Japan</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sp-menu.css') }}" rel="stylesheet">

    {{-- favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    {{-- vue.js --}}
    @if (env('APP_DEBUG'))
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    @else
        <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    @endif

</head>
<body class="flex flex-col min-h-screen">
    <div id="vue" class="flex-1">
        {{-- header --}}
        <section class="lg:px-8 px-2 py-4">
            <header class="container mx-auto">
                <div class="flex justify-between lg:items-center">
                    {{-- Logo --}}
                    <h1 class="logo">
                        <a href="{{ route('home') }} " class="flex items-end">
                            <img
                                src="/images/logo-deer.png"
                                alt="logo-deer"
                                class="sm:h-20 h-12"
                                {{-- style="height: 4rem;" --}}
                            >
                            <img
                                src="/images/logo-font.png"
                                alt="logo-font"
                                class="sm:h-16 h-8 ml-2"
                            >
                        </a>
                    </h1>

                    {{-- Login, Register and Logout --}}
                    @if (Route::has('login') && request()->path() != 'login' && request()->path() != 'register')
                        <div class="font-bold text-lg hidden lg:block">
                            @auth
                                <form method="POST" action="/logout">
                                    @csrf

                                    <button class="font-bold text-lg text-gray-500 hover:text-gray-700">
                                        Logout
                                    </button>
                                </form>
                            @else
                                <a class="text-gray-500 hover:text-gray-700 mr-5" href="{{ route('login') }}">
                                    Login
                                </a>
                                @if (Route::has('register'))
                                    <a class="text-gray-500 hover:text-gray-700" href="{{ route('register') }}">
                                        Registrieren
                                    </a>
                                @endif
                            @endauth
                        </div>
                    @endif

                    {{-- sp-menu --}}
                    @include('_sp-menu')
                    </div>
                </div>
            </header>
        </section>

        {{-- About
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

    {{-- Footer --}}
    <footer class="py-2 bg-gray-600">
        <p class="text-center text-xs text-white">Copyright © 2020 hidms All Rights Reserved.</p>
    </footer>


    <script> src="http://unpkg.com/turbolinks"</script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script src="{{ asset('js/sp-menu.js') }}" defer></script> --}}
    <script>
        var vm = new Vue({
            el: '#vue',
            data: {
                isActive: false,
            }
        })
    </script>
</body>
</html>
