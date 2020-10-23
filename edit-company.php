<?php include 'edit-companyback.php' ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="img/ihsan.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل الحساب الشخصي</title>
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
       <link rel="stylesheet" href="css/edit.css">
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
                            <li class="nav-item"><a class="nav-link" href="call-profile.php">أتصل بنا</a></li> 
                             
                            <li class="nav-item"><a class="nav-link" href="children.php">الأطفال</a></li>  
                           <?php
                            $per_type=isset($_SESSION['types2']) ? $_SESSION['types2'] : "";
                            $com_type=isset($_SESSION['types']) ? $_SESSION['types'] : "";
 
                            if($com_type == "Company"){ ?>
                            <li class="nav-item active" ><a class="nav-link" href="edit-company.php">تعديل الحساب</a></li>  <?php }

                            else { ?>
                                <li class="nav-item active" ><a class="nav-link" href="edit.php">تعديل الحساب</a></li> <?php
                            } ?>
                   
                   <li class="nav-item"><a class="nav-link" href="visit.php">طلب زيارة للجمعية</a></li>
                            
                         <li class="nav-item ">  <a class="nav-link" href="donation-profile.php">
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
    <h3>تعديل الحساب الشخصي</h3>
    <p class="lead">لتعديل حسابك الشخصي قم بأدخال المعلومات المطلوبة بالمكان المناسب </p>
</div>
<form action="#" method="POST">
    <div class="edit">
        <div class="container">
            <div class="row">
            
                <div class="inputs  col-md-5 col-xs-12">
                    
                    
                    <div class="input pb-3">
                        <input type="text" name="name" class="form-control" placeholder="إسم الشركة" size="50px">
                        <div class="Error" style=" margin-bottom:-7px; font-weight:bold; color:red"> <?php echo "<center>" . $Erorr_array['name'] . "</center>" ; ?></div>
                    </div>
                    <div class="input pb-3">
                        <input type="text" name="name1" class="form-control" placeholder="رقم السجل التجاري" size="50px">
                        <div class="Error" style=" margin-bottom:-7px; font-weight:bold; color:red"> <?php echo "<center>" . $Erorr_array['l_name'] . "</center>" ; ?></div>
                    </div>
                   
                    <div class="input1 pb-3">
                        <input type="text" name="email" class="form-control" placeholder="البريد الإلكتروني" size="50px">
                        <div class="Error" style="margin-bottom:-7px; font-weight:bold; color:red"><?php echo "<center>" .  $Erorr_array['email'] . "</center>" ; ?></div>
                    </div>
                    <div class="input2 pb-3">
                        <input type="password" name="old-pass" class="form-control" placeholder="كلمة المرور السابقة" size="50px">
                        <div class="Error" style="margin-bottom:-7px; font-weight:bold; color:red"> <?php echo "<center>" .  $Erorr_array['old_pass'] . "</center>" ; ?></div>
                    </div>
                    <div class="input3 pb-3">
                        <input type="password" name="pass" class="form-control" placeholder="كلمة المرور الجديدة" size="50px">
                        <div class="Error" style="margin-bottom:-7px; font-weight:bold; color:red"> <?php echo "<center>" .  $Erorr_array['new_pass'] . "</center>" ; ?></div>
                    </div>
                    <div class="input4 pb-3">
                        <input type="password" name="re-pass" class="form-control" placeholder="إعادة كلمة المرور الجديدة" size="50px">
                        <div class="Error" style="margin-bottom:-7px; font-weight:bold; color:red"> <?php echo "<center>" .   $Erorr_array['re_pass'] . "</center>" ?></div>
                    </div>
                    <div class="input5 pb-3">
                        <input type="text" name="phone" class="form-control" placeholder="رقم الهاتف" size="50px">
                        <div class="Error" style="margin-bottom:-7px; font-weight:bold; color:red"> <?php echo "<center>" .   $Erorr_array['phone'] . "</center>" ?></div>
                    </div>
                    <div class="input6 pb-3">
                        <select name="option" class="form-control">
                        <option value="private">(قطاع خاص (شركة او مؤسسة</option>
                                    <option value="goverment">(مؤسسة قطاع عام (حكومي</option>
                                    <option value="team-v">(مبادرات او فرق تطوعية(غير مسجلة</option>
                                    <option value="non-profit">(مؤسسة او جمعية او شركة غير ربحية (مسجلة</option>
                        </select>
                    </div>
                    <div class="input6 pb-3">
                    <div class="btn w-100">
                        <input type="submit" class="btn btn-primary w-50" style="background-color:orange; border-color:orange;" name="sub" value="تعديل">
                        <div class="Error" style="margin-right:40px; margin-bottom:5px; margin-top:-70px; font-weight:bold; color:red">  <?php if(!$check){echo "<center>". $erorr . "<center>" ; } ?></div>

                    </div>
                    </div>
                    <div class="result" style=" margin-top:15px; font-weight:bold; color:green"><?php if(isset($Result)){ echo "<center>" . "تم تعديل معلومات الحساب بنجاح،يرجى تسجيل الخروج و إعادة الدخول مرة أخرى" . "</center>" ;} ?> </div>

                </div>

                <div class="info col-md col-xs-12">
                    <img src="images/Edit-logo-993E95DE93-seeklogo.com.gif">
                   
                    <p style="font-size: 20px; font-weight: bolder; color: gray; margin-top: 15px ;">:للأتصال أو الإستفسار </p>
                  <a href="call.php"> <button type="button" class="btn" style="background-color: orange; font-weight: bold;">إتصل  بنا</button></a>
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