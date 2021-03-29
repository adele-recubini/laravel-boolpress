<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Author;
use App\AuthorDetail;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i<10; $i++){

            $author = new Author();
            $author->name =$faker->name();
            $author->lastname = $faker->lastName();
            $author->email = $faker->email();
            $author->save();


            $authorDetail = new AuthorDetail();
            $authorDetail->bio =$faker->text();
            $authorDetail->website = $faker->url();
            $authorDetail->pic ='https://picsum.photos/seed/'.rand(1,1000).'/200/300';


            $post =new Post();
            $post->title = $faker->text(20);
            $post->body = $faker->text(1000);





            $author->detail()->save($authorDetail);
            $author->posts()->save($post);
        }



    }
}
