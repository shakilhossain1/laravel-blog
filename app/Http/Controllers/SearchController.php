<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $query = request('q'); // <-- Change the query for testing.

        $posts = Post::search($query)->get();

        return $posts;
    }
}
