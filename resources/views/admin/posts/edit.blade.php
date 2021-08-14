<x-layout>
    <x-setting heading="publish new post">
        <form action="/admin/posts/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <x-form.input name="title" value="{{ $post->title }}" />
            <x-form.input name="slug" value="{{ $post->slug }}" />
            <x-form.input type="file" name="thumbnail" />
            <x-form.textarea name="excerpt" value="{{ $post->excerpt }}" />
            <x-form.textarea name="body" value="{{ $post->body }}" />

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
                            {{ old('category_id', $post->category->id) == $category->id ? 'selected' : '' }}
                        >{{ $category->name }}</option>
                    @endforeach
                </select>
                <x-form.error name="{{ $category }}"/>
            </div>
            <x-submit-button>Save</x-submit-button>
        </form>
    </x-setting>
</x-layout>