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
    <h1></h1>
    <div class="tool">
        <a href="index.php?do=app&&view=weibo_list" class="here">微博</a>
    </div>
</div>
<div class="box search p_relative">
    <div class="title">
        <h2>搜索</h2>
    </div>
    <div class="detail">
        <form method="post" action="index.php?do=app&view=weibo_list" id="frm_art_search">
        <input type="hidden" name="page" value="1">
        <table cellspacing="0" cellpadding="0">
         <tbody>
           <tr>
             <th>ID</th>
              <td>
                <input type="text" size='10' class="txt" name="space[id]" value="" onkeyup="clearstr(this);">
              </td>
     <th>标题</th>
              <td>
                <input type="text" size='10' class="txt" name="space[title]" value="" onkeyup="clearspecial(this);">
              </td>
             <th>类型</th>
              <td>
                <input type="text" size='10' class="txt" name="space[type]" value="" onkeyup="clearspecial(this);">
              </td>
            </tr>
             <tr>
                 <th>结果排序</th>
                  <td>
             		<select name="ord[]">
                           <option value="weibo_id"  selected="selected">默认排序</option>
                           	
                      </select>
                         <select name="ord[]">
                            <option selected="selected"  value="desc">递减</option>
                            <option  value="asc">递增</option>
                      </select>
                   </td>
              <th>
                       显示结果
               </th>
                   <td>
                     <select name="page_size">
                          <option value="10" selected="selected">每页显示10</option>
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
             </tr>
          </tbody>
        </table>　
     </form>
   </div>
</div>
 <div class="box list">
 	<div class="title">
 	   <h2></h2></div>
  <div class="detail">
  	 <form method="post" action="index.php?do=app&view=weibo_list" id="frm_list">
  	 	<input type="hidden" name="w[page_size]" value="10">
<input type="hidden" name="page" value="1">
<div  id="ajax_dom">
<table cellpadding="0" cellspacing="0">
               <tbody>
               	<tr>
               		<th>ID</th>
<th>对象用户姓名</th>
<th>操作人名称姓名</th>
<th>标题</th>
<th>类型</th>
<th>留言数</th>
<th>收藏数</th>
<th>时间</th>
                    <th width="130">操作</th>
</tr>
                	<tr class="item">
               		<td><input type="checkbox" name="ckb[]" class="checkbox" value="81">81</td>
<td>猪八戒</td>
<td>猪八戒</td>
<td>商务|贸易|通用PPT模</td>
<td>goods</td>
<td>0</td>
<td>0</td>
               		<td>
               			2013-04-09 18:51:51&nbsp;
</td>
<td>
<a class="button" href="index.php?do=app&view=weibo_list&op=del&pro_id=81" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td> 
</tr>
               	<tr class="item">
               		<td><input type="checkbox" name="ckb[]" class="checkbox" value="80">80</td>
<td>猪八戒</td>
<td>丸美弹力</td>
<td>[图兰朵]婚纱摄影重磅</td>
<td>goods</td>
<td>0</td>
<td>0</td>
               		<td>
               			2013-04-09 19:22:14&nbsp;
</td>
<td>
<a class="button" href="index.php?do=app&view=weibo_list&op=del&pro_id=80" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td> 
</tr>
               	<tr class="item">
               		<td><input type="checkbox" name="ckb[]" class="checkbox" value="79">79</td>
<td>mxc123</td>
<td>mxc123</td>
<td>男宝宝起名</td>
<td>sreward</td>
<td>0</td>
<td>0</td>
               		<td>
               			2013-04-09 18:25:22&nbsp;
</td>
<td>
<a class="button" href="index.php?do=app&view=weibo_list&op=del&pro_id=79" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td> 
</tr>
               	<tr class="item">
               		<td><input type="checkbox" name="ckb[]" class="checkbox" value="78">78</td>
<td>mxc123</td>
<td>mxc123</td>
<td>用于淘宝和拍拍的广告</td>
<td>sreward</td>
<td>0</td>
<td>0</td>
               		<td>
               			2013-04-09 18:21:27&nbsp;
</td>
<td>
<a class="button" href="index.php?do=app&view=weibo_list&op=del&pro_id=78" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td> 
</tr>
               	<tr class="item">
               		<td><input type="checkbox" name="ckb[]" class="checkbox" value="77">77</td>
<td>猪八戒</td>
<td>猪八戒</td>
<td>【创意】企业（个人）法律</td>
<td>service</td>
<td>0</td>
<td>0</td>
               		<td>
               			2013-04-09 18:20:33&nbsp;
</td>
<td>
<a class="button" href="index.php?do=app&view=weibo_list&op=del&pro_id=77" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td> 
</tr>
               	<tr class="item">
               		<td><input type="checkbox" name="ckb[]" class="checkbox" value="76">76</td>
<td>墨客</td>
<td>墨客</td>
<td>屌丝一族逆袭歌词招募</td>
<td>mreward</td>
<td>0</td>
<td>0</td>
               		<td>
               			2013-04-09 18:20:29&nbsp;
</td>
<td>
<a class="button" href="index.php?do=app&view=weibo_list&op=del&pro_id=76" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td> 
</tr>
               	<tr class="item">
               		<td><input type="checkbox" name="ckb[]" class="checkbox" value="75">75</td>
<td>hahapa</td>
<td>hahapa</td>
<td>公司LOGO设计及VI基本</td>
<td>sreward</td>
<td>0</td>
<td>0</td>
               		<td>
               			2013-04-09 18:20:06&nbsp;
</td>
<td>
<a class="button" href="index.php?do=app&view=weibo_list&op=del&pro_id=75" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td> 
</tr>
               	<tr class="item">
               		<td><input type="checkbox" name="ckb[]" class="checkbox" value="74">74</td>
<td>猪八戒</td>
<td>丸美弹力</td>
<td>【创意】著作权（版权）登</td>
<td>service</td>
<td>0</td>
<td>0</td>
               		<td>
               			2013-04-09 19:25:21&nbsp;
</td>
<td>
<a class="button" href="index.php?do=app&view=weibo_list&op=del&pro_id=74" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td> 
</tr>
               	<tr class="item">
               		<td><input type="checkbox" name="ckb[]" class="checkbox" value="73">73</td>
<td>墨客</td>
<td>墨客</td>
<td>找人代画电路原理图和</td>
<td>mreward</td>
<td>0</td>
<td>0</td>
               		<td>
               			2013-04-09 18:18:40&nbsp;
</td>
<td>
<a class="button" href="index.php?do=app&view=weibo_list&op=del&pro_id=73" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td> 
</tr>
               	<tr class="item">
               		<td><input type="checkbox" name="ckb[]" class="checkbox" value="72">72</td>
<td>mxc123</td>
<td>mxc123</td>
<td>10秒20元,新手入门必</td>
<td>sreward</td>
<td>0</td>
<td>0</td>
               		<td>
               			2013-04-09 18:18:16&nbsp;
</td>
<td>
<a class="button" href="index.php?do=app&view=weibo_list&op=del&pro_id=72" onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td> 
</tr>
	
<tr>
                	<td colspan="10">
                	<div class="page fl_right"><span> 1 / 9页 </span> <a class="selected">1</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=app&view=weibo_list&page=&page_size=&ord[0]=&ord[1]=&page=2','2','1')>2</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=app&view=weibo_list&page=&page_size=&ord[0]=&ord[1]=&page=3','3','1')>3</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=app&view=weibo_list&page=&page_size=&ord[0]=&ord[1]=&page=4','4','1')>4</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=app&view=weibo_list&page=&page_size=&ord[0]=&ord[1]=&page=5','5','1')>5</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=app&view=weibo_list&page=&page_size=&ord[0]=&ord[1]=&page=6','6','1')>6</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=app&view=weibo_list&page=&page_size=&ord[0]=&ord[1]=&page=7','7','1')>7</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=app&view=weibo_list&page=&page_size=&ord[0]=&ord[1]=&page=8','8','1')>8</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=app&view=weibo_list&page=&page_size=&ord[0]=&ord[1]=&page=9','9','1')>9</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=app&view=weibo_list&page=&page_size=&ord[0]=&ord[1]=&page=2','2','1')>下一页>></a></div>                    <div class="clearfix">
                            <input type="checkbox" id="checkbox" onclick="checkall();" class="checkbox" >
<label for="checkbox">全选</label>　
<input type="hidden" name="sbt_action" class="sbt_action"/>
<button type="submit" name="sbt_action" value="批量删除" onclick="return batch_act(this,'frm_list')" class="pill negative">
<span class="trash icon"></span>批量删除</button>&nbsp;&nbsp;
</div>
   </td>
            	 </tr>	
               </tbody>
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
