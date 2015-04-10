<aside class="main-sidebar">
  <section class="sidebar">
    <form action="javascript:;" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search..."/>
        <span class="input-group-btn">
          <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <ul class="sidebar-menu">
      <li class="header">主导航</li>
      <li class="{{!empty($dashboard_actived) ? 'active' : ''}}"><a href="{{ URL('console') }}"><i class="fa fa-dashboard"></i> 仪表盘</a></li>
      <li class="treeview {{!empty($articles_actived) ? 'active' : ''}}">
        <a href="javascript:;">
          <i class="fa fa-files-o"></i>
          <span>文章</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="{{!empty($articles_index_actived) ? 'active' : ''}}"><a href="{{ URL('console/articles') }}"><i class="fa fa-circle-o"></i> 所有文章</a></li>
          <li class="{{!empty($articles_create_actived) ? 'active' : ''}}"><a href="{{ URL('console/articles/create') }}"><i class="fa fa-circle-o"></i> 新增文章</a></li>
        </ul>
      </li>
      <li class="{{!empty($comments_actived) ? 'active' : ''}}">
        <a href="{{ URL('console/comments') }}">
          <i class="fa fa-pie-chart"></i>
          <span>评论</span>
          <span class="label label-primary pull-right">4</span>
        </a>
      </li>
      <li class="{{!empty($users_actived) ? 'active' : ''}}"><a href="{{ URL('console/users') }}"><i class="fa fa-user"></i><span> 用户</span></a>
      </li>
      <li class="header">标签</li>
      <li><a href="javascript:;"><i class="fa fa-circle-o text-danger"></i> Ruby</a></li>
      <li><a href="javascript:;"><i class="fa fa-circle-o text-danger"></i> Rails</a></li>
      <li><a href="javascript:;"><i class="fa fa-circle-o text-info"></i> PHP</a></li>
      <li><a href="javascript:;"><i class="fa fa-circle-o text-info"></i> Laravel</a></li>
      <li><a href="javascript:;"><i class="fa fa-circle-o text-warning"></i> js</a></li>
    </ul>
  </section>
</aside>
