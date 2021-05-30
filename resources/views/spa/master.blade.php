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

    {{-- vue.js by CDN --}}
    {{-- @if (env('APP_DEBUG'))
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    @else
        <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    @endif --}}

</head>
<body>
    <div id="app">
        <header-component></header-component>
        <example-component></example-component>
    </div>

    {{-- script --}}
    <script> src="http://unpkg.com/turbolinks"</script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/sp-menu.js') }}" defer></script>
    <script src="{{ asset('js/textarea.js') }}" defer></script>
</body>
</html>
