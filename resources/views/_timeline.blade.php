<div class="border border-gray-300 rounded-lg mb-8">
    @forelse ($posts as $post)
        @include('_post')
    @empty
        <p class="p-4">Noch keine Fragen.</p>
    @endforelse

    {{ $posts->links() }}
</div>
