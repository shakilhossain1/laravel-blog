@props(['name', 'type' => 'text', 'label' => true, 'value' => ''])
<div {{$attributes->merge(['class' => 'mb-6'])}}>
    @if ($label)
        <x-form.label :name="$name"/>
    @endif
    <input
        type="{{ $type }}"
        class="border-2 border-gray-400 rounded-md p-2 w-full focus:outline-none focus:border-blue-500"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
    >
    <x-form.error name="{{ $name }}"/>
</div>