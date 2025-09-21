<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Blog::with(['category', 'admin', 'tags'])
            ->published()
            ->whereNotNull('published_at')
            ->orderBy('pinned', 'desc')
            ->orderBy('published_at', 'desc');

        // Filter by category if provided
        if ($request->has('category') && $request->category) {
            $query->where('category_id', $request->category);
        }

        // Filter by tag if provided
        if ($request->has('tag') && $request->tag) {
            $query->whereHas('tags', function ($q) use ($request) {
                $q->where('slug', $request->tag);
            });
        }

        // Search functionality
        if ($request->has('search') && $request->search) {
            $query->search($request->search);
        }

        $blogs = $query->paginate(9);

        $categories = \Cache::remember('blog_categories', 3600, function () {
            return Category::withCount(['blogs' => function ($query) {
                $query->published();
            }])->get();
        });

        $recentBlogs = Blog::published()
            ->whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->limit(5)
            ->get();

        $popularTags = \Cache::remember('popular_tags', 3600, function () {
            return Tag::withCount('blogs')->orderBy('blogs_count', 'desc')->limit(10)->get();
        });

        return view('main.blog', compact('blogs', 'categories', 'recentBlogs', 'popularTags'));
    }

    public function show($slug)
    {
        $blog = Blog::with(['category', 'admin', 'tags'])
            ->where('slug', $slug)
            ->published()
            ->whereNotNull('published_at')
            ->firstOrFail();

        // Increment view count
        $blog->increment('views');

        $categories = \Cache::remember('blog_categories', 3600, function () {
            return Category::withCount(['blogs' => function ($query) {
                $query->published();
            }])->get();
        });

        $recentBlogs = \Cache::remember('recent_blogs_' . $blog->id, 1800, function () use ($blog) {
            return Blog::published()
                ->whereNotNull('published_at')
                ->where('id', '!=', $blog->id)
                ->orderBy('published_at', 'desc')
                ->limit(5)
                ->get();
        });

        $popularTags = \Cache::remember('popular_tags', 3600, function () {
            return Tag::withCount('blogs')->orderBy('blogs_count', 'desc')->limit(10)->get();
        });

        // Get related blogs from same category
        $relatedBlogs = Blog::published()
            ->whereNotNull('published_at')
            ->where('category_id', $blog->category_id)
            ->where('id', '!=', $blog->id)
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();

        return view('main.blog-item', compact('blog', 'categories', 'recentBlogs', 'popularTags', 'relatedBlogs'));
    }
}