<?php include 'edit-adminback.php' ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل الحساب</title>
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="css/bootstrap.css">
       <link rel="stylesheet" href="css/themify-icons.css">
       <link rel="stylesheet" href="css/flaticon.css">
       <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
       <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
       <link rel="stylesheet" href="vendors/animate-css/animate.css">
       <!-- FontAwesome CSS -->
       <link rel="stylesheet" href="css/font-awesome.min.css">
       <!-- main css -->
       <link rel="stylesheet" href="css/edit-admin.css">
       <link rel="stylesheet" href="css/responsive.css">
       <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp'>
       <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
       <link rel="stylesheet" href="css/fonts.css">
</head>
<body>
     <!--================ترويسة الصفحة =================-->
<header class="header_area" style="direction: rtl;">
        <div class="top_menu row ">
            <div class="container">
           
                <div class="float-left" style="margin-left:80px;">
              
            
                </div>
            <div class="items"> 
                    <ul class="list header_social">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                        
                    </ul>	
                </div>
            </div>	
        </div>	
        <div class="main_menu">
            <nav class="navbar  navbar-expand-lg navbar-light   " style="direction: rtl; ">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h " href="index.html"><img src="images/ihsan.png" style="margin-right: -50px;"  alt=""> </a>
        
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset "  id="navbarSupportedContent" style="direction: rtl;">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                             
                            <li class="nav-item"><a class="nav-link" href="admin-profile.php">الشخصية</a></li> 
                             
                            <li class="nav-item active" ><a class="nav-link" href="edit-admin.php">تعديل الحساب</a></li>  
                            <li class="nav-item "><a class="nav-link" href="sign-in-admin.php">تسجيل خروج</a></li>  
                             
                    

                           
                        
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
</header>
<body>
<div class="show1 text-center">
<h3>تعديل حساب الأدمن</h3>
</div>
<form action="#" method="post">
<div class="edit">
<div class="container">
<div class="row">
<div class="form col-md-5 col-xs-12">
<div class="form1 pb-3">
<input type="text" name="name" class="form-control" placeholder="أسم الأدمن">
<?php echo "<center>" . $Error_array['name'] . "</center>" ; ?>
</div>
<div class="form2 pb-3">
<input type="password" name="password" class="form-control" placeholder="كلمة المرور السابقة">
<?php echo "<center>" . $Error_array['pass'] . "</center>" ; ?>
</div>
<div class="form3 pb-3">
<input type="password" name="new-password" class="form-control" placeholder="كلمة المرور الجديدة">
<?php echo "<center>" . $Error_array['n-pass'] . "</center>" ; ?>
</div>
<div class="form4 pb-3">
<input type="password" name="re-password" class="form-control" placeholder="إعادة كلمة المرور الجديدة">
<?php echo "<center>" . $Error_array['re-pass'] . "</center>" ; ?>
</div>
<div class="btn w-100">
<input type="submit" name="sub" class="btn btn-primary w-50" style="background-color:orange; border-color:orange;" value="تعديل" >
<?php if(!$check){ echo "<center>" . $error . "</center>" ; } ?>
</div>
</div>
</div>
</div>
</div>




</form>
</body>
</html>