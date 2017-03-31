<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">            
                    <h1>Personas registradas</h1>                    
                    <table id="registro" class="table table-bordered table-responsive tablesorter">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Evento</th>                  
                                <th>Nombre</th>                  
                                <th>Email</th>                  
                                <th>Telefono</th>
                                <th>Tipo</th>                  
                                <th>Email corporativo</th>                  
                                <th>Telefono corporativo</th>   
                                <th>Fecha de registro</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>            
                        <tbody id="escenarios">                 
<?php
foreach ($registros as $registro)
{
?>                           
                            <tr>
                                <td><?=$registro['id']?></td>
                                <td><?=$registro['nombre_evento']?></td>
                                <td><?=$registro['nombre']?></td>
                                <td><?=$registro['email']?></td>
                                <td><?=$registro['telefono']?></td>
                                <td><?=$registro['tipo']?></td>
                                <td><?=$registro['email_oficina']?></td>
                                <td><?=$registro['telefono_oficina']?></td>                                
                                <td><?=$registro['fecha']?></td>
                                <td><button data-registro="<?=$registro['id']?>" class="btn btn-danger glyphicon glyphicon-remove eliminar_registro"></button></td>
                            </tr>                   
<?php                    
}
?>
                        </tbody>
                    </table>                     
                </div>
            </div>
        </div>   
<?php $this->load->view("admin/footer"); ?>
<script>
$(document).ready(function() 
    { 
        $("#registro").tablesorter(); 
        
        $(".eliminar_registro").click(function(){
            var registro=$(this).data("registro");
            if (window.confirm("Desea eliminar el registro?") == true)
            {
               window.location = "<?=  base_url()?>admin/eliminar_registro?registro="+registro+"";
            }            
        });
    } 
);     
</script>