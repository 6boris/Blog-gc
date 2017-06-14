@extends('admin.layouts.app')
@section('title', '基本配置')
 
@section('mycss')

<link href="{{URL::asset('style/admin/css/plugins/iCheck/custom.css')}}" rel="stylesheet">

@endsection

@section('content')
<!-- 主要内容（开始） -->
    <!-- 顶部路径提示（开始） --> 
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>首页</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{URL('admin')}}">首页</a>
                </li>
                <li>
                    <strong>系统配置</strong>
                </li>
                <li class="active">
                   <a href="{{URL('admin/sysconfig/index')}}">基本配置</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- 顶部路径提示（结束） -->

    <!-- 主体内容（开始） -->
    <div class="wrapper wrapper-content animated fadeInRight gray-bg">
    

        <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>所有的表单元素<small>和常见的 checbox 和 radion 元素。</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">配置选项 1</a>
                                    </li>
                                    <li><a href="#">配置选项 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>

                        <div class="ibox-content">
                            <form method="get" class="form-horizontal">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">普通输入框</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">网站描述：</label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" type="text" rows="4" name="config[web_site_description]">轮回后台管理框架</textarea>
                                        <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 网站搜索引擎描述</span>
                                                                                           
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>


                                <div class="form-group">
                                    <label class="col-sm-2 control-label">带提示文字的输入框</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                        <span class="help-block m-b-none">文本内容可能延伸超出一行</span>
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">密码</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Placeholder提示</label>
                                    <div class="col-sm-10">
                                        <input type="text" placeholder="此表单自带Placeholder提示" class="form-control">
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">禁止修改表单</label>
                                    <div class="col-lg-10">
                                        <input type="text" disabled="" placeholder="禁止修改此数据" class="form-control">
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">静态不能操作</label>
                                    <div class="col-lg-10">
                                        <p class="form-control-static">email@example.com</p>
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">提示1<br>
                                    <small class="text-navy">Bootstrap提示</small></label>
                                    <div class="col-sm-10">
                                        <div>
                                            <label> <input type="checkbox" value="">复选框</label>
                                        </div>
                                        <div>
                                            <label><input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">单选框1</label></div>
                                        <div>
                                            <label> <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios">单选框2</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                

                                <div class="form-group"><label class="col-sm-2 control-label">Select</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="account">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                    </select>

                                        <div class="col-lg-4 m-l-n"><select class="form-control" multiple="">
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                        </select></div>
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">行级复选框</label>
                                    <div class="col-sm-10">
                                        <label class="checkbox-inline">
                                        <input type="checkbox" value="option1" id="inlineCheckbox1"> a </label> <label class="checkbox-inline">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> b </label> <label class="checkbox-inline">
                                        <input type="checkbox" value="option3" id="inlineCheckbox3"> c </label>
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>


                                    <div class="form-group"><label class="col-sm-2 control-label">icheck<br/><small class="text-navy">单选框 复选框 </small></label>

                                    <div class="col-sm-10">
                                        <div class="i-checks">
                                            <label><input type="checkbox" value=""><i>11</i> 复选 </label>
                                        </div>

                                        <div class="i-checks">
                                            <label><input type="checkbox" value="" checked=""> <i></i> 复选 </label>
                                        </div>
                                        <div class="i-checks">
                                            <label> <input type="checkbox" value="" disabled="" checked=""> <i></i> 复选disabled </label>
                                        </div>
                                        <div class="i-checks">
                                            <label> <input type="checkbox" value="" disabled=""> <i></i> Option four disabled </label>
                                        </div>
                                        <div class="i-checks">
                                            <label> <input type="radio" value="option1" name="a"> <i></i> Option one </label>
                                        </div>
                                        <div class="i-checks">
                                            <label> <input type="radio" checked="" value="option2" name="a"> <i></i> Option two checked </label>
                                        </div>
                                        <div class="i-checks">
                                            <label> <input type="radio" disabled="" checked="" value="option2"> <i></i> Option three checked and disabled </label>
                                        </div>
                                        <div class="i-checks">
                                            <label> <input type="radio" disabled="" name="a"> <i></i> Option four disabled </label>
                                        </div>
                                    </div>
                                </div>


                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Inline checkboxes</label>

                                    <div class="col-sm-10"><label class="checkbox-inline"> <input type="checkbox" value="option1" id="inlineCheckbox1"> a </label> <label class="checkbox-inline">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> b </label> <label class="checkbox-inline">
                                        <input type="checkbox" value="option3" id="inlineCheckbox3"> c </label></div>
                                </div>


                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">下拉选择</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="account">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                    </select>

                                        <div class="col-lg-4 m-l-n"><select class="form-control" multiple="">
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                        </select></div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group has-success"><label class="col-sm-2 control-label">Input with success</label>

                                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group has-warning"><label class="col-sm-2 control-label">Input with warning</label>

                                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group has-error"><label class="col-sm-2 control-label">Input with error</label>

                                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Control sizing</label>

                                    <div class="col-sm-10"><input type="text" placeholder=".input-lg" class="form-control input-lg m-b">
                                        <input type="text" placeholder="Default input" class="form-control m-b"> <input type="text" placeholder=".input-sm" class="form-control input-sm">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Column sizing</label>

                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-2"><input type="text" placeholder=".col-md-2" class="form-control"></div>
                                            <div class="col-md-3"><input type="text" placeholder=".col-md-3" class="form-control"></div>
                                            <div class="col-md-4"><input type="text" placeholder=".col-md-4" class="form-control"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Input groups</label>

                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-addon">@</span> <input type="text" placeholder="Username" class="form-control"></div>
                                        <div class="input-group m-b"><input type="text" class="form-control"> <span class="input-group-addon">.00</span></div>
                                        <div class="input-group m-b"><span class="input-group-addon">$</span> <input type="text" class="form-control"> <span class="input-group-addon">.00</span></div>
                                        <div class="input-group m-b"><span class="input-group-addon"> <input type="checkbox"> </span> <input type="text" class="form-control"></div>
                                        <div class="input-group"><span class="input-group-addon"> <input type="radio"> </span> <input type="text" class="form-control"></div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Button addons</label>

                                    <div class="col-sm-10">
                                        <div class="input-group m-b"><span class="input-group-btn">
                                            <button type="button" class="btn btn-primary">Go!</button> </span> <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group"><input type="text" class="form-control"> <span class="input-group-btn"> <button type="button" class="btn btn-primary">Go!
                                        </button> </span></div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">With dropdowns</label>

                                    <div class="col-sm-10">
                                        <div class="input-group m-b">
                                            <div class="input-group-btn">
                                                <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button" aria-expanded="false">Action <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                             <input type="text" class="form-control"></div>
                                        <div class="input-group"><input type="text" class="form-control">

                                            <div class="input-group-btn">
                                                <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button">Action <span class="caret"></span></button>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Segmented</label>

                                    <div class="col-sm-10">
                                        <div class="input-group m-b">
                                            <div class="input-group-btn">
                                                <button tabindex="-1" class="btn btn-white" type="button">Action</button>
                                                <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button" aria-expanded="false"><span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                            <input type="text" class="form-control"></div>

                                        <div class="input-group"><input type="text" class="form-control">

                                            <div class="input-group-btn">
                                                <button tabindex="-1" class="btn btn-white" type="button">Action</button>
                                                <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button" aria-expanded="false"><span class="caret"></span></button>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-5">
                                        <button class="btn btn-primary" type="submit">保存</button>
                                        <button class="btn btn-white" type="submit">取消</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </div>





    <!-- 主体内容（结束） -->


<!-- 主要内容（结束） -->

@endsection


@section('myjs')
    <script src="{{URL::asset('style/admin/js/plugins/iCheck/icheck.min.js')}}"></script>

        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>

@endsection