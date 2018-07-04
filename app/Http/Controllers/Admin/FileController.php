<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\File;
use App\Http\Model\Category;
use App\Http\Model\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

/**
 * 作者：王和旭
 * data：2018
 */
class FileController extends CommonController
{
    //get.admin/file  全部文件列表
    public function index()
    {
        $data = File::orderBy('file_id','desc')->get();
        return view('admin.file.index',compact('data'));
    }


    //delete.admin/file/{file}   删除单个文章
    public function destroy($file_id)
    {
        $re = File::where('file_id',$file_id)->delete();
        //$refile = File::find($file_id)->file_name;
//        Storage::delete("../../../uploads/20180520095144872.jpg");
        if($re){
            $data = [
                'status' => 0,
                'msg' => '图片删除成功！',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => '图片删除失败，请稍后重试！',
            ];
        }
        return $data;
    }
}
