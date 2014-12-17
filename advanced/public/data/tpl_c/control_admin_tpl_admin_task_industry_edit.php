<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_task_industry_edit', '1418774767' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    	<h1><?php echo $_lang['industry_manage'];?></h1>
        <div class="tool">
        	<a href="index.php?do=task&view=industry"><?php echo $_lang['industry_list'];?></a>
            <a href="index.php?do=task&view=industry_edit" class="here"><?php echo $_lang['industry'];?><?php if($indus_id) { ?><?php echo $_lang['edit'];?><?php } else { ?><?php echo $_lang['add'];?><?php } ?></a> 
        </div>
</div>

<div class="box post">
    <div class="tabcon">
        	<div class="title"><h2><?php if($indus_id) { ?><?php echo $_lang['edit_industry'];?><?php } else { ?><?php echo $_lang['add_industry'];?><?php } ?></h2></div>       	
            <div class="detail">
                <form method="post" action="index.php?do=<?php echo $do;?>&view=<?php echo $view;?>" id="frm_indus_edit" enctype="multipart/form-data">
                <input type="hidden" name="pk[indus_id]" value="<?php echo $indus_id?>">              
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <th scope="row" width="130"><?php echo $_lang['father_industry'];?><?php echo $_lang['zh_mh'];?></th>
                        <td> 
<select name="fs[indus_pid]"id="slt_indus_id" style=" width:270px;"
                         			 limit = "required:true;type:int" 
                                     msg =<?php echo $_lang['choose_industry_class'];?> 
                                     title=<?php echo $_lang['you_choose_which_industry'];?>
                                     msgArea="msg_indus_id">
                      <option value="0"><?php echo $_lang['top'];?></option>
                        <?php if(is_array($temp_arr)) { foreach($temp_arr as $v) { ?>
                          <?php echo $v?>
                        <?php } } ?>
                    	</select>
 <span id="msg_indus_id" style="color:red;"></span> 
                        </td>
                      </tr>
                      <tr>
                        <th scope="row"><?php echo $_lang['industry_name'];?><?php echo $_lang['zh_mh'];?></th>
                        <td><input type="text" maxlength="100"  class="txt" style=" width:260px;"
name="fs[indus_name]" 
value="<?php echo $indus_info['indus_name'];?>"
                        			 limit = "required:false" 
                                     msg =<?php echo $_lang['write_industry_name'];?> 
                                     title=<?php echo $_lang['write_industry_name'];?> 
                                     msgArea="msg_indus_name"/><span id="msg_indus_name"></span>
                       </td>
                      </tr>
  <tr>
                        <th scope="row"><?php echo $_lang['result_order'];?><?php echo $_lang['zh_mh'];?></th>
                        <td>
                        	<input type="text"  class="txt" id="txt_listorder" name="fs[listorder]"
   		value="<?php if($indus_info['listorder']) { ?><?php echo $indus_info['listorder'];?><?php } else { ?>0<?php } ?>"
    	maxlength="5" 
limit = "required:true;type:int" 
                                onkeyup="clearstr(this)"
                                msg =<?php echo $_lang['write_industry_order'];?>
                                title=<?php echo $_lang['write_industry_order'];?> 
                                msgArea="slt_txt_listorder"/><span id="slt_txt_listorder"></span>   
                        </td>
                      </tr>
  <tr>
                        <th scope="row"><?php echo $_lang['is_recommend'];?><?php echo $_lang['zh_mh'];?></th>
                        <td>
                          <p>
                              <label><input type="checkbox" name="fs[is_recommend]" value="1"  <?php if($indus_info['is_recommend']==1) { ?> checked="checked" <?php } ?>/>&nbsp;<?php echo $_lang['yes'];?></label> <br />
                          </p>
                        </td>
                      </tr>
 

 
<tr>
 
<th scope="row">&nbsp;</th>
<td>
<button name="sbt_edit" value="1" onclick="return checkForm(document.getElementById('frm_indus_edit'),false)" class="positive primary pill button" type="submit">
<span class="check icon"></span><?php echo $_lang['submit'];?></button>

</td>
</tr>
                    </table>
                </form>
              </div>
       </div>           
</div>
<!--主体结束-->
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