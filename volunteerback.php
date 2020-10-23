<?php
$host="localhost";
$user="root";
$password="";
$dbname="graduationdb";
$conn=mysqli_connect($host,$user,$password,$dbname);
////////////////////////////////////////////////////////////////////////////////////////////////////
$name=isset($_POST['name'])? $_POST['name'] : "";//
$phone=isset($_POST['phone']) ? $_POST['phone'] : "";//
$age=isset($_POST['age']) ? $_POST['age'] : ""; //
$gender=isset($_POST['type']) ? $_POST['type'] : ""; //الجنس
$job=isset($_POST['job']) ? $_POST['job'] : "" ; //
$specilization=isset($_POST['specilization']) ? $_POST['specilization'] : "" ; //
$place=isset($_POST['place']) ? $_POST['place'] : "" ; //
$type=isset($_POST['type1']) ? $_POST['type1'] : "" ; //تطوع سابق
$check1=isset($_POST['check']) ? $_POST['check'] : "" ; //كيف سمعت
$check2=isset($_POST['check1']) ? $_POST['check1'] : "" ; //مجال التطوع
$time=isset($_POST['time']) ? $_POST['time'] : "";//
$note=isset($_POST['note']) ? $_POST['note'] : "" ; //
$submit=isset($_POST['sup']) ? $_POST['sup'] : "" ; //
////////////////////////////////////////////////////////////////////////////////////////////////////
$error=null;
$check=true;

$Error_array=array(
    'name'=>'',
    'phone'=>'',
    'age'=>'',
    'gender'=>'',
    'job'=>'',
    'speciliz'=>'',
    'place'=>'',
    'type'=>'',
    'check1'=>'',
    'check2'=>'',
    'time'=>''
);

$Error_Flag_name=false;
$Error_Flag_phone=false;
$Error_Flag_age=false;
$Error_Flag_gender=false;
$Error_Flag_job=false;
$Error_Flag_speciliz=false;
$Error_Flag_place=false;
$Error_Flag_type=false;
$Error_Flag_check1=false;
$Error_Flag_check2=false;
$Error_Flag_time=false;

if(isset($_POST['sup'])){
    if(empty($name) || empty($phone) || empty($age) || empty($gender) || empty($job) || empty($specilization) || empty($place) || empty($type)|| empty($check1) || empty($check2)){
        $error='يجب إدخال القيم المطلوبة';
        $check=false;
    }
    //validation for name
    if(empty($name)){
        $Error_array['name']='لا يمكن ترك الأسم فارغ';
        $Error_Flag_name=true;
    }
    elseif(strlen($name)<3){
        $Error_array['name']='يجب أن يتكون الأسم من ثلاث أحرف على الأقل';
        $Error_Flag_name=true;
    }
    elseif(!preg_match('/^[_\s[:alpha:]]+$/',$name)){
        $Error_array['name']='يجب أن يتكون الأسم من أحرف اللغة الإنجليزية فقط';
        $Error_Flag_name=true;
    }
    //validation for phone
    if(empty($phone)){
        $Error_array['phone']='لا يمكن ترك رقم الهاتف فارغ';
        $Error_Flag_phone=true;
    }
    elseif(!preg_match('/^[0-9]{10}$/',$phone)){
        $Error_array['phone']='يجب أن يتكون رقم الهاتف من أرقام فقط';
        $Error_Flag_phone=true;
    }
    //validation for age
    if(empty($age)){
        $Error_array['age']='لا يمكن ترك العمر فارغ';
        $Error_Flag_age=true;
    }
    elseif(!preg_match('/[[:digit:]]{2}/',$age)){
        $Error_array['age']='يجب أن يتكون العمر من أرقام فقط';
        $Error_Flag_age=true;
    }
    elseif($age < 18){
        $Error_array['age']='يجب أن لا يقل عمر المتطوع عن 18 عاما';
        $Error_Flag_age=true;
    }
    //validation for gender
    if(empty($type)){
        $Error_array['gender']='يجب إختيار الجنس';
        $Error_Flag_gender=true;
    }
    //validation for job
    if(empty($job)){
        $Error_array['job']='لا يمكن ترك حقل المهنة فارغ';
        $Error_Flag_job=true;
    }
    elseif(!preg_match('/^[_\s[:alpha:]]+$/',$job)&&(!preg_match("/\p{Arabic}/u",$job))){
        $Error_array['job']='يجب أن تحتوي المهنة على أحرف فقط';
        $Error_Flag_job=true;
    }
    //validation for specilization
    if(empty($specilization)){
        $Error_array['speciliz']='لا يمكن ترك حقل التخصص فارغ';
        $Error_Flag_speciliz=true;
    }
    elseif(!preg_match('/^[_\s[:alpha:]]+$/',$specilization)&&(!preg_match("/\p{Arabic}/u",$specilization))){
        $Error_array['speciliz']='يجب أن يتكون التخصص من أحرف فقط';
        $Error_Flag_speciliz=true;
    }
    //validation for place
    if($place == ""){
        $Error_array['place']='يجب إختيار مكان إقامتك';
        $Error_Flag_place=true;
    }
    //validation for type
    if(empty($type)){
        $Error_array['type']='يجب تحديد إجابتك';
        $Error_Flag_type=true;
    }
    //validation for check1
    if(empty($check1)){
        $Error_array['check1']='يجب تحديد إجابة واحدة على الأقل';
        $Error_Flag_check1=true;
    }
       //validation for check2
       if(empty($check2)){
        $Error_array['check2']='يجب تحديد إجابة واحدة على الأقل';
        $Error_Flag_check2=true;
       }
       //validation for time
       if(empty($time)){
           $Error_array['time']='يجب إدخال الوقت المناسب لك للتطوع';
           $Error_Flag_time=true;
       }
       elseif(!preg_match('/[[:alnum:]]+/',$time)){
           $Error_array['time']='زززز';
           $Error_Flag_time=true;
       }

}

if($check&&$Error_Flag_name==false&&$Error_Flag_phone==false&&$Error_Flag_age==false&&$Error_Flag_gender==false&&$Error_Flag_job==false&&$Error_Flag_speciliz==false&&$Error_Flag_place==false&&$Error_Flag_type==false&&$Error_Flag_check1==false&&$Error_Flag_check2==false&&$Error_Flag_time==false)
{
    if(isset($_POST['sup'])){
        $query="INSERT INTO Volunteering VALUES (default,'$name','$phone','$age','$gender','$job','$specilization','$place','$type','$check1','$check2','$time','$note') ";
        $result=mysqli_query($conn,$query);

    }
}



















?>