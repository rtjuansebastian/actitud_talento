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
    <link rel="shortcut icon" href="<?=  base_url()?>assets/img/favicon.png">
    <!-- CSS Global -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/owl.theme.default.min.css" rel="stylesheet">   
    <link href="<?=base_url()?>assets/css/zerif-lite_style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/estilos.css" rel="stylesheet">        
    <link href="<?=base_url()?>assets/css/slider_welcome_page.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/demo.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/footer_welcome_page.css" rel="stylesheet">
</head>
<body>
        <header> 
            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1500px;height:600px;overflow:hidden;visibility:hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-oval" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19.0px;position:relative;top:50%;width:38px;height:38px;" src="<?=  base_url()?>assets/img/oval.svg" />
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1500px;height:600px;overflow:hidden;">
                    <div>
                        <img data-u="image" src="<?=  base_url()?>assets/img/<?=$configuracion['imagen_1']?>" />
                    </div>
                    <div>
                        <img data-u="image" src="<?=  base_url()?>assets/img/<?=$configuracion['imagen_2']?>" />
                    </div>
                    <div>
                        <img data-u="image" src="<?=  base_url()?>assets/img/<?=$configuracion['imagen_3']?>" />
                    </div>
                </div>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                    <!-- bullet navigator item prototype -->
                    <div data-u="prototype" style="width:16px;height:16px;"></div>
                </div>
                <!-- Arrow Navigator -->
                <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
                <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
            </div>            
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
            <div class="footer-distributed">
                <div class="footer-left">
                    <img src="<?=  base_url()?>assets/img/logo.png" height="40px">
                        <p class="footer-company-name"><?=$configuracion['nombre']?> &copy; 2017</p>
                </div>
                <div class="footer-center">
                    <div>
                            <i class="fa fa-map-marker"></i>
                            <p><span><?=$configuracion['direccion']?></span> <?=$configuracion['lugar']?></p>
                    </div>
                    <div>
                            <i class="fa fa-phone"></i>
                            <p>+1 555 123456</p>
                    </div>
                    <div>
                            <i class="fa fa-envelope"></i>
                            <p><a href="mailto:<?=$configuracion['correo']?>"><?=$configuracion['correo']?></a></p>
                    </div>
                </div>
                <div class="footer-right">
                    <p class="footer-company-about">
                            <span>Nosotros</span>
                            <?=$configuracion['perfil']?>
                    </p>
                    <div class="footer-icons">
<?php
if(!empty($configuracion['facebook']))
{
?>
                            <a href="<?=$configuracion['facebook']?>"><i class="fa fa-facebook"></i></a>
<?php
}
if(!empty($configuracion['twitter']))
{
?>
                            <a href="<?=$configuracion['twitter']?>"><i class="fa fa-twitter"></i></a>
<?php
}
if(!empty($configuracion['linkedin']))
{
?>                            
                            <a href="<?=$configuracion['linkedin']?>"><i class="fa fa-linkedin"></i></a>
<?php
}
if(!empty($configuracion['instagram']))
{
?>                            
                            <a href="<?=$configuracion['instagram']?>"><i class="fa fa-instagram"></i></a>
<?php
}
?>
                    </div>
                </div>
            </div> 
        </footer>
<!-- /Wrap all content -->
<!--[if gte IE 9]><!--><script src="<?=base_url()?>assets/js/jquery-2.1.1.min.js"></script><!--<![endif]-->
<script src="<?=base_url()?>assets/js//modernizr.custom.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<!-- JS Page Level -->
<script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
<script src="<?=base_url()?>assets/js/jssor.slider-22.2.16.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/slider_welcome_page.js" type="text/javascript"></script>
<script type="text/javascript">jssor_1_slider_init();</script>
</body>
</html>