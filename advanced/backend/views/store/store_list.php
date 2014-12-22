<<<<<<< HEAD
<?php
use yii\widgets\LinkPager;
?>
=======
>>>>>>> 0f7b2d687c3f2ea5167cbd384bcd5927e552cca2
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
<<<<<<< HEAD
<td><input type="text" class="txt" name="txt_shop_id" value="" id='ida' onkeyup="clearstr(this);"></td>
<th>店铺名称</th>
<td><input type="text" class="txt" name='txt_name' value=""  id='title' onkeyup="clearspecial(this);"></td>
=======
<td><input type="text" class="txt" name="txt_shop_id" value="" onkeyup="clearstr(this);"></td>
<th>店铺名称</th>
<td><input type="text" class="txt" name='txt_name' value="" onkeyup="clearspecial(this);"></td>
>>>>>>> 0f7b2d687c3f2ea5167cbd384bcd5927e552cca2
 	</tr>

<tr>
<th>显示条数</th>
<td>
<<<<<<< HEAD
<select name="page_size" onchange="pageJump(value)">
     <option value="10" <?php if($pagesize==10){echo "selected";}?>>每页显示10条</option>
     <option value="5" <?php if($pagesize==5){echo "selected"; }?>>每页显示5条</option>
     <option value="3" <?php if($pagesize==3){echo "selected"; }?>>每页显示3条</option>

=======
<select name="wh[page_size]" class="ps vm">
<option value="10" selected="selected">每页显示10</option>
<option value="20" >每页显示20</option>
<option value="30" >每页显示30</option>
>>>>>>> 0f7b2d687c3f2ea5167cbd384bcd5927e552cca2
</select>
</td>
<th>结果排序</th>
<td>
 <select name="w[ord][]">
                           <option value="shop_id"  selected="selected">默认排序</option>
                           <option value="on_time" >申请时间</option>
                      </select>
<<<<<<< HEAD
                      <select name="ord[]" onchange="orderJump(this.value)">
                                <option  value="asc"  <?php if($ord=='asc'){echo "selected";}?>>递增</option>
                                <option  value="desc"  <?php if($ord=='desc'){echo "selected";}?>>递减</option>
                                </select>
<button type="button" name="sbt_search" value=搜索 class="pill"  onclick="search_task()" />
=======
                      <select name="w[ord][]">
                            <option selected="selected"  value="desc">递减</option>
                            <option  value="asc">递增</option>
                      </select>
<button type="submit" name="sbt_search" value=搜索 class="pill" />
>>>>>>> 0f7b2d687c3f2ea5167cbd384bcd5927e552cca2
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
<<<<<<< HEAD
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
=======
        <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="8">8</td>
<td>mxc123</td>
           <td>我就是我，就在这里</td>
           <td>2013-04-09</td>
           <td>
<span>待审核</span>
           </td>
<td>
<a href="index.php?do=store&view=list&txt_username=&txt_shop_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=pass&shop_id=8" class="button"><span class="check icon"></span>通过审核</a>
<a href="index.php?do=store&view=list&txt_username=&txt_shop_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=nopass&shop_id=8" class="button">审核不通过</a>
<a href="index.php?do=store&view=info&shop_id=8" class="button"><span class="pen icon"></span>查看</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="7">7</td>
<td>樱桃小丸子</td>
           <td>我的小小小店铺</td>
           <td>2013-04-09</td>
           <td>
<span>待审核</span>
           </td>
<td>
<a href="index.php?do=store&view=list&txt_username=&txt_shop_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=pass&shop_id=7" class="button"><span class="check icon"></span>通过审核</a>
<a href="index.php?do=store&view=list&txt_username=&txt_shop_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=nopass&shop_id=7" class="button">审核不通过</a>
<a href="index.php?do=store&view=info&shop_id=7" class="button"><span class="pen icon"></span>查看</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="6">6</td>
<td>红客</td>
           <td>我就是我，就在这里</td>
           <td>2013-04-09</td>
           <td>
<span>开启</span>
           </td>
<td>
<a href="index.php?do=store&view=info&shop_id=6" class="button"><span class="pen icon"></span>查看</a>
<a href="index.php?do=store&view=list&txt_username=&txt_shop_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=close&shop_id=6" class="button"><span class="pen icon"></span>关闭</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="5">5</td>
<td>墨客</td>
           <td>想要漂亮小玩具吗，专业制作手工玩具</td>
           <td>2013-04-09</td>
           <td>
<span>开启</span>
           </td>
<td>
<a href="index.php?do=store&view=info&shop_id=5" class="button"><span class="pen icon"></span>查看</a>
<a href="index.php?do=store&view=list&txt_username=&txt_shop_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=close&shop_id=5" class="button"><span class="pen icon"></span>关闭</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="4">4</td>
<td>晓茜</td>
           <td>最具个性化的店铺，值得一看哦</td>
           <td>2013-04-09</td>
           <td>
<span>开启</span>
           </td>
<td>
<a href="index.php?do=store&view=info&shop_id=4" class="button"><span class="pen icon"></span>查看</a>
<a href="index.php?do=store&view=list&txt_username=&txt_shop_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=close&shop_id=4" class="button"><span class="pen icon"></span>关闭</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="3">3</td>
<td>丸美弹力</td>
           <td>我的完美店铺</td>
           <td>2013-04-09</td>
           <td>
<span>开启</span>
           </td>
<td>
<a href="index.php?do=store&view=info&shop_id=3" class="button"><span class="pen icon"></span>查看</a>
<a href="index.php?do=store&view=list&txt_username=&txt_shop_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=close&shop_id=3" class="button"><span class="pen icon"></span>关闭</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="2">2</td>
<td>猪八戒</td>
           <td>猪八戒的店铺</td>
           <td>2013-04-09</td>
           <td>
<span>开启</span>
           </td>
<td>
<a href="index.php?do=store&view=info&shop_id=2" class="button"><span class="pen icon"></span>查看</a>
<a href="index.php?do=store&view=list&txt_username=&txt_shop_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=close&shop_id=2" class="button"><span class="pen icon"></span>关闭</a>
</td>
          </tr>
         <tr class="item">
        	<td><input type="checkbox" name="ckb[]" class="checkbox" value="1">1</td>
<td>shangk</td>
           <td>SHANGK</td>
           <td>2013-04-09</td>
           <td>
<span>开启</span>
           </td>
<td>
<a href="index.php?do=store&view=info&shop_id=1" class="button"><span class="pen icon"></span>查看</a>
<a href="index.php?do=store&view=list&txt_username=&txt_shop_id=&page=1&w[ord][0]=&w[ord][1]=&wh[page_size]=10&ac=close&shop_id=1" class="button"><span class="pen icon"></span>关闭</a>
</td>
          </tr>
>>>>>>> 0f7b2d687c3f2ea5167cbd384bcd5927e552cca2
           <tr>
            <td colspan="7">
            	<label for="checkbox">  
全选</label>
<input type="hidden" name="sbt_action" class="sbt_action"/>　
<<<<<<< HEAD
<button type="submit" name="sbt_action" value="批量删除" class="negative pill button" onclick="return batch_act(this,'index.php?r=store/del_shop')" >
=======
<button type="submit" name="sbt_action" value="批量删除" class="negative pill button" onclick="return batch_act(this,'frm_list')" >
>>>>>>> 0f7b2d687c3f2ea5167cbd384bcd5927e552cca2
<span class="trash icon"></span>批量删除</button>
<button type="submit" name="sbt_action" value="批量审核" class="pill negative" onclick="return batch_act(this,'frm_list');" >
<span class="lock icon"></span>批量审核</button>
</td>
  </tr>
        </table>
<<<<<<< HEAD
<div class="page"><?= LinkPager::widget(['pagination' => $pages]); ?></div>
=======
<div class="page"></div>
>>>>>>> 0f7b2d687c3f2ea5167cbd384bcd5927e552cca2
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
<<<<<<< HEAD
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
=======
var conf = $(":checkbox[name='ckb[]']:checked").length;
if (conf > 0) {
d.confirm("确定" + c + '?', function() {
$(".sbt_action").val(c);
$("#" + frm).submit();
>>>>>>> 0f7b2d687c3f2ea5167cbd384bcd5927e552cca2
});
} else {
d.alert("您没有选择任何操作项");
}
return false;
}
<<<<<<< HEAD
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


=======
</script>
>>>>>>> 0f7b2d687c3f2ea5167cbd384bcd5927e552cca2
</body>
</html>
