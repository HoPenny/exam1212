<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleTag;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();

        $articles = Article::factory()->times(100)->create();
        foreach ($articles as $article) {
            $at = new ArticleTag;
            $at->article_id = $article->id;
            $at->tag_id = rand(1, 20);
            $at->save();
        }
    }
}
