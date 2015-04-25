<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ArticleRequest;

use App\Article;
use App\Tag;

use Request, DB;

class ArticlesController extends Controller
{

  public function index()
  {
    $articles_actived = true;
    $articles_index_actived = true;
    $articles = Article::orderBy('id', 'DESC')->paginate(15);

    return view('admin.articles.index', compact('articles_actived', 'articles_index_actived', 'articles'));
  }

  public function create()
  {
    $articles_actived = true;
    $articles_create_actived = true;

    return view('admin.articles.create', compact('articles_actived', 'articles_create_actived'));
  }

  public function store(ArticleRequest $request)
  {
    if ($request->has('tags_list')) {
      $tags_id = $this->get_tags_id($request->input('tags_list'));
    }
    try {
      Article::create_article_with_tags($tags_id);
    } catch (Exception $e) {
      return redirect()->back()->withInput();
    }
    return redirect('console/articles')->with('success', '发布成功');
  }

  public function edit(Article $article)
  {
    $articles_actived = true;

    return view('admin.articles.edit', compact('articles_actived', 'article'));
  }

  public function update(ArticleRequest $request, Article $article)
  {
    if ($article->update($request->all())) {
      return redirect('console/articles')->with('success', '更新成功');
    } else {
      return redirect()->back()->withInput();
    }
  }

  public function destroy(Article $article)
  {
    $article->delete();
    return redirect('console/articles')->with('success', '删除成功');
  }


  private function get_tags_id($tags_value)
  {
    $splited_tags_value = explode(',', $tags_value);
    $tags_id = [];
    if (count($splited_tags_value) > 0) {
      foreach (@$splited_tags_value as $tag_value) {
        $tags_id[] = Tag::firstOrCreate(['value' => trim($tag_value)])->id;
      }
    }
    return $tags_id;
  }

}
