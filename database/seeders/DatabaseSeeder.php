<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
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
        /*  User::truncate();
          Category::truncate();
          Post::truncate();

          $user = User::factory()->create();

          $personal = Category::create([
              'name' => 'Personal',
              'slug' => 'personal'
          ]);
          $family = Category::create([
              'name' => 'Family',
              'slug' => 'family'
          ]);
          $work = Category::create([
              'name' => 'Work',
              'slug' => 'work'
          ]);

          Post::create([
              'user_id' => $user->id,
              'category_id' => $family->id,
              'title' => 'My Family Post',
              'slug' => 'my-family-post',
              'excerpt' => "<p>First, let's talk about Eloquent model factories.</p>",
              'body' => "<p>First, let's talk about Eloquent model factories. When testing, you may need to insert a few records into your database before executing your test. Instead of manually specifying the value of each column when you create this test data, Laravel allows you to define a set of default attributes for each of your Eloquent models using model factories.</p>"
          ]);
          Post::create([
              'user_id' => $user->id,
              'category_id' => $personal->id,
              'title' => 'My Personal Post',
              'slug' => 'my-personal-post',
              'excerpt' => "<p>First, let's talk about Eloquent model factories.</p>",
              'body' => "<p>First, let's talk about Eloquent model factories. When testing, you may need to insert a few records into your database before executing your test. Instead of manually specifying the value of each column when you create this test data, Laravel allows you to define a set of default attributes for each of your Eloquent models using model factories.</p>"
          ]);
          Post::create([
              'user_id' => $user->id,
              'category_id' => $work->id,
              'title' => 'My Work Post',
              'slug' => 'my-work-post',
              'excerpt' => "<p>First, let's talk about Eloquent model factories.</p>",
              'body' => "<p>First, let's talk about Eloquent model factories. When testing, you may need to insert a few records into your database before executing your test. Instead of manually specifying the value of each column when you create this test data, Laravel allows you to define a set of default attributes for each of your Eloquent models using model factories.</p>"
          ]);*/

        $user = User::factory()->create([
            'name' => 'Goonawardan R N W'
        ]);

        $category = Category::factory()
            ->count(3)
            ->state(new Sequence(
                ['name' => 'Personal'],
                ['name' => 'Work'],
                ['name' => 'Family']
            ))->create();

        Post::factory()
            ->count(100)
            ->state(new Sequence(
                ['category_id'=>$category[0]->id],
                ['category_id'=>$category[1]->id],
                ['category_id'=>$category[2]->id]
            ))->create([
            'user_id'=>$user->id
        ]);

    }
}
