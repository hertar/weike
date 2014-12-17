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
    <h1>交易维权</h1>
    <div class="tool">
   <a href="index.php?r=tran/rights" >维权列表</a>
  <a href="index.php?r=trans/report" class="here">举报列表</a>
<a href="index.php?r=user/suggest">建议列表</a>
    </div>
</div>
<div class="box tip clearfix p_relative" id="man_tips">
 <div class="control"><a href="javascript:void(0);" title=关闭><b>&times;</b></a></div>
 <div class="title"><h2>小提示</h2></div>
 <div class="detail pad10">
  <ul>
     <li>只能删除未受理的<font color="red">举报记录</font>。删除时请仔细确认</li>
  </ul>
 </div>
</div>
<div class="box search p_relative">
 <div class="title">
    <h2>搜索</h2>
 </div>
 <div class="detail" id="detail">
  <form action="index.php?do=trans&view=report" method="post" id="frm_user_search">
   <input type="hidden" value="1" name="page">
     <table cellspacing="0" cellpadding="0">
      <tbody>
       <tr>
        <th>举报编号</th>
        <td> <input type="text" name="report_id" class="txt" onkeyup="clearstr(this);"/> </td>
<th>举报类型</th>
        <td>
          <select class="ps vm" name="obj">
    <option value="" selected="selected">所有的</option>
          	 <option value="task" >任务 </option>
 <option value="work" >稿件 </option>
 <option value="product" >商品 </option>
 <option value="order" >订单 </option>
 <option value="kppw21" >建议 </option>
          </select>
        </td>
       	<th>举报状态</th>
        <td>
          <select class="ps vm" name="report_status" id="catid">
          	<option value="" selected="selected">所有的</option>
          	 <option value="1" >待处理 </option>
 <option value="2" >处理中 </option>
 <option value="3" >未成立 </option>
 <option value="4" >已处理 </option>
          </select>
        </td>
       </tr>
       <tr>
       	 <th>排序方式</th>
       <td>
            <select name="ord[]">
                                	<option value="report_id"  selected="selected">交易维权</option>
                                	<option value="on_time" >发布时间</option>
                                </select>
            <select name="ord[]">
                               		 <option selected="selected"  value="desc">递减</option>
                                	<option  value="asc">递增</option>
                                </select>
        </td>
        <th>显示结果</th>
        <td>
         <select name="w[page_size]">
           <option value="10" >每页显示10</option>
           <option value="20" >每页显示20</option>
           <option value="30" >每页显示30</option>
         </select>
 <button class="pill" type="submit" value=搜索 name="sbt_search">
          		<span class="icon magnifier">&nbsp;</span>搜索         </button>
 <th>&nbsp;</th>

        	

        </td>
       </tr>
      </tbody>
     </table>
  </form>
 </div>
 </div>
<!--搜索结束-->
<div class="box list">
<div class="tab">
   <a href="index.php?do=trans&view=report&ord=&page_size=10" style="color:red" class="select">所有的</a>
     
      <a href="index.php?do=trans&view=report&ord=&obj=&report_status=1&page_size=10" >待处理</a>
     
      <a href="index.php?do=trans&view=report&ord=&obj=&report_status=2&page_size=10" >处理中</a>
     
      <a href="index.php?do=trans&view=report&ord=&obj=&report_status=3&page_size=10" >未成立</a>
     
      <a href="index.php?do=trans&view=report&ord=&obj=&report_status=4&page_size=10" >已处理</a>
      </div>
  <div class="tabcon">
  <div class="title">
    <h2>任务管理</h2>
  </div>  
  <div class="detail">
   <form action="index.php?do=trans&w['report_status']=" method="post" id="frm_art_action">
<input type="hidden" value="1" name="page">
<input type="hidden" value="10" name="page_size">
<div id="ajax_dom"><input type="hidden" name="page" value="1" />
<table cellpadding="0" cellspacing="0">
      <tbody>
       <tr>
        <th>举报编号</th>
<th>所属对象</th>
        <th>举报原因</th>
<th>举报人</th>
        <th>被举报人</th>
<th>举报附件</th>
        <th>举报时间</th>
        <th>当前状态</th>
        <th>处理人</th>
<th>操作</th>
       </tr>
             <tr>
       <td colspan="9">
         <div class="page fl_right"></div>
         <div class="clearfix">
         </div>
       </td>
      </tr>
     </tbody>
   </table></div>
  </form>
  </div>
  </div>
</div>
 <script type="text/javascript">
$(function(){
$(".control").add(".title").click(function(){
$(".tip").children().not($(".control,.title")).slideToggle('800');
});
})
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