{{-- sp-menu button --}}
<div class="lg:hidden">
    <button type="button" class="menu-btn">
    {{-- <button type="button" class="menu-btn" v-on:click='isActive=!isActive'> --}}
        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
            <path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/>
        </svg>
    </button>
</div>

{{-- sp-menu--}}
<div class="menu">
{{-- <div class="menu" v-bind:class='{active:isActive}'> --}}
    <ul class="text-5xl text-white bold">
        <li><a
            href="{{ route('home') }}"
            class="mb-10 border-b-4 border-white">
            Home
        </a></li>
        <li><a
            href="/explore"
            class="mb-10 border-b-4 border-white">
            Benutzerliste
        </a></li>
        <li><a
            href="/about"
            class="mb-10 border-b-4 border-white">
            Über die Seite
        </a></li>
        @auth
            <li><a
                href="{{ auth()->user() ? auth()->user()->path() : '' }}"
                class="mb-10 border-b-4 border-white"
                >
                    Profil
            </a></li>
            <form method="POST" action="/logout">
                @csrf
                <button class="border-b-4 border-white">
                    Logout
                </button>
            </form>
        @else
            <li><a
                href="{{ route('login') }}"
                class="mb-10 border-b-4 border-white"
                >
                    Login
            </a></li>
            <li><a
                href="{{ route('register') }}"
                class="mb-10 border-b-4 border-white"
                >
                    Registrieren
            </a></li>
        @endauth
    </ul>
</div>
