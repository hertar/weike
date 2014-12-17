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
        	<form name="frm_config_basic" id="frm_config_basic" action="index.php?do=config&view=nav" method="post" enctype='application/x-www-form-urlencoded'>
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

                        <tr id="olditem_1" class="item">
            	               	 	<td style='font-weight:bold'>
              			<input type="text" value="首页" name="nav[1][nav_title]" class='txt' size='12'>
(默认首页)
 	</td>
                                <td>                	index.php?do=index</td>
                <td style="width:80px;">
<input type="text" value="index" name="nav[1][nav_style]" class='txt' size='10'>
</td>
               	<td style="width:30px;">
<input type="text" value="1" name="nav[1][listorder]" class='txt' size='3'>
</td>
                <td class="wraphide">
                	<label>否</label>
</td>
                <td class="wraphide">
                	<label>显示</label>
                </td>
                <td>
                <a href="index.php?do=config&view=nav&nav_id=1&ac=edit" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                <a href="index.php?do=config&view=nav&nav_id=1&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
            	<a href="index.php?do=config&view=nav&nav_style=index&ac=set_index" class="button"><span class="check icon"></span>设为首页</a>
            </td>
            </tr>
            <tr id="olditem_14" class="item">
            	                	<td>
              			<input type="text" value="任务大厅" name="nav[14][nav_title]" class='txt' size='12'>
</td>
                                <td>                	index.php?do=task_list</td>
                <td style="width:80px;">
<input type="text" value="task" name="nav[14][nav_style]" class='txt' size='10'>
</td>
               	<td style="width:30px;">
<input type="text" value="2" name="nav[14][listorder]" class='txt' size='3'>
</td>
                <td class="wraphide">
                	<label>否</label>
</td>
                <td class="wraphide">
                	<label>显示</label>
                </td>
                <td>
                <a href="index.php?do=config&view=nav&nav_id=14&ac=edit" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                <a href="index.php?do=config&view=nav&nav_id=14&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
            	<a href="index.php?do=config&view=nav&nav_style=task&ac=set_index" class="button"><span class="check icon"></span>设为首页</a>
            </td>
            </tr>
            <tr id="olditem_5" class="item">
            	                	<td>
              			<input type="text" value="威客商城" name="nav[5][nav_title]" class='txt' size='12'>
</td>
                                <td>                	index.php?do=shop_list</td>
                <td style="width:80px;">
<input type="text" value="shop" name="nav[5][nav_style]" class='txt' size='10'>
</td>
               	<td style="width:30px;">
<input type="text" value="3" name="nav[5][listorder]" class='txt' size='3'>
</td>
                <td class="wraphide">
                	<label>否</label>
</td>
                <td class="wraphide">
                	<label>显示</label>
                </td>
                <td>
                <a href="index.php?do=config&view=nav&nav_id=5&ac=edit" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                <a href="index.php?do=config&view=nav&nav_id=5&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
            	<a href="index.php?do=config&view=nav&nav_style=shop&ac=set_index" class="button"><span class="check icon"></span>设为首页</a>
            </td>
            </tr>
            <tr id="olditem_17" class="item">
            	                	<td>
              			<input type="text" value="服务商" name="nav[17][nav_title]" class='txt' size='12'>
</td>
                                <td>                	index.php?do=seller_list</td>
                <td style="width:80px;">
<input type="text" value="seller_list" name="nav[17][nav_style]" class='txt' size='10'>
</td>
               	<td style="width:30px;">
<input type="text" value="4" name="nav[17][listorder]" class='txt' size='3'>
</td>
                <td class="wraphide">
                	<label>否</label>
</td>
                <td class="wraphide">
                	<label>显示</label>
                </td>
                <td>
                <a href="index.php?do=config&view=nav&nav_id=17&ac=edit" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                <a href="index.php?do=config&view=nav&nav_id=17&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
            	<a href="index.php?do=config&view=nav&nav_style=seller_list&ac=set_index" class="button"><span class="check icon"></span>设为首页</a>
            </td>
            </tr>
            <tr id="olditem_7" class="item">
            	                	<td>
              			<input type="text" value="成功案例" name="nav[7][nav_title]" class='txt' size='12'>
</td>
                                <td>                	index.php?do=case</td>
                <td style="width:80px;">
<input type="text" value="case" name="nav[7][nav_style]" class='txt' size='10'>
</td>
               	<td style="width:30px;">
<input type="text" value="5" name="nav[7][listorder]" class='txt' size='3'>
</td>
                <td class="wraphide">
                	<label>否</label>
</td>
                <td class="wraphide">
                	<label>显示</label>
                </td>
                <td>
                <a href="index.php?do=config&view=nav&nav_id=7&ac=edit" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                <a href="index.php?do=config&view=nav&nav_id=7&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
            	<a href="index.php?do=config&view=nav&nav_style=case&ac=set_index" class="button"><span class="check icon"></span>设为首页</a>
            </td>
            </tr>
            <tr id="olditem_6" class="item">
            	                	<td>
              			<input type="text" value="资讯中心" name="nav[6][nav_title]" class='txt' size='12'>
</td>
                                <td>                	index.php?do=article</td>
                <td style="width:80px;">
<input type="text" value="article" name="nav[6][nav_style]" class='txt' size='10'>
</td>
               	<td style="width:30px;">
<input type="text" value="6" name="nav[6][listorder]" class='txt' size='3'>
</td>
                <td class="wraphide">
                	<label>否</label>
</td>
                <td class="wraphide">
                	<label>显示</label>
                </td>
                <td>
                <a href="index.php?do=config&view=nav&nav_id=6&ac=edit" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                <a href="index.php?do=config&view=nav&nav_id=6&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
            	<a href="index.php?do=config&view=nav&nav_style=article&ac=set_index" class="button"><span class="check icon"></span>设为首页</a>
            </td>
            </tr>
            <tr id="olditem_26" class="item">
            	                	<td>
              			<input type="text" value="广场" name="nav[26][nav_title]" class='txt' size='12'>
</td>
                                <td>                	index.php?do=square</td>
                <td style="width:80px;">
<input type="text" value="square" name="nav[26][nav_style]" class='txt' size='10'>
</td>
               	<td style="width:30px;">
<input type="text" value="8" name="nav[26][listorder]" class='txt' size='3'>
</td>
                <td class="wraphide">
                	<label>否</label>
</td>
                <td class="wraphide">
                	<label>显示</label>
                </td>
                <td>
                <a href="index.php?do=config&view=nav&nav_id=26&ac=edit" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                <a href="index.php?do=config&view=nav&nav_id=26&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
            	<a href="index.php?do=config&view=nav&nav_style=square&ac=set_index" class="button"><span class="check icon"></span>设为首页</a>
            </td>
            </tr>
            <tr id="olditem_27" class="item">
            	                	<td>
              			<input type="text" value="推广" name="nav[27][nav_title]" class='txt' size='12'>
</td>
                                <td>                	index.php?do=prom</td>
                <td style="width:80px;">
<input type="text" value="prom" name="nav[27][nav_style]" class='txt' size='10'>
</td>
               	<td style="width:30px;">
<input type="text" value="10" name="nav[27][listorder]" class='txt' size='3'>
</td>
                <td class="wraphide">
                	<label>否</label>
</td>
                <td class="wraphide">
                	<label>显示</label>
                </td>
                <td>
                <a href="index.php?do=config&view=nav&nav_id=27&ac=edit" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                <a href="index.php?do=config&view=nav&nav_id=27&ac=del"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
            	<a href="index.php?do=config&view=nav&nav_style=prom&ac=set_index" class="button"><span class="check icon"></span>设为首页</a>
            </td>
            </tr>
            <tbody id='newitemlist'></tbody>

            <tr>
            	<td colspan="6">
<div class="clearfix">
                  <button onclick="location.href='index.php?do=config&view=nav&ac=edit'" class="positive pill negative" type="button"><span class="plus icon"></span>添加</button>
           		  <input type="hidden" name="sbt_edit" value="1">
  <button onclick="modify();" class="positive pill negative" type="button"><span class="check icon"></span>提交更改</button>
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