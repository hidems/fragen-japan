@component('components.master')
<div class="container mx-auto flex justify-center">
    <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
        <div class="flex justify-between items-end mb-4">
            <div class="font-bold text-xl">
                Login
            </div>
            <div class="text-xs text-gray-600 hover:text-gray-800 hover:underline">
                <a href="{{ route('home') }}">Home</a>
            </div>
        </div>

        <form method="POST"
              action="{{ route('login') }}"
        >
            @csrf

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="email"
                >
                    Email
                </label>

                <input class="border border-gray-400 p-2 w-full"
                       type="text"
                       name="email"
                       id="email"
                       autocomplete="email"
                       value="{{ old('email') }}"
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
                    Password
                </label>

                <input class="border border-gray-400 p-2 w-full"
                       type="password"
                       name="password"
                       id="password"
                       autocomplete="current-password"
                >

                @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-6">
                <div>
                    <input class="mr-1"
                           type="checkbox"
                           name="remember"
                           id="remember" {{ old('remember') ? ' checked' : '' }}
                    >

                    <label class="text-xs text-gray-700 font-bold uppercase"
                           for="remember"
                    >
                        Remember Me
                    </label>
                </div>

                @error('remember')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>


            <div class="flex">
                <button type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2"
                >
                    Submit
                </button>

                <div class="ml-2">
                    <div>
                        <a
                            href="{{ route('register') }}"
                            class="text-xs text-gray-600 hover:text-gray-800 hover:underline">
                            Register
                        </a>
                    </div>

                    <div>
                        <a
                            href="{{ route('password.request') }}"
                            class="text-xs text-gray-600 hover:text-gray-800 hover:underline">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endcomponent
