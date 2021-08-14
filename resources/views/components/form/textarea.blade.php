@props(['name', 'value' => ''])
<div class="mb-6">
    <x-form.label :name="$name" />
    <textarea
        class="border-2 border-gray-400 rounded-md p-2 w-full focus:outline-none focus:border-blue-500"
        id="{{ $name }}"
        rows="3"
        name="{{ $name }}"
        value="{{ old('excerpt') }}"
    >{!! $value !!}</textarea>
    <x-form.error name="{{ $name }}"/>
</div>
