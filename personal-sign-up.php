<?php include 'PersonalInsert.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="img/ihsan.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="css/style.css">
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
                                        <li class="nav-item"><a class="nav-link" href="sign-in.php">تسجيل دخول مستخدم</a></li>
                                        <li class="nav-item"><a class="nav-link" href="sign-in-admin.php">تسجبل دخول ادمن</a></li>
                                </ul>
                            </li>   
                            <li class="nav-item submenu dropdown ">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">إنشاء حساب</a>
                                <ul class="dropdown-menu">
                                        <li class="nav-item active"><a class="nav-link" href="personal-sign-up.php">إنشاء حساب كفرد</a></li>
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
    <div class="head text-center" style=" font-weight:bold; color:orange; ">
<h3>إنشاء حساب كمستخدم جديد</h3>
</div>

    <div class="main" style="overflow-y:hidden;">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="#">
                        <div class="form-row">
                        <div class="form-group">
                                <label for="last_name">الاسم الاخير</label>
                                <input type="text" class="form-input" name="Lastname" id="last_name" />
                                <div style="margin_right:100px; color:red; font-weight:bolder; font-size:17px;"> <?php echo "<center>". $Error_array['l_name']. "<center>" ; ?></div>
                            </div>
                            <div class="form-group">
                                <label for="first_name">الاسم الاول</label>
                                <input type="text" class="form-input" name="firstname" id="first_name" />
                          <div style="margin_right:100px; color:red; font-weight:bolder; font-size:17px;">  <?php echo "<center>". $Error_array['f_name'] . "<center>" ; ?></div>
                            </div>
                           
                        </div>
                        <div class="form-row">
                            <div class="form-group form-icon">
                                <label for="birth_date">تاريخ الميلاد</label>
                                <input type="date" class="form-input" name="birth_date" id="birth_date" placeholder="MM-DD-YYYY" />
                                <div style="margin_right:100px; color:red; font-weight:bolder; font-size:17px;"> <?php echo "<center>". $Error_array['b_date']. "<center>" ; ?></div>
                            </div>
                            <div class="form-radio" style="direction:rtl">
                                <label for="gender">الجنس</label>
                                <div class="form-flex">
                                    <input type="radio" name="gender" value="male" id="male" checked="checked" />
                                    <label for="male">ذكر</label>
    
                                    <input type="radio" name="gender" value="female" id="female" />
                                    <label for="female">انثى</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">رقم الهاتف</label>
                            <input type="text" class="form-input" name="phone_number" id="phone_number" />
                            <div style="margin_right:100px; color:red; font-weight:bolder; font-size:17px;"> <?php echo "<center>". $Error_array['phone_number']."<center>" ; ?></div>
                        </div>
                        <div class="form-row">
                        <div class="form-group">
                                <label for="re_password">اعد كتابة الرقم السري</label>
                                <input type="password" class="form-input" name="re_password" id="re_password"/>
                                <div style="margin_right:100px; color:red; font-weight:bolder; font-size:17px;"> <?php echo "<center>". $Error_array['re_password']."<center>" ; ?></div>
                            </div>  
                            <div class="form-group">
                                <label for="password">الرقم السري</label>
                                <input type="password" class="form-input" name="password" id="password"/>
                                <div style="margin_right:100px; color:red; font-weight:bolder; font-size:17px;"><?php echo "<center>".$Error_array['password']."<center>" ; ?></div>
                            </div>
                            
                                <div class="form-group">
                                    <label for="email">البريد الالكتروني</label>
                                    <input type="email" class="form-input" name="email" id="email"/>
                                    <div style="margin_right:100px; color:red; font-weight:bolder; font-size:17px;"> <?php echo "<center>".$Error_array['email']."<center>" ; ?></div>
                                </div>
                              
                                <div class="form-group">
                                    <label for="city">المدينة</label>
                                    <div class="select-list">
                                        <Select name="city" id="" class="form-control" style="width:500px;height:57px;">
                                            <option value="عمان">عمان</option>
                                            <option value="الزرقاء">الزرقاء</option>
                                            <option value="إربد">إربد</option>
                                            <option value="المفرق">المفرق</option>
                                            <option value="السلط">السلط</option>
                                            <option value="مأدبا">مأدبا</option>
                                            <option value="عجلون">عجلون</option>
                                            <option value="جرش">جرش</option>
                                            <option value="الكرك">الكرك</option>
                                            <option value="الطفيلة">الطفيلة</option>
                                            <option value="معان">معان</option>
                                            <option value="العقبة">العقبة</option>
                                        </Select>
                                    </div>
                                </div>
                           
                        <div class="btn w-100">
                            <input type="submit" name="submit" id="submit" class="btn btn-primary w-50" style="background-color:orange;border-color:orange;font-weight:bold;margin-top:40px;margin-bottom:-100px" value="إنشاء حساب"/>
                            
                                <div class="Error" style="margin-right:50px; margin-left:100px; margin-top:90px; margin-bottom:5px; font-weight:bold; color:red; font-size:25px">
                                <?php 
                                    if(!$check){
                                        echo "<center>" . $error . "</center>";
                                    }
                                ?>
                                </div>
                                <div class="result" style="color:green;font-weight:bold;">
                                    <?php if(isset($result)){
                                        echo "<center>" . "تم إنشاء حسابك بنجاح" . "</center>" ;
                                    }
                                    ?>
                                    </div>
                        </div>

                    </form>
                </div>
            </div>
        </section>
   
    </div>

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