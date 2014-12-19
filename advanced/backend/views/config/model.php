<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>keke admin</title>
<link href=" /public/tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href=" /public/resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href=" /public/tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src=" /public/resource/js/jquery.js"></script>
<script type="text/javascript" src=" /public/resource/js/system/keke.js"></script>
<script type="text/javascript" src=" /public/resource/js/in.js"></script>
</head>
<body class="frame_body">
<div class="frame_content">
<div id="append_parent"></div>
<div class="page_title">
<h1>模型管理</h1>
 <div class="tool"> 
        <a href="index.php?r=config/model" class="here">任务模型管理</a>
        <a href="index.php?r=config/model_shop" >商城模型管理</a>
</div>
    </div>
  <div class="box list">
  	<div class="title">
  		<h2>任务模型管理</h2>
</div>
        	<div class="detail">
<form action="index.php?do=config&view=model&model_type=task&op=add" method="post">
<table cellpadding="0" cellspacing="0">
	<tr>
		<th scope="row">模型标识</th>
		<th scope="row">启用状态</th>
		<th scope="row">模型标识</th>
		<th scope="row">模型名</th>
		<th scope="row">模型目录</th>
		<th scope="row">模型作者</th>
		<th scope="row" width="50">排序</th>
		<th scope="row">设为禁用</th>
		<th scope="row">配置</th>
		<th scope="row">卸载</th>
	</tr>

	<tr>
		<td>1</td>
		<td><font color="red">开启</font></td>
		<td>sreward</td>
		<td>单人悬赏</td>
		<td>sreward</td>
		<td>kekezu</td>
		<td>
		<input size="3" class="txt" name="md_list_order1"  id="md_list_order1" value="1" type="text" onchange="set_listorder('1',this.value);">
		</td>
		<td>
		<a href="index.php?do=config&view=model&model_type=task&op=close&model_id=1"  class="button">
		<span class="lock icon"></span>禁用</a>
		</td>
		<td>
		<a href="index.php?r=model/single_task_config" class="button">
		<span class="cog icon"></span>配置</a>
		</td>
		<td>
		<a href="index.php?do=config&view=model&model_type=task&op=del&model_id=1" onclick="return uninstall(this);" class="button">
		<span class="downarrow icon"></span>卸载</a>
		</td>
	</tr>

	<tr>
		<td>2</td>
		<td><font color="red">开启</font></td>
		<td>mreward</td>
		<td>多人悬赏</td>
		<td>mreward</td>
		<td>kekezu</td>
		<td>
		<input size="3" class="txt" name="md_list_order2"  id="md_list_order2" value="3" type="text" onchange="set_listorder('2',this.value);">
		</td>
		<td>
		<a href="index.php?do=config&view=model&model_type=task&op=close&model_id=2"  class="button">
		<span class="lock icon"></span>禁用</a>
		</td>
		<td>
		<a href="index.php?r=model/many_task_config" class="button">
		<span class="cog icon"></span>配置</a>
		</td>
		<td>
		<a href="index.php?do=config&view=model&model_type=task&op=del&model_id=2" onclick="return uninstall(this);" class="button">
		<span class="downarrow icon"></span>卸载</a>
		</td>
	</tr>

	<tr>
		<td>3</td>
		<td><font color="red">开启</font></td>
		<td>preward</td>
		<td>计件悬赏</td>
		<td>preward</td>
		<td>kekezu</td>
		<td>
		<input size="3" class="txt" name="md_list_order3"  id="md_list_order3" value="2" type="text" onchange="set_listorder('3',this.value);">
		</td>
		<td>
		<a href="index.php?do=config&view=model&model_type=task&op=close&model_id=3"  class="button">
		<span class="lock icon"></span>禁用</a>
		</td>
		<td>
		<a href="index.php?r=model/jijian_task_config" class="button">
		<span class="cog icon"></span>配置</a>
		</td>
		<td>
		<a href="index.php?do=config&view=model&model_type=task&op=del&model_id=3" onclick="return uninstall(this);" class="button">
		<span class="downarrow icon"></span>卸载</a>
		</td>
	</tr>

	<tr>
		<td>4</td>
		<td><font color="red">开启</font></td>
		<td>tender</td>
		<td>普通招标</td>
		<td>tender</td>
		<td>kekezu</td>
		<td>
		<input size="3" class="txt" name="md_list_order4"  id="md_list_order4" value="4" type="text" onchange="set_listorder('4',this.value);">
		</td>
		<td>
		<a href="index.php?do=config&view=model&model_type=task&op=close&model_id=4"  class="button">
		<span class="lock icon"></span>禁用</a>
		</td>
		<td>
		<a href="index.php?r=model/normal_task_config" class="button">
		<span class="cog icon"></span>配置</a>
		</td>
		<td>
		<a href="index.php?do=config&view=model&model_type=task&op=del&model_id=4" onclick="return uninstall(this);" class="button">
		<span class="downarrow icon"></span>卸载</a>
		</td>
	</tr>

	<tr>
		<td>5</td>
		<td><font color="red">开启</font></td>
		<td>dtender</td>
		<td>订金招标</td>
		<td>dtender</td>
		<td>kekezu</td>
		<td>
		<input size="3" class="txt" name="md_list_order5"  id="md_list_order5" value="6" type="text" onchange="set_listorder('5',this.value);">
		</td>
		<td>
		<a href="index.php?do=config&view=model&model_type=task&op=close&model_id=5"  class="button">
		<span class="lock icon"></span>禁用</a>
		</td>
		<td>
		<a href="index.php?r=model/deposit_task_config" class="button">
		<span class="cog icon"></span>配置</a>
		</td>
		<td>
		<a href="index.php?do=config&view=model&model_type=task&op=del&model_id=5" onclick="return uninstall(this);" class="button">
		<span class="downarrow icon"></span>卸载</a>
		</td>
	</tr>

	<tr>
		<td colspan="7">
		安装新模型,请输入模板所在目录: <input type="text" name="txt_model_name" value="" class="txt">
		<button type="submit" name="submit" class="button pill" value=安装 >
		<span class="uparrow icon"></span>安装</button>
		</td>
	</tr>
</table>
</form>
   </div>
    <script>
        function set_listorder(model_id, value){
            $.get('index.php?do=config&view=model&op=listorder', {
                model_id: model_id,
                value: value
            });
        }
function uninstall(o,s){
d = art.dialog;
var c = "确定要卸载此任务模型吗？";
if(s){
c=s;
}
d.confirm(c, function(){
window.location.href = o.href;
});
return false;	
}
    </script>
</div>
</div>
<script type="text/javascript"
src=" /public/resource/js/artdialog/artDialog.js"></script>
<script type="text/javascript"
src=" /public/resource/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript"
src=" /public/resource/js/artdialog/artDialog.iframeTools.source.js"></script>
<script type="text/javascript" src=" /public/lang/cn/script/lang.js"></script>
<script type="text/javascript">
In.add('form_and_validation', {
path : " /public/resource/js/system/form_and_validation.js",
type : 'js'
});
In.add('xheditor', {
path : " /public/resource/js/xheditor/xheditor.js",
type : 'js'
});
In.add('mousewheel', {
path : " /public/tpl/js/jquery.mousewheel.min.js",
type : 'js'
});
//In.add('styleswitch',{path:"tpl/js/styleswitch.js",type:'js'});
In.add('table', {
path : " /public/tpl/js/table.js",
type : 'js'
});
In.add('calendar', {
path : " /public/resource/js/system/script_calendar.js"
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
