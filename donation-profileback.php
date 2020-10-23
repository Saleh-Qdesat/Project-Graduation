
<?php 
$host="localhost";
$user="root";
$pass="";
$dbname="graduationdb";
$conn=mysqli_connect($host,$user,$pass,$dbname);

session_start();
///////////////////////////////////////////////////
$select=isset($_POST['select']) ? $_POST['select'] : "" ;//
$money=isset($_POST['money-prof']) ? $_POST['money-prof'] : "";//
$payment=isset($_POST['pay-prof']) ? $_POST['pay-prof'] : "" ; //
$typ=isset($_POST['type-prof']) ? $_POST['type-prof'] : "" ; //
$area=isset($_POST['text-prof']) ? $_POST['text-prof'] : "" ; //
$sub=isset($_POST['sup-prof']) ? $_POST['sup-prof'] : "" ; //


$error=null;
$check=true;

if(isset($sub))
{
if(empty($select) || empty($money) || empty($payment) || empty($typ) ){
    $error='يجب إدخال القيم المطلوبة';
    $check=true;
} 
$Error_array=array(
    'select'=>'',
    'money'=>'',
    'payment'=>''

);

$Error_Flag_select=false;
$Error_Flag_money=false;
$Error_Flag_payment=false;

if(isset($_POST['sup-prof']))
{
if(empty($select) || empty($money) || empty($payment)  ){
    $error='يجب إدخال القيم المطلوبة';
    $check=false;
} 
//validation for types
if($select==""){
   $Error_array['select']='يجب أختيار بند تبرع';
   $Error_Flag_select=true;
}
//validation for money
if(empty($money)){
    $Error_array['money']='لا يمكن ترك المبلغ فارغ';
    $Error_Flag_money=true;
}
elseif(!preg_match('/[[:digit:]]+/',$money)){
    $Error_array['money']='يجب إدخال أرقام فقط';
    $Error_Flag_money=true;
}
//validation for payment
if($payment ==""){
    $Error_array['payment']='يجب أختيار طريقة الدفع';
    $Error_Flag_payment=true;
}
}
   
  
   


   ////////////////////////////////////
   $tp=isset($_SESSION['types2']) ? $_SESSION['types2'] : "";
   


   
   if($check&& $Error_Flag_select==false&& $Error_Flag_money==false&&$Error_Flag_payment==false){
    if($sub){
if ($tp == 'Personal'){
    

        $namep=$_SESSION['User'];
   $emailp=$_SESSION['email_p'];
   $phonep=$_SESSION['phonenumber_p'];
    $query="insert into donation  values (default,'$namep','$emailp','$phonep','$typ','$select','$money','$payment','$area')";
    $result=mysqli_query($conn,$query);
    mysqli_close($conn);


}
else{
   $phonec= $_SESSION['phonenumber'];
   $emailc= $_SESSION['email'];
   $namec=$_SESSION['User'];
   $query="insert into donation  values (default,'$namec','$emailc','$phonec','$typ','$select','$money','$payment','$area')";
   $result=mysqli_query($conn,$query);
   mysqli_close($conn);
}
}
}
}

?>