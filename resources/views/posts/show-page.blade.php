@component('components.app')
{{-- Post --}}
<div class="flex p-4 border border-gray-400 rounded-lg mb-8">
    {{-- User Photo --}}
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
        {{-- Name --}}
        <h5 class="font-bold mb-2">
            <a href="{{ $post->user_id ? $post->user->profilePath() : '' }}">
                {{ $post->user_id ? $post->user->name : "Ich habe eine Frage!!" }}
            </a>
        </h5>

        {{-- Body --}}
        <p class="text-sm mb-3">
            {{ $post->body }}
        </p>

        {{-- Post date --}}
        <div class="">
            <p class="text-xs text-gray-500">Posted {{ $post->created_at->diffForHumans() }}</p>
        </div>
    </div>
</div>

{{-- Number of comments --}}
<h2 class="mt-8 font-bold text-xl">{{ count($comments) . ' Antworten Jetzt' }}</h2>

<hr>

{{-- Comment --}}
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

            <div class="">
                <p class="text-xs text-gray-500">Posted {{ $comment->created_at->diffForHumans() }}</p>
            </div>
        </div>
    </div>
    @empty
        <p class="p-4">No comments yet.</p>
    @endforelse

    {{ $comments->links() }}
</div>

{{-- comment-panel --}}
@include('posts._comment-panel')

@endcomponent
