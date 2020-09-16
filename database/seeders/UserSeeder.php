<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(3)
            ->create();

        Article::factory()
        ->count(3)
        ->create(['user_id' => 1]);

        Article::factory()
        ->count(3)
        ->create(['user_id' => 2]);

        Article::factory()
        ->count(3)
        ->create(['user_id' => 3]);
    }
}
