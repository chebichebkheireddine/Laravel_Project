<x-layout>
    <x-slot name="slot">
        @foreach ($posts as $post)
            {{-- @dd($posts) --}}
            <article>

                <h1>
                    <a href="/post/{{ $post->slug }}">
                        {{ $post->title }}

                    </a>
                </h1>

                <p>
                <h5>Create by <a href="/authors/{{ $post->author->user_name }}">
                        {{ $post->author->user_name }}</a> in <a href="/category/{{ $post->category->slug }}">
                        {{ $post->category->name }}</a></h5>
                </p>
                </br>
                {{ $post->excerpt }}


            </article>
        @endforeach

    </x-slot>

</x-layout>
