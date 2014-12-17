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
    <h1>订金招标管理</h1>
    <div class="tool">
        <a href="index.php?r=model/deposit_task_list" class="here">任务列表</a>
<!--<a href="index.php?do=model&model_id=5&view=config">任务配置</a>-->
    </div>
</div>
<div class="box search p_relative">
    <div class="title">
        <h2>搜索</h2>
    </div>
    <div class="detail" id="detail">
        <form action="index.php?do=model&model_id=5&view=list" method="post" id=frm_user_search>
        	<input type="hidden" value="1" name="page">
        	 <table cellspacing="0" cellpadding="0">
        	 	
                <tbody>
                    <tr>
                        <th>
                            任务ID                        </th>
                        <td>
                            <input type="text" value="" name="w[task_id]" class="txt" onkeyup="clearstr(this);"/>
                        </td>
                        <th>
                            任务标题                        </th>
                        <td>
                            <input type="text" value="" name="w[task_title]" class="txt" />支持模糊查询                        </td>
                      <th></th><td> <button class="pill" type="submit" value=搜索 name="sbt_search">
                                <span class="icon magnifier">&nbsp;</span>搜索                              </button></td>
                    </tr>
                    <tr>
                    	  <th>
                            任务状态                        </th>
                        <td>
                            <select class="ps vm" name="w[task_status]" id="catid" onchange="statusJump(this.value)">
                                <option value="" selected="selected">全部</option>
                                                                                                                                <option value="1" >待审核  </option>
                                                                                                <option value="2" >竞标中  </option>
                                                                                                <option value="4" >待托管  </option>
                                                                                                <option value="6" >交付中  </option>
                                                                                                <option value="7" >冻结中  </option>
                                                                                                <option value="8" >结束  </option>
                                                                                                <option value="9" >已失败  </option>
                                                                                                <option value="10" >审核失败  </option>
                                                                                                <option value="11" >仲裁中  </option>
                                                                                            </select>
                        </td>
                        <th>
                           结果排序                        </th>
                        <td>
                           <select name="ord[]" id="ord1">
                           <option value="task_id"  selected="selected">默认排序</option>
                           <option value="end_time" >过期时间</option>
                      </select>
                      <select name="ord[]" onchange="orderJump(this.value)">
                            <option selected="selected"  value="desc">递减</option>
                            <option  value="asc">递增</option>
                      </select>
                       </td>
                        <th>
                                                    显示结果                         </th>
                        <td>
                            <select name="w[page_size]" onchange="pageJump(this.value)">
                               <option value="10" >每页显示10</option>
                               <option value="20" >每页显示20</option>
                               <option value="30" >每页显示30</option>
                             </select>
                            
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
        <h2>任务管理</h2>
    </div>
     <div class="detail">
        <form action="index.php?do=model&model_id=5&view=list" method="post" id="frm_list">
 	<input type="hidden" value="1" name="page">
 	<input type="hidden" name="w[page_size]" value="10">
 	<div id="ajax_dom">
 	<input type="hidden" value="1" name="page"/>
  <table cellpadding="0" cellspacing="0">
             <tbody>
                 <tr>
                    <th width="10%">
                     ID
                     </th>
                      <th width="22%">
                                                                任务标题                       </th>
    <th width="20%">
                                                                任务金额                       </th>
                           <th width="10%">
                                                               发布者                       </th>
                     
                       <th width="9%">
                                                                任务状态                        </th>
                     <!--   <th width="14%">
                                                                过期时间                        </th>-->
                        <th width="20%">
                                                                操作                        </th>
                     </tr>
                                                <tr class="item">
                           
                            <td class="td25">
                               <input type="checkbox" name="ckb[]" class="checkbox" value="63">63                             </td>
                           <td >
                                <a href="/public/index.php?do=task&task_id=63" target="_blank">
                                	网站取名网站取名</a>
                            </td>
<td>
                            
                                ￥1,000.00元-￥2,000.00元                            </td>
                            <td>
                               红客                             </td>
                            
                            <td>
                                投标中                            </td>
                          
                             <td>
                             	
<a href="index.php?do=model&model_id=5&view=list&id=63&ac=recommend&page=1&task_id=63" onclick="return crecomm(this,'',1);" class="button"><span class="cog icon"></span>荐</a>

<a href="index.php?do=model&model_id=5&view=edit&task_id=63&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
</td>
                         </tr>
                         <tr class="item">
                           
                            <td class="td25">
                               <input type="checkbox" name="ckb[]" class="checkbox" value="51">51                             </td>
                           <td >
                                <a href="/public/index.php?do=task&task_id=51" target="_blank">
                                	三维渲染----</a>
                            </td>
<td>
                            
                                ￥1,000.00元-￥2,000.00元                            </td>
                            <td>
                               红客                             </td>
                            
                            <td>
                                投标中                            </td>
                          
                             <td>
                             	
<a href="index.php?do=model&model_id=5&view=list&id=51&ac=recommend&page=1&task_id=51" onclick="return crecomm(this,'',1);" class="button"><span class="cog icon"></span>荐</a>

<a href="index.php?do=model&model_id=5&view=edit&task_id=51&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
</td>
                         </tr>
                         <tr class="item">
                           
                            <td class="td25">
                               <input type="checkbox" name="ckb[]" class="checkbox" value="42">42                             </td>
                           <td >
                                <a href="/public/index.php?do=task&task_id=42" target="_blank">
                                	服务器系统</a>
                            </td>
<td>
                            
                                ￥100.00元-￥1,000.00元                            </td>
                            <td>
                               红客                             </td>
                            
                            <td>
                                投标中                            </td>
                          
                             <td>
                             	
<a href="index.php?do=model&model_id=5&view=list&id=42&ac=recommend&page=1&task_id=42" onclick="return crecomm(this,'',1);" class="button"><span class="cog icon"></span>荐</a>

<a href="index.php?do=model&model_id=5&view=edit&task_id=42&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
</td>
                         </tr>
                         <tr class="item">
                           
                            <td class="td25">
                               <input type="checkbox" name="ckb[]" class="checkbox" value="38">38                             </td>
                           <td >
                                <a href="/public/index.php?do=task&task_id=38" target="_blank">
                                	评测报告评测报告评测报告</a>
                            </td>
<td>
                            
                                ￥100.00元-￥1,000.00元                            </td>
                            <td>
                               红客                             </td>
                            
                            <td>
                                投标中                            </td>
                          
                             <td>
                             	
<a href="index.php?do=model&model_id=5&view=list&id=38&ac=recommend&page=1&task_id=38" onclick="return crecomm(this,'',1);" class="button"><span class="cog icon"></span>荐</a>

<a href="index.php?do=model&model_id=5&view=edit&task_id=38&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
</td>
                         </tr>
                         <tr class="item">
                           
                            <td class="td25">
                               <input type="checkbox" name="ckb[]" class="checkbox" value="36">36                             </td>
                           <td >
                                <a href="/public/index.php?do=task&task_id=36" target="_blank">
                                	征集创新征集创新征集创新</a>
                            </td>
<td>
                            
                                ￥100.00元-￥1,000.00元                            </td>
                            <td>
                               红客                             </td>
                            
                            <td>
                                投标中                            </td>
                          
                             <td>
                             	
<a href="index.php?do=model&model_id=5&view=list&id=36&ac=recommend&page=1&task_id=36" onclick="return crecomm(this,'',1);" class="button"><span class="cog icon"></span>荐</a>

<a href="index.php?do=model&model_id=5&view=edit&task_id=36&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
</td>
                         </tr>
                         <tr class="item">
                           
                            <td class="td25">
                               <input type="checkbox" name="ckb[]" class="checkbox" value="29">29                             </td>
                           <td >
                                <a href="/public/index.php?do=task&task_id=29" target="_blank">
                                	交友网站制作</a>
<font color="red">[荐]</font>                            </td>
<td>
                            
                                ￥100.00元-￥1,000.00元                            </td>
                            <td>
                               樱桃小丸子                             </td>
                            
                            <td>
                                投标中                            </td>
                          
                             <td>
                             	

<a href="index.php?do=model&model_id=5&view=list&ac=unrecommend&task_id=29&page=1" onclick="return crecomm(this,'',2);" class="button"><span class="cog icon"></span>取消推荐</a>
<a href="index.php?do=model&model_id=5&view=edit&task_id=29&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
</td>
                         </tr>
                         <tr class="item">
                           
                            <td class="td25">
                               <input type="checkbox" name="ckb[]" class="checkbox" value="26">26                             </td>
                           <td >
                                <a href="/public/index.php?do=task&task_id=26" target="_blank">
                                	化妆工作室取名</a>
<font color="red">[荐]</font>                            </td>
<td>
                            
                                ￥100.00元-￥1,000.00元                            </td>
                            <td>
                               猪八戒                             </td>
                            
                            <td>
                                投标中                            </td>
                          
                             <td>
                             	

<a href="index.php?do=model&model_id=5&view=list&ac=unrecommend&task_id=26&page=1" onclick="return crecomm(this,'',2);" class="button"><span class="cog icon"></span>取消推荐</a>
<a href="index.php?do=model&model_id=5&view=edit&task_id=26&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
</td>
                         </tr>
                         <tr class="item">
                           
                            <td class="td25">
                               <input type="checkbox" name="ckb[]" class="checkbox" value="20">20                             </td>
                           <td >
                                <a href="/public/index.php?do=task&task_id=20" target="_blank">
                                	玉石风水摆件厂家广告语征集</a>
<font color="red">[荐]</font>                            </td>
<td>
                            
                                ￥100.00元-￥1,000.00元                            </td>
                            <td>
                               猪八戒                             </td>
                            
                            <td>
                                投标中                            </td>
                          
                             <td>
                             	

<a href="index.php?do=model&model_id=5&view=list&ac=unrecommend&task_id=20&page=1" onclick="return crecomm(this,'',2);" class="button"><span class="cog icon"></span>取消推荐</a>
<a href="index.php?do=model&model_id=5&view=edit&task_id=20&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
</td>
                         </tr>
                         <tr class="item">
                           
                            <td class="td25">
                               <input type="checkbox" name="ckb[]" class="checkbox" value="19">19                             </td>
                           <td >
                                <a href="/public/index.php?do=task&task_id=19" target="_blank">
                                	寻找淘宝小二通过全球购业务</a>
<font color="red">[荐]</font>                            </td>
<td>
                            
                                ￥100.00元-￥1,000.00元                            </td>
                            <td>
                               樱桃小丸子                             </td>
                            
                            <td>
                                投标中                            </td>
                          
                             <td>
                             	

<a href="index.php?do=model&model_id=5&view=list&ac=unrecommend&task_id=19&page=1" onclick="return crecomm(this,'',2);" class="button"><span class="cog icon"></span>取消推荐</a>
<a href="index.php?do=model&model_id=5&view=edit&task_id=19&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
</td>
                         </tr>
                         <tr class="item">
                           
                            <td class="td25">
                               <input type="checkbox" name="ckb[]" class="checkbox" value="10">10                             </td>
                           <td >
                                <a href="/public/index.php?do=task&task_id=10" target="_blank">
                                	征集茶叶品牌故事/文化/定位/理念等！发</a>
<font color="red">[荐]</font>                            </td>
<td>
                            
                                ￥100.00元-￥1,000.00元                            </td>
                            <td>
                               樱桃小丸子                             </td>
                            
                            <td>
                                投标中                            </td>
                          
                             <td>
                             	

<a href="index.php?do=model&model_id=5&view=list&ac=unrecommend&task_id=10&page=1" onclick="return crecomm(this,'',2);" class="button"><span class="cog icon"></span>取消推荐</a>
<a href="index.php?do=model&model_id=5&view=edit&task_id=10&page=1" class="button dbl_target"><span class="pen icon"></span>查看</a>
</td>
                         </tr>
<tr>
                           <td colspan="7">
                               <div class="page fl_right">
                                   <span> 1 / 2页 </span> <a class="selected">1</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=model&model_id=5&view=list&w[task_id]=&w[task_title]=&w[task_status]=&ord[0]=&ord[1]=&page=1&page_size=10&page=2','2','1')>2</a><a href=javascript:; onclick=ajaxpage('ajax_dom','index.php?do=model&model_id=5&view=list&w[task_id]=&w[task_title]=&w[task_status]=&ord[0]=&ord[1]=&page=1&page_size=10&page=2','2','1')>下一页>></a>                               </div>
                           <div class="clearfix">
                                <input type="checkbox" onclick="checkall();" id="checkbox" name="checkbox"/>
                                 <label for="checkbox">
                                                                全选                             </label>     <input type="hidden" name="sbt_action" class="sbt_action"/>
                        <button type="submit" value="批量删除" onclick="return batch_act(this,'frm_list');" class="pill negative" ><span class="icon trash"></span>批量删除</button>
                        <button type="submit" value="批量审核" onclick="return batch_act(this,'frm_list');"  class="positive pill negative"><span class="icon check">&nbsp;</span>批量审核</button>
</div>
                         </td>
                   </tr>
                </tbody>
        </table></div>
       </form>
     </div>
</div>
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
<script type="text/javascript">
var url = 'index.php?do=model&model_id=5&view=list&w[task_id]=&w[task_title]=&w[task_status]=&ord[0]=&ord[1]=&page=1&page_size=10';
function statusJump(task_status){
window.location.href = url+'&w[task_status]='+task_status;
}
function orderJump(value){
var ord1 = $("#ord1").children("option:selected").val();//selected的值
window.location.href= url+'&ord[0]='+ord1+'&ord[1]='+value;
}
function pageJump(value){
window.location.href = url+'&page_size='+value;
}
</script>