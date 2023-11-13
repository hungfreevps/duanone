<?php
    session_start();
    
    //dang ky
    function insert_taikhoan($tentaikhoan,$sdt,$email,$password){
        $sql="INSERT INTO `taikhoan` ( `tentaikhoan`,`sdt`, `email`, `password`) VALUES ( '$tentaikhoan', '$sdt', '$email', '$password'); ";
        pdo_execute($sql);
    }

    function dangnhap($user,$pass) {
        $sql="SELECT * FROM taikhoan WHERE tentaikhoan='$tentaikhoan' and password='$password'";
        $taikhoan = pdo_query_one($sql);

        if ($taikhoan != false) {
            $_SESSION['tentaikhoan'] = $user;
        } else {
            return "Thông tin tài khoản sai";
        }
    }

    function dangxuat() {
        if (isset($_SESSION['tentaikhoan'])) {
            unset($_SESSION['tentaikhoan']);
        }
    }

    function sendMail($email) {
        $sql="SELECT * FROM taikhoan WHERE email='$email'";
        $taikhoan = pdo_query_one($sql);

        if ($taikhoan != false) {
            sendMailPass($email, $taikhoan['tentaikhoan'], $taikhoan['password']);
            
            return "gui email thanh cong";
        } else {
            return "Email bạn nhập ko có trong hệ thống";
        }
    }

    function sendMailPass($email, $tentaikhoan, $password) {
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer\PHPMailer\PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = '6bda0a4c1abcfc';                     //SMTP username
            $mail->Password   = '4430da6c8b9967';                               //SMTP password
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('duanmau@example.com', 'DuAnMau');
            $mail->addAddress($email, $username);     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Nguoi dung quen mat khau';
            $mail->Body    = 'Mau khau cua ban la' .$pass;

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>
