<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">    
                    <h1>Patrocinadores</h1>
<?php
foreach ($patrocinadores as $patrocinador)
{
?>
                    <button type="button" class="btn btn-primary btn-xs glyphicon glyphicon-pencil navbar-right editar_patrocinador" data-id="<?=$patrocinador['id']?>" data-toggle="modal" data-target="#modal_editar_patrocinador"></button>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr id="acordeon<?=$patrocinador['id']?>" data-toggle="collapse" data-target="#patrocinador<?=$patrocinador['id']?>" class="accordion-toggle" style=" cursor: pointer">
                                <th class="size">ID <?=$patrocinador['id']?></th>
                                <th><?=$patrocinador['nombre']?></th>                  
                            </tr>
                        </thead>
                        <tbody id="patrocinador<?=$patrocinador['id']?>" class="accordian-body collapse">            
                            <tr>
                                <td>Nombre contacto</td>                    
                                <td><?=$patrocinador['nombre_contacto']?></td>
                            </tr>
                            <tr>
                                <td>Telefono contacto</td>                    
                                <td><?=$patrocinador['telefono_contacto']?></td>
                            </tr>                            
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
                            <tr>
                                <td>Estado</td>                            
                                <td><?=$patrocinador['estado']?></td>
                            </tr>                              
                        </tbody>
                    </table>                    
<?php                    
}
?>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modal_editar_patrocinador" tabindex="-1" role="dialog" aria-labelledby="modal_label_editar_patrocinador">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="<?=  base_url()?>admin/actualizar_patrocinador" enctype="multipart/form-data">
                        <input type="hidden" id="id" name="id">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="modal_label_editar_patrocinador">Editar patrocinador</h4>
                        </div>
                        <div class="modal-body">                    
                            <div class="form-group">
                                <label for="nombre_contacto">Nombre contacto</label>
                                <input type="text" class="form-control" id="nombre_contacto" name="nombre_contacto" />
                            </div>
                            <div class="form-group">
                                <label for="telefono_contacto">Telefono contacto</label>
                                <input type="text" class="form-control" id="telefono_contacto" name="telefono_contacto" />
                            </div>                            
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="profesion">Descripción</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion"/>                            
                            </div>
                            <div class="form-group">
                                <label for="perfil">Url</label>
                                <input type="text" class="form-control" id="url" name="url" required=""/>                                                        
                            </div>
                            <div class="form-group">
                                <label for="imagen_patrocinador" class="col-sm-2"><p class="text-left">Imagen</p></label>
                                <input type="file" class="form-control" name="imagen_patrocinador" id="imagen_patrocinador"/>
                            </div> 
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <select class="form-control" name="estado" id="estado">
                                    <option value="activo">Activo</option>
                                    <option value="inactivo">Inactivo</option>
                                </select>
                            </div>                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-danger" id="eliminar_patrocinador" data-dismiss="modal">Eliminar patrocinador</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
<?php $this->load->view("admin/footer"); ?>
<script>
    $(document).ready(function(){
        $(".accordion-toggle").click();
        $(".editar_patrocinador").click(function(){
            var id= $(this).data("id");
            $.ajax(
            {
                method: "POST",
                url: "<?php echo base_url(); ?>admin/editar_patrocinador",
                asyn:false,
                data: {id: id},
                success: function (data)
                {
                    var result=$.parseJSON(data);
                    $("#id").val(id);
                    $("#nombre_contacto").val(result.nombre_contacto);
                    $("#telefono_contacto").val(result.telefono_contacto);
                    $("#nombre").val(result.nombre);
                    $("#descripcion").val(result.descripcion);
                    $("#url").val(result.url);
                    $("#estado").val(result.estado);
                }
            });
        });
        
        $("#eliminar_patrocinador").click(function(){
            if(confirm('¿Estas seguro de eliminar este patrocinador?'))
            {
                var id= $("#id").val();
                $.ajax(
                {
                    method: "POST",
                    url: "<?php echo base_url(); ?>admin/eliminar_patrocinador",
                    asyn:false,
                    data: {id: id},
                    success: function ()
                    {
                        location.reload();
                    }
                });
            }
        });        
    });
</script>