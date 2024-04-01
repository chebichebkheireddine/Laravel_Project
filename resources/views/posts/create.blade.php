<x-layout>
    <x-panel class="max-w-sm mx-auto ">
        <form method="Post" action="/admin/posts">
            @csrf
            <div class="mb-6">
                <label for="text" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Title
                </label>
                <input type="text" class="border border-gray-400 p-2 w-full" name="title" id="title "
                    value="{{ old('title') }}" required>
                @error('title')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="text" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    slug
                </label>
                <input type="text" class="border border-gray-400 p-2 w-full" name="slug" id="slug"
                    value="{{ old('slug') }}" required>
                @error('slug')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="text" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    excerpt
                </label>
                <textarea type="text" class="border border-gray-400 p-2 w-full" name="excerpt" id="excerpt" required>{{ old('excerpt') }}</textarea>
                @error('excerpt')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="text" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    body
                </label>
                <textarea type="text" class="border border-gray-400 p-2 w-full" name="body" id="body" required>{{ old('body') }}</textarea>
                @error('body')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <select name="category_id" class="form-select">
                    <option selected>Category</option>
                    @foreach (App\Models\Category::all() as $categoris)
                        <option value="{{ $categoris->id }}">{{ $categoris->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-6 text-center">
                <x-button-submit>
                    Post
                </x-button-submit>
            </div>
        </form>
    </x-panel>
</x-layout>
