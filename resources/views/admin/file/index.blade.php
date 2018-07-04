@extends('layouts.admin')
@section('content')
        <!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 文件管理
</div>
<!--面包屑导航 结束-->

<!--搜索结果页面 列表 开始-->
    <div class="result_wrap">
        <!--快捷导航 开始-->
        <div class="result_title">
            <h3>文件列表</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap" id="drop_area" style="height: 168px;border: 4px grey dashed;">
                <p style="text-align: center;font-size: 20px;color: black;margin-top: 18px;font-weight: bold;">托文件到长方形内上传</p>
                <p style="text-align: center;font-size: 15px;color: black;">或点击</p>
                <p>
                    <input id="file_upload" name="file_upload" type="file" multiple="true">
                    <script src="{{asset('resources/org/uploadify/jquery.uploadifive.min.js')}}" type="text/javascript"></script>
                    <link rel="stylesheet" type="text/css" href="{{asset('resources/org/uploadify/uploadifive.css')}}">
                    <script>
                    $(function(){
                            //阻止浏览器默认打开文件
                        $(document).on({
                            dragleave:function(e){	//拖离
                                e.preventDefault();
                            },
                            drop:function(e){  //拖后放
                                e.preventDefault();
                            },
                            dragenter:function(e){	//拖进
                                e.preventDefault();
                            },
                            dragover:function(e){	//拖来拖去
                                e.preventDefault();
                            }
                        });
                                //拖拽文件上传
                            var box = document.getElementById('drop_area'); //拖拽区域
                            box.addEventListener("drop",function(e) {
                                e.preventDefault(); //取消默认浏览器拖拽效果
                               // alert("拖进成功！");
                                var fileList = e.dataTransfer.files; //获取文件对象
                                //检测是否是拖拽文件到页面的操作
                                if (fileList.length == 0) {
                                    return false;
                                }
                                var filesize = Math.floor((fileList[0].size)/1024);
                               // alert(filesize);
                                if(filesize>102588){
                                    alert("上传文件大小不能超过100MB.");
                                    return false;
                                }
                            //上传
                               var xhr = new XMLHttpRequest();
                                var fd = new FormData();
                                fd.append('Filedata', fileList[0]);
                                fd.append('timestamp', "<?php echo time();?>");
                                fd.append('_token',"{{csrf_token()}}");
                                xhr.open("post", "{{url('admin/uploadthefile')}}", true);
                                xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
                                xhr.send(fd);
                                xhr.onreadystatechange = function(res) {
                                    if (xhr.readyState == 4) {
                                        if (xhr.status == 200) {
                                            alert("上传成功");
                                        }
                                    }
                                }
                                //检测文件是不是图片
//                                if (fileList[0].type.indexOf('image') === -1) {
//                                    alert("您拖的不是图片！");
//                                    return false;
//                                }
//                                var video_type=["video/mp4","video/ogg"];
//                              else if (video_type.in_array(fileList[0].type)) ;
                            })
                        })
                    </script>
                    <script type="text/javascript">
                        <?php $timestamp = time();?>
                        $(function() {
                            $('#file_upload').uploadifive({
                                'auto'             : true,
                                'buttonText'       : '上传文件',
                                'fileSizeLimit'   : 102588,
//                                'fileType' : 'image/*',
                                'formData'         : {
                                    'timestamp' : '<?php echo $timestamp;?>',
                                    '_token'     : "{{csrf_token()}}"
                                },
                                'queueID'          : "queue",
                                'uploadScript'     : "{{url('admin/uploads')}}",
                                'onUploadComplete' : function(file, data) {
                                    alert("上传成功");
                                },
                                'onError'      : function(errorType) {
                                    alert('文件不能大于100MB ！' + "请重新上传");
                                },
                                onCancel : function(file) {},
                            });
                        });
                    </script>
                    <style>
                        .uploadifive-button{border:0; padding: 5px 10px;border-radius: 0;margin: 0 auto;}

                    </style>
                </p>
                <p style="text-align: center;font-size: 15px;color: black;margin-top: 18px;">最大上传文件大小：100MB</p>

            </div>
        </div>
        <!--快捷导航 结束-->
    </div>
    <div  style="height: 50px; border-bottom: 1px grey solid;">
        <div id="queue"></div>
    </div>
    <div class="result_wrap" style="height: 500px;">

            @foreach($data as $d)
            <div id="{{$d->file_name}}" style="width:200px;height: 200px; float: left;margin-right: 5px;margin-bottom: 5px; border:1px grey solid; padding: 2px;">
              <div style="width:200px;height: 168px;">
                  @if($d->file_type==1)
                  <img src="{{asset($d->file_name)}}" width="100%" height="100%"/>
                  @else<video src="{{asset($d->file_name)}}" width="100%" height="100%" controls="true" ></video>
                      @endif
              </div>
                <div style="width:200px;height: 25px;cursor: pointer;text-align: center;padding-top: 8px;color: white;background-color: grey;" onclick="delimg('{{$d->file_id}}')">点击删除</div>
            </div>
            @endforeach

    </div>

<!--搜索结果页面 列表 结束-->

<script>
    //删除图片
    function delimg(file_id) {
        layer.confirm('您确定要删除这个图片吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.post("{{url('admin/file/')}}/"+file_id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {
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

@endsection
