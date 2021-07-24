<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Diki Rahman",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, magni dolorum neque ut, quaerat, hic esse itaque autem dicta illo corrupti sit molestias quibusdam reprehenderit tenetur porro beatae inventore tempore aliquid obcaecati. Accusantium quis tempora accusamus laudantium sed voluptatem debitis aliquam dolores. Assumenda adipisci molestiae error pariatur recusandae doloribus itaque ratione nemo placeat optio debitis, aliquid animi illo quisquam dicta quasi eos saepe, atque quo repudiandae, laboriosam cumque rerum et! Nulla quo quidem earum! Omnis similique accusamus dicta rerum laudantium?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Diki Rahman",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, magni dolorum neque ut, quaerat, hic esse itaque autem dicta illo corrupti sit molestias quibusdam reprehenderit tenetur porro beatae inventore tempore aliquid obcaecati. Accusantium quis tempora accusamus laudantium sed voluptatem debitis aliquam dolores. Assumenda adipisci molestiae error pariatur recusandae doloribus itaque ratione nemo placeat optio debitis, aliquid animi illo quisquam dicta quasi eos saepe, atque quo repudiandae, laboriosam cumque rerum et! Nulla quo quidem earum! Omnis similique accusamus dicta rerum laudantium? laboriosam cumque rerum et! Nulla quo quidem earum! Omnis similique accusamus dicta rerum laudantium?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        
        return $posts->firstWhere('slug', $slug);
    }
}