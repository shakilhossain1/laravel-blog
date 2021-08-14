@props(['heading'])
<section class="py-8 max-w-4xl  mx-auto">
    <h1 class="text-3xl border-b pb-4 border-gray-300 font-mono font-bold text-blue-500">
        {{ $heading }}
    </h1>
    <div class="flex mt-12">
        <aside class="w-48 flex-shrink-0">
            <h4 class="font-semibold mb-6">Links</h4>
            <ul>
                <li><a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">Creae posts</a></li>
                <li><a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">Posts</a></li>
            </ul>
        </aside>
        <main class="bg-white flex-1 shadow-md p-4 rounded-md">
            {{ $slot }}
        </main>
    </div>
</section>