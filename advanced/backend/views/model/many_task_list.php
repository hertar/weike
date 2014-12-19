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
    	<h1>多人悬赏管理</h1>
         <div class="tool">
         	<a href="index.php?r=model/many_task_list" class="here">任务列表</a>
<!--<a href="index.php?do=model&model_id=2&view=config">任务配置</a>-->
 </div>
</div>
    <!--页头结束-->

    <!--提示结束-->
     
        <div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
           
    <form action="index.php?do=model&model_id=2&view=list" method="post">
 <input type="hidden" value="1" name="page">
                <table cellspacing="0" cellpadding="0">
<tbody>
                        <tr>
                            <th>任务编号</th>
                             <td><input type="text"  id='ida'  class="txt"/></td>
                            <th>任务标题</th>
                            <td><input type="text"  id='title'  class="txt"/> 支持模糊查询</td>
                             <th></th>
                             <td>
                             	<button class="pill" type="button" value="搜索" name="sbt_search" onclick="search_task()">
                            		<span class="magnifier icon">&nbsp;</span>搜索</button></td>
                        </td>
                           
</tr> 
                        <tr>
                        	 <th>请选择任务状态</th>
                            <td>
                            	<select class="ps vm" name="w[task_status]" id="catid" onchange="statusJump(this.value)">
                            		<option value="">请选择</option>
                            	<option value="0" >未付款</option>
<option value="1" >待审核</option>
<option value="2" >投稿中</option>
<option value="3" >任务选稿</option>
<option value="5" >公示中</option>
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
                           <option value="start_time" >开始时间</option>
                      </select>
                                <select name="ord[]" onchange="orderJump(this.value)">
                                <option  value="asc"  <?php if($ord=='asc'){echo "selected";}?>>递增</option>
                                <option  value="desc"  <?php if($ord=='desc'){echo "selected";}?>>递减</option>
                                </select>
</td>
                            <th>显示结果</th>
                            <td><select name="page_size" onchange="pageJump(value)">
 <option value="10" <?php if($pagesize==10){echo "selected";}?>>每页显示10条</option>
     <option value="5" <?php if($pagesize==5){echo "selected"; }?>>每页显示5条</option>
     <option value="3" <?php if($pagesize==3){echo "selected"; }?>>每页显示3条</option>
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
    	<div class="title"><h2>多人悬赏任务列表</h2></div>
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
<th width="10%">任务金额</th>
                   
                    <th width="7%">发布者</th>
 <th width="7%">任务状态</th>
                  
                    <th width="23%">操作</th>
                  </tr>
                       <?php             foreach($list as $key=>$val)
      {?>
                                    <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb" class="checkbox" value="<?php echo $val['task_id']?>" class="checkbox"><?php echo $val['task_id']?></td>
                    <td class="td28">
                    	<a href="/public/index.php?do=task&task_id=70" target="_blank"><?php echo $val['task_title']?></a>
</td>
                   
                    <td>￥<?php echo $val['task_cash']?>元</td>
                    <td><?php echo $val['username']?></td>
                    <?php if($val['task_status']==2){ ?>
                       <td> 失败</td>
                    <?php }else { ?>
                      <td> 结束</td>
                   <?php }?>
 
                    <td>
                    	
<a href="index.php?do=model&model_id=1&view=edit&task_id=70&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
<a href="index.php?r=model/del_manytask&id=<?php echo $val['task_id'] ?>" class="button"  onclick="return cdel(this);"><span class="trash icon"></span>删除</a>
</td>
                  </tr>
      <?php }?> 
                                    
                  <tr>
                    <td colspan="7">
                    <div class="page fl_right"> <?= LinkPager::widget(['pagination' => $pages]); ?></div>
                    
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
<script type="text/javascript">
function search_task(){
    var id= document.getElementById("ida").value;
    var title= document.getElementById("title").value;
    location.href="index.php?r=model/many_task_list&search_id="+id+"&search_title="+title;
}
</script>
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
 location.href="index.php?r=model/del_manytasks&id="+idarr;
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
var url = 'index.php?do=model&model_id=2&view=list&w[task_id]=&w[task_title]=&w[task_status]=&ord[0]=&ord[1]=&page=1&page_size=10';
function statusJump(task_status){
window.location.href = url+'&w[task_status]='+task_status;
}
function orderJump(value){
location.href="index.php?r=model/many_task_list&ord="+value;
}
function pageJump(value){
location.href="index.php?r=model/many_task_list&pagesize="+value;
}
</script>