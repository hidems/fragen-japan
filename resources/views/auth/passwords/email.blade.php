@component('components.master')
<div class="container mx-auto flex justify-center">
    <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
        <div class="flex justify-between items-end mb-4">
            <div class="font-bold text-xl">
                {{ __('Reset Password') }}
            </div>
            <div class="text-xs text-gray-600 hover:text-gray-800 hover:underline">
                <a href="{{ route('home') }}">Home</a>
            </div>
        </div>

        @if (session('status'))
            <div
                class="bg-teal-100 rounded-lg text-green-900 bold px-3 py-3 shadow-md mb-4"
                role="alert"
            >
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mb-6">
                <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    {{ __('E-Mail Address') }}
                </label>

                <input
                    id="email"
                    type="email"
                    class="border border-gray-400 p-2 w-full"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="email"
                >

                @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2"
                >
                {{ __('Send Password Reset Link') }}
            </button>
        </form>
    </div>
</div>
@endcomponent
