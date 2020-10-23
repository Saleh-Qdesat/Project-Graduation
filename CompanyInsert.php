<?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname="graduationdb";
                $conn =  mysqli_connect($servername, $username, $password, $dbname);
              
                $CompanyName =isset( $_POST["CompanyName"]) ? $_POST["CompanyName"] : "";//
                $FirstName =isset( $_POST["FirstName"]) ? $_POST["FirstName"] : "";//
                $Email =isset($_POST["email"])? $_POST["email"] : "";//
                $Site = isset($_POST["Site"]) ? $_POST["Site"] : "";//
                $PhoneNumber =isset($_POST["phone_number"]) ? $_POST["phone_number"] : "";//
                $Sector =isset( $_POST["Sector"]) ? $_POST["Sector"] : "";//
                $Password =isset($_POST["Password"]) ? $_POST["Password"] : "";//
                $re_password=isset($_POST["re_password"]) ? $_POST["re_password"] : "";//



                $error=null;
                $check = true;
                
                $Error_array=array(
                    'C_name'=>'',
                    'O_name'=>'',
                    'email'=>'',
                    'site'=>'',
                    'phone_number'=>'',
                    'sector'=>'',
                    'password'=>'',
                    're_password'=>'',

                );
                $Error_Flag_C_name=false;
                $Error_Flag_O_name=false;
                $Error_Flag_email=false;
                $Error_Flag_site=false;
                $Error_Flag_phone_number=false;
                $Error_Flag_password=false;
                $Error_Flag_re_password=false;
                $Error_Flag_sector=false;
               

                if (isset ($_POST['submit'])){

                    if (empty($CompanyName) || empty($FirstName)|| empty($Email) || empty ($Site) || empty($PhoneNumber) || empty($Sector) || empty($Password) || empty($re_password))
                    {
                        $error ="يجب إدخال القيم المطلوبة";
                        $check = false;

                    }
                    // validation for company name

                    if(empty($CompanyName)){
                        $Error_array['C_name']="لا يمكن ترك الأسم فارغ";
                        $Error_Flag_C_name=true;
                    }
                    elseif(strlen($CompanyName)<3){
                        $Error_array['C_name']="يجب أن يتكون أسم الشركة من ثلاثة أحرف على الأقل";
                        $Error_Flag_C_name=true;
                    }
                    elseif(!preg_match('/^[_\s[:alpha:]]+$/',$CompanyName)&&(!preg_match("/\p{Arabic}/u",$CompanyName))){
                        $Error_array['C_name']="يجب أن يتكون أسم الشركة من حروف فقط";
                        $Error_Flag_C_name=true;
                    }

                    //validation for First name
                        
                    if(empty($FirstName)){
                        $Error_array['O_name']="لا يمكن ترك رقم السجل التجاري فارغ";
                        $Error_Flag_O_name=true;
                    }
                    
                    //elseif(strlen($FirstName)<3){
                       // $Error_array['O_name']="يجب أن يتكون أسم الشركة من ثلاثة أحرف على الأقل";
                       // $Error_Flag_O_name=true;
                    //}
                    
                    elseif(!preg_match('/^([0-9]+)$/',$FirstName)){
                        $Error_array['O_name']="يجب أن يتكون رقم السجل التجاري من عشرة أرقام";
                        $Error_Flag_O_name=true;
                    }

                   // validation for email

                   if(empty( $Email)){
                       $Error_array['email']="لا يمكن ترك البريد الالكتروني فارغ";
                       $Error_Flag_email=true;
                }

                elseif (!preg_match('/^[-_[:alnum:]]+(\.[-_[:alnum:]]+)*@[[:alnum:]]+(\.[[:alnum:]]+)*(\.[[:alpha:]]{2,})$/',$Email)){
                    $Error_array['email']="يجب ادخال بريد الكتروني صحيح";
                    $Error_Flag_email=true;
                }

                //validation for phone number

                if(empty($PhoneNumber)){
                    $Error_array['phone_number']="لا يمكن ترك رقم الهاتف فارغ";
                    $Error_Flag_phone_number=true;
                 }
                 elseif (strlen($PhoneNumber)< 10 ){
                  $Error_array['phone_number']="يجب ان يتكون رقم الهاتف من عشرة خانات";
                  $Error_Flag_phone_number=true;
                 }
                 elseif(!preg_match('/^([0-9]{10})$/',$PhoneNumber)){
                  $Error_array['phone_number']="تاكد بانك قمت بادخال 10 ارقام ";
                  $Error_Flag_phone_number=true;
                 }


                 //validation for password

                 if(empty($Password)){
                    $Error_array['password']="لا يجب ترك كلمة المرور فارغة";
                   $Error_Flag_password=true;
                  
               }
               elseif(!preg_match('/[[:alnum:]]{4,}./',$Password)){
                $Error_array['password']="يجب ان تتكون كلمة المرور من اربعة خانات على الأقل";
                $Error_Flag_password=true;
               }

               //validation re_password
               if(empty ($re_password)){
                $Error_array['re_password']="لا يجب ترك كلمة المرور فارغة";
                $Error_Flag_re_password=true;
            }
           
            
            elseif($re_password!=$Password){
                $Error_array['re_password']="كلمة السر غير مطابقة";
                $Error_Flag_re_password=true;
            }





            if ($check && $Error_Flag_C_name==false&&$Error_Flag_O_name==false&&$Error_Flag_email==false&&$Error_Flag_phone_number==false&&$Error_Flag_password==false&&$Error_Flag_re_password==false&&$Error_Flag_email==false){
                if(isset($_POST['submit'])){

                $query = "INSERT INTO company_users_table VALUES (default,'$CompanyName','$FirstName','$Site','$Email',$PhoneNumber,'$Sector','$Password' , 'Company')";
                $result = mysqli_query($conn,$query);
                mysqli_close($conn);
                }
            }
        }
                
?>