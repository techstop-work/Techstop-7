<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'excerpt',
        'admin_id',
        'category_id',
        'featured_image',
        'meta_title',
        'meta_description',
        'status',
        'published_at',
        'views',
        'pinned'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'pinned' => 'boolean',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getFormattedPublishedDateAttribute()
    {
        return $this->published_at ? $this->published_at->format('d/m/Y') : null;
    }

    public function getFeaturedImageUrlAttribute()
    {
        return $this->featured_image ? Storage::disk('s3')->url($this->featured_image) : null;
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    public function scopeSearch($query, $search)
    {
        return $query->where(function ($q) use ($search) {
            $q->where('title', 'like', '%' . $search . '%')
              ->orWhere('content', 'like', '%' . $search . '%')
              ->orWhere('excerpt', 'like', '%' . $search . '%');
        });
    }
}
