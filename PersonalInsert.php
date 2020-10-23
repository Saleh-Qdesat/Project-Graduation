<?php
             
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname="graduationdb";

                $conn =  mysqli_connect($servername, $username, $password, $dbname);
               
                
                $FirstName =isset( $_POST['firstname'])? $_POST['firstname'] : "" ;//
                $lastname =isset($_POST['Lastname'])? $_POST['Lastname'] : "";//
                $BirthDate =isset($_POST['birth_date'])? $_POST['birth_date'] : "";//
                $Gender =isset( $_POST['gender']) ? $_POST['gender'] : "";//
                $PhoneNumber =isset( $_POST['phone_number'])? $_POST['phone_number'] : "";//
                $password=isset($_POST['password']) ? $_POST['password'] : "";//
                $re_password=isset($_POST['re_password']) ? $_POST['re_password'] : "" ;//
                $email=isset($_POST['email']) ? $_POST['email'] : "" ;
                $city=isset($_POST['city']) ? $_POST['city'] : "" ;//
                $submit=isset($_POST['submit']) ? $_POST['submit'] : "" ;//
                
                //لعدم إظهار رسالة خطأ للمستخدم

                $error=null ;
                $check=true;
                $Error_array=array(
                    'f_name'=>'',
                    'l_name'=>'',
                    'b_date'=>'',
                    'gender'=>'',
                    'phone_number'=>'',
                    'password'=>'',
                    're_password'=>'',
                    'email'=>'',
                    'city'=>''

                );
                $Error_Flag_f_name=false;
                $Error_Flag_l_name=false;
                $Error_Flag_b_date=false;
                $Error_Flag_gender=false;
                $Error_Flag_phone_number=false;
                $Error_Flag_password=false;
                $Error_Flag_re_password=false;
                $Error_Flag_email=false;
                $Error_Flag_city=false;

                if(isset($_POST['submit'])){
                    
                    if(empty($FirstName) || empty($lastname) || empty($BirthDate) ||  empty($Gender) || empty($PhoneNumber) || empty($password) || empty($email) || empty($city))
                    {
                        $error="يجب إدخال القيم المطلوبة";
                        $check=false;
                    }
                    //validation name
                    if(empty($FirstName)){
                        $Error_array['f_name']="لا يمكن ترك الأسم فارغ";
                        $Error_Flag_f_name=true;

                    }
                    elseif(strlen($FirstName)<3){
                        $Error_array['f_name']="يجب أن يتكون الأسم من ثلاث أحرف أو أكثر";
                        $Error_Flag_f_name=true;
                    }
                    elseif(!preg_match('/^[_\s[:alpha:]]+$/',$FirstName)&&(!preg_match("/\p{Arabic}/u",$FirstName))){
                        $Error_array['f_name']="يجب أن يحتوي الأسم على حروف فقط";
                        $Error_Flag_f_name=true;
                    }
                    //validation last_name

                    if(empty($lastname)){
                        $Error_array['l_name']="لا يمكن ترك الأسم فارغ";
                        $Error_Flag_l_name=true;

                    }
                    elseif(strlen($lastname)<3){
                        $Error_array['l_name']="يجب أن يتكون الأسم من ثلاث أحرف أو أكثر";
                        $Error_Flag_l_name=true;
                    }
                    elseif(!preg_match('/^[_\s[:alpha:]]+$/',$lastname)&&(!preg_match("/\p{Arabic}/u",$lastname))){
                        $Error_array['l_name']="يجب أن يحتوي الأسم على حروف فقط";
                        $Error_Flag_l_name=true;
                    }
                   // validation date

                   if(empty($BirthDate)){
                    $Error_array['b_date']="يجب إدخال تاريخ الميلاد";
                    $Error_Flag_b_date=true;

                   }
                
                   //validation phone
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

                   //validation password 
                   if(empty($password)){
                        $Error_array['password']="لا يمكن ترك كلمة المرور فارغة";
                       $Error_Flag_password=true;
                      
                   }
                   elseif(!preg_match('/[[:alnum:]]{4,}./',$password)){
                    $Error_array['password']="يجب ان تتكون كلمة المرور من اربعة خانات على الأقل";
                    $Error_Flag_password=true;
                   }

                   //validation re_password
                   if(empty ($re_password)){
                    $Error_array['re_password']="لا يمكن ترك كلمة المرور فارغة";
                    $Error_Flag_re_password=true;
                }
               
                
                elseif($re_password!=$password){
                    $Error_array['re_password']="كلمة السر غير مطابقة";
                    $Error_Flag_re_password=true;
                }


                   //validation email
                   if (empty($email)){
                       $Error_array['email']="يجب ادخال البريد الالكتروني";
                       $Error_Flag_email=true;
                   }
                    elseif(!preg_match('/^[-_[:alnum:]]+(\.[-_[:alnum:]]+)*@[[:alnum:]]+(\.[[:alnum:]]+)*(\.[[:alpha:]]{2,})$/',$email)){
                        $Error_array['email']="يجب إدخال بريد الكتروني صحيح";
                        $Error_Flag_email=true;
                    }



                
               
                if ($check && $Error_Flag_f_name==false&&$Error_Flag_l_name==false&&$Error_Flag_b_date==false&&$Error_Flag_phone_number==false&&$Error_Flag_password==false&&$Error_Flag_re_password==false&&$Error_Flag_email==false){
                    if(isset($_POST['submit'])){
                $query = "INSERT INTO  personal_users_table VALUES (default,'$FirstName','$lastname','$BirthDate','$Gender','$PhoneNumber','$password','$email', ' $city' , 'Personal')";
               $result = mysqli_query($conn,$query);

               mysqli_close($conn);
               
            }
        }
       
    }  
       
?>




