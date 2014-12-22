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
    <h1>用户组</h1>
    <div class="tool">
        <a href="index.php?r=user/custom_list" class="here">组员列表</a>
        <a href="index.php?r=user/custom_add">设置用户组</a>
    </div>
</div>
<div class="box search p_relative">
    <div class="title">
        <h2>搜索</h2>
    </div>
    <div class="detail" id="detail">
        <form action="#" method="post" >
           
            <table cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <th>
                            用户 ID
                        </th>
                        <td>
                            <input type="text" value="" name="space_uid" class="txt" onkeyup="clearstr(this);"/>
                        </td>
                        <th>
                            用户名                        </th>
                        <td>
                            <input type="text" name='space_username' value="" onkeyup="clearspecial(this);" class="txt"/>&nbsp;&nbsp;                      </td>
                        <th>
                            &nbsp;
                        </th>
                        <td>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th>
                            用户状态                        </th>
                        <td>
                            <select class="ps vm" name="w[status]" id="catid">
                                <option value="0" > 所有的</option>
                                <option value="1" > 正常</option>
                                <option value="2" > 禁用</option>
                            </select>
                        </td>
                        <th>
                            结果排序                        </th>
                        <td>
                            <select name="ord" id="ord" onchange="sort()">
                              <?php
                                if($ord=="desc"){
                              ?>
                                <option   selected="selected"  value="desc">编号倒序</option>
                                <option  value="asc">编号正序</option>
                                <?
                                }elseif($ord=="asc"){
                                ?>
                                <option    value="desc">编号倒序</option>
                                <option  selected="selected" value="asc">编号正序</option>
                                <?php
                                }else{
                                ?>
                                <option    value="desc">编号倒序</option>
                                <option  selected="selected" value="asc">编号正序</option>
                                <?php
                                }
                                ?>
                            </select>
                        </td>
                        <th>
                            显示结果                        </th>
                        <td>
                            <select name="page_size" id="page_size" onchange="sort()">
                                  <?php
                                    if($page==3){
                                ?>
                                <option value="3"  selected>每页显示3</option>
                                <option value="5" >每页显示5</option>
                                <option value="10" >每页显示10</option>
                                <?php
                                    }elseif($page=="5"){
                                ?>
                                <option value="3"  >每页显示3</option>
                                <option value="5" selected>每页显示5</option>
                                <option value="10" >每页显示10</option>
                                <?php
                                    }elseif ($page=="10") {
                                ?>
                                <option value="3" >每页显示3</option>
                                <option value="5" >每页显示5</option>
                                <option value="10"  selected>每页显示10</option>
                                <?php
                                    }else{
                                ?>
                                <option value="3"  selected>每页显示3</option>
                                <option value="5" >每页显示5</option>
                                <option value="10" >每页显示10</option>
                                <?php
                                    }
                                ?>
                            </select>
                            
                            <button class="pill" type="submit" value="搜索" name="sbt_search">
                                <span class="icon magnifier">&nbsp;</span>搜索                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>
<!--搜索结束-->
<div class="box list">
    <div class="title">
        <h2>用户组</h2>
    </div>
    <div class="detail">
    	<form name="frm_list" id="frm_list" action="index.php?do=user&view=custom_list" method="post" >
    	<div id="ajax_dom"><input type="hidden" name="page" value="1" />
        <table cellpadding="0" cellspacing="0">
            <tr>
            	<th width="15">
            		<input type="checkbox" onclick="checkall();" id="checkbox" name="checkbox"/>
            	</th>
                <th>
                    UID
                </th>
                <th width="100" class="motif">
                    用户名                </th>
                <th>
                    用户组                </th>
                <th>
                    联系电话                </th>
                <th>
                    E-mail
                </th>
                <th>
                    QQ
                </th>
                <th>
                    编辑                </th>
                <th>
                    删除                </th>
            </tr>
            <?php
                foreach ($row as $v) {
                    
                
            ?>
                        <tr class="item" id="tr<?php echo $v['uid']?>">
            	<td>
                    <input type="checkbox" name="cheack" class="checkbox" value="<?php echo $v['uid']?>">
                </td>
                <td>
                    <?php echo $v['uid']?>           </td>
                <td class="motif">
                    <a href="javascript:void(0)"><?php echo $v['username']?></a>
                </td>
                <td>
                    <?php echo $v['groupname']?>                </td>
                <td>
                    <?php echo $v['phone']?>                </td>
                <td>
                    <?php echo $v['email']?>                </td>
                <td>
                    <?php echo $v['qq']?>                </td>
                <td>
</td>
                <td>
                    <a class="button" href="index.php?r=user/custom_del&id=<?php echo $v['uid']?>" onclick="return cdel(this);">
                    	<span class="trash icon"></span>删除</a>
                </td>
            </tr> 
            <?php
                }
            ?>
            <tr>
                <td colspan="9">
                    
                    <div class="clearfix">
                    
                    <label for="checkbox">全选</label>
<input type="hidden" name="sbt_action" class="sbt_action">
                    <button name="sbt_action" type="submit" value="批量删除" onclick="return del_all();" class="pill negative">
                        <span class="icon trash"></span>批量删除                    </button>
 <a name="sbt_action" value="设置用户组 " class="positive pill button" href="index.php?r=user/custom_add">
<span class="plus icon"></span>设置用户组                    </a>
                </div>
                </td>
            </tr>
        </table>
<?php
use yii\widgets\LinkPager;
?>

<div class="page"><?= LinkPager::widget(['pagination' => $pages]) ?></div>

</div>
</form>
    </div>
</div>
<script type="text/javascript">
    function showpl(){
        $('#sbt_del').show();
        $('#slt_action').show();
    }

function has_selecte(action){
var count = $("#frm_list input:checked:not([id=checkbox])");
var len = count.length;
if(len>0){
return confirm("确定"+action+"吗?") 
}else{
alert("请选择要操作的项！");return false;
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

//批量删除
function del_all(){
var check=document.getElementsByName("check");
var idarr=new Array();
var flag=0;
for (var i=0; i<check.length; i++)
{
        if(check[i].checked==true)
        {
                idarr[flag]=check[i].value;
                flag++;
        }
}
if(flag==0)
{
        alert("操作受限！请选择一条进行删除");
        return false;
}
if(confirm("确认删除？"))
{
        //alert(idarr)
        $.ajax({
            url:"index.php?r=user/custom_del_all",
            type:"get",
            data:{"id":idarr},
            success:function(e){
	alert(e);
                if(e=="ok"){
                   for (var i=0; i<check.length; i++)
                    {
                            if(check[i].checked==true)
                            {
                                    $("#tr"+check[i].value).remove();                          
                            }
                    }
                }
            }
        })
        
        
}
}

//排序
//排序
function sort(){
    ord=$("#ord").val();
 
    page_size=$("#page_size").val();
    //alert(page_size);
    location.href="index.php?r=user/custom_list&ord="+ord+"&page_size="+page_size;
  }
</script>
</body>
</html>
