<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">            
                    <h1>Usuarios</h1>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Nombre</th>                              
                            </tr>
                        </thead>            
                        <tbody id="escenarios">                 
<?php
foreach ($usuarios as $usuario)
{
?>                           
                            <tr>
                                <td><?=$usuario['email']?></td>
                                <td><?=$usuario['nombre']?></td>
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