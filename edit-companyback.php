<?php
$host="localhost";
$user="root";
$pass="";
$db="graduationdb";
$conn=mysqli_connect($host,$user,$pass,$db);
////////////////////////////////////////
session_start();
///////////////////////////////////////////////////////////
$name=isset($_POST["name"]) ? $_POST["name"] : "" ;//
$L_name=isset($_POST["name1"]) ? $_POST["name1"] : "" ;//

$email=isset($_POST["email"]) ? $_POST["email"] : "";//
$old_pass=isset($_POST["old-pass"]) ? $_POST["old-pass"] : "";//
$new_pass=isset($_POST["pass"]) ? $_POST["pass"] : "" ;//
$re_pass=isset($_POST["re-pass"]) ? $_POST["re-pass"] : "" ;//
$phone=isset($_POST["phone"]) ? $_POST["phone"] : "" ;//
$select=isset($_POST["option"]) ? $_POST["option"] : "" ;//

/////////////////
$button=isset($_POST['sub']) ? $_POST['sub'] : "" ; //


$erorr=null;
$check=true;
$Erorr_array=array(
    'name'=>'',
    'l_name'=>'',
    'email'=>'',
    'old_pass'=>'',
    'new_pass'=>'',
    're_pass'=>'',
    'phone'=>'',
    'select'=>''  );
$Erorr_Flag_name=false;
$Erorr_Flag_l_name=false;
$Erorr_Flag_email=false;
$Erorr_Flag_old_pass=false;
$Erorr_Flag_new_pass=false;
$Erorr_Flag_re_pass=false;
$Erorr_Flag_phone=false;
$Erorr_Flag_select=false;


if(isset($_POST["sub"])){
    if(empty($name) || empty ($email) || empty($old_pass) || empty($phone) || empty($select) || empty($L_name)) {
        $erorr="يجب إدخال القيم المطلوبة";
        $check=false;
    }
    //validation name
    if(empty($name)){
        $Erorr_array['name']="لا يمكن ترك الأسم فارغ";
        $Erorr_Flag_name=true;
    }
    elseif(!strlen($name)>3){
$Erorr_array['name']="يجب أن لا يتكون الأسم من أقل من ثلاث أحرف";
$Erorr_Flag_name=true;
    }
    elseif(!preg_match('/^[_\s[:alpha:]]+$/',$name)&&(!preg_match("/\p{Arabic}/u",$name))){
        $Erorr_array['name']='يجب ان يحتوي الاسم فقط على حروف';
        $Erorr_Flag_name=true;
    }
     //validation last name
     if(empty($L_name)){
        $Erorr_array['l_name']="لا يمكن ترك رقم السجل التجاري فارغ";
        $Erorr_Flag_l_name=true;
    }
   // elseif(!strlen($L_name)>3){
//$Erorr_array['l_name']="يجب أن لا يتكون الأسم من أقل من ثلاث أحرف";
//$Erorr_Flag_l_name=true;
   // }
    elseif(!preg_match('/^[0-9]+$/',$L_name)){
        $Erorr_array['l_name']='يجب ان يحتوي السجل التجاري فقط على أرقام';
        $Erorr_Flag_l_name=true;
    }
    //validation email
    if(empty($email)){
        $Erorr_array['email']="لا يمكن ترك البريد الإلكتروني فارغ";
        $Erorr_Flag_email=true;
    }
    elseif(!preg_match('/^[-_[:alnum:]]+(\.[-_[:alnum:]]+)*@[[:alnum:]]+(\.[[:alnum:]]+)*(\.[[:alpha:]]{2,})$/',$email))
    {
        $Erorr_array['email']='ادخل بريد الكتروني صالح';
        $Erorr_Flag_email=true;
    }
    //validation old_pass
    if(empty($old_pass)){
        $Erorr_array['old_pass']="لا يمكن ترك كلمة المرور فارغة";
        $Erorr_Flag_old_pass=true;
    }
    elseif(!preg_match('/[[:alnum:]]{4,}./', $old_pass)){
        $Erorr_array['old_pass']="يجب ان تتكون كلمة المرور من اربع أحرف او أرقام على الأقل";
        $Erorr_Flag_old_pass=true;
    }
    //validation new_pass
    if($new_pass != null || $re_pass !=null){
    if(empty($new_pass)){
        $Erorr_array['new_pass']="لا يمكن ترك كلمة المرور فارغة";
        $Erorr_Flag_new_pass=true;
    
    }
    elseif(empty($re_pass)){
        $Erorr_array['re_pass']="لا يمكن ترك كلمة المرور فارغة";
        $Erorr_Flag_old_pass=true;
    }
    elseif(!preg_match('/[[:alnum:]]{4,}./', $new_pass) && (!preg_match('/[[:alnum:]]{4,}./',$re_pass))){
        $Erorr_array['new_pass']="يجب ان تتكون كلمة المرور من اربع أحرف او أرقام على الأقل";
        $Erorr_Flag_new_pass=true;
        $Erorr_array['re_pass']="يجب ان تتكون كلمة المرور من اربع أحرف او أرقام على الأقل";
        $Erorr_Flag_old_pass=true;
    }
}
else{
    $new_pass=$old_pass;
}
   
    //validation phone
if(empty($phone)){
    $Erorr_array['phone']="لا يمكن ترك رقم الهاتف فارغ";
    $Erorr_Flag_phone=true;
}
    elseif(!preg_match('/^[0-9]{10}$/',$phone))
    {
        $Erorr_array['phone']="يجب ان يتكون رقم الهاتف من أرقام فقط";
        $Erorr_Flag_phone=true;
    }


}

    //////////////////////////////////////////////////////////////////////////////////////

    $tpp=isset($_SESSION['types2']) ? $_SESSION['types2'] : "";
    $id_com=isset($_SESSION['company_id']) ? $_SESSION['company_id'] : "";
//$tc= isset($_POST[$_SESSION['types']]) ? $_POST[$_SESSION['types']] : "";




    if ($check&&$Erorr_Flag_name==false&& $Erorr_Flag_l_name==false&&$Erorr_Flag_email==false&&$Erorr_Flag_old_pass==false&&$Erorr_Flag_new_pass==false&&$Erorr_Flag_re_pass==false&&$Erorr_Flag_phone==false){
             if(isset($_POST['sub'])){
                 if($tpp =='Personal'){
                    $query= "update personal_users_table SET First_Name='$name',Last_Name='$L_name',Email='$email',Password='$new_pass',Phone_Number='$phone',Country='$select'";
                    $Result=mysqli_query($conn,$query);
                 }
else{
    $query= "update company_users_table SET Company_Name='$name', First_Name='$L_name',Email='$email',Password='$new_pass',Phone_Number='$phone' where C_ID='$id_com' ";
    $Result=mysqli_query($conn,$query);
}
             }
    }







?> 