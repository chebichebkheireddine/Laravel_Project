<x-layout>
<x-slot name="slot">
    @foreach ($posts as $post)
    
        {{-- @dd($posts) --}}
        <article>

            <h1>
                <a href="/post/{{$post->slug}} ">
                    {{ $post->title}}
                    
                </a>
            </h1>
             {{ $post->excerpt }} 
            
            <a href="/category/{{$post->category_id}}"> {{ $post->category->name}}</a>
        </article>
    @endforeach

</x-slot>

</x-layout>

