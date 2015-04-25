<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

  protected $fillable = ['title', 'body'];

  public static function create_article_with_tags(Array $tag_ids) {
    \DB::transaction(function() use ($tag_ids) {
      $article = Article::create(\Request::all());
      if (count($tag_ids) > 0) {
        $article->tags()->sync($tag_ids);
      }
    });
  }

  public function tags()
  {
    return $this->belongsToMany('App\Tag', 'article_tags')->withTimestamps();
  }

  public function getTagsListAttribute() {
    return implode($this->tags->lists('value'));
  }

}
