<x-layout>
<x-slot name="slot">
    @foreach ($posts as $post)
    
        {{-- @dd($posts) --}}
        <article>

            <h1>
                <a href="/post/{{ $post->id }} ">
                    {{ $post->title }}
                    
                </a>
            </h1>
            <p> {{ $post->excerpt }} </p>

        </article>
    @endforeach

</x-slot>

</x-layout>

