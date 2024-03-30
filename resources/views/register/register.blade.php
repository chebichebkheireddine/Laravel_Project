<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-300 p-6 border-gray-50 rounded-xl">
            <h1 class="text-center font-bold text-xl p-4 mt-1">Regester</h1>
            <form method="Post" action="/register">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Name
                    </label>
                    <input type="text" class="border border-gray-400 p-2 w-full" name="name" id="name"
                        required>
                </div>
                <div class="mb-6">
                    <label for="user_name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Username
                    </label>
                    <input type="text" class="border border-gray-400 p-2 w-full" name="user_name" id="username"
                        required>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Email
                    </label>
                    <input type="email" class="border border-gray-400 p-2 w-full" name="email" id="email"
                        required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password
                    </label>
                    <input type="password" class="border border-gray-400 p-2 w-full" name="password" id="password"
                        required>
                </div>
                <div class="mb-6 text-center">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
