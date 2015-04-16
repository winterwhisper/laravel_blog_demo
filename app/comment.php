<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

  protected $fillable = ['name', 'email', 'body'];

  public function article()
  {
    return $this->belongsTo('App\Article');
  }

}
