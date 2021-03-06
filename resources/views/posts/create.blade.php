<x-layout>
    <section class="px-6 py-8">
        <x-panel class="max-w-sm mx-auto">
            <form method="POST" action="/admin/posts">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs ext-gray-700" for="title">
                        Title
                    </label>

                    <input type="text" class="border border-gray-400 p-2 w-full" name="title" id="title"
                           value="{{ old('title') }}" required>
                    @error('title')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs ext-gray-700" for="slug">
                        Slug
                    </label>

                    <input type="text" class="border border-gray-400 p-2 w-full" name="slug" id="slug"
                           value="{{ old('slug') }}" required>
                    @error('slug')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs ext-gray-700" for="excerpt">
                        Excerpt
                    </label>
                    <textarea
                        type="text"
                        class="border border-gray-400 p-2 w-full"
                        name="excerpt"
                        id="excerpt"
                        required>{{ old('excerpt') }}</textarea>
                    @error('excerpt')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs ext-gray-700" for="body">
                        Body
                    </label>

                    <textarea
                        type="text"
                        class="border border-gray-400 p-2 w-full"
                        name="body"
                        id="body"
                        required>{{ old('body') }}</textarea>
                    @error('body')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="category_id"
                    >
                        Category
                    </label>

                    <select name="category_id" id="category_id">
                        @foreach (\App\Models\Category::all() as $category)
                            <option
                                value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}
                            >{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>

                    @error('category')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <button
                    class="bg-blue-500 hover:bg-blue-600 text-white uppercase font-semibold text-xs rounded-2xl py-2 px-10"
                    type="submit">Publish
                </button>
            </form>
        </x-panel>
    </section>
</x-layout>
