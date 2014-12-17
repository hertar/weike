<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_task_skill', '1418776357' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_K['charset'];?>">
<title>keke admin</title>


<link href="tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="../../resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="../../resource/js/jquery.js"></script>
<script type="text/javascript" src="../../resource/js/system/keke.js"></script>
<script type="text/javascript" src="../../resource/js/in.js"></script>
</head>
<body class="frame_body">
<div class="frame_content">
<div id="append_parent"></div> 
<div class="page_title">
    	<h1><?php echo $_lang['skill_manage'];?></h1>
        <div class="tool">
        <a href="index.php?do=task&view=skill&op=list" class="here"><?php echo $_lang['skill_list'];?></a>
            <a href="index.php?do=task&view=skill_edit"><?php echo $_lang['skill'];?><?php if($skill_id) { ?><?php echo $_lang['edit'];?><?php } else { ?><?php echo $_lang['add'];?><?php } ?></a>

    	</div>
</div>

<div class="box search p_relative">
    	<div class="title"><h2><?php echo $_lang['search'];?></h2></div>
        <div class="detail" id="detail">
           
    <form action="" method="get">
            	<input type="hidden" name="do" value="<?php echo $do?>">
<input type="hidden" name="view" value="<?php echo $view?>">
<input type="hidden" name="type" value="<?php echo $type?>">
<input type="hidden" name="page" value="<?php echo $page?>">
                <table cellspacing="0" cellpadding="0">
<tbody>
                        <tr>
                            <th><?php echo $_lang['by_industry'];?></th>
                            <td>
                            	<select class="ps vm" name="w[indus_id]" id="catid">
                            	<?php if(is_array($indus_option_arr)) { foreach($indus_option_arr as $v) { ?>
<?php echo $v?>
<?php } } ?>
                            </td>
                            <th><?php echo $_lang['skill_name'];?>*</th>
                            <td><input type="text" value="<?php echo $w['skill_name'];?>" name="w[skill_name]" class="txt"/>*<?php echo $_lang['search_by_like'];?></td>
                             <th></th><td></td>
</tr>
                        <tr>
                            
<th><?php echo $_lang['result_order'];?></th>
<td>

<select name="ord[]">
                                <option value="skill_id" <?php if($ord['0']=='skill_id' or !isset($ord['0'])) { ?> selected="selected"<?php } ?>><?php echo $_lang['default_order'];?></option>
                                <option value="on_time" <?php if($ord['0']=='on_time' ) { ?> selected="selected"<?php } ?>><?php echo $_lang['add_time'];?></option>
                                </select>
                                <select name="ord[]">
                                <option <?php if($ord['1']=='desc' or !isset($ord['1'])) { ?>selected="selected" <?php } ?> value="desc"><?php echo $_lang['desc'];?></option>
                                <option <?php if($ord['1']=='asc') { ?>selected="selected" <?php } ?> value="asc"><?php echo $_lang['asc'];?></option>
                                </select>
</td>
                            <th><?php echo $_lang['list_result'];?></th>
                            <td><select name="page_size">
<option value="10" <?php if($page_size=='10') { ?>selected="selected"<?php } ?>><?php echo $_lang['page_size'];?>10</option>
<option value="20" <?php if($page_size=='20') { ?>selected="selected"<?php } ?>><?php echo $_lang['page_size'];?>20</option>
<option value="30" <?php if($page_size=='30') { ?>selected="selected"<?php } ?>><?php echo $_lang['page_size'];?>30</option>
</select>
                              	<button class="pill" type="submit" value=<?php echo $_lang['search'];?> name="sbt_search">
                            		<span class="icon magnifier">&nbsp;</span><?php echo $_lang['search'];?>
</button></td>
                        </tr>
                    </tbody>
                </table>
            </form>

        </div>
    </div>
    <!--搜索结束-->

<div class="box list">
    	<div class="title"><h2><?php echo $_lang['skill_list'];?></h2></div>
        <div class="detail">
        	<form method="post" id="skill_op" action="">
              <table cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <th width="15"><input type="checkbox" onclick="checkall();" id="checkbox" name="checkbox"/><?php echo $_lang['select_all'];?></th>

                    <th width="20%"><?php echo $_lang['by_industry'];?></th>
                    <th width="25%"><?php echo $_lang['skill_name'];?></th>
                    <th width="10%"><?php echo $_lang['order'];?></th>
                    <th width="15%"><?php echo $_lang['add_time'];?></th>
                    <th width="20%"><?php echo $_lang['operate'];?></th>
                  </tr>
  <?php if(is_array($skill_arr)) { foreach($skill_arr as $k => $v) { ?>	
                  <tr class="item">
                    <td class="td25"><input type="checkbox" class="checkbox" name="ckb[]" value="<?php echo $v['skill_id']?>"></td>
                  
                    <td class="td28"><?php echo $indus_show_arr[$v['indus_id']]['indus_name']?></td>
<td><?php echo $v['skill_name']?></td>
                    <td><?php echo $v['listorder']?></td>
                    <td><?php if($v['on_time']){echo date('Y-m-d H:i:s',$v['on_time']); } ?></td>
                    <td>
<a href="index.php?do=<?php echo $do;?>&view=skill_edit&skill_id=<?php echo $v['skill_id'];?>&page=<?php echo $page;?>" class="button dbl_target"><span class="pen icon"></span><?php echo $_lang['edit'];?></a>
<a href="<?php echo $url?>&skill_id=<?php echo $v['skill_id']?>&ac=del&page=<?php echo $page;?>"  onclick="return cdel(this);" class="button"><span class="trash icon"></span><?php echo $_lang['delete'];?></a>
</td>
                  </tr>
                  <tr>
                  	<?php } } ?>
                    <td colspan="7">
                    
                    
                    <div class="clearfix">
                  		
                        <label for="checkbox"><?php echo $_lang['select_all'];?></label>
                        <input type="hidden" name="sbt_action" class="sbt_action"/>
                        <button name="sbt_action" type="submit" value=<?php echo $_lang['mulit_delete'];?> onclick="return batch_act(this,'skill_op');" class="pill negative" ><span class="icon trash"></span><?php echo $_lang['mulit_delete'];?></button>
                    	
                    </div>
                    </td>
                  </tr>
                </tbody>
              </table>
  <div class="page"><?php echo $pages['page'];?></div>
        	</form>
        </div>
        
    </div>           
</div>
<script type="text/javascript"
src="../../resource/js/artdialog/artDialog.js"></script>
<script type="text/javascript"
src="../../resource/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript"
src="../../resource/js/artdialog/artDialog.iframeTools.source.js"></script>
<script type="text/javascript" src="../../lang/<?php echo $language?>/script/lang.js"></script>
<script type="text/javascript">
In.add('form_and_validation', {
path : "../../resource/js/system/form_and_validation.js",
type : 'js'
});
In.add('xheditor', {
path : "../../resource/js/xheditor/xheditor.js",
type : 'js'
});
In.add('mousewheel', {
path : "tpl/js/jquery.mousewheel.min.js",
type : 'js'
});
//In.add('styleswitch',{path:"tpl/js/styleswitch.js",type:'js'});
In.add('table', {
path : "tpl/js/table.js",
type : 'js'
});
In.add('calendar', {
path : "../../resource/js/system/script_calendar.js"
});
In('form_and_validation', 'xheditor', 'mousewheel', 'table', 'calendar');
</script>

<script type="text/javascript">
function cdel(o, s) {
d = art.dialog;
var c = "<?php echo $_lang['you_comfirm_delete_operate'];?>";
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
var c = "<?php echo $_lang['you_comfirm_delete_operate'];?>";
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
d.confirm("<?php echo $_lang['confirm'];?>" + c + '?', function() {
$(".sbt_action").val(c);
$("#" + frm).submit();
});
} else {
d.alert("<?php echo $_lang['has_none_being_choose'];?>");
}
return false;
}
</script>
<?php if(KEKE_DEBUG) { ?>
<div
style="background-color: red; color: #fff; width: 400px; text-align: center;">
querys:
<?php echo db_factory::create()->get_query_num() ?>
&nbsp; times:
<?php echo kekezu::execute_time() ?>
</div>

<?php } ?>
</body>
</html>
<?php keke_tpl_class::ob_out();?>