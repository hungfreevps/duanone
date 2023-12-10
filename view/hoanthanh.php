<?php
if(isset($_GET['partnerCode'])){
   $partnerCode=$_GET['partnerCode'];
   $orderId=$_GET['orderId'];
   $amount=$_GET['amount'];
   $orderInfo=$_GET['orderInfo'];
   $orderType=$_GET['orderType'];
   $transId=$_GET['transId'];
   $payType=$_GET['payType'];
   $codeCart=rand(0,9999);

   $insert_momo = "INSERT INTO `momo`( `partner_code`, `order_id`, `amount`, `order_info`, `order_type`, `trans_id`, `pay_type`,`code_cart`) 
   VALUES ('$partnerCode','$orderId','$amount','$orderInfo','$orderType','$transId','$payType','$codeCart')";
   $atmmomo = pdo_query($insert_momo);

}
?>