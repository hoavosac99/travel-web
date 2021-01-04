<?php
    require('classfuntion.php');
    $DB = new classfuntion();
    $DB->connect();
    $id_tour = $_GET['tour'];
   $row= $DB->get_row("select * from tour where ma_tour='$id_tour'");
?>
<html class="js sizes customelements history pointerevents postmessage webgl websockets cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside flexbox picture srcset webworkers" lang="zxx"><head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Travelo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style>
        .a{
            width: 100%;
            background: #F4F4F4;
            height: 50px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            color: #000;
            padding-left: 15px;
            border: none;
        }
        #mua {
        margin-left: 46%;
        top: 85px;
        }
    </style>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="trangchu.php">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                    <ul id="navigation">
                                            <li><a class="active" href="trangchu.php">Trang chủ</a></li>
                                            <li><a href="about.html">Giới thiệu</a></li>
                                            <li><a class="" href="travel_destination.html">Nơi đến</a>
                                            </li><li><a href="#">Trang <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="destination_details.html">Khám phá</a></li>
                                                        <li><a href="elements.html">Tin tức</a></li>
                                                </ul>
                                            </li>
                                            
                                            <li><a href="contact.html">Liên hệ</a></li>
                                            <?php 
                                                
                                                if(!empty($_SESSION['admin'])){
                                                ?>
                                                    <li><a href="admin/admin.php">Về admin</a></li>
                                            <?php    } ?>
                                                                                        
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="number">
                                        <p> <i class="fa fa-phone"></i> 10(256)-256 256</p>
                                    </div>
                                    <div class="social_links d-none d-xl-block">
                                        <ul>
                                            <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="seach_icon">
                                <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"><div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_collapsed" style=""><span class="slicknav_menutxt">MENU</span><span class="slicknav_icon"><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a><ul class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
                                            <li><a class="active" href="trangchu.php" role="menuitem" tabindex="-1">home</a></li>
                                            <li><a href="about.html" role="menuitem" tabindex="-1">About</a></li>
                                            <li><a class="" href="travel_destination.html" role="menuitem" tabindex="-1">Destination</a>
                                            </li><li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style=""><a href="#" tabindex="-1">pages <i class="ti-angle-down"></i></a>
                                                <span class="slicknav_arrow">+</span></a><ul class="submenu slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                                        <li><a href="destination_details.html" role="menuitem" tabindex="-1">Destinations details</a></li>
                                                        <li><a href="elements.html" role="menuitem" tabindex="-1">elements</a></li>
                                                </ul>
                                            </li>
                                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style=""><a href="#" tabindex="-1">blog <i class="ti-angle-down"></i></a>
                                                <span class="slicknav_arrow">+</span></a><ul class="submenu slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                                    <li><a href="blog.html" role="menuitem" tabindex="-1">blog</a></li>
                                                    <li><a href="single-blog.html" role="menuitem" tabindex="-1">single-blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html" role="menuitem" tabindex="-1">Contact</a></li>
                                        </ul></div></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <div class="destination_banner_wrap overlay">
        <div class="destination_text text-center">
            <h3><?php echo $row['ten_tour']?></h3>
            <?php 
              
              // $songay = date('d',strtotime( strtotime($row['ngaykt']) - strtotime($row['ngaybd'])));
               $songay = date('d', strtotime($row['ngaykt']) - strtotime($row['ngaybd']));
            ?>
            <p><?php echo $songay-0 ?> Ngày <?php echo $songay-1?> Đêm</p>
            <p>Chỉ với <?php echo $row['gia']?> vnđ</p>
        </div>
        <button type="button" class="btn btn-primary ibtnmua" id="mua">
            Mua ngay
        </button>
    </div>

    <div class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    <div class="destination_info">
                        <h3>Giới thiệu hành trình</h3>
                        <p><?php echo $row['content']?></p>
                        
                    </div>
                    <div class="bordered_1px"></div>
                    <div class="contact_join" id="formdatve">
                        <h3>Điền thông tin để đặt tour</h3>
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <input type="text" placeholder="Tên" name="txtten">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <input type="text" placeholder="Số điện thoại." name="txtsdt">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6" style="display: inline;">
                                        <div class="a" style="padding-top:17px">
                                            <p style="display: inline; margin-right: 10px;">Giới tính</p>
                                        <input type="radio"  name="txtphai" value="0" checked> Nam
                                        <input type="radio" name="txtphai" value="1"> Nữ
                                  
                                        </div>
                                        
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <input type="text" placeholder="Địa chỉ." name="txtdiachi">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <input type="number" placeholder="Số vé." name="txtsove">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <input type="text" placeholder="Email." name="txtemail">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_input">
                                        <textarea name="txtnhan" id="" cols="30" rows="10" placeholder="Nhắn tin"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="submit_btn">
                                        <button class="boxed-btn4" type="submit" name="ok">Mua ngay</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- newletter_area_start  -->
    <div class="newletter_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="newsletter_text">
                                <h4>Theo dõi chúng tôi</h4>
                                <p>Để nhận được những ưu đãi về du lịch sớm nhất.</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="mail_form">
                                <div class="row no-gutters">
                                    <div class="col-lg-9 col-md-8">
                                        <div class="newsletter_field">
                                            <input type="email" placeholder="Your mail">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="newsletter_btn">
                                            <button class="boxed-btn4 " type="submit">Đồng ý</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newletter_area_end  -->

    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>More Places</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                $hien= $DB->get_list('select * from tour limit 6');
                foreach($hien as $key => $value)
                  {
           ?>
                           <div class="col-lg-4 col-md-6">
                       <div class="single_place">
                           <div class="thumb">
                               <img src="img/place/1.png" alt="">
                               <a href="#" class="prise">$<?php echo $value['gia']?></a>
                           </div>
                           <div class="place_info">
                               <a href="chitiettour.php?tour=<?php echo $value['ma_tour'] ?>"><h3><?php echo $value['ten_tour']?></h3></a>
                               <p>Việt Nam</p>
                               <div class="rating_days d-flex justify-content-between">
                                   <span class="d-flex justify-content-center align-items-center">
                                       <i class="fa fa-star"></i> 
                                       <i class="fa fa-star"></i> 
                                       <i class="fa fa-star"></i> 
                                       <i class="fa fa-star"></i> 
                                       <i class="fa fa-star"></i>
                                       <a href="#">(20 Review)</a>
                                   </span>
                                   <div class="days">
                                       <i class="fa fa-clock-o"></i>
                                       <a href="#">5 Days</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>      
           <?php } ?>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p>Đại diện: Ông Nguyễn Văn Phú - Chủ tịch HĐQT kiêm Tổng giám đốc<br>
                                Trụ sở chính: 95B-97-99 Trần Hưng Đạo, Quận 1, TP. Hồ Chí Minh.<br>
                                Chi nhánh Hà Nội: 66 Trần Hưng Đạo, Quận Hoàn Kiếm, Hà Nội<br>
                                Điện thoại: 028 730 56789 | Hotline: 19001177<br>
                                
                                <a href="#">contact@carpenter.com</a>
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Góp ý khách hàng
                            </h3>
                            <ul class="links">
                                <li><a href="#">Chính sách đặt tour</a></li>
                                <li><a href="#">Chính sách bảo mật</a></li>
                                <li><a href="#"> Ý kiến khách hàng</a></li>
                                <li><a href="#"> Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Các điểm đến 
                            </h3>
                            <ul class="links double_links">
                                <li><a href="#">China</a></li>
                                <li><a href="#">America</a></li>
                                <li><a href="#">India</a></li>
                                <li><a href="#">Switzerland</a></li>
                                <li><a href="#">Italy</a></li>
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">Franch</a></li>
                                <li><a href="#">England</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Instagram
                            </h3>
                            <div class="instagram_feed">
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/1.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/2.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/3.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/4.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/5.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/6.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


  <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="text" placeholder="Search">
            <button type="submit">search</button>
        </div>
      </div>
    </div>
  </div>
    <!-- link that opens popup -->
<!--     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/slick.min.js"></script>
   

    
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>

<script>
    $(document).ready(function () {
       var form= $('#formdatve').offset().top -300;
        $('#mua').click(function (e) { 
        e.preventDefault();
        $('body').animate({scrollTop: form},400);
    });
    });
    
</script>
<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="fa fa-angle-double-up"></i></a></body></html>
<?php
    
    if(isset($_POST['ok'])){
    $ten = $_POST['txtten'];
    $sdt = $_POST['txtsdt'];
    $phai = $_POST['txtphai'];
    $diachi = $_POST['txtdiachi'];
    $sove = $_POST['txtsove'];
    $email = $_POST['txtemail'];
       $num= $DB->check_row("select * from user where id='$email'");
        if($num>=1){
            // echo "<script>alert('Email đã tồn tại')</script>";
            
           $kiemtra= $DB->update('user', array(
                'ten' => $ten,
                'phai' => $phai,
                'diachi' => $diachi,
                'sdt' => $sdt,
                'email' => $email,
            ), "id = $email ");
                    $DB->insert('dangkytour', array(
                    'ma_khach' => $email,
                    'ma_tour' => $id_tour,
                    'soluong_ve' => $sove,
                   
                ));
            if($kiemtra){
                echo "<script>alert('Đặt vé thành công')</script>";
            }
        }
        else{
             $kiemtra1=   $DB->insert('user', array(
                'id' => $email,
                'ten' => $ten,
                'phai' => $phai,
                'diachi' => $diachi,
                'sdt' => $sdt,
                'email' =>$email
            ));
            $DB->insert('dangkytour', array(
                'ma_khach' => $email,
                'ma_tour' => $id_tour,
                'soluong_ve' => $sove,
               
            ));
            if($kiemtra1){
                echo "<script>alert('Đặt vé thành công')</script>";
            }
        }
    }
?>