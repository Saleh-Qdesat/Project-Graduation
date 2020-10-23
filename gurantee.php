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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الكفالات</title>
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
   <link rel="stylesheet" href="css/gurantee.css">

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
                        
                       <li class="nav-item active"><a class="nav-link" href="admin-profile.php">الشخصية</a></li> 
                        
                       <li class="nav-item" ><a class="nav-link" href="edit.php">تعديل الحساب</a></li>  
                       <li class="nav-item"><a class="nav-link" href="sign-in-admin.php">تسجيل خروج</a></li>  
                        
               

                      
                   
                       
                   </ul>
               </div>
           </div>
       </nav>
   </div>
   
</header>

<div class="show1 text-center">
    <h2>الكفالات من قبل الشركات</h2>
    </div>
    
    
    <div class="table">
    <div class="container">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">رقم الحركة</th>
            <th scope="col">أسم الكافل</th>
            <th scope="col">أسم الطفل</th>
            <th scope="col">حذف الكفالة</th>
            
          </tr>
        </thead>
        </div>
    
    
        <?php
        
        $query="select * from guarantee ";
        $result=mysqli_query($conn,$query);
    
        while($row=mysqli_fetch_assoc($result)){
            $id_chil=$row['children_ID'];
            $id_com=$row['company_ID'];
        
        $query1="select * from company_users_table where C_ID='$id_com' ";
        $result1=mysqli_query($conn,$query1);

        while($row1=mysqli_fetch_assoc($result1)){
            $name_com=$row1['Company_Name'];
        
        $query2="select * from children where ID = '$id_chil' ";
        $result2=mysqli_query($conn,$query2);
        while($row2=mysqli_fetch_assoc($result2)){
            $name_chil=$row2['NAME'];
            $action="<a href='gurantee.php?ID={$row['ID']}&control=remove' class='btn btn-success'>حذف الكفالة</a>";
            echo"<tr><td>".$row['ID']."</td><td>".$row1['Company_Name']."</td><td>".$row2['NAME']."</td><td>".$action."</td></tr>";

           
                if(isset($_GET['ID'])&&isset($_GET['control'])){
                    $id=$_GET['ID'];
                if($_GET["control"]=="remove"){
                $query3="delete from guarantee where ID='{$id}'  ";
                $result3=mysqli_query($conn,$query3);}
                }
        }
    }
}
        echo "</table>";

    ?>



<div class="show1 text-center">
    <h2>الكفالات من قبل الأشخاص</h2>
    </div>
    
    
    <div class="table">
    <div class="container">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">رقم الحركة</th>
            <th scope="col">أسم الكافل</th>
            <th scope="col">أسم الطفل</th>
            <th scope="col">حذف الكفالة</th>
            
          </tr>
        </thead>
        </div>
    
    
        <?php
        
        $query="select * from guarantee_personal ";
        $result=mysqli_query($conn,$query);
    
        while($row=mysqli_fetch_assoc($result)){
            $id_chil=$row['children_ID'];
            $id_per=$row['personal_ID'];
           
        
        $query1="select * from personal_users_table where PR_ID='$id_per' ";
        $result1=mysqli_query($conn,$query1);

        while($row1=mysqli_fetch_assoc($result1)){
            $name_per=$row1['First_Name'];
        
        $query2="select * from children where ID = '$id_chil' ";
        $result2=mysqli_query($conn,$query2);
        while($row2=mysqli_fetch_assoc($result2)){
            $name_chil=$row2['NAME'];
            $action="<a href='gurantee.php?ID={$row['ID']}&control=remove' class='btn btn-success'>حذف الكفالة</a>";
            echo"<tr><td>".$row['ID']."</td><td>".$row1['First_Name']."</td><td>".$row2['NAME']."</td><td>".$action."</td></tr>";
        
            
                if(isset($_GET['ID'])&&isset($_GET['control'])){
                    $id=$_GET['ID'];
                if($_GET["control"]=="remove"){
                $query3="delete from guarantee_personal where ID='{$id}'  ";
                $result3=mysqli_query($conn,$query3);}
                }
        }
    }
}


        echo "</table>";

    ?>
</body>
</html>