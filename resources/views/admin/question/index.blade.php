<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>问题管理</title>
	<link href="{{asset('resources/views/admin/style/css/style.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="{{asset('resources/views/admin/user/css/htmleaf-demo.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('resources/views/admin/user/css/style-1.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('resources/views/admin/user/css/line.css')}}">
	<script src="{{asset('resources/views/home/js/jquery-3.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('resources/org/layer/layer.js')}}"></script>
	<link rel="stylesheet" href="{{asset('resources/views/admin/style/font/css/font-awesome.min.css')}}">
</head>
<body>
<div id="contentWrap">
	<div class="pageTitle">
		<div class="thetop">
			<a href="{{url('admin/user/create')}}"><i class="fa fa-fw fa-plus"></i>创建问题</a>
			<a href="javascript:showDialog()" class="xuan"><i class="fa fa-fw fa-sliders"></i>筛选</a>
		</div>
	</div>
	<div class="pageColumn">
		<div class="pageButton"></div>
		<table>
			<thead>
			{{--<th width="25"><input name="" type="checkbox" value="" /></th>--}}
			<th width="3%">id</th>
			<th width="12%">用户名</th>
			<th width="18%">操作时间</th>
			<th width="10%">操作问题</th>
			<th width="38%">问题描述</th>
			<th width="">操作</th>
			</thead>
			<tbody>

			@foreach($data as $v)
				<tr>
					{{--<td class='checkBox'><input name='' type='checkbox' value='' /></td>--}}
					<td>{{$v->id}}</td>
					<td>{{$v->username}}</td>
					<td>{{date('Y-m-d h:m:s',$v->time)}}</td>
					<td>{{$v->question}}</td>
					<td>{{$v->dec}}</td>
					<td class='delete'>
						<a href="javascript:;" onclick="delArt({{$v->id}})"><input type='button' name='del' id='{{$v->id}}' value='删除'class="anniu"></a>
						<a href=""><input type='button' name='edit' id='{{$v->id}}' value='编辑' class="anniu"></a>
					</td>
				</tr>
			@endforeach

			</tbody>
		</table>
		<div class="page_list">
			{{$data->links()}}
		</div>
	</div>
</div>
{{--<div id="shaixuan">--}}

{{--</div>--}}
<div class="ui-dialog" id="dialogMove" onselectstart='return false;'>
	<div class="ui-dialog-title" id="dialogDrag"  onselectstart="return false;" >
		问题高级筛选
		<a class="ui-dialog-closebutton" href="javascript:hideDialog();"></a>
	</div>
	<div class="ui-dialog-content">
		<form action="{{url('admin/usercheck/checkif')}}" method="post">
			{{--加这句，是php里面csrf认证对网站一种保护，它会随机生成一个token连同值一起发给后端--}}
			{{csrf_field()}}
			<div class="ui-dialog-l40 ui-dialog-pt15">
				<input class="ui-dialog-input ui-dialog-input-username" name="user_name" type="input" placeholder="用户名" />
			</div>
			<div class="ui-dialog-l40 ui-dialog-pt15">
				<input class="ui-dialog-input ui-dialog-input-password" name="email" type="input" placeholder="问题描述" />
			</div>
			<div class="ui-dialog-l40">

			</div>
			<div>
				<input type="submit"  value="筛选" class="ui-dialog-submit">
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
	var dialogInstace , onMoveStartId;	//	用于记录当前可拖拽的对象

	// var zIndex = 9000;

	//	获取元素对象
	function g(id){return document.getElementById(id);}

	//	自动居中元素（el = Element）
	function autoCenter( el ){
		var bodyW = document.documentElement.clientWidth;
		var bodyH = document.documentElement.clientHeight;

		var elW = el.offsetWidth;
		var elH = el.offsetHeight;

		el.style.left = (bodyW-elW)/2 + 'px';
		el.style.top = (bodyH-elH)/2 + 'px';

	}

	//	自动扩展元素到全部显示区域
	function fillToBody( el ){
		el.style.width  = document.documentElement.clientWidth  +'px';
		el.style.height = document.documentElement.clientHeight + 'px';
	}

	//	Dialog实例化的方法
	function Dialog( dragId , moveId ){

		var instace = {} ;

		instace.dragElement  = g(dragId);	//	允许执行 拖拽操作 的元素
		instace.moveElement  = g(moveId);	//	拖拽操作时，移动的元素

		instace.mouseOffsetLeft = 0;			//	拖拽操作时，移动元素的起始 X 点
		instace.mouseOffsetTop = 0;			//	拖拽操作时，移动元素的起始 Y 点

		instace.dragElement.addEventListener('mousedown',function(e){

			var e = e || window.event;

			dialogInstace = instace;
			instace.mouseOffsetLeft = e.pageX - instace.moveElement.offsetLeft ;
			instace.mouseOffsetTop  = e.pageY - instace.moveElement.offsetTop ;

			// instace.moveElement.style.zIndex = zIndex ++;
		})

		return instace;
	}

	//	在页面中侦听 鼠标弹起事件
	document.onmouseup = function(e){

		dialogInstace = false;
		clearInterval(onMoveStartId);

	}

	//	在页面中侦听 鼠标移动事件
	document.onmousemove = function(e) {
		var e = e || window.event;
		var instace = dialogInstace;
		if (instace) {

			var maxX = document.documentElement.clientWidth -  instace.moveElement.offsetWidth;
			var maxY = document.documentElement.clientHeight - instace.moveElement.offsetHeight ;

			instace.moveElement.style.left = Math.min( Math.max( ( e.pageX - instace.mouseOffsetLeft) , 0 ) , maxX) + "px";
			instace.moveElement.style.top  = Math.min( Math.max( ( e.pageY - instace.mouseOffsetTop ) , 0 ) , maxY) + "px";
		}
		if(e.stopPropagation) {
			e.stopPropagation();
		} else {
			e.cancelBubble = true;
		}
	};

	//	拖拽对话框实例对象
	Dialog('dialogDrag','dialogMove');

	function onMoveStart(){

	}


	//	重新调整对话框的位置和遮罩，并且展现
	function showDialog(){
		g('dialogMove').style.display = 'block';
		g('mask').style.display = 'block';
		autoCenter( g('dialogMove') );
		fillToBody( g('mask') );
	}

	//	关闭对话框
	function hideDialog(){
		g('dialogMove').style.display = 'none';
		g('mask').style.display = 'none';
	}

	//	侦听浏览器窗口大小变化
	//window.onresize = showDialog;
</script>
<script>
	//删除用户
	function delArt($user_id) {
		layer.confirm('您确定要删除该用户吗？', {
			btn: ['确定','取消'] //按钮
		}, function(){
			$.post("{{url('admin/user/')}}/"+$user_id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {
				if(data.status==0){
					location.href = location.href;
					layer.msg(data.msg, {icon: 6});
				}else{
					layer.msg(data.msg, {icon: 5});
				}
			});
//            layer.msg('的确很重要', {icon: 1});
		}, function(){

		});
	}
</script>
</body>
</html>