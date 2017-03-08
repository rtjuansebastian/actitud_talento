<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">    
                    <h1>Patrocinadores</h1>
<?php
foreach ($patrocinadores as $patrocinador)
{
?>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr id="acordeon<?=$patrocinador['id']?>" data-toggle="collapse" data-target="#patrocinador<?=$patrocinador['id']?>" class="accordion-toggle" style=" cursor: pointer">
                                <th class="size">ID <?=$patrocinador['id']?></th>
                                <th><?=$patrocinador['nombre']?></th>                  
                            </tr>
                        </thead>
                        <tbody id="patrocinador<?=$patrocinador['id']?>" class="accordian-body collapse">            
                            <tr>
                                <td>Nombre</td>                    
                                <td><?=$patrocinador['nombre']?></td>
                            </tr>
                            <tr>
                                <td>Descripción</td>                            
                                <td><?=$patrocinador['descripcion']?></td>
                            </tr>
                            <tr>
                                <td>Url</td>                            
                                <td><?=$patrocinador['url']?></td>
                            </tr>
                            <tr>
                                <td>Imagen</td>                            
                                <td><img src="<?=  base_url()?>assets/img/patrocinadores/<?=$patrocinador['imagen_patrocinador']?>" height="60"></td>
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