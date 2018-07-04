<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * 作者：王和旭
 * data：2018
 */
class QuestionController extends Controller
{
    //get.admin/file  全部文件列表
    public function index()
    {

        return view('admin.question.index');
    }

}
