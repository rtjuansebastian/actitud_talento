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
    <link href="<?=base_url()?>assets/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/jquery.countdown.css" rel="stylesheet">    
    <link href="<?=base_url()?>assets/css/zerif-lite_style.css" rel="stylesheet">
</head>
<body id="home" class="wide body-light">
    <section class="focus" id="focus">	
            <div class="container">
                    <!-- SECTION HEADER -->
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
<!-- /Wrap all content -->
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
</body>
</html>