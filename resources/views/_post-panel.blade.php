<div id="post-panel" class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    {{-- <form method="POST" action="{{ $posts->path() }}"> --}}
    <form method="POST" action="{{ url()->current() }}">
        @csrf

        <textarea
            name="body"
            id="post-panel-textarea"
            class="w-full"
            placeholder="Was ist Ihre Frage über Japan?"
            v-model.trim="postPanelText"
            required
        >{{ old('body') }}</textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img
                src={{ auth()->user() ? auth()->user()->avatar : asset('images/default-avatar.jpeg') }}
                alt="your avatar"
                class="rounded-full mr-2"
                width="50"
                height="50"
            >
            <div class="flex items-center">
                <small
                    class="rounded-full h-8 w-8 flex items-center justify-center
                        bg-gray-500 font-bold text-white
                        mr-2 lg:mr-6"
                    v-bind:class="computedColor"
                >@{{leftTextLength}}</small>

                <button
                    type="submit"
                    class="bg-blue-500 hover:bg-blue-600 rounded-lg font-bold shadow px-10 text-sm text-white h-10"
                >
                    Fragen
                </button>
            </div>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
