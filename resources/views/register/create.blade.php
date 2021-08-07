<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-white shadow-md p-4 rounded-md">
            <h1 class="text-center text-3xl font-bold text-blue-500">Register!</h1>
            <form action="/register" method="POST" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
                    <input type="text"
                           class="border-2 border-gray-400 rounded-md p-2 w-full focus:outline-none focus:border-blue-500"
                           id="name"
                           name="name"
                           value="{{ old('name') }}"
                    >
                    @error('name')
                        <p class="text-red-500 font-bold text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
                    <input type="text"
                           class="border-2 border-gray-400 rounded-md p-2 w-full focus:outline-none focus:border-blue-500"
                           id="username"
                           name="username"
                           value="{{ old('username') }}"
                    >
                    @error('username')
                        <p class="text-red-500 font-bold text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email Address</label>
                    <input type="email"
                           class="border-2 border-gray-400 rounded-md p-2 w-full focus:outline-none focus:border-blue-500"
                           id="email"
                           name="email"
                           value="{{ old('email') }}"
                    >
                    @error('email')
                        <p class="text-red-500 font-bold text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
                    <input type="password"
                           class="border-2 border-gray-400 rounded-md p-2 w-full focus:outline-none focus:border-blue-500"
                           id="password"
                           name="password"
                    >
                    @error('password')
                        <p class="text-red-500 font-bold text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 rounded-md text-white py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>