<!DOCTYPE html> 
<html lang="es">
    <head>
        <title>A&T Eventos</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">        
        <link rel="stylesheet" href="<?=  base_url()?>assets/css/bootstrap-spacelab.css" />
        <link rel="stylesheet" href="<?=  base_url()?>assets/css/fullcalendar.css" />
        <link rel="stylesheet" href="<?=  base_url()?>assets/css/datetimepicker.css" />
        <link rel="stylesheet" href="<?=  base_url()?>assets/css/multi-select.css" />
        <link rel="stylesheet" href="<?=  base_url()?>assets/css/estilos.css" />
        <link rel="stylesheet" href="<?=  base_url()?>assets/css/bootstrap-select.min.css" />
        <link rel="stylesheet" href="<?=  base_url()?>assets/css/tablesorter.css" />
        <link rel="stylesheet" href="<?=  base_url()?>assets/css/daterangepicker.css" />                
        <link rel="stylesheet" href="<?=  base_url()?>assets/css/image-picker.css" />
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico" />                
    </head>
    <body>
        <header>
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                            <a class="navbar-brand" href="<?=  base_url()?>"><img alt="Brand" src="<?=  base_url()?>assets/img/logo.png"></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <!--<li><a href="<?=  base_url()?>index.php/admin/ver_usuarios">Usuarios<span class="sr-only">(current)</span></a></li>-->
                                <li><a href="<?=  base_url()?>admin/ver_usuarios">Usuarios<span class="sr-only">(current)</span></a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Paises<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url(); ?>admin/ver_paises">Ver paises</a></li>
                                        <!--<li><a href="<?php echo base_url(); ?>index.php/admin/ver_eventos">Ver eventos</a></li>-->
                                        <li><a href="<?php echo base_url(); ?>admin/agregar_pais">Agregar pais</a></li>
                                        <!--<li><a href="<?php echo base_url(); ?>index.php/admin/agregar_evento">Agregar evento</a></li>-->
                                    </ul>
                                </li>                                
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Eventos<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url(); ?>admin/ver_eventos">Ver eventos</a></li>
                                        <!--<li><a href="<?php echo base_url(); ?>index.php/admin/ver_eventos">Ver eventos</a></li>-->
                                        <li><a href="<?php echo base_url(); ?>admin/agregar_evento">Agregar evento</a></li>
                                        <!--<li><a href="<?php echo base_url(); ?>index.php/admin/agregar_evento">Agregar evento</a></li>-->
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Conferencistas<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url(); ?>admin/ver_conferencistas">Ver conferencistas</a></li>
                                        <!--<li><a href="<?php echo base_url(); ?>index.php/admin/ver_conferencistas">Ver conferencistas</a></li>-->
                                        <li><a href="<?php echo base_url(); ?>admin/agregar_conferencista">Agregar conferencista</a></li>
                                        <!--<li><a href="<?php echo base_url(); ?>index.php/admin/agregar_conferencista">Agregar conferencista</a></li>-->
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Escenarios<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url(); ?>admin/ver_escenarios">Ver escenarios</a></li>
                                        <!--<li><a href="<?php echo base_url(); ?>index.php/admin/ver_escenarios">Ver escenarios</a></li>-->
                                        <li><a href="<?php echo base_url(); ?>admin/agregar_escenario">Agregar escenario</a></li>
                                        <!--<li><a href="<?php echo base_url(); ?>index.php/admin/agregar_escenario">Agregar escenario</a></li>-->
                                    </ul>
                                </li>                                
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Patrocinadores<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url(); ?>admin/ver_patrocinadores">Ver patrocinadores</a></li>
                                        <!--<li><a href="<?php echo base_url(); ?>index.php/admin/ver_patrocinadores">Ver patrocinadores</a></li>-->
                                        <li><a href="<?php echo base_url(); ?>admin/agregar_patrocinador">Agregar patrocinador</a></li>
                                        <!--<li><a href="<?php echo base_url(); ?>index.php/admin/agregar_patrocinador">Agregar patrocinador</a></li>-->
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Asistentes<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url(); ?>admin/ver_registros">Ver personas registradas</a></li>
                                        <!--<li><a href="<?php echo base_url(); ?>index.php/admin/ver_patrocinadores">Ver patrocinadores</a></li>-->
                                        <li><a href="<?php echo base_url(); ?>admin/ver_contactos">Ver mensajes de contacto recibidos</a></li>
                                        <!--<li><a href="<?php echo base_url(); ?>index.php/admin/agregar_patrocinador">Agregar patrocinador</a></li>-->
                                    </ul>
                                </li>                                
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?php echo base_url(); ?>login/cerrar_sesion">Desconectar</a></li>            
                                <!--<li><a href="<?php echo base_url(); ?>index.php/login/cerrar_sesion">Desconectar</a></li-->
                            </ul>                            
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </header>