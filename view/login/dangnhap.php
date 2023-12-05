
<br> <br><br>
        <!-- Main content -->
                    
                    <span class="login__tracker"></span>
                    <form action="index.php?act=dangnhap" method="post" enctype="multipart/form-data">
                        <div id="login-form" class="login">
                        <p class="login__title">Đăng Nhập</p><br>

                        <div class="social social--colored">
                                <a href="#" class="social__variant fa fa-facebook"></a>
                                <a href="#" class="social__variant fa fa-twitter"></a>
                                <a href='#' class="social__variant fa fa-vk"></a>
                        </div><br>

                        <div class="field-wrap">
                            <!-- <input type="text" placeholder="Tên đăng nhập" name="user" class="login__input"> -->
                            <input type="email" placeholder="Email" name="email" class="login__input" require>
                            <input type="password" placeholder="Password" name="pass" class="login__input">
                            <input type='checkbox' id='#informed' class='login__check styled'>
                            <label for='#informed' class='login__check-info'>Ghi nhớ tài khoản</label>
                        </div>
                        <?php
                            if(isset($thongbao) && $thongbao!= " "){
                                echo '</br><div style="color: orange; text-align: center;">' . $thongbao . '</div>';
                            }

                            if(isset($thongbaoloi) && $thongbaoloi!= " "){
                                echo '</br><div style="color: orange; text-align: center;">' . $thongbaoloi . '</div>';
                            }
                        ?>

                        <div class="login__control">
                            <br><br>
                            <input type="submit" value="Đăng Nhập" class="btn btn-md btn--warning btn--wider" name="dangnhap">
                            
                            <a href="index.php?act=quenmk" class="login__tracker form__tracker">Quên mật khẩu?</a>
                            <a href="index.php?act=dangky" class="login__tracker form__tracker">Tạo tài khoản!</a>
                        </div>
                        </div>
                    </form>


                    
                    
                    
        
        


    