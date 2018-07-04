<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/css/top.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/css/main.css')}}">
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
<div class="main">
    {{--轮播图片，建议宽480，高271--}}
   <div class="main_1">
        <div class="J_banner J_banner1">
        <ul class="img">
            <li><a href=""><img src="{{asset('resources/views/home/images/要素图片1.jpg')}}" alt=""/><p>我校与广州阿里云创新中心签约成立产业学院</p></a></li>
            <li><a href=""><img src="{{asset('resources/views/home/images/要素图片2.jpg')}}" alt="" /><p>华南理工大学广州国际校区启动建设</p></a></li>
            <li><a href=""><img src="{{asset('resources/views/home/images/要素图片3.jpg')}}" alt="" /><p>广东轻工职业技术学院顶岗实习安全及突发事件应急预案（试行</p></a></li>
        </ul>
        <ul class="pointer"></ul>
        <a class="cut prev"><</a>
        <a class="cut next">></a>
    </div>
	</div>
	<div class="main_2">
        <span><a href="{{url('/news')}}" class="more_news">更多>></a></span>
       <ul class="main_2_1">
           @foreach($data as $v)
	       <li style="clear:both;"><a href="{{url('home/article/'.$v->art_id)}}" title="{{$v->art_title}}" target="_blank">{{$v->art_title}}</a></li>
           @endforeach
      </ul>
	</div>
	<div class="main_3">
        <form id="slick-login" action="{{url('admin/login')}}" method="post">
            {{--加这句，是php里面csrf认证对网站一种保护，它会随机生成一个token连同值一起发给后端--}}
            {{csrf_field()}}
        <input type="text" name="user_name" placeholder="管理员账号" class="info"/>
        <input type="password" name="user_pass" placeholder="管理员密码" class="info"/>
        <input type="submit" value="登录" class="login"/>
        </form>
        @if(session('msg'))
          <p style="color:red;margin-left: 15px;font-size: 14px;">{{session('msg')}}</p>
        @endif
	</div>
</div>
    {{--项目专栏建设--}}
<div class="main2">
	<div class="main2_1"><img src="{{asset('resources/views/home/images/项目建设1.jpg')}}" width="100%" height="100%" title="项目建设1"><p>项目建设1</p></div>
	<div class="main2_1"><img src="{{asset('resources/views/home/images/项目建设2.jpg')}}" width="100%" height="100%" title="项目建设1"><p>项目建设2</p></div>
	<div class="main2_1"><img src="{{asset('resources/views/home/images/项目建设3.jpg')}}" width="100%" height="100%" title="项目建设1"><p>项目建设3</p></div>
	<div class="main2_2"><img src="{{asset('resources/views/home/images/项目建设4.jpg')}}" width="100%" height="100%" title="项目建设1"><p>项目建设4</p></div>
</div>
    {{--成果展示--}}
<div class="main3">
    <div id="div1">
        <div id="div4">
            <div id="div2">
                <img src="{{asset('resources/views/home/images/项目建设1.jpg')}}" alt="图片1"/>
                <img src="{{asset('resources/views/home/images/项目建设2.jpg')}}" alt="图片2"/>
                 <img src="{{asset('resources/views/home/images/项目建设3.jpg')}}" alt="图片3"/>
                 <img src="{{asset('resources/views/home/images/项目建设4.jpg')}}" alt="图片4"/>
                <img src="{{asset('resources/views/home/images/项目建设5.jpg')}}" alt="图片5"/>
             </div>
            <div id="div3"></div><!--这个容器是用来防止图片滚动时会出现空白的区域-->
        </div>
    </div>
</div>
<div class="foot">
	<ul> 
	  <li>版权所有：广东轻工职业技术学院 　　&nbsp;粤ICP备12053365号-1</li> 
      <li>联系地址：广州市新港西路152号 　　 &nbsp;邮编：510300</li>    
   </ul>
</div>
</body>
<script src="{{asset('resources/views/home/js/jquery.min.js')}}"></script>
<script src="{{asset('resources/views/home/js/Myapi.js')}}"></script>
<script>
    $(function(){

        var myApi1 = new Myapi();
        myApi1.JSON.lagout($('.J_banner1'),2000,0);

    })
</script>
<script type="text/javascript">
    window.onload=function(){
          var v1=document.getElementById('div1');
          var v2=document.getElementById('div2');
          var v3=document.getElementById('div3');
         
           v3.innerHTML= v2.innerHTML;//将v2容器里面的图片插入到v3容器里面  使其空白区域被遮住。
           function fun(){
             if(v1.scrollLeft<=0){
               v1.scrollLeft=1002;
            }else{
                 v1.scrollLeft--;
            }
        }

         var fun1=setInterval(fun,30);

        v1.onmouseover = function() {//鼠标经过时  清除定时器  停止图片的滚动
                clearInterval(fun1)
            };
        v1.onmouseout = function() {//鼠标离开后  继续滚动图片
                fun1 = setInterval(fun, 30)
             };
     }
 
 </script>
</html>