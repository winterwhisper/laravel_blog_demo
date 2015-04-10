<form class="form-horizontal" action="{{ URL('console/articles') }}" method="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">标题</label>
    <div class="col-sm-8">
      <input type="text" name="title" id="title" class="form-control" placeholder="请输入标题">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">内容</label>
    <div class="col-sm-8">
      <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-success">发布</button>
    </div>
  </div>
</form>
