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
    	<h1>计件悬赏管理</h1>
         <div class="tool">
         	<a href="index.php?r=model/jijian_task_list" class="here">任务列表</a>
<!--	<a href="index.php?do=model&model_id=1&view=config">任务配置</a>-->
 </div>
</div>
    <!--页头结束-->

    <!--提示结束-->
     
        <div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
           
    <form action="index.php?do=model&model_id=3&view=list" method="post">
 <input type="hidden" value="1" name="page">
<table cellspacing="0" cellpadding="0">
<tbody>
                        <tr>
                            <th>任务编号</th>
                            <td><input type="text" value="" name="w[task_id]" class="txt"/></td>
                            <th>任务标题</th>
                            <td><input type="text" value="" name="w[task_title]" class="txt"/>支持模糊查询</td>
                             <th></th><td>
                             	<button class="pill" type="submit" value=搜索 name="sbt_search">
                            		<span class="icon magnifier">&nbsp;</span>搜索</button></td>
                             </td>
</tr>
    
                        
                        <tr>
                            <th>请选择任务状态</th>
                            <td>
                            	<select class="ps vm" name="w[task_status]" id="catid" onchange="statusJump(this.value)">
                            		<option value=""  selected="selected" >全部</option>
                            	<option value="0" >未付款</option>
<option value="1" >待审核</option>
<option value="2" >投稿中</option>
<option value="3" >任务选稿</option>
<option value="7" >冻结</option>
<option value="8" >结束</option>
<option value="9" >失败</option>
<option value="10" >审核失败</option>
	
</select>
</td>
<th>结果排序</th>
<td>

<select name="ord[]" id="ord1">
                                <option value="task_id"  selected="selected">默认排序</option>
                                <option value="start_time" >发布时间</option>
                                </select>
                                <select name="ord[]" onchange="orderJump(this.value)">
                                <option selected="selected"  value="desc">递减</option>
                                <option  value="asc">递增</option>
                                </select>
</td>
                            <th>显示结果</th>
                            <td><select name="page_size" onchange="pageJump(this.value)">
<option value="10" selected="selected">每页显示10</option>
<option value="20" >每页显示20</option>
<option value="30" >每页显示30</option>
</select>
                              	
                        </tr>
                    </tbody>
                </table>
            </form>

        </div>
    </div>
    <!--搜索结束-->
    
    <div class="box list">
    	<div class="title"><h2>悬赏任务列表</h2></div>
        <div class="detail">
        	<form action="" id='frm_list' method="post">
        	<input type="hidden" value="1" name="page">
<input type="hidden" name="w[page_size]" value="10">
              <div id="ajax_dom">
              <input type="hidden" value="1" name="page" />
              <table cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <th width="10%">ID</th>
                    <th width="28%">任务标题</th>

                                      
                  <!--  <th width="15%">发布时间</th>-->
<th width="10%">任务金额</th>
<th width="10%">发布者</th>
 <th width="10%">任务状态</th> 
                    <th width="17%">操作</th>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="57" class="checkbox">57</td>
                    <td class="td28"><a href="/public/index.php?do=task&task_id=57" target="_blank">
                    	进驻商场&企业生活馆餐饮店的竞标</a>
</td>
                     
                    <td>￥100.00元</td>
<td>丸美弹力</td>
<td>结束</td> 
                    <td>
<!--
-->
<a href="index.php?do=model&model_id=3&view=edit&task_id=57&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=3&view=list&ac=del&task_id=57&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="52" class="checkbox">52</td>
                    <td class="td28"><a href="/public/index.php?do=task&task_id=52" target="_blank">
                    	铁路工程图书编辑项目长期合作</a>
</td>
                     
                    <td>￥120.00元</td>
<td>丸美弹力</td>
<td>失败</td> 
                    <td>
<!--
-->
<a href="index.php?do=model&model_id=3&view=edit&task_id=52&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=3&view=list&ac=del&task_id=52&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="46" class="checkbox">46</td>
                    <td class="td28"><a href="/public/index.php?do=task&task_id=46" target="_blank">
                    	轻松下载每个可得钱</a>
</td>
                     
                    <td>￥90.00元</td>
<td>丸美弹力</td>
<td>结束</td> 
                    <td>
<!--
-->
<a href="index.php?do=model&model_id=3&view=edit&task_id=46&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=3&view=list&ac=del&task_id=46&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="43" class="checkbox">43</td>
                    <td class="td28"><a href="/public/index.php?do=task&task_id=43" target="_blank">
                    	希望女友收到来自各地的祝福短信</a>
</td>
                     
                    <td>￥300.00元</td>
<td>丸美弹力</td>
<td>结束</td> 
                    <td>
<!--
-->
<a href="index.php?do=model&model_id=3&view=edit&task_id=43&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=3&view=list&ac=del&task_id=43&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="40" class="checkbox">40</td>
                    <td class="td28"><a href="/public/index.php?do=task&task_id=40" target="_blank">
                    	生日祝福短信的征集</a>
</td>
                     
                    <td>￥200.00元</td>
<td>丸美弹力</td>
<td>失败</td> 
                    <td>
<!--
-->
<a href="index.php?do=model&model_id=3&view=edit&task_id=40&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=3&view=list&ac=del&task_id=40&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="37" class="checkbox">37</td>
                    <td class="td28"><a href="/public/index.php?do=task&task_id=37" target="_blank">
                    	天涯论坛发帖</a>
</td>
                     
                    <td>￥160.00元</td>
<td>丸美弹力</td>
<td>失败</td> 
                    <td>
<!--
-->
<a href="index.php?do=model&model_id=3&view=edit&task_id=37&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=3&view=list&ac=del&task_id=37&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="35" class="checkbox">35</td>
                    <td class="td28"><a href="/public/index.php?do=task&task_id=35" target="_blank">
                    	淘宝网店推广</a>
</td>
                     
                    <td>￥150.00元</td>
<td>丸美弹力</td>
<td>结束</td> 
                    <td>
<!--
-->
<a href="index.php?do=model&model_id=3&view=edit&task_id=35&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=3&view=list&ac=del&task_id=35&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="34" class="checkbox">34</td>
                    <td class="td28"><a href="/public/index.php?do=task&task_id=34" target="_blank">
                    	淘宝网店推广 10元1稿 简单快捷</a>
</td>
                     
                    <td>￥120.00元</td>
<td>丸美弹力</td>
<td>结束</td> 
                    <td>
<!--
-->
<a href="index.php?do=model&model_id=3&view=edit&task_id=34&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=3&view=list&ac=del&task_id=34&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="28" class="checkbox">28</td>
                    <td class="td28"><a href="/public/index.php?do=task&task_id=28" target="_blank">
                    	彩票站宣传单设计</a>
</td>
                     
                    <td>￥80.00元</td>
<td>猪八戒</td>
<td>结束</td> 
                    <td>
<!--
-->
<a href="index.php?do=model&model_id=3&view=edit&task_id=28&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=3&view=list&ac=del&task_id=28&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="24" class="checkbox">24</td>
                    <td class="td28"><a href="/public/index.php?do=task&task_id=24" target="_blank">
                    	生日祝福短信的征集</a>
<font color="red">[荐]</font></td>
                     
                    <td>￥80.00元</td>
<td>猪八戒</td>
<td>失败</td> 
                    <td>
<!--
-->
<a href="index.php?do=model&model_id=3&view=edit&task_id=24&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=3&view=list&ac=del&task_id=24&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    
                  <tr>
                    <td colspan="7">
                    <div class="page fl_right"><span> 1 / 2页 </span> <a class="selected">1</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=model&model_id=3&view=list&w[task_id]=&w[task_title]=&w[task_status]=&ord[0]=&ord[1]=&page=1&page_size=10&page=2','2','1')>2</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=model&model_id=3&view=list&w[task_id]=&w[task_title]=&w[task_status]=&ord[0]=&ord[1]=&page=1&page_size=10&page=2','2','1')>下一页>></a></div>
                    
                    <div class="clearfix">
                  		<input type="checkbox" onclick="checkall();" id="checkbox" name="checkbox"/>
                        <label for="checkbox">全选</label>
                            <input type="hidden" name="sbt_action" class="sbt_action"/>
                        <button type="submit" value="批量删除" onclick="return batch_act(this,'frm_list');" class="pill negative" ><span class="icon trash"></span>批量删除</button>
                        <button type="submit" value="批量审核" onclick="return batch_act(this,'frm_list');"  class="positive pill negative" ><span class="icon check">&nbsp;</span>批量审核</button>
                    	<!--<button type="submit" value="批量冻结" onclick="return batch_act(this,'frm_list');"    class="pill negative" ><span class="lock icon"></span>批量冻结</button>
<button type="submit" class="positive pill negative"  onclick="return batch_act(this,'frm_list');" value="批量解冻"><span class="unlock icon"></span>批量解冻</button>
-->
                    </div>
                    </td>
                  </tr>
                </tbody>
              </table>
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
d.confirm("确定要" + c + '?', function() {
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
<script type="text/javascript">
var url = 'index.php?do=model&model_id=3&view=list&w[task_id]=&w[task_title]=&w[task_status]=&ord[0]=&ord[1]=&page=1&page_size=10';
function statusJump(task_status){
window.location.href = url+'&w[task_status]='+task_status;
}
function orderJump(value){
var ord1 = $("#ord1").children("option:selected").val();//selected的值
window.location.href= url+'&ord[0]='+ord1+'&ord[1]='+value;
}
function pageJump(value){
window.location.href = url+'&page_size='+value;
}
</script>