<?php 
$host="localhost";
$user="root";
$password="";
$dbname="graduationdb";
$conn=mysqli_connect($host,$user,$password,$dbname);
///////////////////////////////////////////////

$name=isset($_POST['name']) ? $_POST['name'] : "" ; //
$pass=isset($_POST['password']) ? $_POST['password'] : "" ; //
$new_pass=isset($_POST['new-password']) ? $_POST['new-password'] : "" ; //
$re_pass=isset($_POST['re-password']) ? $_POST['re-password'] : "" ; //

$error=null;
$check=true;

$Error_array=array(
    'name'=>'',
    'pass'=>'',
    'n-pass'=>'',
    're-pass'=>''
);

$Error_Flag_name=false;
$Error_Flag_password=false;
$Error_Flag_npassword=false;
$Error_Flag_rpassword=false;



if(isset($_POST['sub']))
{
    if(empty($name) || empty($pass) )
    {
        $error='يجب إدخال القيم المطلوبة';
        $check=false;
    }
    //validation for name
    if(empty($name))
    {
        $Error_array['name']='لا يمكن ترك الأسم فارغ';
        $Error_Flag_name=true;
    }
    elseif(strlen($name) < 3)
    {
        $Error_array['name']='يجب أن يتكون الأسم من ثلاثة أحرف على الأقل';
        $Error_Flag_name=true;
    }
    elseif(!preg_match('/^[_\s[:alpha:]]+$/',$name))
    {
        $Error_array['name']='يجب أن يتكون الأسم من حروف فقط';
        $Error_Flag_name=true;
    }
    //validation for old-password
    if(empty($pass)){
        $Error_array['pass']='لا يمكن ترك كلمة المرور السابقة فارغة';
        $Error_Flag_password=true;
    }
    else{
        $query="select * from admin";
        $result=mysqli_query($conn,$query);
        
        if($row=mysqli_fetch_assoc($result))
        {
            $password=$row['Password'];
        }
        if($password==$pass)
        {
            
        }
        else{
            $Error_array['pass']='كلمة المرور السابقة غير صحيحة';
            $Error_Flag_password=true;
        }
    }
    //validation new-password
    if($new_pass != null || $re_pass != null)
    {
        if(empty($new_pass)){
            $Error_array['n-pass']='يجب إدخال قيمة ';
            $Error_Flag_npassword=true;
        }
        elseif(empty($re_pass)){
            $Error_array['re-pass']='يجب إدخال قيمة ';
            $Error_Flag_rpassword=true;
        }
        elseif(!preg_match('/[[:alnum:]]{4,}./',$new_pass) && (!preg_match('/[[:alnum:]]{4,}./',$re_pass))){
            $Error_array['n-pass']='يجب أن تتكون كلمة المرور من أربعة خانات على الأقل';
            $Error_Flag_npassword=true;
            $Error_array['re-pass']="يجب ان تتكون كلمة المرور من اربع أحرف او أرقام على الأقل";
            $Error_Flag_rpassword=true;
        }
     }
     else{
         $new_pass=$pass;
     }

}

if($check&&$Error_Flag_name==false&&$Error_Flag_password==false&&$Error_Flag_npassword==false&&$Error_Flag_rpassword==false){
    if(isset($_POST['sub'])){
        $query="UPDATE admin SET Admin_name='$name' , Password='$new_pass' ";
        $result=mysqli_query($conn,$query);
        mysqli_close($conn);
    }
}



?>