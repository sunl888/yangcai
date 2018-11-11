<?php

use App\Models\PostContent;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        factory(\App\Models\Category::class, 5)->create()
            ->each(function ($category) {
                factory(App\Models\Post::class, 10)->create([
                    'user_id' => 1,
                    'category_id' => $category->id
                ])->each(function ($post) {
                    $post->postContent()->save(factory(PostContent::class)->make());
                });
            });

        DB::table('users')
            ->where('id', 1)
            ->update([
                'user_name' => 'tiny',
                'nick_name' => 'tiny',
                'email' => 'tiny@test.com',
                'locked_at' => null
            ]);
    }
}
