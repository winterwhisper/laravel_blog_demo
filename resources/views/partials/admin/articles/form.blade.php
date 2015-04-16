<form class="form-horizontal" action="{{ isset($article) ? URL('console/articles/'.$article->id) : URL('console/articles') }}" method="POST">
  @if (isset($article))
    <input name="_method" type="hidden" value="PUT">
  @endif
  @unless (empty($errors->first()))
    <p class="alert alert-danger">表单存在错误</p>
  @endunless
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="inputEmail3" class="col-sm-2 control-label">标题</label>
    <div class="col-sm-8">
      <input type="text" name="article[title]" id="article_title" class="form-control" placeholder="请输入标题" value="{{isset($article) ? $article->title : old('title')}}">
      {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
  </div>
  <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
    <label for="inputPassword3" class="col-sm-2 control-label">内容</label>
    <div class="col-sm-8">
      <textarea name="article[body]" id="article_body" cols="30" rows="10" class="form-control">{{isset($article) ? $article->body : old('body')}}</textarea>
      {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-success">发布</button>
    </div>
  </div>
</form>
