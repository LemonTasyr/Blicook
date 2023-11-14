<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        User::factory(5)->create();
        $user=new User();
        $user->name='Dimas Gamink';
        $user->username='Samidun';
        $user->email='dimastri@gmail.com';
        $user->password=bcrypt('12345');
        $user->save();

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

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia inventore atque aut sequi sint nam, pariatur at, nihil corporis sed nulla facilis modi architecto, harum suscipit nobis esse culpa fugit sit. Odio rem perferendis odit atque rerum distinctio, adipisci assumenda optio, nobis deserunt asperiores doloribus commodi quibusdam voluptatum? Nihil, minima, maxime, sed iure dolores doloremque atque nostrum facere temporibus laborum nisi assumenda culpa fugit repudiandae quisquam nesciunt suscipit rem nemo magnam similique commodi officiis vel. Iusto, fugit eligendi odio commodi aut officiis doloremque a illo voluptatum cumque? Officiis nemo ad cupiditate. Dicta deleniti repellendus illum officia minima. Eveniet, ullam quis.',
        //     'category_id' => 1,
        //     'user_id' => 11
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia inventore atque aut sequi sint nam, pariatur at, nihil corporis sed nulla facilis modi architecto, harum suscipit nobis esse culpa fugit sit. Odio rem perferendis odit atque rerum distinctio, adipisci assumenda optio, nobis deserunt asperiores doloribus commodi quibusdam voluptatum? Nihil, minima, maxime, sed iure dolores doloremque atque nostrum facere temporibus laborum nisi assumenda culpa fugit repudiandae quisquam nesciunt suscipit rem nemo magnam similique commodi officiis vel. Iusto, fugit eligendi odio commodi aut officiis doloremque a illo voluptatum cumque? Officiis nemo ad cupiditate. Dicta deleniti repellendus illum officia minima. Eveniet, ullam quis.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia inventore atque aut sequi sint nam, pariatur at, nihil corporis sed nulla facilis modi architecto, harum suscipit nobis esse culpa fugit sit. Odio rem perferendis odit atque rerum distinctio, adipisci assumenda optio, nobis deserunt asperiores doloribus commodi quibusdam voluptatum? Nihil, minima, maxime, sed iure dolores doloremque atque nostrum facere temporibus laborum nisi assumenda culpa fugit repudiandae quisquam nesciunt suscipit rem nemo magnam similique commodi officiis vel. Iusto, fugit eligendi odio commodi aut officiis doloremque a illo voluptatum cumque? Officiis nemo ad cupiditate. Dicta deleniti repellendus illum officia minima. Eveniet, ullam quis.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia inventore atque aut sequi sint nam, pariatur at, nihil corporis sed nulla facilis modi architecto, harum suscipit nobis esse culpa fugit sit. Odio rem perferendis odit atque rerum distinctio, adipisci assumenda optio, nobis deserunt asperiores doloribus commodi quibusdam voluptatum? Nihil, minima, maxime, sed iure dolores doloremque atque nostrum facere temporibus laborum nisi assumenda culpa fugit repudiandae quisquam nesciunt suscipit rem nemo magnam similique commodi officiis vel. Iusto, fugit eligendi odio commodi aut officiis doloremque a illo voluptatum cumque? Officiis nemo ad cupiditate. Dicta deleniti repellendus illum officia minima. Eveniet, ullam quis.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kelima',
        //     'slug' => 'judul-kelima',
        //     'excerpt' => 'Lorem ipsum dolor sit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia inventore atque aut sequi sint nam, pariatur at, nihil corporis sed nulla facilis modi architecto, harum suscipit nobis esse culpa fugit sit. Odio rem perferendis odit atque rerum distinctio, adipisci assumenda optio, nobis deserunt asperiores doloribus commodi quibusdam voluptatum? Nihil, minima, maxime, sed iure dolores doloremque atque nostrum facere temporibus laborum nisi assumenda culpa fugit repudiandae quisquam nesciunt suscipit rem nemo magnam similique commodi officiis vel. Iusto, fugit eligendi odio commodi aut officiis doloremque a illo voluptatum cumque? Officiis nemo ad cupiditate. Dicta deleniti repellendus illum officia minima. Eveniet, ullam quis.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
