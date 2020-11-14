<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fragen über Japan') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sp-menu.css') }}" rel="stylesheet">

</head>
<body>
    {{-- header --}}
    <section class="px-8 py-4">
        <header class="container mx-auto">
            <div class="flex justify-between items-center">
                {{-- Logo --}}
                <h1 class="logo">
                    <img
                        src="/images/logo.png"
                        alt="logo"
                        class="h-12"
                    >
                </h1>

                {{-- Login, Register and Logout --}}
                @if (Route::has('login') && request()->path() != 'login' && request()->path() != 'register')
                    <div class="font-bold text-lg hidden lg:block">
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

                {{-- Humburger menu button --}}
                <div class="lg:hidden">
                    <button type="button" class="menu-btn">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                            <path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/>
                        </svg>
                    </button>
                </div>

                {{-- Humburger menu--}}
                <div class="menu">
                    <ul class="text-5xl text-white bold">
                        <li><a
                            href="{{ route('home') }}"
                            class="mb-10 border-b-4 border-white">
                            Home
                        </a></li>
                        <li><a
                            href="/explore"
                            class="mb-10 border-b-4 border-white">
                            Explore User
                        </a></li>
                        @auth
                            <li><a
                                href="{{ auth()->user() ? auth()->user()->profilePath() : '' }}"
                                class="mb-10 border-b-4 border-white">
                                Profile
                            </a></li>
                            <form method="POST" action="/logout">
                                @csrf
                                <button class="border-b-4 border-white">Logout</button>
                            </form>
                        @else
                            <li><a
                                href="{{ route('login') }}"
                                class="mb-10 border-b-4 border-white">
                                Login
                            </a></li>
                            <li><a
                                href="{{ route('register') }}"
                                class="mb-10 border-b-4 border-white">
                                Register
                            </a></li>
                        @endauth
                    </ul>
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


    <script> src="http://unpkg.com/turbolinks"</script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/sp-menu.js') }}" defer></script>
</body>
</html>
