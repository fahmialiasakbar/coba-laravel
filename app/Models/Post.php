<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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
