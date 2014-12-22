<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<div class="page_title">
    	<h1>案例管理</h1>
        <div class="tool">
             <a href="index.php?do=case&view=list">案例列表</a>
 <a class="here" href="index.php?do=case&view=add&case_id=">添加案例</a>
            </div>
    </div>
<div class="box post">
<div class="title"><h2>添加案例</h2></div>
            <div class="detail">
            	 <form action="index.php?r=article/case_add_pro" method="post" id="frm" name="frm" enctype="multipart/form-data">
            	 	<input type="hidden" name="hdn_case_id" value="">
<input type="hidden" id="obj_id" name="fds[obj_id]">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <th scope="row" width="130">案例图片：</th>
                        <td>
                       		                     <input type="file" name="fle_case_img" id="fle_case_img" ><span id="span_msg" style="color:red"></span>
                   <input type="hidden" name = "hdn_case_img" id="hdn_case_img" >
   <div class="c999">支持.jpg,.gif,.png格式，RGB模式。此图片用于成功案例列表页展示。</div>
                        </td>
                      </tr>
  <tr>
  	<th scope="row" width="130">案例类型：</th>
<td>
  	<select name="case_type" id="case_type" onchange ="search_case();">
  		<option value="0" >---请选择---</option>
  		<option value="task" >---任  务---</option>
<option value="service" >---商  品---</option>
  		</select>

                             <span id="case_type_msg"></span>
</td>
  	</tr>

 <script type="text/javascript">
 	function search_case(){
var search_type = $("#case_type").val(); 

art.dialog.open('index.php?do=case&view=search&search_type='+search_type,{
title:"案例搜索",
height:400,
width:700,
closeFn:function (){
  
$("#obj_id").val(art.dialog.data('obj_id_val'));
$("#txt_task_title").val(art.dialog.data('title_val'));
$("#txt_case_price").val(art.dialog.data('cash_val'));
$("#hdn_case_img").val(art.dialog.data('case_img'));
$("#case_type").val(art.dialog.data('case_type'));
}
},false);
  					}

 </script>
  
  <tr>
                        <th scope="row" width="130">案例名称：</th>
                        <td>
                       		<input type="text" id="txt_task_title" value=""
 name="fds[case_title]" class="txt" style=" width:260px;"
 	limit="required:true;len:2-50" msg="案例名称不得为空,2-50字符" title="案例名称不得为空,2-50字符" msgarea="span_name"/>
                        	<span id="span_name"></span>
</td>
                      </tr>
  
   <tr>
                        <th scope="row" width="130">案例金额：</th>
                        <td>
                       		<input type="text" id="txt_case_price" value=""
 name="fds[case_price]" class="txt" style=" width:260px;" onkeyup="clearstr(this)"/>
                        </td>
                      </tr>
  
  
   <tr>
                        <th scope="row">&nbsp;</th>
                        <td>
                            <div class="clearfix padt10">
                            	<input type="hidden" name="sbt_edit" value="1">
                            	<button class="positive pill primary button" name="sbt_edit" type="button" value="提交" onclick="case_sbt();">
                            		<span class="icon check"></span>
提交</button>
                                
                                </div>
                        </td>
                      </tr>
   				 </table>
   	 </div>
</div>
<script type="text/javascript">
      
 
function case_sbt(){

if(!$("#case_type").val()){
$("#case_type_msg").html('请选择类型');
return false;
}
var case_img = '';
if($("#hdn_case_img").val()==''&&$("#fle_case_img").val()==''){
$("#hdn_case_img").val(case_img);
}
if($("#fle_case_img").val()||case_img){ 
   
if(checkForm(document.getElementById('frm'))){ 
$("#frm").submit(); 
}		
}else{

$("#span_msg").html('请上传图片');
return false;

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
