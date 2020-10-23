
<?php include 'sign-inback.php' ; ?>
<?php include 'signinback2.php' ; ?>

<!DOCTYPE html>
    <html lang="en">
    <head>
    
    <link rel="icon" href="img/ihsan.png" type="image/png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>  الملف الشخصي/دار الاحسان</title>
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
        <link rel="stylesheet" href="css/admin.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/fonts.css">
        </head>
        <body>
       <!--================ترويسة الصفحة =================-->
       <header class="header_area" style="direction: rtl;">
        <div class="top_menu row ">
            <div class="container">

                <div class="float-left" style="margin-left:380px;margin-top:10px;font-weight:bold;font-size:30px;background-color:whitesmoke">
              
            <?php
             $per_type=isset($_SESSION['types2']) ? $_SESSION['types2'] : "";
             $com_type=isset($_SESSION['types']) ? $_SESSION['types'] : "";
           
             if($com_type =="Company"){
               // $com_name=isset($_SESSION['name']) ? $_SESSION['name'] : "no";
                 echo "<center>" . "Welcome " .  $_SESSION['User'] . "</center>";
             }
             else{
             echo "<center>" . "welcome " . $_SESSION['User'] . "</center>"  ;
             }
             ?></div></div>
                            <div style="font-weight:bold;margin-top:15px;margin-left:20px"> <a href="logout.php">تسجيل الخروج</a></div>
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
                            <li class="nav-item active"><a class="nav-link" href="admin.php">الشخصية</a></li> 
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

<div class="show1 text-center">
<h2>الأطفال الذين قمت بكفالتهم</h2>
</div>


<div class="table">
<div class="container">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>أسم الطفل</th>
        <th>العمر</th>
        <th>القصة</th>
        <th>المرحلة الدراسية</th>
        <th>المستوى الدراسي</th>
        <th>الحالة الصحية</th>
        <th>الهدايا</th>
      </tr>
    </thead>
    </div>
    <?PHP 
$per_type=isset($_SESSION['types2']) ? $_SESSION['types2'] : "";
$com_type=isset($_SESSION['types']) ? $_SESSION['types'] : "";

if($com_type == 'Company'){
 $ID_com=isset($_SESSION['company_id']) ?  $_SESSION['company_id'] : "" ;
 
$query="select * from guarantee   where company_ID = '$ID_com' ";
  $result=mysqli_query($conn,$query);
  while($row=mysqli_fetch_assoc($result)){
    $id=$row['children_ID'];
$query1="select * from children where '{$id}' = ID  ";
$result1=mysqli_query($conn,$query1);
while($row1=mysqli_fetch_assoc($result1)){
    
    $action="<a href='gift.php?ID={$id}' class='btn btn-success'> ارسل هديه</a>";
    echo"<tr><td>".$row1['NAME']."</td><td>".$row1['AGE']."</td><td>".$row1['STORY']."</td><td>".$row1['STUDY']."</td><td>".$row1['Study_Status']."</td><td>".$row1['HEALTHY']."</td><td>".$action."</td></tr>";
}
} 
} 
else{
    $ID_per=isset($_SESSION['pid']) ? $_SESSION['pid'] : "";

    $query="select * from guarantee_personal where personal_ID = '$ID_per' ";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['children_ID'];
        $query1="select * from children where '{$id}'=ID ";
        $result1=mysqli_query($conn,$query1);
        while($row1=mysqli_fetch_assoc($result1)){
            
            $action="<a href='gift.php?ID={$id}' class='btn btn-success'> ارسل هديه</a>";
            echo"<tr><td>".$row1['NAME']."</td><td>".$row1['AGE']."</td><td>".$row1['STORY']."</td><td>".$row1['STUDY']."</td><td>".$row1['Study_Status']."</td><td>".$row1['HEALTHY']."</td><td>".$action."</td></tr>";
        }
    }
}

  echo "</table>";
  


?>
  <div class="show" style="margin-top:100px;">
<?php 

?>
</div>
</div>
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