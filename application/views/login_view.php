<!DOCTYPE html> 
<html lang="es">
    <head>
        <title>A&T Eventos</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/estilos.css" />
        <link rel="stylesheet" href="<?=  base_url()?>assets/css/bootstrap-spacelab.css" />
        <link rel="shortcut icon" href="<?=base_url()?>assets/img/cropped-Logo-Congreso-CyChM-V1.png">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title text-center"><img alt="Brand" src="<?=  base_url()?>assets/img/logo.png"></h3>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">                
                <div class="col-md-6 col-md-offset-3">
                    <form method="post" action="<?=  base_url()?>login/valida_login">
                    <!--<form method="post" action="<?=  base_url()?>index.php/login/valida_login">-->
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control" id="cedula" placeholder="Usuario" name="email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </form>
                    <div>
                        <?php if(isset($mensaje))echo $mensaje;?>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>        
        <br>
        <br>
        <footer>
            <div class="container">
                <p class="text-muted text-center">Todos los derechos reservados Actitud y Talento 2017</p>
            </div>             
        </footer>       
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>            
    </body>
</html>        
