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
    	<h1>单人悬赏管理</h1>
         <div class="tool">
         	<a href="index.php?r=model/single_task_list" class="here">任务列表</a>
<!--	<a href="index.php?do=model&model_id=1&view=config">任务配置</a>-->
 </div>
</div>
    <!--页头结束-->

    <!--提示结束-->
     
        <div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
           
    <form action="index.php?do=model&model_id=1&view=list" method="post">
 <input type="hidden" value="1" name="page">
<table cellspacing="0" cellpadding="0">
<tbody>
                        <tr>
                            <th>任务编号</th>
                            <td><input type="text" value="" name="w[task_id]" class="txt"/></td>
                            <th>任务标题</th>
                            <td><input type="text" value="" name="w[task_title]" class="txt"/> 支持模糊查询</td>
                             <th></th><td>
                             	<button class="pill" type="submit" value="搜索" name="sbt_search">
                            		<span class="magnifier icon">&nbsp;</span>搜索</button></td>
                             </td>
 	
</tr>
                        <tr>
                            <th>请选择任务状态</th>
                            <td>
                            	<select class="ps vm" name="w[task_status]" id="catid" onchange="statusJump(this.value)">
                            		<option value=""  selected="selected" >全部</option>
                            	    <option value="0"  >未付款</option>
    <option value="1"  >待审核</option>
    <option value="2"  >投稿中</option>
    <option value="3"  >任务选稿</option>
    <option value="4"  >发起投票</option>
    <option value="5"  >公示中</option>
    <option value="6"  >交付中</option>
    <option value="7"  >冻结</option>
    <option value="8"  >结束</option>
    <option value="9"  >失败</option>
    <option value="10"  >审核失败</option>
    <option value="11"  >仲裁</option>
    <option value="13"  >交付冻结</option>
	
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
    	<div class="title"><h2>单人悬赏任务列表</h2></div>
        <div class="detail">
        	<form action="#" id='frm_list' method="post">
        	<input type="hidden" value="1" name="page">
<input type="hidden" name="w['page_size']" value="10">
               <div id="ajax_dom"><input type="hidden" value="1" name="page">
               <table cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <th width="8%">ID</th>
                    <th width="27%">任务标题</th>
                    
                    <th width="15%">任务金额</th>
<th width="10%">发布者</th>
<th width="10%">任务状态</th>
                    <th width="25%">处理</th>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="70" class="checkbox">70</td>
                    <td class="td28">
                    	<a href="/public/index.php?do=task&task_id=70" target="_blank">男宝宝起名</a>
</td>
                   
                    <td>￥8,000.00元</td>
                    <td>mxc123</td>
 <td>失败</td>
                    <td>
                    	
<a href="index.php?do=model&model_id=1&view=edit&task_id=70&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=1&view=list&ac=del&task_id=70&page=1" class="button"  onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="69" class="checkbox">69</td>
                    <td class="td28">
                    	<a href="/public/index.php?do=task&task_id=69" target="_blank">用于淘宝和拍拍的广告</a>
</td>
                   
                    <td>￥80.00元</td>
                    <td>mxc123</td>
 <td>失败</td>
                    <td>
                    	
<a href="index.php?do=model&model_id=1&view=edit&task_id=69&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=1&view=list&ac=del&task_id=69&page=1" class="button"  onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="67" class="checkbox">67</td>
                    <td class="td28">
                    	<a href="/public/index.php?do=task&task_id=67" target="_blank">公司LOGO设计及VI基本部分的整套设计</a>
</td>
                   
                    <td>￥8,000.00元</td>
                    <td>hahapa</td>
 <td>失败</td>
                    <td>
                    	
<a href="index.php?do=model&model_id=1&view=edit&task_id=67&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=1&view=list&ac=del&task_id=67&page=1" class="button"  onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="65" class="checkbox">65</td>
                    <td class="td28">
                    	<a href="/public/index.php?do=task&task_id=65" target="_blank">10秒20元,新手入门必做任务,最高价！10秒付款</a>
</td>
                   
                    <td>￥80.00元</td>
                    <td>mxc123</td>
 <td>失败</td>
                    <td>
                    	
<a href="index.php?do=model&model_id=1&view=edit&task_id=65&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=1&view=list&ac=del&task_id=65&page=1" class="button"  onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="62" class="checkbox">62</td>
                    <td class="td28">
                    	<a href="/public/index.php?do=task&task_id=62" target="_blank">86平米新房装修设计，二室二厅一卫</a>
</td>
                   
                    <td>￥80.00元</td>
                    <td>mxc123</td>
 <td>失败</td>
                    <td>
                    	
<a href="index.php?do=model&model_id=1&view=edit&task_id=62&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=1&view=list&ac=del&task_id=62&page=1" class="button"  onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="61" class="checkbox">61</td>
                    <td class="td28">
                    	<a href="/public/index.php?do=task&task_id=61" target="_blank">我工作室需要渠道的洽谈合作方案，以及业务跟</a>
</td>
                   
                    <td>￥80.00元</td>
                    <td>mxc123</td>
 <td>失败</td>
                    <td>
                    	
<a href="index.php?do=model&model_id=1&view=edit&task_id=61&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=1&view=list&ac=del&task_id=61&page=1" class="button"  onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="55" class="checkbox">55</td>
                    <td class="td28">
                    	<a href="/public/index.php?do=task&task_id=55" target="_blank">和老婆吵架了，求道歉短信</a>
<font color="red">[荐]</font></td>
                   
                    <td>￥80.00元</td>
                    <td>mxc123</td>
 <td>失败</td>
                    <td>
                    	
<a href="index.php?do=model&model_id=1&view=edit&task_id=55&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=1&view=list&ac=del&task_id=55&page=1" class="button"  onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="49" class="checkbox">49</td>
                    <td class="td28">
                    	<a href="/public/index.php?do=task&task_id=49" target="_blank">8000元至1万元订单，4月9日ECshop模版订制请</a>
<font color="red">[荐]</font></td>
                   
                    <td>￥800.00元</td>
                    <td>mxc123</td>
 <td>失败</td>
                    <td>
                    	
<a href="index.php?do=model&model_id=1&view=edit&task_id=49&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=1&view=list&ac=del&task_id=49&page=1" class="button"  onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="33" class="checkbox">33</td>
                    <td class="td28">
                    	<a href="/public/index.php?do=task&task_id=33" target="_blank">淘宝女装网店装修设计</a>
<font color="red">[荐]</font></td>
                   
                    <td>￥80.00元</td>
                    <td>樱桃小丸子</td>
 <td>失败</td>
                    <td>
                    	
<a href="index.php?do=model&model_id=1&view=edit&task_id=33&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=1&view=list&ac=del&task_id=33&page=1" class="button"  onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="32" class="checkbox">32</td>
                    <td class="td28">
                    	<a href="/public/index.php?do=task&task_id=32" target="_blank">饮品店门头和店内装修效果图</a>
<font color="red">[荐]</font></td>
                   
                    <td>￥80.00元</td>
                    <td>猪八戒</td>
 <td>失败</td>
                    <td>
                    	
<a href="index.php?do=model&model_id=1&view=edit&task_id=32&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=1&view=list&ac=del&task_id=32&page=1" class="button"  onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    
                  <tr>
                    <td colspan="7">
                    <div class="page fl_right"><span> 1 / 2页 </span> <a class="selected">1</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=model&model_id=1&view=list&w[task_id]=&w[task_title]=&w[task_status]=&ord[0]=&ord[1]=&page=1&page_size=10&page=2','2','1')>2</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=model&model_id=1&view=list&w[task_id]=&w[task_title]=&w[task_status]=&ord[0]=&ord[1]=&page=1&page_size=10&page=2','2','1')>下一页>></a></div>
                    
                    <div class="clearfix">
                  		<input type="checkbox" onclick="checkall();" id="checkbox" name="checkbox"/>
                        <label for="checkbox">全选</label>
                        <input type="hidden" name="sbt_action" class="sbt_action"/>
                        <button type="submit" value="批量删除" onclick="return batch_act(this,'frm_list');" class="pill negative" ><span class="icon trash"></span>批量删除</button>
                        <button type="submit" value="批量审核" onclick="return batch_act(this,'frm_list');"  class="positive pill negative"><span class="icon check">&nbsp;</span>批量审核</button>
                    </div>
                    </td>
                  </tr>
                </tbody>
              </table></div>
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
<script type="text/javascript">
var url = 'index.php?do=model&model_id=1&view=list&w[task_id]=&w[task_title]=&w[task_status]=&ord[0]=&ord[1]=&page=1&page_size=10';
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
