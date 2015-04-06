<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

  public function article_tags()
  {
    return $this->hasMany('App\ArticleTag');
  }

  public function articles()
  {
    return $this->hasManyThrough('App\Article', 'ArticleTag');
  }

}
