<?php require_once(BLOG_NOTICIAS); 
header("HTTP/1.1 200 OK"); ?>
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

    <title>Cambio&Cultura</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/img/favicon.png">

    <!-- CSS Global -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/jquery.countdown.css" rel="stylesheet">

    <!--<link href="<?=base_url()?>assets/css/theme.css" rel="stylesheet">-->
    <link href="<?=base_url()?>assets/css/estilos.php?imagen=<?=$evento['imagen_fondo']?>" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/theme-<?=$evento['color']?>.css" rel="stylesheet" id="theme-config-link">
    <link href="<?=base_url()?>assets/css/custom.css" rel="stylesheet">

    <link type="text/css" media="screen" rel="stylesheet" href="<?=base_url()?>assets/css/awwwards.css" />

    <!--[if lt IE 9]>
    <script src="assets/plugins/iesupport/html5shiv.js"></script>
    <script src="assets/plugins/iesupport/respond.min.js"></script>
    <![endif]-->
</head>
<body id="home" class="wide body-light">

<div id="awwwards" class="honorable black left">
<a href="<?=base_url()?>" target="_blank">A&T Eventos</a>
</div>

<!-- Preloader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

<!-- Wrap all content -->
<div class="wrapper">

    <!-- HEADER -->
    <header class="header fixed">
        <div class="container">
            <div class="header-wrapper clearfix">

            <!-- Logo -->
            <div class="logo">
                <a href="<?=  base_url()?>" class="scroll-to">
                    <span class="fa-stack">
                        <i class="fa logo-hex fa-stack-2x"></i>
                        <i class="fa logo-fa fa-map-marker fa-stack-1x"></i>
                    </span>
                    A&T Eventos
                </a>
            </div>
            <!-- /Logo -->

            <!-- Navigation -->
            <div id="mobile-menu"></div>
            <nav class="navigation closed clearfix">
                <a href="#" class="menu-toggle btn"><i class="fa fa-bars"></i></a>
                <ul class="sf-menu nav">
                    <li class="active"><a href="<?=  base_url()?>index/evento?evento=<?=$evento['id']?>#home">Inicio</a></li>
                    <li><a href="<?=  base_url()?>index/evento?evento=<?=$evento['id']?>#about">Descripción</a></li>
                    <li><a href="<?=  base_url()?>index/evento?evento=<?=$evento['id']?>#schedule">Programación</a></li>
                    <li><a href="<?=  base_url()?>index/evento?evento=<?=$evento['id']?>#sponsors">Patrocinadores</a></li>
                    <li><a href="<?=  base_url()?>index/evento?evento=<?=$evento['id']?>#speakers">Conferencistas</a></li>
                    <li><a href="<?=  base_url()?>index/evento?evento=<?=$evento['id']?>#location">Lugar</a></li>
                    <li><a href="http://cambioycultura.org/actitud_talento_blog">Blog</a></li>
                </ul>
            </nav>
            <!-- /Navigation -->

            </div>
        </div>
    </header>
    <!-- /HEADER -->
    <!-- Content area -->
    <div class="content-area">    
        <img src="<?=  base_url()?>assets/img/gris.png" height="100px" width="100%">
        <!-- PAGE ABOUT -->
        <section class="page-section" id="about">
            <div class="container">
                <h1 class="section-title">
                </h1>
                <div class="row">
                    <div class="col-lg-8">
                        <p data-animation="fadeInUp" data-animation-delay="300">Estos son los profesionales que nos acompañaran en el <?=$evento['nombre']?></p>
                        <p class="btn-row">
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 pull-left">

                    </div>
                </div>
            </div>
        </section>        
                <!-- Speakers row -->
                <div class="row thumbnails clear">
<?php
foreach ($conferencistas as $conferencista)
{
?>
                    <div class="col-sm-6 col-md-3" data-animation="fadeInUp" data-animation-delay="100">
                        <div class="thumbnail no-border no-padding text-center">
                            <div class="hex">
                                <div class="hex-deg">
                                <div class="hex-deg">
                                <div class="hex-deg">
                                    <div class="hex-inner">
                                        <div class="media">
                                            <img src="<?=base_url()?>assets/img/conferencistas/<?=$conferencista['imagen']?>" alt="">
                                            <div class="caption hovered">
                                                <div class="caption-wrapper div-table">
                                                    <div class="caption-inner div-cell">
                                                        <p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-link"></i></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                </div>
                            </div>
                            <div class="caption before-media">
                                <h3 class="caption-title"><?=$conferencista['nombre']?></h3>
                                <p class="caption-category"><?=$conferencista['profesion']?></p>
                            </div>
                            <div class="caption">
                                <p><?=$conferencista['perfil']?></p>
                                <ul class="social-line list-inline text-center">
<?php 
if(!empty($conferencista['facebook']))
{
?>
                                    <li><a href="<?=$conferencista['facebook']?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
<?php
}
?>
<?php 
if(!empty($conferencista['twitter']))
{
?>                                    
                                    <li><a href="<?=$conferencista['twitter']?>" class="twitter"><i class="fa fa-twitter"></i></a></li>
<?php
}
?>
<?php 
if(!empty($conferencista['google_plus']))
{
?>                                      
                                    <li><a href="<?=$conferencista['google_plus']?>" class="google"><i class="fa fa-google-plus"></i></a></li>
<?php
}
?>
<?php 
if(!empty($conferencista['linkedin']))
{
?>                                      
                                    <li><a href="<?=$conferencista['linkedin']?>" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
<?php
}
?>
<?php 
if(!empty($conferencista['instagram']))
{
?>                                      
                                    <li><a href="<?=$conferencista['instagram']?>" class="instagram"><i class="fa fa-instagram"></i></a></li>
<?php
}
?>                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- -->
<?php
}
?>
                </div>
                <!-- /Speakers row -->
            </div>
        <!-- /PAGE SPEAKERS -->    
    <!-- /Content area -->
    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-meta">
            <div class="container text-center">
                <div class="clearfix">
                    <ul class="social-line list-inline">
<?php                        
if(!empty($evento['twitter']))
{
?>
                        <li data-animation="flipInY" data-animation-delay="100"><a href="<?=$evento['twitter']?>" class="twitter"><i class="fa fa-twitter"></i></a></li>
<?php
}
if(!empty($evento['dribbble']))
{
?>                                
                        <li data-animation="flipInY" data-animation-delay="200"><a href="<?=$evento['dribbble']?>" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
<?php
}
if(!empty($evento['facebook']))
{
?>                          
                        <li data-animation="flipInY" data-animation-delay="300"><a href="<?=$evento['facebook']?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
<?php
}
if(!empty($evento['google-plus']) )
{
?>                          
                        <li data-animation="flipInY" data-animation-delay="400"><a href="<?=$evento['google-plus']?>" class="google"><i class="fa fa-google-plus"></i></a></li>
<?php
}
if(!empty($evento['instagram']))
{
?>                          
                        <li data-animation="flipInY" data-animation-delay="500"><a href="<?=$evento['instagram']?>" class="instagram"><i class="fa fa-instagram"></i></a></li>
<?php
}
if(!empty($evento['pinterest']))
{
?>                          
                        <li data-animation="flipInY" data-animation-delay="600"><a href="<?=$evento['pinterest']?>" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
<?php
}
if(!empty($evento['skype']))
{
?>                          
                        <li data-animation="flipInY" data-animation-delay="700"><a href="<?=$evento['skype']?>" class="skype"><i class="fa fa-skype"></i></a></li>
<?php
}
?>                                  
                    </ul>
                </div>
                <span class="copyright" data-animation="fadeInUp" data-animation-delay="100">&copy; 2017 Actitud y Talento</span>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

    <div class="to-top"><i class="fa fa-angle-up"></i></div>

</div>
<!-- /Wrap all content -->

<!-- JS Global -->

<!--[if lt IE 9]><script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script><![endif]-->
<!--[if gte IE 9]><!--><script src="<?=base_url()?>assets/js/jquery-2.1.1.min.js"></script><!--<![endif]-->
<script src="<?=base_url()?>assets/js//modernizr.custom.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap-select.min.js"></script>
<script src="<?=base_url()?>assets/js/superfish.js"></script>
<script src="<?=base_url()?>assets/js/jquery.prettyPhoto.js"></script>
<script src="<?=base_url()?>assets/js/placeholdem.min.js"></script>
<script src="<?=base_url()?>assets/js/jquery.smoothscroll.min.js"></script>
<script src="<?=base_url()?>assets/js/jquery.easing.min.js"></script>

<!-- JS Page Level -->
<script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
<script src="<?=base_url()?>assets/js/waypoints.min.js"></script>
<script src="<?=base_url()?>assets/js/jquery.plugin.min.js"></script>
<script src="<?=base_url()?>assets/js/jquery.countdown.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAVfXMbSzxLDdBa0ReAvF8leWa7rQNZMPg"></script>

<script src="<?=base_url()?>assets/js/theme-ajax-mail.js"></script>
<script id="identificador_js" data-fecha="<?=$evento['fecha']?>" data-coordenadas="<?=$evento['coordenadas']?>" src="<?=base_url()?>assets/js/theme.js"></script>
<script src="<?=base_url()?>assets/js/custom.js"></script>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="<?=base_url()?>assets/js/jquery.cookie.js"></script>
<!--<script src="<?=base_url()?>assets/js/theme-config-light.js"></script>-->
<!--<![endif]-->

<script type="text/javascript">

    jQuery(document).ready(function () {
        $(".dia_programacion:first-child").click();
        $(".escenario_programacion:first-child").click();  
        $(".preguntas:first-child").click();          
        theme.init();
        theme.initMainSlider();
        theme.initCountDown();
        theme.initPartnerSlider();
        theme.initTestimonials();
        theme.initGoogleMap();        
    });
    jQuery(window).load(function () {
        theme.initAnimation();
    });

    jQuery(window).load(function () { jQuery('body').scrollspy({offset: 100, target: '.navigation'}); });
    jQuery(window).load(function () { jQuery('body').scrollspy('refresh'); });
    jQuery(window).resize(function () { jQuery('body').scrollspy('refresh'); });

    jQuery(document).ready(function () { theme.onResize(); });
    jQuery(window).load(function(){ theme.onResize(); });
    jQuery(window).resize(function(){ theme.onResize(); });

    jQuery(window).load(function() {
        if (location.hash != '') {
            var hash = '#' + window.location.hash.substr(1);
            if (hash.length) {
                jQuery('html,body').delay(0).animate({
                    scrollTop: jQuery(hash).offset().top - 44 + 'px'
                }, {
                    duration: 600,
                    easing: "easeInOutExpo"
                });
            }
        }
    });

</script>

</body>
</html>        