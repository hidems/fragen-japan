<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ $post->user_id ? route('profile', $post->user) : '' }}">
            <img
                src="/images/default-avatar.jpeg"
                alt=""
                class="rounded-full mr-2"
                width="50"
                height="50"
            >
        </a>
    </div>

    <div>
        <h5 class="font-bold mb-2">
            <a href="{{ $post->user_id ? route('profile', $post->user) : '' }}">
                {{ $post->user_id ? $post->user->name : "Ich habe eine Frage!!" }}
            </a>
        </h5>

        <p class="text-sm mb-3">
            {{ $post->body }}
        </p>
    </div>
</div>