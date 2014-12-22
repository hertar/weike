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
<script type="text/javascript" src="/public/resource/js/system/keke.js"></script>
 <script type="text/javascript" src="/public/resource/js/system/ajaxfileupload.js"></script>
 <div class="page_title">
    	<h1>文章管理</h1>
        <div class="tool">
            <a href="index.php?r=article/bulletin" >网站公告列表</a>
            <a href="index.php?r=article/bullentin_edit" class="here" >网站公告添加</a>
    	</div>
</div>
<!--页头结束-->    

<div class="box post">
    <div class="tabcon">
        	<div class="title"><h2>编辑网站公告</h2></div>       	
            <div class="detail">
                <form method="post" action="index.php?r=article/about_update_pro" id="frm_art_edit" enctype="multipart/form-data">
                <input type="hidden" name="pk[art_id]" value="<?php echo $arr['art_id'] ?>" id='art_id'>
                <input type="hidden" name="type" value="bulletin">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    
                      <tr>
                        <th scope="row" width="130">网站公告标题：</th>
                        <td> <input type="hidden" name="aa" value="<?php echo $arr['art_id']; ?>" id='art_id'>
                        <input type="text" name="fields[art_title]" id="txt_art_title"  value="<?php echo $arr['art_title'] ?>" maxlength="100"  class="txt" style=" width:260px;"
                        limit="required:true;len:3-100;general:false" 
                        msg="网站公告标题输入有误，长度在3-100个字符串之间" 
                        msgArea="art_title_msg" 
                        title='请输入单页面的标题' />
                        <span id="art_title_msg"></span>
                        </td>
                      </tr>
                                            
                      <tr>
                        <th scope="row">排序：</th>
                        <td>
                         <input type="text"  class="txt" style=" width:260px;"
  id="txt_listorder" name="fields[listorder]"
   value="<?php echo $arr['listorder'] ?>"
    maxlength="5" 
limit = "required:true;type:int" 
                                onkeyup="clearstr(this)"
                                msg = '请输入网站公告排序' 
                                title='单页面排序' 
                                msgArea="slt_txt_listorder"/><span id="slt_txt_listorder"></span>
                        </td>
                      </tr>
                      
                      <tr>
                        <th scope="row">作者：</th>
                        <td> <input type="text" class="txt" style=" width:260px;"
 name="fields[username]" id="txt_username" 
 value="<?php echo $arr['username'] ?>"
                        			 limit = "required:false" 
                                     msg = '请填写作者名称' 
                                     title='填写文章作者的名称？' 
                                     msgArea="msg_txt_username"/><span id="msg_txt_username"></span>
                        </td>
                      </tr>
                      
                      <tr>
                        <th scope="row">来源：</th>
                        <td><input type="text" class="txt" style=" width:260px;" 
name="fields[art_source]" 
id="art_source"
value="<?php echo $arr['art_source'] ?>"
                        			 limit = "required:false" 
                                     msg = '请填写来源' 
                                     title='网站公告的来源是？' 
                                     msgArea="msg_art_source"/><span id="msg_art_source"></span>
                       </td>
                      </tr>
                      
  <tr>
                        <th scope="row">是否推荐：</th>
                        <td>
                          <p>
                              <label for="cbk"><input type="checkbox" name="fields[is_recommend]" id="cbk" value="1" 
                               <?php
                               if($arr['is_show']==1){
                                   echo "checked";
                               }
                               ?>                       />&nbsp;是</label> <br />
                          </p>
                        </td>
                      </tr>
                      
  
  
 		  
 <script>
//图片上传	  	
function pic_upload(id){
var o  = document.getElementById(id);
if(!isExtName(o)){
art.dialog.alert("");
return false;
}else{
var art_id = '';
        $.ajaxFileUpload({
            url: '/public/index.php?do=ajax&view=upload&file_name='+id+'&file_type=att&obj_id='+art_id,
            fileElementId: id,
            dataType: 'json',
            success: function(json){ 
                if (json.err) {
                    art.dialog.alert("上传的图片太大"+ json.err);
                }else {
                    var hf = $("#hdn_"+id);
                   $("#hdn_art_pic").val(json.msg.up_file);
                   $("#fid").val(json.fid);
$("#file_span").html("<span id=\"file_"+json.fid+"\" > <img src='/public/"+json.msg.up_file+"' height=\"80\" /> <a title=\"删除\" href=\"javascript:void(0);\" onclick=\"del_file('"+json.msg.up_file+"');\"><strong>删除×</strong></a></span>");
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

//图片删除 

function del_file(file_path){
var value = file_path.split("?")['0'];
var url  = 'index.php?do=article&view=edit&ac=del&filepath='+value+'&pk='+$("#art_id").val();
$.post(url,function(json){
                art.dialog.alert("删除成功");
if(json.status==1){ 
 $("#file_span").children().remove();
 $("#hdn_art_pic").val("");
}
},'json');
}


</script>
  
  
  
  
                      <tr>
                        <th scope="row">网站公告内容：</th>
                        <td>
                         <textarea rows="30" name="fields[content]" style="width:75%;" id="tar_content"
    class="xheditor {urlBase:'http://127.0.0.1/weike/',tools:'simple',admin:'/public/',html5Upload:false,emotMark:false,upImgUrl:'/public/index.php?do=ajax&view=upload&file_type=att'}" cols="70">
    <?php echo $arr['content']?>                 
                         </textarea>
</td>
 </tr>
                     <tr>
                        <th scope="row">SEO标题：</th>
                        <td><textarea cols="70" rows="2"  name="fields[seo_title]"><?php echo $arr['seo_title']?></textarea></td>
                     </tr>
                     
                     <tr>
                        <th scope="row">SEO关键字：</th>
                        <td><textarea cols="70" rows="2"  name="fields[seo_keyword]" value=""><?php echo $arr['seo_keyword']?></textarea></td>
                     </tr>
                     
                      <tr>
                        <th scope="row">SEO描述：</th>
                        <td><textarea cols="70" rows="3" name="fields[seo_desc]" value=""><?php echo $arr['seo_desc']?></textarea></td>
                     </tr>
                      
                     

 
                    
                    <tr>
                        <th scope="row">&nbsp;</th>
                    	<td>
                    	<button name="sbt_edit" value="1" onclick="return checkForm(document.getElementById('frm_art_edit'),false)" class="positive primary pill button" type="submit">
                    	<span class="check icon"></span>提交</button>
                    	
                    	</td>
                    </tr>
                    </table>
                </form>
              </div>
       </div>           
</div>
<!--主体结束-->


<script type="text/javascript">
    $(function()
            {
                var c_id = parseInt("");
                if (c_id) 
                {
                    $("#slt_cat_id").val(c_id);
                }
                
                $("input[name='sbt_edit']").click(function(){
                    var si = $("#slt_cat_id").val();
                    if (!si) 
                    {
                        $("#msg_cat_id").html("请选择分类");
                        return false;
                    }
                    else 
                    {
                        $("#msg_cat_id").html("分类已选择");
                        return true;
                    }
                })
            })
function uploadResponse(){

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

