<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

/**
 * 作者：王和旭
 * data：2018
 */
class IndexController extends CommonController
{
    public function index()
    {
        return view('admin.index');
    }

    public function info()
    {
        return view('admin.info');
    }

    //更改超级管理员密码
    public function pass()
    {
        if($input = Input::all()){

            $rules = [
                'password'=>'required|between:6,20|confirmed',
            ];

            $message = [
                'password.required'=>'新密码不能为空！',
                'password.between'=>'新密码必须在6-20位之间！',
                'password.confirmed'=>'新密码和确认密码不一致！',
            ];

            $validator = Validator::make($input,$rules,$message);

            if($validator->passes()){
                //$user = User::first();
                $user = User::where('user_name',session('user')->user_name)->get()->first();
                $_password = $user->user_pass;
                if(md5($input['password_o'])==$_password){
                    //$user->update();
                    User::where('user_id',$user->user_id)->update(['user_pass'=>md5($input['password_o'])]);
                    return back()->with('errors','密码修改成功！');
                }else{
                    return back()->with('errors','原密码错误！');
                }
            }else{
                return back()->withErrors($validator);
            }

        }else{
            return view('admin.pass');
        }
    }

    //备份数据库
    public function copydb()
    {
        if($input = Input::all()){
           //数据库地址
          //dd($input['db_thumb']);
            //从配置文件中获取数据库信息
            $DB_HOST = getenv('DB_HOST');
            $DB_DATABASE = getenv('DB_DATABASE');
            $DB_USERNAME = getenv('DB_USERNAME');
            $DB_PASSWORD = getenv('DB_PASSWORD');
            $dumpfname = $DB_DATABASE."_" .date("Y-m-d_H-i-s").".sql";
            $command = $input['db_thumb']."\\mysqldump  -h$DB_HOST -u$DB_USERNAME ";
            if ($DB_PASSWORD) $command.= "-p". $DB_PASSWORD ." ";
            $command.= $DB_DATABASE;
            $command.= " > ".base_path()."/uploads/" . $dumpfname;
            system($command);
            return back()->with('info','数据备份成功，在根目录的uploads文件夹下'.$dumpfname);
            //dd($command);
        }else{
            return view('admin.copyDB');
        }
    }
}
