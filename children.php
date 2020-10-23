<?php include 'confirm.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الأطفال/دار الإحسان</title>
    <link rel="icon" href="img/ihsan.png" type="image/png">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/children.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body>
     <!--================ترويسة الصفحة =================-->
     <header class="header_area" style="direction: rtl;">
        <div class="top_menu row ">
            <div class="container">
           </div></div>
                
           
        <div class="main_menu">
            <nav class="navbar  navbar-expand-lg navbar-light   " style="direction: rtl; ">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h " href="index.html"><img src="images/ihsan.png" style="margin-right: -50px;"  alt=""> </a>
        
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset "  id="navbarSupportedContent" style="direction: rtl;">
                        <ul class="nav navbar-nav menu_nav ml-auto"> 
                            <li class="nav-item "><a class="nav-link" href="admin.php">الشخصية</a></li> 
                            <li class="nav-item "><a class="nav-link" href="call-profile.php">إتصل بنا</a></li> 
                             
                            <li class="nav-item active"><a class="nav-link" href="children.php">الأطفال</a></li>  
                           <?php
                            $per_type=isset($_SESSION['types2']) ? $_SESSION['types2'] : "";
                            $com_type=isset($_SESSION['types']) ? $_SESSION['types'] : "";
 
                            if($com_type == "Company"){ ?>
                            <li class="nav-item" ><a class="nav-link" href="edit-company.php">تعديل الحساب</a></li>  <?php }

                            else { ?>
                                <li class="nav-item" ><a class="nav-link" href="edit.php">تعديل الحساب</a></li> <?php
                            } ?>
                   
                   <li class="nav-item"><a class="nav-link" href="visit.php">طلب زيارة للجمعية</a></li>
                            
                         <li class="nav-item ">  <a class="nav-link" href="donation-profile.php">
                                        <span>
                                            تبرع الآن
                                        </span>
                                    </a></li> 
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
</header>
<div class="header text-center">
  <h3>الأطفال الذي يمكنك كفالتهم</h3>
  <P CLASS="lead">أنا وكافلُ اليتيمِ في الجنةِ هكذا وقال بإصبعيْهِ السبابةِ والوسطى</p>

</div>
   <div class="children">
     <div class="container">
       <div class="row">
         <div class="chil1 col-md-4 text-center">
           <img src="images/chil1.jpg" style="width:90%;">
           <h3>ليان أحمد</h3>
           <hr>
           <h4>أعوام4</h4>
           <hr>
           <p class="lead">توفي والديها اثناء الحرب السورية</p>
           <button type="button" class="btn btn-primary view w-100" style="background-color:orange; border-color:orange;" id="1" data-toggle="modal" data-target="#exampleModal">
                             كفالة
                      </button>
            </div>
            <div class="chil1 col-md-4 text-center">
           <img src="images/chil2.jpg" style="width:100%;">
           <h3>فرح محمد</h3>
           <hr>
           <h4>5أعوام</h4>
           <hr>
           <p class="lead">فقدت والديها في حادث سير </p>
           <button type="button" class="btn btn-primary view w-100" style="background-color:orange; border-color:orange;" id="2" data-toggle="modal" data-target="#exampleModal">
                             كفالة
                      </button>
            </div>
            <div class="chil1 col-md-4 text-center">
           <img src="images/chil8.jpg" style="width:78%;">
           <h3>ناديا عمر</h3>
           <hr>
           <h4>4أعوام</h4>
           <hr>
           <p class="lead">توفى والديها بمرض</p>
           <button type="button" class="btn btn-primary view w-100" style="background-color:orange; border-color:orange;" id="3" data-toggle="modal" data-target="#exampleModal">
                             كفالة
                      </button>
            </div>
            <div class="chil1 col-md-4 text-center">
           <img src="images/chil5.jpg" style="width:77%;">
           <h3>يسرى خالد</h3>
           <hr>
           <h4>7أعوام</h4>
           <hr>
           <p class="lead">توفى والديها بسبب حريق في بيتهم</p>
           <button type="button" class="btn btn-primary view w-100"  style="background-color:orange; border-color:orange;" id="4" data-toggle="modal" data-target="#exampleModal">
                             كفالة
                      </button>
            </div>
            <div class="chil1 col-md-4 text-center">
           <img src="images/child9.jpg" style="width:88%;">
           <h3>عمر مثنى</h3>
           <hr>
           <h4>5أعوام</h4>
           <hr>
           <p class="lead">توفى والده أثناء تأديته عمله</p>
           <button type="button" class="btn btn-primary view w-100"  style="background-color:orange; border-color:orange;" id="5" data-toggle="modal" data-target="#exampleModal">
                             كفالة
                      </button>
            </div>
            <div class="chil1 col-md-4 text-center">
           <img src="images/chil6.jpg" style="width:77%;">
           <h3>وعد أحمد</h3>
           <hr>
           <h4>8أعوام</h4>
           <hr>
           <p class="lead">توفى والديها بسبب الغرق</p>
           <button type="button" class="btn btn-primary view w-100"  style="background-color:orange; border-color:orange;" id="6" data-toggle="modal" data-target="#exampleModal">
                             كفالة
                      </button>
            </div>
       </div>
     </div>
   </div>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
    $('.view').click(function(){
        var ID = $(this).attr("id");
        $.ajax({
            url: "show.php",
            method:"post",
            data:{ID,ID},
            success:function(data)
            {
                $('#body').html(data);
                $('#exampleModal').model("show");
            }
        });
    });
});
    </script>
   <!-------------------------------------------------------------- footer ----------------------->
<section class="cid-rUEBEsYsPh mbr-reveal" id="footer1-9" style="direction: rtl;margin-top:100px ">
<div class="container-fluid ">
    <div class="media-container-row content text-white ">
        <div class="col-12 col-md-3">
            <div class="media-wrap">
                    <img src="images/daralehsan-logo-192x57.png" alt="Mobirise" title=""  style="margin-left: 69px;">
                </a>
            </div>
        </div>
        <div class=" col-12 col-md-3 mbr-fonts-style display-7">
            <h3 class="pb-0"><em><strong>العنوان</strong></em></h3>
            <p class="mbr-text" style="direction:ltr"><br>ماركة الجنوبية - نادي السباق - الحزام الدائري - صالحية العابد<br> -شارع محمد المفتي- إسكان  الفردوس - بناية رقم 1 
<br>+962 77 787 7723
<br>+962 6 490 0411</p>
        </div>
        <div class="col-12 col-md-3 mbr-fonts-style display-7">
            <h3 class="pb-4"><em><strong>
                المعلومات البنكية</strong></em></h3>
            <p class="mbr-text">البنك الإسلامي الأردني
<br>فرع تلاع العلي
<br>
<br>رقم الحساب:
<br>14000
<br>
<br>رقم الحساب الكامل:
<br>1663215410400002
<br>
<br>IBAN:
<br>JO22JIBA0030001663215410400002
<br>
<br>swift code:
<br>JIBAJOAMXXX</p>
        </div>
        <div class=" mas col-12 col-md-3 mbr-fonts-style display-7 ">
            <h3 class="  pb-0"><em><strong>
                المشاريع</strong></em></h3>
            <p class="mbr-text"><br><em><a href="admin.php"> الصفحة الشخصية
</a><br></em>
<br><a href="call-profile.php">إتصل بنا
</a><br>
<br><a href="children.php">الأطفال
</a><br>
<br><?php
                            $per_type=isset($_SESSION['types2']) ? $_SESSION['types2'] : "";
                            $com_type=isset($_SESSION['types']) ? $_SESSION['types'] : "";
 
                            if($com_type == "Company"){ ?>
                            <a class="nav-link" href="edit-company.php">تعديل الحساب</a>  <?php }

                            else { ?>
                                <a class="nav-link" href="edit.php">تعديل الحساب</a> <?php
                            } ?>
</a>
<br><a href="visit.php">طلب زيارة للجمعية</a>
<br><br><a href="donation-profile.php">تبرع الآن</a>
</p>
        </div>
    </div>
    <div class="footer-lower">
        <div class="media-container-row">
            <div class="col-sm-12">
                <div class="col-12 copyright text-center" >
                    <span class="mbr-text mbr-fonts-style display-7"style="font-weight:bold;color:white;">
                        © Copyright 2020 AABU-STUDENT- All Rights Reserved
</span>
                </div>
                <hr>
            </div>
        </div>
        <div class="media-container-row mbr-white">
            <div class="col-md-3">
                <div class="social-list align-center">
                    <div class="soc-item">
                        <a href="https://www.youtube.com/channel/UCouTqi-4yNcebeou37YCXgg" target="_blank">
                            <img src="images/youtube.png">
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://ar-ar.facebook.com/DarAlehsan.jo/" target="_blank">
                            <img src="images/facebook.png">                                </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://twitter.com/daralehsan" target="_blank">
                            <img src="images/twt.png">                                </a>
                        </a>
                    </div>
                    
                    
                    
                </div>
            </div>
          
        </div>
     
    </div>
    
</div>

</section>
    </body>

</html>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="#" method="get">
      <div class="modal-body" id='body'>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" >إلغاء</button> 
        <button type="submit" name="confirm" class="btn btn-success">تأكيد</button>
      </div>
        </form>
    </div>
  </div>
</div>