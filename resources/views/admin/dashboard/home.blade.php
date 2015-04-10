@extends('_layouts.admin')

@section('content_header_title')
测试页面
@stop

@section('content_header_desc')
只是一个小测试
@stop

@section('content_header_breadcrumb')
<li><a href="{{ URL('console') }}"><i class="fa fa-dashboard"></i> 仪表盘</a></li>
@stop
