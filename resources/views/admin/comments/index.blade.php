@extends('_layouts.admin')

@section('page_title')
评论
@stop

@section('content_header_breadcrumb')
<li><a href="{{ URL('console/comments') }}"><i class="fa fa-pie-chart"></i> 评论</a></li>
@stop

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">所有评论</h3>
  </div>
  <div class="box-body">
    @if (Session::has('success'))
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ Session::get('success') }}
      </div>
    @endif
    <table class="table">
      <thead>
        <th>id</th>
        <th>姓名</th>
        <th>邮箱</th>
        <th>内容预览</th>
        <th>文章</th>
        <th>创建时间</th>
        <th>操作</th>
      </thead>
      <tbody>
        @foreach($comments as $comment)
          <tr>
            <td>{{ $comment->id }}</td>
            <td>{{ $comment->name }}</td>
            <td>{{ $comment->email }}</td>
            <td>{{ $comment->body }}</td>
            <td>{{ $comment->article->title }}</td>
            <td>{{ $comment->created_at }}</td>
            <td>
              <form action="{{ URL('console/comments/'.$comment->id) }}" method="POST" style="display: inline;">
                <input name="_method" type="hidden" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <a href="javascript:;" data-method="delete" data-confirm="确定要删除吗？">删除</a>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="box-footer">
    {!! $comments->render() !!}
  </div>
</div>
@stop
