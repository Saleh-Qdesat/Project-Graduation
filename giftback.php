<?PHP 
$host="localhost";
$user="root";
$password="";
$dbname="graduationdb";
$conn=mysqli_connect($host,$user,$password,$dbname);
session_start();
    



////////////////////////////////////////////////////////


$name=isset($_POST['name']) ? $_POST['name'] : "" ;//
$type=isset($_POST['type-gift']) ? $_POST['type-gift'] : "";//
$money=isset($_POST['money']) ? $_POST['money'] : "";//
$date=isset($_POST['date']) ? $_POST['date'] : "";//
$select=isset($_POST['select-receive']) ? $_POST['select-receive'] : "";//
$text=isset($_POST['text-gift']) ? $_POST['text-gift'] : "";//
$submit=isset($_POST['sub-gift']) ? $_POST['sub-gift'] : "";//

//////////////////////////////////////////////////////////

$error=null;
$check=true;

$Error_array=array(
    'name'=>'',
    'type'=>'',
    'money'=>'',
    'date'=>'',
    'select'=>'',
    'text'=>''
);

$Error_Flag_name=false;
$Error_Flag_type=false;
$Error_Flag_money=false;
$Error_Flag_date=false;
$Error_Flag_select=false;
$Error_Flag_text=false;

if(isset($_POST['sub-gift'])){
    if( empty($date) || empty($select)){
        $error='يجب إدخال القيم المطلوبة';
        $check=false;
    }
    //validation for name-chill
   // if(empty($name)){
   //     $Error_array['name']='يجب أختيار أسم الطفل';
   //     $Error_Flag_name=true;
   // }
    //validation for date
    if(empty($date)){
     $Error_array['date']='يجب تحديد تاريخ التسليم';
        $Error_Flag_date=true;
    }
   
    //validation for money
    if($type=='نقدي'){
    if (empty($money)){
        $Error_array['money']='لا يمكن ترك المبلغ فارغ';
        $Error_Flag_money=true;
    }
    elseif(!preg_match('/[[:digit:]]+/',$money)){
        $Error_array['money']='يجب أن يتكون المبلغ من أرقام فقط';
        $Error_Flag_money=true;
    }
}
   // validation for select
   if($select == ""){
        $Error_array['select']='لا يمكن ترك هذا الحقل فارغ';
        $Error_Flag_select=true;
   }
   //////////////////////////////////////////////////////// End validation
   // 2- 3-NAME 
  
  
}
if($check&&$Error_Flag_date==false&&$Error_Flag_money==false&&$Error_Flag_select==false){
    $tp=isset($_SESSION['types2']) ? $_SESSION['types2'] : "";
    if(isset($_POST['sub-gift'])){
        if($tp=='Personal'){
            $namep=$_SESSION['User'];
        $query="insert into gift values (default,'$namep','$name','$type','$money','$date','$select','$text') ";
        $result=mysqli_query($conn,$query);
        mysqli_close($conn);
        }
        else{
            $namec=$_SESSION['User'];
            $query="insert into gift values (default,'$namec','$name','$type','$money','$date','$select','$text') ";
            $result=mysqli_query($conn,$query);
            mysqli_close($conn);
        }
    }
}