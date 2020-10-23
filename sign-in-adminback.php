<?php
$host="localhost";
$user="root";
$password="";
$dbname="graduationdb";
$conn=mysqli_connect($host,$user,$password,$dbname);

$name=isset($_POST['admin']) ? $_POST['admin'] : "";//
$pass=isset($_POST['password']) ? $_POST['password'] : "";//
$submit=isset($_POST['btn-admin']) ? $_POST['btn-admin'] : "";//

$error=null;
$check=true;

$Error_array=array(
    'name'=>'',
    'pass'=>''
);

$Erreo_Flag_name=false;
$Error_Flag_pass=false;

if(isset($_POST['btn-admin'])){
    if(empty($name) || empty($pass)){
        $error='يجب إدخال القيم المطلوبة';
        $check=false;
    }
    else{
      $query="select * from admin where admin_Name='$name' ";
      $result=mysqli_query($conn,$query);
      if($row=mysqli_fetch_assoc($result)){
          $password_admin=$row['Password'];

          if($pass==$password_admin){
              header("location:admin-profile.php");
          }
          else{
            $Error_array['pass']="كلمة المرور غير صحيحة";
            $Error_Flag_pass=true;
        }
    
    }
    else{
        $Error_array['name']=" الأسم المدخل غير صحيح";
        $Error_Flag_name=true;
    } 
      }
    }






?>