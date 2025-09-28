<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    // \App\Models\User::factory(10)->create();
    User::factory()->create([
        'name' => 'John',
        'email' => 'test@example.com'
        ]);

        $tags = \App\Models\Tag::factory(10)->create();

        Job::factory(20)->create()->each(function($job) use ($tags) {
            $job->tags()->attach($tags->random(2));
        });
    }
}
