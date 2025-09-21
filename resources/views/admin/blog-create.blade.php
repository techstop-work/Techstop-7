@extends('layouts.admin')

@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Create New Blog</h2>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Fill in the details to create a new blog post</p>
            </div>
            <div>
                <a href="{{ route('admin.blogs') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    Back to Blogs
                </a>
            </div>
        </div>

        <!-- Form -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md">
            <div class="p-6">
                <livewire:blog-create />
            </div>
        </div>
    </div>
</main>

@endsection