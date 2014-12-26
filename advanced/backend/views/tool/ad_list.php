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
        
        
        <a href="index.php?r=tool/ad_list" class="here" >广告列表</a>
        <a href="index.php?r=tool/ad_add" >广告添加</a>  
       
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

                    <th width="15%">起始时间</th>
                    <th width="15%">终止时间</th>
                    <th width="15%">编辑时间</th>
                    <th width="10%">是否可用</th>
                    <th>操作</th>
                  </tr>
                  <?php
                    foreach($list as $v){
                  ?>
                                    <tr class="item">
                  
                    <td class="td28"><?php echo $v["ad_name"]?></td>
                    <?php
                        if($v["start_time"]==0){
                    ?>
    <td>永久有效</td> <!-- 起始时间 -->
    <?php
                    }
    ?>
                    <?php
                        if($v["end_time"]==0){
                    ?>
                    <td>永久有效</td>
                    <?php
                        }
                    ?>
<td><?php echo date("Y-m-d",$v["on_time"])?></td>
    <?php
        if($v["is_allow"]==1){
    ?>
                    <td><span style="color:green" >可用</span></td><!-- 是否可用 -->
    <?php
        }else{
    ?>
                    <td><span style="color:green" >不可用</span></td><!-- 是否可用 -->
   <?php
        }
  ?>          
                    <td>
<!-- <a href="/public/index.php?do=article&view=article_info&art_id=" target="_blank">浏览</a> -->
<a href="index.php?r=tool/ad_edit&ad_id=<?php echo $v["ad_id"]?>" class="button dbl_target"><span class="pen icon"></span>编辑</a>
<a href="index.php?r=tool/ad_del&ad_id=<?php echo $v["ad_id"]?>"  onclick="return cdel(this);" class="button"><span class="trash icon"></span>删除</a>
<!-- <a href="#" onclick="javascript:setCopy(document.getElementById('code_292').value, 复制代码);" class="button"><span class="book icon"></span>复制</a>  -->
</td>
                  </tr>
                    <?php                 
                    }
                    ?>
                   
           
                           
                                    <tr>
                    <td colspan="7">
                    <div class="clearfix">
                        <input type="hidden" name="sbt_action" class="sbt_action"/>

<a href="index.php?r=tool/ad_add" id="add_ad" class="button"><span class="check icon"></span>添加广告</a>
                    </div>
                    </td>
                  </tr>
                </tbody>
              </table>
<?php
use yii\widgets\LinkPager;
?>
  <div class="page">
           <?= LinkPager::widget(['pagination' => $pages]) ?>
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
