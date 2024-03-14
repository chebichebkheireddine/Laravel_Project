<x-layout>
    <x-slot name="slot">
        <article>
            <!-- This call from Route in Web.php -->
            <h1>{{ $post->title }} </h1>
            <h2>Create by <a href="#">{{ $post->user->name}}</a> in <a href="/category/{{$post->category->slug}}"> {{ $post->category->name}}</a></h2>

            {!! $post->body !!}
            </br>

            <a href="/">Go back</a>

        </article>
    </x-slot>
</x-layout>
