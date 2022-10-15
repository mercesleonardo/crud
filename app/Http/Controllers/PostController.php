<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(Request $request) {
        $new_post = [
            'title' => 'My first post',
            'content' => 'This is my first post',
            'author' => 'Leonardo'
        ];

        $post = new Post($new_post);

        dd($post);
    }
}
