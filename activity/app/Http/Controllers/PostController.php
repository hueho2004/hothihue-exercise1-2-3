<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getPost($id){
        $post = Post::find($id);
        return $post;
    }
}