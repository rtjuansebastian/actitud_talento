<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">            
                    <h1>Escenarios</h1>                    
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Evento</th>                  
                                <th>Nombre</th>                  
                                <th>Capacidad</th>                  
                                <th>Editar</th>
                            </tr>
                        </thead>            
                        <tbody id="escenarios">                 
<?php
foreach ($escenarios as $escenario)
{
?>                           
                            <tr>
                                <td><?=$escenario['id']?></td>
                                <td><?=$escenario['nombre_evento']?></td>
                                <td><?=$escenario['nombre']?></td>
                                <td><?=$escenario['capacidad']?></td>
                                <td><button type="button" class="btn btn-primary btn-xs glyphicon glyphicon-pencil editar_escenario" data-id="<?=$escenario['id']?>" data-toggle="modal" data-target="#modal_editar_escenario"></button></td>
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
        <div class="modal fade" id="modal_editar_escenario" tabindex="-1" role="dialog" aria-labelledby="modal_label_editar_escenario">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="<?=  base_url()?>admin/actualizar_escenario" enctype="multipart/form-data">
                        <input type="hidden" id="id" name="id">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="modal_label_editar_escenario">Editar conferencista</h4>
                        </div>
                        <div class="modal-body">                    
                            <div class="form-group">
                                <label for="evento">Evento</label>
                                <select class="form-control" id="evento" name="evento">
    <?php
    foreach ($eventos as $evento)
    {
    ?>
                                    <option value="<?=$evento['id']?>"><?=$evento['nombre']?></option>
    <?php
    }
    ?>
                                </select>                        
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="capacidad">Capacidad</label>
                                <input type="number" class="form-control" id="capacidad" name="capacidad" required=""/>                                                        
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
<?php $this->load->view("admin/footer"); ?>
<script>
    $(document).ready(function(){
        $(".editar_escenario").click(function(){
            var id= $(this).data("id");
            $.ajax(
            {
                method: "POST",
                url: "<?php echo base_url(); ?>admin/editar_escenario",
                asyn:false,
                data: {id: id},
                success: function (data)
                {
                    var result=$.parseJSON(data);
                    $("#id").val(id);
                    $("#evento").val(result.evento);
                    $("#nombre").val(result.nombre);
                    $("#capacidad").val(result.capacidad);
                }
            });
        });
    });
</script>