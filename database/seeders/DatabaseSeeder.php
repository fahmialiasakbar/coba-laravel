<?php

namespace Database\Seeders;

use \App\Models\User;
use \App\Models\Post;
use \App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Fahmi Akbar',
            'email' => 'fahmialiasakbar@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Charolina Vey',
            'email' => 'charolinavey@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Mencintaimu Sepenuh Hati',
            'slug' => 'mencintaimu-sepenuh-hati',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam maiores hic pariatur numquam error quisquam magnam odit ex sapiente ipsam!',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam placeat voluptate corrupti laborum magni aliquam ullam itaque aperiam tenetur! Perspiciatis maiores eos saepe. Porro blanditiis recusandae illum harum debitis. Voluptatibus tenetur dignissimos ea nemo similique corporis, nisi quod, nostrum fugit asperiores, autem eius voluptatem earum aliquid numquam quis blanditiis ut. Modi magnam explicabo fugiat, libero facilis, non doloremque veritatis nostrum accusamus perferendis ad ea harum incidunt vitae placeat sint obcaecati consectetur sequi similique corporis quam, tempore vero culpa! Voluptas natus deserunt ad in quis debitis, voluptatem laudantium? Quasi dicta perferendis voluptas sapiente, alias architecto laboriosam temporibus possimus dignissimos, ex nobis?',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Ketika Ngoding',
            'slug' => 'ketika-ngoding',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam maiores hic pariatur numquam error quisquam magnam odit ex sapiente ipsam!',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam placeat voluptate corrupti laborum magni aliquam ullam itaque aperiam tenetur! Perspiciatis maiores eos saepe. Porro blanditiis recusandae illum harum debitis. Voluptatibus tenetur dignissimos ea nemo similique corporis, nisi quod, nostrum fugit asperiores, autem eius voluptatem earum aliquid numquam quis blanditiis ut. Modi magnam explicabo fugiat, libero facilis, non doloremque veritatis nostrum accusamus perferendis ad ea harum incidunt vitae placeat sint obcaecati consectetur sequi similique corporis quam, tempore vero culpa! Voluptas natus deserunt ad in quis debitis, voluptatem laudantium? Quasi dicta perferendis voluptas sapiente, alias architecto laboriosam temporibus possimus dignissimos, ex nobis?',
            'category_id' => 1,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Laravel Sucks',
            'slug' => 'laravel-sucks',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam maiores hic pariatur numquam error quisquam magnam odit ex sapiente ipsam!',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam placeat voluptate corrupti laborum magni aliquam ullam itaque aperiam tenetur! Perspiciatis maiores eos saepe. Porro blanditiis recusandae illum harum debitis. Voluptatibus tenetur dignissimos ea nemo similique corporis, nisi quod, nostrum fugit asperiores, autem eius voluptatem earum aliquid numquam quis blanditiis ut. Modi magnam explicabo fugiat, libero facilis, non doloremque veritatis nostrum accusamus perferendis ad ea harum incidunt vitae placeat sint obcaecati consectetur sequi similique corporis quam, tempore vero culpa! Voluptas natus deserunt ad in quis debitis, voluptatem laudantium? Quasi dicta perferendis voluptas sapiente, alias architecto laboriosam temporibus possimus dignissimos, ex nobis?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Why You Are Poor?',
            'slug' => 'why-you-are-poor',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam maiores hic pariatur numquam error quisquam magnam odit ex sapiente ipsam!',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam placeat voluptate corrupti laborum magni aliquam ullam itaque aperiam tenetur! Perspiciatis maiores eos saepe. Porro blanditiis recusandae illum harum debitis. Voluptatibus tenetur dignissimos ea nemo similique corporis, nisi quod, nostrum fugit asperiores, autem eius voluptatem earum aliquid numquam quis blanditiis ut. Modi magnam explicabo fugiat, libero facilis, non doloremque veritatis nostrum accusamus perferendis ad ea harum incidunt vitae placeat sint obcaecati consectetur sequi similique corporis quam, tempore vero culpa! Voluptas natus deserunt ad in quis debitis, voluptatem laudantium? Quasi dicta perferendis voluptas sapiente, alias architecto laboriosam temporibus possimus dignissimos, ex nobis?',
            'category_id' => 2,
            'user_id' => 2
        ]);


        // to run php artisan db:seed
        // to recreate php artisan migrate:fresh --seed
    }
}
