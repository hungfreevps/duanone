
<br> <br> <br>
        <!-- Main content -->
                
                        <form action="index.php?act=dangky" method="post" enctype="multipart/form-data" >
                            <div id="login-form" class="login">
                                <p class="login__title">Đăng Ký Thành Viên</p><br>

                            <div class="social social--colored">
                                    <a href="#" class="social__variant fa fa-facebook"></a>
                                    <a href="#" class="social__variant fa fa-twitter"></a>
                                    <a href='#' class="social__variant fa fa-vk"></a>
                            </div>

                            <span class="login__tracker"></span><br>

                            <div class="field-wrap">
                                <input type="text" placeholder="Tên người dùng" name="user" class="login__input">
                                <?php
                                    if(isset($thongbao1) && ($thongbao1!=" ")){
                                        echo '<div style="color: #00ff00; text-align: center;">' . $thongbao1 . '</div>';
                                    }
                                ?>
                                <input type="email" placeholder="Email" name="email" class="login__input" require>
                                <?php
                                    if(isset($thongbao2) && ($thongbao2!=" ")){
                                        echo '<div style="color: #00ff00; text-align: center;">' . $thongbao2 . '</div>';
                                    }
                                ?>
                                <input type="password" placeholder="Password" name="pass" class="login__input">
                                <?php
                                    if(isset($thongbao3) && ($thongbao3!=" ")){
                                        echo '<div style="color: #00ff00; text-align: center;">' . $thongbao3 . '</div>';
                                    }
                                ?>
                                <input type="text" placeholder="Số điện thoại" name="sdt" class="login__input">
                                <?php
                                    if(isset($thongbao4) && ($thongbao4!=" ")){
                                        echo '<div style="color: #00ff00; text-align: center;">' . $thongbao4 . '</div>';
                                    }
                                ?>

                            </div>

                            <div class="login__control">
                                <br><br>
                                <input type="submit" value="Đăng Ký" class="btn btn-md btn--warning btn--wider" name="dangky">
                                <input type="reset" value="Nhập Lại" class="btn btn-md btn--warning btn--wider">
                            </div><br>
                            
                            <?php
                                if(isset($thongbao) && ($thongbao!=" ")){
                                    echo '<div style="color: #00ff00; text-align: center;">' . $thongbao . '</div>';
                                }
                            ?>
                            </div>
                        </form>
                    
                    
                    

    