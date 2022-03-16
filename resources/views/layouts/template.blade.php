<!DOCTYPE html>
<html lang="en">
<head>
<title>Spa Salon</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_24.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script>
$(document).ready(function(){				   	
	$('.slider')._TMS({
		show:0,
		pauseOnHover:true,
		prevBu:'.prev',
		nextBu:'.next',
		playBu:false,
		duration:10000,
		preset:'zoomer',
		pagination:true,
		pagNums:false,
		slideshow:7000,
		numStatus:false,
		banners:false,
		waitBannerAnimation:false,
		progressBar:false
	})
});
</script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="bg-1">
  <!--==============================header=================================-->
  <header>
    <div class="main">
      <h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1>
      <nav class="nav">
        <ul class="menu">
          <li class="current"><a href="/servicios">Servicios</a></li>
          <li><a href="/productos">Productos</a></li>
          <li><a href="/nosotros">Sobre nosotros</a></li>
          <li class="left-1"><a href="/contacto">Contacto</a></li>
          <li><a href="/login">login</a></li>
          <li><a href="/register">Registro</a></li>
          
        </ul>
        <div class="clear"></div>
      </nav>
      <div id="slide">
        <div class="slider">
          <ul class="items">
            <li><img src="images/slider-1.jpg" alt=""></li>
            <li><img src="images/slider-2.jpg" alt=""></li>
            <li><img src="images/slider-3.jpg" alt=""></li>
          </ul>
        </div>
        <a href="#" class="prev"></a><a href="#" class="next"></a> </div>
    </div>
  </header>
  <!--==============================content================================-->

  @yield('content')
 
<!--==============================footer=================================-->
<footer>
  <p>© 2012 Spa salon<br>
    Website Template by <a target="_blank" href="http://www.templatemonster.com/" class="link">Templatemonster.com</a></p>
</footer>
</body>
</html>
