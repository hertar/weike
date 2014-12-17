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
    	<h1>普通招标管理</h1>
         <div class="tool">
         	<a href="index.php?r=model/normal_task_list" class="here">任务列表</a>
<!--<a href="index.php?do=model&model_id=4&view=config">任务配置</a>-->
 </div>
</div>
    <!--页头结束-->

    <!--提示结束-->
     
        <div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
           
    <form action="index.php?do=model&model_id=4&view=list" method="post">
 <input type="hidden" value="1" name="page">
<table cellspacing="0" cellpadding="0">
<tbody>
                        <tr>
                            <th>任务ID</th>
                            <td><input type="text" value="" name="w[task_id]" class="txt"/></td>
                            <th>任务标题</th>
                            <td><input type="text" value="" name="w[task_title]" class="txt"/> 支持模糊查询</td>
                             <th></th><td>	<button class="pill" type="submit" value="搜索" name="sbt_search">
                            		<span class="icon magnifier">&nbsp;</span>搜索</button></td>
</tr>    
                        <tr>
                            <th>请选择任务状态</th>
                            <td>
                            	<select class="ps vm" name="w[task_status]" id="catid" onchange="statusJump(this.value)">
                            		<option value="">请选择</option>
                            	<option value="0" >未付款</option>
<option value="1" >待审核</option>
<option value="2" >投标中</option>
<option value="3" >选标中</option>
<option value="4" >工作中</option>
<option value="7" >冻结</option>
<option value="8" >结束</option>
<option value="9" >失败</option>
<option value="10" >审核失败</option>
	
</select>
</td>
<th>结果排序</th>
<td>
                      <select name="w[ord][]">
                           <option value="task_id"  selected="selected">默认排序</option>
                           <option value="start_time" >发布时间</option>
                      </select>
                      <select name="w[ord][]" onchange="orderJump(this.value)">
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
                              </td>
                        </tr>
                    </tbody>
                </table>
            </form>

        </div>
    </div>
    <!--搜索结束-->
    <div class="box list">
    	<div class="title"><h2>普通招标任务列表</h2></div>
        <div class="detail">
        	<form action="" id='frm_list' method="post">
        	<input type="hidden" value="1" name="page">
<input type="hidden" name="w[page_size]" value="10">
              <div id="ajax_dom">
              <input type="hidden" value="1" name="page">
              <table cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <th width="8%">ID</th>
                    <th width="22%">任务标题</th>
                    <th width="15%">任务状态</th>
                   <!-- <th width="12%">发布时间</th>-->
                    <th width="20%">任务金额</th>
<th width="8%">发布者</th>
                    <th width="30%">操作</th>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="59" class="checkbox">59</td>
                    <td class="td28"><a href="/public/index.php?do=task&task_id=59" target="_blank">
                    	城市形象策划宣传推广方案</a>
</td>
                    <td>投标中</td>
              
                    <td> ￥20,000.00元-￥30,000.00元</td>
                    <td>hahapa</td>
                    <td>
                    	
<a href="index.php?do=model&model_id=4&view=list&task_id=59&ac=recommend&page=1" onclick="return crecomm(this,'',1);" class="button"><span class="cog icon"></span>荐</a>

<a href="index.php?do=model&model_id=4&view=edit&task_id=59&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="56" class="checkbox">56</td>
                    <td class="td28"><a href="/public/index.php?do=task&task_id=56" target="_blank">
                    	求广州，珠三角内正规公司的代开实习证明</a>
</td>
                    <td>投标中</td>
              
                    <td> ￥30,000.00元-￥50,000.00元</td>
                    <td>hahapa</td>
                    <td>
                    	
<a href="index.php?do=model&model_id=4&view=list&task_id=56&ac=recommend&page=1" onclick="return crecomm(this,'',1);" class="button"><span class="cog icon"></span>荐</a>

<a href="index.php?do=model&model_id=4&view=edit&task_id=56&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="53" class="checkbox">53</td>
                    <td class="td28"><a href="/public/index.php?do=task&task_id=53" target="_blank">
                    	情人节不能一起过，求各位帮忙发浪漫示爱</a>
</td>
                    <td>投标中</td>
              
                    <td> ￥30,000.00元-￥50,000.00元</td>
                    <td>hahapa</td>
                    <td>
                    	
<a href="index.php?do=model&model_id=4&view=list&task_id=53&ac=recommend&page=1" onclick="return crecomm(this,'',1);" class="button"><span class="cog icon"></span>荐</a>

<a href="index.php?do=model&model_id=4&view=edit&task_id=53&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="47" class="checkbox">47</td>
                    <td class="td28"><a href="/public/index.php?do=task&task_id=47" target="_blank">
                    	室内107平米三房二厅二卫新房设计</a>
</td>
                    <td>投标中</td>
              
                    <td> ￥50,000.00元-￥60,000.00元</td>
                    <td>hahapa</td>
                    <td>
                    	
<a href="index.php?do=model&model_id=4&view=list&task_id=47&ac=recommend&page=1" onclick="return crecomm(this,'',1);" class="button"><span class="cog icon"></span>荐</a>

<a href="index.php?do=model&model_id=4&view=edit&task_id=47&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="45" class="checkbox">45</td>
                    <td class="td28"><a href="/public/index.php?do=task&task_id=45" target="_blank">
                    	[208079]MBA论文修改（附文稿和修改意见）</a>
</td>
                    <td>投标中</td>
              
                    <td> ￥50,000.00元-￥60,000.00元</td>
                    <td>hahapa</td>
                    <td>
                    	
<a href="index.php?do=model&model_id=4&view=list&task_id=45&ac=recommend&page=1" onclick="return crecomm(this,'',1);" class="button"><span class="cog icon"></span>荐</a>

<a href="index.php?do=model&model_id=4&view=edit&task_id=45&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="41" class="checkbox">41</td>
                    <td class="td28"><a href="/public/index.php?do=task&task_id=41" target="_blank">
                    	[207242]中国长江三峡集团移民局网站界</a>
</td>
                    <td>失败</td>
              
                    <td> ￥30,000.00元-￥50,000.00元</td>
                    <td>hahapa</td>
                    <td>
                    	

<a href="index.php?do=model&model_id=4&view=edit&task_id=41&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=4&view=list&ac=del&task_id=41&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="27" class="checkbox">27</td>
                    <td class="td28"><a href="/public/index.php?do=task&task_id=27" target="_blank">
                    	棋牌类伪原创，能写的来</a>
<font color="red">[荐]</font></td>
                    <td>失败</td>
              
                    <td> ￥1.00元-￥1,000.00元</td>
                    <td>猪八戒</td>
                    <td>
                    	

<a href="index.php?do=model&model_id=4&view=edit&task_id=27&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=4&view=list&ac=del&task_id=27&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="18" class="checkbox">18</td>
                    <td class="td28"><a href="/public/index.php?do=task&task_id=18" target="_blank">
                    	在线审核，网店推广 ， 淘宝铺收藏+收藏三</a>
<font color="red">[荐]</font></td>
                    <td>失败</td>
              
                    <td> ￥1.00元-￥1,000.00元</td>
                    <td>樱桃小丸子</td>
                    <td>
                    	

<a href="index.php?do=model&model_id=4&view=edit&task_id=18&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=4&view=list&ac=del&task_id=18&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="17" class="checkbox">17</td>
                    <td class="td28"><a href="/public/index.php?do=task&task_id=17" target="_blank">
                    	整站flash外包设计</a>
<font color="red">[荐]</font></td>
                    <td>失败</td>
              
                    <td> ￥1.00元-￥1,000.00元</td>
                    <td>猪八戒</td>
                    <td>
                    	

<a href="index.php?do=model&model_id=4&view=edit&task_id=17&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=4&view=list&ac=del&task_id=17&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="13" class="checkbox">13</td>
                    <td class="td28"><a href="/public/index.php?do=task&task_id=13" target="_blank">
                    	设计服装公司品牌LOGO名称</a>
<font color="red">[荐]</font></td>
                    <td>失败</td>
              
                    <td> ￥1.00元-￥1,000.00元</td>
                    <td>猪八戒</td>
                    <td>
                    	

<a href="index.php?do=model&model_id=4&view=edit&task_id=13&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?do=model&model_id=4&view=list&ac=del&task_id=13&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
                                    
                  <tr>
                    <td colspan="7">
                    <div class="page fl_right"><span> 1 / 2页 </span> <a class="selected">1</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=model&model_id=4&view=list&w[task_id]=&w[task_title]=&w[task_status]=&w[ord][0]=&w[ord][1]=&page=1&page_size=10&page=2','2','1')>2</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=model&model_id=4&view=list&w[task_id]=&w[task_title]=&w[task_status]=&w[ord][0]=&w[ord][1]=&page=1&page_size=10&page=2','2','1')>下一页>></a></div>
                    
                    <div class="clearfix">
                  		<input type="checkbox" onclick="checkall();" id="checkbox" name="checkbox"/>
                        <label for="checkbox">全选</label>
                            <input type="hidden" name="sbt_action" class="sbt_action"/>
                        <button type="submit" value="批量删除" onclick="return batch_act(this,'frm_list');" class="pill negative" ><span class="icon trash"></span>批量删除</button>
                        <button type="submit" value="批量审核" onclick="return batch_act(this,'frm_list');"  class="positive pill negative"><span class="icon check">&nbsp;</span>批量审核</button>
                    	<!--<button type="submit" value="批量冻结" onclick="return batch_act(this,'frm_list');"    class="pill negative"><span class="lock icon"></span>批量冻结</button>
<button type="submit" class="positive pill negative"  onclick="return batch_act(this,'frm_list');" value="批量解冻"><span class="unlock icon"></span>批量解冻</button>-->
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
var url = 'index.php?do=model&model_id=4&view=list&w[task_id]=&w[task_title]=&w[task_status]=&w[ord][0]=&w[ord][1]=&page=1&page_size=10';
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
