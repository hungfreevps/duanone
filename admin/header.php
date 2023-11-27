<!doctype html>
<html>

        <meta charset="utf-8">
        <title>Movie</title>
        <meta name="description" content="A Template by Gozha.net">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Gozha.net"> 
    <!-- Fonts -->
        <!-- Font awesome - icon font -->
        <link href="../netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Roboto -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
        <!-- Open Sans -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/css-admin.css">
    
    <!-- Stylesheets -->
            <!-- Mobile menu -->
            <link href="../css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="../css/external/jquery.selectbox.css" rel="stylesheet" />

        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="../rs-plugin/css/settings.css" media="screen" />
    
        <!-- Custom -->
        <link href="../css/style3860.css?v=1" rel="stylesheet" />


        <!-- Modernizr --> 
        <script src="../js/external/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
    <!--[if lt IE 9]> 
    	<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script> 
		<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>		
    <![endif]-->
</head>
<body>
    <div class="wrapper">

        <!-- Header section -->
        <header class="header-wrapper header-wrapper--home">
            <div class="container">
                <!-- Logo link-->
                <a href='../index.php' class="logo">
                    <img alt='logo' src="../images/logo.png">
                </a>
                
                <!-- Main website navigation-->
                <nav id="navigation-box">
                    
                    <!-- Link navigation -->
                    <ul id="navigation">
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="?act=">Trang Chủ</a>
                        </li>

                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Quản Lý Thể Loại</a>
                        </li>

                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="?act=listsp">Quản Lý Phim</a>
                        </li>

                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Quản Lý Bình Luận</a>
                        </li>

                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Thống Kê</a>
                        </li>
                    </ul>
                </nav>
                
                <!-- Additional header buttons / Auth and direct link to booking-->
                <div class="control-panel">
                    <div class="auth auth--home">
                      <!-- <div class="auth__show">
                        <span class="auth__image">
                          <img alt="" src="../images/client-photo/auth.png">
                        </span>
                      </div>
                      <a href="#" class="btn btn--sign btn--singin">
                          me
                      </a> -->
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
                        #navigation{
                            padding: 0 10px;
                        }
                    </style>
                    <script>
                        document.getElementById("myButton").addEventListener("click", function() {
                        var dropdownMenu = this.querySelector(".dropdown-menu");
                        dropdownMenu.style.display = (dropdownMenu.style.display === "block") ? "none" : "block";
                        }); 
                    </script>

                                


                </div>
                    <div class="btn btn-md btn--warning btn--book btn-control--home ">
                        <span style="padding: 0 17.5px;">
                            Admin
                            <div class="dropdown-menu">
                                <a href="../index.php">Trang chủ</a></br>
                            </div>
                        </span>
                    </div>
                </div>


            </div>
        </header>