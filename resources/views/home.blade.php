<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>FYP</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v3.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

TemplateMo 568 DigiMedia

https://templatemo.com/tm-568-digimedia

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->



  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            @if (Route::has('login'))
                @auth
            <ul class="nav">
              <li> <a class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Home</a></li>
              <li> <a class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">About</a></li>
              <li>
                <x-app-layout>
    
                </x-app-layout>
              </li>
              <a class='menu-trigger'>
                <span>Menu</span>
                </a> 
            </ul>    
               
                @else
                    <ul class="nav">
                        <li><a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                    @if (Route::has('register'))
                        <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                    @endif
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a> 
                    @endauth
                    </div>
                @endif
            <!-- ***** Logo Start ***** -->
            <!-- <a href="index.html" class="logo">
              <img src="assets/images/logo-v3.png" alt="">
            </a> -->
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
               
            
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h1>Final Year Project</h1>
                    <h2>Management System</h2>
                    <h3 style="color:blue">To improve efficiency and productivity in managing and coordinating FYP</h3>
                    <!--<p>This template is brought to you by TemplateMo website. Feel free to use this for a commercial purpose. You are not allowed to redistribute the template ZIP file on any other template website. Thank you.</p> -->
                  </div>
                  <!-- <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="#contact">Login</a>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <!-- <img src="assets/images/slider-dec-v3.png" alt=""> -->
                <img src="assets/images/fyp-main.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 Fatin Nabilah. All Rights Reserved. 
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>
</html>