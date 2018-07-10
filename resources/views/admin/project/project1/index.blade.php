<!doctype html>
<html lang="en">
<head>
    <title>项目管理甘特图</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1">
    <link rel="stylesheet" href="{{asset('resources/views/admin/project/project1/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('resources/views/admin/project/project1/css/bootstrap.min.css')}}" />
    <link href="{{asset('resources/views/admin/project/project1/css/prettify.min.css')}}" rel="stylesheet" />
    <style type="text/css">
        body {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 13px;
            padding: 0 0 50px 0;
        }

        .contain {
            width: 800px;
            margin: 0 auto;
        }

    </style>
</head>
<body>
    <div class="gantt_ot" style="width:800px; margin:100px auto;">
        <div class="gantt"></div>
    </div>


</body>
</html>
<script src="{{asset('resources/views/admin/project/project1/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('resources/views/admin/project/project1/js/bootstrap.min.js')}}"></script>
<script src="{{asset('resources/views/admin/project/project1/js/jquery.fn.gantt.js')}}"></script>

<script src="{{asset('resources/views/admin/project/project1/js/prettify.min.js')}}"></script>
<script>

    $(function () {

        "use strict";

        //初始化gantt
        $(".gantt").gantt({
            source: [

                {
                    name: "task  1",
                    desc: "项目1",
                    values: [{
                        from: "/Date(1420192000000)/",
                          to: "/Date(1420192000000)/",
                        label: "",
                        customClass: "ganttRed"
                    }]
                }, {
                    name: "task  2",
                    desc: "项目2",
                    values: [{
                        from: "/Date(1420192000000)/",
                        to: "/Date(1420192000000)/",
                        label: "",
                        customClass: "ganttRed"
                    }]
                }, {
                    name: "task  3",
                    desc: "项目3",
                    values: [{
                        from: "/Date(1323802400000)/",
                        to: "/Date(1325685200000)/",
                        label: "",
                        customClass: "ganttGreen"
                    }]
                }, {
                    name: "task  4",
                    desc: "项目4",
                    values: [{
                        from: "/Date(1325685200000)/",
                        to: "/Date(1325695200000)/",
                        label: "",
                        customClass: "ganttBlue"
                    }]
                }, {
                    name: "task  5",
                    desc: "任务5",
                    values: [{
                        from: "/Date(1326785200000)/",
                        to: "/Date(1325785200000)/",
                        label: "",
                        customClass: "ganttGreen"
                    }]
                }, {
                    name: "task  6",
                    desc: "任务6",
                    values: [{
                        from: "/Date(1328785200000)/",
                        to: "/Date(1328905200000)/",
                        label: "",
                        customClass: "ganttBlue"
                    }]
                }, {
                    name: "task  7",
                    desc: "任务7",
                    values: [{
                        from: "/Date(1330011200000)/",
                        to: "/Date(1336611200000)/",
                        label: "",
                        customClass: "ganttOrange"
                    }]
                }, {
                    name: "task  8",
                    desc: "",
                    values: [{
                        from: "/Date(1336611200000)/",
                        to: "/Date(1338711200000)/",
                        label: "",
                        customClass: "ganttOrange"
                    }]
                },

                {
                    name: "more",
                    desc: "",
                    values: [
                    {
                        from: "/Date(1322611200000)/",
                        to: "/Date(1323302400000)/",
                        label: "",
                        customClass: "ganttBlue"
                    },
                    {
                        from: "/Date(1323802400000)/",
                        to: "/Date(1325685200000)/",
                        label: "",
                        customClass: "ganttOrange"
                    },
                    {
                        from: "/Date(1328785200000)/",
                        to: "/Date(1328905200000)/",
                        label: "",
                        customClass: "ganttGreen"
                    },

                    ]
                }],
            navigate: 'scroll',//buttons  scroll
            scale: "weeks",// months  weeks days  hours
            maxScale: "months",
            minScale: "days",
            itemsPerPage: 10,
            onItemClick: function (data) {
                alert("Item clicked - show some details");
            },
            onAddClick: function (dt, rowId) {
                alert("Empty space clicked - add an item!");
            },
            onRender: function () {
                if (window.console && typeof console.log === "function") {
                    console.log("chart rendered");
                }
            }
        });



        //弹窗功能
        $(".gantt").popover({
            selector: ".bar",
            title: "I'm a popover",
            content: "And I'm the content of said popover.",
            trigger: "hover",
            placement: "auto right"
        });


        //prettyPrint();
    });


</script>
