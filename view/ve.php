<!-- Main content -->
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

   $insert_momo = "INSERT INTO `momo`(`idphim`, `iduser`, `partner_code`, `order_id`, `amount`, `order_info`, `order_type`, `trans_id`, `pay_type`,`code_cart`) 
   VALUES ('$idphim', '$iduser','$partnerCode','$orderId','$amount','$orderInfo','$orderType','$transId','$payType','$codeCart')";
   $atmmomo = pdo_query($insert_momo);

   if($atmmomo){

   }
}
?>
<br><br>
<section class="container">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt='' src="images/tickets.png">
                    <p class="order__title">Cản ơn <br><span class="order__descript">Bạn đã mua vé thành công</span></p>
                </div>

                <div class="ticket">
                    <div class="ticket-position">
                        <div class="ticket__indecator indecator--pre"><div class="indecator-text pre--text">online ticket</div> </div>
                        <div class="ticket__inner">

                            <div class="ticket-secondary">
                                <span class="ticket__item">Vé: <strong class="ticket__number"><?php echo $orderId; ?></strong></span>
                                <span class="ticket__item ticket__date"><?php echo $kq1["ngaychieu"]; ?></span>
                                <span class="ticket__item ticket__time"><?php echo $kq1["giochieu"]; ?></span>
                                <span class="ticket__item">Rạp chiếu phim: <span class="ticket__hall">Beta Cineplex Mỹ Đình</span></span>
                                <span class="ticket__item ticket__price">Giá: <strong class="ticket__cost">
                                    <?php $tongtien1 = number_format($kq1["tong"], 0, ',', '.');
                                        echo $tongtien1;                                   
                                    ?>đ</strong>
                                </span>
                            </div>
                            <?php
                                $d = $kq1["tenghe"];
                                $arr = explode(', ', $d);
                                $arr = array_unique($arr);
                                $result = implode(', ', $arr);
                                $result = rtrim($result, ', ');
                            ?>
                            <div class="ticket-primery">
                                <span class="ticket__item ticket__item--primery ticket__film">Film<br><strong class="ticket__movie"><?php echo $kq2["tenphim"]; ?></strong></span>
                                <span class="ticket__item ticket__item--primery">Ghế: <span class="ticket__place"><?php echo $result; ?></span></span>
                            </div>
                        </div>
                        <div class="ticket__indecator indecator--post"><div class="indecator-text post--text">online ticket</div></div>
                    </div>
                </div>

            </div>
        </section>
        
        <div class="clearfix"></div>
        