@props(['comment'])
<x-panel class="flex bg-gray-100">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/60?u={{ $comment->id }}" class="rounded-full object-cover" alt="hello there" width="60" height="60">
    </div>
    <div class="ml-6">
        <header class="mb-6">
            <h3 class="font-bold">{{$comment->author->name}}</h3>
            <p class="text-xs">posted <time>{{ $comment->created_at->diffForHUmans() }}</time></p>
        </header>
        <p>{{ $comment->body }} </p>

    </div>
</x-panel>