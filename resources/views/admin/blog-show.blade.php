@extends('layouts.admin')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">{{ $blog->title }}</h2>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                    Created by {{ $blog->admin->name ?? 'Unknown' }} •
                    {{ $blog->formatted_published_date ?? 'Not published' }}
                </p>
            </div>
            <div class="flex space-x-3">
                <a href="{{ route('admin.blogs') }}" class="px-4 py-2 bg-gray-500 text-accent dark:text-gray-200 rounded-lg hover:bg-gray-600">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Blogs
                </a>
                <a href="{{ route('admin.blogs.edit', $blog->id) }}" wire:navigate class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    <i class="fas fa-edit mr-2"></i>Edit Blog
                </a>
            </div>
        </div>

        <!-- Status and Meta Info -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-blue-100 dark:bg-blue-900">
                        <i class="fas fa-tag text-blue-600 dark:text-blue-400"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Status</p>
                        <p class="text-lg font-semibold text-gray-900 dark:text-white capitalize">{{ $blog->status }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-green-100 dark:bg-green-900">
                        <i class="fas fa-eye text-green-600 dark:text-green-400"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Views</p>
                        <p class="text-lg font-semibold text-gray-900 dark:text-white">{{ $blog->views }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-purple-100 dark:bg-purple-900">
                        <i class="fas fa-folder text-purple-600 dark:text-purple-400"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Category</p>
                        <p class="text-lg font-semibold text-gray-900 dark:text-white">{{ $blog->category->name }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Blog Content -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Featured Image -->
                @if($blog->featured_image)
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ \Storage::disk('s3')->url($blog->featured_image) }}" alt="{{ $blog->title }}" class="w-full h-64 object-cover">
                    </div>
                @endif

                <!-- Excerpt -->
                @if($blog->excerpt)
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Excerpt</h3>
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">{{ $blog->excerpt }}</p>
                    </div>
                @endif

                <!-- Content -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md mt-2 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Content</h3>
                    <div class="prose dark:prose-invert max-w-none dark:text-gray-300">
                        {!! $blog->content !!}
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Tags -->
                @if($blog->tags->count() > 0)
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Tags</h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach($blog->tags as $tag)
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300">
                                    {{ $tag->name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- SEO Information -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">SEO Information</h3>
                    <div class="space-y-3">
                        <div>
                            <label class="block text-sm font-medium text-gray-600 dark:text-gray-400">Meta Title</label>
                            <p class="text-sm text-gray-900 dark:text-white">{{ $blog->meta_title ?: 'Not set' }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 dark:text-gray-400">Meta Description</label>
                            <p class="text-sm text-gray-900 dark:text-white">{{ $blog->meta_description ?: 'Not set' }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 dark:text-gray-400">Slug</label>
                            <p class="text-sm text-gray-900 dark:text-white">{{ $blog->slug }}</p>
                        </div>
                    </div>
                </div>

                <!-- Timestamps -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Timestamps</h3>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Created:</span>
                            <span class="text-gray-900 dark:text-white">{{ $blog->created_at->format('M d, Y H:i') }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Updated:</span>
                            <span class="text-gray-900 dark:text-white">{{ $blog->updated_at->format('M d, Y H:i') }}</span>
                        </div>
                        @if($blog->published_at)
                            <div class="flex justify-between">
                                <span class="text-gray-600 dark:text-gray-400">Published:</span>
                                <span class="text-gray-900 dark:text-white">{{ $blog->published_at->format('M d, Y H:i') }}</span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection