<?php 
$host="localhost";
$user="root";
$password="";
$dbname="graduationdb";
$conn=mysqli_connect($host,$user,$password,$dbname);
session_start();
////////////////////////////////////////////////////////

$cause=isset($_POST['cause']) ? $_POST['cause'] : "" ;//
$date=isset($_POST['date']) ? $_POST['date'] : "" ;//
$time=isset($_POST['time']) ? $_POST['time'] : "" ;//
$note=isset($_POST['note']) ? $_POST['note'] : "" ;//
$submit=isset($_POST['sub'])? $_POST['sub'] : "" ;//

//////////////////////////////////////////////////////
//$start_t=mktime(8,0);
//$end_t=mktime(6,0);

$error=null;
$check=true;

$Error_array=array(
    'cause'=>'',
    'date'=>'',
    'time'=>'',
    'note'=>''
);

$Error_Flag_cause=false;
$Error_Flag_date=false;
$Error_Flag_time=false;
$Error_Flag_note=false;

if(isset($_POST['sub'])){
    if(empty($cause) || empty($date) || empty($time)) {
        $error='يجب إدخال القيم المطلوبة';
        $check=false;
    }
    //validation for cause
    if(empty($cause)){
        $Error_array['cause']='لا يمكن ترك سبب الزيارة فارغ';
        $Error_Flag_cause=true;
    }
    elseif(!preg_match('/ [[:alnum:]]+ /',$cause)&&(!preg_match("/\p{Arabic}/u",$cause))){
        $Error_array['cause']='يجب إدخال أحرف باللغتيين العربية والأنجليزية فقط';
        $Error_Flag_cause=true;
    }
    //validation for date
    if(empty($date)){
        $Error_array['date']='لا يمكن ترك تاريخ الزيارة فارغ';
        $Error_Flag_date=true;
    }
    //validation for time
    if(empty($time)){
        $Error_array['time']='لا يمكن ترك وقت الزيارة فارغ';
        $Error_Flag_time=true;
    }
   // elseif(!preg_match('/ [[:alnum:]]+ /',$time)){
      //  $Error_array['time']='يجب تحديد وقت الزيارة';
      //  $Error_Flag_time=true;
  //  }
  // elseif($time < 8 ){
   //     $Error_array['time']='يجب أن يكون وقت الزيارة ما بين الساعة الثامنة صباحا وحتى السادسة مساءا';
    //    $Error_Flag_time=true;
   // }
    //elseif($time > 18 ){
     //   $Error_array['time']='يجب أن يكون وقت الزيارة ما بين الساعة الثامنة صباحا وحتى السادسة مساءا';
     //   $Error_Flag_time=true;
//}
}

if($check&&$Error_Flag_cause==false&&$Error_Flag_date==false&&$Error_Flag_time==false){

    $tp=isset($_SESSION['types2']) ? $_SESSION['types2'] : "";

    if(isset($_POST['sub'])){

        if ($tp == 'Personal'){

     $namep=$_SESSION['User'];
   $emailp=$_SESSION['email_p'];
   $phonep=$_SESSION['phonenumber_p'];
   $query="insert into Visits  values (default,'$namep','$emailp','$phonep','$cause','$date','$time','$note',0)";
   $result=mysqli_query($conn,$query);
  
  

        }

    else{
        $phonec= $_SESSION['phonenumber'];
        $emailc= $_SESSION['email'];
        $namec=$_SESSION['User'];
        $query="insert into Visits values (default,'$namec','$emailc','$phonec','$cause','$date','$time','$note',0)";
        $result=mysqli_query($conn,$query);
        mysqli_close($conn);
    }     
    }
    }
 

?>