<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogCreate extends Component
{
    use WithFileUploads;

    // Form fields
    public $title;
    public $slug;
    public $content;
    public $excerpt;
    public $category_id;
    public $selectedTags = [];
    public $featured_image;
    public $meta_title;
    public $meta_description;
    public $status = 'draft';
    public $published_at;
    public $pinned = false;

    protected $rules = [
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:blogs,slug',
        'content' => 'required|string',
        'excerpt' => 'nullable|string|max:500',
        'category_id' => 'required|exists:categories,id',
        'selectedTags' => 'array',
        'featured_image' => 'nullable|image|max:5120',
        'meta_title' => 'nullable|string|max:255',
        'meta_description' => 'nullable|string|max:500',
        'status' => 'required|in:draft,published,archived',
        'published_at' => 'nullable|date',
        'pinned' => 'boolean',
    ];

    public function updatedTitle()
    {
        $this->slug = Str::slug($this->title);
    }

    public function saveBlog()
    {
        $this->validate();

        $data = [
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'excerpt' => $this->excerpt,
            'category_id' => $this->category_id,
            'meta_title' => $this->meta_title,
            'meta_description' => $this->meta_description,
            'status' => $this->status,
            'published_at' => $this->published_at ? \Carbon\Carbon::parse($this->published_at) : null,
            'admin_id' => auth()->guard('admin')->id(),
            'pinned' => $this->pinned,
        ];

        $blog = Blog::create($data);
        $blog->tags()->sync($this->selectedTags);

        // Handle featured image upload
        if ($this->featured_image) {
            $extension = $this->featured_image->getClientOriginalExtension();
            $filename = 'blog-' . $blog->id . '-' . time() . '.' . $extension;
            $imagePath = $this->featured_image->storeAs('blog-images', $filename, 's3');
            $blog->update(['featured_image' => $imagePath]);
        }

        // Flash success message
        $this->dispatch('blog-created', message: 'Blog created successfully!');

        // Reset form fields
        $this->reset(['title', 'slug', 'content', 'excerpt', 'category_id', 'selectedTags', 'featured_image', 'meta_title', 'meta_description', 'status', 'published_at', 'pinned']);
    }

    public function render()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('livewire.blog-create', [
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }
}
