@props(['hadding'])
<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-8 py-3 border-b ">
        {{ $hadding }}
    </h1>
    <div class="flex">

        <aside class="w-48">
            <h class="font-semibold m-1">Links</h>
            <ul>
                <li>
                    <a href="/admin/dashbord">Dashbord</a>
                </li>
                <li>
                    <a href="/admin/posts/create"
                        class="{{ request()->is('admin/posts/create') ? 'text-blue-500 ' : '' }}">
                        Create Post</a>
                </li>
            </ul>
        </aside>
        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
