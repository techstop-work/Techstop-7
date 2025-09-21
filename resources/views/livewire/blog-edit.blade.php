<div>
<form wire:submit.prevent="updateBlog" class="space-y-8">
    <!-- Basic Information -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <div class="lg:col-span-2">
            <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Title *</label>
            <input id="title" name="title" autocomplete="off" type="text" wire:model="title" class="w-full px-3 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white text-lg" placeholder="Enter blog title">
            @error('title') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div class="lg:col-span-2">
            <label for="slug" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Slug *</label>
            <input id="slug" name="slug" autocomplete="off" type="text" wire:model="slug" class="w-full px-3 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white" placeholder="blog-slug">
            @error('slug') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="category_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Category *</label>
            <select id="category_id" name="category_id" autocomplete="off" wire:model="category_id" class="w-full px-3 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Status</label>
            <select id="status" name="status" autocomplete="off" wire:model="status" class="w-full px-3 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                <option value="draft">Draft</option>
                <option value="published">Published</option>
                <option value="archived">Archived</option>
            </select>
        </div>

        <div class="flex items-center">
            <input id="pinned" name="pinned" type="checkbox" wire:model="pinned" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
            <label for="pinned" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">
                Pin to top of blog listing
            </label>
        </div>
    </div>

    <!-- Content -->
    <div class="space-y-6 mb-8">
        <div>
            <label for="excerpt" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Excerpt</label>
            <textarea id="excerpt" name="excerpt" wire:model="excerpt" rows="4" class="w-full px-3 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white" placeholder="Brief description of the blog post"></textarea>
            @error('excerpt') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Content *</label>
            <livewire:jodit-text-editor wire:model.live="content" />
            @error('content') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
        </div>
    </div>

    <!-- Media and Publishing -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <div>
            <label for="featured_image" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Featured Image</label>
            <input id="featured_image" name="featured_image" type="file" wire:model="featured_image" accept="image/*" class="w-full px-3 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            @error('featured_image') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror

            <!-- Current Image Preview -->
            @if($blog && $blog->featured_image)
                <div class="mt-4">
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Current Image:</p>
                    <img src="{{ $blog->featured_image_url }}?t={{ time() }}" class="h-40 w-40 object-cover rounded-lg border">
                </div>
            @endif

            <!-- New Image Preview -->
            @if($featured_image)
                <div class="mt-4">
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">New Image:</p>
                    <img src="{{ $featured_image->temporaryUrl() }}" class="h-40 w-40 object-cover rounded-lg border" loading="lazy" width="160" height="160">
                </div>
            @endif
        </div>

        <div>
            <label for="published_at" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Published At</label>
            <input id="published_at" name="published_at" type="datetime-local" wire:model="published_at" class="w-full px-3 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            <p class="text-xs text-gray-500 dark:text-gray-400 mt-2">Leave empty to publish immediately when status is set to published</p>
        </div>
    </div>

    <!-- Tags -->
    <div class="mb-8">
        <label for="selectedTags" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">Tags</label>
        <select id="selectedTags" name="selectedTags[]" multiple wire:model="selectedTags" class="w-full px-3 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white" size="6">
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
        <p class="text-xs text-gray-500 dark:text-gray-400 mt-2">Hold Ctrl (Cmd on Mac) to select multiple tags</p>
    </div>

    <!-- SEO -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <div class="lg:col-span-2">
            <label for="meta_title" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Meta Title</label>
            <input id="meta_title" name="meta_title" type="text" wire:model="meta_title" class="w-full px-3 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white" placeholder="SEO title">
            @error('meta_title') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div class="lg:col-span-2">
            <label for="meta_description" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Meta Description</label>
            <textarea id="meta_description" name="meta_description" wire:model="meta_description" rows="3" class="w-full px-3 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white" placeholder="SEO description"></textarea>
            @error('meta_description') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
        </div>
    </div>

    <!-- Actions -->
    <div class="flex justify-end space-x-4 pt-6 border-t border-gray-200 dark:border-gray-700">
        <a href="{{ route('admin.blogs') }}" wire:navigate class="px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition-colors">
            Cancel
        </a>
        <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors" wire:loading.attr="disabled" wire:loading.class="opacity-50">
            <span wire:loading.remove><i class="fas fa-save mr-2"></i>Update Blog</span>
            <span wire:loading><i class="fas fa-spinner fa-spin mr-2"></i>Updating...</span>
        </button>
    </div>
</form>

<!-- Success Message -->
<div x-data="{ show: false, message: '' }"
     x-show="show"
     x-transition
     x-init="
         $wire.on('blog-updated', (event) => {
             show = true;
             message = event.message;
             setTimeout(() => show = false, 3000);
         })
     "
     class="fixed bottom-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50"
     style="display: none;">
    <span x-text="message"></span>
</div>
</div>
