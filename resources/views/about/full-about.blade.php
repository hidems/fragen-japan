{{-- About page without sidebar --}}
@component('components.master')
    <section class="lg:px-8 px-4">
        <main class="container mx-auto lg:w-8/12">
            <div class="lg:flex lg:justify-between mt-8">
                <div class="max-w-xl">
                    <p class="text-sm font-bold bg-red-400 text-white inline-block rounded-lg px-3 py-1">
                        Website für interkulturelle Kommunikation
                    </p>
                    <img
                        src="/images/logo-font.png"
                        alt="logo-font"
                        class="h-20"
                    >
                    {{-- <h1 class="text-5xl leading-10">Fragen über Japan</h1> --}}

                    <div class="mt-10 mb-5 pb-5 border-b-2 border-gray-600">
                        <p class="text-2xl">
                            Sie können hier über Japan diskutieren.
                        </p>
                        <p class="text-xl">
                            Möchten Sie nach Japan reisen, in Japan studieren oder vielleicht dort arbeiten und haben Sie Fragen?<br>
                            <br>
                            Oder möchten Sie etwas über das Land, seine Kultur und die Leute erfahren?<br>
                            <br>
                            Vielleicht kennen Sie sich auch gut in Japan aus? Dann können anderen Leuten helfen, indem Sie deren Fragen beantworten.
                        </p>
                    </div>

                    <div>
                        <a
                            class="font-bold underline text-xl text-gray-500 hover:text-gray-700"
                            href="{{ route('register') }}">
                            Registrieren
                        </a>

                        <a
                            class="font-bold underline text-xl text-gray-500 hover:text-gray-700 ml-6"
                            href="{{ route('login') }}">
                            Login
                        </a>

                        <a
                            class="font-bold underline text-xl text-gray-500 hover:text-gray-700 ml-6"
                            href="{{ route('home') }}">
                            Home
                        </a>
                    </div>
                </div>

                <div class="">
                    <img
                        src="/images/logo-deer-big.png"
                        alt="logo-deer"
                        class=""
                    >
                </div>
            </div>
        </main>
    </section>
@endcomponent
