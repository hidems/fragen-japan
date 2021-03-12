@component('components.app')
{{-- Post --}}
<div class="flex p-4 border border-gray-400 rounded-lg mb-8">
    {{-- User Photo --}}
    <div class="mr-2 flex-shrink-0">
        <a href="{{ $posts->user_id ? $posts->user->profilePath() : '' }}">
            <img
                src={{ $posts->user_id ? $posts->user->avatar : asset('images/default-avatar.jpeg') }}
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
            <a href="{{ $posts->user_id ? $posts->user->profilePath() : '' }}">
                {{ $posts->user_id ? $posts->user->name : "Ich habe eine Frage!!" }}
            </a>
        </h5>

        {{-- Body --}}
        <p class="text-sm mb-3">
            {{ $posts->body }}
        </p>

        {{-- Post Date --}}
        <div class="">
            <p class="text-xs text-gray-500">{{ $posts->created_at->diffForHumans() }} gepostet</p>
        </div>
    </div>
</div>

{{-- Number of comments --}}
<h2 class="mt-8 font-bold text-xl">
    {{ count($posts->comments) . (count($posts->comments) == 1 ? ' Antwort' : ' Antworten') }}
</h2>

<hr>

{{-- Comment --}}
<div class="border border-gray-300 rounded-lg mt-4 mb-8">
    @forelse ($comments as $comment)
    <div class="flex p-4 border-b border-b-gray-400">
        <div class="mr-2 flex-shrink-0">
            <a href="{{ $comment->user_id ? $comment->user->profilePath() : '' }}">
                <img
                    src={{ $comment->user_id ? $comment->user->avatar : asset('images/default-avatar.jpeg') }}
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
                <p class="text-xs text-gray-500">{{ $comment->created_at->diffForHumans() }} gepostset</p>
            </div>
        </div>
    </div>
    @empty
        <p class="p-4">Noch keine Antworten.</p>
    @endforelse

    {{ $comments->links() }}
</div>

{{-- comment-panel --}}
@include('_post-panel')


@endcomponent
