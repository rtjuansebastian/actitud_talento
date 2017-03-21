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
</head>
<body id="home" class="wide body-light">

    <header id="home" class="header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
	<div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">
            <div class="container">
                <div class="navbar-header responsive-logo">			
                    <div class="navbar-brand">
                        <h1 class="dark-text"> Gestión del Cambio y Cultura Organizacional </h1>
                    </div> <!-- /.navbar-brand -->
                </div> <!-- /.navbar-header -->
            </div> <!-- /.container -->
	</div> <!-- /#main-nav -->
	<!-- / END TOP BAR -->
    </header> <!-- / END HOME SECTION  --> 
    <section class="focus" id="focus">	
        <div class="container">
            <div class="section-header">
                <!-- SECTION TITLE AND SUBTITLE -->
                <img src="<?=  base_url()?>assets/img/inicio.png"/>
                <h2 class="dark-text">No te quedes sin participar</h2>
            </div>            
            <div id="main-slider" class="owl-carousel owl-theme">
<?php
foreach ($galerias as $galeria)
{
?>    
                        <div class="item">
                            <img src="<?=  base_url()?>assets/img/galerias/<?=$galeria['imagen']?>" alt="Owl Image">
                            <div class="title"></div>
                        </div>
<?php
}
?>                                
            </div>
            <div class="section-header">
                <!-- SECTION TITLE AND SUBTITLE -->
                <h2 class="dark-text">Fechas proximos eventos </h2><div class="section-legend">Eventos en distintos paises </div>
            </div>
            <div class="row">
                <span id="ctup-ads-widget-1" class="">
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
                        <!-- FOCUS HEADING -->
                        <p>Evento: <?=$evento['nombre']?>  Fecha: <?=$evento['fecha']?> Lugar: <?=$evento['lugar']?></p>
                    </div>
<?php
}
?>
                </span>
            </div>
        </div> <!-- / END CONTAINER -->	
    </section>  <!-- / END FOCUS SECTION -->
<footer id="footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">

	<div class="footer-widget-wrap">
            <div class="container">
                <div class="footer-widget col-xs-12 col-sm-4">
                    <aside id="sow-editor-3" class="widget footer-widget-footer widget_sow-editor">
                        <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        </div>
                    </aside>                        
                </div>                
            </div>                
        </div>
	<div class="container">	
            <div class="col-md-4 company-details">
                <div class="zerif-footer-address"> 
                </div>                        
            </div>
            <div class="col-md-4 company-details">
                <div class="zerif-footer-email">
                    Congreso internacional de gestión del cambio y la cultura organizacional
                    <br>
                    <br>
                    Actitud y Talento 2017
                </div>
            </div>
            <div class="col-md-4 company-details">
                <div class="zerif-footer-phone">
                </div>
            </div>			
        </div> <!-- / END CONTAINER -->

</footer> <!-- / END FOOOTER  -->    
<!-- /Wrap all content -->
<!--[if gte IE 9]><!--><script src="<?=base_url()?>assets/js/jquery-2.1.1.min.js"></script><!--<![endif]-->
<script src="<?=base_url()?>assets/js//modernizr.custom.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<!-- JS Page Level -->
<script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
<script>
$(document).ready(function() { 
   $("#main-slider").owlCarousel({
                //items: 1,
                autoplay: true,
                autoplayHoverPause: false,
                loop: true,
                margin: 0,
                dots: false,
                responsiveRefreshRate: 100
    });
});
</script>
</body>
</html>