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
<h1>规则管理</h1>
     <div class="tool"> 
        <a href="index.php?r=config/mark"        class="here">信誉规则管理</a>
        <a href="index.php?r=config/mark_edit" >增加信誉规则</a>
</div>
</div>
<div class="box tip clearfix p_relative" id="man_tips">
    	<div class="control"><a title=关闭 href="javascript:void(0);"><b>×</b></a></div>
        <div class="title"><h2>小提示</h2></div>
        <div class="detail pad10">
            <ul>
            	<li>角色雇主与买家等同，角色威客与卖家等同,前端显示会根据不同的角色显示对应的头衔与图片</li>
            </ul>
        </div>
</div>


<div class="box list">
    	<div class="title"><h2>信誉规则列表</h2></div>
        <div class="detail">
<form method="" action="" id="frm_user_search">
  		<table cellpadding="0" cellspacing="0">
  		  <tbody>
          <tr>
            <th>编号</th>
<th>信誉值</th>
<th>能力值</th>
<th>买家头衔</th>
<th>卖家头衔</th>
<th>买家图标</th>
<th>卖家图标</th>
<th>操作</th>
          </tr>
        <tr class="item">
            <td>1</td>
            <td>200</td>
<td>200</td>
            <td>一级雇主</td>
<td>一级威客</td>
<td><a href="/public/data/uploads/sys/mark/211574fbede3ae7ae9.gif?fid=2881" target="_blank"><img src="/public/data/uploads/sys/mark/211574fbede3ae7ae9.gif?fid=2881" /></a></td>
<td><a href="/public/data/uploads/sys/mark/309044f3b07ef87c95.gif?fid=2067" target="_blank"><img src="/public/data/uploads/sys/mark/309044f3b07ef87c95.gif?fid=2067" /></a></td>
<td>
<a class="button dbl_target" href="index.php?do=config&view=mark&op=edit&mark_rule_id=1"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=config&view=mark&op=del&mark_rule_id=1" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
            <td>2</td>
            <td>500</td>
<td>500</td>
            <td>二级雇主</td>
<td>二级威客</td>
<td><a href="/public/data/uploads/sys/mark/98734f3b080f7c2ee.gif?fid=2068" target="_blank"><img src="/public/data/uploads/sys/mark/98734f3b080f7c2ee.gif?fid=2068" /></a></td>
<td><a href="/public/data/uploads/sys/mark/189344f3b081362561.gif?fid=2069" target="_blank"><img src="/public/data/uploads/sys/mark/189344f3b081362561.gif?fid=2069" /></a></td>
<td>
<a class="button dbl_target" href="index.php?do=config&view=mark&op=edit&mark_rule_id=2"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=config&view=mark&op=del&mark_rule_id=2" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
            <td>3</td>
            <td>1000</td>
<td>1000</td>
            <td>三级雇主</td>
<td>三级威客</td>
<td><a href="/public/data/uploads/sys/mark/98544f3b082a11c00.gif?fid=2070" target="_blank"><img src="/public/data/uploads/sys/mark/98544f3b082a11c00.gif?fid=2070" /></a></td>
<td><a href="/public/data/uploads/sys/mark/306874f3b082e22fc3.gif?fid=2071" target="_blank"><img src="/public/data/uploads/sys/mark/306874f3b082e22fc3.gif?fid=2071" /></a></td>
<td>
<a class="button dbl_target" href="index.php?do=config&view=mark&op=edit&mark_rule_id=3"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=config&view=mark&op=del&mark_rule_id=3" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
            <td>4</td>
            <td>2000</td>
<td>2000</td>
            <td>四级雇主</td>
<td>四级威客</td>
<td><a href="/public/data/uploads/sys/mark/140154f3b084cba568.gif?fid=2072" target="_blank"><img src="/public/data/uploads/sys/mark/140154f3b084cba568.gif?fid=2072" /></a></td>
<td><a href="/public/data/uploads/sys/mark/126844f3b085182758.gif?fid=2073" target="_blank"><img src="/public/data/uploads/sys/mark/126844f3b085182758.gif?fid=2073" /></a></td>
<td>
<a class="button dbl_target" href="index.php?do=config&view=mark&op=edit&mark_rule_id=4"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=config&view=mark&op=del&mark_rule_id=4" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
            <td>5</td>
            <td>3000</td>
<td>3000</td>
            <td>五级雇主</td>
<td>五级威客</td>
<td><a href="/public/data/uploads/sys/mark/262274f3b086f5cbfe.gif?fid=2074" target="_blank"><img src="/public/data/uploads/sys/mark/262274f3b086f5cbfe.gif?fid=2074" /></a></td>
<td><a href="/public/data/uploads/sys/mark/228324f3b0872c6f04.gif?fid=2075" target="_blank"><img src="/public/data/uploads/sys/mark/228324f3b0872c6f04.gif?fid=2075" /></a></td>
<td>
<a class="button dbl_target" href="index.php?do=config&view=mark&op=edit&mark_rule_id=5"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=config&view=mark&op=del&mark_rule_id=5" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
            <td>6</td>
            <td>3500</td>
<td>3500</td>
            <td>六级雇主</td>
<td>六级威客</td>
<td><a href="/public/data/uploads/sys/mark/188574f3b088a50adf.gif?fid=2076" target="_blank"><img src="/public/data/uploads/sys/mark/188574f3b088a50adf.gif?fid=2076" /></a></td>
<td><a href="/public/data/uploads/sys/mark/28624f3b088d957db.gif?fid=2077" target="_blank"><img src="/public/data/uploads/sys/mark/28624f3b088d957db.gif?fid=2077" /></a></td>
<td>
<a class="button dbl_target" href="index.php?do=config&view=mark&op=edit&mark_rule_id=6"><span class="pen icon"></span>编辑</a>
<a class="button" href="index.php?do=config&view=mark&op=del&mark_rule_id=6" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
           <tr>
          	<td colspan="8">
          		
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