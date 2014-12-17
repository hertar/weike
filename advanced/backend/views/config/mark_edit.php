


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
    	<h1>规则管理</h1>
     	<div class="tool"> 
        <a href="index.php?r=config/mark"        >信誉规则管理</a>
        <a href="index.php?r=config/mark_edit" class="here">增加信誉规则</a>
</div>
    </div>
<div class="box post">
        <div class="tabcon">
        	<div class="title"><h2>添加规则</h2></div>
            <div class="detail">
               <form action="index.php?do=config&view=mark&mark_rule_id=" method="post" name="frm1" id="frm1" enctype="multipart/form-data">
               	   <input type="hidden" name="hdn_mark_rule_id" value="">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <th scope="row" width="200">信誉值：</th>
                        <td><input name="txt_g_value" type="text" value="" class="txt" style=" width:260px;" />
  </td>
                      </tr>
  <tr>
                        <th scope="row" width="200">能力值：</th>
                        <td><input name="txt_m_value" type="text" value="" class="txt" style=" width:260px;" />
  </td>
                      </tr>
                     <tr>
                        <th scope="row">雇主头衔名称(买家)：</th>
                        <td> <input name="txt_g_title" type="text" value="" class="txt" style=" width:260px;" /></td>
                      </tr>
  
  <tr>
                        <th scope="row">威客头衔名称(卖家)：</th>
                        <td> <input name="txt_m_title" type="text" value="" class="txt" style=" width:260px;" /></td>
                      </tr>
  <tr>
                       <th scope="row">雇主头衔图标(买家)：</th>
                        <td> 
<input type="hidden" name="hdn_g_ico" id="hdn_g_ico" value="">
<input type="hidden" name="hdn_g_ico_fid" id="hdn_g_ico_fid" value="" />
<input type="file" name="g_ico" id="g_ico" ext=".png,.jpg,.jpeg,.gif" class="file">
<button type="button"  onclick="upload('g_ico');" class="pill">上传</button>
<span id="span_g_ico">
</span>
</td>
                      </tr>
  <tr>
                        <th scope="row">威客头衔图标(卖家)：</th>
                        <td> 
<input type="hidden" name="hdn_m_ico" id="hdn_m_ico" value="">
<input type="hidden" name="hdn_m_ico_fid" id="hdn_m_ico_fid" value="" />
<input type="file" name="m_ico" id="m_ico" ext=".png,.jpg,.jpeg,.gif" class="file">
<button type="button"  onclick="upload('m_ico');" class="pill">上传</button>
<span id="span_m_ico">
</span>
</td>
                      </tr>
   
                      <tr>
                        <th scope="row">&nbsp;</th>
                        <td>
                    	<div class="clearfix padt10">
                    	<input type="hidden" name="is_submit" value="1">
                        <button class="positive pill primary button" type="submit" 
onclick="return checkForm(document.getElementById('frm1'),false);"
 value=提交>
                        	<span class="check icon"></span>提交</button>
                        
                    	</div>
                        </td>
                      </tr>
                    </table>
               </form>
        	</div>
   		</div>
    </div>
<script type="text/javascript"  src="/public/resource/js/system/ajaxfileupload.js"></script>	
<script type="text/javascript">
    function upload(id){
var o  = document.getElementById(id);
if(!isExtName(o)){
art.dialog.alert("文件格式不对!");
return false;
}else{
        $.ajaxFileUpload({
            url: '/public/index.php?do=ajax&view=upload&file_name='+id+'&file_type=sys&task_id=mark',
            fileElementId: id,
            dataType: 'json',
            success: function(json){ 
                if (json.err) {
                    art.dialog.alert("上传失败,可能文件过大<br>"+ json.err);
                }else {
                    var hf = $("#hdn_"+id);
                    var hf_fid = $("#hdn_"+id+"_fid");
                    $(hf).val(json.msg.up_file+"?fid="+json.fid);
                    $(hf_fid).val(json.fid);
$("#span_"+id).html("<img src='/public/"+json.msg.up_file+"' onload='resize(this)' />").append("<a href=';' onclick='return del(\"hdn_"+id+"\",\"span_"+id+"\")'>删除</a>");

                }
            },
            error: function(json, status, e){
                if(e){
art.dialog.alert(e);	
}
            }
        });
}
    }
    function resize(img){
    	var h=img.height, w=img.width;
    	if(h>20){
    		img.height=80;
    	}
    	if(w>70){
    		img.width=80;
    	}
    }
    function del(str,span){
var value = $("#"+str).val().split("?")['0'];
var fid=$("#"+str+"_fid").val();
var url  = '/public/index.php?do=ajax&view=file&ajax=del&filepath='+value+"&fid="+fid;
$.post(url,function(json){
if(json.status==1){ 
 $("#"+str).val("");
 $("#"+span).children().remove();
}

},'json');
return false;
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
