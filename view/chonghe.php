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
                                <!-- <span class="sits__place sits-price--cheap" data-place='A2' data-price='10'>A2</span>
                                <span class="sits__place sits-price--cheap" data-place='A3' data-price='10'>A3</span>
                                <span class="sits__place sits-price--cheap" data-place='A4' data-price='10'>A4</span>
                                <span class="sits__place sits-price--cheap" data-place='A5' data-price='10'>A5</span>
                                <span class="sits__place sits-price--cheap" data-place='A6' data-price='10'>A6</span>
                                <span class="sits__place sits-price--cheap" data-place='A7' data-price='10'>A7</span>
                                <span class="sits__place sits-price--cheap" data-place='A8' data-price='10'>A8</span>
                                <span class="sits__place sits-price--cheap" data-place='A9' data-price='10'>A9</span>
                                <span class="sits__place sits-price--cheap" data-place='A10' data-price='10'>A10</span>
                                <span class="sits__place sits-price--cheap" data-place='A11' data-price='10'>A11</span>
                                <span class="sits__place sits-price--cheap" data-place='A12' data-price='10'>A12</span>
                                <span class="sits__place sits-price--cheap" data-place='A13' data-price='10'>A13</span>
                                <span class="sits__place sits-price--cheap" data-place='A14' data-price='10'>A14</span>
                                <span class="sits__place sits-price--cheap" data-place='A15' data-price='10'>A15</span>
                                <span class="sits__place sits-price--cheap" data-place='A16' data-price='10'>A16</span>
                                <span class="sits__place sits-price--cheap" data-place='A17' data-price='10'>A17</span> -->

                                <?php
                                    $start = 2;
                                    $end = 17;
                                    $price = 10;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'A' . $i;
                                        $class = ($loadghe[$seat] == 0 ) ? 'sits__place sits-price--cheap' : 'sits__place sits-price--cheap sits-state--not';
                                        echo '<span class="' . $class . '" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>
                            
                            <div class="sits__row">
                                <!-- <span class="sits__place sits-price--cheap" data-place='B1' data-price='10'>B1</span>
                                <span class="sits__place sits-price--cheap" data-place='B2' data-price='10'>B2</span>
                                <span class="sits__place sits-price--cheap" data-place='B3' data-price='10'>B3</span>
                                <span class="sits__place sits-price--cheap" data-place='B4' data-price='10'>B4</span>
                                <span class="sits__place sits-price--cheap" data-place='B5' data-price='10'>B5</span>
                                <span class="sits__place sits-price--cheap" data-place='B6' data-price='10'>B6</span>
                                <span class="sits__place sits-price--cheap" data-place='B7' data-price='10'>B7</span>
                                <span class="sits__place sits-price--cheap" data-place='B8' data-price='10'>B8</span>
                                <span class="sits__place sits-price--cheap" data-place='B9' data-price='10'>B9</span>
                                <span class="sits__place sits-price--cheap" data-place='B10' data-price='10'>B10</span>
                                <span class="sits__place sits-price--cheap" data-place='B11' data-price='10'>B11</span>
                                <span class="sits__place sits-price--cheap" data-place='B12' data-price='10'>B12</span>
                                <span class="sits__place sits-price--cheap" data-place='B13' data-price='10'>B13</span>
                                <span class="sits__place sits-price--cheap" data-place='B14' data-price='10'>B14</span>
                                <span class="sits__place sits-price--cheap" data-place='B15' data-price='10'>B15</span>
                                <span class="sits__place sits-price--cheap" data-place='B16' data-price='10'>B16</span>
                                <span class="sits__place sits-price--cheap" data-place='B17' data-price='10'>B17</span>
                                <span class="sits__place sits-price--cheap" data-place='B18' data-price='10'>B18</span> -->

                                <?php
                                    $start = 1;
                                    $end = 18;
                                    $price = 10;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'B' . $i;
                                        $class = ($loadghe[$seat] == 0) ? 'sits__place sits-price--cheap' : 'sits__place sits-price--cheap sits-state--not';
                                        echo '<span class="' . $class . '" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>

                            <div class="sits__row">
                                <!-- <span class="sits__place sits-price--cheap" data-place='C1' data-price='10'>C1</span>
                                <span class="sits__place sits-price--cheap" data-place='C2' data-price='10'>C2</span>
                                <span class="sits__place sits-price--cheap" data-place='C3' data-price='10'>C3</span>
                                <span class="sits__place sits-price--cheap" data-place='C4' data-price='10'>C4</span>
                                <span class="sits__place sits-price--cheap" data-place='C5' data-price='10'>C5</span>
                                <span class="sits__place sits-price--cheap" data-place='C6' data-price='10'>C6</span>
                                <span class="sits__place sits-price--cheap" data-place='C7' data-price='10'>C7</span>
                                <span class="sits__place sits-price--cheap" data-place='C8' data-price='10'>C8</span>
                                <span class="sits__place sits-price--cheap" data-place='C9' data-price='10'>C9</span>
                                <span class="sits__place sits-price--cheap" data-place='C10' data-price='10'>C10</span>
                                <span class="sits__place sits-price--cheap" data-place='C11' data-price='10'>C11</span>
                                <span class="sits__place sits-price--cheap" data-place='C12' data-price='10'>C12</span>
                                <span class="sits__place sits-price--cheap" data-place='C13' data-price='10'>C13</span>
                                <span class="sits__place sits-price--cheap" data-place='C14' data-price='10'>C14</span>
                                <span class="sits__place sits-price--cheap" data-place='C15' data-price='10'>C15</span>
                                <span class="sits__place sits-price--cheap" data-place='C16' data-price='10'>C16</span>
                                <span class="sits__place sits-price--cheap" data-place='C17' data-price='10'>C17</span>
                                <span class="sits__place sits-price--cheap" data-place='C18' data-price='10'>C18</span> -->

                                <?php
                                    $start = 1;
                                    $end = 18;
                                    $price = 10;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'C' . $i;
                                        $class = ($loadghe[$seat] == 0) ? 'sits__place sits-price--cheap' : 'sits__place sits-price--cheap sits-state--not';
                                        echo '<span class="' . $class . '" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>

                            <div class="sits__row">
                                <!-- <span class="sits__place sits-price--cheap" data-place='D1' data-price='10'>D1</span>
                                <span class="sits__place sits-price--cheap" data-place='D2' data-price='10'>D2</span>
                                <span class="sits__place sits-price--cheap" data-place='D3' data-price='10'>D3</span>
                                <span class="sits__place sits-price--cheap" data-place='D4' data-price='10'>D4</span>
                                <span class="sits__place sits-price--cheap" data-place='D5' data-price='10'>D5</span>
                                <span class="sits__place sits-price--cheap" data-place='D6' data-price='10'>D6</span>
                                <span class="sits__place sits-price--cheap sits-state--not" data-place='D7' data-price='10'>D7</span>
                                <span class="sits__place sits-price--cheap sits-state--not" data-place='D8' data-price='10'>D8</span>
                                <span class="sits__place sits-price--cheap" data-place='D9' data-price='10'>D9</span>
                                <span class="sits__place sits-price--cheap" data-place='D10' data-price='10'>D10</span>
                                <span class="sits__place sits-price--cheap" data-place='D11' data-price='10'>D11</span>
                                <span class="sits__place sits-price--cheap" data-place='D12' data-price='10'>D12</span>
                                <span class="sits__place sits-price--cheap" data-place='D13' data-price='10'>D13</span>
                                <span class="sits__place sits-price--cheap" data-place='D14' data-price='10'>D14</span>
                                <span class="sits__place sits-price--cheap" data-place='D15' data-price='10'>D15</span>
                                <span class="sits__place sits-price--cheap" data-place='D16' data-price='10'>D16</span>
                                <span class="sits__place sits-price--cheap" data-place='D17' data-price='10'>D17</span>
                                <span class="sits__place sits-price--cheap" data-place='D18' data-price='10'>D18</span> -->

                                <?php
                                    $start = 1;
                                    $end = 18;
                                    $price = 10;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'D' . $i;
                                        $class = ($loadghe[$seat] == 0) ? 'sits__place sits-price--cheap' : 'sits__place sits-price--cheap sits-state--not';
                                        echo '<span class="' . $class . '" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>

                            <div class="sits__row">
                                <!-- <span class="sits__place sits-price--middle" data-place='E1' data-price='20'>E1</span>
                                <span class="sits__place sits-price--middle" data-place='E2' data-price='20'>E2</span>
                                <span class="sits__place sits-price--middle" data-place='E3' data-price='20'>E3</span>
                                <span class="sits__place sits-price--middle" data-place='E4' data-price='20'>E4</span>
                                <span class="sits__place sits-price--middle" data-place='E5' data-price='20'>E5</span>
                                <span class="sits__place sits-price--middle" data-place='E6' data-price='20'>E6</span>
                                <span class="sits__place sits-price--middle" data-place='E7' data-price='20'>E7</span>
                                <span class="sits__place sits-price--middle" data-place='E8' data-price='20'>E8</span>
                                <span class="sits__place sits-price--middle" data-place='E9' data-price='20'>E9</span>
                                <span class="sits__place sits-price--middle" data-place='E10' data-price='20'>E10</span>
                                <span class="sits__place sits-price--middle" data-place='E11' data-price='20'>E11</span>
                                <span class="sits__place sits-price--middle" data-place='E12' data-price='20'>E12</span>
                                <span class="sits__place sits-price--middle" data-place='E13' data-price='20'>E13</span>
                                <span class="sits__place sits-price--middle" data-place='E14' data-price='20'>E14</span>
                                <span class="sits__place sits-price--middle" data-place='E15' data-price='20'>E15</span>
                                <span class="sits__place sits-price--middle" data-place='E16' data-price='20'>E16</span>
                                <span class="sits__place sits-price--middle" data-place='E17' data-price='20'>E17</span>
                                <span class="sits__place sits-price--middle" data-place='E18' data-price='20'>E18</span> -->

                                <?php
                                    $start = 1;
                                    $end = 18;
                                    $price = 20;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'E' . $i;
                                        $class = ($loadghe[$seat] == 0) ? 'sits__place sits-price--middle' : 'sits__place sits-price--middle sits-state--not';
                                        echo '<span class="' . $class . '" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>

                            <div class="sits__row">
                                <!-- <span class="sits__place sits-price--middle" data-place='F1' data-price='20'>F1</span>
                                <span class="sits__place sits-price--middle" data-place='F2' data-price='20'>F2</span>
                                <span class="sits__place sits-price--middle" data-place='F3' data-price='20'>F3</span>
                                <span class="sits__place sits-price--middle" data-place='F4' data-price='20'>F4</span>
                                <span class="sits__place sits-price--middle" data-place='F5' data-price='20'>F5</span>
                                <span class="sits__place sits-price--middle" data-place='F6' data-price='20'>F6</span>
                                <span class="sits__place sits-price--middle" data-place='F7' data-price='20'>F7</span>
                                <span class="sits__place sits-price--middle" data-place='F8' data-price='20'>F8</span>
                                <span class="sits__place sits-price--middle" data-place='F9' data-price='20'>F9</span>
                                <span class="sits__place sits-price--middle" data-place='F10' data-price='20'>F10</span>
                                <span class="sits__place sits-price--middle" data-place='F11' data-price='20'>F11</span>
                                <span class="sits__place sits-price--middle" data-place='F12' data-price='20'>F12</span>
                                <span class="sits__place sits-price--middle" data-place='F13' data-price='20'>F13</span>
                                <span class="sits__place sits-price--middle" data-place='F14' data-price='20'>F14</span>
                                <span class="sits__place sits-price--middle" data-place='F15' data-price='20'>F15</span>
                                <span class="sits__place sits-price--middle" data-place='F16' data-price='20'>F16</span>
                                <span class="sits__place sits-price--middle" data-place='F17' data-price='20'>F17</span>
                                <span class="sits__place sits-price--middle" data-place='F18' data-price='20'>F18</span> -->

                                <?php
                                    $start = 1;
                                    $end = 18;
                                    $price = 20;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'F' . $i;
                                        $class = ($loadghe[$seat] == 0) ? 'sits__place sits-price--middle' : 'sits__place sits-price--middle sits-state--not';
                                        echo '<span class="' . $class . '" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>

                            <div class="sits__row">
                                <!-- <span class="sits__place sits-price--middle" data-place='G1' data-price='20'>G1</span>
                                <span class="sits__place sits-price--middle" data-place='G2' data-price='20'>G2</span>
                                <span class="sits__place sits-price--middle" data-place='G3' data-price='20'>G3</span>
                                <span class="sits__place sits-price--middle" data-place='G4' data-price='20'>G4</span>
                                <span class="sits__place sits-price--middle" data-place='G5' data-price='20'>G5</span>
                                <span class="sits__place sits-price--middle" data-place='G6' data-price='20'>G6</span>
                                <span class="sits__place sits-price--middle" data-place='G7' data-price='20'>G7</span>
                                <span class="sits__place sits-price--middle" data-place='G8' data-price='20'>G8</span>
                                <span class="sits__place sits-price--middle" data-place='G9' data-price='20'>G9</span>
                                <span class="sits__place sits-price--middle" data-place='G10' data-price='20'>G10</span>
                                <span class="sits__place sits-price--middle" data-place='G11' data-price='20'>G11</span>
                                <span class="sits__place sits-price--middle" data-place='G12' data-price='20'>G12</span>
                                <span class="sits__place sits-price--middle" data-place='G13' data-price='20'>G13</span>
                                <span class="sits__place sits-price--middle" data-place='G14' data-price='20'>G14</span>
                                <span class="sits__place sits-price--middle" data-place='G15' data-price='20'>G15</span>
                                <span class="sits__place sits-price--middle" data-place='G16' data-price='20'>G16</span>
                                <span class="sits__place sits-price--middle" data-place='G17' data-price='20'>G17</span>
                                <span class="sits__place sits-price--middle" data-place='G18' data-price='20'>G18</span> -->

                                <?php
                                    $start = 1;
                                    $end = 18;
                                    $price = 20;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'G' . $i;
                                        $class = ($loadghe[$seat] == 0) ? 'sits__place sits-price--middle' : 'sits__place sits-price--middle sits-state--not';
                                        echo '<span class="' . $class . '" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>

                            <div class="sits__row">
                                <!-- <span class="sits__place sits-price--middle" data-place='I3' data-price='20'>I3</span>
                                <span class="sits__place sits-price--middle" data-place='I4' data-price='20'>I4</span>
                                <span class="sits__place sits-price--middle" data-place='I5' data-price='20'>I5</span>
                                <span class="sits__place sits-price--middle" data-place='I6' data-price='20'>I6</span>
                                <span class="sits__place sits-price--middle" data-place='I7' data-price='20'>I7</span>
                                <span class="sits__place sits-price--middle" data-place='I8' data-price='20'>I8</span>
                                <span class="sits__place sits-price--middle" data-place='I9' data-price='20'>I9</span>
                                <span class="sits__place sits-price--middle" data-place='I10' data-price='20'>I10</span>
                                <span class="sits__place sits-price--middle" data-place='I11' data-price='20'>I11</span>
                                <span class="sits__place sits-price--middle" data-place='I12' data-price='20'>I12</span>
                                <span class="sits__place sits-price--middle" data-place='I13' data-price='20'>I13</span>
                                <span class="sits__place sits-price--middle" data-place='I14' data-price='20'>I14</span>
                                <span class="sits__place sits-price--middle" data-place='I15' data-price='20'>I15</span>
                                <span class="sits__place sits-price--middle" data-place='I16' data-price='20'>I16</span> -->

                                <?php
                                    $start = 3;
                                    $end = 16;
                                    $price = 20;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'I' . $i;
                                        $class = ($loadghe[$seat] == 0) ? 'sits__place sits-price--middle' : 'sits__place sits-price--middle sits-state--not';
                                        echo '<span class="' . $class . '" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>

                            <div class="sits__row additional-margin">
                                <!-- <span class="sits__place sits-price--expensive" data-place='J5' data-price='30'>J5</span>
                                <span class="sits__place sits-price--expensive" data-place='J6' data-price='30'>J6</span>
                                <span class="sits__place sits-price--expensive" data-place='J7' data-price='30'>J7</span>
                                <span class="sits__place sits-price--expensive" data-place='J8' data-price='30'>J8</span>
                                <span class="sits__place sits-price--expensive" data-place='J9' data-price='30'>J9</span>
                                <span class="sits__place sits-price--expensive" data-place='J10' data-price='30'>J10</span>
                                <span class="sits__place sits-price--expensive" data-place='J11' data-price='30'>J11</span>
                                <span class="sits__place sits-price--expensive" data-place='J12' data-price='30'>J12</span>
                                <span class="sits__place sits-price--expensive" data-place='J13' data-price='30'>J13</span>
                                <span class="sits__place sits-price--expensive" data-place='J14' data-price='30'>J14</span> -->

                                <?php
                                    $start = 5;
                                    $end = 14;
                                    $price = 30;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'J' . $i;
                                        $class = ($loadghe[$seat] == 0) ? 'sits__place sits-price--expensive' : 'sits__place sits-price--expensive sits-state--not';
                                        echo '<span class="' . $class . '" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>

                            <div class="sits__row">
                                <!-- <span class="sits__place sits-price--expensive" data-place='K5' data-price='30'>K5</span>
                                <span class="sits__place sits-price--expensive" data-place='K6' data-price='30'>K6</span>
                                <span class="sits__place sits-price--expensive" data-place='K7' data-price='30'>K7</span>
                                <span class="sits__place sits-price--expensive" data-place='K8' data-price='30'>K8</span>
                                <span class="sits__place sits-price--expensive" data-place='K9' data-price='30'>K9</span>
                                <span class="sits__place sits-price--expensive" data-place='K10' data-price='30'>K10</span>
                                <span class="sits__place sits-price--expensive" data-place='K11' data-price='30'>K11</span>
                                <span class="sits__place sits-price--expensive" data-place='K12' data-price='30'>K12</span>
                                <span class="sits__place sits-price--expensive" data-place='K13' data-price='30'>K13</span>
                                <span class="sits__place sits-price--expensive" data-place='K14' data-price='30'>K14</span> -->

                                <?php
                                    $start = 5;
                                    $end = 14;
                                    $price = 30;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'K' . $i;
                                        $class = ($loadghe[$seat] == 0) ? 'sits__place sits-price--expensive' : 'sits__place sits-price--expensive sits-state--not';
                                        echo '<span class="' . $class . '" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
                                    }
                                ?>
                            </div>

                            <div class="sits__row">
                                <!-- <span class="sits__place sits-price--expensive" data-place='L6' data-price='30'>L6</span>
                                <span class="sits__place sits-price--expensive" data-place='L7' data-price='30'>L7</span>
                                <span class="sits__place sits-price--expensive" data-place='L8' data-price='30'>L8</span>
                                <span class="sits__place sits-price--expensive" data-place='L9' data-price='30'>L9</span>
                                <span class="sits__place sits-price--expensive" data-place='L10' data-price='30'>L10</span>
                                <span class="sits__place sits-price--expensive" data-place='L11' data-price='30'>L11</span>
                                <span class="sits__place sits-price--expensive" data-place='L12' data-price='30'>L12</span>
                                <span class="sits__place sits-price--expensive" data-place='L13' data-price='30'>L13</span> -->

                                <?php
                                    $start = 6;
                                    $end = 13;
                                    $price = 30;
                                    for ($i = $start; $i <= $end; $i++) {
                                        $seat = 'L' . $i;
                                        $class = ($loadghe[$seat] == 0) ? 'sits__place sits-price--expensive' : 'sits__place sits-price--expensive sits-state--not';
                                        echo '<span class="' . $class . '" data-place="' . $seat . '" data-price="' . $price . '">' . $seat . '</span>';
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
            <form id='film-and-time' class="" method='POST' action='index.php?act=chonghe&idphim=<?php echo $idphim; ?>&iduser=<?php echo $iduser; ?>' >
    
            <!-- <input type='text' name='choosen-number' class="choosen-number"> -->
            
            <input type='text' name='ghe1' class="choosen-number--cheap hidden-input">
            <input type='text' name='ghe2' class="choosen-number--middle hidden-input">
            <input type='text' name='ghe3' class="choosen-number--expansive hidden-input">
            <input type='text' name='tong' class="choosen-cost hidden-input">
            <input type='text' name='tenghe' class="choosen-sits hidden-input"> 

            <br><div id="inputContainer"><br>
                <!-- Các ô input sẽ được thêm vào đây -->
                <input type='text' name='A2' value='0' readonly class="hidden-input">
                <input type='text' name='A3' value='0' readonly class="hidden-input">
                <input type='text' name='A4' value='0' readonly class="hidden-input">
                <input type='text' name='A5' value='0' readonly class="hidden-input">
                <input type='text' name='A6' value='0' readonly class="hidden-input">
                <input type='text' name='A7' value='0' readonly class="hidden-input">
                <input type='text' name='A8' value='0' readonly class="hidden-input">
                <input type='text' name='A9' value='0' readonly class="hidden-input">
                <input type='text' name='A10' value='0' readonly class="hidden-input">
                <input type='text' name='A11' value='0' readonly class="hidden-input">
                <input type='text' name='A12' value='0' readonly class="hidden-input">
                <input type='text' name='A13' value='0' readonly class="hidden-input">
                <input type='text' name='A14' value='0' readonly class="hidden-input">
                <input type='text' name='A15' value='0' readonly class="hidden-input">
                <input type='text' name='A16' value='0' readonly class="hidden-input">
                <input type='text' name='A17' value='0' readonly class="hidden-input">

                <input type='text' name='B1' value='0' readonly class="hidden-input">
                <input type='text' name='B2' value='0' readonly class="hidden-input">
                <input type='text' name='B3' value='0' readonly class="hidden-input">
                <input type='text' name='B4' value='0' readonly class="hidden-input">
                <input type='text' name='B5' value='0' readonly class="hidden-input">
                <input type='text' name='B6' value='0' readonly class="hidden-input">
                <input type='text' name='B7' value='0' readonly class="hidden-input">
                <input type='text' name='B8' value='0' readonly class="hidden-input">
                <input type='text' name='B9' value='0' readonly class="hidden-input">
                <input type='text' name='B10' value='0' readonly class="hidden-input">
                <input type='text' name='B11' value='0' readonly class="hidden-input">
                <input type='text' name='B12' value='0' readonly class="hidden-input">
                <input type='text' name='B13' value='0' readonly class="hidden-input">
                <input type='text' name='B14' value='0' readonly class="hidden-input">
                <input type='text' name='B15' value='0' readonly class="hidden-input">
                <input type='text' name='B16' value='0' readonly class="hidden-input">
                <input type='text' name='B17' value='0' readonly class="hidden-input">
                <input type='text' name='B18' value='0' readonly class="hidden-input">

                <input type='text' name='C1' value='0' readonly class="hidden-input">
                <input type='text' name='C2' value='0' readonly class="hidden-input">
                <input type='text' name='C3' value='0' readonly class="hidden-input">
                <input type='text' name='C4' value='0' readonly class="hidden-input">
                <input type='text' name='C5' value='0' readonly class="hidden-input">
                <input type='text' name='C6' value='0' readonly class="hidden-input">
                <input type='text' name='C7' value='0' readonly class="hidden-input">
                <input type='text' name='C8' value='0' readonly class="hidden-input">
                <input type='text' name='C9' value='0' readonly class="hidden-input">
                <input type='text' name='C10' value='0' readonly class="hidden-input">
                <input type='text' name='C11' value='0' readonly class="hidden-input">
                <input type='text' name='C12' value='0' readonly class="hidden-input">
                <input type='text' name='C13' value='0' readonly class="hidden-input">
                <input type='text' name='C14' value='0' readonly class="hidden-input">
                <input type='text' name='C15' value='0' readonly class="hidden-input">
                <input type='text' name='C16' value='0' readonly class="hidden-input">
                <input type='text' name='C17' value='0' readonly class="hidden-input">
                <input type='text' name='C18' value='0' readonly class="hidden-input">

                <input type='text' name='D1' value='0' readonly class="hidden-input">
                <input type='text' name='D2' value='0' readonly class="hidden-input">
                <input type='text' name='D3' value='0' readonly class="hidden-input">
                <input type='text' name='D4' value='0' readonly class="hidden-input">
                <input type='text' name='D5' value='0' readonly class="hidden-input">
                <input type='text' name='D6' value='0' readonly class="hidden-input">
                <input type='text' name='D7' value='0' readonly class="hidden-input">
                <input type='text' name='D8' value='0' readonly class="hidden-input">
                <input type='text' name='D9' value='0' readonly class="hidden-input">
                <input type='text' name='D10' value='0' readonly class="hidden-input">
                <input type='text' name='D11' value='0' readonly class="hidden-input">
                <input type='text' name='D12' value='0' readonly class="hidden-input">
                <input type='text' name='D13' value='0' readonly class="hidden-input">
                <input type='text' name='D14' value='0' readonly class="hidden-input">
                <input type='text' name='D15' value='0' readonly class="hidden-input">
                <input type='text' name='D16' value='0' readonly class="hidden-input">
                <input type='text' name='D17' value='0' readonly class="hidden-input">
                <input type='text' name='D18' value='0' readonly class="hidden-input">
                
                <input type='text' name='E1' value='0' readonly class="hidden-input">
                <input type='text' name='E2' value='0' readonly class="hidden-input">
                <input type='text' name='E3' value='0' readonly class="hidden-input">
                <input type='text' name='E4' value='0' readonly class="hidden-input">
                <input type='text' name='E5' value='0' readonly class="hidden-input">
                <input type='text' name='E6' value='0' readonly class="hidden-input">
                <input type='text' name='E7' value='0' readonly class="hidden-input">
                <input type='text' name='E8' value='0' readonly class="hidden-input">
                <input type='text' name='E9' value='0' readonly class="hidden-input">
                <input type='text' name='E10' value='0' readonly class="hidden-input">
                <input type='text' name='E11' value='0' readonly class="hidden-input">
                <input type='text' name='E12' value='0' readonly class="hidden-input">
                <input type='text' name='E13' value='0' readonly class="hidden-input">
                <input type='text' name='E14' value='0' readonly class="hidden-input">
                <input type='text' name='E15' value='0' readonly class="hidden-input">
                <input type='text' name='E16' value='0' readonly class="hidden-input">
                <input type='text' name='E17' value='0' readonly class="hidden-input">
                <input type='text' name='E18' value='0' readonly class="hidden-input">

                <input type='text' name='F1' value='0' readonly class="hidden-input">
                <input type='text' name='F2' value='0' readonly class="hidden-input">
                <input type='text' name='F3' value='0' readonly class="hidden-input">
                <input type='text' name='F4' value='0' readonly class="hidden-input">
                <input type='text' name='F5' value='0' readonly class="hidden-input">
                <input type='text' name='F6' value='0' readonly class="hidden-input">
                <input type='text' name='F7' value='0' readonly class="hidden-input">
                <input type='text' name='F8' value='0' readonly class="hidden-input">
                <input type='text' name='F9' value='0' readonly class="hidden-input">
                <input type='text' name='F10' value='0' readonly class="hidden-input">
                <input type='text' name='F11' value='0' readonly class="hidden-input">
                <input type='text' name='F12' value='0' readonly class="hidden-input">
                <input type='text' name='F13' value='0' readonly class="hidden-input">
                <input type='text' name='F14' value='0' readonly class="hidden-input">
                <input type='text' name='F15' value='0' readonly class="hidden-input">
                <input type='text' name='F16' value='0' readonly class="hidden-input">
                <input type='text' name='F17' value='0' readonly class="hidden-input">
                <input type='text' name='F18' value='0' readonly class="hidden-input">

                <input type='text' name='G1' value='0' readonly class="hidden-input">
                <input type='text' name='G2' value='0' readonly class="hidden-input">
                <input type='text' name='G3' value='0' readonly class="hidden-input">
                <input type='text' name='G4' value='0' readonly class="hidden-input">
                <input type='text' name='G5' value='0' readonly class="hidden-input">
                <input type='text' name='G6' value='0' readonly class="hidden-input">
                <input type='text' name='G7' value='0' readonly class="hidden-input">
                <input type='text' name='G8' value='0' readonly class="hidden-input">
                <input type='text' name='G9' value='0' readonly class="hidden-input">
                <input type='text' name='G10' value='0' readonly class="hidden-input">
                <input type='text' name='G11' value='0' readonly class="hidden-input">
                <input type='text' name='G12' value='0' readonly class="hidden-input">
                <input type='text' name='G13' value='0' readonly class="hidden-input">
                <input type='text' name='G14' value='0' readonly class="hidden-input">
                <input type='text' name='G15' value='0' readonl class="hidden-input"y>
                <input type='text' name='G16' value='0' readonly class="hidden-input">
                <input type='text' name='G17' value='0' readonly class="hidden-input">
                <input type='text' name='G18' value='0' readonly class="hidden-input">

                <input type='text' name='I3' value='0' readonly class="hidden-input">
                <input type='text' name='I4' value='0' readonly class="hidden-input">
                <input type='text' name='I5' value='0' readonly class="hidden-input">
                <input type='text' name='I6' value='0' readonly class="hidden-input">
                <input type='text' name='I7' value='0' readonly class="hidden-input">
                <input type='text' name='I8' value='0' readonly class="hidden-input">
                <input type='text' name='I9' value='0' readonly class="hidden-input">
                <input type='text' name='I10' value='0' readonly class="hidden-input">
                <input type='text' name='I11' value='0' readonly class="hidden-input">
                <input type='text' name='I12' value='0' readonly class="hidden-input">
                <input type='text' name='I13' value='0' readonly class="hidden-input">
                <input type='text' name='I14' value='0' readonly class="hidden-input">
                <input type='text' name='I15' value='0' readonly class="hidden-input">
                <input type='text' name='I16' value='0' readonly class="hidden-input">

                <input type='text' name='J5' value='0' readonly class="hidden-input">
                <input type='text' name='J6' value='0' readonly class="hidden-input">
                <input type='text' name='J7' value='0' readonly class="hidden-input">
                <input type='text' name='J8' value='0' readonly class="hidden-input">
                <input type='text' name='J9' value='0' readonly class="hidden-input">
                <input type='text' name='J10' value='0' readonly class="hidden-input">
                <input type='text' name='J11' value='0' readonly class="hidden-input">
                <input type='text' name='J12' value='0' readonly class="hidden-input">
                <input type='text' name='J13' value='0' readonly class="hidden-input">
                <input type='text' name='J14' value='0' readonly class="hidden-input">

                <input type='text' name='K5' value='0' readonly class="hidden-input">
                <input type='text' name='K6' value='0' readonly class="hidden-input">
                <input type='text' name='K7' value='0' readonly class="hidden-input">
                <input type='text' name='K8' value='0' readonly class="hidden-input">
                <input type='text' name='K9' value='0' readonly class="hidden-input">
                <input type='text' name='K10' value='0' readonly class="hidden-input">
                <input type='text' name='K11' value='0' readonly class="hidden-input">
                <input type='text' name='K12' value='0' readonly class="hidden-input">
                <input type='text' name='K13' value='0' readonly class="hidden-input">
                <input type='text' name='K14' value='0' readonly class="hidden-input">

                <input type='text' name='L6' value='0' readonly class="hidden-input">
                <input type='text' name='L7' value='0' readonly class="hidden-input">
                <input type='text' name='L8' value='0' readonly class="hidden-input">
                <input type='text' name='L9' value='0' readonly class="hidden-input">
                <input type='text' name='L10' value='0' readonly class="hidden-input">
                <input type='text' name='L11' value='0' readonly class="hidden-input">
                <input type='text' name='L12' value='0' readonly class="hidden-input">
                <input type='text' name='L13' value='0' readonly class="hidden-input">




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
       .hidden-input {
            display: none;
        }
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

<script>
    $(document).ready(function() {
        var seatsSelected = false; // Biến để kiểm tra xem có ghế nào được chọn hay không

        // Đặt sự kiện click cho mỗi span chứa tên ghế
        $('.sits__place').click(function() {
            var tenGhe = $(this).data('place');

            // Kiểm tra xem ghế đã được chọn chưa
            // if ($(this).hasClass('selected')) {
            //     alert('Ghế đã chọn');
            //     return;
            // }

            // Tìm và loại bỏ các input trùng name có value = 0
            $('input[name="' + tenGhe + '"][value="0"]').remove();

            // Sử dụng Ajax để gửi yêu cầu đến máy chủ PHP
            $.ajax({
                type: 'POST',
                url: 'add_seat.php', // Đường dẫn đến tập tin PHP xử lý yêu cầu
                data: { tenGhe: tenGhe },
                success: function(data) {
                    // Thêm ô input mới vào div có id là "inputContainer"
                    $('#inputContainer').append(data);

                    // Đánh dấu ghế đã được chọn
                    $('#seatRow span[data-place="' + tenGhe + '"]').addClass('selected');

                    // Đặt biến seatsSelected thành true khi có ghế được chọn
                    seatsSelected = true;
                }
            });
        });

        // Kiểm tra khi nút đặt vé được nhấn
        $('#datVeButton').click(function() {
            // Nếu không có ghế nào được chọn, hiển thị cảnh báo
            if (!seatsSelected) {
                alert('Bạn chưa chọn ghế');
                return;
            }

            // Thực hiện các thao tác khác khi nút đặt vé được nhấn
            // ...
        });
    });
</script>

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




