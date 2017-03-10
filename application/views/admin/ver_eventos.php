<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Eventos</h1>
<?php
foreach ($eventos as $evento)
{
?>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr id="acordeon<?=$evento['id']?>" data-toggle="collapse" data-target="#evento<?=$evento['id']?>" class="accordion-toggle" style=" cursor: pointer">
                                <th class="size">ID <?=$evento['id']?></th>
                                <th>Nombre <?=$evento['nombre']?></th>                  
                            </tr>
                        </thead>
                        <tbody id="evento<?=$evento['id']?>" class="accordian-body collapse">            
                            <tr>
                                <td>País</td>
                                <td><?=$evento['pais']?></td>
                            </tr>
                            <tr>
                                <td>Nombre</td>                    
                                <td><?=$evento['nombre']?></td>
                            </tr>
                            <tr>
                                <td>Descripción</td>                            
                                <td><?=$evento['descripcion']?></td>
                            </tr>
                            <tr>
                                <td>Lugar</td>                            
                                <td><?=$evento['lugar']?></td>
                            </tr>
                            <tr>
                                <td>Fecha</td>                            
                                <td><?=$evento['fecha']?></td>
                            </tr>
                            <tr>
                                <td>Coordenadas</td>                            
                                <td><?=$evento['coordenadas']?></td>
                            </tr>
                            <tr>
                                <td>Cupos</td>                            
                                <td><?=$evento['cupos']?></td>
                            </tr>
                            <tr>
                                <td>Días</td>                            
                                <td><?=$evento['dias']?></td>
                            </tr>
                            <tr>
                                <td>Teléfono</td>                            
                                <td><?=$evento['telefono']?></td>
                            </tr>
                            <tr>
                                <td>Email</td>                            
                                <td><?=$evento['email']?></td>
                            </tr>
                            <tr>
                                <td>Video</td>                            
                                <td><?=$evento['video']?></td>
                            </tr>
                            <tr>
                                <td>Imagen de fondo</td>                            
                                <td><img src="<?=$evento['imagen_fondo']?>" width="250" height="180"></td>
                            </tr>
                            <tr>
                                <td>Bandera</td>                            
                                <td><img src="<?=$evento['imagen_bandera']?>" width="125" height="60"></td>
                            </tr>
                            <tr>
                                <td>Twitter</td>                            
                                <td><?=$evento['twitter']?></td>
                            </tr>
                            <tr>
                                <td>Dribbble</td>                            
                                <td><?=$evento['dribbble']?></td>
                            </tr>
                            <tr>
                                <td>Facebook</td>                            
                                <td><?=$evento['facebook']?></td>
                            </tr>
                            <tr>
                                <td>Google Plus</td>                            
                                <td><?=$evento['google-plus']?></td>
                            </tr>
                            <tr>
                                <td>Instagram</td>                            
                                <td><?=$evento['instagram']?></td>
                            </tr>
                            <tr>
                                <td>Pinterest</td>                            
                                <td><?=$evento['pinterest']?></td>
                            </tr>
                            <tr>
                                <td>Skype</td>                            
                                <td><?=$evento['skype']?></td>
                            </tr>
                            <tr>
                                <td>Patrocinadores</td>                            
                                <td><?=$evento['patrocinadores']?></td>
                            </tr>
                            <tr>
                                <td>Programación</td>                            
                                <td><button class="btn btn-primary glyphicon glyphicon-search ver_programacion" data-evento="<?=$evento['id']?>" data-toggle="modal" data-target="#modal_programacion"></button></td>
                            </tr> 
                            <tr>
                                <td>Preguntas frecuentes</td>                            
                                <td><button class="btn btn-primary glyphicon glyphicon-search ver_preguntas" data-evento="<?=$evento['id']?>" data-toggle="modal" data-target="#modal_preguntas"></button></td>
                            </tr> 
                            <tr>
                                <td>Testimonios</td>                            
                                <td><button class="btn btn-primary glyphicon glyphicon-search ver_testimonios" data-evento="<?=$evento['id']?>" data-toggle="modal" data-target="#modal_testimonios"></button></td>
                            </tr>                             
                        </tbody>
                    </table>                    
<?php                    
}
?>
                </div>
            </div>
        </div>
        <!-- Modal Programación -->
        <div class="modal fade" id="modal_programacion" tabindex="-1" role="dialog" aria-labelledby="ModalLabelProgramacion">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="ModalLabelProgramacion">Programación</h4>
              </div>
              <div class="modal-body">
                  <table class="table table-responsive">
                      <thead>
                          <tr>
                              <th>Fecha</th>
                              <th>Duración (Horas)</th>
                              <th>Titulo</th>
                              <th>Descrpción</th>
                              <th>Escenario</th>
                              <th>Conferencista</th>                              
                          </tr>
                      </thead>
                      <tbody id="tabla_programacion">

                      </tbody>
                  </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Preguntas -->
        <div class="modal fade" id="modal_preguntas" tabindex="-1" role="dialog" aria-labelledby="ModalLabelProgramacion">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="ModalLabelProgramacion">Preguntas frecuentes</h4>
              </div>
              <div class="modal-body">
                  <table class="table table-responsive">
                      <thead>
                          <tr>
                              <th>Pregunta</th>
                              <th>Respuesta</th>
                          </tr>
                      </thead>
                      <tbody id="tabla_preguntas">

                      </tbody>
                  </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Testimonios -->
        <div class="modal fade" id="modal_testimonios" tabindex="-1" role="dialog" aria-labelledby="ModalLabelProgramacion">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="ModalLabelProgramacion">Testimonios</h4>
              </div>
              <div class="modal-body">
                  <table class="table table-responsive">
                      <thead>
                          <tr>
                              <th>Nombre</th>
                              <th>Testimonio</th>
                              <th>Imagen</th>
                          </tr>
                      </thead>
                      <tbody id="tabla_testimonios">

                      </tbody>
                  </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>        
<?php $this->load->view("admin/footer"); ?>
        <script>
            $(document).ready(function(){
                $(".accordion-toggle").click();
                $(".ver_programacion").on("click",function(){
                    var evento=$(this).data("evento");
                    $.ajax({
                      method: "POST",
                      url: "<?=  base_url()?>admin/traer_programacion_evento",
                      data: { evento: evento}
                    })
                    .done(function( data ) {
                        var result= $.parseJSON(data);
                        var tabla_programacion='';      
                        $.each(result, function( llave, items) {
                            tabla_programacion=tabla_programacion+'<tr>'+
                                    '<td>'+items.fecha+'</td>'+
                                    '<td>'+items.duracion+'</td>'+
                                    '<td>'+items.titulo+'</td>'+
                                    '<td>'+items.descripcion+'</td>'+
                                    '<td>'+items.nombre_escenario+'</td>'+
                                    '<td>'+items.nombre_conferencista+'</td>'+
                                '</tr>';                            
                        });
                        $("#tabla_programacion").html(tabla_programacion);
                    });                    
                });
                $(".ver_preguntas").on("click",function(){
                    var evento=$(this).data("evento");
                    $.ajax({
                      method: "POST",
                      url: "<?=  base_url()?>admin/traer_preguntas_evento",
                      data: { evento: evento}
                    })
                    .done(function( data ) {
                        var result= $.parseJSON(data);
                        var tabla_preguntas='';      
                        $.each(result, function( llave, items) {
                            tabla_preguntas=tabla_preguntas+'<tr>'+
                                    '<td>'+items.pregunta+'</td>'+
                                    '<td>'+items.respuesta+'</td>'+
                                '</tr>';                            
                        });
                        $("#tabla_preguntas").html(tabla_preguntas);
                    });                    
                }); 
                $(".ver_testimonios").on("click",function(){
                    var evento=$(this).data("evento");
                    $.ajax({
                      method: "POST",
                      url: "<?=  base_url()?>admin/traer_testimonios_evento",
                      data: { evento: evento}
                    })
                    .done(function( data ) {
                        var result= $.parseJSON(data);
                        var tabla_testimonios='';      
                        $.each(result, function( llave, items) {
                            tabla_testimonios=tabla_testimonios+'<tr>'+
                                    '<td>'+items.nombre+'</td>'+
                                    '<td>'+items.testimonio+'</td>'+
                                    '<td><img src="<?=base_url()?>assets/img/testimonios/'+items.imagen+'" heigth="50" width="50"></td>'+
                                '</tr>';                            
                        });
                        $("#tabla_testimonios").html(tabla_testimonios);
                    });                    
                });                 
            });
        </script>        