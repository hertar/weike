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
   <h1>分类管理</h1>
         <div class="tool"> 
            <a href="index.php?r=article/cat_list" >分类管理</a>
          <a href="index.php?r=article/cat_add" class="here" >分类添加</a> 
    	</div>
</div>
<!--页头结束-->
    
<div class="box post">
    <div class="tabcon">
        	<div class="title"><h2>添加文章分类</h2></div>
            <div class="detail">
                <form method="post" action="index.php?do=article&view=cat_edit" id="frm_cat_edit" >
                <input type="hidden" name="do" value="article">
                <input type="hidden" name="view" value="cat_edit">
                <input type="hidden" name="hdn_art_cat_id" value="">
                <input type="hidden" name="type" value="art">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <th scope="row" width="130">父分类：</th>
                        <td>
                        <select id="slt_cat_id" name="slt_cat_id" style=" width:270px;"
                        		 limit = "required:true;type:int" 
                                     msg = '请选择父分类' 
                                     title='你准备哪类的父分类呢？' 
                                     msgArea="msg_cat_id">
                                                <option value=1>客客资讯</option>                                                <option value=358>&nbsp;&nbsp;&nbsp; |-新闻列表</option>                                                <option value=203>&nbsp;&nbsp;&nbsp; |-安全交易</option>                                                <option value=202>&nbsp;&nbsp;&nbsp; |-关于我们</option>                                                <option value=17>&nbsp;&nbsp;&nbsp; |-网站公告</option>                                                <option value=7>&nbsp;&nbsp;&nbsp; |-媒体报导</option>                                                <option value=5>&nbsp;&nbsp;&nbsp; |-行业动态</option>                                                <option value=4>&nbsp;&nbsp;&nbsp; |-政策法规</option>                                                <option value=2>&nbsp;&nbsp;&nbsp; |-联系我们</option>                                           		 </select>
                        <span id="msg_cat_id"></span>
                        </td>
                      </tr>
                      
                      <tr>
                        <th scope="row">分类名称：</th>
                        <td> 
                         <input type="text" class="txt" style=" width:260px;" name="txt_cat_name" id="txt_cat_name" value="" maxlength="20" 
                         limit="required:true;len:2-20" 
                         msg="分类名称不能为空，长度限制在3-20" 
                         msgArea="cat_name_msg" 
                         title="请输入分类的名称"/><span id="cat_name_msg"></span>
                	</td>
                      </tr>
                      
                      <tr>
                        <th scope="row">排序：</th>
                        <td>
                         <input type="text"  class="txt" style=" width:260px;" id="txt_listorder" name="txt_listorder" value="1" maxlength="5" 
limit = "required:true;type:int" 
                                onkeyup="clearstr(this)"
                                msg = '请填写文章分类{lang:order' 
                                title='文章文章分类的排序' 
                                msgArea="slt_txt_listorder"/><span id="slt_txt_listorder"></span>
                        </td>
                      </tr>
                      
  <tr style="display:none;">
                        <th scope="row">是否推荐：</th>
                        <td>
                          <p>
                            <label><input type="checkbox" value="1" name="chk_is_show" />&nbsp;是</label> <br />
                          </p>
                        </td>
                      </tr>
                      				
 
                    
                    <tr>
                        <th scope="row">&nbsp;</th>
                    	<td>
                    	<button name="sbt_edit" value="1" onclick="return checkForm(document.getElementById('frm_cat_edit'),false)" class="pill positive primary  button" type="submit"><span class="check icon"></span>提交</button>
                    	<button class="pill button" type="button" onclick="history.go(-1);" value="返回上一页"><span class="uparrow icon"></span>返回上一页</button>
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
