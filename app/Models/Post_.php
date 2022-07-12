<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "judul" => "Post pertama",
            "author" => "Dodi",
            "slug" => "post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ad vero cum expedita iure consectetur delectus excepturi exercitationem recusandae! Mollitia illum quidem aliquid natus aperiam ipsa commodi esse maxime eum, optio est repellendus rem obcaecati debitis possimus. Iure, provident quasi possimus inventore suscipit iusto! Veritatis officia doloremque aliquid perferendis, error necessitatibus non tempora magni id sint, autem, fugiat cumque odit dicta. Voluptates facere natus vero, placeat pariatur enim fugiat voluptas. Sapiente eum doloribus nostrum fuga veritatis. Blanditiis ipsa veritatis quam?"
        ],
        [
            "judul" => "Post kedua",
            "author" => "Dodi",
            "slug" => "post-kedua",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus doloribus ab perferendis explicabo aspernatur eum, eaque rerum id pariatur odio! Itaque molestias, quisquam exercitationem soluta laudantium reiciendis ex in excepturi placeat repudiandae impedit qui fugiat consequatur eaque ad sunt quod! A obcaecati molestiae sit quis corrupti eveniet ducimus, natus deserunt minima quaerat illo laudantium incidunt architecto quibusdam itaque id. Corrupti, vero odit. Neque, officia ex dolore sequi inventore fuga perferendis commodi enim architecto debitis incidunt qui harum temporibus id minima obcaecati, deserunt magnam voluptatum consectetur provident? Magnam cumque quibusdam in et adipisci id, rem facere reiciendis assumenda dolore officiis qui?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->where('slug', $slug);
    }
}
