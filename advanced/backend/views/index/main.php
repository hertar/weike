<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>keke admin</title>


<link href=" /public/tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href=" /public/resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href=" /public/tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src=" /public/resource/js/jquery.js"></script>
<script type="text/javascript" src=" /public/resource/js/system/keke.js"></script>
<script type="text/javascript" src=" /public/resource/js/in.js"></script>
</head>
<body class="frame_body">
<div class="frame_content">
<div id="append_parent"></div>
<!--
<div class="po_ab fixed-right adv ">
<a href="#">广告位招租w150xh90</a>
</div>
-->
<div class="page_title clearfix">
    <h1>管理首页</h1>
    <div class="tool">
    </div>
</div>
<div class="box tip clearfix p_relative" id="man_tips">
    <div class="control">
        <a href="javascript:void(0);" onclick="$('#man_tips').fadeOut();" title="关闭"><b>&times;</b></a>
    </div>
    <div class="title">
        <h2>安全提示</h2>
    </div>
    <div class="detail pad10">
        <ul>
            <li>
                强烈建议您将 keke目录重新命名,避免黑客扫描            </li>
            <li>
                强烈建议您使用 data目录隐藏功能，此功能可大大提高网站安全性，设置方法请参照相关帮助文档或联系官方寻求帮助            </li>
        </ul>
    </div>
</div>
<div class="box user_quick clearfix">
    <div class="detail pad10">
        <ul>
            <li class="avatar">
                <a href="#" title="admin"><img src='http://127.0.0.1/weike/data/avatar/default/man_small.jpg' uid='1' class='pic_small'></a>
            </li>
             <?php $session=new  yii\web\Session()?>
     
            <li class="name">
                <span>你好</span>，创始人<b><?php  echo $session->get("username")?></b>
                <span class="clock"> - 今天是<span id="date"><?php echo date("Y-m-d H:i:m")?></span></span>
            </li>
            <li class="statistics clearfix">
                <ul>
                    <li>
                        <a href="index.php?do=user&view=list" class="button"><span class="icon check">&nbsp;</span>新增用户(0)</a>
                    </li>
                    <li>
                    	<select id="task_add" onchange="jump_list(this.value);">
                    		<option >新增任务(0)</option>
                    		<option value="1">单人悬赏()</option>
                    		<option value="3">计件悬赏()</option>
                    		<option value="2">多人悬赏()</option>
                    		<option value="4">普通招标()</option>
                    		<option value="5">订金招标()</option>

                    	</select>
                    </li>
<li>
                        <a href="index.php?do=store&view=list" class="button"><span class="icon book">&nbsp;</span>店铺申请(0)</a>
                    </li>
<li>
<select id="service_add" onchange="jump_list(this.value);">
                    		<option >新增商品(0)</option>
                    		<option value="6">威客作品()</option>
                    		<option value="7">威客服务()</option>
                    	</select>
                    </li>
                    <li>
                        <a href="index.php?do=finance&view=withdraw" class="button"><span class="icon home">&nbsp;</span>提现申请(0)</a>
                    </li>
                    <li>
                        <a href="index.php?do=finance&view=recharge" class="button"><span class="icon rss">&nbsp;</span>用户充值(0)</a>
                    </li>
                    <li>
                        <a href="index.php?do=user&view=suggest" class="button"><span class="icon mail">&nbsp;</span>建议(0)</a>
                    </li>
<li>
                        <a href="index.php?do=trans&view=report" class="button"><span class="icon mail">&nbsp;</span>举报(0)</a>
                    </li>
<li>
                        <a href="index.php?do=trans&view=rights" class="button"><span class="icon mail">&nbsp;</span>维权(0)</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="box">
    <div class="title">
        系统公告    </div>
    <div class="detail pad10">
        <ul>
            <script type="text/javascript" charset="gbk" src="http://www.kekezu.com/news.php?ac=sysinfo&charset=utf-8&p_name=KPPW">
            </script>
        </ul>
    </div>
</div>
<div class="box">
    <div class="title">
        授权信息    </div>
    <div class="detail pad10">
        <ul>
            <li>
               版 本 号 :	KPPW2.2 2013-04-11            </li>
            <li>
                授权类别 :<span id='kekelic'></span>
            </li>
            <li>
                            </li>
        </ul>
    </div>
</div>
<div class="box">
    <div class="title">
        服务器信息    </div>
    <div class="detail pad10">
        <ul>
         
            <li>
                服务器软件：		Apache/2.4.10 (Win64) OpenSSL/1.0.1j PHP/5.6.2            </li>
            
            <li>
                MySQL 支持： 5.6.21-community
            </li>
            <li>
                PHP版本 ： WINNT/PHP v5.6.2            </li>
          
            <li>
                最大上传文件 : 	64M             </li>

 <li>
                 数据库大小  : 1.38 MB
            </li> 
 <li>
                 上传文件大小 :	 2 MB
            </li>

        </ul>
    </div>
</div>
<script type="text/javascript" src="http://www.kekezu.com/update.php?ac=run&sitename=%25E5%25AE%25A2%25E5%25AE%25A2%25E5%2587%25BA%25E5%2593%2581%25E4%25B8%2593%25E4%25B8%259A%25E5%25A8%2581%25E5%25AE%25A2%25E7%25B3%25BB%25E7%25BB%259F&siteurl=http%3A%2F%2F127.0.0.1%2Fweike&charset=utf-8&version=2.2&release=2013-04-11&os=WINNT&php=Apache%2F2.4.10+%28Win64%29+OpenSSL%2F1.0.1j+PHP%2F5.6.2&mysql=5.6.21&browser=Mozilla%252F5.0%2B%2528Windows%2BNT%2B6.2%253B%2BWOW64%253B%2Brv%253A34.0%2529%2BGecko%252F20100101%2BFirefox%252F34.0&username=admin&email=noemail&p_name=KPPW&lic=&verify=1e573b0e943d1c820546bc86e9d1a270" charset="gbk">
</script>
<script type="text/javascript">

function jump_list(model_id){
window.location.href = 'index.php?do=model&model_id='+model_id+'&view=list';
}
</script>
</div>
<script type="text/javascript"
src=" /public//resource/js/artdialog/artDialog.js"></script>
<script type="text/javascript"
src=" /public/resource/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript"
src="../../public/resource/js/artdialog/artDialog.iframeTools.source.js"></script>
<script type="text/javascript" src=" /public/lang/cn/script/lang.js"></script>
<script type="text/javascript">
In.add('form_and_validation', {
path : " /public/resource/js/system/form_and_validation.js",
type : 'js'
});
In.add('xheditor', {
path : " /public/resource/js/xheditor/xheditor.js",
type : 'js'
});
In.add('mousewheel', {
path : " /public/tpl/js/jquery.mousewheel.min.js",
type : 'js'
});
//In.add('styleswitch',{path:"tpl/js/styleswitch.js",type:'js'});
In.add('table', {
path : " /public/tpl/js/table.js",
type : 'js'
});
In.add('calendar', {
path : " /public/resource/js/system/script_calendar.js"
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
