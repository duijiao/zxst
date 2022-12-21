<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>友享资源在线搜题</title>
  <link href="//lib.baomitu.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="https://www.layuicdn.com/layui/layui.js"></script>
  <script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/layer/2.3/layer.js"></script>
  <script src="//lib.baomitu.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<script>
$(document).ready(function(){
  $("button").click(function(){
      layer.load();
  var name = $("#name").val();
  var type = $(':radio[name=type]:checked').val();
  var types = $(':radio[name=types]:checked').val();
    $.post("https://yxzy.zv16.cn/zxst/api1.php",
    {
      name:name,
      type:type,
      types:types
    },
    function(data,status){
    var obj = JSON.parse(data);    
    if (obj.code == 1) {
        layer.closeAll();
        layer.msg('获取成功', {icon: 6,time: 2000,shade: 0.3});
		$("#type").html('<span id="type">'+obj.qlist[0].question+'</span>');
			$("#time").html('<span id="time">'+obj.qlist[0].question+'</span>');
		$("#city1").html('<span id="city1"> 选项：<br>'+obj.qlist[0].options+'</span>');
		$("#city2").html('<span id="city2" style="color:blue;">答案：'+obj.qlist[0].answer+'</span>');
		$("#city3").html('<span id="city3">'+obj.qlist[0].question+'</span>');
		$("#city1Power").html('<span id="city1Power">'+obj.qlist[0].question+'</span>');
		$("#city2Power").html('<span id="city2Power">'+obj.qlist[0].question+'</span>');
		$("#city3Power").html('<span id="city3Power">'+obj.qlist[0].question+'</span>');
		$("#counPower").html('<span id="city3Power">'+obj.qlist[0].question+'</span>');
	
		$("#success").show();
            } else {
        layer.closeAll();
        layer.msg('查询失败', {icon: 5,time: 2000,shade: 0.3});

         }
    
    });
  });
});
</script>
<!--请求结束-->
<body>
  <div class="container" style="padding-top:70px;">

    <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 center-block" style="float: none;">
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">友享在线搜题（亿级题库，全网免费）</h3></div>
        <div class="panel-body">
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-cloud"></span></span>
              <input type="text" name="name" id="name" class="form-control" placeholder="请输入完整题目，最好不要带题号" required>
              </div><br/>


            <div class="form-group">
              <div class="col-xs-12">
                <button type="button" name="button" class="btn btn-primary form-control">查询</button>
               </div>
            </div>
                          <p style="color:red;">温馨提示：由于服务器压力，网页端搜题仅显示一道题目，需要完整版请期待友享资源微信小程序，官方微信公众号：友享资源。</p>
                          <p style="color:blue">提醒：为了避免引起不必要的麻烦，本搜题题库仅针对大学生群体</p>
              
             <p style="text-align: center;"><img src="https://guo.zv1818.cn/fy/public/Uploads/tu/20221108/1667884272465958.jpg" title="1667884272465958.jpg" alt="1667884272465958.jpg" width="96" height="96" class="" /></p >
        </div>
      </div>
      <div id="success" class="panel panel-success" hidden>
        <div class="panel-heading"><h3 class="panel-title">查询成功</h3></div>
            	<div class="panel-body">
		题目：<span id="time"></span>
	</div>
	<table class="table">
		
		<tr><td><span id="city1"></span></td></tr>
		<tr><td><span id="city2"></span></td></tr>
	
	</table>
<div class="panel-body">©2020-2022 <span>友享资源</span>
	</div>
        </div>
      </div>
</body>
</html>
