<x-layout>
    <x-slot name="slot">
        <article>
            <!-- This call from Route in Web.php -->
            <h1>{{ $posts->title }} </h1>

            {!! $posts->body !!}
            </br>

            <a href="/">Go back</a>

        </article>
    </x-slot>
</x-layout>
