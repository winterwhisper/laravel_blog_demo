<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\StoreArticleRequest;

use App\Article;

use Request;

class ArticlesController extends Controller
{

  public function index()
  {
    $articles_actived = true;
    $articles_index_actived = true;
    $articles = Article::orderBy('id', 'DESC')->paginate(15);
    return view('admin.articles.index')->withArticles($articles)
        ->withArticlesActived($articles_actived)
        ->withArticlesIndexActived($articles_index_actived);
  }

  public function create()
  {
    $articles_actived = true;
    $articles_create_actived = true;
    return view('admin.articles.create')->withArticlesActived($articles_actived)
        ->withArticlesCreateActived($articles_create_actived);;
  }

  public function store(StoreArticleRequest $request)
  {
    $article = new Article($request->input('article'));
    if ($article->save()) {
      return redirect('console/articles')->with('success', '发布成功');
    } else {
      return redirect()->back()->withInput();
    }
  }

  public function edit($id)
  {
    $articles_actived = true;
    return view('admin.articles.edit')->withArticle(Article::find($id))
        ->withArticlesActived($articles_actived);
  }

  public function update(StoreArticleRequest $request, $id)
  {
    $article = Article::find($id);
    if ($article->update($request->input('article'))) {
      return redirect('console/articles')->with('success', '更新成功');
    } else {
      return redirect()->back()->withInput();
    }
  }

  public function destroy($id)
  {
    $article = Article::find($id);
    $article->delete();
    return redirect('console/articles')->with('success', '删除成功');
  }

}
