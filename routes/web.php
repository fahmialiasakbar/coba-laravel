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
        'title' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Fahmi Akbar',
        'email' => 'fahmialiasakbar@gmail.com',
        'image' => 'img/gw.jpg',
    ]);
});


Route::get('/blog', function () {

    $blog_posts = [
        [
            'title' => 'Kemajuan Negeri',
            'slug' => 'kemajuan-negeri',
            'author' => 'Yudha Bustara',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus praesentium vitae mollitia dolorem, maxime expedita incidunt ratione voluptate accusantium eum quibusdam suscipit earum, totam odio, voluptatum voluptates necessitatibus quidem tempore.',
        ],
        [
            'title' => 'Mencapai Manfaat',
            'slug' => 'mencapai-manfaat',
            'author' => 'Devina',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus praesentium vitae mollitia dolorem, maxime expedita incidunt ratione voluptate accusantium eum quibusdam suscipit earum, totam odio, voluptatum voluptates necessitatibus quidem tempore.',
        ],
        [
            'title' => 'Karang Besuki',
            'slug' => 'karang-besuki',
            'author' => 'Danila',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus praesentium vitae mollitia dolorem, maxime expedita incidunt ratione voluptate accusantium eum quibusdam suscipit earum, totam odio, voluptatum voluptates necessitatibus quidem tempore.',
        ]
    ];

    return view('posts', [
        'title' => 'Blog',
        'posts' => $blog_posts,
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            'title' => 'Kemajuan Negeri',
            'slug' => 'kemajuan-negeri',
            'author' => 'Yudha Bustara',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus praesentium vitae mollitia dolorem, maxime expedita incidunt ratione voluptate accusantium eum quibusdam suscipit earum, totam odio, voluptatum voluptates necessitatibus quidem tempore.',
        ],
        [
            'title' => 'Mencapai Manfaat',
            'slug' => 'mencapai-manfaat',
            'author' => 'Devina',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus praesentium vitae mollitia dolorem, maxime expedita incidunt ratione voluptate accusantium eum quibusdam suscipit earum, totam odio, voluptatum voluptates necessitatibus quidem tempore.',
        ],
        [
            'title' => 'Karang Besuki',
            'slug' => 'karang-besuki',
            'author' => 'Danila',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus praesentium vitae mollitia dolorem, maxime expedita incidunt ratione voluptate accusantium eum quibusdam suscipit earum, totam odio, voluptatum voluptates necessitatibus quidem tempore.',
        ]
    ];
    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] == $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post,
    ]);
});
