<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
                [
                "title" => "Mon super title",
                "description" => "Hello word"
                ],
                [
                "title" => "Mon super title",
                "description" => "Hello word"
                ],
                [
                "title" => "Mon super title",
                "description" => "Hello word"
                ],
                [
                "title" => "Mon super title",
                "description" => "Hello word"
                ],
                [
                "title" => "Mon super title",
                "description" => "Hello word"
                ],
                [
                "title" => "Mon super title",
                "description" => "Hello word"
                ],
                [
                "title" => "Mon super title",
                "description" => "Hello word"
                ],
                [
                "title" => "Mon super title",
                "description" => "Hello word"
                ],
                [
                "title" => "Mon super title",
                "description" => "Hello word"
                ],
                [
                "title" => "Mon super title",
                "description" => "Hello word"
                ],
                [
                "title" => "Mon super title",
                "description" => "Hello word"
                ],
            ];
            
        Article::insert(
            $articles
        );
    }
}
