<?php include 'donation-profileback.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تبرع الآن/دار الإحسان</title>
    <link rel="icon" href="img/ihsan.png" type="image/png">
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
     <link rel="stylesheet" href="css/donation-profile.css">
     <link rel="stylesheet" href="css/responsive.css">
    
     <link rel="stylesheet" href="css/fonts.css">
</head>
<body>
     <!--================ترويسة الصفحة =================-->
   <header class="header_area" style="direction: rtl;">
        <div class="top_menu row ">
            <div class="container">
           </div></div>
                
           
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
                            <li class="nav-item "><a class="nav-link" href="admin.php">الشخصية</a></li> 
                            <li class="nav-item"><a class="nav-link" href="call-profile.php">إتصل بنا</a></li> 
                             
                            <li class="nav-item"><a class="nav-link" href="children.php">الأطفال</a></li>  
                           <?php
                            $per_type=isset($_SESSION['types2']) ? $_SESSION['types2'] : "";
                            $com_type=isset($_SESSION['types']) ? $_SESSION['types'] : "";
 
                            if($com_type == "Company"){ ?>
                            <li class="nav-item" ><a class="nav-link" href="edit-company.php">تعديل الحساب</a></li>  <?php }

                            else { ?>
                                <li class="nav-item" ><a class="nav-link" href="edit.php">تعديل الحساب</a></li> <?php
                            } ?>
                   
                   <li class="nav-item"><a class="nav-link" href="visit.php">طلب زيارة للجمعية</a></li>
                            
                         <li class="nav-item active">  <a class="nav-link" href="donation-profile.php">
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

<div class="header text-center">
    <h2>تبرع الآن</h2>
    <p class="lead">الإحسان إلى اليتيم باب من أبواب الجنان</p>
</div>
<form action="#" method="post">
    <div class="don">
        <div class="container">
            <div class="row">
                <div class="inputs col-md-5 col-xs-12">
                    <div class="input pb-3">
                        <select name="select" class="form-control custom-select">
                           <option value="">:بند التبرع </option>
                           <option>زكاة</option>
                           <option>أضحية</option>
                           <option>كسوة عيد</option>
                           <option>صدقة</option>
                           <option>حقيبة مدرسية</option>
                           <option>إفطار صائم</option>
                           <option>ملابس</option>
                           <option>مرافق شتوية</option>
                           <option>تبرع عام</option>
                        </select>
                        <div class="Error" style="color:red; font-weight:bold;"> <?php echo "<center>" . $Error_array['select'] ."</center>" ?></div>
                       </div>
                       <div class="input1 pb-3">
                        <input type="text" class="form-control" name="money-prof" placeholder="المبلغ">
                        <div class="Error" style="color:red; font-weight:bold;"> <?php echo "<center>" . $Error_array['money'] ."</center>" ?></div>
                    </div>
                    <div class="input2 pb-3">
                        <select class="pay form-control custom-select" name="pay-prof">
                            <option value="">:الية الدفع</option>
                            <option>بنك</option>
                            <option>زيارة الجمعية</option>
                            <option>مندوب</option>
                        </select>
                        <div class="Error" style="color:red; font-weight:bold;"> <?php echo "<center>" . $Error_array['payment'] ."</center>" ?></div>
                    </div>
                    <div class="input3 pb-3 text-right">
                        <div class="form-check">
                        <label class="form-check-label" for="type1">
                            نقدي
                            </label>
                            &nbsp;  &nbsp; &nbsp;
                            <input class="form-check-input" type="radio" name="type-prof" id="type1" value="نقدي" checked>
                           
                        </div>
                        <div class="form-check">
                        <label class="form-check-label" for="type2">
                            عيني
                            </label>
                            &nbsp;  &nbsp; &nbsp;
                            <input class="form-check-input" type="radio" name="type-prof" id="type2" value="عيني">
                           
                        </div>
                </div>
                <div class="area ">
                    <textarea  name="text-prof" class="form-control" placeholder="ملاحظات" cols="15" rows="7"></textarea>
                </div>
                <div class="btn w-100">
                    <input type="submit" class="btn btn-primary w-50" style="background-color:orange; border-color:orange;" name="sup-prof" value="تبرع">
                    <div class="Error"  style="color:red; font-weight:bold; margin-top:5px;">   <?php if(!$check){echo  "<div class='alert alert-danger' role='alert'>" . "<center>" . $error . "</center>" ."</div>" ;} ?></div>
                    <div class="result"  style="color:green; font-weight:bold; margin-top:5px;"> <?php if(isset($result)){ echo "<center>" . "تم التبرع بنجاح" . "</center>" ; } ?></div>
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
                            <a href="call-profile.php"> <button type="button" class="btn" style="background-color: orange; font-weight: bold; float: right;  ">إتصل  بنا</button></a>
                        </div>
                       
    
    
                </div>
            </div>
        </div>
    </div>
</form>
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
            <p class="mbr-text"><br><em><a href="admin.php"> الصفحة الشخصية
</a><br></em>
<br><a href="call-profile.php">إتصل بنا
</a><br>
<br><a href="children.php">الأطفال
</a><br>
<br><?php
                            $per_type=isset($_SESSION['types2']) ? $_SESSION['types2'] : "";
                            $com_type=isset($_SESSION['types']) ? $_SESSION['types'] : "";
 
                            if($com_type == "Company"){ ?>
                            <a class="nav-link" href="edit-company.php">تعديل الحساب</a>  <?php }

                            else { ?>
                                <a class="nav-link" href="edit.php">تعديل الحساب</a> <?php
                            } ?>
</a>
<br><a href="visit.php">طلب زيارة للجمعية</a>
<br><br><a href="donation-profile.php">تبرع الآن</a>
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