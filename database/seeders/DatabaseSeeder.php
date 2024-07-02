<?php

namespace Database\Seeders;
use App\Models\Post;
use App\Models\Category;
use \App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        User::create([
            'name'=>'Ahmad Rohiman',
            'username'=>'sahmed',
            'email'=>'ahmad@gmail.com',
            'password'=>bcrypt('12345')
        ]);

        // User::create([
        //     'name'=>'Putri_ks',
        //     'email'=>'putri_ks@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);


        User::factory(1)->create();

        Category::create([
            'name'=>'Web Prestasi siswa',
            'slug'=>'web-prestasi-siswa'
        ]);

        Category::create([
            'name'=>'Web artikel sekolah',
            'slug'=>'web-artikel-sekolah'
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        Post::factory(0)->create();

        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'Lorem ipsum pertama',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, esse recusandae labore quam molestias ipsum quibusdam tempora cumque ut veniam excepturi voluptas voluptatem perferendis aliquam cupiditate? Accusamus dicta neque nemo, sit dolorem corrupti molestias eius tempora, in quidem at reiciendis eaque cumque officiis ut? Exercitationem, modi facilis explicabo fugiat, delectus dignissimos recusandae perspiciatis iusto iste nisi odit. Cumque dolore cum ratione est atque, nam maiores et blanditiis, culpa necessitatibus ipsa modi non obcaecati molestiae eligendi laudantium consequatur! Beatae officiis illum ab? Aliquid amet labore ea animi nisi, mollitia sapiente, praesentium provident minus atque est alias? Ipsa incidunt omnis iure iusto.',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //    'title'=>'Judul Ke dua',
        //     'slug'=>'judul-ke-dua',
        //     'excerpt'=>'Lorem ipsum ke dua',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, esse recusandae labore quam molestias ipsum quibusdam tempora cumque ut veniam excepturi voluptas voluptatem perferendis aliquam cupiditate? Accusamus dicta neque nemo, sit dolorem corrupti molestias eius tempora, in quidem at reiciendis eaque cumque officiis ut? Exercitationem, modi facilis explicabo fugiat, delectus dignissimos recusandae perspiciatis iusto iste nisi odit. Cumque dolore cum ratione est atque, nam maiores et blanditiis, culpa necessitatibus ipsa modi non obcaecati molestiae eligendi laudantium consequatur! Beatae officiis illum ab? Aliquid amet labore ea animi nisi, mollitia sapiente, praesentium provident minus atque est alias? Ipsa incidunt omnis iure iusto.',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title'=>'Judul Ke Tiga',
        //     'slug'=>'judul-ke-tiga',
        //     'excerpt'=>'Lorem ipsum ke tiga',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, esse recusandae labore quam molestias ipsum quibusdam tempora cumque ut veniam excepturi voluptas voluptatem perferendis aliquam cupiditate? Accusamus dicta neque nemo, sit dolorem corrupti molestias eius tempora, in quidem at reiciendis eaque cumque officiis ut? Exercitationem, modi facilis explicabo fugiat, delectus dignissimos recusandae perspiciatis iusto iste nisi odit. Cumque dolore cum ratione est atque, nam maiores et blanditiis, culpa necessitatibus ipsa modi non obcaecati molestiae eligendi laudantium consequatur! Beatae officiis illum ab? Aliquid amet labore ea animi nisi, mollitia sapiente, praesentium provident minus atque est alias? Ipsa incidunt omnis iure iusto.',
        //     'category_id'=>2,
        //    'user_id'=>1
        // ]);

        // Post::create([
        // 'title'=>'Judul Ke Empat',
        // 'slug'=>'judul-ke-empat',
        // 'excerpt'=>'Lorem ipsum ke empat',
        // 'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, esse recusandae labore quam molestias ipsum quibusdam tempora cumque ut veniam excepturi voluptas voluptatem perferendis aliquam cupiditate? Accusamus dicta neque nemo, sit dolorem corrupti molestias eius tempora, in quidem at reiciendis eaque cumque officiis ut? Exercitationem, modi facilis explicabo fugiat, delectus dignissimos recusandae perspiciatis iusto iste nisi odit. Cumque dolore cum ratione est atque, nam maiores et blanditiis, culpa necessitatibus ipsa modi non obcaecati molestiae eligendi laudantium consequatur! Beatae officiis illum ab? Aliquid amet labore ea animi nisi, mollitia sapiente, praesentium provident minus atque est alias? Ipsa incidunt omnis iure iusto.',
        // 'category_id'=>2,
        // 'user_id'=>2
    //]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
