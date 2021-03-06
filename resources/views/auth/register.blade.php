@component('components.master')
<div class="container mx-auto flex justify-center">
    <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
        <div class="flex justify-between items-end mb-4">
            <div class="font-bold text-xl">
                Registrieren
            </div>
            <div class="text-xs text-gray-600 hover:text-gray-800 hover:underline">
                <a href="{{ route('home') }}">Home</a>
            </div>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="username"
                >
                    Benutzername
                </label>

                <input class="border border-gray-400 p-2 w-full"
                       type="text"
                       name="username"
                       id="username"
                       autocomplete="username"
                       autofocus
                       value="{{ old('username') }}"
                       required
                >

                @error('username')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="name"
                >
                    Name
                </label>

                <input class="border border-gray-400 p-2 w-full"
                       type="text"
                       name="name"
                       id="name"
                       value="{{ old('name') }}"
                       required
                >

                @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="email"
                >
                    Email
                </label>

                <input class="border border-gray-400 p-2 w-full"
                       type="email"
                       name="email"
                       id="email"
                       value="{{ old('email') }}"
                       autocomplete="email"
                       required
                >

                @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="password"
                >
                    Passwort
                </label>

                <input class="border border-gray-400 p-2 w-full"
                       type="password"
                       name="password"
                       id="password"
                       autocomplete="new-password"
                >

                @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="password_confirmation"
                >
                    Passwort bestätigen
                </label>

                <input class="border border-gray-400 p-2 w-full"
                       type="password"
                       name="password_confirmation"
                       id="password_confirmation"
                       autocomplete="new-password"
                >

                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center">
                <button type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                >
                    Registrieren
                </button>

                <div class="ml-6 text-xs text-gray-600 hover:text-gray-800 hover:underline">
                        <a href="{{ route('login') }}">
                            Login
                        </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endcomponent
