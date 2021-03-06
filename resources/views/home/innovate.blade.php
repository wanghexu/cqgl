<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/css/top.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/css/innovate.css')}}">
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
    <div class="le1" id="left1"><span class="t1" id="tt1">创强考核资料</span></div>
    <div class="le2" id="left2"><span class="t2" id="tt2">互联网</span></div>
    <div class="le3" id="left3"><span class="t3" id="tt3">财贸</span></div>
  </div>
	<div class="rightk">
      <ul class="rightk_1">     
      <li style="clear:both;">
        <div class="l11">
        <a href="{{asset('uploads/test.docx')}}" title="我校与广州阿里云创新中心签约成立产业学院" target="_blank">广东轻工职业 技术学院实习管理规定（试行）[ 06-30 ]
        <img src="{{asset('resources/views/home/images/download.png')}}" class="i">
        </a>
        </div>
      </li>
      <li style="clear:both;">
        <div class="l1">
        <a href="{{asset('uploads/test.docx')}}" title="我校与广州阿里云创新中心签约成立产业学院" target="_blank">广东轻工职业技术学院顶岗实习安全及突发事件应急预案（试行）[ 06-30 ]
        <img src="{{asset('resources/views/home/images/download.png')}}" class="i">
        </a>
        </div>
      </li>
      <li style="clear:both;">
        <div class="l1">
        <a href="{{asset('uploads/test.docx')}}" title="我校与广州阿里云创新中心签约成立产业学院" target="_blank">广东轻工职业技术学院学生实习安全管理规定（试行）[ 06-30 ]
        <img src="{{asset('resources/views/home/images/download.png')}}" class="i">
        </a>
        </div>
      </li>
      <li style="clear:both;">
        <div class="l1">
        <a href="{{asset('uploads/test.docx')}}" title="我校与广州阿里云创新中心签约成立产业学院" target="_blank">广东轻工职业技术学院实习管理办法（试行）[ 06-30 ]
        <img src="{{asset('resources/views/home/images/download.png')}}" class="i">
        </a>
        </div>
      </li>
      <li style="clear:both;">
        <div class="l1">
        <a href="{{asset('uploads/test.docx')}}" title="我校与广州阿里云创新中心签约成立产业学院" target="_blank">广东省高等学校学生实习与毕业生就业见习条例 [ 06-15 ]
        <img src="{{asset('resources/views/home/images/download.png')}}" class="i">
            </a>
        </div>
      </li>
      <li style="clear:both;">
        <div class="l1">
        <a href="{{asset('uploads/test.docx')}}" title="我校与广州阿里云创新中心签约成立产业学院" target="_blank">职业学校学生实习管理规定 [ 06-15 ]
        <img src="{{asset('resources/views/home/images/download.png')}}" class="i">
            </a>
        </div>
      </li>
      </ul>
	</div>
</div>
<div class="txt">
    <p class="z1">共10条记录1/1&nbsp;首页&nbsp;上一页&nbsp;下一页&nbsp;尾页&nbsp;第1页</p>
</div>
<div class="foot">
	<ul> 
	  <li>版权所有：广东轻工职业技术学院 　　&nbsp;粤ICP备12053365号-1</li> 
      <li>联系地址：广州市新港西路152号 　　 &nbsp;邮编：510300</li>    
   </ul>
</div>
</body>
<script src="{{asset('resources/views/home/js/jquery.min.js')}}"></script>

<script type="text/javascript">
  $(function(){
    $("#left1").click(function(){
      $("#left1").removeClass('le2');
      $("#left1").addClass('le1'); 
      $("#left2").removeClass('le1');
      $("#left2").addClass('le2'); 
      $("#left3").removeClass('le1');
      $("#left3").addClass('le3');
      $("#tt1").removeClass('t2');
      $("#tt1").addClass('t1');
      $("#tt2").removeClass('t1');
      $("#tt2").addClass('t2');
      $("#tt3").removeClass('t1');
      $("#tt3").addClass('t3');
    });
  });
  $(function(){
    $("#left2").click(function(){
      $("#left2").removeClass('le2');
      $("#left2").addClass('le1');
      $("#left1").removeClass('le1');
      $("#left1").addClass('le2'); 
      $("#left3").removeClass('le1');
      $("#left3").addClass('le3');
      $("#tt1").removeClass('t1');
      $("#tt1").addClass('t2');
      $("#tt2").removeClass('t2');
      $("#tt2").addClass('t1');
      $("#tt3").removeClass('t1');
      $("#tt3").addClass('t3'); 
    });
  });
  $(function(){
    $("#left3").click(function(){
      $("#left1").removeClass('le1');
      $("#left1").addClass('le2'); 
      $("#left2").removeClass('le1');
      $("#left2").addClass('le2');
      $("#left3").removeClass('le3');
      $("#left3").addClass('le1');
      $("#tt1").removeClass('t1');
      $("#tt1").addClass('t2');
      $("#tt2").removeClass('t1');
      $("#tt2").addClass('t2'); 
      $("#tt3").removeClass('t3');
      $("#tt3").addClass('t1');
    });
  });
</script>
</html>