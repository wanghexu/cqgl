<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/css/top.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/css/main.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/css/innovate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/css/ch-ui.admin.css')}}">
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
<div class="mid">
  <div class="leftk">
    <div class="le1" id="left1"><span class="t1" id="tt1">工作动态</span></div>
      <div id="left2">
          {{--@foreach($field as $v)--}}
         {{--<p class="p1">新闻<p>--}}
          {{--<p class="p2">--热点新闻<p>--}}
          {{--<p class="p1">项目<p>--}}
          {{--<p class="p2">--项目新闻<p>--}}
        {{--@endforeach--}}
          <dl class="category">
              <dt>栏目分类</dt>
              @foreach($field as $v)
              <dd><a href="{{url('cate/'.$v->cate_id)}}">{{$v->cate_name}}</a></dd>
              @endforeach
          </dl>
      </div>
  </div>
	<div class="rightk">
      <ul class="rightk_1">
     @foreach($data as $v)
      <li style="clear:both;">
        <div class="l1">
        <a href="{{url('home/article/'.$v->art_id)}}" title="{{$v->art_title}}" target="_blank">{{$v->art_title}}<span class="i">[{{date('Y-m-d',$v->art_time)}}]</span> </a>
        </div>
      </li>
    @endforeach

      </ul>
	</div>
</div>
<div class="txt">
    {{$data->links()}}
    {{--<p class="z1">共10条记录1/1&nbsp;首页&nbsp;上一页&nbsp;下一页&nbsp;尾页&nbsp;第1页</p>--}}
</div>
<div class="foot">
	<ul> 
	  <li>版权所有：广东轻工职业技术学院 　　&nbsp;粤ICP备12053365号-1</li> 
      <li>联系地址：广州市新港西路152号 　　 &nbsp;邮编：510300</li>    
   </ul>
</div>
</body>
</html>