<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Eventos</h1>
<?php
foreach ($eventos as $evento)
{
?>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr id="acordeon<?=$evento['id']?>" data-toggle="collapse" data-target="#evento<?=$evento['id']?>" class="accordion-toggle" style=" cursor: pointer">
                                <th class="size">ID <?=$evento['id']?></th>
                                <th>Nombre <?=$evento['nombre']?></th>                  
                            </tr>
                        </thead>
                        <tbody id="evento<?=$evento['id']?>" class="accordian-body collapse">            
                            <tr>
                                <td>País</td>
                                <td><?=$evento['pais']?></td>
                            </tr>
                            <tr>
                                <td>Nombre</td>                    
                                <td><?=$evento['nombre']?></td>
                            </tr>
                            <tr>
                                <td>Descripción</td>                            
                                <td><?=$evento['descripcion']?></td>
                            </tr>
                            <tr>
                                <td>Lugar</td>                            
                                <td><?=$evento['lugar']?></td>
                            </tr>
                            <tr>
                                <td>Fecha</td>                            
                                <td><?=$evento['fecha']?></td>
                            </tr>
                            <tr>
                                <td>Coordenadas</td>                            
                                <td><?=$evento['coordenadas']?></td>
                            </tr>
                            <tr>
                                <td>Cupos</td>                            
                                <td><?=$evento['cupos']?></td>
                            </tr>
                            <tr>
                                <td>Días</td>                            
                                <td><?=$evento['dias']?></td>
                            </tr>
                            <tr>
                                <td>Teléfono</td>                            
                                <td><?=$evento['telefono']?></td>
                            </tr>
                            <tr>
                                <td>Email</td>                            
                                <td><?=$evento['email']?></td>
                            </tr>
                            <tr>
                                <td>Video</td>                            
                                <td><?=$evento['video']?></td>
                            </tr>
                            <tr>
                                <td>Imagen de fondo</td>                            
                                <td><img src="<?=$evento['imagen_fondo']?>" width="250" height="180"></td>
                            </tr>
                            <tr>
                                <td>Bandera</td>                            
                                <td><img src="<?=$evento['imagen_bandera']?>" width="125" height="60"></td>
                            </tr>
                            <tr>
                                <td>Twitter</td>                            
                                <td><?=$evento['twitter']?></td>
                            </tr>
                            <tr>
                                <td>Dribbble</td>                            
                                <td><?=$evento['dribbble']?></td>
                            </tr>
                            <tr>
                                <td>Facebook</td>                            
                                <td><?=$evento['facebook']?></td>
                            </tr>
                            <tr>
                                <td>Google Plus</td>                            
                                <td><?=$evento['google-plus']?></td>
                            </tr>
                            <tr>
                                <td>Instagram</td>                            
                                <td><?=$evento['instagram']?></td>
                            </tr>
                            <tr>
                                <td>Pinterest</td>                            
                                <td><?=$evento['pinterest']?></td>
                            </tr>
                            <tr>
                                <td>Skype</td>                            
                                <td><?=$evento['skype']?></td>
                            </tr>
                            <tr>
                                <td>Patrocinadores</td>                            
                                <td><?=$evento['patrocinadores']?></td>
                            </tr>                            
                        </tbody>
                    </table>                    
<?php                    
}
?>
                </div>
            </div>
        </div>
<?php $this->load->view("admin/footer"); 