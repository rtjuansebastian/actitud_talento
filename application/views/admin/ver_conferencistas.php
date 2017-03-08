<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">  
                    <h1>Conferencistas</h1>
<?php
foreach ($conferencistas as $conferencista)
{
?>
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
                        </tbody>
                    </table>                    
<?php                    
}
?>
                </div>
            </div>
        </div>
<?php $this->load->view("admin/footer"); 