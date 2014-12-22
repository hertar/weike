<?php
use yii\widgets\LinkPager;
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
    	<h1>店铺管理</h1>
          <div class="tool">          
<!--<a href="index.php?do=store&view=config" >店铺配置</a>-->
 <a href="index.php?r=store/store_list" class="here">店铺列表</a>
    	</div>
</div>


      <div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
<form action="index.php?do=store&view=list" method="post" id="frm_list">
        	<input type="hidden" name="do"   value="store">
<input type="hidden" name="view" value="list">
<input type="hidden" name="type" value="">
<input type="hidden" name="page" value="1">
<table cellspacing="0" cellpadding="0">
 <tbody>
 	<tr>
 		<th>ID</th>

<td><input type="text" class="txt" name="txt_shop_id" value="" id='ida' onkeyup="clearstr(this);"></td>
<th>店铺名称</th>
<td><input type="text" class="txt" name='txt_name' value=""  id='title' onkeyup="clearspecial(this);"></td>

 	</tr>

<tr>
<th>显示条数</th>
<td>

<select name="page_size" onchange="pageJump(value)">
     <option value="10" <?php if($pagesize==10){echo "selected";}?>>每页显示10条</option>
     <option value="5" <?php if($pagesize==5){echo "selected"; }?>>每页显示5条</option>
     <option value="3" <?php if($pagesize==3){echo "selected"; }?>>每页显示3条</option>
</select>
</td>
<th>结果排序</th>
<td>
 <select name="w[ord][]">
                           <option value="shop_id"  selected="selected">默认排序</option>
                           <option value="on_time" >申请时间</option>
                      </select>

                      <select name="ord[]" onchange="orderJump(this.value)">
                                <option  value="asc"  <?php if($ord=='asc'){echo "selected";}?>>递增</option>
                                <option  value="desc"  <?php if($ord=='desc'){echo "selected";}?>>递减</option>
                                </select>
<button type="button" name="sbt_search" value=搜索 class="pill"  onclick="search_task()" />

<span class="icon magnifier">&nbsp;</span>搜索</button>
</td>
</tr>
 
 </tbody>
</table>

        </div>
 </div>


<div class="box list">
 	<div class="title"><h2>店铺列表</h2></div>
      	<div class="detail">
 		 <!--<span style="color:red;"></span>-->
<div id="ajax_dom">
<input type="hidden" name="page" value="1">
  		<table width="100%" border="0" cellspacing="0" cellpadding="0" >
          <tr>
          	<th width="15%"><input type="checkbox" id="checkbox" onclick="checkall();">店铺ID</th>
          	<th width="15%">用户名</th>
            <th width="15%">店铺名</th>
            <th width="20%">申请时间</th>
            <th width="15%">状态</th>
            <th width="20%">操作</th>
</tr>

                     <?php             foreach($list as $key=>$val)
      {?>
        <tr class="item">
        	<td><input type="checkbox" name="ckb" class="checkbox" value="<?php echo $val['shop_id']?>"><?php echo $val['shop_id']?></td>
<td><?php echo $val['username']?></td>
           <td><?php echo $val['shop_name']?></td>
           <td><?php echo date("Y-m-d",$val['on_time'])?></td>
           <td>
               <?php if($val['shop_status']==2){ ?>
                       <span> 待审核</span>          

                    <?php }else  if($val['shop_status']==0){ ?>
                      <span> 关闭</span>
                   <?php }else  if($val['shop_status']==1){?>
                      <span> 开启</span>
                   <?php }else  if($val['shop_status']==3){?>
                      <span> 审核未通过</span>
                   <?php } ?>
           </td>
<td>
     <?php    if($val['shop_status']==2){?>
                        <a href="index.php?r=store/up_status&id=<?php echo $val['shop_id'] ?>&stu=0" class="button"><span class="check icon"></span>通过审核</a>
                        <a href="index.php?r=store/up_status&id=<?php echo $val['shop_id'] ?>&stu=3" class="button">审核不通过</a>
                        <a href="index.php?r=store/up_shop&id=<?php echo $val['shop_id'] ?>" class="button"><span class="pen icon"></span>查看</a>
                   <?php }else  if($val['shop_status']==0){?>
                       <a href="index.php?r=store/up_status&id=<?php echo $val['shop_id'] ?>&stu=1" class="button"><span class="pen icon"></span>开启</a>
                       <a href="index.php?r=store/up_shop&id=<?php echo $val['shop_id'] ?>" class="button"><span class="pen icon"></span>查看</a>
                  <?php }else  if($val['shop_status']==1){?>
                       <a href="index.php?r=store/up_status&id=<?php echo $val['shop_id'] ?>&stu=0" class="button"><span class="pen icon"></span>关闭</a>
                       <a href="index.php?r=store/up_shop&id=<?php echo $val['shop_id'] ?>" class="button"><span class="pen icon"></span>查看</a>
                   <?php }else  if($val['shop_status']==3){?>
                      <a href="index.php?r=store/up_shop&id=<?php echo $val['shop_id'] ?>" class="button"><span class="pen icon"></span>查看</a>
                   <?php } ?>
                       

</td>
          </tr>
       <?php }?>          

           <tr>
            <td colspan="7">
            	<label for="checkbox">  
全选</label>
<input type="hidden" name="sbt_action" class="sbt_action"/>　

<button type="submit" name="sbt_action" value="批量删除" class="negative pill button" onclick="return batch_act(this,'index.php?r=store/del_shop')" >

<span class="trash icon"></span>批量删除</button>
<button type="submit" name="sbt_action" value="批量审核" class="pill negative" onclick="return batch_act(this,'frm_list');" >
<span class="lock icon"></span>批量审核</button>
</td>
  </tr>
        </table>

<div class="page"><?= LinkPager::widget(['pagination' => $pages]); ?></div>

</div>
</div>
</form>

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
var conf = $(":checkbox[name='ckb']:checked").length;
if (conf > 0) {
d.confirm("确定" + c + '?', function() {
var conf = $(":checkbox[name='ckb']:checked").length;
var ida = document.getElementsByName("ckb");
var idarr=new Array();
		var flag=0;
		for (var i=0; i<conf; i++)
		{
			if(ida[i].checked==true)
			{
				idarr[flag]=ida[i].value;
				flag++;
			}
		}
 location.href="index.php?r=store/del_shop&id="+idarr;

});
} else {
d.alert("您没有选择任何操作项");
}
return false;
}
function pageJump(value){
location.href="index.php?r=store/store_list&pagesize="+value;
}
function orderJump(value){
location.href="index.php?r=store/store_list&ord="+value;
}
function search_task(){
    var id= document.getElementById("ida").value;
    var title= document.getElementById("title").value;
    location.href="index.php?r=store/store_list&search_id="+id+"&search_title="+title;
}
</script>

</body>
</html>
