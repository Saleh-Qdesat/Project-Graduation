<?php 
$host="localhost";
$user="root";
$password="";
$dbname="graduationdb";
$conn=mysqli_connect($host,$user,$password,$dbname);
///////////////////////////////////////////////////////
$num=isset($_POST['number']) ? $_POST['number'] : ""; //
$name=isset($_POST['name']) ? $_POST['name'] : ""; //
$age=isset($_POST['age']) ? $_POST['age'] : "" ; //
$story=isset($_POST['story']) ? $_POST['story'] : "" ; //
$study=isset($_POST['study']) ? $_POST['study'] : "" ; //
$study_s=isset($_POST['study-status']) ? $_POST['study-status'] : "" ; //
$health=isset($_POST['health']) ? $_POST['health'] : "" ; //
$submit=isset($_POST['button']) ? $_POST['button'] : "" ; //

////////////////////////////////////////////

$error=null;
$check=true;

$Error_array=array(
    'name'=>'',
    'age'=>'',
    'story'=>'',
    'study'=>'',
    'study-s'=>'',
    'health'=>''
);

$Error_Flag_name=false;
$Error_Flag_age=false;
$Error_Flag_story=false;
$Error_Flag_study=false;
$Error_Flag_study_s=false;
$Error_Flag_health=false;

if(isset($_POST['button'])){
    if(empty($name) || empty($age) || empty($story) || empty($study) || empty($study_s) || empty($health)){
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
        $Error_array['name']='يجب ان يتكون الأسم من أحرف  فقط';
        $Error_Flag_name=true;
    }
    //validation for age
    if(empty($age)){
        $Error_array['age']='لا يمكن ترك العمر فارغ';
        $Error_Flag_age=true;
    }
    elseif(!preg_match('/[0-9]/',$age)){
        $Error_array['age']='يجب أن يتكون العمر من أرقام فقط ';
        $Error_Flag_age=true;
    }
    //validation for story
    if(empty($story)){
        $Error_array['story']='لا يمكن ترك القصة فارغة';
        $Error_Flag_story=true;
    }
    //validation for study
    if(empty($study)){
        $Error_array['study']='لا يمكن ترك المستوى الدراسي فارغ';
        $Error_Flag_study=true;
    }
    //validation for studt-s
    if($study_s==""){
        $Error_array['study-s']='يجب إختيار المستوى الدراسي';
        $Error_Flag_study_s=true;
    }
    //validation for health
    if(empty($health)){
        $Error_array['health']='لا يمكن ترك الوضع الصحي فارغ';
        $Error_Flag_health=true;
    }
}

if($check&&$Error_Flag_name==false&&$Error_Flag_age==false&&$Error_Flag_story==false&&$Error_Flag_study==false&&$Error_Flag_study_s==false&&$Error_Flag_health==false){
    if(isset($_POST['button'])){
        $query="INSERT INTO children VALUES ('$num','$name','$age','$story','$study','$study_s','$health') ";
        $result=mysqli_query($conn,$query);

    }
}





?>