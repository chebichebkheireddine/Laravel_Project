<x-layout>
    <x-slot name="slot">
        <category>
            <!-- This call from Route in Web.php -->
            <h1>{{ $category->name }} </h1>

            {!! $category->slug !!}
            </br>

            <a href="/">Go back</a>

        </category>
    </x-slot>
    
    </x-layout>
    
    