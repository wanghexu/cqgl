@extends('layouts.admin')
@section('content')
<!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 修改用户信息
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
    <form method="post" action="{{url('admin/user/'.$data->user_id)}}">
        {{csrf_field()}}
        <table class="add_tab">
            <tbody>
            <tr>
                <th width="120"><i class="require">*</i>账号：</th>
                <td>
                    <input type="text" name="user_name" value="{{$data->user_name}}"> </i>用户名字</span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>密码：</th>
                <td>
                    <input type="password" name="user_pass" value=""> </i>用户密码</span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>邮箱：</th>
                <td>
                    <input type="text" name="email" value="{{$data->email}}"> </i>用户邮箱地址</span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>用户权限：</th>
                <td>
                    <select name="level">
                        @if($data->level==1)
                        <option value="1">第一级</option>
                        @elseif($data->level==2)
                        <option value="2">第二级</option>
                        @elseif($data->level==3)
                        <option value="3">第三级</option>
                        @elseif($data->level==4)
                        <option value="4">第四级</option>
                        @endif
                    </select>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>用户状态：</th>
                <td>
                    <select name="state">
                        @if($data->state==0)
                            <option value="0" selected="true">正常</option>
                            <option value="1">禁用</option>
                        @else
                            <option value="0">正常</option>
                            <option value="1" selected="true">禁用</option>
                        @endif
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