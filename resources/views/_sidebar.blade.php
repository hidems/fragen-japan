<ul>
    <li>
        <a
            class="font-bold text-lg mb-4 block text-gray-700 hover:text-gray-900"
            href="{{ route('home') }}"
        >
            Home
        </a>
    </li>

    <li>
        <a
            class="font-bold text-lg mb-4 block text-gray-700 hover:text-gray-900"
            href="/explore"
        >
            Benutzerliste
        </a>
    </li>

    <li>
        @auth
            <a
                class="font-bold text-lg mb-4 block text-gray-700 hover:text-gray-900"
                href="{{ auth()->user() ? auth()->user()->profilePath() : '' }}"
            >
                Profil
            </a>
        @endauth
    </li>
</ul>


