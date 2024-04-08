<x-layout>
    <x-setting :hadding="'Edit : ' . $post->title">
        <form method="Post" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <x-form.input name="title" :value="old('title', $post->title)" />
            <x-form.input name="slug" :value="old('slug', $post->slug)" />
            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="image" type="file" :value="old('imge', $post->image)" />
                </div>
                <img src="{{ asset('storage/' . $post->image) }}" alt="Blog Post illustration" class="rounded-xl"
                    width="100">

            </div>
            {{-- uplode imges --}}
            <x-form.textarea name="excerpt">
                {{ old('excerpt', $post->excerpt) }}
            </x-form.textarea>
            <x-form.textarea name="body">
                {{ old('body', $post->body) }}
            </x-form.textarea>

            <x-form.filde>
                <x-form.label name="Category" />

                <select name="category_id" class="form-select bg-white ">
                    @foreach (App\Models\Category::all() as $categoris)
                        <option value="{{ $categoris->id }}"
                            {{ old('category_id', $post->category_id) === $categoris->id ? 'selected' : '' }}>
                            {{ $categoris->name }}
                        </option>
                    @endforeach
                </select>
                <x-form.error name="category_id" />
            </x-form.filde>

            <div class="mb-6 text-center">
                <x-button-submit>
                    Update
                </x-button-submit>
            </div>
        </form>

    </x-setting>
</x-layout>
