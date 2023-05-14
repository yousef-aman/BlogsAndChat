<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\category;
use App\Models\post;
use App\Models\User;
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
//        User::factory()->create([
//            'name'=>'yousef',
//            'email'=>'yousef@gmail.com',
//            'password'=>bcrypt('yousef1234')
//        ]);
//
//        Post::factory(4)->create([
//            'user_id'=> 1
//        ]);
//        Post::factory(5)->create();

//        $user= User::factory()->create();
//        $user2= User::factory()->create();
//        $user3= User::factory()->create();
//
//        $personal=category::create([
//             'name'=>'Personal',
//             'slug'=>'personal'
//         ]);
//        $family=category::create([
//            'name'=>'Family',
//            'slug'=>'family'
//        ]);
//        $work=category::create([
//            'name'=>'Work',
//            'slug'=>'work'
//        ]);
//
//        Post::create([
//            'user_id'=>$user->id,
//            'category_id'=>$personal->id,
//            'title'=>'My Personal Post',
//            'excerpt'=>'Lorem ipsum dolor sit amet.',
//            'slug'=>'my-personal-post',
//            'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa delectus, ducimus eaque esse iure, iusto laudantium molestiae neque non quae quia reprehenderit voluptatem? Culpa dicta doloremque in odit provident quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad aperiam aut commodi consectetur cum ducimus eligendi exercitationem expedita ipsam magni minima, necessitatibus pariatur qui quo, ratione voluptate? Nesciunt, ratione. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aut dolor eaque est eum, explicabo harum hic itaque iure iusto maiores, molestiae nulla quidem saepe sapiente sint tenetur veritatis vitae.'
//        ]);
//        Post::create([
//            'user_id'=>$user2->id,
//            'category_id'=>$family->id,
//            'title'=>'My Family Post',
//            'excerpt'=>'Lorem ipsum dolor sit amet.',
//            'slug'=>'my-family-post',
//            'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa delectus, ducimus eaque esse iure, iusto laudantium molestiae neque non quae quia reprehenderit voluptatem? Culpa dicta doloremque in odit provident quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad aperiam aut commodi consectetur cum ducimus eligendi exercitationem expedita ipsam magni minima, necessitatibus pariatur qui quo, ratione voluptate? Nesciunt, ratione. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aut dolor eaque est eum, explicabo harum hic itaque iure iusto maiores, molestiae nulla quidem saepe sapiente sint tenetur veritatis vitae.'
//        ]);
//        Post::create([
//            'user_id'=>$user3->id,
//            'category_id'=>$work->id,
//            'title'=>'My Work Post',
//            'excerpt'=>'Lorem ipsum dolor sit amet.',
//            'slug'=>'my-work-post',
//            'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa delectus, ducimus eaque esse iure, iusto laudantium molestiae neque non quae quia reprehenderit voluptatem? Culpa dicta doloremque in odit provident quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad aperiam aut commodi consectetur cum ducimus eligendi exercitationem expedita ipsam magni minima, necessitatibus pariatur qui quo, ratione voluptate? Nesciunt, ratione. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aut dolor eaque est eum, explicabo harum hic itaque iure iusto maiores, molestiae nulla quidem saepe sapiente sint tenetur veritatis vitae.'
//        ]);
//        Post::create([
//            'user_id'=>$user->id,
//            'category_id'=>$personal->id,
//            'title'=>'My Personal2 Post',
//            'excerpt'=>'Lorem ipsum dolor sit amet.',
//            'slug'=>'my-personal2-post',
//            'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa delectus, ducimus eaque esse iure, iusto laudantium molestiae neque non quae quia reprehenderit voluptatem? Culpa dicta doloremque in odit provident quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad aperiam aut commodi consectetur cum ducimus eligendi exercitationem expedita ipsam magni minima, necessitatibus pariatur qui quo, ratione voluptate? Nesciunt, ratione. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aut dolor eaque est eum, explicabo harum hic itaque iure iusto maiores, molestiae nulla quidem saepe sapiente sint tenetur veritatis vitae.'
//        ]);
//        Post::create([
//            'user_id'=>$user2->id,
//            'category_id'=>$family->id,
//            'title'=>'My Family2 Post',
//            'excerpt'=>'Lorem ipsum dolor sit amet.',
//            'slug'=>'my-family2-post',
//            'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa delectus, ducimus eaque esse iure, iusto laudantium molestiae neque non quae quia reprehenderit voluptatem? Culpa dicta doloremque in odit provident quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad aperiam aut commodi consectetur cum ducimus eligendi exercitationem expedita ipsam magni minima, necessitatibus pariatur qui quo, ratione voluptate? Nesciunt, ratione. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aut dolor eaque est eum, explicabo harum hic itaque iure iusto maiores, molestiae nulla quidem saepe sapiente sint tenetur veritatis vitae.'
//        ]);
//        Post::create([
//            'user_id'=>$user3->id,
//            'category_id'=>$work->id,
//            'title'=>'My Work Post2',
//            'excerpt'=>'Lorem ipsum dolor sit amet.',
//            'slug'=>'my-work2-post',
//            'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa delectus, ducimus eaque esse iure, iusto laudantium molestiae neque non quae quia reprehenderit voluptatem? Culpa dicta doloremque in odit provident quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad aperiam aut commodi consectetur cum ducimus eligendi exercitationem expedita ipsam magni minima, necessitatibus pariatur qui quo, ratione voluptate? Nesciunt, ratione. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aut dolor eaque est eum, explicabo harum hic itaque iure iusto maiores, molestiae nulla quidem saepe sapiente sint tenetur veritatis vitae.'
//        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
