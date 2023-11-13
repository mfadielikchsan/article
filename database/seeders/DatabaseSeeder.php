<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


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

        // User::create([
        //     'name' => 'Muhamad Fadiel',
        //     'email' => 'fadiel@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Ikchsan',
        //     'email' => 'ikchsan@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        
        User::create([
            'name' => 'M Fadiel',
            'username' => 'fadiel',
            'email' => 'fadiel@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(40)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti, provident?',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ab neque incidunt illum veniam aliquid fuga suscipit dolorum officia consequuntur temporibus iure ducimus nulla perspiciatis quasi ullam modi sequi, facilis nam deserunt vitae deleniti velit aut quam? Sequi impedit dolorum autem totam. Excepturi perspiciatis voluptatibus, sint quam dignissimos quia itaque numquam nulla repudiandae provident ea facere ducimus at.</p><p>Aliquam eaque libero tempore dolores dignissimos quam expedita quasi eum voluptates odio culpa alias quo minima possimus voluptatibus error numquam officia eos, ratione dicta neque quibusdam! Minima repellat laborum suscipit vero atque neque in fugiat sapiente eaque, consequuntur error quidem excepturi autem. Error laboriosam aliquid voluptatem dolorum voluptates, blanditiis modi ex reiciendis harum id. Eaque, reprehenderit. Nulla amet magni, vitae fuga veniam doloremque provident culpa assumenda, eveniet dolor similique eius debitis.</p><p>Ea, nisi eius ducimus beatae obcaecati labore quasi ipsa quidem consectetur consequatur omnis quis impedit modi quas asperiores exercitationem reiciendis mollitia soluta cupiditate nemo deleniti aliquam molestiae minus. Temporibus ea distinctio qui obcaecati quas minima modi placeat adipisci voluptatibus, excepturi ad, facere cupiditate dolores eveniet rerum eum blanditiis quaerat incidunt voluptatem in maxime repellat tempora corrupti vero. Eaque, debitis at temporibus, consequatur tempore atque corrupti, animi accusamus laborum numquam aut non.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti, provident?',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ab neque incidunt illum veniam aliquid fuga suscipit dolorum officia consequuntur temporibus iure ducimus nulla perspiciatis quasi ullam modi sequi, facilis nam deserunt vitae deleniti velit aut quam? Sequi impedit dolorum autem totam. Excepturi perspiciatis voluptatibus, sint quam dignissimos quia itaque numquam nulla repudiandae provident ea facere ducimus at.</p><p>Aliquam eaque libero tempore dolores dignissimos quam expedita quasi eum voluptates odio culpa alias quo minima possimus voluptatibus error numquam officia eos, ratione dicta neque quibusdam! Minima repellat laborum suscipit vero atque neque in fugiat sapiente eaque, consequuntur error quidem excepturi autem. Error laboriosam aliquid voluptatem dolorum voluptates, blanditiis modi ex reiciendis harum id. Eaque, reprehenderit. Nulla amet magni, vitae fuga veniam doloremque provident culpa assumenda, eveniet dolor similique eius debitis.</p><p>Ea, nisi eius ducimus beatae obcaecati labore quasi ipsa quidem consectetur consequatur omnis quis impedit modi quas asperiores exercitationem reiciendis mollitia soluta cupiditate nemo deleniti aliquam molestiae minus. Temporibus ea distinctio qui obcaecati quas minima modi placeat adipisci voluptatibus, excepturi ad, facere cupiditate dolores eveniet rerum eum blanditiis quaerat incidunt voluptatem in maxime repellat tempora corrupti vero. Eaque, debitis at temporibus, consequatur tempore atque corrupti, animi accusamus laborum numquam aut non.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti, provident?',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ab neque incidunt illum veniam aliquid fuga suscipit dolorum officia consequuntur temporibus iure ducimus nulla perspiciatis quasi ullam modi sequi, facilis nam deserunt vitae deleniti velit aut quam? Sequi impedit dolorum autem totam. Excepturi perspiciatis voluptatibus, sint quam dignissimos quia itaque numquam nulla repudiandae provident ea facere ducimus at.</p><p>Aliquam eaque libero tempore dolores dignissimos quam expedita quasi eum voluptates odio culpa alias quo minima possimus voluptatibus error numquam officia eos, ratione dicta neque quibusdam! Minima repellat laborum suscipit vero atque neque in fugiat sapiente eaque, consequuntur error quidem excepturi autem. Error laboriosam aliquid voluptatem dolorum voluptates, blanditiis modi ex reiciendis harum id. Eaque, reprehenderit. Nulla amet magni, vitae fuga veniam doloremque provident culpa assumenda, eveniet dolor similique eius debitis.</p><p>Ea, nisi eius ducimus beatae obcaecati labore quasi ipsa quidem consectetur consequatur omnis quis impedit modi quas asperiores exercitationem reiciendis mollitia soluta cupiditate nemo deleniti aliquam molestiae minus. Temporibus ea distinctio qui obcaecati quas minima modi placeat adipisci voluptatibus, excepturi ad, facere cupiditate dolores eveniet rerum eum blanditiis quaerat incidunt voluptatem in maxime repellat tempora corrupti vero. Eaque, debitis at temporibus, consequatur tempore atque corrupti, animi accusamus laborum numquam aut non.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti, provident?',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ab neque incidunt illum veniam aliquid fuga suscipit dolorum officia consequuntur temporibus iure ducimus nulla perspiciatis quasi ullam modi sequi, facilis nam deserunt vitae deleniti velit aut quam? Sequi impedit dolorum autem totam. Excepturi perspiciatis voluptatibus, sint quam dignissimos quia itaque numquam nulla repudiandae provident ea facere ducimus at.</p><p>Aliquam eaque libero tempore dolores dignissimos quam expedita quasi eum voluptates odio culpa alias quo minima possimus voluptatibus error numquam officia eos, ratione dicta neque quibusdam! Minima repellat laborum suscipit vero atque neque in fugiat sapiente eaque, consequuntur error quidem excepturi autem. Error laboriosam aliquid voluptatem dolorum voluptates, blanditiis modi ex reiciendis harum id. Eaque, reprehenderit. Nulla amet magni, vitae fuga veniam doloremque provident culpa assumenda, eveniet dolor similique eius debitis.</p><p>Ea, nisi eius ducimus beatae obcaecati labore quasi ipsa quidem consectetur consequatur omnis quis impedit modi quas asperiores exercitationem reiciendis mollitia soluta cupiditate nemo deleniti aliquam molestiae minus. Temporibus ea distinctio qui obcaecati quas minima modi placeat adipisci voluptatibus, excepturi ad, facere cupiditate dolores eveniet rerum eum blanditiis quaerat incidunt voluptatem in maxime repellat tempora corrupti vero. Eaque, debitis at temporibus, consequatur tempore atque corrupti, animi accusamus laborum numquam aut non.</p>'
        // ]);
    }
}
