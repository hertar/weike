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
    	<h1>增值服务管理</h1>
 <div class="tool"> 
        <a href="index.php?r=payitem/witkey" >威客</a>
        <a href="index.php?r=payitem/employer" class="here">雇主</a>
</div>
    </div>
  <div class="box list">
  	<div class="title"><h2>增值服务管理</h2></div>
        	<div class="detail">
        		<form action="index.php?do=payitem&view=index&op=add" method="post">
        			 <table cellpadding="0" cellspacing="0">
            	<tr>
               <!-- <th scope="row">
                    服务id                </th>-->
                <th scope="row">
                    启用状态                </th>
               <th scope="row">
                    服务名称                </th>
                <th scope="row">
                  服务图标                </th>
            
               <th scope="row">
                    服务费用                </th>
           
                <th scope="row" >
                   用户类型                </th>
                <th scope="row">
                    设为禁用                </th>
<th scope="row">
       	         配置       
                </th>
<th scope="row">
                  卸载                </th>

            </tr>
        
            <tr>
            <!--    <td>
                    3                </td>-->
                <td>
                                        是                </td>
                <td>
                    任务加急                </td>
                <td>
                   <img src="/public/data/uploads/sys/tools/29088512d80ca7c44d.gif?fid=3711" />
                </td>
                <td>
                   ￥10.00元/天                </td>
               
                <td>
                     雇主                </td>
                <td>
                    <a href="index.php?do=payitem&view=index&user_type=employer&op=close&item_id=3&payitem_name=任务加急"  class="button"><span class="cross icon"></span>设为禁用</a>
                    </td>
<td>
<a href="index.php?do=payitem&view=config&item_code=urgent" class="button"><span class="cog icon"></span>配置</a>
</td>
<td>
<a href="index.php?do=payitem&view=index&item_id=3&op=del" onclick="return confirm(确定要卸载此任务模型吗？);" class="button"><span class="downarrow icon"></span>卸载</a>
                </td>
            </tr>
 
   
            <tr>
            <!--    <td>
                    2                </td>-->
                <td>
                                        是                </td>
                <td>
                    任务置顶                </td>
                <td>
                   <img src="/public/data/uploads/sys/tools/74064f3b0ba6a17c3.gif?fid=2095" />
                </td>
                <td>
                   ￥20.00元/天                </td>
               
                <td>
                     雇主                </td>
                <td>
                    <a href="index.php?do=payitem&view=index&user_type=employer&op=close&item_id=2&payitem_name=任务置顶"  class="button"><span class="cross icon"></span>设为禁用</a>
                    </td>
<td>
<a href="index.php?do=payitem&view=config&item_code=top" class="button"><span class="cog icon"></span>配置</a>
</td>
<td>
<a href="index.php?do=payitem&view=index&item_id=2&op=del" onclick="return confirm(确定要卸载此任务模型吗？);" class="button"><span class="downarrow icon"></span>卸载</a>
                </td>
            </tr>
 
   
            <tr>
            <!--    <td>
                    4                </td>-->
                <td>
                                        是                </td>
                <td>
                    标记地图                </td>
                <td>
                   <img src="/public/data/uploads/sys/tools/288854f3b0beadf0a3.gif?fid=2099" />
                </td>
                <td>
                   ￥10.00元/次                </td>
               
                <td>
                     雇主                </td>
                <td>
                    <a href="index.php?do=payitem&view=index&user_type=employer&op=close&item_id=4&payitem_name=标记地图"  class="button"><span class="cross icon"></span>设为禁用</a>
                    </td>
<td>
<a href="index.php?do=payitem&view=config&item_code=map" class="button"><span class="cog icon"></span>配置</a>
</td>
<td>
<a href="index.php?do=payitem&view=index&item_id=4&op=del" onclick="return confirm(确定要卸载此任务模型吗？);" class="button"><span class="downarrow icon"></span>卸载</a>
                </td>
            </tr>
 
              
                <tr>
                    <td colspan="7">
                        安装新增值服务 , 请输入所在目录: <input type="text" name="txt_item_code" value="" class="txt">
<button type="submit" name="submit" class="button pill" value=安装 ><span class="uparrow icon"></span>安装</button>
                    </td>
                </tr>
           
        </table>
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
