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
    	<h1>全局配置</h1>
         <div class="tool">         
<a href="index.php?r=config/quanju" > 站点配置</a>
<a href="index.php?r=config/conf"  >基本配置</a>
<a href="index.php?r=config/seo"  class="here" >SEO配置</a>
<a href="index.php?r=config/mail"  >邮箱配置</a>
    	</div>
</div>

<div class="box post">
        <div class="tabcon">
        	<div class="title"><h2></h2></div>
            <div class="detail">
                 <form name="frm_config_basic" id="frm_config_basic" action="index.php?do=config&view=basic&op=seo" method="post" accept-charset="utf-8" enctype='multipart/form-data'>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                     <tr>
               <th scope="row">
            是否开启伪静态：                </th>
                <td>
                    <label for="rdo_is_rewrite_1">
                        <input type="radio" id="rdo_is_rewrite_1" name="is_rewrite"  checked="checked"  value="0" />关闭                    </label>
                    <label for="rdo_is_rewrite_2">
                        <input type="radio" id="rdo_is_rewrite_2" name="is_rewrite"  value="1" />开启                    </label>
                    <a href ="index.php?do=config&view=basic&op=seo&ac=get_url_rule">查看伪静态规则</a>
                </td>
            </tr>

<tr>
               <th scope="row">
            启用二级域名                </th>
                <td>
                    <label for="rdo_second_domain_1">
                        <input type="radio" id="rdo_second_domain_1" name="second_domain"  checked="checked"  value="0" />关闭                    </label>
                    <label for="rdo_second_domain_2">
                        <input type="radio" id="rdo_second_domain_2" name="second_domain"  value="1" />开启                    </label>
<span id="t_domain" style='display:none;'>
<input type="text" size="20" name="top_domain" id="top_domain" value="t.com"
 class="txt"><b style="color:red">*</b>顶级域名不需要添加“http://”，也不要以“/”结尾，请与[站点配置]中保持一致，例如：t.com,不支持localhost              		</span>
<div>(若需要支持二级域名，请先配置DNS，开启泛解析，将各域名指向同一IP)</div>
   </td>
            </tr>
            <tr>
                <th scope="row">
                    网站标题：                </th>
                <td>
                    <input type="text" size="50" name="seo_title" value="" limit="required:true;len:3-100;general:false" msg="seo标题不能为空，长度3-100" msgArea="seo_title_msg" maxlength="100" class="txt"/><b style="color:red">*</b>
                    <span id="seo_title_msg"></span>网页标题通常是搜索引擎关注的重点，本附加字设置将出现在标题中网站名称的后面，如果有多个关键字，建议用 "|"、","(不含引号) 等符号分隔                </td>
            </tr>
<tr>
                <th scope="row">
                    Meta Keywords：                </th>
                <td>
                    <input type="text" size="50" name="seo_keyword" value="客客出品专业威客系统" limit="required:true;len:3-500;general:false" msg="SEO 关键词为能为空，长度3-500" msgArea = "txt_seo_keywords_msg" class="txt"/>
                    <span id="txt_seo_keywords_msg"></span>Keywords 项出现在页面头部的 Meta 标签中，用于记录本页面的关键字，多个关键字间请用半角逗号 "," 隔开                </td>
            </tr>
            <tr>
                <th scope="row">
                    Meta Description：                </th>
                <td>
                    <textarea cols="50" rows="8" name="seo_desc" limit="required:true;len:3-500;general:false" msg="SEO 描述不能为空，长度3-500" msgArea = "seo_description_msg" rows="3" class="textarea">客客出品专业威客系统</textarea>
                    <span id="seo_description_msg"></span>Description 出现在页面头部的 Meta 标签中，用于记录本页面的概要与描述                </td>
            	</tr>
<th scope="row">&nbsp;</th>
<td>
<div class="clearfix padt10">
                                <button class="positive pill primary button" type="submit" name='submit' value="提交"><span class="check icon"></span>提交</button>
                                
                </div>
</td>
                    
                    </table>
                    
                      
                    
        </form>
            </div>
        </div>
        
        
    </div>


<script type="text/javascript">
    $(function(){
    	$("#rdo_second_domain_2").click(function(){
$("#t_domain").show();
})
if($("#rdo_second_domain_2").is(":checked")){
$("#t_domain").show();
}
    	$("#rdo_second_domain_1").click(function(){
$("#t_domain").hide();
})
        $("#frm_config_basic").submit(function(){
            var value = $("#fle_web_logo").val();
            if (value) {
                s = value.lastIndexOf(".");
                lastname = value.substring(s, value.length);
                if (lastname.toLowerCase() != ".gif" && lastname.toLowerCase() != ".jpg" && lastname.toLowerCase() != ".png" && lastname.toLowerCase() != ".jpeg") {
                    alert("文件类型不对")
                    $(this).focus();
                    return false;
                }
                else {
                    return true;
                }
            }
            
            
        })
        if ($("#checkclose1").attr("checked")) {
            $("#close_true").show();
        }
        else {
            $("#close_true").hide();
        }
        $("#checkclose1").click(function(){
            $("#close_true").show();
        })
        $("#checkclose2").click(function(){
            $("#close_true").hide();
        })
        
        
        
    })
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
