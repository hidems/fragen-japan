<h2 class="mt-8 font-bold text-xl">Ihre Antwort</h2>

<hr>

<div class="border border-blue-400 rounded-lg px-8 py-6 mt-4 mb-8">
    <form method="POST" action="{{ $post->path() }}">
        @csrf

        <textarea
            name="body"
            class="w-full"
            placeholder="Was denken Sie?"
            required
            autofocus
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img
                src={{ auth()->user() ? auth()->user()->avatar : '../images/default-avatar.jpeg' }}
                alt="your avatar"
                class="rounded-full mr-2"
                width="50"
                height="50"
            >

            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow px-10 text-sm text-white h-10"
            >
                Antwort
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
