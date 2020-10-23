
<?php include 'callback.php' ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إتصل بنا/دار الإحسان</title>
    <link rel="icon" href="img/ihsan.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/call2.css">
    
    
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
               
        </div>	
        <div class="main_menu">
            <nav class="navbar  navbar-expand-lg navbar-light   " style="direction: rtl; ">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h " href="index.html"><img src="images/ihsan.png" style="margin-right: 10px;"  alt=""> </a>
        
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
                            <li class="nav-item active"><a class="nav-link" href="call.php">إتصل بنا </a></li> 
                            <li class="nav-item submenu dropdown ">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">تسجيل دخول</a>
                                <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="sign-in.php">تسجيل دخول مستخدم</a></li>
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
<h2 class="head">إتصل بنا</h2>
<p class="lead text-center">في حال مواجهة مشكلة معينة,أو للأستفسار عن أي أمر</p>

<form action="#" method="post">
<div class="call">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-12">
                <div class="form">
                    
                    <div class="form1 pb-3">
                <input  type="text" class="form-control" name="N" placeholder="إسم المستخدم">
                <div class="Error" style="font-weight:bolder; margin-top:1px; margin-bottom:-5px; color:red;"> <?php echo "<center>" . $Error_array['name'] .  "</center>" ?></div>
                    </div> 
                    <div class="form2 pb-3">
                <input  type="text" class="form-control" name="P" placeholder="البريد الإلكتروني">
                <div class="Error" style="font-weight:bolder; margin-top:1px; margin-bottom:-5px; color:red;"> <?php echo "<center>" .   $Error_array['email']  . "</center>"?> </div>
                    </div>
                    <div class="form3 pb-3">
                        <input type="text" class="form-control" placeholder="الموضوع" name="obj">
                        <div class="Error" style="font-weight:bolder; margin-top:1px; margin-bottom:-5px; color:red;"> <?php echo "<center>" .  $Error_array['obj'] . "</center>" ?> </div>
                    </div>
                    <div class="form4 pb-3">
                <textarea  name="text" class="form-control" placeholder="أدخل الرسالة"  cols="15" rows="7"></textarea>
                <div class="Error" style="font-weight:bolder; margin-top:1px; margin-bottom:-5px; color:red;"> <?php echo "<center>" .  $Error_array['message'] . "</center>" ?> </div>
                    </div>
                <div class="btn w-100">
                        <input type="submit" class="btn btn-primary w-50" style="background-color:orange; border-color:orange;" name="sub" value="أرسل">
                       
                    </div>
                <?php  if(!$check){echo "<div class='alert alert-danger' role='alert'>" . "<font size='5px' color='red'>" . "<p>" ."<center>". $error. "</center>". "</p>" . "</font>"."</div>";}?>
            </div>
            </div>
            
           <div class="cap col-md col-xs-12">
               <div class="caption">
                   <h3>العنوان</h3>
                   <p class="lead">ماركة الجنوبية – نادي السباق-الحزام الدائري- صالحية العابد -شارع محمد المفتي-إسكان الفردوس – بناية رقم 1</p>
               </div>
               <hr>
            <div class="caption1">
                <h4>الهاتف</h4>
                <p class="lead">0096264900411</p>
                <p class="lead">00962777877723</p>
            </div>
            <hr>
            <div class="caption2">
                <h4>البريد الإلكتروني</h4>
                <p class="lead">info@daralehsan.org</p>
                
            </div>
            
        </div>
    </div>
    </div>
</div>
</form>
<!-------------------------------------------- map ----------------------------------------------------->
<section class="map2 cid-rXMzu8L0WU" >
    <div class="container">
        <div class="mediaa-container-row">
            <div class="col-md-12">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13540.576074256967!2d36.00436718279761!3d31.956989405412838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b5e03f29669ad%3A0xd3d5315fd4956fcc!2z2K_Yp9ixINin2YTYo9it2LPYp9mGINmE2LHYudin2YrYqSDZiNiq2KPZh9mK2YQg2KfZhNil2YrYqtin2YU!5e0!3m2!1sar!2sjo!4v1588376004126!5m2!1sar!2sjo" ></iframe></div>
        </div>
    </div>
</div>
</section>
<!-------------------------------------------------------------- footer ----------------------->
<section class="cid-rUEBEsYsPh mbr-reveal" id="footer1-9" style="direction: rtl;margin-top:100px ">
<div class="container-fluid ">
    <div class="media-container-row content text-white ">
        <div class="col-12 col-md-3">
            <div class="media-wrap">
                    <img src="images/daralehsan-logo-192x57.png" alt="Mobirise" title=""  style="margin-left: 69px;">
                </a>
            </div>
        </div>
        <div class=" col-12 col-md-3 mbr-fonts-style display-7">
            <h3 class="pb-0"><em><strong>العنوان</strong></em></h3>
            <p class="mbr-text" style="direction:ltr"><br>ماركة الجنوبية - نادي السباق - الحزام الدائري - صالحية العابد<br> -شارع محمد المفتي- إسكان  الفردوس - بناية رقم 1 
<br>+962 77 787 7723
<br>+962 6 490 0411</p>
        </div>
        <div class="col-12 col-md-3 mbr-fonts-style display-7">
            <h3 class="pb-4"><em><strong>
                المعلومات البنكية</strong></em></h3>
            <p class="mbr-text">البنك الإسلامي الأردني
<br>فرع تلاع العلي
<br>
<br>رقم الحساب:
<br>14000
<br>
<br>رقم الحساب الكامل:
<br>1663215410400002
<br>
<br>IBAN:
<br>JO22JIBA0030001663215410400002
<br>
<br>swift code:
<br>JIBAJOAMXXX</p>
        </div>
        <div class=" mas col-12 col-md-3 mbr-fonts-style display-7 ">
            <h3 class="  pb-0"><em><strong>
                المشاريع</strong></em></h3>
            <p class="mbr-text"><br><em><a href="ايواء/House.php">مشروع ايواء دار الاحسان
</a><br></em>
<br><a href="كفالات/gurantee-page.php">مشروع الكفالات الخارجية
</a><br>
<br><a href="قادة المستقبل/future-leader.php">مشروع قادة المستقبل
</a><br>
<br><a href="طالب العلم اليتيم/student-box.php">صندوق طالب العلم اليتيم
</a><br>
</p>
        </div>
    </div>
    <div class="footer-lower">
        <div class="media-container-row">
            <div class="col-sm-12">
                <div class="col-12 copyright text-center" >
                    <span class="mbr-text mbr-fonts-style display-7"style="font-weight:bold;color:white;">
                        © Copyright 2020 AABU-STUDENT- All Rights Reserved
</span>
                </div>
                <hr>
            </div>
        </div>
        <div class="media-container-row mbr-white">
            <div class="col-md-3">
                <div class="social-list align-center">
                    <div class="soc-item">
                        <a href="https://www.youtube.com/channel/UCouTqi-4yNcebeou37YCXgg" target="_blank">
                            <img src="images/youtube.png">
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://ar-ar.facebook.com/DarAlehsan.jo/" target="_blank">
                            <img src="images/facebook.png">                                </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://twitter.com/daralehsan" target="_blank">
                            <img src="images/twt.png">                                </a>
                        </a>
                    </div>
                    
                    
                    
                </div>
            </div>
          
        </div>
     
    </div>
    
</div>

</section>
</body>
</html>