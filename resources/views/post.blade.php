<x-layout>
    <x-slot name="slot">
        <article>
            <!-- This call from Route in Web.php -->
            <h1>{{ $post->title }} </h1>
             
            <h5>Create by <a href="/authors/{{ $post->author->user_name }}">
                    {{ $post->author->user_name }}</a> in <a href="/category/{{ $post->category->slug }}">
                    {{ $post->category->name }}</a></h5>
            </p>

            {!! $post->body !!}
            </br>

            <a href="/">Go back</a>

        </article>
    </x-slot>
</x-layout>
