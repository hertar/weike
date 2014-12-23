<?php
use yii\widgets\LinkPager;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<h1>作品订单管理</h1>
<div class="tool">
<a href="index.php?r=store/order"class="here">订单列表</a>
<!--<a href="index.php?do=model&model_id=6&view=list">作品列表</a> -->
</div>
</div>
<!--页头结束-->

<!--提示结束-->

<div class="box search p_relative">
<div class="title">
<h2>搜索</h2>
</div>
<div class="detail" id="detail">
<form method="post"
action="index.php?do=model&model_id=6&view=order"
id="frm_art_search">
<input type="hidden" name="page" value="1">
<table cellpadding="0" cellspacing="0">
<tbody>
<tr>
<th>编号</th>
<td><input type="text" class="txt" name="w[order_id]"
id="ida" value="" onkeyup="clearstr(this);">
</td>
<th>下订单人</th>
<td><input type="text" class="txt" name="w[order_username]"
id="title" value=""></td>
<th>订单状态</th>
<td><select name="w[order_status]">
<option value="">请选择订单状态</option>
<option   value="wait">等待买家付款</option> <option   value="ok">买家已付款</option> <option   value="send">卖家已服务</option> <option   value="confirm">交易完成</option> <option   value="close">交易关闭</option> <option   value="arbitral">订单仲裁</option> <option   value="arb_confirm">交易完成</option> </select></td>
</tr>
<tr>
<th>结果排序</th>
<td><select name="ord[]">
<option value="order_id"  selected="selected">默认排序</option>
<option value="order_time" >下单时间</option>
</select> <select name="ord[]" onchange="orderJump(this.value)">
                                <option  value="asc"  <?php if($ord=='asc'){echo "selected";}?>>递增</option>
                                <option  value="desc"  <?php if($ord=='desc'){echo "selected";}?>>递减</option>
                                </select></td>
<th>显示结果</th>
<td colspan="3"><select name="page_size" onchange="pageJump(value)">
     <option value="10" <?php if($pagesize==10){echo "selected";}?>>每页显示10条</option>
     <option value="5" <?php if($pagesize==5){echo "selected"; }?>>每页显示5条</option>
     <option value="3" <?php if($pagesize==3){echo "selected"; }?>>每页显示3条</option>
</select>
<button class="pill" type="button" value="搜索"
name="sbt_search"  onclick="search_task()">
<span class="icon magnifier">&nbsp;</span>搜索</button></td>
</tr>
<tr>

</tr>
</tbody>
</table>
</form>
</div>
</div>
<!--搜索结束-->


<div class="box list">
<div class="title">
<h2>订单列表</h2>
</div>
<div class="detail">
<form method="post" action="" id="frm_art_search">
<input type="hidden" name="w['page_size']" value="10">
<div id="ajax_dom">
<input type="hidden" name="page" value="1">
<table cellspacing="0" cellpadding="0">
<tr>
<th></th>
<th>ID</th>
<th>订单名字</th>
<th>订单金额</th>
<th>订单状态</th>
<th>下订单人</th>
<th>下单时间</th>
<th>操作</th>
</tr>
              <?php             foreach($list as $key=>$val)
      {?>
<tr class="item">
<td><input type="checkbox" name="ckb"
value="<?php echo $val['order_id']?>" class="checkbox"></td>
<td><?php echo $val['order_id']?></td>
<td class="obj_link">
<?php echo $val['order_name']?></td>
<td>￥<?php echo $val['order_amount']?>元</td>
<td>
    <?php if( $val['order_status']==1){?>
    未付款
    <?php }else{?>
    已付款
    <?php }?>
</td>
<td><?php echo $val['order_username']?></td>
<td>
<?php echo date("Y-m-d H:i:s",$val['order_time'])?></td>
<td><a onclick="return cdel(this);"
href='index.php?r=store/del_order&id=<?php echo $val['order_id'] ?>'
class="button"><span class="trash icon"></span>删除</a>
</td>
</tr>
      <?php } ?>
<tr>
<td colspan="9">
<div class="page fl_right"></div>
<div class="clearfix">
<input type="checkbox" class="checkbox" id="checkbox"
onclick="checkall();" /> <label for="checkbox">全选</label>
<input type="hidden" name="sbt_action"
value="批量删除" />
<button class="pill negative" type="submit"
value="批量删除" name="sbt_action"
onclick="return pdel('frm_art_search');">
<span class="icon trash">&nbsp;</span>批量删除</button>
</div>
</td>
</tr>
</table>
    <div class="page"><?= LinkPager::widget(['pagination' => $pages]); ?></div>
</div>
</form>
</div>
</div>
<!--主体结束-->
<script type="text/javascript">	
var url_link = "http://127.0.0.1/weike/";
$(function(){
$(".obj_link a").each(function(){
this.href=this.href.replace(url_link+"control/admin/",url_link);
this.target="_blank";
})
})
function show_detail(order_id){
var url = 'index.php?do=model&model_id=6&view=order_detail&order_id='+order_id;
art.dialog.open(url,{title:"排序#"+order_id+"号详情",height:400,width:700});
}
function go_detail(order_id){
var url = 'index.php?do=model&model_id=6&view=order_detail&order_id='+order_id;
location.href = url;
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
function pageJump(value){
location.href="index.php?r=store/server_order&pagesize="+value;
}
function orderJump(value){
location.href="index.php?r=store/server_order&ord="+value;
}
function search_task(){
    var id= document.getElementById("ida").value;
    var title= document.getElementById("title").value;
    location.href="index.php?r=store/server_order&search_id="+id+"&search_title="+title;
}
</script>
</body>
</html>
