<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="{{$field->art_tag}}" />
<meta name="description" content="{{$field->art_description}}" />
<link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/css/top.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/css/main.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/css/detail.css')}}">
	<title>创强网</title>
</head>
<body>
<div id="top">
<div id="top_main">
	<img src="{{asset('resources/views/home/images/logo.png')}}">
<div>	
</div>
<div class="logo">
</div>

<div class="nav">
   <ul class="daohang">
       <li><a href="{{url('/')}}">首页</a></li>
       <li class="menuDiv"></li>
       <li><a href="{{url('/declares')}}">申报材料</a></li>
       <li class="menuDiv"></li>
       <li><a href="{{url('/policy')}}">政策考核</a></li>
       <li class="menuDiv"></li>
       <li><a href="{{url('/innovate')}}">创强考核材料</a></li>
       <li class="menuDiv"></li>
       <li><a href="{{url('/achieve')}}">成果展示</a></li>
   </ul>
</div>
    {{--新闻内容--}}
<div class="main">
    <div class="m_position"><span>您的位置：</span><a href="{{url('/')}}">首页</a>><a href="{{url('/news')}}">工作动态</a>><a href="{{url('cate/'.$field->cate_id)}}">{{$field->cate_name}}</a></div>
    <div class="m_title"><p>{{$field->art_title}}</p></div>
    <div class="m_time"><p>发布时间：&nbsp;{{date('Y-m-d h:m:s',$field->art_time)}}</p></div>
    <div class="m_con">
        @if($field->art_thumb)
        <div class="m_img">
        {{--<img src="{{url($field->art_thumb)}}">--}}
        <img src="{{asset($field->art_thumb)}}">
         </div>
        @endif
        {!! $field->art_content !!}
    </div>
    {{--文章页脚。打印关闭，和上下一章--}}
<div class="mian_page">
    <div class="m_take"> |  <a href="javascript:window.print()">打印本页</a> |  <a href="javascript:window.close()">关闭窗口</a> </div>
    <div class="m_next_pre">
        <ul>
            <li>上一篇：
                @if($article['pre'])
                    <a href="{{url('home/article/'.$article['pre']->art_id)}}">{{$article['pre']->art_title}}</a>
                @else
                    <span>没有上一篇了</span>
                @endif
            </li>
            <li>下一篇：
                @if($article['next'])
                    <a href="{{url('home/article/'.$article['next']->art_id)}}">{{$article['next']->art_title}}</a>
                @else
                    <span>没有下一篇了</span>
                @endif
            </li>
        </ul>
    </div>
</div>
<div class="foot">
	<ul> 
	  <li>版权所有：广东轻工职业技术学院 　　&nbsp;粤ICP备12053365号-1</li> 
      <li>联系地址：广州市新港西路152号 　　 &nbsp;邮编：510300</li>    
   </ul>
</div>
</body>
</html>