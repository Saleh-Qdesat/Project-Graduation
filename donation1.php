<?php include 'donationback.php' ; ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="icon" href="img/ihsan.png" type="image/png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> تبرع الان/دار الاحسان</title>
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
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/donation.css">

        <link rel="stylesheet" href="css/responsive.css">
        
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
                            <li class="nav-item"><a class="nav-link" href="call.php">إتصل بنا </a></li> 
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
                         <li class="nav-item active">  <a class="nav-link" href="donation1.php">
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
<div class="header text-center col-12">
<h2>تبرع الان</h2>
<p class="lead">إلى كل من لديه قلب ينبض حاول معنا إسعاد قلب يتيم معاً نصنع حياة أفضل للطفل اليتيم</p>
</div>
<form action="#" method="POST">
    <div class="donation">
        <div class="container">
            <div class="row">
                <div class="inputs col-md-5 col-xs-12">
                    <div class="input pb-3">
                        <input type="text" class="form-control" name="name" placeholder="الأسم الرباعي" size="50px">
                        <div class="Error"  style="font-weight:bolder;margin-top:3px;color:red;"><?php echo "<center>" .   $Error_array['name'] . "</center>" ; ?></div>
                    </div>
                    <div class="input1 pb-3">
                        <input type="text" class="form-control" name="email" placeholder="البريد الألكتروني" size="50px">
                        <div class="Error" style="font-weight:bolder;margin-top:3px;color:red"><?php echo "<center>" .   $Error_array['email'] . "</center>" ; ?></div>
                    </div>
                    <div class="input2 pb-3">
                        <input type="text" class="form-control" name="phone" placeholder="رقم الهاتف" size="50px">
                        <div class="Error" style="font-weight:bolder;margin-top:3px;color:red"><?php echo "<center>" .   $Error_array['phone'] . "</center>" ; ?> </div>
                    </div>
                    <div class="input3 pb-3 text-right">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="type1" value="نقدي" >
                                <label class="form-check-label" for="type1">
                                نقدي
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="type2" value="عيني">
                                <label class="form-check-label" for="type2">
                                عيني
                                </label>
                            </div>
                    </div>
                    <div class="input4 pb-3">
                     <select name="select" class="form-control custom-select">
                        <option selected>:بند التبرع </option>
                        <option>زكاة</option>
                        <option>أضحية</option>
                        <option>كسوة عيد</option>
                        <option>كفالة يتيم</option>
                        <option>صدقة</option>
                        <option>حقيبة مدرسية</option>
                        <option>إفطار صائم</option>
                        <option>ملابس</option>
                        <option>مرافق شتوية</option>
                        <option>تبرع عام</option>
                     </select>
                    </div>
                    <div class="input5 pb-3">
                        <input type="text" class="form-control" name="money" placeholder="المبلغ">
                        <div class="Error" style="font-weight:bolder;margin-top:3px;color:red"><?php echo "<center>" .   $Error_array['money'] . "</center>"  ?> </div>
                    </div>
                    <div class="input6 pb-3">
                        <select class="pay form-control custom-select" name="pay">
                            <option selected>:الية الدفع</option>
                            <option>بنك</option>
                            <option>زيارة الجمعية</option>
                            <option>مندوب</option>
                        </select>
                    </div>
                    <div class="area ">
                        <textarea  name="text" class="form-control" placeholder="ملاحظات" cols="15" rows="7"></textarea>
                    </div>
                    <div class="btn w-100">
                        <input type="submit" class="btn btn-primary w-50" style="background-color:orange; border-color:orange;" name="sup" value="تبرع">
                    
                    </div>
                    <div class="Error1" style="background-color:whitesmoke; margin-top:10px; margin-bottom:5px; font-weight:bold; color:red"> <?php if(!$check){
                            echo "<center>" . $error . "</center>" ;
                        }
                        ?>
                       
                        </div>
                
                    
                </div>
                <div class="info col-md col-xs-12">
                    <div class="information">
                        <h2>معلومات بنكية</h2>
                        <p class="lead">البنك الإسلامي الأردني
                            فرع تلاع العلي</p>
                        </div>  
                        <hr>
                        <div class="information1">
                            <h4>رقم الحساب:</h4>
                            <p class="lead">14000</p>
                        </div>
                        <hr>
                        <div class="information2">
                            <h4>رقم الحساب الكامل:</h4>
                            <p class="lead">1663215410400002</p>
                        </div>  
                        <hr>
                        <div class="information3">
                        <a href="personal-sign-up.php">   <button type="button" class="btn" style="background-color: orange; font-weight: bold; margin-left:25px; margin-top:10px;">إنشاء حساب</button></a><br>
                            <a href="call.php"> <button type="button" class="btn" style="background-color: orange; font-weight: bold; margin-top: -67px; margin-left: 165px;">إتصل  بنا</button></a>
                        </div>
                       
    
    
                </div>
            </div>
        </div>
    </div>
</form>
<!-- progress -->
<section class="progress-bars1 cid-rXMQ1qSe14" id="progress-bars1-y">
    
    

    

    <div class="container">
        <h4 class="mbr-section-title pb-2 align-center text-center mbr-fonts-style display-2"><em><strong>نبذة عن مجموع التبرعات السنوية</strong></em></h4>

        

        <div class="progress_elements">
            <div class="progress1 pb-3">
                <div class="title-wrap">
                    <div class="progressbar-title mbr-fonts-style display-5">
                        <p><strong>مجموع كفالات الأسر السنوية 55,000 دينار أردني</strong></p>
                    </div>
                    <div class="progress_value mbr-fonts-style display-7">
                        <div class="progressbar-number"></div>
                    </div>
                </div>
                <progress class="progress progress-primary" max="100" value="36.67">
                </progress>
            </div>
            
            <div class="progress2 pb-3">
                <div class="title-wrap">
                    <div class="progressbar-title mbr-fonts-style display-5">
                        <p><strong>تقديم مواد عينية للأسر سنويا 45,000 دينار أردني&nbsp;</strong><br></p>
                    </div>
                <div class="progress_value mbr-fonts-style display-7">
                    <div class="progressbar-number"></div>
                    
                </div>
                </div>
                <progress class="progress progress-primary" max="100" value="30">
                </progress>
            </div>
            
            <div class="progress3 pb-3">
                <div class="title-wrap">
                    <div class="progressbar-title mbr-fonts-style display-5">
                        <p><strong>مصاريف الكهرباء والمياه السنوية 15,000 دينار أردني&nbsp;</strong><br></p>
                    </div>
                    <div class="progress_value mbr-fonts-style display-7">
                        <div class="progressbar-number"></div>
                        
                    </div>
                </div>
                <progress class="progress progress-primary" max="100" value="8">
                </progress>
            </div>
            
            <div class="progress4 pb-3">
                <div class="title-wrap">
                    <div class="progressbar-title mbr-fonts-style display-5">
                        <p><strong>تقديم دروس تقوية وبرامج تعليمية وترفيهية سنويا 25,000 دينار أردني&nbsp;</strong><br></p>
                    </div>
                <div class="progress_value mbr-fonts-style display-7">
                    <div class="progressbar-number"></div>
                    
                </div>
                </div>
                <progress class="progress progress-primary" max="100" value="16.67">
                </progress>
            </div>

            <div class="progress5 pt--3">
                <div class="title-wrap">
                    <div class="progressbar-title mbr-fonts-style display-5">
                        <p><strong>مصاريف الرعاية الصحية السنوية 10,000 دينار أردني&nbsp;</strong><br></p>
                    </div>
                <div class="progress_value mbr-fonts-style display-7">
                    <div class="progressbar-number"></div>
                    
                </div>
                </div>
                <progress class="progress progress-primary" max="100" value="6.67">
                </progress>
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