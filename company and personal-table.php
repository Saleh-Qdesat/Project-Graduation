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
        <title>التبرعات</title>
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
        <link rel="stylesheet" href="css/com.css">

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
<h2>الحسابات الخاصة بالشركات</h2>
</div>


<div class="table">
<div class="container">
<table class="table table-hover text-center">
    <thead>
      <tr>
        <th scope="col">رقم الشركة</th>
        <th scope="col">اسم الشركة</th>
        <th scope="col">السجل التجاري</th>
        <th scope="col">الموقع الالكتروني</th>
        <th scope="col">البريد الالكتروني</th>
        <th scope="col">رقم الهاتف</th>
        <th scope="col">القطاع </th>
        <th scope="col">كلمة المرور</th>
        <th scope="col">حذف الحساب</th>
      </tr>
    </thead>
    </div>

    <?php
    
    $query="select * from company_users_table ";
    $result=mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result)){
        
        
        $action="<a href='company and personal-table.php?ID={$row['C_ID']}&control=remove' class='btn btn-success'>حذف الحساب</a>";
        echo"<tr><td>".$row['C_ID']."</td><td>".$row['Company_Name']."</td><td>".$row['First_Name']."</td><td>".$row['Site']."</td><td>".$row['Email']."</td><td>".$row['Phone_Number']."</td><td>".$row['Sector']."</td><td>".$row['Password']."</td><td>".$action."</td></tr>";
        
    
    if(isset($action)){
        if(isset($_GET['ID'])&&isset($_GET['control'])){
            $id=$_GET['ID'];
        if($_GET["control"]=="remove"){
        $query1="delete from company_users_table where C_ID='{$id}'  ";
        $result1=mysqli_query($conn,$query1);}
    }}}
    echo "</table>";

    ?>
    <hr>
    <hr>


<div class="show1 text-center">
<h2>الحسابات الخاصة بالافراد</h2>
</div>


<div class="table">
<div class="container">
<table class="table table-hover text-center">
    <thead>
      <tr>
        <th scope="col">رقم الفرد</th>
        <th scope="col">الاسم الاول</th>
        <th scope="col">الاسم الاخير</th>
        <th scope="col">تاريخ الميلاد</th>
        <th scope="col">الجنس</th>
        <th scope="col">رقم الهاتف</th>
        <th scope="col">كلمة المرور </th>
        <th scope="col">البريد الالكتروني</th>
        <th scope="col">المحافظة</th>
        <th scope="col">حذف الحساب</th>
      </tr>
    </thead>
    </div>


    <?php
    
    $query="select * from  personal_users_table ";
    $result=mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result)){
        $action="<a href='company and personal-table.php?ID={$row['PR_ID']}&control=remove' class='btn btn-success'>حذف الحساب</a>";
        echo"<tr><td>".$row['PR_ID']."</td><td>".$row['First_Name']."</td><td>".$row['Last_Name']."</td><td>".$row['Birth_Date']."</td><td>".$row['Gender']."</td><td>".$row['Phone_Number']."</td><td>".$row['Password']."</td><td>".$row['Email']."</td><td>".$row['Country']."</td><td>".$action."</td></tr>";
        if(isset($action)){
            if(isset($_GET['ID'])&&isset($_GET['control'])){
                $id=$_GET['ID'];
            if($_GET["control"]=="remove"){
            $query1="delete from personal_users_table where PR_ID='{$id}'  ";
            $result1=mysqli_query($conn,$query1);}
        }}}
    echo "</table>";

    ?>
    </body>
    </html>