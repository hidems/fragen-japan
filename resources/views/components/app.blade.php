@component('components.master')
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">

                {{-- sidebar-left --}}
                @if (request()->path() != 'login' && request()->path() != 'register')
                    <div class="lg:w-32">
                        @include('_sidebar-left')
                    </div>
                @endif

                {{-- main --}}
                <div class="lg:flex-1 lg:mx-10" style="max-width: 800px;">
                    {{ $slot }}
                </div>

                {{-- sidebar-right --}}
                @if (request()->path() != 'login' && request()->path() != 'register')
                    <div class="lg:w-1/6" >
                        @include('_sidebar-right')
                    </div>
                @endif
            </div>
        </main>
    </section>
@endcomponent
