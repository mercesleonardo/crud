<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;

class PostController extends Controller
{
    public function create(Request $request) {
        $new_post = [
            'title' => 'My first post',
            'content' => 'This is my first post',
            'author' => 'Leonardo'
        ];

        //convencional de criar um registro no banco
        $post = new Post();
        
        $post->title = 'My secundos post';
        $post->content = 'This is my secundos post';
        $post->author = 'Leonardo Carvalho';
        $post->save();
        dd($post);
    }
}
