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
<h1>互评记录管理</h1>
<!--
    <div class="tool"> 
        <a href="index.php?do=config&view=mark&op=log" class="here">互评记录管理</a>
</div>
-->
</div>
   <div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
<form action="" method="get">
        	<input type="hidden" name="do"   value="config">
<input type="hidden" name="view" value="mark">
<input type="hidden" name="op" value="log">
<input type="hidden" name="page" value="1">
<table cellspacing="0" cellpadding="0">
 <tbody>
 	<tr>
 		<th>互评ID</th>
<td><input type="text" class="txt" name="w[mark_id]" value="" onkeyup="clearstr(this);"></td>
<th>来自</th>
<td><input type="text" class="txt" name='w[by_username]' value="" onkeyup="clearspecial(this);"></td>
 	</tr>

<tr>
<th>显示条数</th>
<td>
<select name="w[page_size]" class="ps vm">
<option value="10" selected="selected">每页显示10</option>
<option value="20" >每页显示20</option>
<option value="30" >每页显示30</option>
</select>
</td>
<th>结果排序</th>
<td>

<select name="ord[]">
                        <option value="mark_id"  selected="selected">默认排序</option>
                        <option value="mark_time" >互评时间</option>
<option value="mark_status" >互评状态</option>
<option value="mark_value" >互评值</option>
 

                        </select>
                        <select name="ord[]">
                        <option selected="selected"  value="desc">递减</option>
                        <option  value="asc">递增</option>
                        </select>
<button type="submit" name="sbt_search" value=搜索 class="pill" /><span class="icon magnifier">&nbsp;</span>搜索</button>
</td>
</tr>
 
 </tbody>
</table>
</form>
        </div>
 </div>



<div class="box list">
    	<div class="title"><h2>互评记录</h2></div>
        <div class="detail">
<form method="post" action="#" id="frm_user_search">
<div id="ajax_dom">
<input type="hidden" name="page" value="1" />
  		<table cellpadding="0" cellspacing="0">
  		  <tbody>
          <tr>
          	<th width="15"><input type="checkbox" onclick="checkall();" id="checkbox" name="checkbox"/></th>
            <th>编号</th>
<th width="15%">所属模型</th>
<th>来自</th>
<th>对用户</th>
<th>评价</th>
<th>能力/信誉值</th>
<th>时间</th>
<th>操作</th>
          </tr>
        <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="28">
        	</td>
            <td width="12%">28</td>
            <td width="12%">
            	《威客服务》
<a href="http://127.0.0.1/weike/index.php?do=service&sid=11&page=1" target="_blank">查看商品</a>
</td>
<td>威客 猪八戒</td>
            <td>丸美弹力</td>
<td>好评</td>
<td>100.00</td>
<td>2013-04-09</td>
<td>
<a class="button" href="index.php?do=config&view=mark&op=log&w[by_username]=&w[mark_id]=&w[page_size]=10&page=1&ord[]=&ord[]=&ac=del&mark_id=28&page=1" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="27">
        	</td>
            <td width="12%">27</td>
            <td width="12%">
            	《威客服务》
<a href="http://127.0.0.1/weike/index.php?do=service&sid=11&page=1" target="_blank">查看商品</a>
</td>
<td>雇主 丸美弹力</td>
            <td>猪八戒</td>
<td>好评</td>
<td>77.00</td>
<td>2013-04-09</td>
<td>
<a class="button" href="index.php?do=config&view=mark&op=log&w[by_username]=&w[mark_id]=&w[page_size]=10&page=1&ord[]=&ord[]=&ac=del&mark_id=27&page=1" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="26">
        	</td>
            <td width="12%">26</td>
            <td width="12%">
            	《计件悬赏》
<a href="http://127.0.0.1/weike/index.php?do=task&task_id=34&page=1" target="_blank">查看任务</a>
</td>
<td>雇主 丸美弹力</td>
            <td>shangk</td>
<td>好评</td>
<td>108.00</td>
<td>2013-04-09</td>
<td>
<a class="button" href="index.php?do=config&view=mark&op=log&w[by_username]=&w[mark_id]=&w[page_size]=10&page=1&ord[]=&ord[]=&ac=del&mark_id=26&page=1" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="25">
        	</td>
            <td width="12%">25</td>
            <td width="12%">
            	《计件悬赏》
<a href="http://127.0.0.1/weike/index.php?do=task&task_id=34&page=1" target="_blank">查看任务</a>
</td>
<td>威客 shangk</td>
            <td>丸美弹力</td>
<td>好评</td>
<td>120.00</td>
<td>2013-04-09</td>
<td>
<a class="button" href="index.php?do=config&view=mark&op=log&w[by_username]=&w[mark_id]=&w[page_size]=10&page=1&ord[]=&ord[]=&ac=del&mark_id=25&page=1" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="24">
        	</td>
            <td width="12%">24</td>
            <td width="12%">
            	《计件悬赏》
<a href="http://127.0.0.1/weike/index.php?do=task&task_id=28&page=1" target="_blank">查看任务</a>
</td>
<td>雇主 猪八戒</td>
            <td>admin</td>
<td>好评</td>
<td>72.00</td>
<td>2013-04-09</td>
<td>
<a class="button" href="index.php?do=config&view=mark&op=log&w[by_username]=&w[mark_id]=&w[page_size]=10&page=1&ord[]=&ord[]=&ac=del&mark_id=24&page=1" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="23">
        	</td>
            <td width="12%">23</td>
            <td width="12%">
            	《计件悬赏》
<a href="http://127.0.0.1/weike/index.php?do=task&task_id=28&page=1" target="_blank">查看任务</a>
</td>
<td>威客 admin</td>
            <td>猪八戒</td>
<td>好评</td>
<td>80.00</td>
<td>2013-04-09</td>
<td>
<a class="button" href="index.php?do=config&view=mark&op=log&w[by_username]=&w[mark_id]=&w[page_size]=10&page=1&ord[]=&ord[]=&ac=del&mark_id=23&page=1" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="22">
        	</td>
            <td width="12%">22</td>
            <td width="12%">
            	《威客作品》
<a href="http://127.0.0.1/weike/index.php?do=service&sid=13&page=1" target="_blank">查看商品</a>
</td>
<td>威客 猪八戒</td>
            <td>丸美弹力</td>
<td>好评</td>
<td>2000.00</td>
<td>2013-04-09</td>
<td>
<a class="button" href="index.php?do=config&view=mark&op=log&w[by_username]=&w[mark_id]=&w[page_size]=10&page=1&ord[]=&ord[]=&ac=del&mark_id=22&page=1" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="21">
        	</td>
            <td width="12%">21</td>
            <td width="12%">
            	《威客作品》
<a href="http://127.0.0.1/weike/index.php?do=service&sid=13&page=1" target="_blank">查看商品</a>
</td>
<td>雇主 丸美弹力</td>
            <td>猪八戒</td>
<td>好评</td>
<td>1980.00</td>
<td>2013-04-09</td>
<td>
<a class="button" href="index.php?do=config&view=mark&op=log&w[by_username]=&w[mark_id]=&w[page_size]=10&page=1&ord[]=&ord[]=&ac=del&mark_id=21&page=1" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="20">
        	</td>
            <td width="12%">20</td>
            <td width="12%">
            	《计件悬赏》
<a href="http://127.0.0.1/weike/index.php?do=task&task_id=35&page=1" target="_blank">查看任务</a>
</td>
<td>雇主 丸美弹力</td>
            <td>shangk</td>
<td>好评</td>
<td>135.00</td>
<td>2013-04-09</td>
<td>
<a class="button" href="index.php?do=config&view=mark&op=log&w[by_username]=&w[mark_id]=&w[page_size]=10&page=1&ord[]=&ord[]=&ac=del&mark_id=20&page=1" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="19">
        	</td>
            <td width="12%">19</td>
            <td width="12%">
            	《计件悬赏》
<a href="http://127.0.0.1/weike/index.php?do=task&task_id=35&page=1" target="_blank">查看任务</a>
</td>
<td>威客 shangk</td>
            <td>丸美弹力</td>
<td>好评</td>
<td>150.00</td>
<td>2013-04-09</td>
<td>
<a class="button" href="index.php?do=config&view=mark&op=log&w[by_username]=&w[mark_id]=&w[page_size]=10&page=1&ord[]=&ord[]=&ac=del&mark_id=19&page=1" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
          </tr>
           <tr>
          	<td colspan="9">
<div class="clearfix">
                    
                    <label for="checkbox">全选</label>
<input type="hidden" name="sbt_action" class="sbt_action" />
<button type="submit" name="sbt_action" value="批量删除" class="pill negative" onclick="return batch_act(this,'frm_user_search');">
<span class="icon trash"></span>批量删除</button>
</div>	
          	</td>
          </tr>
  </tbody>
        </table>
<div class="page"><span> 1 / 3页 </span> <a class="selected">1</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=config&view=mark&op=log&w[by_username]=&w[mark_id]=&w[page_size]=10&page=1&ord[]=&ord[]=&page=2','2','1')>2</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=config&view=mark&op=log&w[by_username]=&w[mark_id]=&w[page_size]=10&page=1&ord[]=&ord[]=&page=3','3','1')>3</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=config&view=mark&op=log&w[by_username]=&w[mark_id]=&w[page_size]=10&page=1&ord[]=&ord[]=&page=2','2','1')>下一页>></a></div>
</div>
</form>
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
