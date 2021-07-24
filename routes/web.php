<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Diki Rahman",
        "email" => "dikirahman.me@gmail.com",
        "image" => "diki.png"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts', [
        "title" => "Post",
        "posts" => $blog_posts
    ]);
});

// halamn single post
Route::get('post/{slug}', function($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }    

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
