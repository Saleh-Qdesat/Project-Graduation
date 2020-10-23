<?php

$servername="localhost";
$username="root";
$password="";
$dbname="graduationdb";
$conn=mysqli_connect($servername,$username,$password,$dbname);



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
        $query="select * from personal_users_table  where First_Name='$username' or Email='$username' or Phone_Number='$username'  ";
        $result=mysqli_query($conn,$query);

        if($row=mysqli_fetch_assoc($result)){
            $number_p=$row['Phone_Number'];
            $_SESSION['phonenumber_p']=$number_p;
            $mail_p=$row['Email'];
            $_SESSION['email_p']=$mail_p;
            $type2=$row['Types'];
            $_SESSION['types2']=$type2;
            $id_p=$row['PR_ID'];
            $_SESSION['pid']=$id_p;
            $dbusername=$row['First_Name'];
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


          
           
           