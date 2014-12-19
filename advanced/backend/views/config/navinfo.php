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
    	<h1>导航管理</h1>
    </div>
<div class="box post">
<div class="tabcon">
        	<div class="title"><h2>导航<?php echo $tag;?></h2></div>
            <div class="detail">
<form name="frm_config_basic" id="frm_config_basic" action="index.php?r=config/<?php echo $act;?>" method="post" >
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<th scope="row" width="160">菜单标题：</th>
		<td>
		<input type="text" name="nav[<?php if(isset($info)){echo $info['nav_id'];}?>][nav_title]" id="nav_title" value="<?php if(isset($info)){echo $info['nav_title'];}?>" class="txt" style="width:260px;" limit="required:true;len:1-50" 
		msg="" msgArea="obj_name_msg" title="菜单的描述，如任务大厅" />
		<span id="obj_name_msg"></span>
		</td>
	</tr>

	<tr>
		<th scope="row" width="160">菜单链接：</th>
		<td>
		<div style="float:left; padding-top:10px">
		<input type="text" name="nav[<?php if(isset($info)){echo $info['nav_id'];}?>][nav_url]" id="nav_url" value="<?php if(isset($info)){echo $info['nav_url'];}?>" class="txt" style="width:260px;"   />
		</div>
		<div style="float:left;margin-left:20px; width:50%">
		<span>如果是站内链接格式:index.php?do=task,task为下面要填写的样式;<br>外站链接格式:http://www.baidu.com,下面样式为空即可！</span></br>
		<font color="red">站内的可用链接、一经填写无法修改！</font>
		</div>
		</td>
	</tr>

	<tr>
		<th scope="row" width="160">菜单样式：</th>
		<td>
		<input type="text"  name="nav[<?php if(isset($info)){echo $info['nav_id'];}?>][nav_style]" id="nav_style"  value="<?php if(isset($info)){echo $info['nav_style'];}?>" class="txt" style="width:260px;"/>
		</td>
	</tr>

	<tr>
		<th scope="row" width="160">菜单排序.：</th>
		<td>
		<input type="text" name="nav[<?php if(isset($info)){echo $info['nav_id'];}?>][listorder]" id="listorder" value="<?php if(isset($info)){echo $info['listorder'];}?>" class="txt" style="width:260px;"/>
		</td>
	</tr>

	<tr>
		<th scope="row" width="160">新窗口打开.：</th>
		<td>
		<select name="nav[<?php if(isset($info)){echo $info['nav_id'];}?>][newwindow]" id='newwindow'>
		<option  value='1'<?php if(isset($info)&&$info['newwindow']==1){echo 'selected';}?>>是</option>
		<option  value='0'<?php if(isset($info)&&$info['newwindow']==0){echo 'selected';}?>>否</option>
		</select>
		</td>
	</tr>

	<tr>
		<th scope="row" width="160">显示模式：</th>
		<td>
		<select name="nav[<?php if(isset($info)){echo $info['nav_id'];}?>][ishide]" id="ishide">
		<option  value='0'<?php if(isset($info)&&$info['ishide']==0){echo 'selected';}?>>显示</option>
		<option  value='1'<?php if(isset($info)&&$info['ishide']==1){echo 'selected';}?>>隐藏</option>
		</select>
		</td>
	</tr>

	<tr>
		<th scope="row" width="160">设为首页：</th>
		<td>
		<select name="set_index">
		<option  value='1'>是</option>
		<option  selected="selected"  value='0'>否</option>
		</select>
		</td>
	</tr>

	<tr>
		<th scope="row">&nbsp;</th>
		<td>
		<div class="clearfix padt10">
		<button class="positive pill primary button" type="submit" name="submit" onclick="return checkForm(document.getElementById('frm_config_basic'),false)" value="nav" >
		<span class="pen icon"></span>提交</button>
		</div>
		</td>
	</tr>

</table>
</form>
            </div>
        </div>
</div>
<script type="text/javascript">
var nav_list = {"1":{"nav_id":"1","nav_url":"index.php?do=index","nav_title":"\u68e3\u682d\u3009","nav_style":"index","listorder":"1","newwindow":"0","ishide":"0"},"14":{"nav_id":"14","nav_url":"index.php?do=task_list","nav_title":"\u6d60\u8bf2\u59df\u6fb6\u0443\u5dfa","nav_style":"task","listorder":"2","newwindow":"0","ishide":"0"},"5":{"nav_id":"5","nav_url":"index.php?do=shop_list","nav_title":"\u6fde\u4f78\ue179\u935f\u55d7\u7144","nav_style":"shop","listorder":"3","newwindow":"0","ishide":"0"},"17":{"nav_id":"17","nav_url":"index.php?do=seller_list","nav_title":"\u93c8\u5d85\u59df\u935f","nav_style":"seller_list","listorder":"4","newwindow":"0","ishide":"0"},"7":{"nav_id":"7","nav_url":"index.php?do=case","nav_title":"\u93b4\u612c\u59db\u5997\u581c\u7de5","nav_style":"case","listorder":"5","newwindow":"0","ishide":"0"},"6":{"nav_id":"6","nav_url":"index.php?do=article","nav_title":"\u74a7\u52ee\ue186\u6d93\ue15e\u7e3e","nav_style":"article","listorder":"6","newwindow":"0","ishide":"0"},"26":{"nav_id":"26","nav_url":"index.php?do=square","nav_title":"\u9a9e\u57ae\u6e80","nav_style":"square","listorder":"8","newwindow":"0","ishide":"0"},"27":{"nav_id":"27","nav_url":"index.php?do=prom","nav_title":"\u93ba\u3125\u7b8d","nav_style":"prom","listorder":"10","newwindow":"0","ishide":"0"}};
$('#navs').change(function(){
var nav_info = nav_list[$(this).val()];
for(var i in nav_info){
$("#"+i).attr('value',nav_info[i]);
}
});
</script>

</div>
<script type="text/javascript"
src="/public/resource/js/artdialog/artDialog.js"></script>
<script type="text/javascript"
src="/public/resource/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript"
src="/public/resource/js/artdialog/artDialog.iframeTools.source.js"></script>
<script type="text/javascript" src="../../lang/cn/script/lang.js"></script>
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
var c = "确认删除操作？";
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
var c = "确认删除操作？";
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