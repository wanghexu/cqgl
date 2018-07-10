@extends('layouts.admin')
@section('content')
<!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 增加用户
</div>
<!--面包屑导航 结束-->

<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
        <h3>增加用户</h3>
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
    </div>
</div>
<!--结果集标题与导航组件 结束-->

<div class="result_wrap">
    <form method="post" action="{{url('admin/user')}}">
        {{csrf_field()}}
        <table class="add_tab">
            <tbody>
            <tr>
                <th width="120"><i class="require">*</i>账号：</th>
                <td>
                    <input type="text" name="user_name" > </i>请输入用户名字</span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>密码：</th>
                <td>
                    <input type="password" name="user_pass"> </i>密码6-20位</span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>邮箱：</th>
                <td>
                    <input type="text" name="email"> </i>请输入您的邮箱</span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>用户权限：</th>
                <td>
                    <select name="level">
                        <option value="1">第一级</option>
                        <option value="2">第二级</option>
                        <option value="3">第三级</option>
                        <option value="4">第四级</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" value="提交">
                    <input type="button" class="back" onclick="history.go(-1)" value="返回">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
@endsection