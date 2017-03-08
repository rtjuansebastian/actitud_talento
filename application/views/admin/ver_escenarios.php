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
                            </tr>                   
<?php                    
}
?>
                        </tbody>
                    </table>                     
                </div>
            </div>
        </div>
<?php $this->load->view("admin/footer"); 