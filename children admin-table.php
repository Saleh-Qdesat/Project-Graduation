<?php 
$host="localhost";
$user="root";
$password="";
$dbname="graduationdb";
$conn=mysqli_connect($host,$user,$password,$dbname);
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
    
    <link rel="icon" href="img/ihsan.png" type="image/png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>الأطفال</title>
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
        <link rel="stylesheet" href="css/children-admin-table.css">

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
                             
                            <li class="nav-item "><a class="nav-link" href="admin-profile.php">الشخصية</a></li> 
                             
                            <li class="nav-item" ><a class="nav-link" href="edit.php">تعديل الحساب</a></li>  
                            <li class="nav-item"><a class="nav-link" href="sign-in-admin.php">تسجيل خروج</a></li>  
                             
                    

                           
                        
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
</header>

<div class="show1 text-center">
<h2>الاطفال و كافة معلوماتهم</h2>
</div>


<div class="table">
<div class="container">
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">رقم الطفل</th>
        <th scope="col">اسم الطفل</th>
        <th scope="col">عمر الطفل</th>
        <th scope="col">قصة الطفل</th>
        
        <th scope="col">المستوى الدراسي للطفل</th>
        <th scope="col">الحالة الدراسية للطفل</th>
        <th scope="col">الحالة الصحية للطفل</th>

      </tr>
    </thead>
    </div>


    <?php
    
    $query="select * from children ";
    $result=mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result)){
        echo"<tr><td>".$row['ID']."</td><td>".$row['NAME']."</td><td>".$row['AGE']."</td><td>".$row['STORY']."</td><td>".$row['STUDY']."</td><td>".$row['study_status']."</td><td>".$row['HEALTHY']."</td></tr>";
    }
    echo "</table>";

    ?>
    <div class="btn w-100" style="margin-top:50px;">
    <a href="insert-children.php"><input type="submit" value="إضافة طفل" class="btn btn-primary w-60" ></a>
    </body>
    </html>