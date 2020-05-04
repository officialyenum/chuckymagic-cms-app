<?php

namespace App\Http\Controllers\Blog;

use App\Category;
use App\Tag;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show(Post $post)
    {
        return view('blog.show')->with('post',$post);
    }

    public function category(Category $category)
    {
        $search = request()->query('search');
        return view('blog.category')
        ->with('category', $category)
        ->with('search', $search)
        ->with('categories', Category::all())
        ->with('tags',Tag::all())
        ->with('posts', $category->posts()->searched()->simplePaginate(4));
    }

    public function tag(Tag $tag)
    {

        $search = request()->query('search');
        return view('blog.tag')
        ->with('tag', $tag)
        ->with('search', $search)
        ->with('categories', Category::all())
        ->with('tags',Tag::all())
        ->with('posts', $tag->posts()->searched()->simplePaginate(4));
    }
}
