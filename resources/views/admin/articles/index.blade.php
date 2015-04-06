@extends('_layouts.admin')

@section('content_header_title')
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
  <table class="table">
    <thead>
      <th>id</th>
      <th>标题</th>
      <th>创建时间</th>
    </thead>
    <tbody>
      @foreach ([1, 2, 3] as $id)
        <tr>
          <td>{{ $id }}</td>
          <td>标题</td>
          <td>时间</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop
