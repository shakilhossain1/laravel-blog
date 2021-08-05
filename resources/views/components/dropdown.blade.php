@props(['trigger'])
<div x-data="{show: false}" class="w-full">
    {{-- trigger --}}
    <div @click="show = !show">
        {{ $trigger }}
    </div>
    <div x-show="show" x-transition class="py-2 absolute top-full w-full bg-gray-100 rounded-lg mt-2 z-40 overflow-auto max-h-52"
        @click.away="show = false">
        {{$slot}}
    </div>
</div>
