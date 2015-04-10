@extends('_layouts.admin')

@section('page_title')
新增文章
@stop

@section('content_header_breadcrumb')
<li><a href="{{ URL('console/articles') }}"><i class="fa fa-files-o"></i> 文章</a></li>
<li><a href="{{ URL('console/articles/create') }}">新增文章</a></li>
@stop

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">新增文章</h3>
  </div>
  <div class="box-body">
    @include('partials.admin.articles.form')
  </div>
</div>
@stop
