<x-layout>
    @include('_post-hader')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />
        @else
            <p class="text-center">No post found chacke later</p>
        @endif
        </mai n>


</x-layout>
