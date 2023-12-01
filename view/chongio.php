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
                        <a href="#" class="order__control-btn">Reserve</a>
                    </div>
                </div>
            </div>
                <div class="order-step-area">
                    <div class="order-step first--step">1. Cái gì &amp; ở đâu &amp; khi nào</div>
                </div>

            <h2 class="page-heading heading--outcontainer">Choose a movie</h2>
        </section>


        <section class="container">
            <div class="col-sm-12">
                <div class="choose-indector choose-indector--film">
                    <strong>Chọn: </strong><span class="choosen-area"></span>
                </div>

                <h2 class="page-heading">Thành phố &amp; ngày</h2>

                <div class="choose-container choose-container--short">
                    <form id='select' class="select" method='get'>
                          <select name="select_item" id="select-sort" class="select__sort" tabindex="0">
                            <option value="1" selected='selected'>London</option>
                            <option value="2">New York</option>
                            <option value="3">Paris</option>
                            <option value="4">Berlin</option>
                            <option value="5">Moscow</option>
                            <option value="3">Minsk</option>
                            <option value="4">Warsawa</option>
                            <option value="5">Kiev</option>
                        </select>
                    </form>

                    <div class="datepicker">
                      <span class="datepicker__marker"><i class="fa fa-calendar"></i>Date</span>
                      <input type="text" id="datepicker" value='03/10/2014' class="datepicker__input">
                    </div>
                </div>

                <h2 class="page-heading">Chọn thời gian</h2>

                <div class="time-select time-select--wide">
                        <div class="time-select__group group--first">
                            <div class="col-sm-3">
                                <p class="time-select__place">Cineworld</p>
                            </div>
                            <ul class="col-sm-6 items-wrap">
                            <?php
                            foreach($listgiochieu as $gc){
                                extract($gc);
                                echo ' 
                                <li class="time-select__item" data-time="'.$giochieu.'" onclick="showContent('.$id.')">'.$giochieu.'</li>';
                            }
                            ?>
                            </ul>
                        </div>

                        <style>
                            .hidden {
                                display: none;
                                    }
                        </style>
     <script>
        function showContent($id) {
            // Ẩn tất cả các nội dung trước khi hiển thị nội dung mới
            var allContents = document.querySelectorAll('.hidden');
            allContents.forEach(function(content) {
                content.style.display = 'none';
            });

            // Hiển thị nội dung tương ứng với thẻ li được click
            var selectedContent = document.getElementById($id);
            selectedContent.style.display = 'block';
        }
    </script>
                <div class="choose-indector choose-indector--time">
                    <strong>Chọn: 
                    <?php
                    foreach($listgiochieu as $gc){
                        extract($gc);
                            echo " 
                            <span id='".$id."' class='hidden'>".$giochieu."</span>
                            ";
                    }
                    ?>

                    </strong>
                    
                    <span class="choosen-area"></span>
                </div>
            </div>

        </section>

        <div class="clearfix"></div>

        <form id='film-and-time' class="" method='get' action='https://amovie.gozha.net/book2.html'>
            <input type='text' name='choosen-movie' class="choosen-movie">

            <input type='text' name='choosen-city' class="choosen-city">
            <input type='text' name='choosen-date' class="choosen-date">
            
            <input type='text' name='choosen-cinema' class="choosen-cinema">
            <input type='text' name='choosen-time' class="choosen-time">
        

            <div class="booking-pagination">
                    <a href="index.php?act=chonghe" class="booking-pagination__prev hide--arrow">
                        <span class="arrow__text arrow--prev"></span>
                        <span class="arrow__info"></span>
                    </a>
                    <a href="index.php?act=chonghe" class="booking-pagination__next">
                        <span class="arrow__text arrow--next">next step</span>
                        <span class="arrow__info">choose a sit</span>
                    </a>
            </div>

        </form>
        
        <div class="clearfix"></div>

       

   

	<!-- JavaScript-->
        <!-- jQuery 1.9.1--> 
        <script src="../ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/external/jquery-1.10.1.min.js"><\/script>')</script>
        <!-- Migrate --> 
        <script src="js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- jQuery UI -->
        <script src="../code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <!-- Bootstrap 3--> 
        <script src="../netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- Mobile menu -->
        <script src="js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="js/external/jquery.selectbox-0.2.min.js"></script>
        <!-- Swiper slider -->
        <script src="js/external/idangerous.swiper.min.js"></script>

        <!-- Form element -->
        <script src="js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="js/form.js"></script>

        <!-- Custom -->
        <script src="js/custom.js"></script>
		
		<script type="text/javascript">
            $(document).ready(function() {
                init_BookingOne();
            });
		</script>

</body>

<!-- Mirrored from amovie.gozha.net/book1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 12:59:07 GMT -->
</html>
