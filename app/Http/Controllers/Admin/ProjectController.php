<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

/**
 * 作者：王和旭
 * data：2018
 */
class ProjectController extends CommonController
{
    //get.admin/project 全部用户列表
    public function index()
    {
        //dd($data);
        return view('admin.project.project2.index');
    }

    //get.admin/user/create   添加用户
    public function create()
    {
        return view('admin.user.add');
    }

    //post.admin/user  添加用户提交
    public function store()
    {
        $input = Input::except('_token');
        $input['user_time'] = time();
        $input['user_pass'] = md5($input['user_pass']);
       // dd($input);

        $rules = [
            'user_name'=>'required',
            'user_name'=>'required',
        ];

        $message = [
            'user_name.required'=>'用户名字不能为空！',
            'user_name.required'=>'密码不能为空！',
        ];

        $validator = Validator::make($input,$rules,$message);

        if($validator->passes()){
            $re = User::create($input);
            if($re){
                return redirect('admin/user');
            }else{
                return back()->with('errors','数据填充失败，请稍后重试！');
            }
        }else{
            return back()->withErrors($validator);
        }
    }

    //get.admin/article/{article}/edit  编辑文章
    public function edit($user_id)
    {
        $data = User::find($user_id);
        return view('admin.user.edit',compact('data'));
    }

    //put.admin/user/{user}    更新用户
    public function update($user_id)
    {

        $input = Input::except('_token','_method');
        $re = User::where('user_id',$user_id)->update($input);
        if($re){
            return redirect('admin/user');
        }else{
            return back()->with('errors','文章更新失败，请稍后重试！');
        }
    }

    //禁用用户
    public function jinyong($user_id){

        $num=User::where('user_id',$user_id)->update(['state'=>1]);
        if($num){
            return redirect('admin/user');
        }else{
            return back()->with('errors','禁用失败，请稍后重试！');
        }
    }
    //开启用户
    public function kaiqi($user_id){

        $num=User::where('user_id',$user_id)->update(['state'=>0]);
        if($num){
            return redirect('admin/user');
        }else{
            return back()->with('errors','禁用失败，请稍后重试！');
        }
    }
    //条件查询，用户名和邮箱
    public function checkif(){
        $input = Input::except('_token');
          $username=$input['user_name'];
          $email=$input['email'];
        if(!empty($username)){
            $data = User::where('user_name',$username)->paginate(3);
        }
        if(!empty($email)){
            $data = User::where('email',$email)->paginate(3);
        }
        if(!empty($email)&&!empty($username)){
            $data = User::where('email',$email)->where('user_name',$username)->paginate(3);
        }

        //dd($data);
        return view('admin.user.index',compact('data'));
    }

    //delete.admin/user/{user}   删除单个用户
    public function destroy($user_id)
    {
        $re = User::where('user_id',$user_id)->delete();
        if($re){
            $data = [
                'status' => 0,
                'msg' => '用户删除成功！',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => '用户删除失败，请稍后重试！',
            ];
        }
        return $data;
    }
}
