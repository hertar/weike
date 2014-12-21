<?php 
use app\models\Industry;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>keke admin</title>
<link href="/public/tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="/public/resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="/public/tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="/public/tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="/public/resource/js/jquery.js"></script>
<script type="text/javascript" src="/public/resource/js/system/keke.js"></script>
<script type="text/javascript" src="/public/resource/js/in.js"></script>
</head>
<body class="frame_body">
<div class="frame_content">
<div id="append_parent"></div> 
<div class="page_title">
    	<h1>技能管理</h1>
        <div class="tool">
        <a href="index.php?r=task/skill" class="here">技能列表</a>
        <a href="index.php?r=task/skill_edit">技能添加</a>

    	</div>
</div>

<div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
           
<form action="index.php?r=task/skill&c=" method="post">
<table cellspacing="0" cellpadding="0">
<tbody>
	<tr>
		<th>所属行业</th>
		<td>
		<select class="ps vm" name="indus_id" id="catid">
		<option value=''>请选择</option>
		<?php for($i=0;$i<count($indus);$i++){?>
		<option value='<?php echo $indus[$i]['indus_id']?>' 
		<?php if(isset($condition)){if($indus[$i]['indus_id']==$condition['indus_id']){echo 'selected';}}?>>
		<?php
			if($indus[$i]['indus_pid']!=0){echo '&nbsp;&nbsp;|-';}
			echo $indus[$i]['indus_name'];
		?>
		</option>
		<?php }?>
		</select>
		</td>
		<th>技能名称*</th>
		<td><input type="text" value="<?php if(isset($condition)){ echo $condition['skill_name'];}?>" name="skill_name" class="txt"/>*支持模糊查询</td>
		<th></th>
		<td></td>
	</tr>

	<tr>
	<th>结果排序</th>
	<td>
	<select name="order">
	<option value="skill_id" <?php if(isset($condition)){if($condition['order']=="skill_id"){echo 'selected';}}?>>
	默认排序</option>
	<option value="on_time" <?php if(isset($condition)){if($condition['order']=="on_time"){echo 'selected';}}?>>
	添加时间</option>
	</select>
	<select name="desc">
	<option  value="asc"<?php if(isset($condition)){if($condition['desc']=="asc"){echo 'selected';}}?>>
	递增</option>
	<option  value="desc"<?php if(isset($condition)){if($condition['desc']=="desc"){echo 'selected';}}?>>
	递减</option>
	</select>
	</td>
	<th>显示结果</th>
	<td><select name="page_size">
	<option value="10" <?php if(isset($condition)){if($condition['page_size']=="10"){echo 'selected';}}?>>
	每页显示10</option>
	<option value="20" <?php if(isset($condition)){if($condition['page_size']=="20"){echo 'selected';}}?>>
	每页显示20</option>
	<option value="30" <?php if(isset($condition)){if($condition['page_size']=="30"){echo 'selected';}}?>>
	每页显示30</option>
	</select>
	<button class="pill" type="submit" value="skill" name="submit">
	<span class="icon magnifier">&nbsp;</span>搜索</button></td>
	</tr>

</tbody>
</table>
</form>

        </div>
    </div>
    <!--搜索结束-->

<div class="box list">
    	<div class="title"><h2>技能列表</h2></div>
        <div class="detail">
<form method="post" id="skill_op" action="index.php?r=task/skilldel">
<table cellspacing="0" cellpadding="0">
<tbody>
	<tr>
	<th width="15"><input type="checkbox" onclick="checkall();" id="checkbox" name="checkbox"/>全选</th>
	<th width="20%">所属行业</th>
	<th width="25%">技能名称</th>
	<th width="10%">排序</th>
	<th width="15%">添加时间</th>
	<th width="20%">操作</th>
	</tr>
<?php for($i=0;$i<count($skill);$i++){?>
<tr class="item">
<td class="td25">
<input type="checkbox" class="checkbox" name="ckb[]" value="<?php echo $skill[$i]['skill_id']?>">
</td>
<td class="td28">
<?php
	$res=Industry::findOne($skill[$i]['indus_id']);
	echo $res['indus_name'];
?>
</td>
<td><?php echo $skill[$i]['skill_name']?></td>
<td><?php echo $skill[$i]['listorder']?></td>
<td><?php echo date('Y-m-d',$skill[$i]['on_time']);?>
</td>
<td>
<a href="index.php?r=task/skill_edit&id=<?php echo $skill[$i]['skill_id']?>" class="button dbl_target">
<span class="pen icon"></span>编辑</a>
<a href="index.php?r=task/skilldel&id=<?php echo $skill[$i]['skill_id']?>"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
</tr>
<?php }?>
<tr>
<td colspan="7">
<div class="clearfix">
<label for="checkbox">全选</label>
<input type="hidden" name="sbt_action" class="sbt_action"/>
<button name="sbt_action" type="submit" onclick="return batch_act(this,'skill_op');" class="pill negative">
<span class="icon trash"></span>批量删除</button>
</div>
</td>
</tr>
</tbody>
</table>
<div class="page">
<?php echo $page;?>
<!--
<a class="selected">1</a>
<a href="">2</a>
<a href="">3</a>
<a href="">4</a>
<a href="">5</a>
<a href="">下一页>></a>
<span class="fl_l"> 1 / 5页</span>
-->
</div>
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
