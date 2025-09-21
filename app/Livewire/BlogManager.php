<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogManager extends Component
{
    use WithPagination, WithFileUploads;

    // No modal-related properties needed anymore

    public $search = '';
    public $statusFilter = '';
    public $categoryFilter = '';

    public function deleteBlog($blogId)
    {
        $blog = Blog::findOrFail($blogId);

        // Delete featured image if exists
        if ($blog->featured_image) {
            Storage::disk('s3')->delete($blog->featured_image);
        }

        $blog->delete();
        session()->flash('message', 'Blog deleted successfully!');
    }


    public function render()
    {
        $blogs = Blog::with(['category', 'admin', 'tags'])
            ->when($this->search, function ($query) {
                $query->search($this->search);
            })
            ->when($this->statusFilter, function ($query) {
                $query->where('status', $this->statusFilter);
            })
            ->when($this->categoryFilter, function ($query) {
                $query->where('category_id', $this->categoryFilter);
            })
            ->latest()
            ->paginate(15);

        $categories = \Cache::remember('admin_categories', 3600, function () {
            return Category::all();
        });

        return view('livewire.blog-manager', [
            'blogs' => $blogs,
            'categories' => $categories,
        ]);
    }
}
