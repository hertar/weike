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
<h1>用户管理</h1>
     <div class="tool"> 
        <a href="index.php?r=user/user_list" class="here">用户管理</a>
        <a href="index.php?r=user/user_add">添加用户</a>
        <a href="index.php?r=user/charge">手动充值</a>
</div>
</div>
<!--页头结束--> 

      <div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
<form action="#" method="post">
        	<input type="hidden" name="do"   value="user">
<input type="hidden" name="view" value="list">
<input type="hidden" name="type" value="">
<input type="hidden" name="page" value="1">
<table cellspacing="0" cellpadding="0">
 <tbody>
 	<tr>
 		<th>用户ID</th>
<td><input type="text" class="txt" name="space[uid]" value="" onkeyup="clearstr(this);"></td>
<th>用户名</th>
<td><input type="text" class="txt" name='space[username]' value="" onkeyup="clearspecial(this);"></td>
 	</tr>

<tr>
<th>显示条数</th>
<td>
<select name="slt_page_size" class="ps vm">
<option value="10" selected="selected">每页显示10</option>
<option value="20" >每页显示20</option>
<option value="30" >每页显示30</option>
</select>
</td>
<th>结果排序</th>
<td>


<select name="ord[]">
                           <option value="uid"  selected="selected">默认排序</option>
                           <option value="reg_time" >时间</option>
                      </select>
                      <select name="ord[]">
                            <option selected="selected"  value="desc">递减</option>
                            <option  value="asc">递增</option>
                      </select>
</td>
</tr>
<tr>
<th>用户状态</th>
<td>
<select name="slt_static" style="width:60px;">
<option value="0" selected="selected"> 所有的 </option>
<option value="1" > 普通 </option>
<option value="2" > 禁用 </option>
<option value="3" > 待激活 </option>
</select>
<button type="submit" name="sbt_search" value="搜索" class="pill" />
<span class=icon magnifier>&nbsp;</span>搜索</button>
</td>
</tr>
 </tbody>
</table>
</form>
        </div>
 </div>

    <div class="box list">
    	<div class="title"><h2>用户列表</h2></div>
        <div class="detail">
<form method="post" action="#" id="frm_user_search">
<div id="ajax_dom">
<input type="hidden" name="page" value="1" />
  		<table cellpadding="0" cellspacing="0">
  		<thead>
          <tr>
          	<th width="15"><input type="checkbox" id="checkbox" onclick="checkall()"></th>
            <th width="20" >UID</th>
            <th style="width:40px;">用户名</th>
<th width="45"  class="wraphide">用户组</th>
<th width="60"  class="wraphide" >用户状态</th>
<th width="90">注册时间</th>
<th width="45" >注册ip</th>
<th width="45">代金券</th>
<th width="45">余额</th>
<th width="25%">操作</th>
 
         </tr>
 </thead>
 <tbody> 
     <?php
        foreach ($row as $v) {
           
     ?>
        <tr class="item">
            <td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="10"></td>
            <td class="td25"><?php echo $v['uid']?></td>
            <td class="td25 wraphide"><a href="javascript:void(0)" ><?php echo $v['username']?></a></td>
            <td class="wraphide"><?php echo $v['groupname']?></td>
<td class="wraphide">普通</td>
<td><?php echo $v['reg_time']?></td>
            <td><div class="ws_break" style="width:70%;"><?php echo $v['reg_ip']?></div></td>
            <td><div class="ws_break" style="width:70%;"><?php echo $v['credit']?></div></td>
<td><div class="ws_break" style="width:70%;">￥<?php echo $v['balance']?>元</div></td>
 
<td>
<a class="button dbl_target" href="index.php?do=user&view=add&edituid=10&page=1"><span class="pen icon"></span>编辑</a>

<a class="button" href="index.php?do=user&view=custom_add&op=add&edituid=10&page=1"><span class="cog icon"></span>权限设置</a>
 <a class="button" href="index.php?do=user&view=list&op=disable&edituid=10&page=1"><span class="lock icon"></span>禁用</a> 
 <a class="button" href="index.php?do=user&view=list&op=del&edituid=10" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
 </tr>
     <?php
        }
     ?>
 </tbody>
 <tfoot>
          <tr>
           <td colspan="10">
          	
<div class="clearfix">
            
<label for="checkbox">全选</label>　
<input type="hidden" name="sbt_action" class="sbt_action" />
<button type="submit" name="sbt_action" value="批量禁用" class="pill negative" onclick="return batch_act(this,'frm_user_search');" ><span class="lock icon"></span>批量禁用</button>
<button type="submit" name="sbt_action" value="批量启用" class="pill positive" onclick="return batch_act(this,'frm_user_search');" ><span class="unlock icon"></span>批量启用</button>
<button type="submit" name="sbt_action" value="批量删除" class="pill negative" onclick="return batch_act(this,'frm_user_search');" ><span class="icon trash"></span>批量删除</button>
 
<button type="button" name="sbt_add"    value="添加新用户" class="positive primary pill button" onclick="document.location.href='index.php?do=user&view=add'"><span class="check icon"></span>添加新用户</button>
 
    </div>

   </td>
 </tr>
 </tfoot>
        </table>
<div class="page"></div>
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
