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
    	<h1>行业管理</h1>
        <div class="tool">
            <a href="index.php?r=task/industry">行业列表</a>
            <a href="index.php?r=task/industry_edit" class="here"><?php echo $tag;?>行业</a> 
        </div>
</div>

<div class="box post">
    <div class="tabcon">
        	<div class="title"><h2><?php echo $tag;?>行业</h2></div>       	
            <div class="detail">
<form method="post" action="index.php?r=task/<?php echo $act;?>" id="frm_indus_edit" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php if(isset($info)){echo $info['indus_id'];}else{echo 0;}?>">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<th scope="row" width="130">父行业：</th>
	<td> 
	<select name="indus_pid" id="slt_indus_id" style=" width:270px;" limit = "required:true;type:int" msg =请选择行业分类 title=你准备哪类的行业呢？msgArea="msg_indus_id">
	<option value="0">置顶</option>
	<?php for($i=0;$i<count($indus);$i++){?>
	<option value="<?php echo $indus[$i]['indus_id']?>" 
	<?php if(isset($info)&&$info['indus_pid']==$indus[$i]['indus_id']){echo 'selected';}?>>
	<?php echo $indus[$i]['indus_name']?></option>
	<?php }?>
	</select>
	<span id="msg_indus_id" style="color:red;"></span> 
	</td>
	</tr>

	<tr>
	<th scope="row">行业名称：</th>
	<td><input type="text" maxlength="100"  class="txt" style=" width:260px;" name="indus_name" value="<?php if(isset($info)){echo $info['indus_name'];}?>" limit = "required:false" msg =请填写行业名称! title=请填写行业名称! msgArea="msg_indus_name"/>
	<span id="msg_indus_name"></span>
	</td>
	</tr>

	<tr>
	<th scope="row">结果排序：</th>
	<td>
	<input type="text"  class="txt" id="txt_listorder" name="listorder" value="<?php if(isset($info)){echo $info['listorder'];}?>" maxlength="5" limit = "required:true;type:int" onkeyup="clearstr(this)" msg =请填写行业排序! stitle=请填写行业排序! msgArea="slt_txt_listorder"/><span id="slt_txt_listorder"></span>   
	</td>
	</tr>

	<tr>
	<th scope="row">是否推荐：</th>
	<td>
	<p>
	<label>
	<input type="checkbox" name="is_recommend" value="1"  
	<?php if(isset($info)&&$info['is_recommend']==1){echo 'checked';}?>/>&nbsp;是</label> <br />
	</p>
	</td>
	</tr>

	<tr>
	<th scope="row">&nbsp;</th>
	<td>
	<button name="submit" value="industry" onclick="return checkForm(document.getElementById('frm_indus_edit'),false)" class="positive primary pill button" type="submit">
	<span class="check icon"></span>提交</button>
	</td>
	</tr>
</table>
</form>
              </div>
       </div>           
</div>
<!--主体结束-->
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
