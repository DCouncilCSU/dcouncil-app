<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto">
            <h1 class="text-center font-bold text-xl">
                Login
            </h1>
            <form action="/login" method="POST">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                        Email Address
                    </label>
                    <input type="email" class="border border-gray-400 p-2 w-full"
                        name="email" id="email" required value="{{ old('email') }}">
                    @error('email')
                        <p class="text-xs mt-2 text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                        Password
                    </label>
                    <input type="password" class="border border-gray-400 p-2 w-full"
                        name="password" id="password" required>
                    @error('password')
                        <p class="text-xs mt-2 text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>