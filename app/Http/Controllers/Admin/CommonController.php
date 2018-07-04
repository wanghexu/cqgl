<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\File;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
/**
 * 作者：王和旭
 * data：2018
 */
class CommonController extends Controller
{
    //图片上传
    public function upload()
    {
        $file = Input::file('Filedata');
        if($file -> isValid()){
            $entension = $file -> getClientOriginalExtension(); //上传文件的后缀.
            //重命名
            $newName = date('YmdHis').mt_rand(100,999).'.'.$entension;
            //存放路径根目录的/uploads文件夹下面和修改名字
            $path = $file -> move(base_path().'/uploads',$newName);
            $filepath = 'uploads/'.$newName;
            $file=new File();
            //存到数据库
            if($entension="png"||$entension="jpg")
            {
                $file->file_type=1;
            }else{
                $file->file_type=2;
            }
            $file->file_name=$filepath;
            $re = $file->save();
            if($re){
                return $filepath;
            }else{
                return back()->with('data','文件路径上传数据库出错，请稍后重试！');
            }
        }
    }
    //图片上传
    public function uploads()
    {
        $file = Input::file('Filedata');
        if($file -> isValid()){
            $entension = $file -> getClientOriginalExtension(); //上传文件的后缀.
            //重命名
            $newName = date('YmdHis').mt_rand(100,999).'.'.$entension;
            //存放路径根目录的/uploads文件夹下面和修改名字
            $path = $file -> move(base_path().'/uploads',$newName);
            $filepath = 'uploads/'.$newName;
            $file=new File();
            //存到数据库
            if($entension="png"||$entension="jpg")
            {
                $file->file_type=1;
            }else{
                $file->file_type=2;
            }
            $file->file_name=$filepath;
            $re = $file->save();
            if($re){
                return redirect('admin/file');
            }else{
                return back()->with('data','文件路径上传数据库出错，请稍后重试！');
            }
        }
    }

    //文件上传
    public function uploadthefile()
    {
        $file = Input::file('Filedata');
        if($file -> isValid()){
            $entension = $file -> getClientOriginalExtension(); //上传文件的后缀.
            //重命名
            $newName = date('YmdHis').mt_rand(100,999).'.'.$entension;
            //存放路径根目录的/uploads文件夹下面和修改名字
            $path = $file -> move(base_path().'/uploads',$newName);
            $filepath = 'uploads/'.$newName;
            //存到数据库
            $file=new File();
            if($entension=="png"||$entension=="jpg")
            {
                $file->file_type=1;
            }else{
                $file->file_type=2;
            }
            $file->file_name=$filepath;
            $re = $file->save();
            if($re){
                return redirect('admin/file');
            }else{
                return back()->with('errors','文件路径上传数据库出错，请稍后重试！');
            }
            // echo $filepath;
        }
    }
}
