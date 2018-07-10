<?php

namespace App\Http\Controllers\Admin;
use App\Http\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

require_once 'resources/org/code/Code.class.php';

/**
 * 作者：王和旭
 * data：2018
 */
class LoginController extends CommonController
{
    public function login()
    {
        //md5加密
//        $psw_code=md5("123456");
//        dd($psw_code);

        if($input = Input::all()){
           // dd($input);
            //加斜杠，路径去底层找，strtoupper是转换成大写
            $code = new \Code;
            $_code = $code->get();
            if(strtoupper($input['code'])!=$_code){
                return back()->with('msg','验证码错误！');
            }
            //$user = User::first();
            //$user = User::where('user_name',$input['user_name'])->where('user_pass',md5($input['user_pass']))->first();
            $user = User::where('user_name',$input['user_name'])->first();
//            if($user->isEmpty()){
//                return back()->with('msg',$user);
//            }
//
            if($user->user_name != $input['user_name'] ||$user->user_pass!= md5($input['user_pass'])){
                return back()->with('msg','用户名或者密码错误！');
            }
            if($user->state!=0){
                return back()->with('msg','此用户已经被禁用！');
            }
            session(['user'=>$user]);
            return redirect('admin/index');
        }else {
            return view('admin.login');
        }
    }

    public function quit()
    {
        session(['user'=>null]);
        return redirect('admin/login');
    }

    public function code()
    {
        $code = new \Code;
        $code->make();
    }

}
