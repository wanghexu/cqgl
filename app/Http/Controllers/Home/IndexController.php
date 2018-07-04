<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Article;
use App\Http\Model\Category;
use App\Http\Model\Links;

class IndexController extends CommonController
{
    public function index()
    {
        $data = Article::orderBy('art_id','desc')->take(6)->get();
        return view('home.index',compact('data'));
    }
    //成果展示
    public function achieve()
    {
        return view('home.achieve');
    }
    //申报材料
    public function declares()
    {
        return view('home.declare');
    }
    //政策
    public function policy()
    {
        return view('home.policy');
    }
    //创强考核材料
    public function innovate()
    {
        return view('home.innovate');
    }
    //工作动态
    public function news()
    {
        //点击量最高的6篇文章（站长推荐）
//        $pics = Article::orderBy('art_view','desc')->take(6)->get();
//
//        //图文列表5篇（带分页）
//        $data = Article::orderBy('art_time','desc')->paginate(5);
//
//        //友情链接
//        $links = Links::orderBy('link_order','asc')->get();
//
//        return view('home.index',compact('pics','data','links'));
        //     return view('home.index');
        //文章
        $data = Article::orderBy('art_id','desc')->paginate(7);
        //当前分类的分类子分类
        $field = Category::orderBy('cate_pid','asc')->get();
        //$field = $field::where('cate_pid',0)->get();
       // $submenu = Category::where('cate_pid',$field->cate_id)->get();
        return view('home.news',compact('field','data'));
    }
//查看文章详情根据分类
    public function cate($cate_id)
    {
        //图文列表4篇（带分页）
        //$data = Article::where('cate_id',$cate_id)->orderBy('art_time','desc')->paginate(7);
        $data = Article::where('cate_id',$cate_id)->orderBy('art_id','desc')->paginate(7);

//        //查看次数自增
       Category::where('cate_id',$cate_id)->increment('cate_view');
//
//        //当前分类的子分类
//        $submenu = Category::where('cate_pid',$cate_id)->get();
          $field = Category::orderBy('cate_pid','asc')->get();
        return view('home.news',compact('field','data'));
    }
//查看文章详情
    public function article($art_id)
    {
        //关联表，查找分类表
        $field = Article::Join('category','article.cate_id','=','category.cate_id')->where('art_id',$art_id)->first();

        //查看次数自增
        Article::where('art_id',$art_id)->increment('art_view');

        //查看上一条和下一条
        $article['pre'] = Article::where('art_id','<',$art_id)->orderBy('art_id','desc')->first();
        $article['next'] = Article::where('art_id','>',$art_id)->orderBy('art_id','asc')->first();

        $data = Article::where('cate_id',$field->cate_id)->orderBy('art_id','desc')->take(6)->get();

        return view('home.news_detail',compact('field','article','data'));
    }
}
