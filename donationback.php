<?php
$host="localhost";
$user="root";
$password="";
$dbName="graduationdb";
$conn=mysqli_connect($host,$user,$password,$dbName);

$name=isset($_POST["name"]) ? $_POST["name"] : "";//
$email=isset($_POST["email"]) ? $_POST["email"] : "";//
$phone=isset($_POST["phone"]) ? $_POST["phone"] : "";//
$type=isset($_POST["type"]) ? $_POST["type"] : "";
$select=isset($_POST["select"]) ? $_POST["select"] : "";
$money=isset($_POST["money"]) ? $_POST["money"] : "";//
$pay=isset($_POST["pay"]) ? $_POST["pay"] : "";
$text=isset($_POST["text"]) ? $_POST["text"] : "";
$submit=isset($_POST["sup"]) ? $_POST["sup"] : "";

//لعدم إظهار رسالة الخطأ للمستخدم عند النقر على البوتون
//validation for name 
$error = null;
$check = true;
$Error_array=array(
    //register errors
    'name'=>'',
    'email'=>'',
    'phone'=>'',
    'money'=>'');
    $Error_Flag_phone=false;
    $Error_Flag_email=false;
    $Error_Flag_name=false;
    $Error_Flag_money=false;
if(isset($_POST["sup"])){
if(empty($name)||empty($email)|| empty($phone)|| empty($type)||empty($select)||empty($money)||empty($pay)){
$error="يجب إدخال القيم المطلوبة";
$check=false;
}
//validation name 
if(empty($name)){
    $Error_array['name']='لا يمكن ترك الاسم فارغ';
    $Error_Flag_name=true;
}
elseif(strlen($name)<3){
    $Error_array['name']='لا يمكن ان يكون الاسم اقل من ثلاث حروف';
    $Error_Flag_name=true;
}
elseif(!preg_match('/^[_\s[:alpha:]]+$/',$name)&&(!preg_match("/\p{Arabic}/u",$name))){
    $Error_array['name']='يجب ان يحتوي الاسم فقط على حروف';
    $Error_Flag_name=true;
}
//validation email
if(empty($email)){
    $Error_array['email']='لا يمكن ترك البريد الالكتروني فارغ';
    $Error_Flag_email=true;
}
    elseif(!preg_match('/^[-_[:alnum:]]+(\.[-_[:alnum:]]+)*@[[:alnum:]]+(\.[[:alnum:]]+)*(\.[[:alpha:]]{2,})$/',$email))
    {
        $Error_array['email']='ادخل بريد الكتروني صالح';
        $Error_Flag_email=true;
    }
//validation phone
if(empty($phone)){
    $Error_array['phone']='لا يمكن ترك رقم الهاتف فارغ';
    $Error_Flag_phone=true;
}
    elseif(!preg_match('/^[0-9]{10}$/',$phone))
    {
        $Error_array['phone']='يجب ان يتكون رقم الهاتف من أرقام فقط';
        $Error_Flag_phone=true;
    }
//validation money
if(empty($money)){
    $Error_array['money']='لا يمكن ترك المبلغ فارغ';
    $Error_Flag_money=true;
}
    elseif(!preg_match('/[[:digit:]]+/',$money))
    {
        $Error_array['money']='يجب ان يتكون المبلغ من أرقام فقط';
        $Error_Flag_money=true;
    }
    
    //************************************************************ */
   if($check&&$Error_Flag_name==false&&$Error_Flag_email==false&&$Error_Flag_phone==false&&$Error_Flag_money==false){
       if('$submit'){
           $query="INSERT INTO donation  VALUES (default,'$name','$email',$phone,'$type','$select',$money,'$pay','$text')";
          $result= mysqli_query($conn,$query);
           mysqli_close($conn);
       }
      
   }
   
}
?>