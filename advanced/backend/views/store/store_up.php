
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
</div>
<!--页头结束-->    
<div class="box post">
    <div class="tabcon">
            <div class="detail">
                <form method="post" action="index.php?do=store&view=info&shop_id=3" id="frm_art_edit" name="frm_art_edit" enctype="multipart/form-data">
                <input type="hidden" name="shop_id" value="3">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    	<tr>
                        <th scope="row" width="130">用户名：</th>
                        <td>
                         <?php echo $list['username']?></td>
                      </tr>
                      <tr>
                        <th scope="row" width="130">店铺名称：</th>
                        <td>
                         <?php echo $list['shop_name']?></td>
                      </tr>
                      <tr>
                        <th scope="row">
                        	店铺描述
</th>
                        <td>
                        	<?php echo $list['shop_slogans']?></td>
  </tr>
  <tr>
                        <th scope="row">
申请时间
</th>
                        <td><?php echo date("Y-m-d H:i:s",$list['on_time'])?>&nbsp;&nbsp;</td>
  </tr>
                      <tr>
                        <th scope="row">店铺状态：</th>
                        <td> 
                        <?php if($list['shop_status']==2){ ?>
                       待审核  

                    <?php }else  if($list['shop_status']==0){ ?>
                      关闭
                   <?php }else  if($list['shop_status']==1){?>
                       开启
                   <?php }else  if($list['shop_status']==3){?>
                       审核未通过
                   <?php } ?></td>
                      </tr>
                    <tr>
                        <th scope="row">&nbsp;</th>
                    	<td>
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
<script type="text/javascript" src="../../lang/cn/script/lang.js"></script>
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

<script type="text/javascript" >

function sbt_payitem(){ 

if($("input[temp='payitem_map']").attr("checked")==true){ 
if(!$("#point").val()){
showDialog("","alert","友情提示");
return false;
}else{
$("#payitem_map").val("1");
}	
}else{
$("#payitme_map").val("");
}

//$("#frm_payitem").submit();
//alert(23);return false;
formSub('frm_payitem','form',true);

}

</script>