<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;


class SinglePostController extends Controller
{
    public function show(Post $post)
    {
        return view('posts.index',[
            "title"=>"Single Post",
            "active"=>'posts',
            "post"=>$post
        ]);
    }
}
