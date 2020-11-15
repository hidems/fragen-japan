@component('components.master')
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-center">

                {{-- main --}}
                <div class="lg:flex-1 lg:mx-10" style="max-width: 800px;">
                    {{ $slot }}
                </div>

                {{-- sidebar --}}
                <div class="lg:w-32 hidden lg:block ">
                    @include('_sidebar')
                </div>

                {{-- old-sidebar-right --}}
                {{-- <div class="lg:w-1/6" >
                    @include('_sidebar-right')
                </div> --}}
            </div>
        </main>
    </section>
@endcomponent
