<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Comment;

class CommentsController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $comments_actived = true;
    $comments = Comment::with('article')->orderBy('id', 'DESC')->paginate(15);
    return view('admin.comments.index')->withCommentsActived($comments_actived)
        ->withComments($comments);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   * @return Response
   */
  public function destroy($id)
  {
    $comment = Comment::find($id);
    $comment->delete();
    return redirect('console/comments')->with('success', '删除成功');
  }

}
