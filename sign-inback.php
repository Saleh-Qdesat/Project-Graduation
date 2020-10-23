<?php

$servername="localhost";
$sername="root";
$password="";
$dbname="graduationdb";
$conn=mysqli_connect($servername,$sername,$password,$dbname);
session_start();

    

$username=isset($_POST['user']) ? $_POST['user'] : "";//
$password=isset($_POST['pass']) ? $_POST['pass'] : "";//
$submit=isset($_POST['btn']) ? $_POST['btn'] : "" ;//

$error=null;
$check=true;

$Error_array=array(
    'Uname'=>'',
    'Password'=>''
);


$Error_Flag_Uname=false;
$Error_Flag_Password=false;



if(isset($_POST['btn'])){
    if(empty($username) || empty($password)){
        $error="يجب إدخال القيم المطلوبة";
        $check=false;
    }
    else{
        $query="select * from company_users_table  where First_Name='$username' or Email='$username' or Phone_Number='$username'  ";
        $result=mysqli_query($conn,$query);

        

        if($row=mysqli_fetch_assoc($result)){

           
            $number=$row['Phone_Number'];
            $_SESSION['phonenumber']=$number;
            $mail=$row['Email'];
            $_SESSION['email']=$mail;
            $type=$row['Types'];
            $_SESSION['types']=$type;
           $id=$row['C_ID'];
           $_SESSION['company_id']=$id;
           $dbusername=$row['Company_Name'];
            $_SESSION['User']=$dbusername;
          
            $dbpass=$row['Password'];
            

            

            if($password==$dbpass){
                header("location:admin.php");
               
            }
            else{
                $Error_array['Password']="كلمة المرور غير صحيحة";
                $Error_Flag_Password=true;
            }
        
        }
        else{
            $Error_array['Uname']="البريد الألكتروني أو الأسم المدخل غير صحيح";
            $Error_Flag_Uname=true;
        } 
    }
    
}










?>


          
           
           