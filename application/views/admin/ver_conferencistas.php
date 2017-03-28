<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">  
                    <h1>Conferencistas</h1>
<?php
foreach ($conferencistas as $conferencista)
{
?>
                    <button type="button" class="btn btn-primary btn-xs glyphicon glyphicon-pencil navbar-right editar_conferencista" data-id="<?=$conferencista['id']?>" data-toggle="modal" data-target="#modal_editar_conferencista"></button>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr id="acordeon<?=$conferencista['id']?>" data-toggle="collapse" data-target="#conferencista<?=$conferencista['id']?>" class="accordion-toggle" style=" cursor: pointer">
                                <th class="size">ID <?=$conferencista['id']?></th>
                                <th><?=$conferencista['nombre']?></th>                  
                            </tr>
                        </thead>
                        <tbody id="conferencista<?=$conferencista['id']?>" class="accordian-body collapse">            
                            <tr>
                                <td>Nombre</td>                    
                                <td><?=$conferencista['nombre']?></td>
                            </tr>
                            <tr>
                                <td>Profesión</td>                            
                                <td><?=$conferencista['profesion']?></td>
                            </tr>
                            <tr>
                                <td>Perfil</td>                            
                                <td><?=$conferencista['perfil']?></td>
                            </tr>
                            <tr>
                                <td>Imagen</td>                            
                                <td><img src="<?=  base_url()?>assets/img/conferencistas/<?=$conferencista['imagen']?>" width="90" height="90"></td>
                            </tr>
                            <tr>
                                <td>Facebook</td>                            
                                <td><?=$conferencista['facebook']?></td>
                            </tr>
                            <tr>
                                <td>Twitter</td>                            
                                <td><?=$conferencista['twitter']?></td>
                            </tr>                    
                            <tr>
                                <td>Google Plus</td>                            
                                <td><?=$conferencista['google_plus']?></td>
                            </tr>
                            <tr>
                                <td>Linkedin</td>                            
                                <td><?=$conferencista['linkedin']?></td>
                            </tr>                    
                            <tr>
                                <td>Instagram</td>                            
                                <td><?=$conferencista['instagram']?></td>
                            </tr>
                            <tr>
                                <td>Estado</td>                            
                                <td><?=$conferencista['estado']?></td>
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
        <div class="modal fade" id="modal_editar_conferencista" tabindex="-1" role="dialog" aria-labelledby="modal_label_editar_conferencista">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="<?=  base_url()?>admin/actualizar_conferencista" enctype="multipart/form-data">
                        <input type="hidden" id="id" name="id">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="modal_label_editar_conferencista">Editar conferencista</h4>
                        </div>
                        <div class="modal-body">                    
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="profesion">Profesión</label>
                                <input type="text" class="form-control" id="profesion" name="profesion" required=""/>                            
                            </div>
                            <div class="form-group">
                                <label for="perfil">Perfil</label>
                                <input type="text" class="form-control" id="perfil" name="perfil" required=""/>                                                        
                            </div>
                            <div class="form-group">
                                <label for="imagen" class="col-sm-2"><p class="text-left">Imagen</p></label>
                                <input type="file" class="form-control" name="imagen" id="imagen"/>
                            </div>
                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook"/>                                
                            </div>
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="text" class="form-control" id="twitter" name="twitter"/>                            
                            </div>
                            <div class="form-group">
                                <label for="google_plus">Google Plus</label>
                                <input type="text" class="form-control" id="google_plus" name="google_plus"/>                            
                            </div>
                            <div class="form-group">
                                <label for="linkedin">LinkedIn</label>
                                <input type="text" class="form-control" id="linkedin" name="linkedin"/>                            
                            </div>
                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input type="text" class="form-control" id="instagram" name="instagram"/>                            
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
                            <button type="button" class="btn btn-danger" id="eliminar_conferencista" data-dismiss="modal">Eliminar conferencista</button>
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
        $(".editar_conferencista").click(function(){
            var id= $(this).data("id");
            $.ajax(
            {
                method: "POST",
                url: "<?php echo base_url(); ?>admin/editar_conferencista",
                asyn:false,
                data: {id: id},
                success: function (data)
                {
                    var result=$.parseJSON(data);
                    $("#id").val(id);
                    $("#nombre").val(result.nombre);
                    $("#profesion").val(result.profesion);
                    $("#perfil").val(result.perfil);
                    $("#facebook").val(result.facebook);
                    $("#twitter").val(result.twitter);
                    $("#google_plus").val(result.google_plus);
                    $("#linkedin").val(result.linkedin);
                    $("#instagram").val(result.instagram);
                    $("#estado").val(result.estado);
                }
            });
        });
        $("#eliminar_conferencista").click(function(){
            if(confirm('¿Estas seguro de eliminar este conferencista?'))
            {
                var id= $("#id").val();
                $.ajax(
                {
                    method: "POST",
                    url: "<?php echo base_url(); ?>admin/eliminar_conferencista",
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
