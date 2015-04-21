<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\StoreArticleRequest;

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

    return view('admin.articles.create', compact('articles_actived', 'articles_create_actived');
  }

  public function store(StoreArticleRequest $request)
  {
    if ($request->has('article.tags_attributes.value')) {
      $tags_value = $request->input('article.tags_attributes.value');
      $splited_tags_value = explode(',', $tags_value);

      if (count($splited_tags_value) > 0) {
        $tags = [];
        foreach(@$splited_tags_value as $tag_value) {
          $tags[] = Tag::firstOrCreate(['value' => trim($tag_value)]);
        }
      }
    }

    $article = new Article($request->input('article'));

//    DB::beginTransaction();
    $article_result = $article->save();
    $tags_result = $article->tags()->attach($tags);

    if ($article_result && $tags_result) {
//    if (count($tags) > 0 ? $article->tags()->sync($comments)->save() : $article->save()) {
//      DB::commitTransaction();
      return redirect('console/articles')->with('success', '发布成功');
    } else {
//      DB::rollbackTransaction();
      return redirect()->back()->withInput();
    }
  }

  public function edit($id)
  {
    $articles_actived = true;
    $article = Article::find($id);

    return view('admin.articles.edit', compact('articles_actived', 'article'));
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
