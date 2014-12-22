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
<style type="text/css">
.jia {background: url(/public/tpl/img/plus.gif)}
.jian {background: url(/public/tpl/img/minus.gif) }
</style>
<div class="page_title">
    	<h1>行业管理</h1>
        <div class="tool">
            <a href="index.php?r=task/industry" class="here">行业列表</a>
            <a href="index.php?r=task/industry_edit">添加行业</a> 
            <a href="index.php?r=task/union_industry" >行业合并</a>
</div>
</div>

<div class="box search p_relative">
    	<div class="title"><h2>搜索</h2></div>
        <div class="detail" id="detail">
           
<form action="index.php?r=task/industry" method="POST">
<table cellspacing="0" cellpadding="0">
<tbody>
	<tr>
	<th>行业名称*</th>
	<td>
	<input type="text" value="<?php if(isset($condition)){echo $condition['indus_name'];}?>" name="indus_name" class="txt"/>
	*支持模糊查询
	</td>
	<td></td> 
	</tr>

	<tr >
	<th>结果排序</th>
	<td>
	<select name="order">
	<option value="indus_id"<?php if(isset($condition)&&$condition['order']=='indus_id'){echo 'selected';}?>>
	默认排序</option>
	<option value="on_time"<?php if(isset($condition)&&$condition['order']=='on_time'){echo 'selected';}?>>
	添加时间</option>
	</select>
	<select name="desc">
	<option value="desc"<?php if(isset($condition)&&$condition['desc']=='desc'){echo 'selected';}?>>
	递减</option>
	<option value="asc"<?php if(isset($condition)&&$condition['desc']=='asc'){echo 'selected';}?>>
	递增</option>
	</select>
	<button class="pill" type="submit" value='industry' name="submit">
	<span class="icon magnifier">&nbsp;</span>搜索</button>
	</td>
	<td colspan="3">&nbsp;</td>
	</tr>
</tbody>
</table>
</form>

        </div>
    </div>
    <!--搜索结束-->
<div class="box list">
    	<div class="title"><h2>行业列表</h2></div>
        <div class="detail">
<form action="index.php?r=task/edit" id='frm_list' method="post">
<table cellpadding="0" cellspacing="0">
	<tbody>
		<tr><!--
		<th width="7%">显示顺序</th>-->
		<th width="30%">行业名称</th>
		<th width="10%">是否推荐</th>
		<th width="17%"> 修改时间</th>
		<th width="13%">操作</th>
		</tr>

<?php
for($i=0;$i<count($info);$i++){
?>
		<tbody id="indus_item_l_<?php echo $info[$i]['indus_id'];?>" style="display:<?php if($info[$i]['indus_pid']!=0){echo 'none';}?>;" class="tr<?php echo $info[$i]['indus_pid'];?>">
			<tr class="item" align="center">
			<!--
			<td class="td28" align="left">
			<input type="text" size=3 class="txt" name="indus_item_listorder_2" value="12" onblur="edit_listorder(2,this.value)"></td>-->
			<td align="left">
			<?php if($info[$i]['indus_pid']==0){?>
			<span class="jia" 
			onclick="if($(this).attr('class')=='jia'){
			showtr(<?php echo $info[$i]['indus_id'];?>);
			$(this).attr('class','jian');
			}else{showtr(<?php echo $info[$i]['indus_id'];?>);
			$(this).attr('class','jia')}" >&nbsp;&nbsp;&nbsp;&nbsp;</span><?php }else{?>
			&nbsp;&nbsp;&nbsp; |-<span class="jian">&nbsp;&nbsp;&nbsp;&nbsp;</span>
			<?php }?>
			<span id="indus_item_span_<?php echo $info[$i]['indus_id'];?>" style="font-weight:900;font-size:16px;">
			<input type="text" class="txt" value="<?php echo $info[$i]['indus_name'];?>" name="name[<?php echo $info[$i]['indus_id'];?>]" >
			</span>
			<?php if($info[$i]['indus_pid']==0){?>
			<a href="javascript:;" style="color:#ff6600" onclick="addchild(<?php echo $info[$i]['indus_id'];?>,'')">
			增加子类</a>
			<?php }?>
			</td>
			<td align="left"><?php if($info[$i]['is_recommend']){echo '是';}else{echo '否';}?></td>
			<td align="left"><?php echo date('Y-m-d',$info[$i]['on_time']);?></td>
			<td align="left">
			<a href="index.php?r=task/industry_edit&id=<?php echo $info[$i]['indus_id'];?>" class="button dbl_target">
			<span class="pen icon"></span>编辑</a>
			<a href="index.php?r=task/del&id=<?php echo $info[$i]['indus_id'];?>"  onclick="return cdel(this);" class="button">
			<span class="trash icon"></span>删除</a>
			</td>
			</tr>
		</tbody>
<?php }?>
		<tr>
		<td>&nbsp;</td>
		<td colspan="6">
		<div class="clearfix">
		<div class="clearfix">	
		<a href="index.php?r=task/union_industry"   class="button pill negative">
		<span class="icon cog">&nbsp;</span>行业合并</a>
		<button  name="submit" type="submit" value='industry' class="positive primary pill button" /><span class="check icon"></span>提交</button>
		</div>
		</div>
		</td>
		</tr>
	</tbody>
</table>
</form>
        </div>       
    </div>
<script type="text/javascript">
      	/*
var arr_editstatusarr = Array();
      	function edititemname(eid,text){
    		if(arr_editstatusarr['eid']){
    			return ;
    		}
    		var mod = '<input type="text" class="txt" name="edit_indus_name_arr['+eid+']" value="'+text+'">';
    		$('#indus_item_span_'+eid).html(mod);
    		arr_editstatusarr['eid']=1;
    	}
*/
    	
    	function edit_listorder(iid,v){
    		$.get('index.php?do=task&ac=editlistorder',{iid:iid,val:v});
    	}
    	
    	var newindus_c = 0;
    	function addchild(pid,ext){
    		newindus_c++;
    		if(ext=='')
    		{ext = '|';}
    		if(ext!=' ')
    		{ext = '&nbsp;&nbsp;&nbsp;'+ext+'---';}
    		var mod = '<tr class="item" id="newindus_c_'+newindus_c+'">';
    		  	//mod+='<td class="td28">'+'<input type=text size=3 class="txt" name="add_indus_name_listarr['+pid+']['+newindus_c+']" size=3>';+'</td>';
    		  	mod+='<td>'+ext;
    			mod+='<input type=text class="txt" name="addtr['+pid+']">';
    			mod+='</td>';
    		    mod+='<td>否</td>';
    	 
    		    mod+='<td>&nbsp;</td>';
    			mod+='<td>';
    			mod+='<a href="javascript:;" class="button" onclick="$(\'#newindus_c_'+newindus_c+'\').remove()">';
    			mod+='删除';
    			mod+='</a>';
    			mod+='</td>';
    		  	mod+='</tr>	';
    			
    			$('#indus_item_l_'+pid).append(mod); 
    		
    	}

function showtr(id){
	$('.tr'+id).toggle();
}
             	function showids_441(op){
    		if(op=='show'){
    			    			$('#indus_item_l_8').show();
    			    			$('#indus_item_l_9').show();
    			    			$('#indus_item_l_10').show();
    			    			$('#indus_item_l_11').show();
    			    			$('#indus_item_l_12').show();
    			    			$('#indus_item_l_13').show();
    			    			$('#indus_item_l_14').show();
    			    			$('#indus_item_l_16').show();
    			    			$('#indus_item_l_27').show();
    			    			$('#indus_item_l_144').show();
    			    			$('#indus_item_l_145').show();
    			    			$('#indus_item_l_348').show();
    			    			$('#indus_item_l_349').show();
    			    			$('#indus_item_l_370').show();
    			    			$('#indus_item_l_376').show();
    			    			$('#indus_item_l_130').show();
    			    			$('#indus_item_l_131').show();
    			    			$('#indus_item_l_132').show();
    			    			$('#indus_item_l_134').show();
    			    			$('#indus_item_l_135').show();
    			    			$('#indus_item_l_136').show();
    			    			$('#indus_item_l_137').show();
    			    			$('#indus_item_l_140').show();
    			    			$('#indus_item_l_133').show();
    			    			$('#indus_item_l_263').show();
    			    			$('#indus_item_l_138').show();
    			    		}
    		else{
    			    			$('#indus_item_l_8').hide();
    			    			$('#indus_item_l_9').hide();
    			    			$('#indus_item_l_10').hide();
    			    			$('#indus_item_l_11').hide();
    			    			$('#indus_item_l_12').hide();
    			    			$('#indus_item_l_13').hide();
    			    			$('#indus_item_l_14').hide();
    			    			$('#indus_item_l_16').hide();
    			    			$('#indus_item_l_27').hide();
    			    			$('#indus_item_l_144').hide();
    			    			$('#indus_item_l_145').hide();
    			    			$('#indus_item_l_348').hide();
    			    			$('#indus_item_l_349').hide();
    			    			$('#indus_item_l_370').hide();
    			    			$('#indus_item_l_376').hide();
    			    			$('#indus_item_l_130').hide();
    			    			$('#indus_item_l_131').hide();
    			    			$('#indus_item_l_132').hide();
    			    			$('#indus_item_l_134').hide();
    			    			$('#indus_item_l_135').hide();
    			    			$('#indus_item_l_136').hide();
    			    			$('#indus_item_l_137').hide();
    			    			$('#indus_item_l_140').hide();
    			    			$('#indus_item_l_133').hide();
    			    			$('#indus_item_l_263').hide();
    			    			$('#indus_item_l_138').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_2(op){
    		if(op=='show'){
    			    			$('#indus_item_l_28').show();
    			    			$('#indus_item_l_30').show();
    			    			$('#indus_item_l_31').show();
    			    			$('#indus_item_l_32').show();
    			    			$('#indus_item_l_34').show();
    			    			$('#indus_item_l_408').show();
    			    			$('#indus_item_l_169').show();
    			    			$('#indus_item_l_148').show();
    			    			$('#indus_item_l_154').show();
    			    			$('#indus_item_l_155').show();
    			    			$('#indus_item_l_156').show();
    			    			$('#indus_item_l_147').show();
    			    			$('#indus_item_l_170').show();
    			    			$('#indus_item_l_172').show();
    			    			$('#indus_item_l_33').show();
    			    			$('#indus_item_l_35').show();
    			    			$('#indus_item_l_29').show();
    			    			$('#indus_item_l_40').show();
    			    		}
    		else{
    			    			$('#indus_item_l_28').hide();
    			    			$('#indus_item_l_30').hide();
    			    			$('#indus_item_l_31').hide();
    			    			$('#indus_item_l_32').hide();
    			    			$('#indus_item_l_34').hide();
    			    			$('#indus_item_l_408').hide();
    			    			$('#indus_item_l_169').hide();
    			    			$('#indus_item_l_148').hide();
    			    			$('#indus_item_l_154').hide();
    			    			$('#indus_item_l_155').hide();
    			    			$('#indus_item_l_156').hide();
    			    			$('#indus_item_l_147').hide();
    			    			$('#indus_item_l_170').hide();
    			    			$('#indus_item_l_172').hide();
    			    			$('#indus_item_l_33').hide();
    			    			$('#indus_item_l_35').hide();
    			    			$('#indus_item_l_29').hide();
    			    			$('#indus_item_l_40').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_121(op){
    		if(op=='show'){
    			    			$('#indus_item_l_36').show();
    			    			$('#indus_item_l_37').show();
    			    			$('#indus_item_l_38').show();
    			    			$('#indus_item_l_39').show();
    			    			$('#indus_item_l_122').show();
    			    			$('#indus_item_l_123').show();
    			    			$('#indus_item_l_324').show();
    			    			$('#indus_item_l_326').show();
    			    			$('#indus_item_l_327').show();
    			    			$('#indus_item_l_328').show();
    			    			$('#indus_item_l_325').show();
    			    		}
    		else{
    			    			$('#indus_item_l_36').hide();
    			    			$('#indus_item_l_37').hide();
    			    			$('#indus_item_l_38').hide();
    			    			$('#indus_item_l_39').hide();
    			    			$('#indus_item_l_122').hide();
    			    			$('#indus_item_l_123').hide();
    			    			$('#indus_item_l_324').hide();
    			    			$('#indus_item_l_326').hide();
    			    			$('#indus_item_l_327').hide();
    			    			$('#indus_item_l_328').hide();
    			    			$('#indus_item_l_325').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_3(op){
    		if(op=='show'){
    			    			$('#indus_item_l_41').show();
    			    			$('#indus_item_l_42').show();
    			    			$('#indus_item_l_43').show();
    			    			$('#indus_item_l_44').show();
    			    			$('#indus_item_l_45').show();
    			    			$('#indus_item_l_46').show();
    			    			$('#indus_item_l_47').show();
    			    			$('#indus_item_l_48').show();
    			    			$('#indus_item_l_49').show();
    			    			$('#indus_item_l_50').show();
    			    			$('#indus_item_l_51').show();
    			    			$('#indus_item_l_52').show();
    			    			$('#indus_item_l_57').show();
    			    		}
    		else{
    			    			$('#indus_item_l_41').hide();
    			    			$('#indus_item_l_42').hide();
    			    			$('#indus_item_l_43').hide();
    			    			$('#indus_item_l_44').hide();
    			    			$('#indus_item_l_45').hide();
    			    			$('#indus_item_l_46').hide();
    			    			$('#indus_item_l_47').hide();
    			    			$('#indus_item_l_48').hide();
    			    			$('#indus_item_l_49').hide();
    			    			$('#indus_item_l_50').hide();
    			    			$('#indus_item_l_51').hide();
    			    			$('#indus_item_l_52').hide();
    			    			$('#indus_item_l_57').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_211(op){
    		if(op=='show'){
    			    			$('#indus_item_l_217').show();
    			    			$('#indus_item_l_216').show();
    			    			$('#indus_item_l_215').show();
    			    			$('#indus_item_l_214').show();
    			    			$('#indus_item_l_213').show();
    			    			$('#indus_item_l_212').show();
    			    		}
    		else{
    			    			$('#indus_item_l_217').hide();
    			    			$('#indus_item_l_216').hide();
    			    			$('#indus_item_l_215').hide();
    			    			$('#indus_item_l_214').hide();
    			    			$('#indus_item_l_213').hide();
    			    			$('#indus_item_l_212').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_234(op){
    		if(op=='show'){
    			    			$('#indus_item_l_236').show();
    			    			$('#indus_item_l_235').show();
    			    			$('#indus_item_l_237').show();
    			    			$('#indus_item_l_238').show();
    			    			$('#indus_item_l_239').show();
    			    		}
    		else{
    			    			$('#indus_item_l_236').hide();
    			    			$('#indus_item_l_235').hide();
    			    			$('#indus_item_l_237').hide();
    			    			$('#indus_item_l_238').hide();
    			    			$('#indus_item_l_239').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_249(op){
    		if(op=='show'){
    			    			$('#indus_item_l_96').show();
    			    			$('#indus_item_l_250').show();
    			    			$('#indus_item_l_251').show();
    			    			$('#indus_item_l_252').show();
    			    			$('#indus_item_l_253').show();
    			    			$('#indus_item_l_254').show();
    			    			$('#indus_item_l_255').show();
    			    			$('#indus_item_l_256').show();
    			    			$('#indus_item_l_257').show();
    			    			$('#indus_item_l_258').show();
    			    			$('#indus_item_l_259').show();
    			    			$('#indus_item_l_332').show();
    			    		}
    		else{
    			    			$('#indus_item_l_96').hide();
    			    			$('#indus_item_l_250').hide();
    			    			$('#indus_item_l_251').hide();
    			    			$('#indus_item_l_252').hide();
    			    			$('#indus_item_l_253').hide();
    			    			$('#indus_item_l_254').hide();
    			    			$('#indus_item_l_255').hide();
    			    			$('#indus_item_l_256').hide();
    			    			$('#indus_item_l_257').hide();
    			    			$('#indus_item_l_258').hide();
    			    			$('#indus_item_l_259').hide();
    			    			$('#indus_item_l_332').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_125(op){
    		if(op=='show'){
    			    			$('#indus_item_l_125').show();
    			    		}
    		else{
    			    			$('#indus_item_l_125').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_126(op){
    		if(op=='show'){
    			    			$('#indus_item_l_126').show();
    			    		}
    		else{
    			    			$('#indus_item_l_126').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_128(op){
    		if(op=='show'){
    			    			$('#indus_item_l_128').show();
    			    		}
    		else{
    			    			$('#indus_item_l_128').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_129(op){
    		if(op=='show'){
    			    			$('#indus_item_l_129').show();
    			    		}
    		else{
    			    			$('#indus_item_l_129').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_334(op){
    		if(op=='show'){
    			    			$('#indus_item_l_150').show();
    			    		}
    		else{
    			    			$('#indus_item_l_150').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_335(op){
    		if(op=='show'){
    			    			$('#indus_item_l_151').show();
    			    			$('#indus_item_l_152').show();
    			    			$('#indus_item_l_153').show();
    			    			$('#indus_item_l_159').show();
    			    			$('#indus_item_l_336').show();
    			    			$('#indus_item_l_337').show();
    			    			$('#indus_item_l_340').show();
    			    			$('#indus_item_l_338').show();
    			    			$('#indus_item_l_341').show();
    			    			$('#indus_item_l_339').show();
    			    			$('#indus_item_l_342').show();
    			    			$('#indus_item_l_343').show();
    			    			$('#indus_item_l_344').show();
    			    			$('#indus_item_l_158').show();
    			    			$('#indus_item_l_149').show();
    			    		}
    		else{
    			    			$('#indus_item_l_151').hide();
    			    			$('#indus_item_l_152').hide();
    			    			$('#indus_item_l_153').hide();
    			    			$('#indus_item_l_159').hide();
    			    			$('#indus_item_l_336').hide();
    			    			$('#indus_item_l_337').hide();
    			    			$('#indus_item_l_340').hide();
    			    			$('#indus_item_l_338').hide();
    			    			$('#indus_item_l_341').hide();
    			    			$('#indus_item_l_339').hide();
    			    			$('#indus_item_l_342').hide();
    			    			$('#indus_item_l_343').hide();
    			    			$('#indus_item_l_344').hide();
    			    			$('#indus_item_l_158').hide();
    			    			$('#indus_item_l_149').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_160(op){
    		if(op=='show'){
    			    			$('#indus_item_l_161').show();
    			    			$('#indus_item_l_162').show();
    			    			$('#indus_item_l_163').show();
    			    			$('#indus_item_l_164').show();
    			    			$('#indus_item_l_165').show();
    			    			$('#indus_item_l_166').show();
    			    		}
    		else{
    			    			$('#indus_item_l_161').hide();
    			    			$('#indus_item_l_162').hide();
    			    			$('#indus_item_l_163').hide();
    			    			$('#indus_item_l_164').hide();
    			    			$('#indus_item_l_165').hide();
    			    			$('#indus_item_l_166').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_240(op){
    		if(op=='show'){
    			    			$('#indus_item_l_177').show();
    			    			$('#indus_item_l_178').show();
    			    			$('#indus_item_l_179').show();
    			    			$('#indus_item_l_180').show();
    			    			$('#indus_item_l_181').show();
    			    			$('#indus_item_l_241').show();
    			    			$('#indus_item_l_242').show();
    			    			$('#indus_item_l_243').show();
    			    			$('#indus_item_l_245').show();
    			    			$('#indus_item_l_246').show();
    			    			$('#indus_item_l_247').show();
    			    			$('#indus_item_l_248').show();
    			    			$('#indus_item_l_334').show();
    			    		}
    		else{
    			    			$('#indus_item_l_177').hide();
    			    			$('#indus_item_l_178').hide();
    			    			$('#indus_item_l_179').hide();
    			    			$('#indus_item_l_180').hide();
    			    			$('#indus_item_l_181').hide();
    			    			$('#indus_item_l_241').hide();
    			    			$('#indus_item_l_242').hide();
    			    			$('#indus_item_l_243').hide();
    			    			$('#indus_item_l_245').hide();
    			    			$('#indus_item_l_246').hide();
    			    			$('#indus_item_l_247').hide();
    			    			$('#indus_item_l_248').hide();
    			    			$('#indus_item_l_334').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_144(op){
    		if(op=='show'){
    			    			$('#indus_item_l_405').show();
    			    		}
    		else{
    			    			$('#indus_item_l_405').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_192(op){
    		if(op=='show'){
    			    			$('#indus_item_l_193').show();
    			    			$('#indus_item_l_194').show();
    			    			$('#indus_item_l_195').show();
    			    			$('#indus_item_l_196').show();
    			    			$('#indus_item_l_197').show();
    			    			$('#indus_item_l_198').show();
    			    			$('#indus_item_l_199').show();
    			    			$('#indus_item_l_200').show();
    			    		}
    		else{
    			    			$('#indus_item_l_193').hide();
    			    			$('#indus_item_l_194').hide();
    			    			$('#indus_item_l_195').hide();
    			    			$('#indus_item_l_196').hide();
    			    			$('#indus_item_l_197').hide();
    			    			$('#indus_item_l_198').hide();
    			    			$('#indus_item_l_199').hide();
    			    			$('#indus_item_l_200').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_243(op){
    		if(op=='show'){
    			    			$('#indus_item_l_244').show();
    			    		}
    		else{
    			    			$('#indus_item_l_244').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_290(op){
    		if(op=='show'){
    			    			$('#indus_item_l_290').show();
    			    		}
    		else{
    			    			$('#indus_item_l_290').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_377(op){
    		if(op=='show'){
    			    			$('#indus_item_l_378').show();
    			    			$('#indus_item_l_379').show();
    			    		}
    		else{
    			    			$('#indus_item_l_378').hide();
    			    			$('#indus_item_l_379').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_409(op){
    		if(op=='show'){
    			    			$('#indus_item_l_411').show();
    			    		}
    		else{
    			    			$('#indus_item_l_411').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_426(op){
    		if(op=='show'){
    			    			$('#indus_item_l_425').show();
    			    			$('#indus_item_l_427').show();
    			    		}
    		else{
    			    			$('#indus_item_l_425').hide();
    			    			$('#indus_item_l_427').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_357(op){
    		if(op=='show'){
    			    			$('#indus_item_l_439').show();
    			    			$('#indus_item_l_358').show();
    			    			$('#indus_item_l_359').show();
    			    			$('#indus_item_l_360').show();
    			    			$('#indus_item_l_361').show();
    			    			$('#indus_item_l_362').show();
    			    			$('#indus_item_l_363').show();
    			    			$('#indus_item_l_364').show();
    			    			$('#indus_item_l_365').show();
    			    			$('#indus_item_l_366').show();
    			    			$('#indus_item_l_367').show();
    			    			$('#indus_item_l_368').show();
    			    		}
    		else{
    			    			$('#indus_item_l_439').hide();
    			    			$('#indus_item_l_358').hide();
    			    			$('#indus_item_l_359').hide();
    			    			$('#indus_item_l_360').hide();
    			    			$('#indus_item_l_361').hide();
    			    			$('#indus_item_l_362').hide();
    			    			$('#indus_item_l_363').hide();
    			    			$('#indus_item_l_364').hide();
    			    			$('#indus_item_l_365').hide();
    			    			$('#indus_item_l_366').hide();
    			    			$('#indus_item_l_367').hide();
    			    			$('#indus_item_l_368').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_218(op){
    		if(op=='show'){
    			    			$('#indus_item_l_222').show();
    			    			$('#indus_item_l_225').show();
    			    			$('#indus_item_l_223').show();
    			    			$('#indus_item_l_219').show();
    			    			$('#indus_item_l_227').show();
    			    			$('#indus_item_l_228').show();
    			    			$('#indus_item_l_230').show();
    			    			$('#indus_item_l_231').show();
    			    			$('#indus_item_l_229').show();
    			    			$('#indus_item_l_232').show();
    			    			$('#indus_item_l_233').show();
    			    			$('#indus_item_l_226').show();
    			    		}
    		else{
    			    			$('#indus_item_l_222').hide();
    			    			$('#indus_item_l_225').hide();
    			    			$('#indus_item_l_223').hide();
    			    			$('#indus_item_l_219').hide();
    			    			$('#indus_item_l_227').hide();
    			    			$('#indus_item_l_228').hide();
    			    			$('#indus_item_l_230').hide();
    			    			$('#indus_item_l_231').hide();
    			    			$('#indus_item_l_229').hide();
    			    			$('#indus_item_l_232').hide();
    			    			$('#indus_item_l_233').hide();
    			    			$('#indus_item_l_226').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_201(op){
    		if(op=='show'){
    			    			$('#indus_item_l_203').show();
    			    			$('#indus_item_l_202').show();
    			    			$('#indus_item_l_204').show();
    			    			$('#indus_item_l_205').show();
    			    			$('#indus_item_l_209').show();
    			    			$('#indus_item_l_210').show();
    			    			$('#indus_item_l_208').show();
    			    			$('#indus_item_l_207').show();
    			    			$('#indus_item_l_206').show();
    			    			$('#indus_item_l_331').show();
    			    		}
    		else{
    			    			$('#indus_item_l_203').hide();
    			    			$('#indus_item_l_202').hide();
    			    			$('#indus_item_l_204').hide();
    			    			$('#indus_item_l_205').hide();
    			    			$('#indus_item_l_209').hide();
    			    			$('#indus_item_l_210').hide();
    			    			$('#indus_item_l_208').hide();
    			    			$('#indus_item_l_207').hide();
    			    			$('#indus_item_l_206').hide();
    			    			$('#indus_item_l_331').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_350(op){
    		if(op=='show'){
    			    			$('#indus_item_l_351').show();
    			    			$('#indus_item_l_352').show();
    			    			$('#indus_item_l_353').show();
    			    			$('#indus_item_l_354').show();
    			    			$('#indus_item_l_355').show();
    			    			$('#indus_item_l_356').show();
    			    		}
    		else{
    			    			$('#indus_item_l_351').hide();
    			    			$('#indus_item_l_352').hide();
    			    			$('#indus_item_l_353').hide();
    			    			$('#indus_item_l_354').hide();
    			    			$('#indus_item_l_355').hide();
    			    			$('#indus_item_l_356').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_0(op){
    		if(op=='show'){
    			    			$('#indus_item_l_441').show();
    			    			$('#indus_item_l_2').show();
    			    			$('#indus_item_l_201').show();
    			    			$('#indus_item_l_249').show();
    			    			$('#indus_item_l_3').show();
    			    			$('#indus_item_l_335').show();
    			    			$('#indus_item_l_211').show();
    			    			$('#indus_item_l_350').show();
    			    			$('#indus_item_l_234').show();
    			    			$('#indus_item_l_160').show();
    			    			$('#indus_item_l_357').show();
    			    			$('#indus_item_l_192').show();
    			    			$('#indus_item_l_218').show();
    			    			$('#indus_item_l_240').show();
    			    			$('#indus_item_l_121').show();
    			    		}
    		else{
    			    			$('#indus_item_l_441').hide();
    			    			$('#indus_item_l_2').hide();
    			    			$('#indus_item_l_201').hide();
    			    			$('#indus_item_l_249').hide();
    			    			$('#indus_item_l_3').hide();
    			    			$('#indus_item_l_335').hide();
    			    			$('#indus_item_l_211').hide();
    			    			$('#indus_item_l_350').hide();
    			    			$('#indus_item_l_234').hide();
    			    			$('#indus_item_l_160').hide();
    			    			$('#indus_item_l_357').hide();
    			    			$('#indus_item_l_192').hide();
    			    			$('#indus_item_l_218').hide();
    			    			$('#indus_item_l_240').hide();
    			    			$('#indus_item_l_121').hide();
    			    		}
    		
    		    		
    	}
    	      	function showids_127(op){
    		if(op=='show'){
    			    			$('#indus_item_l_127').show();
    			    		}
    		else{
    			    			$('#indus_item_l_127').hide();
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
var c = "确认删除操作？";
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
