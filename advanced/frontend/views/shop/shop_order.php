
<div class="wrapper">
    <!--页面头部-->
    <header class="clearfix page_header">
        <div class="container_24 clearfix">
            <!--面包屑-->
            <div class="breadcrumbs clearfix">
                <a href="index.php">首页</a>
                &gt;<a href="index.php?do=shop_list&model_id=6">威客商城</a>
                &gt;<a href="index.php?do=shop_list&model_id=6&indus_pid=350">照片美化/编辑</a>
                &gt;<a href="index.php?do=shop_list&model_id=6&indus_id=356">图片编辑</a>
            </div>
            <!--end 面包屑-->
            <div class="grid_24 po_re">
                <!--step步骤 start-->
                <div class="box normal2">
                    <div class="step_progress clearfix">
                        <div class="step step1 ">
                            <span class="icon32 pub">1</span>
                            <strong>确认订单信息</strong>
                        </div>
                        <div class="step step2 selected">
                            <span class="icon32 pub">2</span>
                            <strong>付款</strong>
                        </div>
                        <div class="step step3 ">
                            <span class="icon32 pub">3</span>
                            <strong>作品交互</strong>
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
            <div class="grid_24 mb_10 ">
                <div class="box normal2 clearfix">
                    <div class="inner">
                        <div class="box_detail">
                        	                            <div class="pad20 c333 clearfix">
                                <div>
                                    <p><span style="width:430px;display:inline-block;" class="t_r">您的订单需要支付：</span><span class="cc00 font18">￥<?php echo $arr['order_amount'];?>元</span></p>
                                  <!--  <p><span style="width:430px;display:inline-block;" class="t_r">账户余额：</span><span class="cc00 font18">￥393,305.06元</span></p>-->
                                 </div>
                                <div class="t_c mt_20">
                                	                                      <button class="big button" name="confirm_to_pay" id="confirm_to_pay">付款</button>
<button class="big button" value="1" name="confirm_to_close" id="confirm_to_close"
        onclick='backorder(<?php echo $arr['order_id'];?>)'>取消订单 </button>
                                	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <!--end 布局框-->
    </section>
    <!--end 详细内容区-->
</div>
<!--end 页面内容区-->
<script type="text/javascript">
    function backorder(order_id){   
     $.ajax({
   type: "GET",
   url: "index.php?r=shop/shop_order_q",
   data: "order_id="+order_id,
   success: function(msg){
    if(msg==1){  
        alert("取消订单成功");
        location.href="index.php?r=user/index";
    }else{
        alert("取消失败");
    }
   }
   
});    
    }
    In.add('service', {
        path: "/public/resource/js/system/service.js",
        type: 'js'
    });
    In('service', 'custom');
    var sid = "2";
var order_id = "80004491";
    var basic_url = "index.php?do=shop_order&steps=step2&sid=" + sid+"&order_id="+order_id;
    var uid = parseInt('1') + 0;
$(function(){
$("#confirm_to_pay").click(function(){
var url = basic_url+'&op=confirm_pay';
formSub(url,'url',false);
//	location.href = basic_url+'&op=confirm&message='+leave_message_to_seller;

})
$("#close_order").click(function(){
var url = basic_url+'&op=close_order';
formSub(url,'url',false);
//	location.href = basic_url+'&op=confirm&message='+leave_message_to_seller;

})
$("#confirm_to_close").click(function(){
var url = basic_url+'&op=close_order&order_id='+order_id;
formSub(url,'url',false);
})
})
</script>

<!--页脚 satrt-->

<!--[if IE 6]></div><![endif]-->
<!--[if IE 7]></div><![endif]-->
<!--[if IE 8]></div><![endif]-->
</body>
</html>
