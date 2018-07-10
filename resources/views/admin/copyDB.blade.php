@extends('layouts.admin')
@section('content')
<!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 数据库备份
</div>
<!--面包屑导航 结束-->

<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
        <h3>数据库备份</h3>
        @if(count($errors)>0)
            <div class="mark">
                @if(is_object($errors))
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                @else
                    <p>{{$errors}}</p>
                @endif
            </div>
        @endif
        @if(session('info'))
            <p style="color:red">{{session('info')}}</p>
        @endif
    </div>
</div>
<!--结果集标题与导航组件 结束-->

<div class="result_wrap">
    <form method="post" action="">
        {{csrf_field()}}
        <table class="add_tab">
            <tbody>
            <tr>
                <th><i class="require">*</i>请修改数据库安装的bin文件夹地址：</th>
                <td>
                    <input type="text" size="50" name="db_thumb" value="{!! Config::get('web.mysql_path_bin') !!}">
                    {{--<input type="file" id="file_input" webkitdirectory />--}} </i>修改config文件夹下面的web.php的mysql_path_bin值</span>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" value="备份">
                    <input type="button" class="back" onclick="history.go(-1)" value="返回">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
@endsection