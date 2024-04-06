<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10  p-6 border-gray-50 rounded-xl">
            <x-panel>
                <h1 class="text-center font-bold text-xl p-4 mt-1">Log in</h1>
                <form method="Post" action="/login">
                    @csrf
                    <x-form.input name="email" type="email" />
                    <x-form.input name="password" type="password" />
                    <div class="mb-6 text-center">
                        <x-button-submit>Log in</x-button-submit>
                    </div>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
