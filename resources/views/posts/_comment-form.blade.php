@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="POST">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" class="rounded-full object-cover" alt="hello there" width="40" height="40">
                <h2 class="ml-4">Want to Participate?</h2>
            </header>
            <div class="mt-6">
                <textarea
                    name="body"
                    class="w-full resize-none overflow-y-auto focus:outline-none text-sm"
                    placeholder="Quick, think of something to say" cols="30" rows="5"
                ></textarea>
                @error('body')
                    <p class="text-red-500 font-bold text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-end pt-6 mt-6 border-t border-gray-200">
                <button type="submit" class="px-8 py-2 rounded-full text-white bg-blue-500 hover:bg-blue-600 text-sm">Post</button>
            </div>
        </form>
    </x-panel>
@else
    <p>
        <a href="/login" class="hover:underline">Login to leave a comment</a>
    </p>
@endauth
