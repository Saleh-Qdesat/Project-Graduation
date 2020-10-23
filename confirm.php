<?php
$server="localhost";
$user="root";
$password="";
$dbname="graduationdb";
$conn=mysqli_connect($server,$user,$password,$dbname);

session_start();

if(isset($_GET["confirm"]))
{
   $ID = $_GET["ID"];
   
   
   ////////////////////////////////////
   $tt=(isset($_SESSION["types"]) ? $_SESSION["types"] : "");
   if($tt=='Company'){
      $c_id=$_SESSION['company_id'];
      $query="insert into guarantee  values (default,$c_id,$ID)";
    $result=mysqli_query($conn,$query);
   }
else{
   $idp=$_SESSION['pid'];
    $query="insert into guarantee_personal  values (default,$idp,$ID)";
    $result=mysqli_query($conn,$query);
}

}

?>

