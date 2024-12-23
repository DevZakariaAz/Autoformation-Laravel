<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article; // Add this line
use App\Models\Tag;     // Add this line

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $article = Article::create(['title' => 'Learning Laravel', 'content' => 'Relationships in Laravel are fun!']);
        $tag1 = Tag::create(['name' => 'PHP']);
        $tag2 = Tag::create(['name' => 'Laravel']);

        $article->tags()->attach([$tag1->id, $tag2->id]);
    }
}
