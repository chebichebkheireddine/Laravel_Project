<!--  Category -->
<x-dropdown>
    <x-slot name="trigger">
        <button class="text-xs font-bold uppercase">
            Welcome back, {{ auth()->user()->name }}
        </button>
    </x-slot>

    <x-itemdrop href="/admin/posts/create" :active="request()->is('admin/posts/create')">New post</x-itemdrop>
    <x-itemdrop href="/">Home</x-itemdrop>
</x-dropdown>
