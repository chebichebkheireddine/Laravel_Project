@props(['comment'])
<x-panel class="bg-gray-100">

    <article class="flex ">
        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/60?u={{ $comment->usre_id }}" width="60" height="60" class="rounded-xl"
                alt="avatar">
        </div>
        <div>
            <header class="mb-4">
                <h3 class="font-bold">{{ $comment->author->name }}</h3>
                <p class="text-xs ">
                    Posted
                    <time> {{ $comment->created_at->diffForHumans() }}</time>
                </p>
            </header>
            <p>
                {{ $comment->body }}
            </p>
        </div>
    </article>

</x-panel>
