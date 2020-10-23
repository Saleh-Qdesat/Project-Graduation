<?php include 'sign-in-adminback.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دار الاحسان تسجيل دخول</title>
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="css/bootstrap.css">
       <link rel="stylesheet" href="css/themify-icons.css">
       <link rel="stylesheet" href="css/flaticon.css">
       <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
       <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
       <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="css/sign-in.css">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>
    <div class="container1">


        <div class="d-flex justify-content-center h-100">

            <div class="card">
            
                <div class="card-header">
                    <h3>Sign in admin</h3>
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user " ></i></span>
                            </div>
                            <input type="text" class="form-control" name="admin" placeholder="username">
                           
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="password">
                           
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" name="btn-admin" class="btn float-right login_btn">
                           
                        </div>
                       
                    </form>
                </div>
                
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>