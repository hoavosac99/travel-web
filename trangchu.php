<?php
    require ('classfuntion.php');
    $DB = new classfuntion();
    session_start()  ;
  
    

    
   
?>
<html class="js sizes customelements history pointerevents postmessage webgl websockets cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside flexbox picture srcset webworkers" lang="zxx"><head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Phú Travel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="lib/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <!-- Thư viện jquery đã nén phục vụ cho bootstrap.min.js  -->
    <script src="lib/jquery-3.4.1.js"></script>
    <!-- Thư viện popper đã nén phục vụ cho bootstrap.min.js -->
    <script src="lib/popper.min.js"></script>
    <!-- Bản js đã nén của bootstrap 4, đặt dưới cùng trước thẻ đóng body-->
    <script src="lib/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
        <!-- <link rel="stylesheet" href="css/responsive.css"> -->
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

</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area sticky">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.html">Trang chủ</a></li>
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
                                <div class="mobile_menu d-block d-lg-none"><div class="slicknav_menu"><ul class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
                                            <li><a class="active" href="index.html" role="menuitem" tabindex="-1">home</a></li>
                                            <li><a href="about.html" role="menuitem" tabindex="-1">About</a></li>
                                            <li><a class="" href="travel_destination.html" role="menuitem" tabindex="-1">Destination</a>
                                            </li><li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="#" tabindex="-1">pages <i class="ti-angle-down"></i></a>
                                                <span class="slicknav_arrow">+</span></a><ul class="submenu slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                                        <li><a href="destination_details.html" role="menuitem" tabindex="-1">Destinations details</a></li>
                                                        <li><a href="elements.html" role="menuitem" tabindex="-1">elements</a></li>
                                                </ul>
                                            </li>
                                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="#" tabindex="-1">blog <i class="ti-angle-down"></i></a>
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

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="row">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>
              
                <!-- The slideshow -->
                <div class="carousel-inner ">
                  <div class="carousel-item active">
                    <img src="img/banner/banner.png" alt="Los Angeles" style="background-size: cover; width: 100%;" >
                  </div>
                  <div class="carousel-item">
                    <img src="img/banner/banner2.png" alt="Chicago" style="background-size: cover; width: 100%;">
                  </div>
                  <div class="carousel-item">
                    <img src="img/banner/banner3.png" alt="New York" style="background-size: cover; width: 100%;">
                  </div>
                </div>
        </div>
       
          
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          
          </div>

    </div>
    <!-- slider_area_end -->

    <!-- where_togo_area_start  -->
    <div class="where_togo_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="form_area">
                        <h3>Bạn muốn đi đâu?</h3>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="search_wrap">
                        <form class="search_form" action="#">
                            <div class="input_field">
                                <input type="text" placeholder="Nơi đến?">
                            </div>
                            <div class="input_field">
                                <div role="wrapper" class="gj-datepicker gj-datepicker-md gj-unselectable"><input id="datepicker" placeholder="Ngày" data-type="datepicker" data-guid="6d8de417-6198-c33d-b6dc-6e001f1a34c5" data-datepicker="true" class="gj-textbox-md" role="input"><span class="fa fa-caret-down" role="right-icon"></span></div>
                            </div>
                            <div class="input_field">
                                <select style="display: none;">
                                    <option data-display="Travel type">Travel type</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                </select><div class="nice-select" tabindex="0"><span class="current">Loại hình du lịch</span><ul class="list"><li data-value="Travel type" data-display="Travel type" class="option selected">Phiêu lưu mạo hiểm</li><li data-value="1" class="option">Thư dãn</li><li data-value="2" class="option">Tâm linh</li></ul></div>
                            </div>
                            <div class="search_btn">
                                <button class="boxed-btn4 " type="submit">Tìm kiếm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- where_togo_area_end  -->
    
    <!-- popular_destination_area_start  -->
    <div class="popular_destination_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Điểm đến phổ biến</h3>
                        <p>Những địa điểm du lịch vô cùng hấp dẫn trong những tháng hè, chắc chắn sẽ làm bạn hài lòng.</p>
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
                        <div class="single_destination">
                            <div class="thumb">
                                <img src="img/place/<?php echo $value['image']?>" alt="">
                            </div>
                            <div class="content">
                                <p class="d-flex align-items-center"><?php echo $value['ten_tour'] ?> <a href="chitiettour.php?tour=<?php echo $value['ma_tour'] ?>"><?php echo $value['gia'] ?>đ</a> </p>
                                
                            </div>
                        </div>
                    </div>      
                  <?php  } ?>
                
                
                
            </div>
        </div>
    </div>
    <!-- popular_destination_area_end  -->

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
                        <h3>Các tour du lịch hấp dẫn</h3>
                        <p>Có đầy đủ các tour du lịch trong và ngoài nước để cho bạn thỏa sức khám phá.</p>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="more_place_btn text-center">
                        <a class="boxed-btn4" href="#">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="video_area video_bg overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video_wrap text-center">
                        <h3>Enjoy Video</h3>
                        <div class="video_icon">
                            <a class="popup-video video_play_button" href="https://www.youtube.com/watch?v=kFmW-tILgBU">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="travel_variation_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/1.svg" alt="">
                        </div>
                        <h3>Hành trình thoải mái</h3>
                        <p>Đem đến cho bạn một cảm giác thoải mái và thư thái.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/2.svg" alt="">
                        </div>
                        <h3>Khách sạn sang trọng</h3>
                        <p>Hệ thống khách sạn 5 sao sang trọng tiện nghi nhất.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/3.svg" alt="">
                        </div>
                        <h3>Hướng dẫn viên</h3>
                        <p>Những hướng dẫn viên trẻ khỏe,năng động và nhiệt tình sẽ đồng hành cùng bạn</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- testimonial_area  -->
    
    <!-- /testimonial_area  -->


    <div class="recent_trip_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Những điểm đến gần đây</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                     $hien2 = $DB->get_row('select * from dangkytour limit 3');
                    $tour = $hien2['ma_tour'];
                   
                    $hien3 = $DB->get_list("select * from tour where ma_tour='$tour' limit 3");
                    foreach($hien3 as $key=> $value){
                 ?>
                        <div class="col-lg-4 col-md-6">
                        <div class="single_trip">
                            <div class="thumb">
                                <img src="img/place/<?php echo $value['image']?>" alt="">
                            </div>
                            <div class="info">
                                <div class="date">
                                    <span><?php echo $value['ngaybd']?></span>
                                </div>
                                <a href="#">
                                    <h3><?php echo $value['ten_tour']?></h3>
                                </a>
                            </div>
                        </div>
                    </div>      
                  <?php  } ?>
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
    </script><div role="calendar" type="month" class="gj-picker gj-picker-md datepicker gj-unselectable" guid="6d8de417-6198-c33d-b6dc-6e001f1a34c5" month="6" year="2020" style="display: none;"><div role="body"></div></div>


<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: block;"><i class="fa fa-angle-double-up"></i></a></body></html>