<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

  protected $fillable = ['title', 'body'];

//  public function article_tags()
//  {
//    return $this->hasMany('App\ArticleTag');
//  }

  public function tags()
  {
//    return $this->hasManyThrough('App\Tag', 'App\ArticleTag');
    return $this->belongsToMany('App\Tag', 'article_tags');
  }

}
