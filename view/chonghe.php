<br><br><br><br><br>
<?php 
    // Ẩn thông báo lỗi
    // error_reporting(0);
    // ini_set('display_errors', 0);
?>
        
        <!-- Main content -->
        <div class="place-form-area">
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
                    <div class="order-step first--step order-step--disable ">1. Cái gì , ở đâu &amp; khi nào</div>
                    <div class="order-step second--step">2. Chọn chỗ ngồi</div>
                </div>
            
            <div class="choose-sits">
                <div class="choose-sits__info choose-sits__info--first">
                    <ul>
                        <li class="sits-price marker--none"><strong>Giá</strong></li>
                        <li class="sits-price sits-price--cheap">25.000đ</li>
                        <li class="sits-price sits-price--middle">30.000đ</li>
                        <li class="sits-price sits-price--expensive">50.000đ</li>
                    </ul>
                </div>

                <div class="choose-sits__info">
                    <ul>
                        <li class="sits-state sits-state--not">Không có sẵn</li>
                        <li class="sits-state sits-state--your">Lựa chọn của bạn</li>
                    </ul>
                </div>
                
                <div class="col-sm-12 col-lg-10 col-lg-offset-1">
                <div class="sits-area hidden-xs">
                    <div class="sits-anchor">screen</div>

                    <div class="sits">
                        <aside class="sits__line">
                            <span class="sits__indecator">A</span>
                            <span class="sits__indecator">B</span>
                            <span class="sits__indecator">C</span>
                            <span class="sits__indecator">D</span>
                            <span class="sits__indecator">E</span>
                            <span class="sits__indecator">F</span>
                            <span class="sits__indecator">G</span>
                            <span class="sits__indecator">I</span>
                            <span class="sits__indecator additional-margin">J</span>
                            <span class="sits__indecator">K</span>
                            <span class="sits__indecator">L</span>
                        </aside>
                        <div class="sits__row additional-margin" id="seatRow">
                            <div class="sits__row">
                                <?php
                                    $start = 2;
                                    $end = 17;
                                    $price = 10;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'A' . $i;
                                        $class = ($loadghe[$seat] == 0 ) ? 'sits__place sits-price--cheap' : 'sits__place sits-price--cheap sits-state--not';
                                        echo '<span class="' . $class . ' span" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>
                            
                            <div class="sits__row">                               
                               <?php
                                    $start = 1;
                                    $end = 18;
                                    $price = 10;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'B' . $i;
                                        $class = ($loadghe[$seat] == 0) ? 'sits__place sits-price--cheap' : 'sits__place sits-price--cheap sits-state--not';
                                        echo '<span class="' . $class . ' span" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>

                            <div class="sits__row">
                                <?php
                                    $start = 1;
                                    $end = 18;
                                    $price = 10;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'C' . $i;
                                        $class = ($loadghe[$seat] == 0) ? 'sits__place sits-price--cheap' : 'sits__place sits-price--cheap sits-state--not';
                                        echo '<span class="' . $class . ' span" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>

                            <div class="sits__row">
                                <?php
                                    $start = 1;
                                    $end = 18;
                                    $price = 10;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'D' . $i;
                                        $class = ($loadghe[$seat] == 0) ? 'sits__place sits-price--cheap' : 'sits__place sits-price--cheap sits-state--not';
                                        echo '<span class="' . $class . ' span" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>

                            <div class="sits__row">                               
                                <?php
                                    $start = 1;
                                    $end = 18;
                                    $price = 20;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'E' . $i;
                                        $class = ($loadghe[$seat] == 0) ? 'sits__place sits-price--middle' : 'sits__place sits-price--middle sits-state--not';
                                        echo '<span class="' . $class . ' span" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>

                            <div class="sits__row">                              
                                <?php
                                    $start = 1;
                                    $end = 18;
                                    $price = 20;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'F' . $i;
                                        $class = ($loadghe[$seat] == 0) ? 'sits__place sits-price--middle' : 'sits__place sits-price--middle sits-state--not';
                                        echo '<span class="' . $class . ' span" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>

                            <div class="sits__row">
                                <?php
                                    $start = 1;
                                    $end = 18;
                                    $price = 20;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'G' . $i;
                                        $class = ($loadghe[$seat] == 0) ? 'sits__place sits-price--middle' : 'sits__place sits-price--middle sits-state--not';
                                        echo '<span class="' . $class . ' span" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>

                            <div class="sits__row"> 
                                <?php
                                    $start = 3;
                                    $end = 16;
                                    $price = 20;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'I' . $i;
                                        $class = ($loadghe[$seat] == 0) ? 'sits__place sits-price--middle' : 'sits__place sits-price--middle sits-state--not';
                                        echo '<span class="' . $class . ' span" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>

                            <div class="sits__row additional-margin">
                                <?php
                                    $start = 5;
                                    $end = 14;
                                    $price = 30;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'J' . $i;
                                        $class = ($loadghe[$seat] == 0) ? 'sits__place sits-price--expensive' : 'sits__place sits-price--expensive sits-state--not';
                                        echo '<span class="' . $class . ' span" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>

                            <div class="sits__row">
                                <?php
                                    $start = 5;
                                    $end = 14;
                                    $price = 30;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'K' . $i;
                                        $class = ($loadghe[$seat] == 0) ? 'sits__place sits-price--expensive' : 'sits__place sits-price--expensive sits-state--not';
                                        echo '<span class="' . $class . ' span" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>

                            <div class="sits__row">
                                <?php
                                    $start = 6;
                                    $end = 13;
                                    $price = 30;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'L' . $i;
                                        $class = ($loadghe[$seat] == 0) ? 'sits__place sits-price--expensive' : 'sits__place sits-price--expensive sits-state--not';
                                        echo '<span class="' . $class . ' span" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>
                        </div>

                        <aside class="sits__checked">
                            <div class="checked-place">
                                
                            </div>
                            <div class="checked-result">
                                0đ
                            </div>
                        </aside>
                        <footer class="sits__number">
                            <span class="sits__indecator">1</span>
                            <span class="sits__indecator">2</span>
                            <span class="sits__indecator">3</span>
                            <span class="sits__indecator">4</span>
                            <span class="sits__indecator">5</span>
                            <span class="sits__indecator">6</span>
                            <span class="sits__indecator">7</span>
                            <span class="sits__indecator">8</span>
                            <span class="sits__indecator">9</span>
                            <span class="sits__indecator">10</span>
                            <span class="sits__indecator">11</span>
                            <span class="sits__indecator">12</span>
                            <span class="sits__indecator">13</span>
                            <span class="sits__indecator">14</span>
                            <span class="sits__indecator">15</span>
                            <span class="sits__indecator">16</span>
                            <span class="sits__indecator">17</span>
                            <span class="sits__indecator">18</span>
                        </footer>
                    </div>
                </div>
            </div>
                
            <div class="col-sm-12 visible-xs"> 
                <div class="sits-area--mobile">
                    <div class="sits-area--mobile-wrap">
                        <div class="sits-select">
                            <select name="sorting_item" class="sits__sort sit-row" tabindex="0">
                                    <option value="1" selected='selected'>A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>
                                    <option value="4">D</option>
                                    <option value="5">E</option>
                                    <option value="6">F</option>
                                    <option value="7">G</option>
                                    <option value="8">I</option>
                                    <option value="9">J</option>
                                    <option value="10">K</option>
                                    <option value="11">L</option>
                            </select>
 
                            <select name="sorting_item" class="sits__sort sit-number" tabindex="1">
                                    <option value="1" selected='selected'>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                            </select>

                            <a href="#" class="btn btn-md btn--warning toogle-sits">Choose sit</a>
                        </div>
                    </div>

                    <a href="#" class="watchlist add-sits-line">Add new sit</a>

                    <aside class="sits__checked">
                            <div class="checked-place">
                                <span class="choosen-place"></span>
                            </div>
                            <div class="checked-result">
                                0đ
                            </div>
                    </aside>

                    <img alt="" src="images/components/sits_mobile.png">
                </div>
            </div>   
                
            </div>

            </div>
        </section>
        </div>
        
       
        <div class="clearfix"></div>

        <!-- <form id='film-and-time' class="booking-form" method='get' action='https://amovie.gozha.net/book3-buy.html'> -->
            <form id='film-and-time' method='POST' action='index.php?act=chonghe&idphim=<?php echo $idphim; ?>&iduser=<?php echo $iduser; ?>' >
    
            <!-- <input type='text' name='choosen-number' class="choosen-number"> -->
            
            <input type='text' name='ghe1' class="choosen-number--cheap hidden-input">
            <input type='text' name='ghe2' class="choosen-number--middle hidden-input">
            <input type='text' name='ghe3' class="choosen-number--expansive hidden-input">
            <input type='text' name='tong' class="choosen-cost hidden-input">
            <input type='text' name='tenghe' class="choosen-sits hidden-input"> 

            <br>
            <div id="inputContainer" class="allinput"><br>
                <!-- Các ô input sẽ được thêm vào đây -->
                <input type='text' name='A2' value='0' readonly class="hidden-input input">
                <input type='text' name='A3' value='0' readonly class="hidden-input input">
                <input type='text' name='A4' value='0' readonly class="hidden-input input">
                <input type='text' name='A5' value='0' readonly class="hidden-input input">
                <input type='text' name='A6' value='0' readonly class="hidden-input input">
                <input type='text' name='A7' value='0' readonly class="hidden-input input">
                <input type='text' name='A8' value='0' readonly class="hidden-input input">
                <input type='text' name='A9' value='0' readonly class="hidden-input input">
                <input type='text' name='A10' value='0' readonly class="hidden-input input">
                <input type='text' name='A11' value='0' readonly class="hidden-input input">
                <input type='text' name='A12' value='0' readonly class="hidden-input input">
                <input type='text' name='A13' value='0' readonly class="hidden-input input">
                <input type='text' name='A14' value='0' readonly class="hidden-input input">
                <input type='text' name='A15' value='0' readonly class="hidden-input input">
                <input type='text' name='A16' value='0' readonly class="hidden-input input">
                <input type='text' name='A17' value='0' readonly class="hidden-input input">

                <input type='text' name='B1' value='0' readonly class="hidden-input input">
                <input type='text' name='B2' value='0' readonly class="hidden-input input">
                <input type='text' name='B3' value='0' readonly class="hidden-input input">
                <input type='text' name='B4' value='0' readonly class="hidden-input input">
                <input type='text' name='B5' value='0' readonly class="hidden-input input">
                <input type='text' name='B6' value='0' readonly class="hidden-input input">
                <input type='text' name='B7' value='0' readonly class="hidden-input input">
                <input type='text' name='B8' value='0' readonly class="hidden-input input">
                <input type='text' name='B9' value='0' readonly class="hidden-input input">
                <input type='text' name='B10' value='0' readonly class="hidden-input input">
                <input type='text' name='B11' value='0' readonly class="hidden-input input">
                <input type='text' name='B12' value='0' readonly class="hidden-input input">
                <input type='text' name='B13' value='0' readonly class="hidden-input input">
                <input type='text' name='B14' value='0' readonly class="hidden-input input">
                <input type='text' name='B15' value='0' readonly class="hidden-input input">
                <input type='text' name='B16' value='0' readonly class="hidden-input input">
                <input type='text' name='B17' value='0' readonly class="hidden-input input">
                <input type='text' name='B18' value='0' readonly class="hidden-input input">

                <input type='text' name='C1' value='0' readonly class="hidden-input input">
                <input type='text' name='C2' value='0' readonly class="hidden-input input">
                <input type='text' name='C3' value='0' readonly class="hidden-input input">
                <input type='text' name='C4' value='0' readonly class="hidden-input input">
                <input type='text' name='C5' value='0' readonly class="hidden-input input">
                <input type='text' name='C6' value='0' readonly class="hidden-input input">
                <input type='text' name='C7' value='0' readonly class="hidden-input input">
                <input type='text' name='C8' value='0' readonly class="hidden-input input">
                <input type='text' name='C9' value='0' readonly class="hidden-input input">
                <input type='text' name='C10' value='0' readonly class="hidden-input input">
                <input type='text' name='C11' value='0' readonly class="hidden-input input">
                <input type='text' name='C12' value='0' readonly class="hidden-input input">
                <input type='text' name='C13' value='0' readonly class="hidden-input input">
                <input type='text' name='C14' value='0' readonly class="hidden-input input">
                <input type='text' name='C15' value='0' readonly class="hidden-input input">
                <input type='text' name='C16' value='0' readonly class="hidden-input input">
                <input type='text' name='C17' value='0' readonly class="hidden-input input">
                <input type='text' name='C18' value='0' readonly class="hidden-input input">

                <input type='text' name='D1' value='0' readonly class="hidden-input input">
                <input type='text' name='D2' value='0' readonly class="hidden-input input">
                <input type='text' name='D3' value='0' readonly class="hidden-input input">
                <input type='text' name='D4' value='0' readonly class="hidden-input input">
                <input type='text' name='D5' value='0' readonly class="hidden-input input">
                <input type='text' name='D6' value='0' readonly class="hidden-input input">
                <input type='text' name='D7' value='0' readonly class="hidden-input input">
                <input type='text' name='D8' value='0' readonly class="hidden-input input">
                <input type='text' name='D9' value='0' readonly class="hidden-input input">
                <input type='text' name='D10' value='0' readonly class="hidden-input input">
                <input type='text' name='D11' value='0' readonly class="hidden-input input">
                <input type='text' name='D12' value='0' readonly class="hidden-input input">
                <input type='text' name='D13' value='0' readonly class="hidden-input input">
                <input type='text' name='D14' value='0' readonly class="hidden-input input">
                <input type='text' name='D15' value='0' readonly class="hidden-input input">
                <input type='text' name='D16' value='0' readonly class="hidden-input input">
                <input type='text' name='D17' value='0' readonly class="hidden-input input">
                <input type='text' name='D18' value='0' readonly class="hidden-input input">
                
                <input type='text' name='E1' value='0' readonly class="hidden-input input">
                <input type='text' name='E2' value='0' readonly class="hidden-input input">
                <input type='text' name='E3' value='0' readonly class="hidden-input input">
                <input type='text' name='E4' value='0' readonly class="hidden-input input">
                <input type='text' name='E5' value='0' readonly class="hidden-input input">
                <input type='text' name='E6' value='0' readonly class="hidden-input input">
                <input type='text' name='E7' value='0' readonly class="hidden-input input">
                <input type='text' name='E8' value='0' readonly class="hidden-input input">
                <input type='text' name='E9' value='0' readonly class="hidden-input input">
                <input type='text' name='E10' value='0' readonly class="hidden-input input">
                <input type='text' name='E11' value='0' readonly class="hidden-input input">
                <input type='text' name='E12' value='0' readonly class="hidden-input input">
                <input type='text' name='E13' value='0' readonly class="hidden-input input">
                <input type='text' name='E14' value='0' readonly class="hidden-input input">
                <input type='text' name='E15' value='0' readonly class="hidden-input input">
                <input type='text' name='E16' value='0' readonly class="hidden-input input">
                <input type='text' name='E17' value='0' readonly class="hidden-input input">
                <input type='text' name='E18' value='0' readonly class="hidden-input input">

                <input type='text' name='F1' value='0' readonly class="hidden-input input">
                <input type='text' name='F2' value='0' readonly class="hidden-input input">
                <input type='text' name='F3' value='0' readonly class="hidden-input input">
                <input type='text' name='F4' value='0' readonly class="hidden-input input">
                <input type='text' name='F5' value='0' readonly class="hidden-input input">
                <input type='text' name='F6' value='0' readonly class="hidden-input input">
                <input type='text' name='F7' value='0' readonly class="hidden-input input">
                <input type='text' name='F8' value='0' readonly class="hidden-input input">
                <input type='text' name='F9' value='0' readonly class="hidden-input input">
                <input type='text' name='F10' value='0' readonly class="hidden-input input">
                <input type='text' name='F11' value='0' readonly class="hidden-input input">
                <input type='text' name='F12' value='0' readonly class="hidden-input input">
                <input type='text' name='F13' value='0' readonly class="hidden-input input">
                <input type='text' name='F14' value='0' readonly class="hidden-input input">
                <input type='text' name='F15' value='0' readonly class="hidden-input input">
                <input type='text' name='F16' value='0' readonly class="hidden-input input">
                <input type='text' name='F17' value='0' readonly class="hidden-input input">
                <input type='text' name='F18' value='0' readonly class="hidden-input input">

                <input type='text' name='G1' value='0' readonly class="hidden-input input">
                <input type='text' name='G2' value='0' readonly class="hidden-input input">
                <input type='text' name='G3' value='0' readonly class="hidden-input input">
                <input type='text' name='G4' value='0' readonly class="hidden-input input">
                <input type='text' name='G5' value='0' readonly class="hidden-input input">
                <input type='text' name='G6' value='0' readonly class="hidden-input input">
                <input type='text' name='G7' value='0' readonly class="hidden-input input">
                <input type='text' name='G8' value='0' readonly class="hidden-input input">
                <input type='text' name='G9' value='0' readonly class="hidden-input input">
                <input type='text' name='G10' value='0' readonly class="hidden-input input">
                <input type='text' name='G11' value='0' readonly class="hidden-input input">
                <input type='text' name='G12' value='0' readonly class="hidden-input input">
                <input type='text' name='G13' value='0' readonly class="hidden-input input">
                <input type='text' name='G14' value='0' readonly class="hidden-input input">
                <input type='text' name='G15' value='0' readonl class="hidden-input input">
                <input type='text' name='G16' value='0' readonly class="hidden-input input">
                <input type='text' name='G17' value='0' readonly class="hidden-input input">
                <input type='text' name='G18' value='0' readonly class="hidden-input input">

                <input type='text' name='I3' value='0' readonly class="hidden-input input">
                <input type='text' name='I4' value='0' readonly class="hidden-input input">
                <input type='text' name='I5' value='0' readonly class="hidden-input input">
                <input type='text' name='I6' value='0' readonly class="hidden-input input">
                <input type='text' name='I7' value='0' readonly class="hidden-input input">
                <input type='text' name='I8' value='0' readonly class="hidden-input input">
                <input type='text' name='I9' value='0' readonly class="hidden-input input">
                <input type='text' name='I10' value='0' readonly class="hidden-input input">
                <input type='text' name='I11' value='0' readonly class="hidden-input input">
                <input type='text' name='I12' value='0' readonly class="hidden-input input">
                <input type='text' name='I13' value='0' readonly class="hidden-input input">
                <input type='text' name='I14' value='0' readonly class="hidden-input input">
                <input type='text' name='I15' value='0' readonly class="hidden-input input">
                <input type='text' name='I16' value='0' readonly class="hidden-input input">

                <input type='text' name='J5' value='0' readonly class="hidden-input input">
                <input type='text' name='J6' value='0' readonly class="hidden-input input">
                <input type='text' name='J7' value='0' readonly class="hidden-input input">
                <input type='text' name='J8' value='0' readonly class="hidden-input input">
                <input type='text' name='J9' value='0' readonly class="hidden-input input">
                <input type='text' name='J10' value='0' readonly class="hidden-input input">
                <input type='text' name='J11' value='0' readonly class="hidden-input input">
                <input type='text' name='J12' value='0' readonly class="hidden-input input">
                <input type='text' name='J13' value='0' readonly class="hidden-input input">
                <input type='text' name='J14' value='0' readonly class="hidden-input input">

                <input type='text' name='K5' value='0' readonly class="hidden-input input">
                <input type='text' name='K6' value='0' readonly class="hidden-input input">
                <input type='text' name='K7' value='0' readonly class="hidden-input input">
                <input type='text' name='K8' value='0' readonly class="hidden-input input">
                <input type='text' name='K9' value='0' readonly class="hidden-input input">
                <input type='text' name='K10' value='0' readonly class="hidden-input input">
                <input type='text' name='K11' value='0' readonly class="hidden-input input">
                <input type='text' name='K12' value='0' readonly class="hidden-input input">
                <input type='text' name='K13' value='0' readonly class="hidden-input input">
                <input type='text' name='K14' value='0' readonly class="hidden-input input">

                <input type='text' name='L6' value='0' readonly class="hidden-input input">
                <input type='text' name='L7' value='0' readonly class="hidden-input input">
                <input type='text' name='L8' value='0' readonly class="hidden-input input">
                <input type='text' name='L9' value='0' readonly class="hidden-input input">
                <input type='text' name='L10' value='0' readonly class="hidden-input input">
                <input type='text' name='L11' value='0' readonly class="hidden-input input">
                <input type='text' name='L12' value='0' readonly class="hidden-input input">
                <input type='text' name='L13' value='0' readonly class="hidden-input input">
            </div>
            
            <button type="submit" name="submit" value="gui" class="bt--chonghe" id="datVeButton">Xác nhận</button>


            <div class="booking-pagination booking-pagination--margin">
                    <a href="index.php?act=chongio&idphim=<?php echo $idphim; ?>&iduser=<?php echo $iduser; ?>" class="booking-pagination__prev">
                        <span class="arrow__text arrow--prev">prev step</span>
                        <span class="arrow__info">what&amp;where&amp;when</span>
                    </a>
                    <a href="index.php?act=thanhtoan&idphim=<?php echo $idphim; ?>&iduser=<?php echo $iduser; ?>" class="booking-pagination__next">
                        <span class="arrow__text arrow--next">next step</span>
                        <span class="arrow__info">checkout</span>
                    </a>
            </div>
        </form>
        <div class="clearfix"></div>
        
    <style>
       /* .hidden-input {
            display: none;
        } */
        .bt--chonghe{
            display: block;
            margin: 0 auto;
            background-color: #e74c3c;
            padding: 10px 20px;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
		
		<script type="text/javascript">
            $(document).ready(function() {
                init_BookingTwo();
            });
		</script>

</body>


<!-- Mirrored from amovie.gozha.net/book2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 12:59:07 GMT -->
</html>

        <?php
                if ($ketqua) {
                    $tenGheArray = array_column($ketqua, 'tenghe');
                    $chuoiTenGhe = implode(',', $tenGheArray);
                    // echo "Dữ liệu từ cột tenghe:\n";
                    // echo $chuoiTenGhe;
                } else {
                    echo "";
                }
                echo "</br>";

                // Xử lý chuỗi để loại bỏ khoảng trắng và giá trị trùng lặp
                $result = implode(',', array_unique(array_map('trim', explode(',', $chuoiTenGhe))));

                // Sửa lỗi: Xóa dấu phẩy trước giá trị 'B3'
                $result = str_replace(',B3', 'B3', $result);
                // echo $result;
                        
                $d = "$result";echo "</br>";

                // Chuyển chuỗi thành mảng, sử dụng dấu phẩy làm delimiter
                $arr1 = explode(',', $d);
                    
                // Loại bỏ giá trị trùng lặp
                $arr1 = array_unique($arr1);
        ?>

                <script>
                    // Sao chép mảng PHP sang JavaScript
                        var jsArray1 = <?php echo json_encode($arr1); ?>;
                        
                    // In ra mảng JavaScript trong console để kiểm tra
                        // document.write(jsArray1);

                    // Giả sử mảng của bạn là arr và danh sách các ô input là inputs
                    let inputs = document.querySelectorAll('input');

                    jsArray1.forEach(element => {
                    inputs.forEach(input => {
                        if (input.name === element) {
                        // Nếu tìm thấy ô input có name trùng với phần tử của mảng
                        // thiết lập giá trị của ô input bằng với name của nó
                        input.value = input.name;
                        }
                    });
                    });
                </script>
        <script>                
        const span = document.querySelectorAll(".span");
        const input = document.querySelectorAll(".input");

        span.forEach((item,index) => {
           let inputItem = input[index];
            console.log(inputItem)
           item.addEventListener("click", () => {
            if (inputItem.value === item.textContent) {
                inputItem.value = 0;
            }else {
                inputItem.value = item.textContent;
            }
           })
        })
    </script>




