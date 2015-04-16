<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

use App\Article;
use Illuminate\Support\Facades\Route;

class StoreArticleRequest extends Request
{

  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    switch ($this->method()) {
      case 'GET':
      case 'DELETE': {
        return [];
      }
      case 'POST': {
        return [
          'article.title' => 'required|unique:articles|max:255',
          'article.body' => 'required'
        ];
      }
      case 'PUT':
      case 'PATCH': {
        return [
          'article.title' => 'required|unique:articles,title,'.Route::input('articles').'|max:255',
          'article.body' => 'required'
        ];
      }
      default:
        break;
    }
  }

}
