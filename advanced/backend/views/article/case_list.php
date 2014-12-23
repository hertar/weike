<?php
use yii\widgets\LinkPager;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\WkWitkeyArticleCategory;
use app\models\article;
use yii\data\Pagination;
use yii\db\Query;
?>
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
        <?php foreach($model as $key=>$val){?>
                                <tr class="item"  id=" <?php echo $val['case_id'];?>  ">
                	<td>
                		<input type="checkbox" name="ckb"  class="checkbox" value="<?php echo $val['case_id'];?>">
                	</td>
                    <td>
                      <?php echo $val['case_id'];?>                   </td>
                    <td>
                        <a href="/public/index.php?do=service&sid=5" target="_blank">
                        	   <?php echo $val['case_title'];?>   </a>
   
                    </td>
                    <td>
                        ￥   <?php echo $val['case_price'];?>   元                    </td>
                    <td>
                          <?php if($val['fina_type']=='task'){
                              echo "任务";
                          }else if($val['fina_type']=='service'){
                              echo "商品";
                          }?>                      </td>
                    <td>
                       <?php echo date('Y-m-d H:m:s',time($val['on_time']));?>                  </td>
                    <td>
                        <a href="index.php?do=case&view=add&case_id=9" class="button dbl_target"><span class="pen icon"></span>编辑</a>
                       <a href="" onclick="return cdel(<?php echo $val['case_id']?>);" class="button"><span class="trash icon"></span>删除</a>
                    </td>
                </tr>
               
        <?php } ?>
               
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
             <div class ="page">
                <?= LinkPager::widget(['pagination' => $pages]); ?> 
            </div>
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
$.ajax({
   type: "GET",
   url: "index.php?r=article/case_del",
    data: "art_id="+o,
   success: function(msg){
    if(msg==1){
        $("#"+o).remove();
    }else{
        alert("删除失败");
    }
   }
   
}); 
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
var conf = $(":checkbox[name='ckb']:checked").length;
if (conf > 0) {
d.confirm("确定" + c + '?', function() {
var ida = document.getElementsByName("ckb");
var idarr=new Array();
var idaa=new Array();
var flag=0;
 for(var i=0;i<conf;i++){
if(ida[i].checked==true){
    idarr[flag]=ida[i].value;
     idaa[flag]=ida[i].value;
    flag++;
    }
}
     $.ajax({
    type: "GET",
    url: "index.php?r=article/article_delall",
    data: "id="+idarr,
   success: function(msg){
    if(msg==1){
      for(var i=0;i<idarr.length;i++){
          $("#"+idarr[i]).remove();
      } 
    }else{
        alert("删除成功");
    }
   }
   
}); 
//$(".sbt_action").val(c);
//$("#" + frm).submit();
});
} else {
d.alert("您没有选择任何操作项");
}
return false;
}
</script>
</body>
</html>
