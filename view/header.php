<!doctype html>
<html>

<!-- Mirrored from amovie.gozha.net/book1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 12:59:07 GMT -->
<head>
        <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>AMovie - Booking step 1</title>
        <meta name="description" content="A Template by Gozha.net">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Gozha.net">
    
    <!-- Mobile Specific Metas-->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
    
    <!-- Fonts -->
        <!-- Font awesome - icon font -->
        <link href="../netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Roboto -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets -->
    <!-- jQuery UI --> 
        <link href="../code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet">

        <!-- Mobile menu -->
        <link href="css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="css/external/jquery.selectbox.css" rel="stylesheet" />
        <!-- Swiper slider -->
        <link href="css/external/idangerous.swiper.css" rel="stylesheet" />
    
        <!-- Custom -->
        <link href="css/style3860.css?v=1" rel="stylesheet" />

        <!-- Modernizr --> 
        <script src="js/external/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
    <!--[if lt IE 9]> 
    	<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script> 
		<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>		
    <![endif]-->
</head>

<body>
    <div class="wrapper">
        <!-- Banner -->
        <div class="banner-top">
            <img alt='top banner' src="images/bannerr.jpg">
        </div>

        <!-- Header section -->
        <header class="header-wrapper header-wrapper--home">
            <div class="container">
                <!-- Logo link-->
                <a href='index.php' class="logo">
                    <img alt='logo' src="images/logo.png">
                </a>
                
                <!-- Main website navigation-->
                <nav id="navigation-box">
                    <!-- Toggle for mobile menu mode -->
                    <a href="#" id="navigation-toggle">
                        <span class="menu-icon">
                            <span class="icon-toggle" role="button" aria-label="Toggle Navigation">
                              <span class="lines"></span>
                            </span>
                        </span>
                    </a>
                    <style>
                       
                    </style>
                    <!-- Link navigation -->
                    <ul id="navigation">
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="index.php">Trang Chủ</a>
                        </li>

                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Đặc Trưng</a>
                        </li>

                        <!-- <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Booking steps</a>
                        </li> -->

                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Phòng Trưng Bày</a>
                        </li>

                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Mới</a>
                        </li>
                        

                        <!-- <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Mega menu</a>
                        </li> -->
                    </ul>
                </nav>
                
                <!-- Additional header buttons / Auth and direct link to booking-->
                <div class="control-panel">
                    <style>
                        .btn {
                            position: relative;
                            display: inline-block;
                        }
                        .dropdown-menu {
                            display: none;
                            position: absolute;
                            top: 100%;
                            left: 0;
                            background-color: gray;
                            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                            z-index: 1;
                            min-width: 113px;
                            padding: 6px 0;
                            border-bottom-left-radius: 3px;
                            border-bottom-right-radius: 3px;
                        }
                        .btn:hover .dropdown-menu {
                            display: block;
                        }
                        .dropdown-menu a {
                            color: #b4b1b2;
                            text-decoration: none;
                            
                            font-size: 11px;
                        }
                        .dropdown-menu a:hover{
                            color: #fff;
                        }
                    </style>
                    <script>
                        document.getElementById("myButton").addEventListener("click", function() {
                        var dropdownMenu = this.querySelector(".dropdown-menu");
                        dropdownMenu.style.display = (dropdownMenu.style.display === "block") ? "none" : "block";
                        }); 
                    </script>
                        <?php
                        
                        if(isset($_SESSION["user"])){
                            echo '
                                <div style="min-width: 115px;" class="btn btn-md btn--warning btn--book btn-control--home" id="myButton">
                                    <span>
                                    '.$_SESSION['user'].'
                                    </span>
                                    <div class="dropdown-menu">
                                        <a href="index.php?act=lichsudatve&iduser='.$_SESSION['iduser'].'">Lịch sử đặt vé</a></br>
                                        <a href="index.php?act=thongtintk&iduser='.$_SESSION['iduser'].'">Thông tin tk</a></br>
                                        <a href="index.php?act=dangxuat">Đăng xuất</a></br>';
                                        if($_SESSION['role'] == 1){
                                        echo '<a href="admin/index.php">Admin</a>';
                                        }
                                    echo '</div>
                                </div>
                            ';
                            echo '<a style="min-width: 115px;" href="#" class="btn btn-md btn--warning btn--book btn-control--home">Đặt vé</a>';
                        }else{
                            echo '
                                <div class="btn btn-md btn--warning btn--book btn-control--home">
                                <span>
                                <a href="index.php?act=dangnhap" class="">Đăng Nhập</a>
                                </span>
                                </div>
                            ';
                            echo '<a style="min-width: 115px;" href="index.php?act=dangnhap" class="btn btn-md btn--warning btn--book btn-control--home">Đặt Vé</a>';
                        }
                        ?>
                </div>
            </div>
        </header>
