<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Else_;

class WelcomeController extends Controller
{
    public function index()
    {
        $search = request()->query('search');
        return view('welcome')
        ->with('search', $search)
        ->with('categories', Category::all())
        ->with('tags',Tag::all())
        ->with('posts', Post::searched()->simplePaginate(4));
    }
}
