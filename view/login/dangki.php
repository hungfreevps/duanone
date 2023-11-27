
<br> <br> <br>
        <!-- Main content -->
                



                    
                        <form action="index.php?act=dangky" method="post" enctype="multipart/form-data" >
                            <div id="login-form" class="login">
                                <p class="login__title">Đăng Ký Thành Viên</p>

                            <div class="social social--colored">
                                    <a href="#" class="social__variant fa fa-facebook"></a>
                                    <a href="#" class="social__variant fa fa-twitter"></a>
                                    <a href='#' class="social__variant fa fa-vk"></a>
                            </div>

                            <p class="login__tracker"></p>

                            <div class="field-wrap">
                                <input type="text" placeholder="Tên người dùng" name="user" class="login__input">
                                <input type="email" placeholder="Email" name="email" class="login__input" require>
                                <input type="password" placeholder="Password" name="pass" class="login__input">
                                <input type="text" placeholder="Số điện thoại" name="sdt" class="login__input">

                            </div>

                            <div class="login__control">
                                <br><br>
                                <input type="submit" value="Đăng Ký" class="btn btn-md btn--warning btn--wider" name="dangky">
                                <input type="reset" value="Nhập Lại" class="btn btn-md btn--warning btn--wider">
                            </div>
                            
                            <?php
                                if(isset($thongbao) && ($thongbao!="")){
                                    echo '</br><div style="color: #00ff00; text-align: center;">' . $thongbao . '</div>';
                                }
                            ?>
                            </div>
                        </form>
                    
                    
                    

    