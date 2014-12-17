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
    <h1>案例管理</h1>
    <div class="tool">
        <a class="here" href="index.php?r=article/cas_list">案例列表</a>
        <a href="index.php?r=article/case_add">案例添加</a>
    </div>
</div>
    <div class="box search p_relative">
<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
 <form action="index.php?do=case&view=list" method="post">
<input type="hidden" name="page" value="1">
<table cellspacing="0" cellpadding="0">
<tbody>
<tr>
<th>编号</th>
<td><input type="text" value="" name="w[case_id]" class="txt"/></td>
<th>案例名称</th>
<td><input type="text" value="" name="w[art_title]" class="txt"/>*支持模糊查询</td>

<th>案例类型</th>
<td>
<select name="w[obj_type]" class="ps vm">
<option value=''>所有的</option>
 									<option  value='task'>任  务</option>
<option  value='service'>商  品</option>
         						 </select>
</td>
</tr>
<tr>
 
<th>结果排序</th>
                 			 <td>
                    	<select name="w[ord][]">
                           <option value="case_id"  selected="selected">默认排序</option>
                           <option value="on_time" >上传时间</option>
                      </select>
                      <select name="w[ord][]">
                            <option selected="selected"  value="desc">递减</option>
                            <option  value="asc">递增</option>
                      </select>
                 			  </td>
            			  <th>显示结果</th>
                  		 <td colspan="3">
                 			  <select name="w[page_size]">
                         		  <option value="10" >每页显示10</option>
                          		  <option value="20" >每页显示20</option>
                         		  <option value="30" >每页显示30</option>
                    			  </select>
<button class="pill" type="submit" value=搜索 name="sbt_search">
                            		<span class="icon magnifier">&nbsp;</span>搜索</button>
</td>
</tr>
</tbody>
</table>	
</form>
</div>
    </div>

<div class="box list">
    	<div class="title"><h2>留言列表</h2></div>
        <div class="detail">
  		<form action="index.php?do=case&view=list" id='frm_list' method="post">
  			<input type="hidden" name="page" value="1">
<input type="hidden" name="w[page_size]" value="">
<div id="ajax_dom">
  			<table  cellpadding="0" cellspacing="0">
  				<thead>
  					 <tr>
  					 <th width="15"><input type="checkbox" onclick="checkall();" id="checkbox" name="checkbox"/></th>
                    <th width="20">
                        ID
                    </th>
                    <th width="38%">
                        案例名称                    </th>
                    <th width="10%">
                       案例金额                    </th>
                    <th width="10%">
                       案例类型                    </th>
                    <th width="17%">
                        提交时间                    </th>
                    <th width="15%">
                      操作                    </th>
                </tr>
</thead>
<tbody>
                                <tr class="item">
                	<td>
                		<input type="checkbox" name="ckb[]" class="checkbox" value="9">
                	</td>
                    <td>
                        9                    </td>
                    <td>
                        <a href="/public/index.php?do=service&sid=5" target="_blank">
                        	【创意】网络视频</a>
   
                    </td>
                    <td>
                        ￥100.00元                    </td>
                    <td>
                        商  品                    </td>
                    <td>
                        2013-04-09 20:38                    </td>
                    <td>
                        <a href="index.php?do=case&view=add&case_id=9" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                       <a href="index.php?do=case&view=list&ac=del&case_id=9&page=1&w['page_size']=&w['obj_type']=" onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr class="item">
                	<td>
                		<input type="checkbox" name="ckb[]" class="checkbox" value="8">
                	</td>
                    <td>
                        8                    </td>
                    <td>
                        <a href="/public/index.php?do=service&sid=4" target="_blank">
                        	【创意】3d生物模型制作（包括材质贴图）</a>
   
                    </td>
                    <td>
                        ￥1,000.00元                    </td>
                    <td>
                        商  品                    </td>
                    <td>
                        2013-04-09 20:37                    </td>
                    <td>
                        <a href="index.php?do=case&view=add&case_id=8" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                       <a href="index.php?do=case&view=list&ac=del&case_id=8&page=1&w['page_size']=&w['obj_type']=" onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr class="item">
                	<td>
                		<input type="checkbox" name="ckb[]" class="checkbox" value="7">
                	</td>
                    <td>
                        7                    </td>
                    <td>
                        <a href="/public/index.php?do=service&sid=5" target="_blank">
                        	【创意】网络视频</a>
   
                    </td>
                    <td>
                        ￥100.00元                    </td>
                    <td>
                        商  品                    </td>
                    <td>
                        2013-04-09 19:29                    </td>
                    <td>
                        <a href="index.php?do=case&view=add&case_id=7" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                       <a href="index.php?do=case&view=list&ac=del&case_id=7&page=1&w['page_size']=&w['obj_type']=" onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr class="item">
                	<td>
                		<input type="checkbox" name="ckb[]" class="checkbox" value="6">
                	</td>
                    <td>
                        6                    </td>
                    <td>
                        <a href="/public/index.php?do=service&sid=1" target="_blank">
                        	【创意】海报设计</a>
   
                    </td>
                    <td>
                        ￥1,000.00元                    </td>
                    <td>
                        商  品                    </td>
                    <td>
                        2013-04-09 19:28                    </td>
                    <td>
                        <a href="index.php?do=case&view=add&case_id=6" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                       <a href="index.php?do=case&view=list&ac=del&case_id=6&page=1&w['page_size']=&w['obj_type']=" onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr class="item">
                	<td>
                		<input type="checkbox" name="ckb[]" class="checkbox" value="5">
                	</td>
                    <td>
                        5                    </td>
                    <td>
                        <a href="/public/index.php?do=service&sid=3" target="_blank">
                        	【创意】著作权（版权）登记</a>
   
                    </td>
                    <td>
                        ￥20.00元                    </td>
                    <td>
                        商  品                    </td>
                    <td>
                        2013-04-09 19:28                    </td>
                    <td>
                        <a href="index.php?do=case&view=add&case_id=5" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                       <a href="index.php?do=case&view=list&ac=del&case_id=5&page=1&w['page_size']=&w['obj_type']=" onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr class="item">
                	<td>
                		<input type="checkbox" name="ckb[]" class="checkbox" value="4">
                	</td>
                    <td>
                        4                    </td>
                    <td>
                        <a href="/public/index.php?do=task&task_id=46" target="_blank">
                        	轻松下载每个可得钱</a>
   
                    </td>
                    <td>
                        ￥90.00元                    </td>
                    <td>
                        任  务                    </td>
                    <td>
                        2013-04-09 19:26                    </td>
                    <td>
                        <a href="index.php?do=case&view=add&case_id=4" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                       <a href="index.php?do=case&view=list&ac=del&case_id=4&page=1&w['page_size']=&w['obj_type']=" onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr class="item">
                	<td>
                		<input type="checkbox" name="ckb[]" class="checkbox" value="3">
                	</td>
                    <td>
                        3                    </td>
                    <td>
                        <a href="/public/index.php?do=task&task_id=35" target="_blank">
                        	淘宝网店推广</a>
   
                    </td>
                    <td>
                        ￥150.00元                    </td>
                    <td>
                        任  务                    </td>
                    <td>
                        2013-04-09 19:26                    </td>
                    <td>
                        <a href="index.php?do=case&view=add&case_id=3" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                       <a href="index.php?do=case&view=list&ac=del&case_id=3&page=1&w['page_size']=&w['obj_type']=" onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr class="item">
                	<td>
                		<input type="checkbox" name="ckb[]" class="checkbox" value="2">
                	</td>
                    <td>
                        2                    </td>
                    <td>
                        <a href="/public/index.php?do=task&task_id=34" target="_blank">
                        	淘宝网店推广 10元1稿 简单快捷</a>
   
                    </td>
                    <td>
                        ￥120.00元                    </td>
                    <td>
                        任  务                    </td>
                    <td>
                        2013-04-09 19:26                    </td>
                    <td>
                        <a href="index.php?do=case&view=add&case_id=2" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                       <a href="index.php?do=case&view=list&ac=del&case_id=2&page=1&w['page_size']=&w['obj_type']=" onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
                    </td>
                </tr>
                <tr class="item">
                	<td>
                		<input type="checkbox" name="ckb[]" class="checkbox" value="1">
                	</td>
                    <td>
                        1                    </td>
                    <td>
                        <a href="/public/index.php?do=task&task_id=28" target="_blank">
                        	彩票站宣传单设计</a>
   
                    </td>
                    <td>
                        ￥80.00元                    </td>
                    <td>
                        任  务                    </td>
                    <td>
                        2013-04-09 19:26                    </td>
                    <td>
                        <a href="index.php?do=case&view=add&case_id=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                       <a href="index.php?do=case&view=list&ac=del&case_id=1&page=1&w['page_size']=&w['obj_type']=" onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
                    </td>
                </tr>
</tabody>
<tfoot>
 <tr>
                    <td colspan="6">
                    

                        <label for="checkbox">全选</label>
                        <input type="hidden" name="sbt_action" class="sbt_action"/>
                        <button name="sbt_action" type="submit" value=批量删除 onclick="return batch_act(this,'frm_list');" class="pill negative" ><span class="icon trash"></span>批量删除</button>

</td>	
</tr>		
</tfoot>
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
