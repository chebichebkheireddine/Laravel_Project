<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

    <h2 class="inline-flex mt-2">By Lary Laracore <img src="/images/lary-head.svg" alt="Head of Lary the mascot"></h2>

    <p class="text-sm mt-14">
        Another year. Another update. We're refreshing the popular Laravel series with new content.
        I'm going to keep you guys up to speed with what's going on!
    </p>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl w-32">
            <x-dropdownGlobal>
            </x-dropdownGlobal>
        </div>

        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <input type="text" name="search" placeholder="Find something"
                    class="bg-transparent placeholder-black font-semibold text-sm" value="{{ request('search') }}">
            </form>
        </div>
    </div>
</header>
