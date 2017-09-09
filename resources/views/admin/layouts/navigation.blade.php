<nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element">
                                <span><img alt="image" class="img-circle" src="{{URL::asset('style/admin/img/profile_small.jpg')}}" /></span>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear">
                                        <span class="block m-t-xs"><strong class="font-bold">Admin</strong></span>
                                        <span class="text-muted text-xs block">管理员<b class="caret"></b></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                    <li><a href="profile.html">个人信息</a></li>
                                    <li><a href="contacts.html">联系方式</a></li>
                                    <li><a href="mailbox.html">邮箱</a></li>
                                    <li class="divider"></li>
                                    <li><a href="login.html">退出登录</a></li>
                                </ul>
                            </div>
                            <div class="logo-element">IN+</div></li>
                        <li class="">
                            <a href="">
                                <i class="fa fa-gears"></i>
                                <span class="nav-label">系统设置</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="{{URL('admin/sysconfig/index')}}">基本配置</a></li>
                                <li><a href="">用户配置</a></li>
                                <li><a href="{{URL('admin/sysconfig/api')}}">API配置</a></li>
                                <li><a href="{{URL('admin/sysconfig/system')}}">系统配置</a></li>
                                <li><a href="{{URL('admin/sysconfig/demo')}}">表单列表</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-user"></i>
                                <span class="nav-label">用户管理</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="{{URL('admin/user/index')}}">用户列表</a></li>
                                <li><a href="">角色管理</a></li>
                                <li><a href="{{URL('admin/user/edit')}}">编辑用户</a></li>
                                <li><a href="">游客列表</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fa fa-newspaper-o"></i>
                                <span class="nav-label">文章管理</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="{{URL('admin/article/addarticle')}}">添加文章</a></li>
                                <li><a href="{{URL('admin/article/addcate')}}">添加分类</a></li>
                                <li><a href="{{URL('admin/article')}}">文章列表</a></li>
                                <li><a href="">分类列表</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fa fa-image"></i>
                                <span class="nav-label">相册管理</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="">相册列表</a></li>
                                <li><a href="">相册列表</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fa fa-user-md"></i>
                                <span class="nav-label">说说管理</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="">说说列表</a></li>
                                <li><a href="">说说列表</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fa fa-yelp"></i>
                                <span class="nav-label">个人简历</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="">简历列表</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fa fa-envelope"></i>
                                <span class="nav-label">评论管理</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="">评论列表</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fa fa-database"></i>
                                <span class="nav-label">数据库管理</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="">备份数据库</a></li>
                                <li><a href="">恢复数据库</a></li>
                                <li><a href="">备份记录</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="">
                                <i class="fa fa-desktop"></i>
                                <span class="nav-label">系统日志</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="">行为日志</a></li>
                                <li><a href="">恢复数据库</a></li>
                                <li><a href="">备份记录</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>