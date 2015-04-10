<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\StoreArticleRequest;

use Illuminate\Http\Request;

use App\Article;

class ArticlesController extends Controller {

	public function index()
	{
		$articles = Article::orderBy('id', 'DESC')->paginate(15);
		$articles_actived = true;
		$articles_index_actived = true;
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

	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		//
	}

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}

}
