<?php

namespace App\Models;

class Post
{
    private static $blog_posts=[
        [
            "title"=>"Judul Pertama",
            "slug"=>"judul-pertama",
            //"author"=>"Putri_ks",
            "body"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis quo delectus quisquam nisi consectetur animi velit. Laudantium cumque voluptas dolores saepe ad ipsum sint. Atque, iste doloremque. Reprehenderit nesciunt aut modi. Commodi minus aspernatur adipisci nesciunt autem sed placeat, amet omnis iste doloribus quaerat nisi. Et ipsa dolorem recusandae a."
        ],
        [
            "title"=>"Judul Kedua",
            "slug"=>"judul kedua",
            //"author"=>"Ahmad Rohiman",
            "body"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis quo delectus quisquam nisi consectetur animi velit. Laudantium cumque voluptas dolores saepe ad ipsum sint. Atque, iste doloremque. Reprehenderit nesciunt aut modi. Commodi minus aspernatur adipisci nesciunt autem sed placeat, amet omnis iste doloribus quaerat nisi. Et ipsa dolorem recusandae a."
        ],

    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts=static::all();

        //$post=[];
        //foreach($posts as $p){
        //if($p["slug"]===$slug){
          //  $post=$p;
      // }
    //}

    return $posts->firstWhere('slug', $slug);
    }
}
