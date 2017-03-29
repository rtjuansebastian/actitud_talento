<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Pagina de inicio datos basicos</h1>
                    <form method="post" action="<?=  base_url()?>admin/actualizar_configuracion" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$configuracion['id']?>">
                        <div class="form-group">
                            <label>Empresas</label>
                            <button type="button" class=" form-control btn btn-primary btn-xs glyphicon glyphicon-search navbar-right" data-toggle="modal" data-target="#modal_ver_patrocinadores"></button>
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input class="form-control" type="tel" name="telefono" id="telefono" value="<?=$configuracion['telefono']?>"/>
                        </div>
                        <div class="form-group">
                            <label>Correo</label>
                            <input class="form-control" type="text" name="correo" id="correo" value="<?=$configuracion['correo']?>"/>
                        </div>
                        <div class="form-group">
                            <label>Dirección</label>
                            <input class="form-control" type="text" name="direccion" id="direccion" value="<?=$configuracion['direccion']?>"/>
                        </div>
                        <div class="form-group">
                            <label>Nosotros</label>
                            <textarea class="form-control" rows="3" name="perfil" id="perfil"><?=$configuracion['perfil']?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input class="form-control" type="text" name="facebook" id="facebook" value="<?=$configuracion['facebook']?>"/>
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input class="form-control" type="text" name="twitter" id="twitter" value="<?=$configuracion['twitter']?>"/>
                        </div>
                        <div class="form-group">
                            <label>Linkedin</label>
                            <input class="form-control" type="text" name="linkedin" id="linkedin" value="<?=$configuracion['linkedin']?>"/>
                        </div>
                        <div class="form-group">
                            <label>Instragram</label>
                            <input class="form-control" type="text" name="instagram" id="instagram" value="<?=$configuracion['instagram']?>"/>
                        </div>
                        <div class="form-group">
                            <label>Imagen 1</label>
                            <img src="<?=  base_url()?>assets/img/configuracion/<?=$configuracion['imagen_1']?>" height="80px" width="160px">
                            <input class="form-control" type="file" name="imagen_1" id="imagen_1"/>
                        </div>
                        <div class="form-group">
                            <label>Imagen 2</label>
                            <img src="<?=  base_url()?>assets/img/configuracion/<?=$configuracion['imagen_2']?>" height="80px" width="160px">
                            <input class="form-control" type="file" name="imagen_2" id="imagen_2"/>
                        </div>
                        <div class="form-group">
                            <label>Imagen 3</label>
                            <img src="<?=  base_url()?>assets/img/configuracion/<?=$configuracion['imagen_3']?>" height="80px" width="160px">
                            <input class="form-control" type="file" name="imagen_3" id="imagen_3"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modal_ver_patrocinadores" tabindex="-1" role="dialog" aria-labelledby="modal_label_editar_patrocinador">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="modal_label_editar_patrocinador">Editar patrocinador</h4>
                    </div>
                    <div class="modal-body">                    
                        <h1>Empresas</h1>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Url</th>
                                    <th>Imagen</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
foreach ($patrocinadores as $patrocinador)
{
?>                            
                                <tr>
                                    <td><?=$patrocinador['nombre']?></td>
                                    <td><?=$patrocinador['url']?></td>
                                    <td><img src="<?=  base_url()?>assets/img/configuracion/patrocinadores/<?=$patrocinador['imagen']?>" height="30" width="100"/></td>
                                    <td><button type="button" class="btn btn-primary btn-xs glyphicon glyphicon-pencil navbar-right editar_patrocinador" data-id="<?=$patrocinador['id']?>" data-toggle="modal" data-target="#modal_editar_patrocinador"></button></td>
                                </tr>
<?php
}
?>
                            </tbody>
                        </table>                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_crear_patrocinador">Crear otra empresa</button>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Modal -->
        <div class="modal fade" id="modal_crear_patrocinador" tabindex="-1" role="dialog" aria-labelledby="modal_label_editar_patrocinador">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="<?=  base_url()?>admin/crear_configuracion_patrocinador" enctype="multipart/form-data">
                        <input type="hidden" id="id_patrocinador" name="id">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="modal_label_editar_patrocinador">Crear patrocinador</h4>
                        </div>
                        <div class="modal-body">                    
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="url">Url</label>
                                <input type="text" class="form-control" name="url" required=""/>                                                        
                            </div>
                            <div class="form-group">
                                <label for="imagen_patrocinador" class="col-sm-2"><p class="text-left">Imagen</p></label>
                                <input type="file" class="form-control" name="imagen" id="imagen_patrocinador"/>
                            </div> 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>         
        <!-- Modal -->
        <div class="modal fade" id="modal_editar_patrocinador" tabindex="-1" role="dialog" aria-labelledby="modal_label_editar_patrocinador">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="<?=  base_url()?>admin/actualizar_configuracion_patrocinador" enctype="multipart/form-data">
                        <input type="hidden" id="id_patrocinador" name="id">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="modal_label_editar_patrocinador">Editar patrocinador</h4>
                        </div>
                        <div class="modal-body">                    
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre_patrocinador" name="nombre" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="perfil">Url</label>
                                <input type="text" class="form-control" id="url_patrocinador" name="url" required=""/>                                                        
                            </div>
                            <div class="form-group">
                                <label for="imagen_patrocinador" class="col-sm-2"><p class="text-left">Imagen</p></label>
                                <input type="file" class="form-control" name="imagen" id="imagen_patrocinador"/>
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
<?php $this->load->view("admin/footer");?>
<script>
    $(document).ready(function(){

        $(".editar_patrocinador").click(function(){
            var id= $(this).data("id");
            $.ajax(
            {
                method: "POST",
                url: "<?php echo base_url(); ?>admin/editar_configuracion_patrocinador",
                asyn:false,
                data: {id: id},
                success: function (data)
                {
                    var result=$.parseJSON(data);
                    $("#id_patrocinador").val(id);
                    $("#nombre_patrocinador").val(result.nombre);
                    $("#url_patrocinador").val(result.url);
                }
            });
        });
        
        $("#eliminar_patrocinador").click(function(){
            if(confirm('¿Estas seguro de eliminar este patrocinador?'))
            {
                var id= $("#id_patrocinador").val();
                $.ajax(
                {
                    method: "POST",
                    url: "<?php echo base_url(); ?>admin/eliminar_configuracion_patrocinador",
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