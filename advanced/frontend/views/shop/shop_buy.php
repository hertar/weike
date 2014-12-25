<div class="wrapper">
    <!--页面头部-->
    <header class="clearfix page_header">
        <div class="container_24 clearfix">
            <!--面包屑-->
            <div class="breadcrumbs clearfix">
                <a href="index.php">首页</a>
                &gt;<a href="index.php?do=shop_list&model_id=6">威客商城</a>
                &gt;<a href="index.php?do=shop_list&model_id=6&indus_pid=2">网站开发</a>
                &gt;<a href="index.php?do=shop_list&model_id=6&indus_id=30">网站广告</a>
            </div>
            <!--end 面包屑-->
            <div class="grid_24 po_re">
                <!--step步骤 start-->
                <div class="box normal2">
                    <div class="step_progress clearfix">
                        <div class="step step1 selected">
                            <span class="icon32 pub">1</span>
                            <strong>确认订单信息</strong>
                        </div>
                        <div class="step step2 ">
                            <span class="icon32 pub">2</span>
                            <strong>付款</strong>
                        </div>
                        <div class="step step3 ">
                            <span class="icon32 pub">3</span>
                            <strong>作品交互 </strong>
                        </div>
                        <div class="step step4 ">
                            <span class="icon32 pub">4</span>
                            <strong>双方互评</strong>
                        </div>
                    </div>
                </div>
                <!--step步骤 end-->
            </div>
        </div>
    </header>
    <!--end 页面头部--><!--详细内容区-->
    <section class="content mt_20 mb_20 clearfix">
        <!--布局框-->
        <div class="container_24 clearfix">
            <!-- 左边部分-->
            <div class="grid_5 ">
                <div class="box normal2 clearfix" style="height:350px;overflow:hidden;">
                    <div class="inner">
                        <div class="box_header">
                            <h2 class="title">作品信息</h2>
                        </div>
                        <div class="box_detail">
                            <div class="pad10">
                                <div class="service_detail_img">
     <img src="/public/<?php echo $arr[0]['pic'];?>" width='100' alt="<?php echo $arr[0]['title'];?>">
                                    
                                </div>
                            </div>
                            <div class="service_detail_info c333 clearfix">
                                <p>
                                    <span>作品名称</span>：<a href="index.php?do=service&sid=7"><?php echo $arr[0]['title'];?></a>
                                </p>
                                <p>
                                    单价：<span class="cc00">￥<?php echo $arr[0]['price'];?>元/个</span>
                                </p>
                                <p>
                                    卖家名称：<a href="index.php?do=space&member_id=2"><?php echo $arr[0]['username'];?></a>
                                </p>
                                <p>
                                    联系方式：<?php echo $arr[0]['mobile'];?>                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end 左边部分--><!--右边部分-->
            <div class="grid_19">
                <div class="box normal2 clearfix" style="height:350px;overflow:hidden;">

                    <div class="sure_buy_info clearfix">
                        <div class="box_header">
                            <h2 class="title">确认购买信息</h2>
                        </div>
                        <div class="pad20">
                            <div class="pt_20 pb_10 ws_break">
                                给卖家留言： 
                                <textarea cols="100" rows="9" id="tar_content" name="tar_content" ></textarea>
                            </div>                   
                支付金额：<span class="cc00">￥<?php echo $arr[0]['price'];?>元</span>
                              
                        </div>
                        <div class="t_c pt_20 pb_20">
                            <button class="big button" value="1" name="confirm_to_order" 
                                    onclick='shop_buy()'
                                    id="confirm_to_order">
                                    确认无误，购买                            </button>
                        </div>
                        <input type='hidden' id='service_id' value="<?php echo $arr[0]['service_id'];?>">
                    </div>    
                </div>
            </div>
        </div>
            <!--end 右边部分-->
      
        <!--end 布局框-->
    </section>
    <!--end 详细内容区-->
</div>
<!--end 页面内容区-->
<script type="text/javascript">
    function shop_buy(){
       var service_id=$("#service_id").val();
       var content=$("#tar_content").val();
      location.href="index.php?r=shop/shop_order&service_id="+service_id+"&content="+content;
    }
    
    
    
    In.add('service', {
        path: "/public/resource/js/system/service.js",
        type: 'js'
    });
    In('service', 'custom');
    var sid = "7";
    var basic_url = "index.php?do=shop_order&steps=step1&sid=" + sid;
    var uid = parseInt('1') + 0;
var order_id = parseInt('')+0;
$(function(){
$("#confirm_to_order").click(function(){
var leave_message_to_seller = $("#tar_content").val();
var url = basic_url+'&op=confirm&message='+leave_message_to_seller;
formSub(url,'url',false);

})
$("#confirm_to_accept").click(function(){
var url = basic_url+'&op=seller_confirm&order_id='+order_id;
formSub(url,'url',false);
})
$("#confirm_to_close").click(function(){
var url = basic_url+'&op=seller_close&order_id='+order_id;
formSub(url,'url',false);
})
})
</script>



<!--[if IE 6]></div><![endif]-->
<!--[if IE 7]></div><![endif]-->
<!--[if IE 8]></div><![endif]-->
</body>
</html>
