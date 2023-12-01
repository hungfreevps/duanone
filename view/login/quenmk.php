
<br> <br><br>
        <!-- Main content -->
                    
                    <span class="login__tracker"></span>
                    <form action="index.php?act=quenmk" method="post" enctype="multipart/form-data">
                        <div id="login-form" class="login">
                        <p class="login__title">Quên Mật Khẩu</p><br>

                        <div class="social social--colored">
                                <a href="#" class="social__variant fa fa-facebook"></a>
                                <a href="#" class="social__variant fa fa-twitter"></a>
                                <a href='#' class="social__variant fa fa-vk"></a>
                        </div><br>

                        <div class="field-wrap">
                            <!-- <input type="text" placeholder="Tên đăng nhập" name="user" class="login__input"> -->
                            <input type="email" placeholder="Email" name="email" class="login__input" require>
                            <input type="password" placeholder="Số điện thoại" name="sdt" class="login__input">

                        </div>
                        <?php
                            if(isset($thongbao) && $thongbao!= " "){
                                echo '</br><div style="color: #00ff00; text-align: center;">' . $thongbao . '</div>';
                            }
                            if(isset($thongbaoloi) && $thongbaoloi!= " "){
                                echo '</br><div style="color: orange; text-align: center;">' . $thongbaoloi . '</div>';
                            }
                        ?>

                        <div class="login__control">
                            <br><br>
                            <input type="submit" value="Gửi" class="btn btn-md btn--warning btn--wider" name="quenmk">
                            
                        </div>
                        </div>
                    </form>

                    
                    
                    
        
        


    