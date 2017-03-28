<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">            
                    <h1>Paises</h1>                    
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>ID</th>               
                                <th>Nombre</th>                  
                                <th>Bandera</th>
                                <th>Editar</th>
                            </tr>
                        </thead>            
                        <tbody id="paises">                 
<?php
foreach ($paises as $pais)
{
?>                           
                            <tr>
                                <td><?=$pais['id']?></td>
                                <td><?=$pais['nombre']?></td>
                                <td><img src="<?=  base_url()?>assets/img/banderas/<?=$pais['imagen']?>" height="50" width="100"></td>
                                <td><button type="button" class="btn btn-primary glyphicon glyphicon-pencil editar_pais" data-id="<?=$pais['id']?>" data-toggle="modal" data-target="#modal_editar_pais"></button></td>
                            </tr>                   
<?php                    
}
?>
                        </tbody>
                    </table>                     
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modal_editar_pais" tabindex="-1" role="dialog" aria-labelledby="modal_label_editar_pais">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="<?=  base_url()?>admin/actualizar_pais" enctype="multipart/form-data">
                        <input type="hidden" id="id" name="id">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="modal_label_editar_pais">Editar País</h4>
                        </div>
                        <div class="modal-body">                    
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="imagen" class="col-sm-2"><p class="text-left">Imagen</p></label>
                                <input type="file" class="form-control" name="imagen" id="imagen"/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-danger" id="eliminar_pais" data-dismiss="modal">Eliminar país</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
<?php $this->load->view("admin/footer"); ?>
<script>
    $(document).ready(function(){
        $(".editar_pais").click(function(){
            var id= $(this).data("id");
            $.ajax(
            {
                method: "POST",
                url: "<?php echo base_url(); ?>admin/editar_pais",
                asyn:false,
                data: {id: id},
                success: function (data)
                {
                    var result=$.parseJSON(data);
                    $("#id").val(id);
                    $("#nombre").val(result.nombre);
                }
            });
        });
                
        $("#eliminar_pais").click(function(){
            if(confirm('¿Estas seguro de eliminar este pais?'))
            {
                var id= $("#id").val();
                $.ajax(
                {
                    method: "POST",
                    url: "<?php echo base_url(); ?>admin/eliminar_pais",
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