<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/camera.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/stuck.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/script.js"></script> 
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/owl.carousel.js"></script>

<script src="js/camera.js"></script>
<!--[if (gt IE 9)|!(IE)]><!-->
<script src="js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->
<script>
 $(document).ready(function(){
  jQuery('#camera_wrap').camera({
      loader: false,
      pagination: false ,
      minHeight: '400',
      thumbnails: false,
      height: '30.05208333333333%',
      caption: true,
      navigation: true,
      fx: 'mosaic'
    });
  /* carousel */
     $("#owl").owlCarousel({
          items : 1, //10 items above 1000px browser width
          itemsDesktop : [995,1], //5 items between 1000px and 901px
          itemsDesktopSmall : [767, 1], // betweem 900px and 601px
          itemsTablet: [700, 1], //2 items between 600 and 0
          itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
          navigation : true,
          pagination :  false

      });

  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});
  }); 
</script>
<!--[if lt IE 9]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">


<![endif]-->
</head>

<body class="page1" id="top">
  <div class="main">
<!--==============================
              header
=================================-->
<header>
<!--==============================
            Stuck menu
=================================-->
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <div class="socials">
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-google-plus"></a>
          <a href="#" class="fa fa-pinterest"></a>
        </div>
        <div class="clear"></div>
        <h1>
          <a href="index.html">
            <img src="images/logo.png" alt="Logo alt">
          </a>
        </h1>      
      <div class="clear"></div>  
    </div>
   </div> 
  </div>
  <div id="stuck_container">
    <div class="container">
      <div class="row">
        <div class="grid_12">
        <div class="navigation ">
          <nav>
            <ul class="sf-menu">
             <li class="current"><a href="index.html">Home</a></li>
             <li><a href="index-1.html">Projects</a></li>
             <li><a href="index-2.html">Services</a></li>
             <li><a href="index-3.html">Blog</a></li>
             <li><a href="index-4.html">Contacts</a></li>
           </ul>
          </nav>
      
          <div class="clear"></div>
      </div> </div>
      </div>
    </div>
  </div> 
</header>        
<div class="slider_wrapper ">
  <div id="camera_wrap" class="">
    <div data-src="images/slide.jpg">
      <div class="caption fadeIn">
        Passion in Creating new Spaces
      </div>
    </div>
    <div data-src="images/slide1.jpg">
      <div class="caption fadeIn">
        We Build the new World
      </div>
    </div>
    <div data-src="images/slide2.jpg">
      <div class="caption fadeIn">
        Great Architecture Solutions
      </div>
    </div>
  </div>
</div>  
<!--=====================
          Content
======================-->
@yield('content')
<!--==============================
              footer
=================================-->
</div>
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12">  
         <div class="socials">
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-google-plus"></a>
          <a href="#" class="fa fa-pinterest"></a>
          </div>
         <div class="copyright"><div class="color2"><strong>Arch</strong> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a></div>
          Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
          </div>
      </div>
    </div>
  </div>  
</footer>
</body>
</html>

