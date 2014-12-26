 <div class="clear"></div>
<style type="text/css">
.agreement{border:1px solid #ccc; background:#f9f9f9; margin-top:10px;}
.agtop{height:50px;}
.agreetop{font-size:25px; font-family:"微软雅黑"; color:#2f549f; font-weight:normal;}
.cont{border-top:1px solid #ccc;}
.contents{width:820px; margin:auto; margin-top:15px;}	
</style>
<!--页面头部-->
<header class="clearfix page_header">
    	<div class="container_24">

        <!--页面导航-->
        	<div class="breadcrumbs clearfix ">
            	<a href="index.php">首页</a> &gt; 
<span>
网站公告</span>
        	</div>
        <!--end 页面导航-->
    	</div>
</header>
<!--end 页面标题-->
<section class="clearfix content">
<div class="container_24 mb_20">
 <div class="clearfix agreement blue_style pad20 mar0">
 	<div class="agtop t_c">
 	<h1 class="agreetop"><?php echo $res["art_title"]?></h1>
</div>
   <div class="clearfix box" id="upload_tip">
       <div class="rowElem cont clearfix" id="desc">
       		<div class="t_c">
       			<?php echo date("Y-m-d",$res["on_time"])?> |
<?php echo $res["views"]?> 次浏览 | 
作者:<?php echo $res["username"]?> </div>
 <div class="contents">
<?php echo htmlspecialchars_decode($res["content"])?><div class="operate t_r">
 		<a target="_blank" href="#" title="打印">
 			<div class="icon16 print"></div>
</a>
<a target="_blank" href="#" title="返回顶部">
 			<div class="icon16 arrow-top"></div>
</a>
<a target="_blank" href="#" title="返回首页">
 			<div class="icon16 home"></div>
</a>
 </div>
 </div>
 <div class="clear"></div>
<!--左内容头-->
            <div class=" clearfix pad5" >
                      <?php
                                    if(isset($next)){
                                       
                                ?>
                                 <a href="index.php?r=index/art&art_id=<?php echo array_keys($next)[0]?>" class="fl_r mr_20">
                                     
                   <strong class="font_simsun mr_5 c555">下一篇：</strong><?php echo $next[array_keys($next)[0]]?></a>
                                <?php
                                    }
                                ?>
                                <?php
                                    if(isset($last)){
                                ?>
                                <a href="index.php?r=index/art&art_id=<?php echo array_keys($last)[0]?>" class="fl_r mr_20">
                   <strong class="font_simsun mr_5 c555">上一篇：</strong><?php echo $last[array_keys($last)[0]]?></a>
                                <?php
                                    }
                                ?>
                                </div>
            <!--end 左内容头-->
    <div class="clear">
                </div>
      </div>
</div>
 </div>
</div>
