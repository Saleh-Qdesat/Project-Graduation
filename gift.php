 <?php include 'giftback.php' ?>
 <?php 
 $host="localhost";
 $user="root";
 $password="";
 $dbname="graduationdb";
 $conn=mysqli_connect($host,$user,$password,$dbname);
 if(isset($_GET["ID"]))
 {
    $idurl=$_GET["ID"]; 
    $company_type=isset($_SESSION['types']) ? $_SESSION['types'] : "";
    if($company_type=='Company')  
    {                         
        $ID_com=isset($_SESSION['company_id']) ?  $_SESSION['company_id'] : "" ;
        $query4="select * from guarantee   where company_ID = $ID_com ";
        $result4=mysqli_query($conn,$query4);
       while( $row=mysqli_fetch_assoc($result4)){
        $id=$row['children_ID'];
        $query1="select * from children where ID='$id'";
        $result1=mysqli_query($conn,$query1);
        while($row1=mysqli_fetch_assoc($result1)){
        if($id==$idurl=$_GET["ID"]){
                $childrenName = $row1['NAME'];   
            }                       
         }
    }
}
    else
    {
        $ID_per=isset($_SESSION['pid']) ? $_SESSION['pid'] : "";
        $query3="select * from guarantee_personal where personal_ID = $ID_per ";
        $result3=mysqli_query($conn,$query3);
        while($row3=mysqli_fetch_assoc($result3)){
        $id=$row3['children_ID'];
        $query1="select * from children where ID=$id ";
        $result1=mysqli_query($conn,$query1);
        while($row1=mysqli_fetch_assoc($result1)){
        if($id==$idurl=$_GET["ID"]){
            $childrenName = $row1['NAME'];   
                }           
            }
        }
    }
}        
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="img/ihsan.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الهدية</title>
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
     <link rel="stylesheet" href="css/gift.css">
     <link rel="stylesheet" href="css/responsive.css">
     <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp'>
     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
     <link rel="stylesheet" href="css/fonts.css">
</head>
<script>
function f1(){
var y = document.getElementById("visibleinput");
y.type= "text";
}
function f2(){
var y = document.getElementById("visibleinput");
y.type= "hidden";
}

</script>
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
                            <li class="nav-item "><a class="nav-link" href="call-profile.php">أتصل بنا</a></li> 
                             
                            <li class="nav-item "><a class="nav-link" href="children.php">الأطفال</a></li>  
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
    <div class="header text-center">
        <h2>الهدية</h2>
        <p class="lead">لتقديم هدية الى الطفل الذي تكفله ،قم بتعبئة النموذج</p>
    </div>
    <form action="" method="post">
        <div class="gift">
            <div class="container">
                <div class="row">
                    <div class="gifts col-md-5 col-xs-12">
                        <div class="gift1 pb-3">
                        
                           <input type="text" name="name" class="form-control" placeholder="أسم الطفل"  value="<?php echo $childrenName;?>">
                        </div>
                        <div class="gift2 pb-3 text-right">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" onclick="f1()" name="type-gift" id="type1" value="نقدي" >
                                <label class="form-check-label" for="type1">
                                نقدي
                                </label>
                            </div>
                            <input type="hidden" placeholder="المبلغ" name="money"  class="form-control" id="visibleinput">
                            <div class="error" style="color:red;font-weight:bold;"><?php echo "<center>" . $Error_array['money'] . "</center>" ?></div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" onclick="f2()"   name="type-gift" id="type2" value="عيني">
                                <label class="form-check-label" for="type2">
                                عيني
                                </label>
                            </div>
                    </div>
                    <div class="gift3 pb-3">
                        <input type="date" class="form-control" name="date" placeholder="تاريخ التسليم">
                  <div class="error" style="color:red;font-weight:bold;"><?php echo "<center>" . $Error_array['date'] . "</center>" ?></div>
                    </div>
                    <div class="gift4 pb-3">
                        <select class="form-control custom-select" name="select-receive">
                            <option value="">كيفية التسليم</option>
                            <option value="زيارة الجمعية">زيارة الطفل </option>
                            <option value="مندوب">مندوب من الجمعية</option>
                        </select>
                        <div class="error" style="color:red;font-weight:bold;"><?php echo "<center>" . $Error_array['select'] . "</center>" ?></div>

                    </div>
                    <div class="area pb-3">
                        <textarea  name="text-gift" class="form-control" placeholder="ملاحظات" cols="15" rows="7"></textarea>
                    </div>
                    <div class="btn w-100">
                        <input type="submit" class="btn btn-primary w-50" name="sub-gift" value="إرسال الهدية" style="background-color:orange; border-color:orange;margin-bottom:8px">
                        <?php  if(!$check){echo "<div class='alert alert-danger' role='alert'>" . "<font size='5px' color='red'>" . "<p>" ."<center>". $error. "</center>". "</p>" . "</font>"."</div>";}?>
                    </div>
                </div>
                        <div class="information col-md col-xs-12">
                            <div class="col-md col-xs-12">
                       <img src="images/istockphom.jpg" style="width:110%">
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