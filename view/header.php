<!doctype html>
<html>

<!-- Mirrored from amovie.gozha.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 12:56:49 GMT -->
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>AMovie</title>
        <meta name="description" content="A Template by Gozha.net">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Gozha.net">
    
    <!-- Mobile Specific Metas-->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
    
    <!-- Fonts -->
        <!-- Font awesome - icon font -->
        <link href="netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Roboto -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
        <!-- Open Sans -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets -->
        <!-- jQuery UI --> 
        <link href="../code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet">

        <!-- Mobile menu -->
        <link href="css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="css/external/jquery.selectbox.css" rel="stylesheet" />
        <!-- Swiper slider -->
        <link href="css/external/idangerous.swiper.css" rel="stylesheet" />
        <!-- Magnific-popup -->
        <link href="css/external/magnific-popup.css" rel="stylesheet" />

        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    
        <!-- Custom -->
        <link href="css/style3860.css?v=1" rel="stylesheet" />


        <!-- Modernizr --> 
        <script src="js/external/modernizr.custom.js"></script>
        <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    
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
                        

                        <!-- <li class="col-md-3 mega-menu__coloum">
                                        <h4 class="mega-menu__heading">Ending soon</h4>
                                          <ul class="mega-menu__list">
                                            <li class="mega-menu__nav-item"><a href="#">Escape Plan</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">Rush</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">Prisoners</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">Enough Said</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">The Fifth Estate</a></li>
                                            <li class="mega-menu__nav-item"><a href="#">Runner Runner</a></li>
                                          </ul>
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
                            padding: 5px 0;
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
                                        <a href="index.php?act=dangxuat">Đăng xuất</a>
                                    </div>
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