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
?>    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<style type="text/css">
.jia {background: url(tpl/img/plus.gif)}
.jian {background: url(tpl/img/minus.gif) }
</style>
<div class="page_title">
    	<h1>分类管理</h1>
        <div class="tool">
          <a href="index.php?r=article/cat_list" class="here">分类管理</a>
          <a href="index.php?r=article/cat_add"  >分类添加</a>           
</div>
</div>

<div class="box tip clearfix p_relative" id="man_tips">
   <div class="control"><a href="javascript:void(0);" title=关闭 onclick="$('#man_tips').fadeOut();"><b>&times;</b></a></div>
   <div class="title"><h2>小提示</h2></div>
   <div class="detail pad10">
      <ul>
         <li>*本站默认模版风格中文章二级分类无效</li>
      </ul>
   </div>
</div>


<div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
           
    <form action="index.php?r=article/cat_search" method="post">
            	<input type="hidden" name="do" value="article">
<input type="hidden" name="view" value="cat_list">
<input type="hidden" name="type" value="art">
<input type="hidden" name="page" value="">
 
                <table cellspacing="0" cellpadding="0">
<tbody>
    
                        <tr>
                            <th>所属分类</th>
                            <td>
                            	<select   name="w[art_cat_pid]" id="catid">
                                     <?php foreach ($arr as $key=>$val){ ?>
                            	<option value=<?php echo $val['art_cat_id'];?>><?php echo $val['tmp'];?><?php echo $val['cat_name'];?></option>
                                     <?php } ?>
                                </select>
(父分类)
                            </td>
                            <th>分类名字</th>
                            <td><input type="text" value="" name="w[cat_name]" class="txt"/>*支持模糊查询</td>
                             <td></td> 
</tr>
                        <tr >
                            
<th>结果排序</th>
<td>

<select name="paixu">
                                <option value="art_cat_id"  selected="selected">默认排序</option>
                                <option value="on_time" >添加时间</option>
                                </select>
                                <select name="zengjian">
                                <option selected="selected"  value="desc">递减</option>
                                <option  value="asc">递增</option>
                                </select>
<button class="pill" type="submit" value=搜索 name="sbt_search">
                            		<span class="icon magnifier">&nbsp;</span>搜索</button>
</td>
                              
                            <td colspan="3"> 
                              	&nbsp;
</td>
  
                        </tr>
                    </tbody>
                </table>
            </form>

        </div>
    </div>
    <!--搜索结束-->
<div class="box list">
    	<div class="title"><h2>分类列表</h2></div>
        <div class="detail">
        	<form action="" id='frm_list' method="post">
              <table cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                 <!--   <th width="8%">ID</th>-->
                    <th width="7%">显示顺序</th>
                    <th width="30%">分类名字</th>                    
                    <th width="17%"> 修改时间</th>
                   <th width="13%">操作</th>
                </tr>
                
                 <tbody id="indus_item_l_1" style="display:;">
                     <?php foreach($model as $key=>$val){?>
                  <tr class="item" align="left" id="<?php echo $val['art_cat_id'];?>">
                  <!--	<td>1</td>-->
                    <td class="td28">
                    	<input type="text" size=3 class="txt" name="indus_item_listorder_1"
    value="<?php echo $val['listorder'];?>" onblur="edit_listorder(<?php echo $val['art_cat_id']?>,this.value)"></td>
                    <td align="left">
                    	<span class="jia" 
onclick="if($(this).attr('class')=='jia'){
showids_1('show');
$(this).attr('class','jian');
}else{showids_1('hide');
$(this).attr('class','jia')}
" >&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <span id="indus_item_span_1"
 style="font-weight:900;font-size:16px;">
  <input type="text"  onblur="edit_cat_name(<?php echo $val['art_cat_id']?>,this.value)" class="txt" value="<?php echo $val['cat_name'];?>" 
 >
</span>
<a href="javascript:;" style="color:#ff6600" onclick="addchild(<?php echo $val['art_cat_id']?>,'')">增加子类</a>					
</td>                                
                    <td><?php echo date('Y-m-d H:m:s',time($val['on_time']));?></td>
                    <td>
                        <a href="index.php?r=article/category_update&id=<?php echo $val['art_cat_id'];?>" class="button dbl_target">
    <span class="pen icon"></span>编辑</a>
<a   onclick="return cdel(<?php echo $val['art_cat_id']?>);" class="button">
    <span class="trash icon"></span>删除</a>
</td>
                  </tr>
                     
  </tbody> 
                     <?php } ?>
              </table>

   	</form>
          
        </div>       
    </div>
      <div class="page">
            <?= LinkPager::widget(['pagination' => $pages]); ?>
                </div>
    <style>
        .pagination{float: left; clear: all;};
        </style>
<script type="text/javascript">

    	function edit_cat_name(iid,v){
            
         $.ajax({
   type: "GET",
   url: "index.php?r=article/category_cat_name",
    data: "iid="+iid+"&v="+v,
   success: function(msg){
    if(msg==1){
   
    }else{
        alert("修改失败");
    }
   }
   
}); 
  	
       
    	}
     	function edit_listorder(iid,v){
            
         $.ajax({
   type: "GET",
   url: "index.php?r=article/category_listorder",
    data: "iid="+iid+"&v="+v,
   success: function(msg){
    if(msg==1){
   
    }else{
        alert("修改失败");
    }
   }
}); 
}   	
    	var newindus_c = 0;
    	function addchild(pid,ext){
    		newindus_c++;
    		if(ext=='')
    		{ext = '|';}
    		if(ext!=' ')
    		{ext = '&nbsp;&nbsp;&nbsp;'+ext+'---';}
    		var mod = '<tr class="item" id="newindus_c_'+newindus_c+'">';
    		  	mod+='<td class="td28">'+'<input type=text size=3 class="txt" name="add_cat_name_listarr['+pid+']['+newindus_c+']" size=3>';+'</td>';
    		  	mod+='<td>'+ext;
    			mod+='<input type=text class="txt" name="add_cat_name_arr['+pid+']['+newindus_c+']">';
    			mod+='</td>';
    		   
    	 
    		    mod+='<td>&nbsp;</td>';
    			mod+='<td>';
    			mod+='<a href="javascript:;" onclick="$(\'#newindus_c_'+newindus_c+'\').remove()">';
    			mod+='删除';
    			mod+='</a>';
    			mod+='</td>';
    		  	mod+='</tr>	';
    			
    			$('#indus_item_l_'+pid).append(mod); 
    		
    	}
    	
             	function showids_1(op){
    		if(op=='show'){
    			    			$('#indus_item_l_203').show();
    			    			$('#indus_item_l_17').show();
    			    			$('#indus_item_l_358').show();
    			    			$('#indus_item_l_4').show();
    			    			$('#indus_item_l_202').show();
    			    			$('#indus_item_l_7').show();
    			    			$('#indus_item_l_5').show();
    			    			$('#indus_item_l_2').show();
    			    		}
    		else{
    			    			$('#indus_item_l_203').hide();
    			    			$('#indus_item_l_17').hide();
    			    			$('#indus_item_l_358').hide();
    			    			$('#indus_item_l_4').hide();
    			    			$('#indus_item_l_202').hide();
    			    			$('#indus_item_l_7').hide();
    			    			$('#indus_item_l_5').hide();
    			    			$('#indus_item_l_2').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_291(op){
    		if(op=='show'){
    			    			$('#indus_item_l_325').show();
    			    			$('#indus_item_l_323').show();
    			    			$('#indus_item_l_324').show();
    			    		}
    		else{
    			    			$('#indus_item_l_325').hide();
    			    			$('#indus_item_l_323').hide();
    			    			$('#indus_item_l_324').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_100(op){
    		if(op=='show'){
    			    			$('#indus_item_l_291').show();
    			    			$('#indus_item_l_294').show();
    			    			$('#indus_item_l_290').show();
    			    			$('#indus_item_l_293').show();
    			    		}
    		else{
    			    			$('#indus_item_l_291').hide();
    			    			$('#indus_item_l_294').hide();
    			    			$('#indus_item_l_290').hide();
    			    			$('#indus_item_l_293').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_203(op){
    		if(op=='show'){
    			    			$('#indus_item_l_361').show();
    			    			$('#indus_item_l_359').show();
    			    		}
    		else{
    			    			$('#indus_item_l_361').hide();
    			    			$('#indus_item_l_359').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_298(op){
    		if(op=='show'){
    			    			$('#indus_item_l_362').show();
    			    		}
    		else{
    			    			$('#indus_item_l_362').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_358(op){
    		if(op=='show'){
    			    			$('#indus_item_l_363').show();
    			    		}
    		else{
    			    			$('#indus_item_l_363').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_294(op){
    		if(op=='show'){
    			    			$('#indus_item_l_346').show();
    			    			$('#indus_item_l_297').show();
    			    			$('#indus_item_l_311').show();
    			    			$('#indus_item_l_312').show();
    			    			$('#indus_item_l_296').show();
    			    			$('#indus_item_l_298').show();
    			    			$('#indus_item_l_347').show();
    			    			$('#indus_item_l_310').show();
    			    			$('#indus_item_l_327').show();
    			    			$('#indus_item_l_345').show();
    			    		}
    		else{
    			    			$('#indus_item_l_346').hide();
    			    			$('#indus_item_l_297').hide();
    			    			$('#indus_item_l_311').hide();
    			    			$('#indus_item_l_312').hide();
    			    			$('#indus_item_l_296').hide();
    			    			$('#indus_item_l_298').hide();
    			    			$('#indus_item_l_347').hide();
    			    			$('#indus_item_l_310').hide();
    			    			$('#indus_item_l_327').hide();
    			    			$('#indus_item_l_345').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_292(op){
    		if(op=='show'){
    			    			$('#indus_item_l_315').show();
    			    			$('#indus_item_l_318').show();
    			    			$('#indus_item_l_317').show();
    			    			$('#indus_item_l_316').show();
    			    		}
    		else{
    			    			$('#indus_item_l_315').hide();
    			    			$('#indus_item_l_318').hide();
    			    			$('#indus_item_l_317').hide();
    			    			$('#indus_item_l_316').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_17(op){
    		if(op=='show'){
    			    			$('#indus_item_l_360').show();
    			    		}
    		else{
    			    			$('#indus_item_l_360').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_271(op){
    		if(op=='show'){
    			    			$('#indus_item_l_322').show();
    			    			$('#indus_item_l_321').show();
    			    			$('#indus_item_l_320').show();
    			    		}
    		else{
    			    			$('#indus_item_l_322').hide();
    			    			$('#indus_item_l_321').hide();
    			    			$('#indus_item_l_320').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_293(op){
    		if(op=='show'){
    			    			$('#indus_item_l_319').show();
    			    			$('#indus_item_l_326').show();
    			    		}
    		else{
    			    			$('#indus_item_l_319').hide();
    			    			$('#indus_item_l_326').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_345(op){
    		if(op=='show'){
    			    			$('#indus_item_l_364').show();
    			    		}
    		else{
    			    			$('#indus_item_l_364').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_290(op){
    		if(op=='show'){
    			    			$('#indus_item_l_329').show();
    			    			$('#indus_item_l_328').show();
    			    			$('#indus_item_l_300').show();
    			    			$('#indus_item_l_301').show();
    			    			$('#indus_item_l_302').show();
    			    			$('#indus_item_l_303').show();
    			    			$('#indus_item_l_304').show();
    			    			$('#indus_item_l_305').show();
    			    			$('#indus_item_l_306').show();
    			    			$('#indus_item_l_307').show();
    			    			$('#indus_item_l_308').show();
    			    			$('#indus_item_l_309').show();
    			    		}
    		else{
    			    			$('#indus_item_l_329').hide();
    			    			$('#indus_item_l_328').hide();
    			    			$('#indus_item_l_300').hide();
    			    			$('#indus_item_l_301').hide();
    			    			$('#indus_item_l_302').hide();
    			    			$('#indus_item_l_303').hide();
    			    			$('#indus_item_l_304').hide();
    			    			$('#indus_item_l_305').hide();
    			    			$('#indus_item_l_306').hide();
    			    			$('#indus_item_l_307').hide();
    			    			$('#indus_item_l_308').hide();
    			    			$('#indus_item_l_309').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_359(op){
    		if(op=='show'){
    			    			$('#indus_item_l_365').show();
    			    		}
    		else{
    			    			$('#indus_item_l_365').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_0(op){
    		if(op=='show'){
    			    			$('#indus_item_l_100').show();
    			    			$('#indus_item_l_1').show();
    			    		}
    		else{
    			    			$('#indus_item_l_100').hide();
    			    			$('#indus_item_l_1').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_289(op){
    		if(op=='show'){
    			    			$('#indus_item_l_295').show();
    			    		}
    		else{
    			    			$('#indus_item_l_295').hide();
    			    		}
    		
    		    		
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
    $.ajax({
      type: "GET",
      url: "index.php?r=article/category_del",
       data: "art_cat_id="+o,
      success: function(msg){
       if(msg==1){
           $("#"+o).remove();
       }else{
           alert("删除失败");
       }
      }

   }); 
}
);
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
