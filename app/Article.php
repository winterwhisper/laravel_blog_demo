<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

  public function article_tags()
  {
    return $this->hasMany('App\ArticleTag');
  }

  public function tags()
  {
    return $this->hasManyThrough('App\Tag', 'ArticleTag');
  }

}
