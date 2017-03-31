<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">  
                    <h1>Mensajes de contacto</h1>
<?php
foreach ($contactos as $contacto)
{
?>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr id="acordeon<?=$contacto['id']?>" data-toggle="collapse" data-target="#contacto<?=$contacto['id']?>" class="accordion-toggle" style=" cursor: pointer">
                                <th class="size">ID <?=$contacto['id']?></th>
                                <th><?=$contacto['nombre']?></th>                  
                            </tr>
                        </thead>
                        <tbody id="contacto<?=$contacto['id']?>" class="accordian-body collapse">            
                            <tr>
                                <td>Nombre</td>                    
                                <td><?=$contacto['nombre']?></td>
                            </tr>
                            <tr>
                                <td>Evento</td>                            
                                <td><?=$contacto['nombre_evento']?></td>
                            </tr>
                            <tr>
                                <td>Email</td>                            
                                <td><?=$contacto['email']?></td>
                            </tr>
                            <tr>
                                <td>Mensaje</td>                            
                                <td><?=$contacto['mensaje']?></td>
                            </tr>
                            <tr>
                                <td>Estado</td>                            
                                <td><?=$contacto['estado']?></td>
                            </tr>                            
                            <tr>
                                <td>Responder</td>                            
                                <td>
                                    <button class="btn btn-success glyphicon glyphicon-check responder" data-contacto="<?=$contacto['id']?>" data-toggle="modal" data-target="#modal_responder_contacto"></button>
                                    <button class="btn btn-danger glyphicon glyphicon-remove eliminar_contacto" data-contacto="<?=$contacto['id']?>"></button>
                                </td>
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
        <div class="modal fade" id="modal_responder_contacto" tabindex="-1" role="dialog" aria-labelledby="modal_label_editar_conferencista">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="<?=  base_url()?>admin/responder_contacto">
                        <input type="hidden" id="id" name="id">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="modal_label_editar_conferencista">Responder contacto</h4>
                        </div>
                        <div class="modal-body">                    
                            <div class="form-group">
                                <label for="respuesta">Respuesta</label>
                                <textarea class="form-control" id="respuesta" name="respuesta" required="" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php $this->load->view("admin/footer"); ?>
<script>
    $(document).ready(function(){
        $(".responder").click(function(){
            var contacto=$(this).data("contacto");
            $("#id").val(contacto);
        });
        
        $(".eliminar_contacto").click(function(){
            var contacto=$(this).data("contacto");
            if (window.confirm("Desea eliminar este mensaje?") == true)
            {
               window.location = "<?=  base_url()?>admin/eliminar_contacto?contacto="+contacto+"";
            }            
        });        
    });
</script>