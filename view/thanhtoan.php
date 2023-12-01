<br><br><br><br><br>
        <!-- Search bar -->
        <div class="search-wrapper">
            <div class="container container--add">
                <form id='search-form' method='get' class="search">
                    <input type="text" class="search__field" placeholder="Search">
                    <select name="sorting_item" id="search-sort" class="search__sort" tabindex="0">
                        <option value="1" selected='selected'>By title</option>
                        <option value="2">By year</option>
                        <option value="3">By producer</option>
                        <option value="4">By title</option>
                        <option value="5">By year</option>
                    </select>
                    <button type='submit' class="btn btn-md btn--danger search__button">Tìm Kiếm</button>
                </form>
            </div>
        </div>
        
        <!-- Main content -->
        <section class="container">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt='' src="images/tickets.png">
                    <p class="order__title">Đặt vé <br><span class="order__descript">và tận hưởng thời gian xem phim vui vẻ</span></p>
                    <div class="order__control">
                        <a href="#" class="order__control-btn active">Purchase</a>
                        <a href="book3-reserve.html" class="order__control-btn">Reserve</a>
                    </div>
                </div>
            </div>
                <div class="order-step-area">
                    <div class="order-step first--step order-step--disable ">1. Cái gì &amp; ở đâu &amp; khi nào</div>
                    <div class="order-step second--step order-step--disable">2. Choose a sit</div>
                    <div class="order-step third--step">3. Check out</div>
                </div>

            <div class="col-sm-12">
                <div class="checkout-wrapper">
                    <h2 class="page-heading">Giá</h2>
                    <ul class="book-result">
                        <li class="book-result__item">Vé: <span class="book-result__count booking-ticket"><?php 
                        if($kq != false){
                            $a = $kq['ghe1'];
                            $b = $kq['ghe2'];
                            $c = $kq['ghe3'];
                            $tong = ($a + $b + $c);
                            echo $tong;
                            
                        ?></span></li>
                        <li class="book-result__item">Ghế: <span class="book-result__count booking-price"><?php
                            
                            $d = $kq['tenghe'];
                            
                            // Chuyển chuỗi thành mảng, sử dụng dấu phẩy làm delimiter
                            $arr = explode(', ', $d);
                            
                            // Loại bỏ giá trị trùng lặp
                            $arr = array_unique($arr);
                            
                            // Chuyển mảng thành chuỗi, sử dụng dấu phẩy và khoảng trắng làm delimiter
                            $result = implode(', ', $arr);
                            
                            // Loại bỏ dấu phẩy ở cuối chuỗi
                            $result = rtrim($result, ', ');
                            echo $result;
                        ?></span></li>
                        <li class="book-result__item">Tổng: <span class="book-result__count booking-cost">$<?php echo $kq['tong']; } ?></span></li>
                    </ul>

                    <h2 class="page-heading">Lựa chọn hình thức thanh toán</h2>
                    <div class="payment">
                        <a href="#" class="payment__item">
                            <img alt='' src="images/payment/pay1.png">
                        </a>
                        <a href="#" class="payment__item">
                            <img alt='' src="images/payment/pay2.png">
                        </a>
                        <a href="#" class="payment__item">
                            <img alt='' src="images/payment/pay3.png">
                        </a>
                        <a href="#" class="payment__item">
                            <img alt='' src="images/payment/pay4.png">
                        </a>
                        <a href="#" class="payment__item">
                            <img alt='' src="images/payment/pay5.png">
                        </a>
                        <a href="#" class="payment__item">
                            <img alt='' src="images/payment/pay6.png">
                        </a>
                        <a href="#" class="payment__item">
                            <img alt='' src="images/payment/pay7.png">
                        </a>
                    </div>

                    <h2 class="page-heading">Thông tin liên lạc</h2>
            
                    <form id='contact-info' method='post' novalidate="" class="form contact-info">
                        <div class="contact-info__field contact-info__field-mail">
                            <input type='email' name='user-mail' placeholder='Email' class="form__mail">
                        </div>
                        <div class="contact-info__field contact-info__field-tel">
                            <input type='tel' name='user-tel' placeholder='Số điện thoại' class="form__mail">
                        </div>
                    </form>

                
                </div>
                
                <div class="order">
                    <a href="book-final.html" class="btn btn-md btn--warning btn--wide">Mua</a>
                </div>

            </div>

        </section>
        

        <div class="clearfix"></div>

        <div class="booking-pagination">
                <a href="index.php?act=chonghe" class="booking-pagination__prev">
                    <p class="arrow__text arrow--prev">prev step</p>
                    <span class="arrow__info">choose a sit</span>
                </a>
                <a href="#" class="booking-pagination__next hide--arrow">
                    <p class="arrow__text arrow--next">next step</p>
                    <span class="arrow__info"></span>
                </a>
        </div>
        
        <div class="clearfix"></div>

     
	<!-- JavaScript-->
        <!-- jQuery 1.9.1--> 
        <script src="../ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/external/jquery-1.10.1.min.js"><\/script>')</script>
        <!-- Migrate --> 
        <script src="js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- Bootstrap 3--> 
        <script src="../netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- Mobile menu -->
        <script src="js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="js/external/jquery.selectbox-0.2.min.js"></script>

        <!-- Form element -->
        <script src="js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="js/form.js"></script>

        <!-- Custom -->
        <script src="js/custom.js"></script>

</body>

<!-- Mirrored from amovie.gozha.net/book3-buy.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 12:59:10 GMT -->
</html>
