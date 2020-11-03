@component('components.app')
    <header class="mb-6">
        <div class="flex mb-6">
            <img
                src={{ $user->avatar }}
                alt=""
                class="rounded-full mr-2"
                width="150"
            >

            <div class="ml-4">
                <h2 class="font-bold text-4xl -mb-2">{{ $user->name }}</h2>

                <p class="text-s text-gray-600 mb-0">
                    {{ '@' . $user->username }}
                </p>

                <p class="text-sm text-gray-600 mb-6">Joined {{ $user->created_at->diffForHumans() }}</p>

                @can ('edit', $user)
                    <a href="{{ $user->path('edit') }}"
                        class="rounded-full border border-gray-300 bg-blue-500 hover:bg-blue-600 py-2 px-4 text-white text-s mr-2"
                    >
                        Edit Profile
                    </a>
                 @endcan
            </div>
        </div>

        <p class="text-sm">
            The name’s Bugs. Bugs Bunny. Don’t wear it out. Bugs is an anthropomorphic gray
            and white rabbit or hare who is famous for his flippant, insouciant personality.
            He is also characterized by a Brooklyn accent, his portrayal as a trickster,
            and his catch phrase "Eh...What's up, doc?"
        </p>



    </header>

    @include('_timeline', [
        'posts' => $posts
    ])
@endcomponent
