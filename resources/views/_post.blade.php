<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ $post->user_id ? $post->user->profilePath() : '' }}">
            <img
                src={{ $post->user_id ? $post->user->avatar : 'images/default-avatar.jpeg' }}
                alt=""
                class="rounded-full mr-2"
                width="50"
                height="50"
            >
        </a>
    </div>

    <div>
        <div class="mb-1">
            <h5 class="font-bold">
                <a href="{{ $post->user_id ? $post->user->profilePath() : '' }}">
                    {{ $post->user_id ? $post->user->name : "Ich habe eine Frage!!" }}
                </a>
            </h5>
        </div>

        <a href="{{ $post->path() }}">
            <p class="text-sm mb-2">
                {{ $post->body }}
            </p>
        </a>

        <div class="flex items-center">
            {{-- <button class="bg-green-400 hover:bg-green-500 rounded-lg shadow text-xs text-white px-2 py-1 mr-5">
                <a href="{{ $post->path() }}">
                    Antwort dafür
                </a>
            </button> --}}

            <a href="{{ $post->path() }}">
                <div class="flex items-center hover:bg-gray-200 rounded-lg px-2 py-1">
                    <svg viewBox="0 0 20 20" class="text-green-500 mr-1 w-3">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g class="fill-current">
                                <path d="M14,11 L8.00585866,11 C6.89706013,11 6,10.1081436 6,9.00798298 L6,1.99201702 C6,0.900176167 6.89805351,0 8.00585866,0 L17.9941413,0 C19.1029399,0 20,0.891856397 20,1.99201702 L20,9.00798298 C20,10.0998238 19.1019465,11 17.9941413,11 L17,11 L17,14 L14,11 Z M14,13 L14,15.007983 C14,16.1081436 13.1029399,17 11.9941413,17 L6,17 L3,20 L3,17 L2.00585866,17 C0.898053512,17 0,16.0998238 0,15.007983 L0,7.99201702 C0,6.8918564 0.897060126,6 2.00585866,6 L4,6 L4,8.99349548 C4,11.2060545 5.78916089,13 7.99620271,13 L14,13 Z" id="Combined-Shape"></path>
                            </g>
                        </g>
                        </svg>

                    <span class="text-xs text-green-500">{{ count($post->comments) . ' Antworten Jetzt!!' }}</span>
                </div>
            </a>

            <div class="ml-4">
                <p class="text-xs text-gray-500">Posted {{ $post->created_at->diffForHumans() }}</p>
            </div>
        </div>
    </div>
</div>
