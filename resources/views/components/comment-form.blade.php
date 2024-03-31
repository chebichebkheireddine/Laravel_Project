@props(['posts', 'test'])
<form method="Post" action="/posts/{{ $posts }}/comments">
    @csrf
    <header class="flex item-center ">
        <img src="https://i.pravatar.cc/60?u={{ $test }}" width="60" height="60" class="rounded-xl" />
        <h3 class="ml-4">put acomment ?</h3>
    </header>
    <div class="mt-6">
        <textarea name="body"class="w-full text-sm  focus:outline-non focus:ring" cols="10" rows="5"
            placeholder="put a comment" name="body" required></textarea>
    </div>
    <div class="flex justify-end mt-10 border-t border-gray-200 pt-6">
        <button type="submit"
            class="bg-blue-400 py-3 px-10 uppercase rounded-3xl text-white hover:bg-blue-700 font-semibold">
            Post</button>
    </div>
    @error('body')
        <div class="text-red-500 text-xs mt-2 font-extrabold">{{ $message }}</div>
    @enderror
</form>
