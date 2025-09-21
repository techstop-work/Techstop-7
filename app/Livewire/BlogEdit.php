<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogEdit extends Component
{
    use WithFileUploads;

    public $blogId;
    public $blog;

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

    protected function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug,' . $this->blogId,
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
    }

    public function mount(Blog $blog)
    {
        $this->blogId = $blog->id;
        $this->blog = $blog;

        $this->title = $blog->title;
        $this->slug = $blog->slug;
        $this->content = $blog->content;
        $this->excerpt = $blog->excerpt;
        $this->category_id = $blog->category_id;
        $this->selectedTags = $blog->tags->pluck('id')->toArray();
        $this->meta_title = $blog->meta_title;
        $this->meta_description = $blog->meta_description;
        $this->status = $blog->status;
        $this->published_at = $blog->published_at?->format('Y-m-d\TH:i');
        $this->pinned = $blog->pinned;
    }

    public function updatedTitle()
    {
        $this->slug = Str::slug($this->title);
    }

    public function updateBlog()
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
            'pinned' => $this->pinned,
        ];

        $this->blog->update($data);
        $this->blog->tags()->sync($this->selectedTags);

        // Handle featured image upload
        if ($this->featured_image) {
            // Delete old image if exists
            if ($this->blog->featured_image) {
                try {
                    Storage::disk('s3')->delete($this->blog->featured_image);
                } catch (\Exception $e) {
                    // Log error but continue with upload
                    \Log::error('Failed to delete old blog image: ' . $e->getMessage());
                }
            }

            $extension = $this->featured_image->getClientOriginalExtension();
            $filename = 'blog-' . $this->blog->id . '-' . time() . '.' . $extension;
            $imagePath = $this->featured_image->storeAs('blog-images', $filename, 's3');
            $this->blog->update(['featured_image' => $imagePath]);

            // Clear the uploaded file from Livewire's temporary storage
            $this->featured_image = null;
        }

        // Flash success message
        $this->dispatch('blog-updated', message: 'Blog updated successfully!');

        // Refresh the blog data to reflect changes
        $this->blog->refresh();
    }

    public function render()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('livewire.blog-edit', [
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }
}
