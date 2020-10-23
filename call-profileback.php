<?php 
$host="localhost";
$user="root";
$password="";
$dbName="graduationdb";
$conn=mysqli_connect($host,$user,$password,$dbName);

session_start();

$name=isset($_POST["N"]) ? $_POST["N"] : "";//
$email=isset($_POST["P"]) ? $_POST["P"] : "";//
$message=isset($_POST["text"]) ? $_POST["text"] : "";//
$object=isset($_POST['obj']) ? $_POST['obj'] : "" ; //
$submit=isset($_POST["sub"]) ? $_POST["sub"] : "";

// لعدم إظهار رسالة الخطأ للمستخدم عند النقر على البوتون
$error=null;
$check=true;
$Error_array=array(
    'name'=>'',
    'email'=>'',
    'message'=>'',
     'obj'=>'' );
$Error_Flag_N=false;
$Error_Flag_P=false;
$Error_Flag_text=false;
$Error_Flag_object=false;

if(isset($_POST["sub"])){
    if(empty($message)){
        $error='يجب إدخال القيم المطلوبة';
        $check=false; }
        //validation for name
       // if(empty($name)){
       //     $Error_array['name']='لا يمكن ترك الإسم فارغ';
        //    $Error_Flag_N=true;
        //}
       // elseif(strlen($name)<3){
        //    $Error_array['name']='لا يمكن أن يكون الإسم أقل من ثلاث أحرف';
      //      $Error_Flag_N=true;
      //  }
      //  elseif(!preg_match('/^[_\s[:alpha:]]+$/',$name)&&(!preg_match("/\p{Arabic}/u",$name))){
     //       $Error_array['name']='يجب ان يحتوي الاسم فقط على حروف';
     //       $Error_Flag_N=true;
     //   }
     //   //validation for email
     //   if(empty($email)){
     //       $Error_array['email']='لا يمكن ترك البريد الإلكتروني فارغ';
     //       $Error_Flag_P=true;
     //   }
    //    elseif(!preg_match('/^[-_[:alnum:]]+(\.[-_[:alnum:]]+)*@[[:alnum:]]+(\.[[:alnum:]]+)*(\.[[:alpha:]]{2,})$/',$email))
     //   {
     //       $Error_array['email']='ادخل بريد الكتروني صالح';
     //       $Error_Flag_P=true;
     //   }
        //validation for object
        if(empty($object)){
            $Error_array['obj']='لا يمكن ترك الموضوع فارغ';
            $Error_Flag_object=true;
        }
        elseif(!preg_match('/^[_\s[:alpha:]]+$/',$object)&&(!preg_match("/\p{Arabic}/u",$object)))
        {
            $Error_array['obj']='يجب إدخال موضوع صحيح';
            $Error_Flag_object=true;
        }
        //validation for message
        if(empty($message)){
            $Error_array['message']='لا يمكن ترك الرسالة فارغة';
            $Error_Flag_text=true;
        }
    }
        if($check&&$Error_Flag_text==false&&$Error_Flag_object==false){
            $tp=isset($_SESSION['types2']) ? $_SESSION['types2'] : "";
   


   
   
    if(isset($_POST["sub"])){
if ($tp == 'Personal'){
    

            $namep=$_SESSION['User'];
            $emailp=$_SESSION['email_p'];
            $query="INSERT INTO callme VALUES (default,'$namep','$emailp','$object','$message')";
            $result=mysqli_query($conn,$query);
            
            }  
            else{
                    $emailc= $_SESSION['email'];
                    $namec=$_SESSION['User'];
                    $query="INSERT INTO callme VALUES (default,'$namec','$emailc','$object','$message')";
                    $result=mysqli_query($conn,$query);
                    mysqli_close($conn);
            } }   }
       
?>
        
