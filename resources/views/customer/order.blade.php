<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Order</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset ('/customerasset/css/bootstrap.min.css') }}">
    <!-- owl css -->
    <link rel="stylesheet" href="{{asset ('/customerasset/css/owl.carousel.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset ('/customerasset/css/style.css') }}">
    <!-- responsive-->
    <link rel="stylesheet" href="{{asset ('/customerasset/css/responsive.css') }}">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>

    <div class="wrapper">
    <!-- end loader -->

     <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Menu</a>
                    </li>
                    <li>
                        <a href="#">Order</a>
                    </li>
                    <li>
                        <a href="#">FAQ</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                </ul>

            </nav>
        </div>

    <div id="content">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="index.html"><img src="images/logo.png" alt="#" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                <li class="dinone">MENU<img style="margin-right: 15px;margin-left: 15px;" src="{{asset ('/customerasset/images/phone_icon.png') }}" alt="#"><a href="#">MENU</a></li>
                                <li class="dinone"><img style="margin-right: 15px;" src="{{asset ('/customerasset/images/mail_icon.png') }}" alt="#"><a href="#">ORDER</a></li>
                                <li class="dinone"><img style="margin-right: 15px;height: 21px;position: relative;top: -2px;" src="{{asset ('/customerasset/images/location_icon.png') }}" alt="#"><a href="#">FAQ</a></li>
                                <li class="button_user"><a class="button active" href="#">Login</a><a class="button" href="#">Register</a></li>
                                <li><img style="margin-right: 15px;" src="{{asset ('/customerasset/images/search_icon.png') }}" alt="#"></li>
                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="{{asset ('/customerasset/images/menu_icon.png') }}" alt="#">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <!-- section -->
    <section class="resip_section">
        <div class="container">
            <div class="row">
         <div class="col-md-12">
       <div class="ourheading">
    <h2>Our Menu</h2>
  </div>
</div>    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="owl-carousel owl-theme">

                <div class="item">
                    <div class="product_blog_img">
                        <img src="{{asset ('/customerasset/images/rs1.png') }}" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>PAKET A</h3>
                        <h4><span class="theme_color">$</span>10</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="{{asset ('/customerasset/images/rs2.png') }}" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>PAKET B</h3>
                        <h4><span class="theme_color">$</span>20</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="{{asset ('/customerasset/images/rs3.png') }}" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>PAKET C</h3>
                        <h4><span class="theme_color">$</span>30</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="{{asset ('/customerasset/images/rs4.png') }}" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>PAKET D</h3>
                        <h4><span class="theme_color">$</span>40</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="{{asset ('/customerasset/images/rs5.png') }}" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>PAKET E</h3>
                        <h4><span class="theme_color">$</span>50</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="{{asset ('/customerasset/images/rs1.png') }}" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>PAKET F</h3>
                        <h4><span class="theme_color">$</span>10</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="{{asset ('/customerasset/images/rs2.png')}}" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>PAKET G</h3>
                        <h4><span class="theme_color">$</span>20</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="{{asset ('/customerasset/images/rs3.png') }}" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>PAKET H</h3>
                        <h4><span class="theme_color">$</span>30</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="{{asset ('/customerasset/images/rs4.png') }}" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>PAKET I</h3>
                        <h4><span class="theme_color">$</span>40</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="{{asset ('/customerasset/images/rs5.png') }}" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>PAKET J</h3>
                        <h4><span class="theme_color">$</span>50</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>

    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="lik">
                            <li class="active"> <a href="index.html">Home</a></li>
                            <li> <a href="about.html">About</a></li>
                            <li> <a href="recipe.html">Recipe</a></li>
                            <li> <a href="blog.html">Blog</a></li>
                            <li> <a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Dapur Syadit</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    </div>
    </div>
    <div class="overlay"></div>
    <!-- Javascript files-->
    <script src="{{asset ('/customerasset/js/jquery.min.js') }}"></script>
    <script src="{{asset ('/customerasset/js/popper.min.js') }}"></script>
    <script src="{{asset ('/customerasset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset ('/customerasset/js/owl.carousel.min.js') }}"></script>
    <script src="{{asset ('/customerasset/js/custom.js') }}"></script>
     <script src="{{asset ('/customerasset/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    
     <script src="{{asset ('/customerasset/js/jquery-3.0.0.min.js') }}"></script>
   <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>

     
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 5
               }
             }
           })
         })
      </script>

</body>

</html>