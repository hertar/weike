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
    	<h1>增值服务购买(使用)记录</h1>
        
</div>
    <!--页头结束-->

    
        <div  class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
           
    <form action="index.php?do=payitem&view=buy" method="get" name="s" id="sl">
            	<input type="hidden" name="do" value="payitem">
<input type="hidden" name="view" value="buy">
                <table cellspacing="0" cellpadding="0">
<tbody>
<tr>
<th>ID</th>
                            <td><input type="text" value="" name="w[record_id]" class="txt"/></td>
<th>用户名*</th>
                            <td><input type="text" value="" name="w[username]" class="txt"/></td>
<th>购买/使用类型</th>
                            <td><select name="w[use_type]">
                            	<option value="">请选择</option>
                            	                            	<option value="buy" >购买</option>
                            	<option value="spend" >使用</option>
                            </select>*支持模糊查询</td>
 </tr>
<tr>
<th>付费项类型</th>
                            <td><select name="w[item_code]">
                            	<option value="">请选择</option>
                            	                            	<option value="workhide" >稿件隐藏</option>
                            	<option value="top" >任务置顶</option>
                            	<option value="urgent" >任务加急</option>
                            	<option value="map" >地图定位</option>
                            </select>
</td>
 <th>
                         结果排序                        </th>
                        <td>
                     <select name="w[ord][]">
                           <option value="record_id"  selected="selected">默认排序</option>
                           <option value="on_time" >使用时间</option>
                      </select>
                      <select name="w[ord][]">
                            <option selected="selected"  value="desc">递减</option>
                            <option  value="asc">递增</option>
                      </select>
                       </td>
                        <th>
                    显示结果                         </th>
                        <td>
                            <select name="w[page_size]">
                               <option value="10" >每页显示10</option>
                               <option value="20" >每页显示20</option>
                               <option value="30" >每页显示30</option>
                             </select>
                             <button class="pill" type="submit" value=搜索 name="sbt_search">
                                <span class="icon magnifier">&nbsp;</span>搜索                              </button>
                           	</td>
                     </tr>
 
                    </tbody>
                </table>
            </form>

        </div>
    </div>
    <!--搜索结束-->

    <div class="box list">
    	<div class="title"><h2>购买使用列表</h2></div>
        <div class="detail">
        	<form  action="index.php?do=payitem&view=buy"  id='frm_list' method="post">
        	<div id="ajax_dom">
        	<input type="hidden" name="page" value="1" />
              <table cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <th width="8%">ID
</th>
                    <th width="10%">付费项类型</th>
                    <th width="10%">购买/使用类型</th>
                    <th width="10%">用户名</th>
                    <th width="10%">使用类型</th>
<th width="10%">使用花费</th>
                    <th width="10%">使用数量</th>
                    <th width="17%">使用时间</th>
                  </tr>
                  
                                    <tr class="item">
                 	<td>2863</td>
<td></td>
                    <td>使用</td>
                    <td>shangk</td>
                    <td>任务</td>
                    <td>￥0.00元</td>
                    <td>4</td>
                    <td>2013-04-09 19:25:17</td>
                   </tr>
                                    <tr class="item">
                 	<td>2862</td>
<td></td>
                    <td>使用</td>
                    <td>admin</td>
                    <td>任务</td>
                    <td>￥0.00元</td>
                    <td>1</td>
                    <td>2013-04-09 19:24:50</td>
                   </tr>
                                    <tr class="item">
                 	<td>2861</td>
<td></td>
                    <td>使用</td>
                    <td>shangk</td>
                    <td>任务</td>
                    <td>￥0.00元</td>
                    <td>4</td>
                    <td>2013-04-09 19:23:12</td>
                   </tr>
                                    <tr class="item">
                 	<td>2860</td>
<td></td>
                    <td>使用</td>
                    <td>shangk</td>
                    <td>任务</td>
                    <td>￥0.00元</td>
                    <td>4</td>
                    <td>2013-04-09 19:21:50</td>
                   </tr>
                                    <tr class="item">
                 	<td>2859</td>
<td></td>
                    <td>使用</td>
                    <td>shangk</td>
                    <td>任务</td>
                    <td>￥0.00元</td>
                    <td>4</td>
                    <td>2013-04-09 19:21:45</td>
                   </tr>
                                    <tr class="item">
                 	<td>2858</td>
<td></td>
                    <td>使用</td>
                    <td>shangk</td>
                    <td>任务</td>
                    <td>￥0.00元</td>
                    <td>4</td>
                    <td>2013-04-09 19:21:39</td>
                   </tr>
                                    <tr class="item">
                 	<td>2857</td>
<td></td>
                    <td>使用</td>
                    <td>shangk</td>
                    <td>任务</td>
                    <td>￥0.00元</td>
                    <td>4</td>
                    <td>2013-04-09 19:20:41</td>
                   </tr>
                                    <tr class="item">
                 	<td>2856</td>
<td></td>
                    <td>使用</td>
                    <td>shangk</td>
                    <td>任务</td>
                    <td>￥0.00元</td>
                    <td>4</td>
                    <td>2013-04-09 19:20:34</td>
                   </tr>
                                    <tr class="item">
                 	<td>2855</td>
<td></td>
                    <td>使用</td>
                    <td>shangk</td>
                    <td>任务</td>
                    <td>￥0.00元</td>
                    <td>4</td>
                    <td>2013-04-09 19:20:24</td>
                   </tr>
                                    <tr class="item">
                 	<td>2854</td>
<td></td>
                    <td>使用</td>
                    <td>admin</td>
                    <td>任务</td>
                    <td>￥0.00元</td>
                    <td>1</td>
                    <td>2013-04-09 19:19:29</td>
                   </tr>
                    <tr>
                    <td colspan="8">
                               
                    </td>
                  </tr>
                </tbody>
              </table>
  <div class="page"><span> 1 / 4页 </span> <a class="selected">1</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=payitem&view=buy&w[record_id]=&w[username]=&w[use_type]=&w[item_code]=&w[ord]=&page=&w[page_size]=&page=2','2','1')>2</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=payitem&view=buy&w[record_id]=&w[username]=&w[use_type]=&w[item_code]=&w[ord]=&page=&w[page_size]=&page=3','3','1')>3</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=payitem&view=buy&w[record_id]=&w[username]=&w[use_type]=&w[item_code]=&w[ord]=&page=&w[page_size]=&page=4','4','1')>4</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=payitem&view=buy&w[record_id]=&w[username]=&w[use_type]=&w[item_code]=&w[ord]=&page=&w[page_size]=&page=2','2','1')>下一页>></a></div>
</div>
        	</form>
<div class="box tip clearfix p_relative">
        		<div class="title t_r"><h2><span>用户购买总金额：<font color="red">￥4,150.00元</font></span></h2></div>
</div>
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
