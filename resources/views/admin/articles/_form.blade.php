@if ($errors->any())
  <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    表单存在错误
  </div>
@endunless

<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
  {!! Form::label('title', '标题:', ['class' => 'col-sm-2 control-label']) !!}
  <div class="col-sm-8">
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => "请输入标题"]) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
  {!! Form::label('body', '内容:', ['class' => 'col-sm-2 control-label']) !!}
  <div class="col-sm-8">
    {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => "请输入内容"]) !!}
    {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="form-group {{ $errors->has('tags') ? 'has-error' : '' }}">
  {!! Form::label('tags', '标签:', ['class' => 'col-sm-2 control-label']) !!}
  <div class="col-sm-8">
    {!! Form::text('tags', null, ['class' => 'form-control', 'placeholder' => "请输入标签，用逗号或者回车间隔"]) !!}
    {!! $errors->first('tags', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-8">
    {!! Form::submit($submit_btn_text, ['class' => 'btn btn-success']) !!}
  </div>
</div>

@section('page_js')
  <script>
    $('#article_tags_attributes_value').tokenfield({
      showAutocompleteOnFocus: true
    })
  </script>
@stop