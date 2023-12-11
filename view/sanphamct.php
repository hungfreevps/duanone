<br> <br> <br>
<?php 
    // Ẩn thông báo lỗi
    error_reporting(0);
    ini_set('display_errors', 0);
    // $iduser = @$_POST['iduser'];
?>
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
                                        <img alt="" src="'.$img.'" style="width: 258px;">
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
                                        <a href="index.php?act=chongio&idphim='.$idphim.'&iduser='.$iduser.'" class="btn btn-md btn--warning">Đặt vé xem phim</a>
                                        
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

                    </form>

                    <div class="datepicker">
                      <span class="datepicker__marker"><i class="fa fa-calendar"></i>Date</span>
                      <input type="text" id="datepicker" value='<?php $t=time(); echo(date("d-m-Y",$t)); ?>' class="datepicker__input">
            
                    </div><br><br>

                    
                    <div class="clearfix"></div>

                    <div class="time-select">
                        <div class="time-select__group group--first">
                            <div class="col-sm-4">
                                <p class="time-select__place">Hà Nội</p>
                            </div>
                            <ul class="col-sm-6 items-wrap">
                                <?php
                                foreach($listgiochieu as $gc){
                                    extract($gc);
                                    echo ' 
                                    <li class="time-select__item" data-time="'.$giochieu.'">'.$giochieu.'</li>';
                                }
                                ?>
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
                                    echo '<form action="index.php?act=sanphamct&idsp='.$idphim.'" method="post">
                                
                                    <!-- <textarea class="comment-form__text" placeholder="Viết bình luận"></textarea> -->
                                    <input type="hidden" name="idpro" value="'.$idphim.'">
                                    <input type="text" name="noidung" class="comment-form__text">
                                    <input type="submit" value="Đăng" name="guibinhluan" class="btn btn-md btn--danger comment-form__btn">
                                </form>';
                                }else{
                                    echo 'Bạn cần đăng nhập để bình luận';
                                }
                            ?>
                            <br>
                            

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

<div class="clearfix"></div>