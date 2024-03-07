<x-layout>
<x-slot name="slot">
    @foreach ($posts as $post)
        {{-- @dd($post) --}}
        <article>

            <h1>
                <a href="/post/{{ $post->slug }} ">
                    {{ $post->title }}
                    
                </a>
            </h1>
            <p> {{ $post->subPar }} </p>

        </article>
    @endforeach

</x-slot>

</x-layout>

