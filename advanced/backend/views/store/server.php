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
    	<h1>威客服务管理</h1>
        <div class="tool">              
          <!-- <a href="index.php?do=model&model_id=7&view=order">订单管理</a>-->
   <a href="index.php?r=store/server" class="here" >服务列表</a>  
        </div>
</div>
<!--页头结束-->

<!--提示结束-->

<div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
    	<div class="detail" id="detail"> 
<form method="post" action="index.php?do=model&model_id=7&view=list" id="frm_art_search">
<input type="hidden" name="page" value="1">
    		<table cellspacing="0" cellpadding="0">    		
<tbody>
<tr>
<th>编号</th>
                <td><input type="text" class="txt" name="w[service_id]" id="service_id" size="5" value="" onkeyup="clearstr(this);"  ></td>
                <th>服务名称</th>
                <td>
                <input type="text" class="txt" name='w[title]' id="title" value="" size="12" >
</td>
</th>
<th>店主</th>
<td>
<input type="text" class="txt" name="w[username]" id="username" size="12" value="" tips="请输入店铺名称">
</td>
<th>商品状态</th>
<td>
 <select name="w[service_status]">
 	<option value="">商品状态</option>
<option value="1">待审核</option>
<option value="2">出售中</option>
<option value="3">已下架</option>
             			 </select>
 </td>
</th>
</tr>
<tr>
<th>结果排序</th>
<td colspan="5">

 <select name="w[ord]">
                     		 	 <option selected="selected"   value="service_id desc">ID递减</option>
                     		 	 <option   value="service_id asc">ID递增</option>
                     		 </select>
 							<select name="w[page_size]">
                			<option value="10" >每页显示10</option>
                			<option value="20" >每页显示20</option>
                			<option value="30" >每页显示30</option>
            			</select>
           				<button class="pill" type="submit" value="搜索" name="sbt_search"><span class="icon magnifier">&nbsp;</span>搜索</button>
</td>
</tr>          			
           		</tbody>
</table>
</form>
    	</div>
    </div>
<!--搜索结束-->

<div class="box list">	
    <div class="title"><h2>店铺列表</h2></div>
    <div class="detail"> 
<form action="" method="post" name="frm_list" id="frm_list">
<input type="hidden" name="w[page_size]" value="10">
<div id="ajax_dom">
<input type="hidden" name="page" value="1" />
    	<table cellpadding="0" cellspacing="0">
    		<tbody>
        	<tr>
        		<th width="10%">ID</th>
           		<th width="23%">服务名称</th>
           		<th width="7%">报价(元)</th>
<th width="7%">店主</th>
<th width="6%">商品状态</th>
                <th width="17%">操作</th>
            </tr>

                        <tr class="item">
            	<td><input type="checkbox" name="ckb[]" value="14">14</td>
                <td><a target="_blank" href="http://127.0.0.1/weike/index.php?do=service&sid=14">北京家庭装修和设计,就找渝苏皖工长俱乐部</a></td>
                <td>￥1,000.00元</td>
<td>猪八戒</td> 
                <td>待审核</td>
                <td><a href="index.php?do=model&model_id=7&view=edit&service_id=14&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                <a href="index.php?do=model&model_id=7&view=list&w[service_id]=&w[service_status]=&w[title]=&w[username]=&page=1&page_size=10&ac=del&service_id=14&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
<a href="index.php?do=model&model_id=7&view=list&w[service_id]=&w[service_status]=&w[title]=&w[username]=&page=1&page_size=10&ac=pass&service_id=14&page=1"  onclick="return cdel(this,'确定上架此商品吗？');" class="button"><span class="cog icon"></span>上架</a>
</td>
            </tr>
                        <tr class="item">
            	<td><input type="checkbox" name="ckb[]" value="11">11</td>
                <td><a target="_blank" href="http://127.0.0.1/weike/index.php?do=service&sid=11">【创意】著作权（版权）登记</a></td>
                <td>￥100.00元</td>
<td>猪八戒</td> 
                <td>出售中</td>
                <td><a href="index.php?do=model&model_id=7&view=edit&service_id=11&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                <a href="index.php?do=model&model_id=7&view=list&w[service_id]=&w[service_status]=&w[title]=&w[username]=&page=1&page_size=10&ac=del&service_id=11&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
<a href="index.php?do=model&model_id=7&view=list&w[service_id]=&w[service_status]=&w[title]=&w[username]=&page=1&page_size=10&ac=nopass&service_id=11&page=1"  onclick="return cdel(this,'确定将此商品下架吗？');" class="button"><span class="lock icon"></span>下架</a>
</td>
            </tr>
                        <tr class="item">
            	<td><input type="checkbox" name="ckb[]" value="10">10</td>
                <td><a target="_blank" href="http://127.0.0.1/weike/index.php?do=service&sid=10">【创意】企业（个人）法律咨询</a></td>
                <td>￥1,000.00元</td>
<td>猪八戒</td> 
                <td>出售中</td>
                <td><a href="index.php?do=model&model_id=7&view=edit&service_id=10&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                <a href="index.php?do=model&model_id=7&view=list&w[service_id]=&w[service_status]=&w[title]=&w[username]=&page=1&page_size=10&ac=del&service_id=10&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
<a href="index.php?do=model&model_id=7&view=list&w[service_id]=&w[service_status]=&w[title]=&w[username]=&page=1&page_size=10&ac=nopass&service_id=10&page=1"  onclick="return cdel(this,'确定将此商品下架吗？');" class="button"><span class="lock icon"></span>下架</a>
</td>
            </tr>
                        <tr class="item">
            	<td><input type="checkbox" name="ckb[]" value="6">6</td>
                <td><a target="_blank" href="http://127.0.0.1/weike/index.php?do=service&sid=6">【创意】装修</a></td>
                <td>￥5,000.00元</td>
<td>猪八戒</td> 
                <td>出售中</td>
                <td><a href="index.php?do=model&model_id=7&view=edit&service_id=6&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                <a href="index.php?do=model&model_id=7&view=list&w[service_id]=&w[service_status]=&w[title]=&w[username]=&page=1&page_size=10&ac=del&service_id=6&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
<a href="index.php?do=model&model_id=7&view=list&w[service_id]=&w[service_status]=&w[title]=&w[username]=&page=1&page_size=10&ac=nopass&service_id=6&page=1"  onclick="return cdel(this,'确定将此商品下架吗？');" class="button"><span class="lock icon"></span>下架</a>
</td>
            </tr>
                        <tr class="item">
            	<td><input type="checkbox" name="ckb[]" value="4">4</td>
                <td><a target="_blank" href="http://127.0.0.1/weike/index.php?do=service&sid=4">【创意】3d生物模型制作（包括材质贴图）</a></td>
                <td>￥1,000.00元</td>
<td>shangk</td> 
                <td>出售中</td>
                <td><a href="index.php?do=model&model_id=7&view=edit&service_id=4&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                <a href="index.php?do=model&model_id=7&view=list&w[service_id]=&w[service_status]=&w[title]=&w[username]=&page=1&page_size=10&ac=del&service_id=4&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
<a href="index.php?do=model&model_id=7&view=list&w[service_id]=&w[service_status]=&w[title]=&w[username]=&page=1&page_size=10&ac=nopass&service_id=4&page=1"  onclick="return cdel(this,'确定将此商品下架吗？');" class="button"><span class="lock icon"></span>下架</a>
</td>
            </tr>
                        <tr class="item">
            	<td><input type="checkbox" name="ckb[]" value="3">3</td>
                <td><a target="_blank" href="http://127.0.0.1/weike/index.php?do=service&sid=3">【创意】著作权（版权）登记</a></td>
                <td>￥20.00元</td>
<td>丸美弹力</td> 
                <td>出售中</td>
                <td><a href="index.php?do=model&model_id=7&view=edit&service_id=3&page=1" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                <a href="index.php?do=model&model_id=7&view=list&w[service_id]=&w[service_status]=&w[title]=&w[username]=&page=1&page_size=10&ac=del&service_id=3&page=1"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
<a href="index.php?do=model&model_id=7&view=list&w[service_id]=&w[service_status]=&w[title]=&w[username]=&page=1&page_size=10&ac=nopass&service_id=3&page=1"  onclick="return cdel(this,'确定将此商品下架吗？');" class="button"><span class="lock icon"></span>下架</a>
</td>
            </tr>
             
          
          	<tr>
            	<td colspan="8">
                    <div class="page fl_right"></div>
                    <div class="clearfix">
                  		<input type="checkbox" class="checkbox" id="checkbox" onclick="checkall();"/>
                        <label for="checkbox">全选</label>  
                        <input type="hidden" name="sbt_action" class="sbt_action" />
<button class="pill negative" type="submit" value="批量删除" onclick="return batch_act(this,'frm_list');"><span class="icon trash">&nbsp;</span>批量删除</button>                        
                        <button class="pill negative" type="submit" value="批量上架" onclick="return batch_act(this,'frm_list');" ><span class="icon check">&nbsp;</span>批量上架</button>
<button class="pill negative" type="submit" value="批量下架" onclick="return batch_act(this,'frm_list');"><span class="icon lock">&nbsp;</span>批量下架</button>
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
