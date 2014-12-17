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
    <h1>推广财务管理</h1>
    <div class="tool">
        <a href="index.php?r=prom/event" class="here">财务管理</a>
    </div>
</div>
<div class="box search p_relative">
    <div class="title">
        <h2>搜索</h2>
    </div>
    <div class="detail">
        <form method="post" action="index.php?do=prom&view=event" id="frm_art_search">
        <input type="hidden" name="page" value="1">
 
        <table cellspacing="0" cellpadding="0">
         <tbody>
           <tr>
             <th>
          ID
             </th>
              <td>
                <input type="text" size= '10' class="txt"name="w[event_id]" value="" onkeyup="clearstr(this);">
              </td>
               <th>
                        推广人*
              </th>
                <td>
                  <input type="text" size="10" class="txt" name='w[parent_username]' value="">
                </td>
<th>
                        被推广人*
              </th>
                <td>
                  <input type="text" size="10" class="txt" name='w[username]' value="">
                </td>
              <th>
                         事件类型               </th>
                <td>
                  <select name="w[action]">
                      <option value="">--所有--</option>
          	<option   value="realname_auth">实名认证</option>
        	<option   value="mobile_auth">手机认证</option>
        	<option   value="pub_task">发布推广</option>
        	<option   value="bid_task">任务承接</option>
        	<option   value="enterprise_auth">企业认证</option>
        	<option   value="bank_auth">银行认证</option>
        	<option   value="email_auth">邮箱认证</option>
        	<option   value="service">商品宣传</option>
                      </select>
               </td>
            </tr>
             <tr>
                 <th>
                     结果排序                 </th>
                  <td>
                     <select name="w[ord][]">
                           <option value="event_id"  selected="selected">默认排序</option>
                           <option value="event_time" >产生时间</option>
                      </select>
                      <select name="w[ord][]">
                            <option selected="selected"  value="desc">递减</option>
                            <option  value="asc">递增</option>
                      </select>
                   </td>
              <th>
                         显示结果               </th>
                   <td>
                     <select name="w[page_size]">
                          <option value="10" >每页显示10</option>
                          <option value="20" >每页显示20</option>
                          <option value="30" >每页显示30</option>
                     </select>
 <button class="pill" type="submit" value="搜索" name="sbt_search"><span class="icon magnifier">&nbsp;</span>搜索</button>
                   </td>
   <th>
                   &nbsp;
                </th>
<td>
                   &nbsp;
                </td>
                <th>
                   &nbsp;
                </th>
                 <td>
                 	&nbsp;
                 </td>
             </tr>
          </tbody>
        </table>　
 
     </form>
   </div>
</div>
 <div class="box list">
 	<div class="title">
 	   <h2>推广财务管理</h2></div>
  <div class="detail">
  	 <form method="post" action="index.php?do=prom&view=event" id="frm_list">
  	 	<input type="hidden" name="w[page_size]" value="10">
<input type="hidden" name="page" value="1">
<div id="ajax_dom">
<table cellpadding="0" cellspacing="0">
               <tbody>
               	<tr>
               		<th>项目ID</th>
<th>上线</th>
<th>下线</th>
                    <th>推广金额</th>
                    <th>时间</th>
                    <th>推广事件</th>
                    <th>操作</th>
<tr>
	
<tr>
                	<td colspan="7">
                	
                    <div class="clearfix">
<input type="checkbox" id="checkbox" onclick="checkall();" class="checkbox" >
<label for="checkbox">全选</label>　
<input type="hidden" name="sbt_action" class="sbt_action"/>
<button type="submit" name="sbt_action" value="批量删除" class="pill negative" onclick="return batch_act(this,'frm_list')">
<span class="trash icon"></span>批量删除</button>&nbsp;&nbsp;</div>
   </td>
               </tr>	
</tbody>
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