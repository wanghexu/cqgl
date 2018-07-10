<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\Question;
/**
 * 作者：王和旭
 * data：2018
 */
class QuestionController extends Controller
{
    //get.admin/file  全部文件列表
    public function index()
    {
         $data = Question::orderBy('id','asc')->paginate(3);
        return view('admin.question.index',compact("data"));
    }

}
