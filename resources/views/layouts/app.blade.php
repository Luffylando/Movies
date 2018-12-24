<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Movie Site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost:8000/css/swiper.min.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost:8000/css/main.css"/>
    <script src="main.js"></script>
</head>
<body>

<nav class="mainNavbar">

    <ul class="mainLogo">
        <li><img src="http://localhost:8000/images/icons/logo.png" alt="logo"></li>
    </ul>  

  

    <ul class="mainLogReg">
        <li><a href="">Login |</a></li>
        <li><a href="">Register</a></li>

    </ul>    

     <ul class="mainNavItems">
        <li><a href="">Home</a></li>
        <li><a href="">Browse Movies</a></li>

    </ul>  

    <ul class="mainSearch">
       <input type="search">
    </ul>  
</nav>
 


    <main>
        @yield('content')
    </main>

    <div class="footer">
    Movie Site &copy; - 2018
    </div>


    <script src="http://localhost:8000/js/swiper.min.js"></script>
   <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>

</body>
</html>