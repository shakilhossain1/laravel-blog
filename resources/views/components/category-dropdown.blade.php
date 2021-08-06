<x-dropdown>
    <x-slot name="trigger">
        <button
            class="focus:outline-none py-2 flex items-center justify-between px-3 text-sm font-semibold w-full lg:w-32 text-left">
            <span>
                {{ isset($currentCategory) ? $currentCategory->name : 'category' }}
            </span>
            <x-down-arrow class="pointer-events-none" />
        </button>
    </x-slot>
    <x-dropdown-item
        href="/?{{ http_build_query(request()->except('category', 'page')) }}"
        :active="request()->routeIs('home')">
        All
    </x-dropdown-item>
    @foreach ($categories as $category)
    <x-dropdown-item
        href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
        :active="request()->is('categories/' . $category->slug)">
        {{ $category->name }}
    </x-dropdown-item>
    @endforeach
</x-dropdown>