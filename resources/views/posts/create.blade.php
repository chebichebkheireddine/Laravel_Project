<x-layout>
    <x-panel class="max-w-sm mx-auto ">
        <form method="Post" action="/admin/posts" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" />
            <x-form.input name="slug" />
            <x-form.input name="image" type="file" />
            {{-- uplode imges --}}
            <x-form.textarea name="excerpt" />
            <x-form.textarea name="body" />

            <x-form.filde>
                <x-form.label name="Category" />
                <select name="category_id" class="form-select">
                    @foreach (App\Models\Category::all() as $categoris)
                        <option value="{{ $categoris->id }}">{{ $categoris->name }}</option>
                    @endforeach
                </select>
                <x-form.error name="category_id" />
            </x-form.filde>

            <div class="mb-6 text-center">
                <x-button-submit>
                    Post
                </x-button-submit>
            </div>
        </form>
    </x-panel>
</x-layout>
