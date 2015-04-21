@extends('layouts.admin')

@section('page_title')
编辑文章
@stop

@section('content_header_breadcrumb')
<li><a href="{{ URL('console/articles') }}"><i class="fa fa-files-o"></i> 文章</a></li>
<li><a href="{{ URL('console/articles/'.$article->id.'/edit') }}">编辑文章</a></li>
@stop

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">编辑文章</h3>
  </div>
  <div class="box-body">
    {!! Form::model($article, ['method' => 'PATCH', 'url' => URL('console/articles/'.$article->id), 'class' => 'form-horizontal']) !!}
      @include('admin.articles._form', ['submit_btn_text' => '更新'])
    {!! Form::close() !!}
  </div>
</div>
@stop
