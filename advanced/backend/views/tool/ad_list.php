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
    <h1>广告管理</h1>
    <div class="tool">
        <a  href="index.php?r=tool/ad" >广告位</a> 
<!--<a href="index.php?do=tpl&view=ad_private_add" >广告位添加</a>-->  
        <a href="index.php?r=tool/ad_list" class="here" >广告列表</a>
       
    </div>
</div>
    <!--页头结束-->
 
    <!--提示结束-->
     
        <div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
           
    <form action="#" method="get" name="s" id="sl">
            	<input type="hidden" name="do" value="tpl">
<input type="hidden" name="view" value="ad_list">
<input type="hidden" name="type" value="">
<input type="hidden" name="page" value="1">

                <table cellspacing="0" cellpadding="0">
<tbody>
                        <tr>
                           
                            <th>广告名称</th>
                            <td><input type="text" value="" name="ad_name" class="txt"/>*支持模糊查询</td>
                             <th></th><td></td>
</tr>
    
                        
                        <tr> 
                            <th>广告类型</th>
                            <td>
                            	<select class="ps vm" name="target_id" id="catid" onchange="return sync_select();">
                            		<option value=""/>请选择</option>
                            	<option  value="1"/>全局_顶部通栏广告</option>
<option  value="2"/>首页_左右对联广告</option>
<option  value="4"/>首页_中部一栏广告</option>
<option  value="5"/>首页_中部二栏广告</option>
<option  value="6"/>首页_中部三栏广告</option>
<option  value="7"/>首页_中部四栏广告</option>
<option  value="8"/>任务大厅_头部广告</option>
<option  value="9"/>任务大厅_右侧广告</option>
<option  value="10"/>任务大厅_底部广告</option>
<option  value="11"/>威客商城_头部广告</option>
<option  value="12"/>威客商城_右侧广告</option>
<option  value="13"/>威客商城_底部广告</option>
<option  value="14"/>服务商_头部广告</option>
<option  value="15"/>服务商_右侧广告</option>
<option  value="16"/>服务商_底部广告</option>
<option  value="17"/>资讯中心_头部广告</option>
<option  value="18"/>资讯中心_底部广告</option>
<option  value="19"/>任务详情_底部广告</option>
<option  value="20"/>商品详情_底部广告</option>
<option  value="21"/>资讯详情_头部广告</option>
<option  value="22"/>资讯详情_底部广告</option>
<option  value="3"/>首页_顶部幻灯广告</option>

</select>
</td>
<th>结果排序</th>
<td>
                                <select name="ord[]">
                                	<option value="ad_id"  selected="selected">默认排序</option>
                                	<option value="end_time" >终止时间</option>
                                </select>
                                <select name="ord[]">
                               		 <option selected="selected"  value="desc">递减</option>
                                	<option  value="asc">递增</option>
                                </select>
</td> 
                            <th>显示结果</th>
                            <td><select name="page_size">
<option value="10" >每页显示10</option>
<option value="20" >每页显示20</option>
<option value="30" >每页显示30</option>
</select>
                              	<button class="pill" type="submit" value="搜索" name="sbt_search">
                            		<span class="icon magnifier"></span>搜索</button>
</td>
                        </tr>
                    </tbody>
                </table>
            </form>

        </div>
    </div>
    <!--搜索结束-->
    
    <div class="box list">
    	<div class="title"><h2>广告列表</h2></div>
        <div class="detail">
        	<form action="" id='frm_list' method="post">
        	<div id="ajax_dom"> 
              <table cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <th width="20%">广告标题</th>
<th width="15%">位置</th>
                    <th width="15%">起始时间</th>
                    <th width="15%">终止时间</th>
<th width="15%">编辑时间</th>
<th width="10%">是否可用</th>
                    <th>操作</th>
                  </tr>
                  
                                    <tr class="item">
                  
                    <td class="td28">xdfvcxvcxvxvxcvxcb</td>
                    <td>资讯详情_头部广告</td><!-- 投放范围 -->
    <td>永久有效</td> <!-- 起始时间 -->
                    <td>永久有效</td>
<td>2014-12-16</td>
                    <td><span style="color:green">可用</span></td><!-- 是否可用 -->
                    <td>
<!-- <a href="/public/index.php?do=article&view=article_info&art_id=" target="_blank">浏览</a> -->
<a href="index.php?do=tpl&view=ad_add&ac=edit&ad_id=292&target_id=21&page=1&ord=" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<!--<a href="index.php?do=tpl&view=ad_list&ac=del&ad_id=292&target_id=21&page=1&ord="  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>-->
<!-- <a href="#" onclick="javascript:setCopy(document.getElementById('code_292').value, 复制代码);" class="button"><span class="book icon"></span>复制</a>  -->
</td>
                  </tr>
                                    <tr class="item">
                  
                    <td class="td28">震撼上市</td>
                    <td>首页_顶部幻灯广告</td><!-- 投放范围 -->
    <td>永久有效</td> <!-- 起始时间 -->
                    <td>永久有效</td>
<td>2013-04-01</td>
                    <td><span style="color:green">可用</span></td><!-- 是否可用 -->
                    <td>
<!-- <a href="/public/index.php?do=article&view=article_info&art_id=" target="_blank">浏览</a> -->
<a href="index.php?do=tpl&view=ad_add&ac=edit&ad_id=236&target_id=3&page=1&ord=" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<!--<a href="index.php?do=tpl&view=ad_list&ac=del&ad_id=236&target_id=3&page=1&ord="  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>-->
<!-- <a href="#" onclick="javascript:setCopy(document.getElementById('code_236').value, 复制代码);" class="button"><span class="book icon"></span>复制</a>  -->
</td>
                  </tr>
                                    <tr class="item">
                  
                    <td class="td28">adv</td>
                    <td>商品详情_底部广告</td><!-- 投放范围 -->
    <td>永久有效</td> <!-- 起始时间 -->
                    <td>永久有效</td>
<td>2013-04-10</td>
                    <td><span style="color:green">可用</span></td><!-- 是否可用 -->
                    <td>
<!-- <a href="/public/index.php?do=article&view=article_info&art_id=" target="_blank">浏览</a> -->
<a href="index.php?do=tpl&view=ad_add&ac=edit&ad_id=291&target_id=20&page=1&ord=" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<!--<a href="index.php?do=tpl&view=ad_list&ac=del&ad_id=291&target_id=20&page=1&ord="  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>-->
<!-- <a href="#" onclick="javascript:setCopy(document.getElementById('code_291').value, 复制代码);" class="button"><span class="book icon"></span>复制</a>  -->
</td>
                  </tr>
                                    <tr class="item">
                  
                    <td class="td28">adv</td>
                    <td>任务详情_底部广告</td><!-- 投放范围 -->
    <td>永久有效</td> <!-- 起始时间 -->
                    <td>永久有效</td>
<td>2013-04-10</td>
                    <td><span style="color:green">可用</span></td><!-- 是否可用 -->
                    <td>
<!-- <a href="/public/index.php?do=article&view=article_info&art_id=" target="_blank">浏览</a> -->
<a href="index.php?do=tpl&view=ad_add&ac=edit&ad_id=290&target_id=19&page=1&ord=" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<!--<a href="index.php?do=tpl&view=ad_list&ac=del&ad_id=290&target_id=19&page=1&ord="  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>-->
<!-- <a href="#" onclick="javascript:setCopy(document.getElementById('code_290').value, 复制代码);" class="button"><span class="book icon"></span>复制</a>  -->
</td>
                  </tr>
                                    <tr class="item">
                  
                    <td class="td28">adv</td>
                    <td>资讯中心_头部广告</td><!-- 投放范围 -->
    <td>永久有效</td> <!-- 起始时间 -->
                    <td>永久有效</td>
<td>2014-12-16</td>
                    <td><span style="color:green">可用</span></td><!-- 是否可用 -->
                    <td>
<!-- <a href="/public/index.php?do=article&view=article_info&art_id=" target="_blank">浏览</a> -->
<a href="index.php?do=tpl&view=ad_add&ac=edit&ad_id=288&target_id=17&page=1&ord=" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<!--<a href="index.php?do=tpl&view=ad_list&ac=del&ad_id=288&target_id=17&page=1&ord="  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>-->
<!-- <a href="#" onclick="javascript:setCopy(document.getElementById('code_288').value, 复制代码);" class="button"><span class="book icon"></span>复制</a>  -->
</td>
                  </tr>
                                    <tr class="item">
                  
                    <td class="td28">adv</td>
                    <td>资讯中心_底部广告</td><!-- 投放范围 -->
    <td>永久有效</td> <!-- 起始时间 -->
                    <td>永久有效</td>
<td>2014-12-16</td>
                    <td><span style="color:green">可用</span></td><!-- 是否可用 -->
                    <td>
<!-- <a href="/public/index.php?do=article&view=article_info&art_id=" target="_blank">浏览</a> -->
<a href="index.php?do=tpl&view=ad_add&ac=edit&ad_id=289&target_id=18&page=1&ord=" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<!--<a href="index.php?do=tpl&view=ad_list&ac=del&ad_id=289&target_id=18&page=1&ord="  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>-->
<!-- <a href="#" onclick="javascript:setCopy(document.getElementById('code_289').value, 复制代码);" class="button"><span class="book icon"></span>复制</a>  -->
</td>
                  </tr>
                                    <tr class="item">
                  
                    <td class="td28">adv</td>
                    <td>服务商_底部广告</td><!-- 投放范围 -->
    <td>永久有效</td> <!-- 起始时间 -->
                    <td>永久有效</td>
<td>2014-12-16</td>
                    <td><span style="color:green">可用</span></td><!-- 是否可用 -->
                    <td>
<!-- <a href="/public/index.php?do=article&view=article_info&art_id=" target="_blank">浏览</a> -->
<a href="index.php?do=tpl&view=ad_add&ac=edit&ad_id=287&target_id=16&page=1&ord=" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<!--<a href="index.php?do=tpl&view=ad_list&ac=del&ad_id=287&target_id=16&page=1&ord="  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>-->
<!-- <a href="#" onclick="javascript:setCopy(document.getElementById('code_287').value, 复制代码);" class="button"><span class="book icon"></span>复制</a>  -->
</td>
                  </tr>
                                    <tr class="item">
                  
                    <td class="td28">adc</td>
                    <td>服务商_右侧广告</td><!-- 投放范围 -->
    <td>永久有效</td> <!-- 起始时间 -->
                    <td>永久有效</td>
<td>2014-12-16</td>
                    <td><span style="color:green">可用</span></td><!-- 是否可用 -->
                    <td>
<!-- <a href="/public/index.php?do=article&view=article_info&art_id=" target="_blank">浏览</a> -->
<a href="index.php?do=tpl&view=ad_add&ac=edit&ad_id=286&target_id=15&page=1&ord=" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<!--<a href="index.php?do=tpl&view=ad_list&ac=del&ad_id=286&target_id=15&page=1&ord="  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>-->
<!-- <a href="#" onclick="javascript:setCopy(document.getElementById('code_286').value, 复制代码);" class="button"><span class="book icon"></span>复制</a>  -->
</td>
                  </tr>
                                    <tr class="item">
                  
                    <td class="td28">首页_顶部幻灯广告123</td>
                    <td>首页_顶部幻灯广告</td><!-- 投放范围 -->
    <td>永久有效</td> <!-- 起始时间 -->
                    <td>永久有效</td>
<td>2013-03-30</td>
                    <td><span style="color:green">可用</span></td><!-- 是否可用 -->
                    <td>
<!-- <a href="/public/index.php?do=article&view=article_info&art_id=" target="_blank">浏览</a> -->
<a href="index.php?do=tpl&view=ad_add&ac=edit&ad_id=234&target_id=3&page=1&ord=" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<!--<a href="index.php?do=tpl&view=ad_list&ac=del&ad_id=234&target_id=3&page=1&ord="  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>-->
<!-- <a href="#" onclick="javascript:setCopy(document.getElementById('code_234').value, 复制代码);" class="button"><span class="book icon"></span>复制</a>  -->
</td>
                  </tr>
                                    <tr class="item">
                  
                    <td class="td28">震撼上市3</td>
                    <td>首页_顶部幻灯广告</td><!-- 投放范围 -->
    <td>永久有效</td> <!-- 起始时间 -->
                    <td>永久有效</td>
<td>2013-03-30</td>
                    <td><span style="color:green">可用</span></td><!-- 是否可用 -->
                    <td>
<!-- <a href="/public/index.php?do=article&view=article_info&art_id=" target="_blank">浏览</a> -->
<a href="index.php?do=tpl&view=ad_add&ac=edit&ad_id=240&target_id=3&page=1&ord=" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<!--<a href="index.php?do=tpl&view=ad_list&ac=del&ad_id=240&target_id=3&page=1&ord="  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>-->
<!-- <a href="#" onclick="javascript:setCopy(document.getElementById('code_240').value, 复制代码);" class="button"><span class="book icon"></span>复制</a>  -->
</td>
                  </tr>
                                    <tr>
                    <td colspan="7">
                    <div class="clearfix">
                        <input type="hidden" name="sbt_action" class="sbt_action"/>
<select class="ps vm" id="ad_target_id">
<option value="">请选择</option>
                            	<option selected="selected" value="1">全局_顶部通栏广告</option>
<option  value="2">首页_左右对联广告</option>
<option  value="4">首页_中部一栏广告</option>
<option  value="5">首页_中部二栏广告</option>
<option  value="6">首页_中部三栏广告</option>
<option  value="7">首页_中部四栏广告</option>
<option  value="8">任务大厅_头部广告</option>
<option  value="9">任务大厅_右侧广告</option>
<option  value="10">任务大厅_底部广告</option>
<option  value="11">威客商城_头部广告</option>
<option  value="12">威客商城_右侧广告</option>
<option  value="13">威客商城_底部广告</option>
<option  value="14">服务商_头部广告</option>
<option  value="15">服务商_右侧广告</option>
<option  value="16">服务商_底部广告</option>
<option  value="17">资讯中心_头部广告</option>
<option  value="18">资讯中心_底部广告</option>
<option  value="19">任务详情_底部广告</option>
<option  value="20">商品详情_底部广告</option>
<option  value="21">资讯详情_头部广告</option>
<option  value="22">资讯详情_底部广告</option>
<option  value="3">首页_顶部幻灯广告</option>
</select>
<a href="#" id="add_ad" class="button" onclick="return setlinks();"><span class="check icon"></span>添加广告</a>
                    </div>
                    </td>
                  </tr>
                </tbody>
              </table>
  <div class="page"><span> 1 / 3页 </span> <a class="selected">1</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=tpl&view=ad_list&ad_id=&ad_type=&ad_name=&target_id=&ord=&page=1&page=2','2','1')>2</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=tpl&view=ad_list&ad_id=&ad_type=&ad_name=&target_id=&ord=&page=1&page=3','3','1')>3</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=tpl&view=ad_list&ad_id=&ad_type=&ad_name=&target_id=&ord=&page=1&page=2','2','1')>下一页>></a></div>
              </div>
        	</form>
        </div>       
    </div>
    <script type="text/javascript">
    	function setlinks(){
    		var target_id=document.getElementById("ad_target_id");
    		var alink=document.getElementById("add_ad");
    		if(target_id.value!=""){
    			alink.href="index.php?do=tpl&view=ad_add&target_id="+target_id.value;
    			return true;
    		}
    		return false;
    	}
    	function sync_select(){
    		var cat=document.getElementById("catid");
    		var target=document.getElementById("ad_target_id");
    		if(cat.value!=""){
    			var i=cat.selectedIndex;
    			target.options['i'].selected=true;
    		}
    	}
    	function update_order(n_id,n_value){
    		$.get("index.php?do=tpl&view=ad_list&action=u_order",{u_id:n_id,u_value:n_value});
    	}
    </script>
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
