
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
                                KTTenTruyCap();
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
                                if(isset($thongbaoloi) && ($thongbaoloi!=" ")){
                                    echo '<div style="color: orange; text-align: center;">' . $thongbaoloi . '</div>';
                                }

                                if(isset($thongbao) && ($thongbao!=" ")){
                                    echo '<div style="color: #00ff00; text-align: center;">' . $thongbao . '</div>';
                                }
                            ?>
                            </div>
                        </form>





                        <?php
                        // Hàm kiểm tra tên truy cập
        function KTTenTruyCap(){
            if(isset($_POST["submit"]) && ($_POST["submit"])){
                $ten = $_POST["user"];
                if(empty($ten)){
                    echo '<b style="color: orangered;font-weight: 100;">Trường tên không được bỏ trống</b>';
                }else{
                    // Kiểm tra dữ liệu trường tên chỉ đc nhập dữ liệu dạng số và chữ
                    if(preg_match("/^[a-zA-Z0-9]+$/", $ten)){                           // Kiểm tra dữ liệu có đủ điều kiện
                        echo '<b style="color: green; font-weight: 100;">Hợp lệ</b>';  // Tham số 1 là đk kiểm tra, tham số 2 là dữ liệu cần kiểm tra
                                                                                                
                    }else{
                        echo '<b style="color: red; font-weight: 100;">Dữ liệu ko đúng định dạng</b>';
                    }
                }
                
            }
        } 

        // Hàm kiểm tra password
        function KTPass(){
            if(isset($_POST["submit"]) && ($_POST["submit"])){
                $password = $_POST["password"];
                if(empty($password)){
                    echo '<b style="color: orangered;font-weight: 100;">Mật khẩu không được bỏ trống</b>';
                }else{
                    if(preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*]).{8,}$/", $password)){
                        echo '<b style="color: green; font-weight: 100;">Hợp lệ</b>';                
                    }else{
                        echo '<b style="color: red; font-weight: 100;">Dữ liệu ko đúng định dạng</b>';
                    }
                }
            }
        }

        // Hàm kiểm tra pass nhập lại
        function KTPassNhapLai(){
            if(isset($_POST["submit"]) && ($_POST["submit"])){
                $passnhaplai = $_POST["passnhaplai"];
                if(empty($passnhaplai)){
                    echo '<b style="color: orangered;font-weight: 100;">Nhập lại mật khẩu không được bỏ trống</b>';
                }else{
                    if(preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*]).{8,}$/", $passnhaplai) && ($_POST["password"]) == ($_POST["passnhaplai"])){
                        echo '<b style="color: green; font-weight: 100;">Hợp lệ</b>';
                    }else{
                        if(preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*]).{8,}$/", $passnhaplai)){
                            echo '<b style="color: red; font-weight: 100;">Mật khẩu nhập lại không đúng</b>';
                        }else{
                            echo '<b style="color: red; font-weight: 100;">Dữ liệu ko đúng định dạng</b>';
                        }
                    }
                }
            }
        }

        // Hàm kiểm tra email
        function KTEmail(){
            if(isset($_POST["submit"]) && ($_POST["submit"])){
                $email = $_POST["email"];
                if(empty($email)){
                    echo '<b style="color: orangered;font-weight: 100;">Email không được bỏ trống</b>';
                }else{
                    if(preg_match("/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i", $email)) {
                        echo '<b style="color: green; font-weight: 100;">Hợp lệ</b>';
                    } else {
                        echo '<b style="color: red; font-weight: 100;">Không hợp lệ</b>';
                    }
                }
            }
        }

        // Hàm kiểm tra số điện thoại
        function KTSĐT(){
            if(isset($_POST["submit"]) && ($_POST["submit"])){
                $sdt = $_POST["phone-number"];
                if(empty($sdt)){
                    echo '<b style="color: orangered;font-weight: 100;">SĐT không được bỏ trống</b>';
                }else{
                    if(preg_match("/((09|03|07|08|05)+([0-9]{8})\b)/", $sdt)) {
                        echo '<b style="color: green; font-weight: 100;">Hợp lệ</b>';
                    } else {
                        echo '<b style="color: red; font-weight: 100;">Không hợp lệ</b>';
                    }
                }
            }
        } 

?>
                        
                        ?>
                    
                    
                    

    