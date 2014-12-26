
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
    <h1>广告添加</h1>
    <div class="tool">
        <a href="index.php?r=tool/ad_list">广告列表</a>
        <a href="index.php?r=tool/ad_add" class="here">广告添加</a>
    </div>
</div>
<div class="box post">
    
    <div class="tabcon">
        <div class="title">
            <h2>广告添加</h2>
        </div>
        <div class="detail">
            <form method="post" action="index.php?r=tool/ad_add_pro"  enctype="multipart/form-data" id="form1">
              
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <th scope="row" width="130"> 广告标题</th><td>
                            <input type="text" value="" name="ad_name" id="title" class="txt" style="width:260px;" limit="required:true;len:1-50" msg="广告标题不可为空" original-title="广告标题只为识别辨认不同广告条目之用，并不在广告中显示" msgArea="item_title_msg"/><b style="color:red">*</b><!--
                            <input type="hidden" value="" name="hdn_ad_name" /> 隐藏域优先添加 
                            --><span id="item_title_msg">广告标题只为识别辨认不同广告条目之用，并不在广告中显示</span></td>
                    </tr> 
                    <tr>
                        <th scope="row" width="130">开始时间</th><td>
                            <input type="text" value=""  name="start_time" class="txt" onclick="showcalendar(event, this, 0)" title="设置广告广告开始的时间，格式 yyyy-mm-dd，留空为不限制开始时间">
                            <span id="start_time_msg">设置广告展示生效开始时间，留空为永久有效</span></td>
                    </tr>
                    <tr>
                        <th scope="row" width="130">结束时间</th><td>
                            <input type="text" value="" name="end_time" class="txt" onclick="showcalendar(event, this, 0)" title="设置广告广告结束的时间，格式 yyyy-mm-dd，留空为不限制结束时间" />
                            <span id="end_time_msg">设置广告展示生效结束时间，留空为永久有效</span></td>
                    </tr>
                    <tr>
                        <th scope="row" width="130">展示方式</th>
                        <td>
                        	<div id="select_ad_type">
                        	<input type="radio" name="ad_type" value="code" onclick="swaptab('ad','backLava','',4,1)"  checked/>代码                        	
                                <input type="radio" name="ad_type" value="text" onclick="swaptab('ad','backLava','',4,2)" />文字                        
                                <input type="radio" name="ad_type" value="image" onclick="swaptab('ad','backLava','',4,3)" />图片                     
                                <input type="radio" name="ad_type" value="flash" onclick="swaptab('ad','backLava','',4,4)" />flash
                        	(请选择所需的广告展现方式)
                        	</div>
                        </td>
                    </tr>
                    <!-- code -->
                    <tbody id="div_ad_1" class="hidden">
                    <tr><th>html代码</th><td>
                    	<textarea name="ad_type_code_content" title=请根据前端显示效果埴写内容 cols="100" rows="10" class="txt"></textarea>
                    	</td>
                    </tr>
                    </tbody>
                    <!-- 文字 -->
                    <tbody id="div_ad_2" class="hidden">
                    <tr><th>文字内容</th><td>
                    	<textarea name="ad_type_text_content" cols="100" title=请根据前端显示效果埴写内容 rows="10" class="txt"></textarea>
                    	</td>
                    </tr>
                    </tbody>
 <!-- 图片 -->
                     <tbody id="div_ad_3" class="hidden">
                    <tr>
                    	<th>图片地址</th>
<td>
<input type="file" name="ad_type_image_file" value=""  onchange="isExtName(this,1)" ext=".jpg,.png,.gif,.jpeg,.bmp" title=请输入图片广告的图片调用地址 />
</td>
</tr>
                  
<tr><th>链接地址</th><td><input type="text" value="" name="ad_type_image_url" class="txt" title=请输入图片广告的图片调用地址 /></td></tr>

<tr><th>投放地区</th>
    <td>
        <select name="pro" onchange="select(this.value)" id="pro">
            <option value="0">--请选择--</option>
            <?php
                foreach($arr as $v){
            ?>
            <option value="<?php echo $v["region_id"]?>"><?php echo $v["region_name"]?></option>
            <?php
                }
            ?>
        </select>
        <select name="city" id="city">
             <option value="0">--请选择--</option>
        </select>
        
    </td>
</tr>
<script>
    function select(pid){
        
            $.ajax({
                url:"index.php?r=tool/region",
                type:"get",            
                data:{"pid":pid},
                dataType:"jsonp",
                success:function(msg){
                    //alert(msg)
                    if(msg){
                        var str=" <option value=''>--请选择--</option>";
                        for(var i in msg){
                              
                            str+='<option value='+i+'>'+msg[i]+'</option>'
                         }
                      
                          $("#city").html(str);          
                    }
                }
            })
    }
</script>
                    </tbody>
                    <!-- flash -->
                    <tbody id="div_ad_4" class="hidden">
                    <tr><th>flash地址</th><td><div id="flash_way">
                    		<input type="radio" id="flash_url" name="flash_method" value="url">url
                    		<input type="radio" id="flash_file" name="flash_method" value="file" checked="checked">文件                    		<br/>
                    		<input type="text" size="60" id="ad_type_flash_url" name="ad_type_flash_url" value="" class="txt" style="display:none;" /> 
                   			<input type="file" name="ad_type_flash_file" id="ad_type_flash_file" style="display:none;" value=""  onchange="isExtName(this,1)" ext=".swf" />
                   			</div></td>
                    </tr>
<tr><th>flash宽度</th><td><input type="text" value="" name="ad_type_flash_width" id="ad_type_flash_width" title=请输入flash广告的图片调用地址 class="txt" /></td></tr>
<tr><th>flash高度</th><td><input type="text" value="" name="ad_type_flash_height" id="ad_type_flash_height" title=请输入flash广告的高度，单位为像素 class="txt" /></td></tr>
<tr><th>链接地址</th><td><input type="text" value="" name="ad_type_flash_url" class="txt" title=请输入图片广告的图片调用地址 /></td></tr>
                    </tbody> 
                    <tr>
                    	
                    	<th>排序</th>
                    	<td><input type="text" name="listorder" value="" class="txt" limit="type:int" /></td>
                    </tr>
                    <tr>
                    	<th>是否开启</th>
                    	<td><input type="radio" name="rdn_is_allow" value="1" checked="checked" />是                    		<input type="radio" name="rdn_is_allow" value="0"  />否                    	</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            &nbsp;
                        </th>
                        <td>
                            <div class="clearfix padt10">
                            	<input type="hidden" name="sbt_action" value="1">
                                <button class="positive pill primary button" type="submit" name="sbt_action" value="提交" >
                                    <span class="check icon"></span>提交                                </button>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
            <script type="text/javascript">
                $(function(){
            		var show_type=$("#hdn_ad_type").val();
if(show_type){
$("#select_ad_type :radio").each(function(index){
            			var value=$(this).val();
            			if(value==show_type){ //alert(index);
            				$(this).attr("checked","checked");
            				var tab = 'div_ad_'+(index+1);
$("#"+tab+"").removeClass("hidden");
            			}
            			});
}else{
$("#div_ad_1").removeClass("hidden");
}
            		
            		$("#flash_way :radio").click(function(){
            			$("#ad_type_flash_file").hide();
            			$("#ad_type_flash_url").hide();
            			var v=$(this).val();
            			if(v=="url"){
            				$("#ad_type_flash_url").show();
            			}
            			if(v=="file"){
            				$("#ad_type_flash_file").show();
            			}
            			
            		});
            		$("#rdn_position :radio").click(function(){
            			var type=$("#select_ad_type :checked").val();
            			var typeID=type+"_select";
            			var i = $(this).index();
            			i++;
            			var sel_option=document.getElementById(typeID);
            			if(typeof(sel_option)=="object")
            				sel_option.options['i'].selected=true;//没有触发onchange事件
            				var v=sel_option.value; 
            				setsize(v,type);
            		})
            });
            	// v = value o = code|text|image|flash
            	function setsize(v, o) {
if(v!=-1) {
var size = v.split('*');
//ad_type_image_width
 var w = size['0'];
 var h = size['1'];
 document.getElementById('ad_type_' + o + '_width').value = w;
 document.getElementById('ad_type_' +o + '_height').value = h;
}else{
document.getElementById('ad_type_' + o + '_width').value = '';
document.getElementById('ad_type_' +o + '_height').value = '';
}
}
function checkform(){

var i = checkForm(document.getElementById('form1'));
if(i){

 	document.getElementById("form1").submit();

}else{
return false;
}
}
function chkCheckBoxChs(){ //檢測是否有選擇多选框的至少一项
var obj = document.getElementsByName('ckb_tpl_type[]'); //獲取多選框數組
var objLen= obj.length; //獲取數據長度
var objYN; //是否有選擇
var i;
objYN=false;
for (i = 0;i< objLen;i++){
if (obj [i].checked==true) {
objYN= true;
break;
}
}
return objYN;

}
function chkRadio(){				
 var position = document.getElementsByName("ad_position");
 var objYN;
 var i;
 objYN=false;
 for(var i=0;i<position.length;i++){
  if(position[i].checked==true){
   return true;
   break;
  }
 }
return objYN;
}

            </script>
        </div>
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