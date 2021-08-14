<x-layout>
    <x-setting heading="publish new post">
        <form action="/admin/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" />
            <x-form.input name="slug" />
            <x-form.input type="file" name="thumbnail" />
            <x-form.textarea name="excerpt" />
            <x-form.textarea name="body" />

            <div class="mb-6">
                <x-form.label name="category_id" title="Post Category" />
                <select
                    class="border-2 border-gray-400 rounded-md p-2 w-full focus:outline-none focus:border-blue-500"
                    id="category_id"
                    name="category_id"
                    value="{{ old('category_id') }}"
                >
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp

                    @foreach ($categories as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                        >{{ $category->name }}</option>
                    @endforeach
                </select>
                <x-form.error name="{{ $category }}"/>
            </div>
            <x-submit-button>Submit</x-submit-button>
        </form>
    </x-setting>
</x-layout>