<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>keke admin</title>


<link href="/public/tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="/public/resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="/public/tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="/public/resource/js/jquery.js"></script>
<script type="text/javascript" src="/public/resource/js/system/keke.js"></script>
<script type="text/javascript" src="/public/resource/js/in.js"></script>
</head>
<body class="frame_body">
<div class="frame_content">
<div id="append_parent"></div> 

<div class="page_title">
<h1>插件管理</h1>
     
</div>
<!--页头结束--> 

      <div class="box search p_relative">
    	<div class="title"><h2>未启用的插件</h2></div>
        <div class="gc" id="detail">
        	<form>
<table cellspacing="0" cellpadding="0">
 <tbody>
 	 	<tr>
 		<th width="8%">推广联盟</th>
<td><a href="index.php?do=app&view=app_center&ac=open&plug_id=3" class="button" type="button" >启用</a></td>
<td>推广联盟</td>

 	</tr>
	
 </tbody>
</table>
</form>
        </div>
 </div>
 
  
      <div class="box search p_relative">
    	<div class="title"><h2>已启用的插件</h2></div>
        <div class="gc" id="detail">
        	<form>
<table cellspacing="0" cellpadding="0">
 <tbody>
	
<tr>
<th width="8%">广场</th>
<td><a href="index.php?do=app&view=app_center&ac=close&plug_id=1" class="button" type="button" >关闭</a></td>
<td class="pl">
广场是威客系统用户交互中心，在这里用户可以发布免费供需信息，威客付费任务和商品动态交互，适合需要加强用户关系的站点试用。    <ul>
    	    	<li><a href="index.php?do=app&view=task_list">免费需求</a></li>
    	<li><a href="index.php?do=app&view=service_list">免费服务</a></li>
    	<li><a href="index.php?do=app&view=message_list">留言管理</a></li>
    	<li><a href="index.php?do=app&view=weibo_list">动态管理</a></li>
    	<li><a href="index.php?do=app&view=denounce_list">举报管理</a></li>
    </ul>
</td>
</tr>
	
<tr>
<th width="8%">推广营销</th>
<td><a href="index.php?do=app&view=app_center&ac=close&plug_id=2" class="button" type="button" >关闭</a></td>
<td class="pl">
推广营销是威客系统用户交互中心，在这里用户可以发布免费供需信息，威客付费任务和商品动态交互，适合需要加强用户关系的站点试用。    <ul>
    	    	<li><a href="index.php?do=prom&view=relation">推广关系管理</a></li>
    	<li><a href="index.php?do=prom&view=config">推广配置管理</a></li>
    	<li><a href="index.php?do=prom&view=event">推广财务管理</a></li>
    </ul>
</td>
</tr>
 </tbody>
</table>
</form>
        </div>
 </div>

     

</div>
<script type="text/javascript"
src="/public/resource/js/artdialog/artDialog.js"></script>
<script type="text/javascript"
src="/public/resource/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript"
src="/public/resource/js/artdialog/artDialog.iframeTools.source.js"></script>
<script type="text/javascript" src="/public/lang/cn/script/lang.js"></script>
<script type="text/javascript">
In.add('form_and_validation', {
path : "/public/resource/js/system/form_and_validation.js",
type : 'js'
});
In.add('xheditor', {
path : "/public/resource/js/xheditor/xheditor.js",
type : 'js'
});
In.add('mousewheel', {
path : "/public/tpl/js/jquery.mousewheel.min.js",
type : 'js'
});
//In.add('styleswitch',{path:"tpl/js/styleswitch.js",type:'js'});
In.add('table', {
path : "/public/tpl/js/table.js",
type : 'js'
});
In.add('calendar', {
path : "/public/resource/js/system/script_calendar.js"
});
In('form_and_validation', 'xheditor', 'mousewheel', 'table', 'calendar');
</script>

<script type="text/javascript">
function cdel(o, s) {
d = art.dialog;
var c = "你确认删除操作？";
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function cpass(o, s, type) {
d = art.dialog;
if (type == 1) {
var c = "确认审核通过？";
} else {
var c = "确认审核失败？";
}
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function cfreeze(o, s, type) {
d = art.dialog;
if (type == 1) {
var c = "确认冻结？";
}
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function crecomm(o, s, type) {
d = art.dialog;
if (type == 1) {
var c = "确认推荐？";
} else {
var c = "确认取消推荐？";
}
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function pdel(frm) {
d = art.dialog;
var frm = frm;
var c = "你确认删除操作？";
d.confirm(c, function() {
$("#" + frm).submit();
});
return false;
}
function batch_act(obj, frm) {
d = art.dialog;
var frm = frm;
var c = $(obj).val();
var conf = $(":checkbox[name='ckb[]']:checked").length;
if (conf > 0) {
d.confirm("确定" + c + '?', function() {
$(".sbt_action").val(c);
$("#" + frm).submit();
});
} else {
d.alert("您没有选择任何操作项");
}
return false;
}
</script>
</body>
</html>
<script type="text/javascript">
function open_plug(plug_id){
d = art.dialog;
c = "确认开启？";
var url = "index.php?do=app&view=app_center&ac=open&plug_id="+plug_id;

d.confirm(c, function(){
window.location.href = url ;
});
return false;
}
function close_plug(plug_id){
d = art.dialog;
c = "确认关闭？";
var url = "index.php?do=app&view=app_center&ac=close&plug_id="+plug_id;

d.confirm(c, function(){
window.location.href = url ;
});
return false;
}
</script>
