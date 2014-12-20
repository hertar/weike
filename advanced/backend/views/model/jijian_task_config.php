<?php
use yii\widgets\LinkPager;
?>
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
  <h1>单人悬赏任务配置</h1>
    <div class="tool">
      <a href="index.php?r=model/jijian_task_config" class="here">基本配置</a>
      <a href="index.php?r=model/jijian_task_control">流程配置</a>
      <a href="index.php?r=model/jijian_task_priv">权限配置</a>
     </div>
</div>
<div class="box post">
 <div class="tabcon">
  <div class="title"><h2>基本配置</h2></div>
<div class="detail">
 <form action="index.php?r=model/add_jijian_task" method="post">
 	<input type="hidden" name="pk[model_id]" value="1">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
   <th scope="row" width="200">模型名称：</th>
    <td>
       <input type="text" class="txt" name="fds[model_name]" value="<?php echo $list['model_name']?>">
</td>
        </tr>
<tr>
   <th scope="row" width="200">是否开启：</th>
     <td>
        <label for="status_yes"><input type="radio" id="status_yes" name="fds[model_status]"value="1" <?php if($list['model_status']==1){echo "checked";}?>> 是</label>
        <label for="status_no"><input type="radio" id="status_no" name="fds[model_status]"  value="0" <?php if($list['model_status']==0){echo "checked";}?>> 否</label>
</td>
        </tr>
<tr>
 
        </tr>
<tr>
  <th scope="row" width="200">指定行业：</th>
    <td>              <select onchange="p_indus_add(this.value)" style="margin-bottom:5px;">
   <option value="">选择行业</option>
<option value="441">品牌设计</option>
<option value="2">网站开发</option>
<option value="201">创意祝福</option>
<option value="249">网游服务</option>
<option value="3">文案写作</option>
<option value="335">建筑/装修</option>
<option value="211">头脑风暴</option>
<option value="350">照片美化/编辑</option>
<option value="234">法律服务</option>
<option value="160">起名取名</option>
<option value="357">影视/配音/歌词</option>
<option value="192">生活服务</option>
<option value="218">移动应用</option>
<option value="240">招聘找人</option>
<option value="121">软件开发</option>
  </select>
 <br class="clear">
 <select name="p_indus_select" id="p_indus_select" multiple=multiple style="width:160px;float:left;height:200px;overflow-y:scroll;background:white;border:#ccc solid 1px" ></select>
<div style="width:80px;float:left;height:160px;overflow:hidden;margin-left:20px; text-align:center;padding-top:40px;">
<button onclick = "moveitems()" type="button" class="input_but"><<</button><br><br>
<button onclick = "additems()" type="button" class="input_but">>></button><br>
</div>
<select name="fds[indus_bid][]" id="s_indus_select" multiple=multiple style="width:160px;float:left;height:200px;overflow-y:scroll;background:white;border:#ccc solid 1px;margin-left:20px;">
<option id="p_indus_select_op_44" value="44" selected="selected">写文章</option>
</select>
<br class="clear">(如果指定行业后,则任务的行业类型将是这里指定行业类型；如果不指定行业，则任务类型将是系统指定的所有行业类型.)</td>
         </tr>
<!-- <tr>
    <th scope="row" width="200">模型简介：</th>
      <td>
         <textarea cols=80 rows=8 name="fds[model_intro]">单人悬赏常用于发布一些时间短，需要创意型的任务，例如给宝宝起名，店铺起名，设计网站logo，贺卡设计</textarea><br>(限50字节)  </td>
         </tr>-->
 <tr>
    <th scope="row" width="200">模型说明：</th>
      <td>
       <textarea cols=110 rows=12 name="fds[model_desc]"  style="width:75%;" id="tar_content"  class="xheditor {urlBase:'http://127.0.0.1/weike/',tools:'simple',skin:'nostyle',admin:'/public/',html5Upload:false,upImgUrl:'/public/index.php?do=ajax&view=upload&file_type=att'}" cols="70"><?php echo $list['model_desc']?></textarea>
  </td>
         </tr>
  <tr>
  <th scope="row" width="200">&nbsp;</th>
    <td>
       <div class="clearfix padt10">
         <button type="submit" name="sbt_edit" class="positive primary  button" value="1"><span class="check icon"></span>提交</button>
         
               </div>
             </td>
         </tr>
        </table>
       </form>
     </div>
   </div>
</div>
<script type="text/javascript">
        $(function(){
$("#txt_task_min_cash").keyup(function(){
$("#txt_task_min_cash_1").val($(this).val());
})
 $("#end_action_3").click(function(){
 	 if($("#end_action_3").attr("checked")==true){
  $("#slt").show();
  }else{
 $("#slt").hide();}	
 })
 if($("#end_action_3").attr("checked")==true){
  $("#slt").show();
  }
 $("#end_action_1").click(function(){
 	$("#slt").hide();
 })
 $("#end_action_2").click(function(){
 	$("#slt").hide();
 })
 

            $("#add_cash_rul").click(function(){
                var i = parseInt($("#add_new_rul li:last-child span").html());
                k = eval(i + 1);
                var rul_option = '<li><span id="span_' + k + '"></span> <input type="text" class="txt" size="10" name="txt_task_min_cash_' + k + '" limit="required:true;type:float" msg="任务最小金额不正确，长度2-5"   class="input_t"/>元以上&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="txt" size="10" limit="require:true;type:int" msg="天数不能为空! 天数的长度1-2"  name="txt_task_min_day_'+k+'" class="input_t"> 天  </li>';
                $("#add_new_rul").append(rul_option);
                var lastinput = $("#add_new_rul li:last-child input");
                $("#add_new_rul li:last-child #span_" + k).html(k);
$("#cash_rul_count").val(k);
            })
            $("#del_cash_rul").click(function(){
               var i = parseInt($("#add_new_rul li:last-child span").html()); 
if(i!=1)
{
  $("#add_new_rul li:last-child").remove();	
  $("#cash_rul_count").attr('value',i-1);
}
else
{
alert("第一条规则不能被删除!");
}

            })
            
            $("#add_adjourn_rul").click(function(){

                var i = parseInt($("#new_adjourn_rul li:last-child input").eq(0).val());
                
k = eval(i + 1);
var rul_option ='<li>第<input type="text" class="txt" size="10" name="txt_defer_times_'+k+'" value="'+k+'" readonly="true" class="input_t"/>次 不低于悬赏总金额的<input type="text" size="10" class="txt"  limit="type:float;required:true" msg="百分比不能为空！" name="txt_defer_cash_scale_'+k+'" class="input_t">%</li>'; 
                $("#new_adjourn_rul").append(rul_option);
                var lastinput = $("#new_adjourn_rul li:last-child input");
$("#adjourn_rul_count").val(k);
                
            })
            $("#del_adjourn_rul").click(function(){
var i = parseInt($("#new_adjourn_rul li:last-child input").eq(0).val());
if(i!=1)
{
                	$("#new_adjourn_rul li:last-child").remove();
$("#adjourn_rul_count").val(i-1);
}
else
{
alert("第一条规则不能被删除!");
}
            })
            
            
        })

function p_indus_add(id){
mod = "";
if(id=='441'){
if(!$('#s_indus_select_op_8').val()){
mod +="<option id=\"p_indus_select_op_8\" value=\"8\">标志设计</option>";
}
if(!$('#s_indus_select_op_9').val()){
mod +="<option id=\"p_indus_select_op_9\" value=\"9\">VI设计</option>";
}
if(!$('#s_indus_select_op_10').val()){
mod +="<option id=\"p_indus_select_op_10\" value=\"10\">名片设计</option>";
}
if(!$('#s_indus_select_op_11').val()){
mod +="<option id=\"p_indus_select_op_11\" value=\"11\">海报设计</option>";
}
if(!$('#s_indus_select_op_12').val()){
mod +="<option id=\"p_indus_select_op_12\" value=\"12\">宣传册页</option>";
}
if(!$('#s_indus_select_op_13').val()){
mod +="<option id=\"p_indus_select_op_13\" value=\"13\">卡通设计</option>";
}
if(!$('#s_indus_select_op_14').val()){
mod +="<option id=\"p_indus_select_op_14\" value=\"14\">招牌设计</option>";
}
if(!$('#s_indus_select_op_16').val()){
mod +="<option id=\"p_indus_select_op_16\" value=\"16\">横幅设计</option>";
}
if(!$('#s_indus_select_op_27').val()){
mod +="<option id=\"p_indus_select_op_27\" value=\"27\">网站美工</option>";
}
if(!$('#s_indus_select_op_144').val()){
mod +="<option id=\"p_indus_select_op_144\" value=\"144\">工业设计</option>";
}
if(!$('#s_indus_select_op_145').val()){
mod +="<option id=\"p_indus_select_op_145\" value=\"145\">按钮图标</option>";
}
if(!$('#s_indus_select_op_348').val()){
mod +="<option id=\"p_indus_select_op_348\" value=\"348\">xilogo设计</option>";
}
if(!$('#s_indus_select_op_349').val()){
mod +="<option id=\"p_indus_select_op_349\" value=\"349\">vi设计</option>";
}
if(!$('#s_indus_select_op_370').val()){
mod +="<option id=\"p_indus_select_op_370\" value=\"370\">游戏封面</option>";
}
if(!$('#s_indus_select_op_376').val()){
mod +="<option id=\"p_indus_select_op_376\" value=\"376\">lee牛仔裤</option>";
}
if(!$('#s_indus_select_op_130').val()){
mod +="<option id=\"p_indus_select_op_130\" value=\"130\">字体设计</option>";
}
if(!$('#s_indus_select_op_131').val()){
mod +="<option id=\"p_indus_select_op_131\" value=\"131\">贺卡设计</option>";
}
if(!$('#s_indus_select_op_132').val()){
mod +="<option id=\"p_indus_select_op_132\" value=\"132\">礼品设计</option>";
}
if(!$('#s_indus_select_op_134').val()){
mod +="<option id=\"p_indus_select_op_134\" value=\"134\">四格漫画</option>";
}
if(!$('#s_indus_select_op_135').val()){
mod +="<option id=\"p_indus_select_op_135\" value=\"135\">动漫设计</option>";
}
if(!$('#s_indus_select_op_136').val()){
mod +="<option id=\"p_indus_select_op_136\" value=\"136\">排版设计</option>";
}
if(!$('#s_indus_select_op_137').val()){
mod +="<option id=\"p_indus_select_op_137\" value=\"137\">服饰设计</option>";
}
if(!$('#s_indus_select_op_140').val()){
mod +="<option id=\"p_indus_select_op_140\" value=\"140\">台历设计</option>";
}
if(!$('#s_indus_select_op_133').val()){
mod +="<option id=\"p_indus_select_op_133\" value=\"133\">QQ表情</option>";
}
if(!$('#s_indus_select_op_263').val()){
mod +="<option id=\"p_indus_select_op_263\" value=\"263\">其他</option>";
}
if(!$('#s_indus_select_op_138').val()){
mod +="<option id=\"p_indus_select_op_138\" value=\"138\">ppt设计</option>";
}
}
if(id=='2'){
if(!$('#s_indus_select_op_28').val()){
mod +="<option id=\"p_indus_select_op_28\" value=\"28\">网站模板</option>";
}
if(!$('#s_indus_select_op_30').val()){
mod +="<option id=\"p_indus_select_op_30\" value=\"30\">网站广告</option>";
}
if(!$('#s_indus_select_op_31').val()){
mod +="<option id=\"p_indus_select_op_31\" value=\"31\">网页动画</option>";
}
if(!$('#s_indus_select_op_32').val()){
mod +="<option id=\"p_indus_select_op_32\" value=\"32\">商城开发</option>";
}
if(!$('#s_indus_select_op_34').val()){
mod +="<option id=\"p_indus_select_op_34\" value=\"34\">接口操作</option>";
}
if(!$('#s_indus_select_op_408').val()){
mod +="<option id=\"p_indus_select_op_408\" value=\"408\">网站推广</option>";
}
if(!$('#s_indus_select_op_169').val()){
mod +="<option id=\"p_indus_select_op_169\" value=\"169\">FLASH</option>";
}
if(!$('#s_indus_select_op_148').val()){
mod +="<option id=\"p_indus_select_op_148\" value=\"148\">店招设计</option>";
}
if(!$('#s_indus_select_op_154').val()){
mod +="<option id=\"p_indus_select_op_154\" value=\"154\">网店取名</option>";
}
if(!$('#s_indus_select_op_155').val()){
mod +="<option id=\"p_indus_select_op_155\" value=\"155\">网店模板</option>";
}
if(!$('#s_indus_select_op_156').val()){
mod +="<option id=\"p_indus_select_op_156\" value=\"156\">数码摄影</option>";
}
if(!$('#s_indus_select_op_147').val()){
mod +="<option id=\"p_indus_select_op_147\" value=\"147\">店标设计</option>";
}
if(!$('#s_indus_select_op_170').val()){
mod +="<option id=\"p_indus_select_op_170\" value=\"170\">视频制作</option>";
}
if(!$('#s_indus_select_op_172').val()){
mod +="<option id=\"p_indus_select_op_172\" value=\"172\">三维渲染</option>";
}
if(!$('#s_indus_select_op_33').val()){
mod +="<option id=\"p_indus_select_op_33\" value=\"33\">数据库操作</option>";
}
if(!$('#s_indus_select_op_35').val()){
mod +="<option id=\"p_indus_select_op_35\" value=\"35\">服务器系统</option>";
}
if(!$('#s_indus_select_op_29').val()){
mod +="<option id=\"p_indus_select_op_29\" value=\"29\">开源修改</option>";
}
if(!$('#s_indus_select_op_40').val()){
mod +="<option id=\"p_indus_select_op_40\" value=\"40\">其它</option>";
}
}
if(id=='121'){
if(!$('#s_indus_select_op_36').val()){
mod +="<option id=\"p_indus_select_op_36\" value=\"36\">程序开发</option>";
}
if(!$('#s_indus_select_op_37').val()){
mod +="<option id=\"p_indus_select_op_37\" value=\"37\">编写脚本</option>";
}
if(!$('#s_indus_select_op_38').val()){
mod +="<option id=\"p_indus_select_op_38\" value=\"38\">软件皮肤</option>";
}
if(!$('#s_indus_select_op_39').val()){
mod +="<option id=\"p_indus_select_op_39\" value=\"39\">插件开发</option>";
}
if(!$('#s_indus_select_op_122').val()){
mod +="<option id=\"p_indus_select_op_122\" value=\"122\">软件测试</option>";
}
if(!$('#s_indus_select_op_123').val()){
mod +="<option id=\"p_indus_select_op_123\" value=\"123\">游戏开发</option>";
}
if(!$('#s_indus_select_op_324').val()){
mod +="<option id=\"p_indus_select_op_324\" value=\"324\">软件汉化</option>";
}
if(!$('#s_indus_select_op_326').val()){
mod +="<option id=\"p_indus_select_op_326\" value=\"326\">软件美工</option>";
}
if(!$('#s_indus_select_op_327').val()){
mod +="<option id=\"p_indus_select_op_327\" value=\"327\">开发文档编写</option>";
}
if(!$('#s_indus_select_op_328').val()){
mod +="<option id=\"p_indus_select_op_328\" value=\"328\">功能完善</option>";
}
if(!$('#s_indus_select_op_325').val()){
mod +="<option id=\"p_indus_select_op_325\" value=\"325\">程序功能开发</option>";
}
}
if(id=='3'){
if(!$('#s_indus_select_op_41').val()){
mod +="<option id=\"p_indus_select_op_41\" value=\"41\">宣传软文</option>";
}
if(!$('#s_indus_select_op_42').val()){
mod +="<option id=\"p_indus_select_op_42\" value=\"42\">广告语写作</option>";
}
if(!$('#s_indus_select_op_43').val()){
mod +="<option id=\"p_indus_select_op_43\" value=\"43\">策划</option>";
}
if(!$('#s_indus_select_op_44').val()){
mod +="<option id=\"p_indus_select_op_44\" value=\"44\">写文章</option>";
}
if(!$('#s_indus_select_op_45').val()){
mod +="<option id=\"p_indus_select_op_45\" value=\"45\">编辑校对</option>";
}
if(!$('#s_indus_select_op_46').val()){
mod +="<option id=\"p_indus_select_op_46\" value=\"46\">写新闻</option>";
}
if(!$('#s_indus_select_op_47').val()){
mod +="<option id=\"p_indus_select_op_47\" value=\"47\">产品说明</option>";
}
if(!$('#s_indus_select_op_48').val()){
mod +="<option id=\"p_indus_select_op_48\" value=\"48\">剧本脚本</option>";
}
if(!$('#s_indus_select_op_49').val()){
mod +="<option id=\"p_indus_select_op_49\" value=\"49\">写书</option>";
}
if(!$('#s_indus_select_op_50').val()){
mod +="<option id=\"p_indus_select_op_50\" value=\"50\">撰写报告</option>";
}
if(!$('#s_indus_select_op_51').val()){
mod +="<option id=\"p_indus_select_op_51\" value=\"51\">应用文写作</option>";
}
if(!$('#s_indus_select_op_52').val()){
mod +="<option id=\"p_indus_select_op_52\" value=\"52\">演讲稿</option>";
}
if(!$('#s_indus_select_op_57').val()){
mod +="<option id=\"p_indus_select_op_57\" value=\"57\">其它</option>";
}
}
if(id=='211'){
if(!$('#s_indus_select_op_217').val()){
mod +="<option id=\"p_indus_select_op_217\" value=\"217\">问卷调查</option>";
}
if(!$('#s_indus_select_op_216').val()){
mod +="<option id=\"p_indus_select_op_216\" value=\"216\">意见建议</option>";
}
if(!$('#s_indus_select_op_215').val()){
mod +="<option id=\"p_indus_select_op_215\" value=\"215\">写评论</option>";
}
if(!$('#s_indus_select_op_214').val()){
mod +="<option id=\"p_indus_select_op_214\" value=\"214\">征集创意</option>";
}
if(!$('#s_indus_select_op_213').val()){
mod +="<option id=\"p_indus_select_op_213\" value=\"213\">收集金点子</option>";
}
if(!$('#s_indus_select_op_212').val()){
mod +="<option id=\"p_indus_select_op_212\" value=\"212\">策划</option>";
}
}
if(id=='234'){
if(!$('#s_indus_select_op_236').val()){
mod +="<option id=\"p_indus_select_op_236\" value=\"236\">法律咨询</option>";
}
if(!$('#s_indus_select_op_235').val()){
mod +="<option id=\"p_indus_select_op_235\" value=\"235\">聘请律师</option>";
}
if(!$('#s_indus_select_op_237').val()){
mod +="<option id=\"p_indus_select_op_237\" value=\"237\">写法律合同</option>";
}
if(!$('#s_indus_select_op_238').val()){
mod +="<option id=\"p_indus_select_op_238\" value=\"238\">写律师函</option>";
}
if(!$('#s_indus_select_op_239').val()){
mod +="<option id=\"p_indus_select_op_239\" value=\"239\">写诉讼状</option>";
}
}
if(id=='249'){
if(!$('#s_indus_select_op_96').val()){
mod +="<option id=\"p_indus_select_op_96\" value=\"96\">网游创意</option>";
}
if(!$('#s_indus_select_op_250').val()){
mod +="<option id=\"p_indus_select_op_250\" value=\"250\">手机游戏</option>";
}
if(!$('#s_indus_select_op_251').val()){
mod +="<option id=\"p_indus_select_op_251\" value=\"251\">游戏试玩</option>";
}
if(!$('#s_indus_select_op_252').val()){
mod +="<option id=\"p_indus_select_op_252\" value=\"252\">评测报告</option>";
}
if(!$('#s_indus_select_op_253').val()){
mod +="<option id=\"p_indus_select_op_253\" value=\"253\">版本设计</option>";
}
if(!$('#s_indus_select_op_254').val()){
mod +="<option id=\"p_indus_select_op_254\" value=\"254\">剧情策划</option>";
}
if(!$('#s_indus_select_op_255').val()){
mod +="<option id=\"p_indus_select_op_255\" value=\"255\">压力测试</option>";
}
if(!$('#s_indus_select_op_256').val()){
mod +="<option id=\"p_indus_select_op_256\" value=\"256\">代写攻略</option>";
}
if(!$('#s_indus_select_op_257').val()){
mod +="<option id=\"p_indus_select_op_257\" value=\"257\">活动策划</option>";
}
if(!$('#s_indus_select_op_258').val()){
mod +="<option id=\"p_indus_select_op_258\" value=\"258\">补丁制作</option>";
}
if(!$('#s_indus_select_op_259').val()){
mod +="<option id=\"p_indus_select_op_259\" value=\"259\">游戏视频</option>";
}
if(!$('#s_indus_select_op_332').val()){
mod +="<option id=\"p_indus_select_op_332\" value=\"332\">问卷调查</option>";
}
}
if(id=='125'){
if(!$('#s_indus_select_op_125').val()){
mod +="<option id=\"p_indus_select_op_125\" value=\"125\">包装设计</option>";
}
}
if(id=='126'){
if(!$('#s_indus_select_op_126').val()){
mod +="<option id=\"p_indus_select_op_126\" value=\"126\">封面设计</option>";
}
}
if(id=='128'){
if(!$('#s_indus_select_op_128').val()){
mod +="<option id=\"p_indus_select_op_128\" value=\"128\">图片编辑</option>";
}
}
if(id=='129'){
if(!$('#s_indus_select_op_129').val()){
mod +="<option id=\"p_indus_select_op_129\" value=\"129\">产品外观</option>";
}
}
if(id=='334'){
if(!$('#s_indus_select_op_150').val()){
mod +="<option id=\"p_indus_select_op_150\" value=\"150\">家装设计</option>";
}
}
if(id=='335'){
if(!$('#s_indus_select_op_151').val()){
mod +="<option id=\"p_indus_select_op_151\" value=\"151\">展会设计</option>";
}
if(!$('#s_indus_select_op_152').val()){
mod +="<option id=\"p_indus_select_op_152\" value=\"152\">办公装修</option>";
}
if(!$('#s_indus_select_op_153').val()){
mod +="<option id=\"p_indus_select_op_153\" value=\"153\">园林景观</option>";
}
if(!$('#s_indus_select_op_159').val()){
mod +="<option id=\"p_indus_select_op_159\" value=\"159\">店面装修</option>";
}
if(!$('#s_indus_select_op_336').val()){
mod +="<option id=\"p_indus_select_op_336\" value=\"336\">新房装修</option>";
}
if(!$('#s_indus_select_op_337').val()){
mod +="<option id=\"p_indus_select_op_337\" value=\"337\">二手房装修</option>";
}
if(!$('#s_indus_select_op_340').val()){
mod +="<option id=\"p_indus_select_op_340\" value=\"340\">庭院景观设计</option>";
}
if(!$('#s_indus_select_op_338').val()){
mod +="<option id=\"p_indus_select_op_338\" value=\"338\">风水咨询</option>";
}
if(!$('#s_indus_select_op_341').val()){
mod +="<option id=\"p_indus_select_op_341\" value=\"341\">办公商铺装修</option>";
}
if(!$('#s_indus_select_op_339').val()){
mod +="<option id=\"p_indus_select_op_339\" value=\"339\">装修监理</option>";
}
if(!$('#s_indus_select_op_342').val()){
mod +="<option id=\"p_indus_select_op_342\" value=\"342\">自建房设计</option>";
}
if(!$('#s_indus_select_op_343').val()){
mod +="<option id=\"p_indus_select_op_343\" value=\"343\">景观设计</option>";
}
if(!$('#s_indus_select_op_344').val()){
mod +="<option id=\"p_indus_select_op_344\" value=\"344\">3D模型设计</option>";
}
if(!$('#s_indus_select_op_158').val()){
mod +="<option id=\"p_indus_select_op_158\" value=\"158\">形象墙设计</option>";
}
if(!$('#s_indus_select_op_149').val()){
mod +="<option id=\"p_indus_select_op_149\" value=\"149\">房屋建筑设计</option>";
}
}
if(id=='160'){
if(!$('#s_indus_select_op_161').val()){
mod +="<option id=\"p_indus_select_op_161\" value=\"161\">宝宝起名</option>";
}
if(!$('#s_indus_select_op_162').val()){
mod +="<option id=\"p_indus_select_op_162\" value=\"162\">成人起名</option>";
}
if(!$('#s_indus_select_op_163').val()){
mod +="<option id=\"p_indus_select_op_163\" value=\"163\">公司起名</option>";
}
if(!$('#s_indus_select_op_164').val()){
mod +="<option id=\"p_indus_select_op_164\" value=\"164\">店铺起名</option>";
}
if(!$('#s_indus_select_op_165').val()){
mod +="<option id=\"p_indus_select_op_165\" value=\"165\">品牌起名</option>";
}
if(!$('#s_indus_select_op_166').val()){
mod +="<option id=\"p_indus_select_op_166\" value=\"166\">改名</option>";
}
}
if(id=='240'){
if(!$('#s_indus_select_op_177').val()){
mod +="<option id=\"p_indus_select_op_177\" value=\"177\">搜索引擎优化</option>";
}
if(!$('#s_indus_select_op_178').val()){
mod +="<option id=\"p_indus_select_op_178\" value=\"178\">论坛推广</option>";
}
if(!$('#s_indus_select_op_179').val()){
mod +="<option id=\"p_indus_select_op_179\" value=\"179\">QQ群推广</option>";
}
if(!$('#s_indus_select_op_180').val()){
mod +="<option id=\"p_indus_select_op_180\" value=\"180\">博客推广</option>";
}
if(!$('#s_indus_select_op_181').val()){
mod +="<option id=\"p_indus_select_op_181\" value=\"181\">推广注册</option>";
}
if(!$('#s_indus_select_op_241').val()){
mod +="<option id=\"p_indus_select_op_241\" value=\"241\">招聘</option>";
}
if(!$('#s_indus_select_op_242').val()){
mod +="<option id=\"p_indus_select_op_242\" value=\"242\">求职</option>";
}
if(!$('#s_indus_select_op_243').val()){
mod +="<option id=\"p_indus_select_op_243\" value=\"243\">寻人</option>";
}
if(!$('#s_indus_select_op_245').val()){
mod +="<option id=\"p_indus_select_op_245\" value=\"245\">找生产商</option>";
}
if(!$('#s_indus_select_op_246').val()){
mod +="<option id=\"p_indus_select_op_246\" value=\"246\">找客户</option>";
}
if(!$('#s_indus_select_op_247').val()){
mod +="<option id=\"p_indus_select_op_247\" value=\"247\">找供应商</option>";
}
if(!$('#s_indus_select_op_248').val()){
mod +="<option id=\"p_indus_select_op_248\" value=\"248\">找人脉</option>";
}
if(!$('#s_indus_select_op_334').val()){
mod +="<option id=\"p_indus_select_op_334\" value=\"334\">简历设计</option>";
}
}
if(id=='144'){
if(!$('#s_indus_select_op_405').val()){
mod +="<option id=\"p_indus_select_op_405\" value=\"405\">newNode2</option>";
}
}
if(id=='192'){
if(!$('#s_indus_select_op_193').val()){
mod +="<option id=\"p_indus_select_op_193\" value=\"193\">市场调查</option>";
}
if(!$('#s_indus_select_op_194').val()){
mod +="<option id=\"p_indus_select_op_194\" value=\"194\">心理咨询</option>";
}
if(!$('#s_indus_select_op_195').val()){
mod +="<option id=\"p_indus_select_op_195\" value=\"195\">移民咨询</option>";
}
if(!$('#s_indus_select_op_196').val()){
mod +="<option id=\"p_indus_select_op_196\" value=\"196\">理财咨询</option>";
}
if(!$('#s_indus_select_op_197').val()){
mod +="<option id=\"p_indus_select_op_197\" value=\"197\">帮我投票</option>";
}
if(!$('#s_indus_select_op_198').val()){
mod +="<option id=\"p_indus_select_op_198\" value=\"198\">跑腿排队</option>";
}
if(!$('#s_indus_select_op_199').val()){
mod +="<option id=\"p_indus_select_op_199\" value=\"199\">家政服务</option>";
}
if(!$('#s_indus_select_op_200').val()){
mod +="<option id=\"p_indus_select_op_200\" value=\"200\">数据导入</option>";
}
}
if(id=='243'){
if(!$('#s_indus_select_op_244').val()){
mod +="<option id=\"p_indus_select_op_244\" value=\"244\">找对象</option>";
}
}
if(id=='290'){
if(!$('#s_indus_select_op_290').val()){
mod +="<option id=\"p_indus_select_op_290\" value=\"290\">新增加哈哈哈</option>";
}
}
if(id=='377'){
if(!$('#s_indus_select_op_378').val()){
mod +="<option id=\"p_indus_select_op_378\" value=\"378\">二次开发01</option>";
}
if(!$('#s_indus_select_op_379').val()){
mod +="<option id=\"p_indus_select_op_379\" value=\"379\">二次开发02</option>";
}
}
if(id=='409'){
if(!$('#s_indus_select_op_411').val()){
mod +="<option id=\"p_indus_select_op_411\" value=\"411\">1111</option>";
}
}
if(id=='426'){
if(!$('#s_indus_select_op_425').val()){
mod +="<option id=\"p_indus_select_op_425\" value=\"425\">高的水果的三个</option>";
}
if(!$('#s_indus_select_op_427').val()){
mod +="<option id=\"p_indus_select_op_427\" value=\"427\">方式国防生</option>";
}
}
if(id=='357'){
if(!$('#s_indus_select_op_439').val()){
mod +="<option id=\"p_indus_select_op_439\" value=\"439\">1111</option>";
}
if(!$('#s_indus_select_op_358').val()){
mod +="<option id=\"p_indus_select_op_358\" value=\"358\">写剧本</option>";
}
if(!$('#s_indus_select_op_359').val()){
mod +="<option id=\"p_indus_select_op_359\" value=\"359\">影视制作</option>";
}
if(!$('#s_indus_select_op_360').val()){
mod +="<option id=\"p_indus_select_op_360\" value=\"360\">广告配音</option>";
}
if(!$('#s_indus_select_op_361').val()){
mod +="<option id=\"p_indus_select_op_361\" value=\"361\">影视配音</option>";
}
if(!$('#s_indus_select_op_362').val()){
mod +="<option id=\"p_indus_select_op_362\" value=\"362\">动画配音</option>";
}
if(!$('#s_indus_select_op_363').val()){
mod +="<option id=\"p_indus_select_op_363\" value=\"363\">彩铃配音</option>";
}
if(!$('#s_indus_select_op_364').val()){
mod +="<option id=\"p_indus_select_op_364\" value=\"364\">方言配音</option>";
}
if(!$('#s_indus_select_op_365').val()){
mod +="<option id=\"p_indus_select_op_365\" value=\"365\">外语配音</option>";
}
if(!$('#s_indus_select_op_366').val()){
mod +="<option id=\"p_indus_select_op_366\" value=\"366\">创意配音</option>";
}
if(!$('#s_indus_select_op_367').val()){
mod +="<option id=\"p_indus_select_op_367\" value=\"367\">歌词创作</option>";
}
if(!$('#s_indus_select_op_368').val()){
mod +="<option id=\"p_indus_select_op_368\" value=\"368\">歌词谱曲</option>";
}
}
if(id=='218'){
if(!$('#s_indus_select_op_222').val()){
mod +="<option id=\"p_indus_select_op_222\" value=\"222\">Android插件</option>";
}
if(!$('#s_indus_select_op_225').val()){
mod +="<option id=\"p_indus_select_op_225\" value=\"225\">Symbian SDK插件</option>";
}
if(!$('#s_indus_select_op_223').val()){
mod +="<option id=\"p_indus_select_op_223\" value=\"223\">iOS插件</option>";
}
if(!$('#s_indus_select_op_219').val()){
mod +="<option id=\"p_indus_select_op_219\" value=\"219\">天翼插件</option>";
}
if(!$('#s_indus_select_op_227').val()){
mod +="<option id=\"p_indus_select_op_227\" value=\"227\">Windows mobile插件</option>";
}
if(!$('#s_indus_select_op_228').val()){
mod +="<option id=\"p_indus_select_op_228\" value=\"228\">黑莓插件</option>";
}
if(!$('#s_indus_select_op_230').val()){
mod +="<option id=\"p_indus_select_op_230\" value=\"230\">Amazon kindle插件</option>";
}
if(!$('#s_indus_select_op_231').val()){
mod +="<option id=\"p_indus_select_op_231\" value=\"231\">手机游戏开发</option>";
}
if(!$('#s_indus_select_op_229').val()){
mod +="<option id=\"p_indus_select_op_229\" value=\"229\">Palm插件</option>";
}
if(!$('#s_indus_select_op_232').val()){
mod +="<option id=\"p_indus_select_op_232\" value=\"232\">手机应用创意</option>";
}
if(!$('#s_indus_select_op_233').val()){
mod +="<option id=\"p_indus_select_op_233\" value=\"233\">手机应用汉化</option>";
}
if(!$('#s_indus_select_op_226').val()){
mod +="<option id=\"p_indus_select_op_226\" value=\"226\">PalmOS插件</option>";
}
}
if(id=='201'){
if(!$('#s_indus_select_op_203').val()){
mod +="<option id=\"p_indus_select_op_203\" value=\"203\">爱情表白</option>";
}
if(!$('#s_indus_select_op_202').val()){
mod +="<option id=\"p_indus_select_op_202\" value=\"202\">生日祝福</option>";
}
if(!$('#s_indus_select_op_204').val()){
mod +="<option id=\"p_indus_select_op_204\" value=\"204\">圣诞祝福</option>";
}
if(!$('#s_indus_select_op_205').val()){
mod +="<option id=\"p_indus_select_op_205\" value=\"205\">新年祝福</option>";
}
if(!$('#s_indus_select_op_209').val()){
mod +="<option id=\"p_indus_select_op_209\" value=\"209\">祝福喜得贵子</option>";
}
if(!$('#s_indus_select_op_210').val()){
mod +="<option id=\"p_indus_select_op_210\" value=\"210\">祝福乔迁新居</option>";
}
if(!$('#s_indus_select_op_208').val()){
mod +="<option id=\"p_indus_select_op_208\" value=\"208\">感恩回馈</option>";
}
if(!$('#s_indus_select_op_207').val()){
mod +="<option id=\"p_indus_select_op_207\" value=\"207\">纪念日祝福</option>";
}
if(!$('#s_indus_select_op_206').val()){
mod +="<option id=\"p_indus_select_op_206\" value=\"206\">道歉短信</option>";
}
if(!$('#s_indus_select_op_331').val()){
mod +="<option id=\"p_indus_select_op_331\" value=\"331\">彩信</option>";
}
}
if(id=='350'){
if(!$('#s_indus_select_op_351').val()){
mod +="<option id=\"p_indus_select_op_351\" value=\"351\">艺术照处理</option>";
}
if(!$('#s_indus_select_op_352').val()){
mod +="<option id=\"p_indus_select_op_352\" value=\"352\">照片变卡通</option>";
}
if(!$('#s_indus_select_op_353').val()){
mod +="<option id=\"p_indus_select_op_353\" value=\"353\">电子相册</option>";
}
if(!$('#s_indus_select_op_354').val()){
mod +="<option id=\"p_indus_select_op_354\" value=\"354\">照片美化</option>";
}
if(!$('#s_indus_select_op_355').val()){
mod +="<option id=\"p_indus_select_op_355\" value=\"355\">婚纱照美化</option>";
}
if(!$('#s_indus_select_op_356').val()){
mod +="<option id=\"p_indus_select_op_356\" value=\"356\">图片编辑</option>";
}
}
if(id=='0'){
if(!$('#s_indus_select_op_441').val()){
mod +="<option id=\"p_indus_select_op_441\" value=\"441\">品牌设计</option>";
}
if(!$('#s_indus_select_op_2').val()){
mod +="<option id=\"p_indus_select_op_2\" value=\"2\">网站开发</option>";
}
if(!$('#s_indus_select_op_201').val()){
mod +="<option id=\"p_indus_select_op_201\" value=\"201\">创意祝福</option>";
}
if(!$('#s_indus_select_op_249').val()){
mod +="<option id=\"p_indus_select_op_249\" value=\"249\">网游服务</option>";
}
if(!$('#s_indus_select_op_3').val()){
mod +="<option id=\"p_indus_select_op_3\" value=\"3\">文案写作</option>";
}
if(!$('#s_indus_select_op_335').val()){
mod +="<option id=\"p_indus_select_op_335\" value=\"335\">建筑/装修</option>";
}
if(!$('#s_indus_select_op_211').val()){
mod +="<option id=\"p_indus_select_op_211\" value=\"211\">头脑风暴</option>";
}
if(!$('#s_indus_select_op_350').val()){
mod +="<option id=\"p_indus_select_op_350\" value=\"350\">照片美化/编辑</option>";
}
if(!$('#s_indus_select_op_234').val()){
mod +="<option id=\"p_indus_select_op_234\" value=\"234\">法律服务</option>";
}
if(!$('#s_indus_select_op_160').val()){
mod +="<option id=\"p_indus_select_op_160\" value=\"160\">起名取名</option>";
}
if(!$('#s_indus_select_op_357').val()){
mod +="<option id=\"p_indus_select_op_357\" value=\"357\">影视/配音/歌词</option>";
}
if(!$('#s_indus_select_op_192').val()){
mod +="<option id=\"p_indus_select_op_192\" value=\"192\">生活服务</option>";
}
if(!$('#s_indus_select_op_218').val()){
mod +="<option id=\"p_indus_select_op_218\" value=\"218\">移动应用</option>";
}
if(!$('#s_indus_select_op_240').val()){
mod +="<option id=\"p_indus_select_op_240\" value=\"240\">招聘找人</option>";
}
if(!$('#s_indus_select_op_121').val()){
mod +="<option id=\"p_indus_select_op_121\" value=\"121\">软件开发</option>";
}
}
if(id=='127'){
if(!$('#s_indus_select_op_127').val()){
mod +="<option id=\"p_indus_select_op_127\" value=\"127\">卡片设计</option>";
}
}
$('#p_indus_select').html(mod);
}

function moveitems(){
vs = $('#s_indus_select').val()+'';
vs = vs.split(",");
var mod = '';
for(v=0;v<vs.length;v++){

if(String(vs[v]) == "null"){
continue;
}
mod+="<option value="+vs[v]+" id=\"p_indus_select_op_"+vs[v]+"\">"+$('#s_indus_select_op_'+vs[v]).html()+"</option>";
$('#s_indus_select_op_'+vs[v]).remove();
};
if(mod!='')
$('#p_indus_select').append(mod);
}
$(function(){
if($("#hdn_indus_id").val()!=''){
p_indus_add($("#hdn_indus_id").val());
}
})
function additems(){
vs = $('#p_indus_select').val()+'';
vs = vs.split(",");
var mod = '';
for(v=0;v<vs.length;v++){
if(String(vs[v]) == "null"){
continue;
}
mod+="<option value="+vs[v]+" id=\"s_indus_select_op_"+vs[v]+"\" selected=\"selected\">"+$('#p_indus_select_op_'+vs[v]).html()+"</option>";
$('#p_indus_select_op_'+vs[v]).remove();
};
if(mod!='')
$('#s_indus_select').append(mod);
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