@component('components.master')
<div class="container mx-auto flex justify-center">
    <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
        <div class="font-bold text-xl mb-4">
            Passwort erneuern
        </div>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="mb-6">
                <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    E-Mail Addresse
                </label>

                <input
                    id="email"
                    type="email"
                    class="border border-gray-400 p-2 w-full"
                    name="email"
                    value="{{ $email ?? old('email') }}"
                    required
                    autocomplete="email"
                >

                @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Passwort
                </label>

                <input
                    id="password"
                    type="password"
                    class="border border-gray-400 p-2 w-full"
                    name="password"
                    required
                    autocomplete="new-password"
                >

                @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password-confirm" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Passwort bestätigen
                </label>

                <input
                    id="password-confirm"
                    type="password"
                    class="border border-gray-400 p-2 w-full"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                >
            </div>

            <button
                type="submit"
                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2"
            >
                Passwort erneuern
            </button>
        </form>
    </div>
</div>
@endcomponent
