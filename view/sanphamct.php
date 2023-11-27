<br> <br> <br>
<section class="container">
            <div class="col-sm-12">
                <div class="movie">
                    <?php
                    if(is_array($phimsp)){
                        extract($phimsp);
                        // print_r($phimsp);
                    }
                    ?>
                    <h2 class="page-heading"><?php echo $tenphim; ?></h2>
                    <?php
                        
                        $img=$img_path.$img;
                        echo '
                        <div class="movie__info">
                                <div class="col-sm-4 col-md-3 movie-mobile">
                                    <div class="movie__images">
                                        <span class="movie__rating">'.$sao.'</span>
                                        <img alt="" src="'.$img.'">
                                    </div>
                                    
                                </div>

                                <div class="col-sm-8 col-md-9">
                                    <p class="movie__time">'.$thoiluong.'</p>

                                    <p class="movie__option"><strong>Quốc Gia: </strong><a href="#">'.$quocgia.'</a></p>
                                    <p class="movie__option"><strong>Năm: </strong><a href="#">'.$nam.'</a></p>
                                    <p class="movie__option"><strong>Thể Loại: </strong><a href="#">'.$theloai.'</a></p>
                                    <p class="movie__option"><strong>Ngày Phát Hành: </strong>'.$ngaychieu.'</p>
                                    <p class="movie__option"><strong>Tác Giả: </strong><a href="#">'.$tacgia.'</a></p>
                                    <p class="movie__option"><strong>Giờ Chiếu: </strong><a href="#">'.$giochieu.'</a></p>
                                    
                                    
                                    <div class="movie__btns movie__btns--full">
                                        <a href="index.php?act=chongio" class="btn btn-md btn--warning">Đặt vé xem phim</a>
                                        
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="clearfix"></div>
                    
                                <h2 class="page-heading">Mô Tả</h2>

                                <p class="movie__describe">'.$mota.'</p>';
                    ?>
                    
                    
                    

                    

                </div>

                <h2 class="page-heading">Thời Gian &amp; Địa Điểm</h2>
                <div class="choose-container">
                    <form id="select" class="select" method="get">
                          <select name="select_item" id="select-sort" class="select__sort" tabindex="0">
                            <option value="1" selected="selected">Hà Nội</option>
                            <option value="2">Thành Phố HCM</option>
                            <option value="3">Thái Bình</option>
                            <option value="4">Bắc Giang</option>
                            <option value="5">Bắc Ninh</option>
                            
                        </select>
                    </form>

                    <div class="datepicker">
                      <span class="datepicker__marker"><i class="fa fa-calendar"></i>Date</span>
                      <input type="date" id="datepicker" name="ngaychieu" class="datepicker__input">
            
                    </div>

                    <a href="#" id="map-switch" class="watchlist watchlist--map watchlist--map-full"><span class="show-map">map</span><span  class="show-time">Show cinema time table</span></a>
                    
                    <div class="clearfix"></div>

                    <div class="time-select">
                        <div class="time-select__group group--first">
                            <div class="col-sm-4">
                                <p class="time-select__place">Địa Điểm 1</p>
                            </div>
                            <ul class="col-sm-8 items-wrap">
                                <li class="time-select__item" data-time="09:40">09:40</li>
                                <li class="time-select__item" data-time="13:45">13:45</li>
                                <li class="time-select__item" data-time="15:45">15:45</li>
                                <li class="time-select__item" data-time="19:50">19:50</li>
                                <li class="time-select__item" data-time="21:50">21:50</li>
                            </ul>
                        </div>

                        <!-- <div class="time-select__group">
                            <div class="col-sm-4">
                                <p class="time-select__place">Địa Điểm 2</p>
                            </div>
                            <ul class="col-sm-8 items-wrap">
                                <li class="time-select__item" data-time="10:45">10:45</li>
                                <li class="time-select__item" data-time="16:00">16:00</li>
                                <li class="time-select__item" data-time="19:00">19:00</li>
                                <li class="time-select__item" data-time="21:15">21:15</li>
                                <li class="time-select__item" data-time="23:00">23:00</li>
                            </ul>
                        </div>

                        <div class="time-select__group">
                            <div class="col-sm-4">
                                <p class="time-select__place">Địa Điểm 3</p>
                            </div>
                            <ul class="col-sm-8 items-wrap">
                                <li class="time-select__item" data-time="09:00">09:00</li>
                                <li class="time-select__item" data-time="11:00">11:00</li>
                                <li class="time-select__item" data-time="13:00">13:00</li>
                                <li class="time-select__item" data-time="15:00">15:00</li>
                                <li class="time-select__item" data-time="17:00">17:00</li>
                                <li class="time-select__item" data-time="19:0">19:00</li>
                                <li class="time-select__item" data-time="21:0">21:00</li>
                                <li class="time-select__item" data-time="23:0">23:00</li>
                                <li class="time-select__item" data-time="01:0">01:00</li>
                            </ul>
                        </div>

                        <div class="time-select__group">
                            <div class="col-sm-4">
                                <p class="time-select__place">Địa Điểm 4</p>
                            </div>
                            <ul class="col-sm-8 items-wrap">
                                <li class="time-select__item" data-time="10:45">10:45</li>
                                <li class="time-select__item" data-time="16:00">16:00</li>
                                <li class="time-select__item" data-time="19:00">19:00</li>
                                <li class="time-select__item" data-time="21:15">21:15</li>
                                <li class="time-select__item" data-time="23:00">23:00</li>
                            </ul>
                        </div>

                        <div class="time-select__group group--last">
                            <div class="col-sm-4">
                                <p class="time-select__place">Địa Điểm 5</p>
                            </div>
                            <ul class="col-sm-8 items-wrap">
                                <li class="time-select__item" data-time="17:45">17:45</li>
                                <li class="time-select__item" data-time="21:30">21:30</li>
                                <li class="time-select__item" data-time="02:20">02:20</li>
                            </ul>
                        </div> -->
                    </div>
                    
                    <!-- hiden maps with multiple locator-->
                    <!-- <div  class="map">
                        <div id="cimenas-map"></div> 
                    </div> -->

                    <h2 class="page-heading">Bình Luận</h2>

                    <div class="comment-wrapper">
                        <form id="comment-form" class="comment-form" method="post">
                            <?php
                                if(isset($_SESSION['user'])){
                                    echo '<form action="index.php?act=sanphamct&idsp='.$id.'" method="post">
                                
                                    <!-- <textarea class="comment-form__text" placeholder="Viết bình luận"></textarea> -->
                                    <input type="hidden" name="idpro" value="'.$id.'">
                                    <input type="text" name="noidung" class="comment-form__text">
                                    <input type="submit" value="Đăng" name="guibinhluan" class="btn btn-md btn--danger comment-form__btn">
                                </form>';
                                }else{
                                    echo 'Bạn cần đăng nhập để bình luận';
                                }
                            ?>
                            
                            

                            <div class="comment-sets">
                                <?php
                                    foreach ($binhluan as  $value) {
                                        extract($value);
                                        echo '<div class="comment">
                                                <div class="comment__images">
                                                    <img alt="" src="images/comment/avatar.jpg">
                                                </div>
            
                                                <a href="#" class="comment__author"><span class="social-used fa fa-facebook"></span>'.$user.'</a>
                                                <p class="comment__date">'.$ngaybinhluan.'</p>
                                                <p class="comment__message">'.$noidung.'</p>
                                                <a href="#" class="comment__reply">Reply</a>
                                            </div>';
                                    }
                                
                                ?>
                                

                            </div>
                        </form>

                        
                    </div>
                </div>
            </div>

        </section>