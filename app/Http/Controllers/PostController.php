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

        
        $post = new Post();
        
        $post->title = 'My secundos post';
        $post->content = 'This is my secund post';
        $post->author = 'Leonardo Carvalho';
        $post->save();
        dd($post);
    }

    public function read(Request $r) {

        $post = new Post();

        
        $post = $post->find(2);

        return $post;
    }

    public function all(Request $r) {
        $posts = Post::all();

        return $posts;
    }

    public function update(Request $request) {

        // $post = Post::find(1);
        // $post->title = 'My post title';
        // $post->save();
        // return $post;

        $post = Post::where('id', '>', 0)->update([
            'author' => 'Desconhecido'
        ]);

        return $post;
    }
}
