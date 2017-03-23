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

    <title>A&T Eventos</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

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
                    Convierte en patrocinador
                </h1>
                <div class="row">
                    <div class="col-lg-8">
                        <p data-animation="fadeInUp" data-animation-delay="300">Precios de auspicio del <?=$evento['nombre']?></p>
                        <p class="btn-row">
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 pull-left">

                    </div>
                </div>
            </div>
        </section>        
        <div>
       <section class="page-section" id="price">
            <div class="container">
                <h1 class="section-title clearfix">
                    <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-user fa-stack-1x"></i></span></span>
                    <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Lista de precios de auspicio <small></small></span>
                </h1>
                <div class="row price-tables">
    <?php
    foreach ($precios_patrocinadores as $precio)
    {
    ?>
                    <div class="col-xsp-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="price-table" data-animation="fadeInUp" data-animation-delay="100">
                            <div class="price-table-header">
                                <div class="price-label">
                                    <h2 class="price-label-title"><?=$precio['nombre']?></h2>
                                </div>
                                <div class="price-value">
                                    <span class="price-number"><?=$precio['precio']?></span><span class="price-unit">$</span><span class="price-per"></span>
                                </div>
                            </div>
                            <div class="price-table-rows">
<?php
$items=  explode("\n", $precio['descripcion']);
foreach ($items as $item)
{
?>
                                <div class="price-table-row"><i class="fa fa-check-circle-o"></i><?=$item?></div>
<?php
}
?>
                            </div>
                        </div>
                    </div>
    <?php
    }
    ?>                    
                </div>
            </div>
        </section>
        <!-- /PAGE PRICE -->                  
        </div>
        <div>
        <!-- PAGE CONTACT -->
        <section class="page-section color">
            <div class="container">
<?php
if(isset($mensaje))
{
?>
                <div class="alert alert-success fade in">
                    <button class="close" data-dismiss="alert" type="button">&times;</button><?=$mensaje?>
                </div>
<?php
}
?>
                <h1 class="section-title">
                    <span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                    <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Envianos tus datos <small>/ en breve nos comunicamos</small></span>
                </h1>

                <!-- Contact form -->
                <form name="patrocinador-form" class="af-form row" id="patrocinador-form" method="post" action="<?=  base_url()?>index/solicitud_patrocinador" enctype="multipart/form-data">
                    <input type="hidden" name="estado" id="estado" value="pendiente"/>
                    <input type="hidden" name="evento" id="evento" value="<?=$evento['id']?>"/>
                    <div class="col-sm-12 af-outer af-required">
                        <div class="form-group af-inner">
                            <input type="text" name="nombre_contacto" id="nombre_contacto" placeholder="Nombre persona de contacto" size="30" required=""
                                    data-toggle="tooltip" title="Name is required"
                                    class="form-control placeholder"/>
                        </div>
                    </div>

                    <div class="col-sm-12 af-outer af-required">
                        <div class="form-group af-inner">
                            <input type="text" name="telefono_contacto" id="telefono_contacto" placeholder="Telefono persona de contacto" size="30" required=""
                                    data-toggle="tooltip" title="Name is required"
                                    class="form-control placeholder"/>
                        </div>
                    </div>                                    

                    <div class="col-sm-12 af-outer af-required">
                        <div class="form-group af-inner">
                            <input type="text" name="nombre" id="nombre" placeholder="Nombre patrocinador" size="30" required=""
                                    data-toggle="tooltip" title="Name is required"
                                    class="form-control placeholder"/>
                        </div>
                    </div>                                    

                    <div class="col-sm-12 af-outer af-required">
                        <div class="form-group af-inner">
                            <textarea
                                    name="descripcion" id="descripcion" placeholder="Descripción" rows="4" cols="50"
                                    data-toggle="tooltip" title="Message is required"
                                    class="form-control placeholder"></textarea>
                        </div>
                    </div>                                    

                    <div class="col-sm-12 af-outer af-required">
                        <div class="form-group af-inner">
                            <input
                                    type="text" name="url" id="url" placeholder="Dirección web" size="30" required=""
                                    data-toggle="tooltip" title="Email is required"
                                    class="form-control placeholder"/>
                        </div>
                    </div>

                    <div class="col-sm-12 af-outer af-required">
                        <div class="form-group af-inner">
                            <label for="imagen_patrocinador">Logo del patrocinador</label>
                            <input
                                type="file" name="imagen_patrocinador" id="imagen_patrocinador" required="" size="30"
                                    data-toggle="tooltip" title="Imagen is required"
                                    class="form-control placeholder"/>
                        </div>
                    </div>   

                    <div class="col-sm-12 af-outer af-required">
                        <div class="form-group af-inner">
                            <label for="imagen_patrocinador">Tipo de auspicio</label>
                            <select id="precio" name="precio" class="form-control">
<?php                                     
foreach ($precios_patrocinadores as $precio)                                    
{
?>                               
                                    <option value="<?=$precio['id']?>"><?=$precio['nombre']?>. $<?=$precio['precio']?></option>
<?php                                    
}
?>                                                                               
                            </select>
                        </div>
                    </div> 

                    <div class="col-sm-12 af-outer af-required text-center">
                        <div class="form-group af-inner">
                            <input type="submit" name="submit" class="form-button form-button-submit btn btn-theme btn-theme-lg btn-theme-transparent" id="submit_btn" value="Enviar solicitud" />
                        </div>
                    </div>

                </form>
                <!-- /Contact form -->

            </div>
        </section>
        <!-- /PAGE CONTACT -->               
        </div>
    </div>   
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