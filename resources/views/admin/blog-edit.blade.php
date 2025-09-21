@extends('layouts.admin')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Edit Blog</h2>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Update the blog post details</p>
            </div>
            <div class="flex space-x-3">
                <a href="{{ route('admin.blogs.show', $blog) }}" class="px-4 py-2 bg-gray-500 text-accent rounded-lg hover:bg-gray-600 transition-colors">
                    <i class="fas fa-eye mr-2"></i>View Blog
                </a>
                <a href="{{ route('admin.blogs') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Blogs
                </a>
            </div>
        </div>

        <!-- Form -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md">
            <div class="p-6">
                <livewire:blog-edit :blog="$blog" />
            </div>
        </div>
    </div>
</main>

@endsection

@section('scripts')
<style>
.rich-editor {
    border: 1px solid #d1d5db;
    border-radius: 0.5rem;
    min-height: 300px;
    padding: 1rem;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    font-size: 14px;
    line-height: 1.6;
    outline: none;
}

.rich-editor:focus {
    border-color: #3b82f6;
    ring: 2px;
    ring-color: #3b82f6;
}

.editor-toolbar {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    padding: 0.5rem;
    border-bottom: 1px solid #e5e7eb;
    background: #f9fafb;
    border-radius: 0.5rem 0.5rem 0 0;
}

.editor-toolbar button {
    padding: 0.5rem;
    border: 1px solid #d1d5db;
    border-radius: 0.25rem;
    background: white;
    cursor: pointer;
    font-size: 14px;
    color: #374151;
    transition: all 0.2s;
}

.editor-toolbar button:hover {
    background: #f3f4f6;
    border-color: #9ca3af;
}

.editor-toolbar button.active {
    background: #3b82f6;
    color: white;
    border-color: #3b82f6;
}

.dark .rich-editor {
    border-color: #374151;
    background: #1f2937;
    color: #f9fafb;
}

.dark .editor-toolbar {
    background: #111827;
    border-color: #374151;
}

.dark .editor-toolbar button {
    background: #1f2937;
    border-color: #374151;
    color: #f9fafb;
}

.dark .editor-toolbar button:hover {
    background: #374151;
    border-color: #4b5563;
}
</style>
@endsection