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
            <a href="index.php?r=task/industry_edit">添加行业</a> 
<a href="index.php?r=task/union_industry" class="here" >行业合并</a>
</div>
</div>
<div class="box post">
 
        <div class="tabcon">
        	<div class="title"><h2>行业合并</h2></div>
            <div class="detail">
<form method="post" action="#" id="frm_cat_edit">
    <input type="hidden" name="do" value="task"><input type="hidden" name="view" value="union_industry"><input type="hidden" name="hdn_indus_id" value="">
    <div class="main">
 
        <table width="96%" height="200" border="0" cellspacing="0" cellpadding="0" class="tab_m t_l">
        <tr>
            <th scope="row">
                选择行业：            </th>
            <td>
                <select name="slt_indus_id">
                    <option value="0">置顶</option>
                                        <option value="441" >品牌设计</option>
                                        <option value="2" >网站开发</option>
                                        <option value="201" >创意祝福</option>
                                        <option value="249" >网游服务</option>
                                        <option value="3" >文案写作</option>
                                        <option value="335" >建筑/装修</option>
                                        <option value="211" >头脑风暴</option>
                                        <option value="350" >照片美化/编辑</option>
                                        <option value="234" >法律服务</option>
                                        <option value="160" >起名取名</option>
                                        <option value="357" >影视/配音/歌词</option>
                                        <option value="192" >生活服务</option>
                                        <option value="218" >移动应用</option>
                                        <option value="240" >招聘找人</option>
                                        <option value="121" >软件开发</option>
                                    </select>　
<span style="color:red">(该行业是合并后的行业，将会被保留)</span>
            </td>
        </tr>
        <tr>
            <th  scope="row">
                目标行业：            </th>
            <td>
                <select name="to_indus_id">
                    <option value="0">置顶</option>
                                          <option value="441" >品牌设计</option>
                                          <option value="2" >网站开发</option>
                                          <option value="201" >创意祝福</option>
                                          <option value="249" >网游服务</option>
                                          <option value="3" >文案写作</option>
                                          <option value="335" >建筑/装修</option>
                                          <option value="211" >头脑风暴</option>
                                          <option value="350" >照片美化/编辑</option>
                                          <option value="234" >法律服务</option>
                                          <option value="160" >起名取名</option>
                                          <option value="357" >影视/配音/歌词</option>
                                          <option value="192" >生活服务</option>
                                          <option value="218" >移动应用</option>
                                          <option value="240" >招聘找人</option>
                                          <option value="121" >软件开发</option>
                                    </select>　
<span style="color:red">(该行业是合并后将会自动被删除)</span>
            </td>
        </tr>
        <td align="left" colspan="2">
            <div style="padding-left:300px;">
               <button value="提交" name="sbt_edit" type="submit" class="positive primary pill button"><span class="check icon"></span>提交</button>
   
    </div>
        </td>
        </tr>
    </table>
    </div>
</form>
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
