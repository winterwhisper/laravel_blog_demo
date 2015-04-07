<?php

use Illuminate\Database\Seeder;

use App\Article;

class ArticleTableSeeder extends Seeder {

  public function run()
  {
    DB::table('articles')->delete();

    for($i = 0; $i < 100; $i++) {
      Article::create([
        'title' => 'Test Article'.$i,
        'body' => '<p>test article</p>'.$i
      ]);
    }
  }

}
