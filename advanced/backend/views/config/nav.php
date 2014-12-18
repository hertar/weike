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
<div class="box list">
<div class="title"><h2>自定义导航</h2></div>
        <div class="detail">
<form name="frm_config_basic" id="frm_config_basic" action="index.php?r=config/navedit" method="post" enctype='application/x-www-form-urlencoded'>
<table cellspacing="0" cellpadding="0">
<tr>
<th width="150">标题</th>
<th width="200" >链接</th>
<th width="12%">样式</th>
<th width="100">排序</th>
<th width="120">新窗口打开</th>
<th width="100">显示模式</th>
<th width="200">操作</th>
</tr>
<?php for($i=0;$i<count($info);$i++){?>
	<tr id="olditem_<?php echo $info[$i]['nav_id']?>" class="item">
		<td style='font-weight:bold'>
		<input type="text" value="<?php echo $info[$i]['nav_title']?>" name="nav[<?php echo $info[$i]['nav_id']?>][nav_title]" class='txt' size='12'>
		</td>

		<td><?php echo $info[$i]['nav_url']?></td>

		<td style="width:80px;">
		<input type="text" value="<?php echo $info[$i]['nav_style']?>" name="nav[<?php echo $info[$i]['nav_id']?>][nav_style]" class='txt' size='10'>
		</td>

		<td style="width:30px;">
		<input type="text" value="<?php echo $info[$i]['listorder']?>" name="nav[<?php echo $info[$i]['nav_id']?>][listorder]" class='txt' size='3'>
		</td>

		<td class="wraphide">
		<label><?php if($info[$i]['newwindow']==0){echo '否';}else{echo '是';}?></label>
		</td>

		<td class="wraphide">
		<label>
		<?php 
			switch($info[$i]['ishide'])
			{
				case 0:echo '全部显示';break;
				case 1:echo '全部隐藏';break;
				case 2:echo '首页隐藏';break;
				case 3:echo '商城隐藏';break;
			}
		?>
		</label>
		</td>

		<td>
		<a href="index.php?r=config/navinfo" class="button dbl_target">
		<span class="pen icon"></span>编辑</a>
		<a href=""  onclick="return cdel(this);" class="button">
		<span class="trash icon"></span>删除</a>
		<a href="" class="button">
		<span class="check icon"></span>设为首页</a>
		</td>
	</tr>
<?php }?>
<tbody id='newitemlist'></tbody>
	<tr>
		<td colspan="6">
		<div class="clearfix">
	   <button onclick="location.href='index.php?r=config/navinfo'" class="positive pill negative" type="button">
			<span class="plus icon"></span>添加</button>
<!--
			<input type="hidden" name="sbt_edit" value="1">
-->
			<button class="positive pill negative" type="submit" name='submit' value='nav'>
			<span class="check icon"></span>提交更改</button>
		</div>
		</td>
	</tr>
</table>
</form>
      </div>
</div>
<!--主体结束-->

    
<script type="text/javascript">
function modify(){
art.dialog.confirm('确定提交更改吗?',function(){
$('#frm_config_basic').submit();
});
}
</script>


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