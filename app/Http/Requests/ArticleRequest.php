<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

use App\Article;
use Illuminate\Support\Facades\Route;

class ArticleRequest extends Request
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
    $rule = [
      'body' => 'required',
      'tags_list' => 'sometimes|max:255'
    ];

    switch ($this->method()) {
      case 'GET':
      case 'DELETE': {
        $rule = [];
        break;
      }
      case 'POST': {
        $rule['title'] = 'required|unique:articles,title|max:255';
        break;
      }
      case 'PUT':
      case 'PATCH': {
        $rule['title'] = 'required|unique:articles,title,'.Route::input('articles').'|max:255';
        break;
      }
      default:
        break;
    }
    return $rule;
  }

}
