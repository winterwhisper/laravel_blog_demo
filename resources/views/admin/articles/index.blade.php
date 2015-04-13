@extends('_layouts.admin')

@section('page_title')
所有文章
@stop

@section('content_header_breadcrumb')
<li><a href="{{ URL('console/articles') }}"><i class="fa fa-files-o"></i> 文章</a></li>
<li><a href="{{ URL('console/articles') }}">所有文章</a></li>
@stop

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">所有文章</h3>
  </div>
  <div class="box-body">
    @if (Session::has('success'))
      <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif
    <table class="table">
      <thead>
        <th>id</th>
        <th>标题</th>
        <th>内容预览</th>
        <th>创建时间</th>
        <th>操作</th>
      </thead>
      <tbody>
        @foreach ($articles as $article)
          <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->title }}</td>
            <td>{{ strip_tags($article->body) }}</td>
            <td>{{ $article->created_at }}</td>
            <td>
              <a href="{{URL('console/articles/'.$article->id.'/edit')}}">编辑</a>
              <a href="javascript:;">删除</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="box-footer">
    {!! $articles->render() !!}
  </div>
</div>
@stop
