@component('components.app')
{{-- Post --}}
<div class="flex p-4 border border-gray-400 rounded-lg mb-8">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ $post->user_id ? $post->user->profilePath() : '' }}">
            <img
                src={{ $post->user_id ? $post->user->avatar : '../images/default-avatar.jpeg' }}
                alt=""
                class="rounded-full mr-2"
                width="50"
                height="50"
            >
        </a>
    </div>

    <div>
        <h5 class="font-bold mb-2">
            <a href="{{ $post->user_id ? $post->user->profilePath() : '' }}">
                {{ $post->user_id ? $post->user->name : "Ich habe eine Frage!!" }}
            </a>
        </h5>

        <p class="text-sm mb-3">
            {{ $post->body }}
        </p>
    </div>
</div>

{{-- Comments --}}
<h2 class="mt-8 font-bold text-xl">{{ count($comments) . ' Antworten Jetzt' }}</h2>
<hr>
<div class="border border-gray-300 rounded-lg mt-4 mb-8">
    @forelse ($comments as $comment)
    <div class="flex p-4 border-b border-b-gray-400">
        <div class="mr-2 flex-shrink-0">
            <a href="{{ $comment->user_id ? $comment->user->profilePath() : '' }}">
                <img
                    src={{ $comment->user_id ? $comment->user->avatar : '../images/default-avatar.jpeg' }}
                    alt=""
                    class="rounded-full mr-2"
                    width="50"
                    height="50"
                >
            </a>
        </div>

        <div>
            <h5 class="font-bold mb-2">
                <a href="{{ $comment->user_id ? $comment->user->profilePath() : '' }}">
                    {{ $comment->user_id ? $comment->user->name : "Ich habe eine Frage!!" }}
                </a>
            </h5>

            <p class="text-sm mb-3">
                {{ $comment->body }}
            </p>
        </div>
    </div>
    @empty
        <p class="p-4">No comments yet.</p>
    @endforelse

    {{ $comments->links() }}
</div>

{{-- post comment --}}
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

@endcomponent
