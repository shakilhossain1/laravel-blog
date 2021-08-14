@props(['name', 'title' => false])
<label for="{{ $name }}" class="block mb-2 uppercase font-bold text-xs text-gray-700">
    {{ is_string($title) ? $title : ucwords($name) }}
</label>