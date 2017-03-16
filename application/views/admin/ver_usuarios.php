<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">            
                    <h1>Usuarios</h1>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>Identificacion</th>
                                <th>Email</th>
                                <th>Nombre</th> 
                                <th>Editar</th>
                            </tr>
                        </thead>            
                        <tbody id="escenarios">                 
<?php
foreach ($usuarios as $usuario)
{
?>                           
                            <tr>
                                <td><?=$usuario['numero_identificacion']?></td>
                                <td><?=$usuario['email']?></td>
                                <td><?=$usuario['nombre']?></td>
                                <td><button type="button" class="btn btn-primary glyphicon glyphicon-pencil editar_usuario" data-toggle="modal" data-usuario="<?=$usuario['numero_identificacion']?>" data-target="#modal_editar_usuario"> Editar</button></td>
                            </tr>                   
<?php                    
}
?>
                        </tbody>
                    </table>                     
                </div>
            </div>
        </div>
        <!-- Modal editar usuario -->
        <div class="modal fade" id="modal_editar_usuario" tabindex="-1" role="dialog" aria-labelledby="modal_editar_usuario_label">
            <div class="modal-dialog" role="document">
                <form method="post" action="<?=  base_url()?>admin/actualizar_usuario">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="modal_editar_usuario_label">Editar usuario</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="numero_identificacion"></label>
                                <input type="text" class="form-control" id="numero_identificacion" name="numero_identificacion"/>
                            </div>
                            <div class="form-group">
                                <label for="email"></label>
                                <input type="email" class="form-control" id="email" name="email"/>
                            </div>
                            <div class="form-group">
                                <label for="nombre"></label>
                                <input type="text" class="form-control" id="nombre" name="nombre"/>
                            </div>                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" id="eliminar_usuario">Eliminar usuario</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
<?php $this->load->view("admin/footer");?> 
<script>
    $(document).ready(function(){
        
        $(".editar_usuario").click(function(){
            var id= $(this).data("usuario");
            $.ajax(
            {
                method: "POST",
                url: "<?php echo base_url(); ?>admin/editar_usuario",
                asyn:false,
                data: {usuario: id},
                success: function (data)
                {
                    var result=$.parseJSON(data);
                    $("#numero_identificacion").val(id);
                    $("#email").val(result.email);
                    $("#nombre").val(result.nombre);                    
                }
            });
        });
        $("#eliminar_usuario").click(function(){
            if(confirm('¿Estas seguro de eliminar este usuario?'))
            {
                var id= $("#numero_identificacion").val();
                $.ajax(
                {
                    method: "POST",
                    url: "<?php echo base_url(); ?>admin/eliminar_usuario",
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