<div>
    <div class="flex justify-between items-center mb-6">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"> All Blogs </h2>
        <a href="{{ route('admin.blogs.create') }}" wire:navigate class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
            Add Blog
        </a>
    </div>

    <!-- Filters -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4 mb-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="sm:col-span-2 lg:col-span-1">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Search</label>
                <input type="text" wire:model.blur="search" placeholder="Search blogs..."
                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Status</label>
                <select wire:model.live="statusFilter" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                    <option value="">All Status</option>
                    <option value="draft">Draft</option>
                    <option value="published">Published</option>
                    <option value="archived">Archived</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Category</label>
                <select wire:model.live="categoryFilter" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                    <option value="">All Categories</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-end">
                <button wire:click="$set('search', ''); $set('statusFilter', ''); $set('categoryFilter', '')"
                        class="w-full sm:w-auto px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 transition-colors">
                    <i class="fas fa-times mr-2"></i>Clear Filters
                </button>
            </div>
        </div>
    </div>

    <!-- Desktop Table View -->
    <div class="hidden lg:block bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Pinned</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Published</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Views</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                    @forelse($blogs as $blog)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    @if($blog->featured_image)
                                        <img class="h-10 w-10 rounded-lg object-cover mr-3" src="{{ $blog->featured_image_url }}?t={{ time() }}" alt="" loading="lazy" width="40" height="40">
                                    @endif
                                    <div>
                                        <div class="text-sm font-medium text-gray-900 dark:text-white">{{ $blog->title }}</div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400">{{ Str::limit($blog->excerpt, 50) }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300">
                                    {{ $blog->category->name }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full
                                    @if($blog->status === 'published') bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300
                                    @elseif($blog->status === 'draft') bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300
                                    @else bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300 @endif">
                                    {{ ucfirst($blog->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($blog->pinned)
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300">
                                        <i class="fas fa-thumbtack mr-1"></i>Pinned
                                    </span>
                                @else
                                    <span class="text-gray-400">-</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                {{ $blog->formatted_published_date ?? 'Not published' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                {{ $blog->views }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.blogs.show', $blog->id) }}"
                                       wire:navigate
                                       class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300 p-1"
                                       title="View Blog">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                       wire:navigate
                                       class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300 p-1"
                                       title="Edit Blog">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button wire:click="deleteBlog({{ $blog->id }})"
                                            wire:confirm="Are you sure you want to delete this blog?"
                                            class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300 p-1"
                                            title="Delete Blog">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                                No blogs found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 bg-gray-50 dark:bg-gray-700">
            {{ $blogs->links() }}
        </div>
    </div>

    <!-- Mobile Card View -->
    <div class="lg:hidden space-y-4">
        @forelse($blogs as $blog)
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
                <div class="flex items-start justify-between mb-3">
                    <div class="flex-1">
                        @if($blog->featured_image)
                            <img class="w-full h-32 object-cover rounded-lg mb-3" src="{{ $blog->featured_image_url }}?t={{ time() }}" alt="" loading="lazy" width="400" height="128">
                        @endif
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">{{ $blog->title }}</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">{{ Str::limit($blog->excerpt, 100) }}</p>
                        <div class="flex flex-wrap gap-4 mb-3">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300">
                                {{ $blog->category->name }}
                            </span>
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full
                                @if($blog->status === 'published') bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300
                                @elseif($blog->status === 'draft') bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300
                                @else bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300 @endif">
                                {{ ucfirst($blog->status) }}
                            </span>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400">
                            {{ $blog->formatted_published_date ?? 'Not published' }} • {{ $blog->views }} views
                        </div>
                    </div>
                </div>
                <div class="flex justify-end space-x-3">
            <a href="{{ route('admin.blogs.show', $blog->id) }}"
               wire:navigate
               class="inline-flex items-center px-3 py-2 text-sm font-medium text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300">
                <i class="fas fa-eye mr-1"></i>View
            </a>
            <a href="{{ route('admin.blogs.edit', $blog->id) }}"
               wire:navigate
               class="inline-flex items-center px-3 py-2 text-sm font-medium text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300">
                <i class="fas fa-edit mr-1"></i>Edit
            </a>
            <button wire:click="deleteBlog({{ $blog->id }})"
                    wire:confirm="Are you sure you want to delete this blog?"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">
                <i class="fas fa-trash mr-1"></i>Delete
            </button>
        </div>
            </div>
        @empty
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-8 text-center">
                <i class="fas fa-newspaper text-4xl text-gray-400 mb-4"></i>
                <p class="text-gray-500 dark:text-gray-400">No blogs found.</p>
            </div>
        @endforelse

        <!-- Mobile Pagination -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
            {{ $blogs->links() }}
        </div>
    </div>

</div>


