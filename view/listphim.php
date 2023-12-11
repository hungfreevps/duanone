

        
        <!-- Search bar -->
        <br><br><br>
        
        <!-- Main content -->
        <section class="container">
            <div class="col-sm-12">
                <h2 class="page-heading">Danh sách phim</h2>
                
                <!-- <div class="select-area">
                    <form class="select" method='get'>
                          <select name="select_item" class="select__sort" tabindex="0">
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

                    <form class="select select--cinema" method='get'>
                          <select name="select_item" class="select__sort" tabindex="0">
                            <option value="1" selected='selected'>Cineworld</option>
                            <option value="2">Empire</option>
                            <option value="3">Everyman</option>
                            <option value="4">Odeon</option>
                            <option value="5">Picturehouse</option>
                        </select>
                    </form>

                    <form class="select select--film-category" method='get'>
                          <select name="select_item" class="select__sort" tabindex="0">
                            <option value="2" selected='selected'>Children's</option>
                            <option value="3">Comedy</option>
                            <option value="4">Drama</option>
                            <option value="5">Fantasy</option>
                            <option value="6">Horror</option>
                            <option value="7">Thriller</option>
                        </select>
                    </form>

                </div>

                 <div class="tags-area">
                    <div class="tags tags--unmarked">
                        <span class="tags__label">Sorted by:</span>
                            <ul>
                                <li class="item-wrap"><a href="#" class="tags__item item-active" data-filter='all'>all</a></li>
                                <li class="item-wrap"><a href="#" class="tags__item" data-filter='release'>release date</a></li>
                                <li class="item-wrap"><a href="#" class="tags__item" data-filter='popularity'>popularity</a></li>
                                <li class="item-wrap"><a href="#" class="tags__item" data-filter='comments'>comments</a></li>
                                <li class="item-wrap"><a href="#" class="tags__item" data-filter='ending'>ending soon</a></li>
                            </ul>
                    </div>
                </div> -->
                
                <!-- Movie preview item -->
                <style>
                    .movie__images img{
                        height: 240px;
                    }
                </style>
                <?php 
                    foreach ($phimhome as $phim) {
                        extract($phim);
                        // print_r($phim);
                        $hinh=$img_path.$img;
                        $link="index.php?act=sanphamct&idphim=".$idphim;
                ?>

                    <div class="movie movie--preview movie--full release">
                        <div class="col-sm-3 col-md-2 col-lg-2">
                                <div class="movie__images">
                                    <img alt='' src="<?php echo $hinh; ?>">
                                </div>
                        </div>

                        <div class="col-sm-9 col-md-10 col-lg-10 movie__about">
                                <a href='movie-page-full.html' class="movie__title link--huge"><?php echo $tenphim; ?></a>

                                <p class="movie__time"><?php echo $thoiluong; ?></p>

                                <p class="movie__option"><strong>Quốc gia: </strong><a href="#"><?php echo $quocgia; ?></a></p>
                                <p class="movie__option"><strong>Thể loại: </strong><a href="#"><?php echo $theloai; ?></a></p>
                                <p class="movie__option"><strong>Ngày phát hành: </strong><?php echo $nam; ?></p>
                                <p class="movie__option"><strong>Tác giả: </strong><a href="#"><?php echo $tacgia; ?></a></p>
                                <p class="movie__option"><strong>Diễn viên: </strong><a href="#">Robert De Niro</a>, <a href="#">Michael Douglas</a>, <a href="#">Morgan Freeman</a>, <a href="#">Kevin Kline</a>, <a href="#">...</a></p>
                                <p class="movie__option"><strong>Giới hạn độ tuổi: </strong><a href="#">13</a></p>

                                <div class="movie__btns">
                                    <a href="<?php echo $link; ?>" class="btn btn-md btn--warning">Đặt vé xem phim</a>
                                </div>
                        </div>

                        <div class="clearfix"></div>
                        
                    </div>
                <?php } ?><br><br>
                <!-- end movie preview item -->

                <!-- Movie preview item -->
                    <!-- <div class="movie movie--preview movie--full comments">
                        <div class="col-sm-3 col-md-2 col-lg-2">
                                <div class="movie__images">
                                    <img alt='' src="images/movie/movie-sample2.jpg">
                                </div>
                        </div>

                        <div class="col-sm-9 col-md-10 col-lg-10 movie__about">
                                <a href='movie-page-full.html' class="movie__title link--huge">The Book Thief (2013) </a>

                                <p class="movie__time">125 min</p>

                                <p class="movie__option"><strong>Country: </strong><a href="#">USA</a></p>
                                <p class="movie__option"><strong>Category: </strong><a href="#">Drama</a>, <a href="#">War</a></p>
                                <p class="movie__option"><strong>Release date: </strong>November 8, 2013</p>
                                <p class="movie__option"><strong>Director: </strong><a href="#">Brian Percival</a></p>
                                <p class="movie__option"><strong>Actors: </strong><a href="#">Sophie Nélisse</a>, <a href="#">Geoffrey Rush</a>, <a href="#">Emily Watson</a>, <a href="#">Ben Schnetzer</a>, <a href="#">Nico Liersch</a>, <a href="#"> Joachim Paul Assböck</a>, <a href="#">Kirsten Block</a>, <a href="#">Nico Liersch</a> <a href="#">...</a></p>
                                <p class="movie__option"><strong>Age restriction: </strong><a href="#">13</a></p>

                                <div class="movie__btns">
                                    <a href="#" class="btn btn-md btn--warning">Đặt vé xem phim</a>
                                    <a href="#" class="watchlist">Thêm giỏ hàng</a>
                                </div>
                        </div>

                        <div class="clearfix"></div>

                    </div> -->
                <!-- end movie preview item -->

                <!-- Movie preview item -->
                    <!-- <div class="movie movie--preview movie--full release">
                        <div class="col-sm-3 col-md-2 col-lg-2">
                                <div class="movie__images">
                                    <img alt='' src="images/movie/movie-sample3.jpg">
                                </div>
                        </div>

                        <div class="col-sm-9 col-md-10 col-lg-10 movie__about">
                                <a href='movie-page-full.html' class="movie__title link--huge">Thor: The Dark World 3D (2013)</a>

                                <p class="movie__time">112 min</p>

                                <p class="movie__option"><strong>Country: </strong><a href="#">USA</a></p>
                                <p class="movie__option"><strong>Category: </strong><a href="#">Action</a>, <a href="#">Adventure</a>, <a href="#">Fantazy</a></p>
                                <p class="movie__option"><strong>Release date: </strong>November 8, 2013</p>
                                <p class="movie__option"><strong>Director: </strong><a href="#">Alan Taylor</a></p>
                                <p class="movie__option"><strong>Actors: </strong><a href="#">Chris Hemsworth</a>, <a href="#">Natalie Portman</a>, <a href="#">Tom Hiddleston</a>, <a href="#">Stellan Skarsgård</a>, <a href="#">Idris Elba</a>, <a href="#">Christopher Eccleston</a>, <a href="#">Adewale Akinnuoye-Agbaje</a> <a href="#">...</a></p>
                                <p class="movie__option"><strong>Age restriction: </strong><a href="#">13</a></p>

                                <div class="movie__btns">
                                    <a href="#" class="btn btn-md btn--warning">Đặt vé xem phim</a>
                                    <a href="#" class="watchlist">Thêm giỏ hàng</a>
                                </div>
                        </div>

                        <div class="clearfix"></div>
                    </div> -->
                <!-- end movie preview item -->

                <!-- Movie preview item -->
                    <!-- <div class="movie movie--preview movie--full popularity">
                        <div class="col-sm-3 col-md-2 col-lg-2">
                                <div class="movie__images">
                                    <img alt='' src="images/movie/movie-sample4.jpg">
                                </div>
                        </div>

                        <div class="col-sm-9 col-md-10 col-lg-10 movie__about">
                                <a href='movie-page-full.html' class="movie__title link--huge">The Counselor (2013)</a>

                                <p class="movie__time">117 min</p>

                                <p class="movie__option"><strong>Country: </strong><a href="#">USA</a></p>
                                <p class="movie__option"><strong>Category: </strong><a href="#">Crime</a>, <a href="#">Drama</a>, <a href="#">Thriller</a></p>
                                <p class="movie__option"><strong>Release date: </strong>October 25, 2013</p>
                                <p class="movie__option"><strong>Director: </strong><a href="#">Ridley Scott</a></p>
                                <p class="movie__option"><strong>Actors: </strong><a href="#">Michael Fassbender</a>, <a href="#">Penélope Cruz</a>, <a href="#">Cameron Diaz</a>, <a href="#">Javier Bardem</a>, <a href="#">Cesar Aguirre</a>, <a href="#">Daniel Holguín</a>, <a href="#">Christopher Obi</a>, <a href="#">Bruno Ganz</a>, <a href="#">Brad Pitt</a> <a href="#">...</a></p>
                                <p class="movie__option"><strong>Age restriction: </strong><a href="#">13</a></p>

                                <div class="movie__btns">
                                    <a href="#" class="btn btn-md btn--warning">Đặt vé xem phim</a>
                                    <a href="#" class="watchlist">Thêm giỏ hàng</a>
                                </div>
                        </div>

                        <div class="clearfix"></div>
                    </div> -->
                <!-- end movie preview item -->

                <!-- Movie preview item -->
                    <!-- <div class="movie movie--preview movie--full ending">
                        <div class="col-sm-3 col-md-2 col-lg-2">
                                <div class="movie__images">
                                    <img alt='' src="images/movie/movie-sample5.jpg">
                                </div>
                        </div>

                        <div class="col-sm-9 col-md-10 col-lg-10 movie__about">
                                <a href='movie-page-full.html' class="movie__title link--huge">Bad Grandpa (2013) </a>

                                <p class="movie__time">92 min</p>

                                <p class="movie__option"><strong>Country: </strong> <a href="#">USA</a></p>
                                <p class="movie__option"><strong>Category: </strong><a href="#">Comedy</a></p>
                                <p class="movie__option"><strong>Release date: </strong>October 25, 2013</p>
                                <p class="movie__option"><strong>Director: </strong><a href="#">Jeff Tremaine</a></p>
                                <p class="movie__option"><strong>Actors: </strong><a href="#">Johnny Knoxville</a>, <a href="#">Jackson Nicoll</a>, <a href="#">Greg Harris</a>, <a href="#">Georgina Cates</a>, <a href="#">Kamber Hejlik</a>, <a href="#">Jill Kill</a>, <a href="#">Madison Davis</a> <a href="#">...</a></p> 
                                <p class="movie__option"><strong>Age restriction: </strong><a href="#">none</a></p>

                                <div class="movie__btns">
                                    <a href="#" class="btn btn-md btn--warning">Đặt vé xem phim</a>
                                    <a href="#" class="watchlist">Thêm giỏ hàng</a>
                                </div>
                        </div>

                        <div class="clearfix"></div>
                    </div> -->
                <!-- end movie preview item -->

                <!-- Movie preview item -->
                    <!-- <div class="movie movie--preview movie--full popularity">
                        <div class="col-sm-3 col-md-2 col-lg-2">
                                <div class="movie__images">
                                    <img alt='' src="images/movie/movie-sample6.jpg">
                                </div>
                        </div>

                        <div class="col-sm-9 col-md-10 col-lg-10 movie__about">
                                <a href='movie-page-full.html' class="movie__title link--huge">Cloudy with a Chance of Meatballs 2 3D (2013)</a>

                                <p class="movie__time">95 min</p>

                                <p class="movie__option"><strong>Country: </strong><a href="#">USA</a></p>
                                <p class="movie__option"><strong>Category: </strong><a href="#">Animation</a>, <a href="#">Comedt</a>, <a href="#">Family</a></p>
                                <p class="movie__option"><strong>Release date: </strong>September 27, 2013</p>
                                <p class="movie__option"><strong>Director: </strong><a href="#">Alan Taylor</a></p>
                                <p class="movie__option"><strong>Actors: </strong><a href="#">Bill Hader</a>, <a href="#">Anna Faris</a>, <a href="#">Will Forte</a>, <a href="#">Andy Samberg</a>, <a href="#">Benjamin Bratt</a>, <a href="#">Neil Patrick Harris</a> <a href="#">...</a></p>

                                <p class="movie__option"><strong>Age restriction: </strong><a href="#">none</a></p>

                                <div class="movie__btns">
                                    <a href="#" class="btn btn-md btn--warning">Đặt vé xem phim</a>
                                    <a href="#" class="watchlist">Thêm giỏ hàng</a>
                                </div>
                        </div>

                        <div class="clearfix"></div>
                    </div> -->
                <!-- end movie preview item -->

                <!-- Movie preview item -->
                    <!-- <div class="movie movie--preview movie--full comments">
                     <div class="col-sm-3 col-md-2 col-lg-2">
                            <div class="movie__images">
                                <img alt='' src="images/movie/movie-sample7.jpg">
                            </div>
                    </div>

                    <div class="col-sm-9 col-md-10 col-lg-10 movie__about">
                            <a href='movie-page-full.html' class="movie__title link--huge">Prisoners (2013)</a>

                            <p class="movie__time">153 min</p>

                            <p class="movie__option"><strong>Country: </strong><a href="#">USA</a></p>
                            <p class="movie__option"><strong>Category: </strong><a href="#">Crime</a>, <a href="#">Drama</a>, <a href="#">Thriller</a></p>
                            <p class="movie__option"><strong>Release date: </strong>September 20, 2013</p>
                            <p class="movie__option"><strong>Director: </strong><a href="#">Alan Taylor</a></p>
                            <p class="movie__option"><strong>Actors: </strong><a href="#">Hugh Jackman</a>, <a href="#">Jake Gyllenhaal</a>, <a href="#">Viola Davis</a>, <a href="#">Maria Bello</a>, <a href="#">Terrence Howard</a>, <a href="#">Melissa Leo</a>, <a href="#">Paul Dano</a>, <a href="#">Maria Bello</a>, <a href="#">Viola Davis</a> <a href="#">...</a></p>
                            <p class="movie__option"><strong>Age restriction: </strong><a href="#">13</a></p>

                           <div class="movie__btns">
                                <a href="#" class="btn btn-md btn--warning">Đặt vé xem phim</a>
                                <a href="#" class="watchlist">Thêm giỏ hàng</a>
                            </div>
                    </div>

                    <div class="clearfix"></div>
                 </div> -->
                <!-- end movie preview item -->

                <!-- Movie preview item -->
                    <!-- <div class="movie movie--preview movie--full ending">
                        <div class="col-sm-3 col-md-2 col-lg-2">
                                <div class="movie__images">
                                    <img alt='' src="images/movie/movie-sample8.jpg">
                                </div>
                        </div>

                        <div class="col-sm-9 col-md-10 col-lg-10 movie__about">
                                <a href='movie-page-full.html' class="movie__title link--huge">The Fifth Estate (2013)</a>

                                <p class="movie__time">128 min</p>

                                <p class="movie__option"><strong>Country: </strong><a href="#">USA</a></p>
                                <p class="movie__option"><strong>Category: </strong><a href="#">Action</a>, <a href="#">Adventure</a>, <a href="#">Fantazy</a></p>
                                <p class="movie__option"><strong>Release date: </strong>November 8, 2013</p>
                                <p class="movie__option"><strong>Director: </strong><a href="#">Alan Taylor</a></p>
                                <p class="movie__option"><strong>Actors: </strong><a href="#">Chris Hemsworth</a>, <a href="#">Natalie Portman</a>, <a href="#">Tom Hiddleston</a>, <a href="#">Stellan Skarsgård</a>, <a href="#">Idris Elba</a>, <a href="#">Christopher Eccleston</a>, <a href="#">Adewale Akinnuoye-Agbaje</a> <a href="#">...</a></p>
                                <p class="movie__option"><strong>Age restriction: </strong><a href="#">13</a></p>

                                <div class="movie__btns">
                                    <a href="#" class="btn btn-md btn--warning">Đặt vé xem phim</a>
                                    <a href="#" class="watchlist">Thêm giỏ hàng</a>
                                </div>
                        </div>

                        <div class="clearfix"></div>
                    </div> -->
                <!-- end movie preview item -->

                <!-- Movie preview item -->
                    <!-- <div class="movie movie--preview movie--full popularity ending">
                        <div class="col-sm-3 col-md-2 col-lg-2">
                                <div class="movie__images">
                                    <img alt='' src="images/movie/movie-sample9.jpg">
                                </div>
                        </div>

                        <div class="col-sm-9 col-md-10 col-lg-10 movie__about">
                                <a href='movie-page-full.html' class="movie__title link--huge">Runner Runner (2013)</a>

                                <p class="movie__time">91 min</p>

                                <p class="movie__option"><strong>Country: </strong><a href="#">USA</a></p>
                                <p class="movie__option"><strong>Category: </strong><a href="#">Action</a>, <a href="#">Adventure</a>, <a href="#">Fantazy</a></p>
                                <p class="movie__option"><strong>Release date: </strong>November 8, 2013</p>
                                <p class="movie__option"><strong>Director: </strong><a href="#">Alan Taylor</a></p>
                                <p class="movie__option"><strong>Actors: </strong><a href="#">Chris Hemsworth</a>, <a href="#">Natalie Portman</a>, <a href="#">Tom Hiddleston</a>, <a href="#">Stellan Skarsgård</a>, <a href="#">Idris Elba</a>, <a href="#">Christopher Eccleston</a>, <a href="#">Adewale Akinnuoye-Agbaje</a> <a href="#">...</a></p>
                                <p class="movie__option"><strong>Age restriction: </strong><a href="#">13</a></p>

                                <div class="movie__btns">
                                    <a href="#" class="btn btn-md btn--warning">Đặt vé xem phim</a>
                                    <a href="#" class="watchlist">Thêm giỏ hàng</a>
                                </div>
                        </div>

                        <div class="clearfix"></div>
                    </div> -->
                <!-- end movie preview item -->

                <!-- Movie preview item -->
                    <!-- <div class="movie movie--preview movie--full comments">
                        <div class="col-sm-3 col-md-2 col-lg-2">
                                <div class="movie__images">
                                    <img alt='' src="images/movie/movie-sample10.jpg">
                                </div>
                        </div>

                        <div class="col-sm-9 col-md-10 col-lg-10 movie__about">
                                <a href='movie-page-full.html' class="movie__title link--huge">Free Birds (2013)</a>

                                <p class="movie__time">91 min</p>

                                <p class="movie__option"><strong>Country: </strong><a href="#">USA</a></p>
                                <p class="movie__option"><strong>Category: </strong><a href="#">Action</a>, <a href="#">Adventure</a>, <a href="#">Fantazy</a></p>
                                <p class="movie__option"><strong>Release date: </strong>November 8, 2013</p>
                                <p class="movie__option"><strong>Director: </strong><a href="#">Alan Taylor</a></p>
                                <p class="movie__option"><strong>Actors: </strong><a href="#">Chris Hemsworth</a>, <a href="#">Natalie Portman</a>, <a href="#">Tom Hiddleston</a>, <a href="#">Stellan Skarsgård</a>, <a href="#">Idris Elba</a>, <a href="#">Christopher Eccleston</a>, <a href="#">Adewale Akinnuoye-Agbaje</a> <a href="#">...</a></p>
                                <p class="movie__option"><strong>Age restriction: </strong><a href="#">13</a></p>

                                <div class="movie__btns">
                                    <a href="#" class="btn btn-md btn--warning">Đặt vé xem phim</a>
                                    <a href="#" class="watchlist">Thêm giỏ hàng</a>
                                </div>
                        </div>

                        <div class="clearfix"></div>
                    </div> -->

                <!-- end movie preview item -->
                <!-- <div class="coloum-wrapper">
                    <div class="pagination paginatioon--full">
                            <a href='#' class="pagination__prev">prev</a>
                            <a href='#' class="pagination__next">next</a>
                    </div>
                </div> -->

            </div>

        </section>
        
        <div class="clearfix"></div>

