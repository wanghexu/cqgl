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
            $user = User::first();

            if($user->user_name != $input['user_name'] ||$user->user_pass!= md5($input['user_pass'])){
                return back()->with('msg','用户名或者密码错误！');
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
