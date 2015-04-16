<?php

use Illuminate\Database\Seeder;

use App\Comment;
use App\Article;

class CommentTableSeeder extends Seeder {

  public function run()
  {
    DB::table('comments')->delete();

    for($i = 0; $i < 100; $i++) {
      Comment::create([
          'name' => 'Test Commnet'.$i,
          'email' => 'test@test.com',
          'body' => 'test comment'.$i,
          'article_id' => Article::first()->id
      ]);
    }
  }

}
