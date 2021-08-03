<x-layout>
    <div class="container mx-auto py-12">
        <h1 class="text-3xl text-gray-700 font-bold mb-6">{{ $post->title }}</h1>
        <div>{!! $post->body !!}</div>
    </div>
</x-layout>