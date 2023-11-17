        <!-- Slider -->
        <div class="bannercontainer">
                    <div class="banner">
                        <img alt="" src="images/slides/first-slide.jpg">
                    </div>
        </div>

        <!--end slider -->
        
        
        <!-- Main content -->
        <section class="container">
            <div class="movie-best">
                 <div class="col-sm-10 col-sm-offset-1 movie-best__rating">Top Yêu Thích</div>
                 <div class="col-sm-12 change--col">

                 <?php
                    foreach ($phimtop as $phim) {
                        extract($phim);
                        $hinh=$img_path.$img;
                        echo '<div class="movie-beta__item ">
                                <img alt="" src="'.$hinh.'">
                                

                                <ul class="movie-beta__info">
                                    <li><span class="best-voted">'.$luotxem.'</span></li>
                                    <li>
                                        <p class="movie__time">'.$giochieu.'</p>
                                        <p>'.$tacgia.'</p>
                                        <p>'.$quocgia.'</p>
                                    </li>
                                    <li class="last-block">
                                        <a href="#" class="slide__link">more</a>
                                    </li>
                                </ul>
                            </div>';
                    }
                 ?>
                     
                    
                    
                 </div>
                <div class="col-sm-10 col-sm-offset-1 movie-best__check">check all movies now playing</div>
            </div>

            <div class="clearfix"></div>

            <h2 id="target" class="page-heading heading--outcontainer">List Phim</h2>

            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-md-9">
                        <!-- Movie variant with time -->

                        <?php
                            foreach ($phimhome as $phim) {
                                extract($phim);
                                $hinh=$img_path.$img;
                                $link="index.php?act=sanphamct&idsp=".$id;
                                echo '<div class="movie movie--test movie--test--dark movie--test--left">
                                        <div class="movie__images">
                                            <a href="'.$link.'" class="movie-beta__link">
                                                <img alt="" src="'.$hinh.'">
                                            </a>
                                        </div>

                                        <div class="movie__info">
                                            <a href="" class="movie__title">'.$tenphim.'</a>

                                            <p class="movie__time">'.$giochieu.'</p>
                                            <p class="movie">'.$tacgia.'</p>
                                            <p class="movie">'.$quocgia.'</p>

                                        
                                            
                                            <div class="movie__rate">
                                                <div class="score"></div>
                                                <span class="movie__rating">'.$sao.'</span>
                                            </div>               
                                        </div>
                                    </div>';
                            }
                        ?>
                            
                         <!-- Movie variant with time -->



                        
                    </div>

                    <aside class="col-sm-4 col-md-3">
                        <div class="sitebar first-banner--left">
                            <!-- <div class="banner-wrap first-banner--left">
                                <img alt="banner" src="images/banners/sale.jpg">
                            </div>

                             <div class="banner-wrap">
                                <img alt="banner" src="images/banners/sport.jpg">
                            </div> -->

                             <div class="banner-wrap banner-wrap--last">
                                <img alt="banner" src="images/banners/boots.jpg">
                            </div>

                            <div class="promo marginb-sm">
                              <div class="promo__head">A.Movie app</div>
                              <div class="promo__describe">for all smartphones<br> and tablets</div>
                              <div class="promo__content">
                                  <ul>
                                      <li class="store-variant"><a href="#"><img alt="" src="images/apple-store.svg"></a></li>
                                      <li class="store-variant"><a href="#"><img alt="" src="images/google-play.svg"></a></li>
                                      <li class="store-variant"><a href="#"><img alt="" src="images/windows-store.svg"></a></li>
                                  </ul>
                              </div>
                          </div>
    
                        </div>
                    </aside>
                </div>
            </div>     
        </section>
        
        <div class="clearfix"></div>