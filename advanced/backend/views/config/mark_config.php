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
<h1>互评列表</h1>
</div>
<div class="box tip clearfix p_relative" id="man_tips">
    	<div class="control"><a title=关闭 href="javascript:void(0);"><b>×</b></a></div>
        <div class="title"><h2>小提示</h2></div>
        <div class="detail pad10">
            <ul>
            	<li>威客：中标金额*(X)评的百分比=+威客的能力值;雇主:任务金额*(X)评的百分比=+雇主的信誉值;X=好，中，差评</li>
            </ul>
        </div>
</div>

<div class="box list">
    	<div class="title"><h2>信誉规则列表</h2></div>
        <div class="detail">
<form method="get" action="index.php?do=config&view=mark&op=config&mark_config_id=" id="frm_user_search">
  		<table cellpadding="0" cellspacing="0">
  		  <tbody>
          <tr>
            <th>编号</th>
<th>对象</th>
<th>好评</th>
<th>中评</th>
<th>差评</th>
<th>角色</th>
<th>操作</th>
          </tr>
        <tr class="item">
            <td>2</td>
            <td>单人悬赏</td>
<td>100%</td>
            <td>50%</td>
<td>0%</td>
<td>雇主</td>
<td>
<a class="button dbl_target" href="index.php?do=config&view=mark&op=config_add&mark_config_id=2"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=config&view=mark&op=config&ac=del&mark_config_id=2" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
            <td>3</td>
            <td>多人悬赏</td>
<td>100%</td>
            <td>50%</td>
<td>0%</td>
<td>威客</td>
<td>
<a class="button dbl_target" href="index.php?do=config&view=mark&op=config_add&mark_config_id=3"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=config&view=mark&op=config&ac=del&mark_config_id=3" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
            <td>4</td>
            <td>多人悬赏</td>
<td>100%</td>
            <td>70%</td>
<td>0%</td>
<td>雇主</td>
<td>
<a class="button dbl_target" href="index.php?do=config&view=mark&op=config_add&mark_config_id=4"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=config&view=mark&op=config&ac=del&mark_config_id=4" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
            <td>5</td>
            <td>计件悬赏</td>
<td>100%</td>
            <td>50%</td>
<td>0%</td>
<td>雇主</td>
<td>
<a class="button dbl_target" href="index.php?do=config&view=mark&op=config_add&mark_config_id=5"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=config&view=mark&op=config&ac=del&mark_config_id=5" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
            <td>6</td>
            <td>计件悬赏</td>
<td>100%</td>
            <td>50%</td>
<td>0%</td>
<td>威客</td>
<td>
<a class="button dbl_target" href="index.php?do=config&view=mark&op=config_add&mark_config_id=6"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=config&view=mark&op=config&ac=del&mark_config_id=6" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
            <td>7</td>
            <td>订金招标</td>
<td>100%</td>
            <td>50%</td>
<td>0%</td>
<td>雇主</td>
<td>
<a class="button dbl_target" href="index.php?do=config&view=mark&op=config_add&mark_config_id=7"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=config&view=mark&op=config&ac=del&mark_config_id=7" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
            <td>8</td>
            <td>订金招标</td>
<td>100%</td>
            <td>50%</td>
<td>1%</td>
<td>威客</td>
<td>
<a class="button dbl_target" href="index.php?do=config&view=mark&op=config_add&mark_config_id=8"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=config&view=mark&op=config&ac=del&mark_config_id=8" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
            <td>9</td>
            <td>普通招标</td>
<td>100%</td>
            <td>50%</td>
<td>0%</td>
<td>雇主</td>
<td>
<a class="button dbl_target" href="index.php?do=config&view=mark&op=config_add&mark_config_id=9"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=config&view=mark&op=config&ac=del&mark_config_id=9" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
            <td>10</td>
            <td>普通招标</td>
<td>100%</td>
            <td>50%</td>
<td>0%</td>
<td>威客</td>
<td>
<a class="button dbl_target" href="index.php?do=config&view=mark&op=config_add&mark_config_id=10"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=config&view=mark&op=config&ac=del&mark_config_id=10" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
            <td>11</td>
            <td>威客作品</td>
<td>100%</td>
            <td>50%</td>
<td>0%</td>
<td>威客</td>
<td>
<a class="button dbl_target" href="index.php?do=config&view=mark&op=config_add&mark_config_id=11"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=config&view=mark&op=config&ac=del&mark_config_id=11" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
            <td>12</td>
            <td>威客作品</td>
<td>100%</td>
            <td>50%</td>
<td>0%</td>
<td>雇主</td>
<td>
<a class="button dbl_target" href="index.php?do=config&view=mark&op=config_add&mark_config_id=12"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=config&view=mark&op=config&ac=del&mark_config_id=12" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
            <td>13</td>
            <td>威客服务</td>
<td>100%</td>
            <td>50%</td>
<td>0%</td>
<td>威客</td>
<td>
<a class="button dbl_target" href="index.php?do=config&view=mark&op=config_add&mark_config_id=13"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=config&view=mark&op=config&ac=del&mark_config_id=13" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
            <td>14</td>
            <td>威客服务</td>
<td>100%</td>
            <td>50%</td>
<td>0%</td>
<td>雇主</td>
<td>
<a class="button dbl_target" href="index.php?do=config&view=mark&op=config_add&mark_config_id=14"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=config&view=mark&op=config&ac=del&mark_config_id=14" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
            <td>1</td>
            <td>单人悬赏</td>
<td>100%</td>
            <td>50%</td>
<td>0%</td>
<td>威客</td>
<td>
<a class="button dbl_target" href="index.php?do=config&view=mark&op=config_add&mark_config_id=1"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=config&view=mark&op=config&ac=del&mark_config_id=1" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
    		</tbody>
        </table>
</form>
        </div>
</div>
<script type="text/javascript">
$(function(){
$(".control").add(".title").click(function(){
$(".tip").children().not($(".control,.title")).slideToggle('800');
});
})
</script>
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