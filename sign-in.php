<?php include 'sign-inback.php'; ?>
<?php include 'signinback2.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="img/ihsan.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دار الاحسان تسجيل دخول</title>
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="css/bootstrap.css">
       <link rel="stylesheet" href="css/themify-icons.css">
       <link rel="stylesheet" href="css/flaticon.css">
       <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
       <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
       <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="css/sign-in.css">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>
     <!--================ترويسة الصفحة =================-->
     <header class="header_area" style="direction: rtl;">
        <div class="top_menu row ">
            <div class="container">
               
        </div>	
        <div class="main_menu">
            <nav class="navbar  navbar-expand-lg navbar-light   " style="direction: rtl; ">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h " href="index.html"><img src="images/ihsan.png" style="margin-right: -35px;"  alt=""> </a>
        
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset "  id="navbarSupportedContent" style="direction: rtl;">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item "><a class="nav-link" href="index.php">الرئيسية</a></li> 
                            <li class="nav-item "><a class="nav-link" href="photo.php">معرض الصور</a></li> 
                            <li class="nav-item"><a class="nav-link" href="call.php">إتصل بنا </a></li> 
                            <li class="nav-item submenu dropdown ">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">تسجيل دخول</a>
                                <ul class="dropdown-menu">
                                        <li class="nav-item  active"><a class="nav-link" href="sign-in.php">تسجيل دخول مستخدم</a></li>
                                        <li class="nav-item"><a class="nav-link" href="sign-in-admin.php">تسجبل دخول ادمن</a></li>
                                </ul>
                            </li>   
                            <li class="nav-item submenu dropdown ">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">إنشاء حساب</a>
                                <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="personal-sign-up.php">إنشاء حساب كفرد</a></li>
                                        <li class="nav-item"><a class="nav-link" href="company-sign-up.php">إنشاء حساب كشركة</a></li>
                                </ul>
                            </li> 
                    

                            <li class="nav-item submenu dropdown ">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">من نحن </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog.php">عن الجمعية</a></li>
                                <li class="nav-item"><a class="nav-link" href="management.php">الهيئة الإدارية</a></li>
                                <li class="nav-item"><a class="nav-link" href="management1.hphp">الإدارة التنفيذية</a></li>
                                <li class="nav-item"><a class="nav-link" href="goals.php">أهدافنا</a></li>
                                <li class="nav-item"><a class="nav-link" href="message.php">رسالتنا</a></li> 
                                </ul>
                            </li> 
                         <li class="nav-item">  <a class="nav-link" href="donation1.php">
                                        <span>
                                            تبرع الآن
                                        </span>
                                    </a></li> 
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
</header>
    <div class="container1">


        <div class="d-flex justify-content-center h-100">

            <div class="card">
            
                <div class="card-header text-center">
                    <h3>تسجيل دخول</h3>
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user " ></i></span>
                            </div>
                            <input type="text" class="form-control" name="user" placeholder="username/Email/phone">
                           
                        </div>
                        <div class="Error" style="color:red;font-weight:bold;margin-top:-5px"> <?php echo "<center>". $Error_array['Uname'] . "</center>" ; ?></div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" name="pass" placeholder="password">

                        </div>
                        <div class="Error" style="color:red;font-weight:bold;margin-top:-5px;margin-bottom:5px">  <?php echo "<center>". $Error_array['Password'] . "</center>" ; ?></div>
                        <div class="form-group">
                            <input type="submit" value="Login" name="btn" class="btn float-right login_btn">
                           
                        </div>
                       
                    </form>
                </div>
                <div class="Error" style="color:red;font-weight:bold;margin-top:px;margin-bottom:100px"> 
                        <?php 
                                    if(!$check){
                                        echo "<center>" . $error . "</center>";
                                    }
                                   
                                   
                                ?>
                                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                      تسجيل حساب<a href="personal-sign-up.php"> لا تمتلك حساب؟</a>
                    
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</body>
</html>