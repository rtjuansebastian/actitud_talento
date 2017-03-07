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

    <title>Eventos</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
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
    <link href="<?=base_url()?>assets/css/theme-red-1.css" rel="stylesheet" id="theme-config-link">
    <link href="<?=base_url()?>assets/css/custom.css" rel="stylesheet">

    <link type="text/css" media="screen" rel="stylesheet" href="<?=base_url()?>assets/css/awwwards.css" />

    <!--[if lt IE 9]>
    <script src="assets/plugins/iesupport/html5shiv.js"></script>
    <script src="assets/plugins/iesupport/respond.min.js"></script>
    <![endif]-->
</head>
<body id="home" class="wide body-light">

<div id="awwwards" class="honorable black left">
<a href="<?=base_url()?>" target="_blank">Eventos</a>
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
                <a href="#home" class="scroll-to">
                    <span class="fa-stack">
                        <i class="fa logo-hex fa-stack-2x"></i>
                        <i class="fa logo-fa fa-map-marker fa-stack-1x"></i>
                    </span>
                    Eventos
                </a>
            </div>
            <!-- /Logo -->

            <!-- Navigation -->
            <div id="mobile-menu"></div>
            <nav class="navigation closed clearfix">
                <a href="#" class="menu-toggle btn"><i class="fa fa-bars"></i></a>
                <ul class="sf-menu nav">
                    <li class="active"><a href="#home">Inicio</a></li>
                    <li><a href="#about">Descripción</a></li>
                    <li><a href="#schedule">Programación</a></li>
                    <li><a href="#sponsors">Patrocinadores</a></li>
                    <li><a href="#speakers">Conferencistas</a></li>
                    <li><a href="#price">Precios</a></li>
                    <li><a href="#location">Lugar</a></li>
                    <li><a href="blog.html">Blog</a></li>
                </ul>
            </nav>
            <!-- /Navigation -->

            </div>
        </div>
    </header>
    <!-- /HEADER -->

    <!-- Content area -->
    <div class="content-area">

        <div id="main">
        <!-- SLIDER -->
        <section class="page-section no-padding background-img-slider">
            <div class="container">

            <div id="main-slider" class="owl-carousel owl-theme">

                <!-- Slide -->
                <div class="item page text-center slide0">
                    <div class="caption">
                        <div class="container">
                            <div class="div-table">
                                <div class="div-cell">
                                    <h2 class="caption-title" data-animation="fadeInDown" data-animation-delay="100"><span><?=  date_format(date_create($evento['fecha']),"Y-m-d")?></span></h2>
                                    <h3 class="caption-subtitle" data-animation="fadeInUp" data-animation-delay="300"><?=$evento['nombre']?></h3>
                                    <div class="countdown-wrapper">
                                        <div id="defaultCountdown" class="defaultCountdown clearfix"></div>
                                    </div>
                                    <p class="caption-text">
                                        <a class="btn btn-theme btn-theme-xl scroll-to" href="#register" data-animation="flipInY" data-animation-delay="600"> Registro <i class="fa fa-arrow-circle-right"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="item page text-center slide1">
                    <div class="caption">
                    <div class="container">
                        <div class="div-table">
                        <div class="div-cell">
                            <h2 class="caption-title" data-animation="fadeInDown" data-animation-delay="100"><span><?=  date_format(date_create($evento['fecha']),"Y-m-d")?></span></h2>
                            <h3 class="caption-subtitle" data-animation="fadeInUp" data-animation-delay="300"><?=$evento['nombre']?></h3>
                            <p class="caption-text">
                                <a class="btn btn-theme btn-theme-xl scroll-to" href="#register" data-animation="flipInY" data-animation-delay="600"> Registro <i class="fa fa-arrow-circle-right"></i></a><!--
                                --><a class="btn btn-theme btn-theme-xl btn-theme-transparent-white" href="http://www.youtube.com/watch?v=O-zpOMYRi0w" data-gal="prettyPhoto" data-animation="flipInY" data-animation-delay="900">Ver video</a>
                            </p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="item page slide2">
                    <div class="caption">
                    <div class="container">
                        <div class="div-table">
                        <div class="div-cell">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-background">
                                    <div class="form-header color">
                                        <h1 class="section-title">
                                            <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                                            <span class="title-inner">Registro</span>
                                        </h1>
                                    </div>

                                    <form id="registration-form-alt" name="registration-form-alt" class="registration-form alt" action="#" method="post">
                                        <div class="row">
                                            <div class="col-sm-12 form-alert"></div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input
                                                            type="text" class="form-control input-name"
                                                            data-toggle="tooltip" title="El nombre es obligatorio"
                                                            placeholder="Nombre y Apellido"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input
                                                            type="text" class="form-control input-email"
                                                            data-toggle="tooltip" title="El Email es obligatorio"
                                                            placeholder="Email"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input
                                                            type="text" class="form-control input-phone"
                                                            placeholder="Numero telefonico"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group selectpicker-wrapper">
                                                    <select
                                                            class="selectpicker input-price" data-live-search="false" data-width="100%"
                                                            data-toggle="tooltip" title="Selecciona el precio">
                                                        <option>Selecciona el precio</option>
                                                        <option>$100</option>
                                                        <option>$200</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="text-center">
                                                    <button
                                                            data-animation="flipInY" data-animation-delay="100"
                                                            class="btn btn-theme btn-block submit-button" type="submit"
                                                            > Registrate ahora <i class="fa fa-arrow-circle-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-8">
                                    <div class="text-holder">
                                    <h2 class="caption-title"><?=  date_format(date_create($evento['fecha']),"Y-m-d")?></h2>
                                    <h3 class="caption-subtitle"><?=$evento['nombre']?> </h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Event description -->
                            <!-- /Event description -->
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="item page text-center slide3">
                    <div class="caption">
                    <div class="container">
                        <div class="div-table">
                        <div class="div-cell">
                            <h2 class="caption-title"><span><?=  date_format(date_create($evento['fecha']),"Y-m-d")?></span></h2>
                            <h3 class="caption-subtitle"><?=$evento['nombre']?></h3>
                            <p class="caption-text">
                                <a class="btn btn-play" href="http://www.youtube.com/watch?v=O-zpOMYRi0w" data-gal="prettyPhoto"><i class="fa fa-play"></i></a>
                            </p>
                            <!-- Event description -->
                            <!-- /Event description -->
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
            </div>

            <!-- Event description -->
            <div class="event-description">
                <div class="container">
                <div class="row">
                <div class="event-background">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="media">
                                            <span class="pull-left">
                                                <i class="fa fa-calendar fa-2x"></i>
                                            </span>
                                    <div class="media-body">
                                        <h4 class="media-heading">Fecha</h4>
                                        <span><?=  date_format(date_create($evento['fecha']),"Y-m-d")?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="media">
                                            <span class="pull-left">
                                                <i class="fa fa-map-marker fa-2x"></i>
                                            </span>
                                    <div class="media-body">
                                        <h4 class="media-heading">Lugar</h4>
                                        <span><?=$evento['lugar']?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <div class="media">
                                            <span class="pull-left">
                                                <i class="fa fa-group fa-2x media-object"></i>
                                            </span>
                                    <div class="media-body">
                                        <h4 class="media-heading">Cupos</h4>
                                        <span><?=$evento['cupos']?> Entradas</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="media">
                                            <span class="pull-left">
                                                <i class="fa fa-microphone fa-2x"></i>
                                            </span>
                                    <div class="media-body">
                                        <h4 class="media-heading">Conferencistas</h4>
                                        <span>Numero de conferencistas del evento</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
            <!-- /Event description -->

        </section>
        <!-- /SLIDER -->
        </div>

        <!-- PAGE ABOUT -->
        <section class="page-section" id="about">
            <div class="container">
                <h1 class="section-title">
                    <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-star fa-stack-1x"></i></span></span>
                    <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">acerca de este evento <small>/ <?=$evento['nombre']?></small></span>
                </h1>
                <div class="row">
                    <div class="col-lg-8">
                        <p data-animation="fadeInUp" data-animation-delay="300"><?=$evento['descripcion']?></p>
                        <p class="btn-row">
                            <a href="#register" class="btn btn-theme btn-theme-xl scroll-to" data-animation="flipInY" data-animation-delay="200">Registro <i class="fa fa-arrow-circle-right"></i></a><!--
                            --><a href="#" class="btn btn-theme btn-theme-xl btn-theme-transparent" data-animation="flipInY" data-animation-delay="400">Ver Video</a>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 pull-left">

                        <!-- Thumbnails -->
                        <!-- BUSCAR 4 IMAGENES DE CADA EVENTO Y GUARDARLAS EN 2 TAMAÑOS -->
                        <div class="row thumbnails">

                            <div class="col-sm-6 col-xs-6">
                                <div class="thumbnail no-border no-padding" data-animation="fadeInLeft" data-animation-delay="100">
                                    <div class="media">
                                        <img src="<?=base_url()?>assets/img/acerca.jpeg" alt="">
                                        <div class="caption hovered">
                                            <div class="caption-wrapper div-table">
                                                <div class="caption-inner div-cell">
                                                    <p class="caption-buttons"><a href="<?=base_url()?>assets/img/acerca.jpeg" class="btn caption-zoom" data-gal="prettyPhoto"><i class="fa fa-search"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-6">
                                <div class="thumbnail no-border no-padding" data-animation="fadeInDown" data-animation-delay="200">
                                    <div class="media">
                                        <img src="<?=base_url()?>assets/img/acerca.jpeg" alt="">
                                        <div class="caption hovered">
                                            <div class="caption-wrapper div-table">
                                                <div class="caption-inner div-cell">
                                                    <p class="caption-buttons"><a href="<?=base_url()?>assets/img/acerca.jpeg" class="btn caption-zoom" data-gal="prettyPhoto"><i class="fa fa-search"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-6">
                                <div class="thumbnail no-border no-padding" data-animation="fadeInRight" data-animation-delay="300">
                                    <div class="media">
                                        <img src="<?=base_url()?>assets/img/acerca.jpeg" alt="">
                                        <div class="caption hovered">
                                            <div class="caption-wrapper div-table">
                                                <div class="caption-inner div-cell">
                                                    <p class="caption-buttons"><a href="<?=base_url()?>assets/img/acerca.jpeg" class="btn caption-zoom" data-gal="prettyPhoto"><i class="fa fa-search"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-6">
                                <div class="thumbnail no-border no-padding" data-animation="fadeInUp" data-animation-delay="400">
                                    <div class="media">
                                        <img src="<?=base_url()?>assets/img/acerca.jpeg" alt="">
                                        <div class="caption hovered">
                                            <div class="caption-wrapper div-table">
                                                <div class="caption-inner div-cell">
                                                    <p class="caption-buttons"><a href="<?=base_url()?>assets/img/acerca.jpeg" class="btn caption-zoom" data-gal="prettyPhoto"><i class="fa fa-search"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /Thumbnails -->

                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE ABOUT -->        

        <!-- PAGE SCHEDULE -->
        <section class="page-section light" id="schedule">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 pull-left">
                        <h1 class="section-title">
                            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-star fa-stack-1x"></i></span></span>
                            <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Programación</small></span>
                        </h1>
                    </div>
                    <div class="col-md-4 text-right-md pull-right">
                        <a href="#" class="btn btn-theme btn-theme-lg btn-theme-transparent-grey pull-right"
                           data-animation="flipInY" data-animation-delay="300"><i class="fa fa-print"></i> Descargar programación</a>
                    </div>
                </div>

                <!-- Schedule -->
                <div class="schedule-wrapper clear" data-animation="fadeIn" data-animation-delay="200">
                    <div class="schedule-tabs lv1">
                        <ul id="tabs-lv1"  class="nav nav-justified">
<?php
foreach ($dias as $dia)
{
?>    
                            <li><a href="#tab-dia-<?=$dia['fecha']?>" data-toggle="tab"><strong>Dia 1</strong> <br/><?=$dia['fecha']?></a></li>
<?php
}
?>
                        </ul>
                    </div>
                    <div class="tab-content lv1">
                        <!-- tab1 -->
<?php
foreach ($programaciones as $dias)
{
?> 
<?php
    foreach ($dias as $fecha=>$dia)
    {
?>                         
                        <div id="tab-dia-<?=$fecha?>" class="tab-pane fade">
                            <div class="schedule-tabs lv2">
                                <ul id="tabs-lv21"  class="nav nav-justified">
<?php
    foreach ($dia as $dia_escenario)
    {
        foreach ($dia_escenario as $escenario)
        {
?>
                                    <li><a href="#tab-escenario-dia-<?=$fecha?>-<?=$escenario['id']?>" data-toggle="tab"><?=$escenario['nombre']?></a></li>
<?php
        }
    }
?>
                                </ul>
                            </div>
                            <div class="tab-content lv2">
<?php
    foreach ($dia as $dia_escenario)
    {        
        foreach ($dia_escenario as $escenario)
        {        
?>                                
                                <div id="tab-escenario-dia-<?=$fecha?>-<?=$escenario['id']?>" class="tab-pane fade">
                                    <div class="timeline">
<?php
            foreach ($escenario['programaciones'] as $conferencia)
            {
?>
                                        <article class="post-wrap" data-animation="fadeInUp" data-animation-delay="300">
                                            <div class="media">
                                                <!-- -->
                                                <div class="post-media pull-left">
                                                    <img src="<?=base_url()?>assets/img/conferencistas/<?=$conferencia['imagen']?>" alt="" class="media-object" />
                                                </div>
                                                <!-- -->
                                                <div class="media-body">
                                                    <div class="post-header">
                                                        <div class="post-meta">
                                                            <span class="post-date"><i class="fa fa-clock-o"></i><?=$conferencia['hora']?></span>
                                                            <a href="#" class="pull-right">
                                                                <span class="fa-stack fa-lg">
                                                                    <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                    <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <h2 class="post-title"><a href="#"><?=$conferencia['titulo']?></a></h2>
                                                    </div>
                                                    <div class="post-body">
                                                        <div class="post-excerpt">
                                                            <p><?=$conferencia['descripcion']?></p>
                                                        </div>
                                                    </div>
                                                    <div class="post-footer">
                                                        <span class="post-readmore">
                                                            <i class="fa fa-microphone"></i> <strong><?=$conferencia['nombre']?></strong> / <?=$conferencia['profesion']?>
                                                            <a href="<?=$conferencia['facebook']?>"><i class="fa fa-facebook"></i></a>
                                                            <a href="<?=$conferencia['twitter']?>"><i class="fa fa-twitter"></i></a>
                                                            <a href="<?=$conferencia['linkedin']?>"><i class="fa fa-linkedin"></i></a>
                                                            <a href="<?=$conferencia['instagram']?>"><i class="fa fa-instagram"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- -->
                                            </div>
                                        </article>
<?php
            }
?>
                                    </div>
                                </div>                            
<?php   
        }
    }
?>
                            </div>
                        </div>
                        <!-- Termina el dia -->
<?php
    }
}
?>
                    </div>
                </div>
                <!-- /Schedule -->

            </div>
        </section>
        <!-- /PAGE SCHEDULE -->

        <!-- PAGE SPONSORS -->
        <section class="page-section" id="sponsors">
            <div class="container">
                <h1 class="section-title">
                    <span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-thumbs-up fa-stack-1x"></i></span></span>
                    <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Patrocinadores del evento<small></small></span>
                </h1>
                <div class="partners-carousel" data-animation="fadeInUp" data-animation-delay="300">
                    <div class="owl-carousel">
<?php
foreach ($patrocinadores as $patrocinador)
{
?>
                        <div><a href="<?=$patrocinador['url']?>"><img src="<?=  base_url()?>/assets/img/patrocinadores/<?=$patrocinador['imagen_patrocinador']?>" alt=""/></a></div>
<?php
}
?>
                    </div>
                </div>
                <div class="text-center margin-top">
                    <a data-animation="flipInY" data-animation-delay="500" href="#" class="btn btn-theme"><i class="fa fa-thumbs-up"></i> Conviertete en patrocinador</a>
                </div>
            </div>
        </section>
        <!-- /PAGE SPONSORS -->

        <section class="page-section color">
            <div class="container">
                <h1 class="section-title">
                    <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-comments fa-stack-1x"></i></span></span>
                    <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Testimonios<small> / Conoce la experiencia de quienes han participado</small></span>
                </h1>

                <!-- Testimonials -->
                <div id="testimonials" class="owl-carousel testimonials" data-animation="fadeInUp" data-animation-delay="100">
<?php
foreach ($testimonios as $testimonio)
{
?>
                    <div class="media testimonial">
                        <div class="media-object pull-right" data-animation="flipInY" data-animation-delay="300">
                            <div class="hex testimonial-avatar">
                                <div class="hex-deg">
                                    <div class="hex-deg">
                                        <div class="hex-deg">
                                            <div class="hex-inner">
                                                <img class="img-responsive" src="<?=base_url()?>assets/img/testimonios/<?=$testimonio['imagen']?>" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media-body">
                            <p><?=$testimonio['testimonio']?></p>
                            <h4 class="media-heading"><?=$testimonio['nombre']?></h4>
                        </div>
                    </div>
<?php
}
?>
                </div>
                <!-- Testimonials -->

            </div>
        </section>

        <!-- PAGE SPEAKERS -->
        <section class="page-section light" id="speakers">
            <div class="container">
                <h1 class="section-title">
                    <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-user fa-stack-1x"></i></span></span>
                    <span data-animation="fadeInUp" data-animation-delay="500" class="title-inner">Conferencistas del evento <small> / meet with greaters</small></span>
                </h1>

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
if(isset($conferencista['facebook']))
{
?>
                                    <li><a href="<?=$conferencista['facebook']?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
<?php
}
?>
<?php 
if(isset($conferencista['twitter']))
{
?>                                    
                                    <li><a href="<?=$conferencista['twitter']?>" class="twitter"><i class="fa fa-twitter"></i></a></li>
<?php
}
?>
<?php 
if(isset($conferencista['google_plus']))
{
?>                                      
                                    <li><a href="<?=$conferencista['google_plus']?>" class="google"><i class="fa fa-google-plus"></i></a></li>
<?php
}
?>
<?php 
if(isset($conferencista['linkedin']))
{
?>                                      
                                    <li><a href="<?=$conferencista['linkedin']?>" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
<?php
}
?>
<?php 
if(isset($conferencista['instagram']))
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

                <div class="text-center margin-top">
                    <a data-animation="fadeInUp" data-animation-delay="100" href="#" class="btn btn-theme"><i class="fa fa-user"></i> Ver todos los conferencistas</a>
                </div>
            </div>
        </section>
        <!-- /PAGE SPEAKERS -->

        <!-- PAGE PRICE -->
        <section class="page-section" id="price">
            <div class="container">
                <h1 class="section-title clearfix">
                    <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-user fa-stack-1x"></i></span></span>
                    <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Event Price list <small> / perfect price for event</small></span>
                </h1>
                <div class="row price-tables">
                    <div class="col-xsp-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="price-table" data-animation="fadeInUp" data-animation-delay="100">
                            <div class="price-table-header">
                                <div class="price-label">
                                    <h2 class="price-label-title">Personal</h2>
                                </div>
                                <div class="price-value">
                                    <span class="price-number">111</span><span class="price-unit">$</span><span class="price-per"></span>
                                </div>
                            </div>
                            <div class="price-table-rows">
                                <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Lorem ipsum dolor sit amet</div>
                                <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Consectetur adipiscing elit</div>
                                <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Sed vitae diam metus</div>
                                <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Donec cursus magna</div>
                                <div class="price-table-row-bottom">
                                    <a class="btn btn-theme scroll-to" href="#register">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xsp-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="price-table featured" data-animation="fadeInUp" data-animation-delay="200">
                            <div class="price-table-header">
                                <div class="price-label">
                                    <h2 class="price-label-title">Company</h2>
                                </div>
                                <div class="price-value">
                                    <span class="price-number">124</span><span class="price-unit">$</span><span class="price-per"></span>
                                </div>
                            </div>
                            <div class="price-table-rows">
                                <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Lorem ipsum dolor sit amet</div>
                                <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Consectetur adipiscing elit</div>
                                <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Sed vitae diam metus</div>
                                <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Donec cursus magna</div>
                                <div class="price-table-row-bottom">
                                    <a class="btn btn-theme scroll-to" href="#register">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xsp-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="price-table" data-animation="fadeInUp" data-animation-delay="300">
                            <div class="price-table-header">
                                <div class="price-label">
                                    <h2 class="price-label-title">Business</h2>
                                </div>
                                <div class="price-value">
                                    <span class="price-number">175</span><span class="price-unit">$</span><span class="price-per"></span>
                                </div>
                            </div>
                            <div class="price-table-rows">
                                <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Lorem ipsum dolor sit amet</div>
                                <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Consectetur adipiscing elit</div>
                                <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Sed vitae diam metus</div>
                                <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Donec cursus magna</div>
                                <div class="price-table-row-bottom">
                                    <a class="btn btn-theme scroll-to" href="#register">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE PRICE -->

        <section class="page-section image" id="register">
            <div class="container">
                <h1 class="section-title">
                    <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                    <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Registrate ahora</span>
                </h1>
                <form id="registration-form" name="registration-form" class="registration-form" action="#" method="post">
                    <div class="row">
                        <div class="col-sm-12 form-alert"></div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group" data-animation="fadeInUp" data-animation-delay="200">
                                <input
                                        type="text" class="form-control input-name"
                                        data-toggle="tooltip" title="Name is required"
                                        placeholder="Nombre y Apellido" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group" data-animation="fadeInUp" data-animation-delay="400">
                                <input
                                        type="text" class="form-control input-email"
                                        data-toggle="tooltip" title="Mail is required"
                                        placeholder="Email"/>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group" data-animation="fadeInUp" data-animation-delay="600">
                                <input
                                        type="text" class="form-control input-phone"
                                        placeholder="Telefono"/>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group selectpicker-wrapper" data-animation="fadeInUp" data-animation-delay="800">
                                <select
                                        class="selectpicker input-price" data-live-search="false" data-width="100%"
                                        data-toggle="tooltip" title="Selecciona un precio">
                                    <option>Select Your Price Tab</option>
                                    <option>$100</option>
                                    <option>$200</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 overflowed">
                            <div class="text-center margin-top">
                                <button
                                        data-animation="flipInY" data-animation-delay="100"
                                        class="btn btn-theme btn-theme-xl submit-button" type="submit"
                                        > Registrate Ahora<i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section class="page-section light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 pull-left">
                        <h1 class="section-title">
                            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-question fa-stack-1x"></i></span></span>
                            <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Preguntas frecuentes del evento</span>
                        </h1>
                    </div>
                    <div class="col-md-4 text-right-md pull-right">
                        <a href="#" class="btn btn-theme btn-theme-lg btn-theme-transparent-grey pull-right"
                           data-animation="flipInY" data-animation-delay="700"><i class="fa fa-pencil"></i> Hacer una pregunta</a>
                    </div>
                </div>
                <div class="row faq margin-top" data-animation="fadeInUp" data-animation-delay="100">
                    <div class="col-sm-6 col-md-6 pull-left">
                        <ul id="tabs-faq"  class="nav">
<?php
foreach ($preguntas as $pregunta)
{
?> 
                            <li><a href="#tab-faq<?=$pregunta['id']?>" data-toggle="tab"><i class="fa fa-plus"></i> <span class="faq-inner"><?=$pregunta['pregunta']?></span></a></li>
<?php
}
?>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-6 pull-right">
                        <div class="tab-content">
<?php
foreach ($preguntas as $pregunta)
{
?>
                            <div id="tab-faq<?=$pregunta['id']?>" class="tab-pane fade in active">
                                <div>
                                    <p><?=$pregunta['respuesta']?></p>
                                </div>
                            </div>
<?php
}
?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <h1 class="section-title">
                    <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-file-text-o fa-stack-1x"></i></span></span>
                    <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Post Recientes <small> / Noticias!</small></span>
                </h1>
                <div class="row post-row">

                    <!-- -->
                    <div class="col-md-4">
                        <article class="post-wrap" data-animation="fadeInUp" data-animation-delay="100">
                            <div class="post-media">
                                <div class="post-type">
                                    <i class="fa fa-video-camera"></i>
                                </div>
                                <img src="<?=  base_url()?>assets/img/recent-post-1.jpg" alt=""/>
                            </div>
                            <div class="post-header">
                                <h2 class="post-title"><a href="#">Standart Blog Post Header Here</a></h2>
                                <div class="post-meta">
                                    <span class="post-date">
                                        Posted on
                                        <span class="day">17th</span>
                                        <span class="month">May</span>
                                        <span class="year">2015</span>
                                    </span>
                                    <span class="pull-right">
                                        <i class="fa fa-comment"></i> <a href="#">12</a>
                                    </span>
                                </div>
                            </div>
                            <div class="post-body">
                                <div class="post-excerpt">
                                    <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi tristiquetus et senectus et netus et malesuada ac turpis.</p>
                                </div>
                            </div>
                            <div class="post-footer">
                                <span class="post-readmore">
                                    <a href="#" class="btn btn-theme btn-theme-transparent">Read more</a>
                                </span>
                            </div>
                        </article>
                    </div>

                    <!-- -->
                    <div class="col-md-4">
                        <article class="post-wrap" data-animation="fadeInUp" data-animation-delay="300">
                            <div class="post-media">
                                <div class="post-type">
                                    <i class="fa fa-photo"></i>
                                </div>
                                <img src="<?=  base_url()?>assets/img/recent-post-1.jpg" alt=""/>
                            </div>
                            <div class="post-header">
                                <h2 class="post-title"><a href="#">Standart Blog Post Header Here</a></h2>
                                <div class="post-meta">
                                    <span class="post-date">
                                        Posted on
                                        <span class="day">17th</span>
                                        <span class="month">May</span>
                                        <span class="year">2015</span>
                                    </span>
                                    <span class="pull-right">
                                        <i class="fa fa-comment"></i> <a href="#">12</a>
                                    </span>
                                </div>
                            </div>
                            <div class="post-body">
                                <div class="post-excerpt">
                                    <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi tristiquetus et senectus et netus et malesuada ac turpis.</p>
                                </div>
                            </div>
                            <div class="post-footer">
                                <span class="post-readmore">
                                    <a href="#" class="btn btn-theme btn-theme-transparent">Read more</a>
                                </span>
                            </div>
                        </article>
                    </div>

                    <!-- -->
                    <div class="col-md-4">
                        <article class="post-wrap" data-animation="fadeInUp" data-animation-delay="500">
                            <div class="post-media">
                                <div class="post-type">
                                    <i class="fa fa-music"></i>
                                </div>
                                <img src="<?=  base_url()?>assets/img/recent-post-1.jpg" alt=""/>
                            </div>
                            <div class="post-header">
                                <h2 class="post-title"><a href="#">Standart Blog Post Header Here</a></h2>
                                <div class="post-meta">
                                    <span class="post-date">
                                        Posted on
                                        <span class="day">17th</span>
                                        <span class="month">May</span>
                                        <span class="year">2014</span>
                                    </span>
                                    <span class="pull-right">
                                        <i class="fa fa-comment"></i> <a href="#">12</a>
                                    </span>
                                </div>
                            </div>
                            <div class="post-body">
                                <div class="post-excerpt">
                                    <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi tristiquetus et senectus et netus et malesuada ac turpis.</p>
                                </div>
                            </div>
                            <div class="post-footer">
                                <span class="post-readmore">
                                    <a href="#" class="btn btn-theme btn-theme-transparent">Read more</a>
                                </span>
                            </div>
                        </article>
                    </div>

                </div>
                <div class="text-center margin-top">
                    <a data-animation="flipInY" data-animation-delay="100" href="#" class="btn btn-theme"><i class="fa fa-file"></i> Ver todas las noticias </a>
                </div>
            </div>
        </section>

        <!-- PAGE LOCATION -->
        <section class="page-section" id="location">
            <div class="container full-width gmap-background">

                <div class="container">
                    <div class="on-gmap color">
                        <h1 class="section-title">
                            <span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                            <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Localización de l evento</span>
                        </h1>
                        <p data-animation="fadeInUp" data-animation-delay="200" class="text-uppercase"><?=$evento['lugar']?><br/>                            
                            <?=$evento['pais']?> <br/>
                            <?=$evento['telefono']?></p>
                        <p><a href="mailto:<?=$evento['email']?>">Correo</a></p>
                        <a href="#" class="btn btn-theme"
                           data-animation="flipInY" data-animation-delay="300">Get Direction <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- Google map -->
                <div class="google-map">
                    <div id="map-canvas"></div>
                </div>
                <!-- /Google map -->

            </div>
        </section>
        <!-- /PAGE LOCATION -->

        <!-- PAGE CONTACT -->
        <section class="page-section color">
            <div class="container">

                <h1 class="section-title">
                    <span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                    <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Contactenos <small>/ lorem ipsum</small></span>
                </h1>

                <!-- Contact form -->
                <form name="af-form" method="post" action="#contact" class="af-form row" id="af-form">

                    <div class="col-sm-12 af-outer af-required">
                        <div class="form-group af-inner">
                            <input
                                    type="text" name="name" id="name" placeholder="Nombre" value="" size="30"
                                    data-toggle="tooltip" title="Name is required"
                                    class="form-control placeholder"/>
                        </div>
                    </div>

                    <div class="col-sm-12 af-outer af-required">
                        <div class="form-group af-inner">
                            <input
                                    type="text" name="email" id="email" placeholder="Email" value="" size="30"
                                    data-toggle="tooltip" title="Email is required"
                                    class="form-control placeholder"/>
                        </div>
                    </div>

                    <div class="col-sm-12 af-outer af-required">
                        <div class="form-group af-inner">
                            <textarea
                                    name="message" id="input-message" placeholder="Mensaje" rows="4" cols="50"
                                    data-toggle="tooltip" title="Message is required"
                                    class="form-control placeholder"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-12 af-outer af-required text-center">
                        <div class="form-group af-inner">
                            <input type="submit" name="submit" class="form-button form-button-submit btn btn-theme btn-theme-lg btn-theme-transparent" id="submit_btn" value="Enviar mensaje" />
                        </div>
                    </div>

                </form>
                <!-- /Contact form -->

            </div>
        </section>
        <!-- /PAGE CONTACT -->

    </div>
    <!-- /Content area -->

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-meta">
            <div class="container text-center">
                <div class="clearfix">
                    <ul class="social-line list-inline">
                        <li data-animation="flipInY" data-animation-delay="100"><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="200"><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="300"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="400"><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="500"><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="600"><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="700"><a href="#" class="skype"><i class="fa fa-skype"></i></a></li>
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
<script src="<?=base_url()?>assets/js/theme-config-light.js"></script>
<!--<![endif]-->

<script type="text/javascript">

    jQuery(document).ready(function () {
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
                    duration: 1200,
                    easing: "easeInOutExpo"
                });
            }
        }
    });

</script>

</body>
</h