<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="es"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>A&T Eventos</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?=  base_url()?>assets/img/favicon.ico">
    <!-- CSS Global -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/owl.theme.default.min.css" rel="stylesheet">   
    <link href="<?=base_url()?>assets/css/zerif-lite_style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/estilos.css" rel="stylesheet">
</head>
<body>
        <header> 



<!-- Carousel
================================================== -->
<div id="myCarousel1" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
        <img src="<?=  base_url()?>/assets/img/inicio.png">
      <div class="container">
        <div class="carousel-caption">
        </div>
      </div>
    </div>
    <div class="item">
      <img src="http://lorempixel.com/1500/600/abstract/1">
      <div class="container">
        <div class="carousel-caption">
          <h1>Changes to the Grid</h1>
          <p>Bootstrap 3 still features a 12-column grid, but many of the CSS class names have completely changed.</p>
          <p><a class="btn btn-large btn-primary" href="#">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1500X500">
      <div class="container">
        <div class="carousel-caption">
          <h1>Percentage-based sizing</h1>
          <p>With "mobile-first" there is now only one percentage-based grid.</p>
          <p><a class="btn btn-large btn-primary" href="#">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>  
</div>
<!-- /.carousel -->         
        </header> <!-- / END HOME SECTION  -->                  
        <section class="focus" id="focus">	                            
            <div class="row">             
                <h1>Eventos en diferentes paises</h1>
                <span>
<?php
foreach ($eventos as $evento)
{
?>
                    <div class="col-lg-3 col-sm-3 focus-box" data-scrollreveal="enter left after 0.15s over 1s">
                        <a href="<?=  base_url()?>index/evento?evento=<?=$evento['id']?>" class="service-icon">
                            <span class="sr-only">Go to <?=$evento['nombre_pais']?></span>								
                            <i class="pixeden" style="background:url(<?=  base_url()?>assets/img/banderas/<?=$evento['imagen_bandera']?>) no-repeat center;width:100%; height:100%;"></i>
                        </a>	
                        <h3 class="red-border-bottom"><?=$evento['nombre_pais']?></h3>
                        <p>Evento: <?=$evento['nombre']?>  Fecha: <?=$evento['fecha']?> Lugar: <?=$evento['lugar']?></p>
                    </div>
<?php
}
?>
                </span>
            </div>
        </section>
        <footer>
            <div class="container">
                <p class="text-muted text-center">Todos los derechos reservados Actitud y Talento 2017</p>
            </div>            
        </footer>  
<!-- /Wrap all content -->
<!--[if gte IE 9]><!--><script src="<?=base_url()?>assets/js/jquery-2.1.1.min.js"></script><!--<![endif]-->
<script src="<?=base_url()?>assets/js//modernizr.custom.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<!-- JS Page Level -->
<script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
<script>
$(document).ready(function() {
   
});
</script>
</body>
</html>