<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Eventos</h1>
<?php
foreach ($eventos as $evento)
{
?>
                    <button type="button" class="btn btn-primary btn-xs glyphicon glyphicon-pencil navbar-right editar_evento" data-id="<?=$evento['id']?>" data-toggle="modal" data-target="#modal_editar_evento"></button>
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
                                <td><?=$evento['nombre_pais']?></td>
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
                                <td><img src="<?=  base_url()?>assets/img/banderas/<?=$evento['imagen_bandera']?>" width="125" height="60"></td>
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
                            <tr>
                                <td>Galeria</td>                            
                                <td><button class="btn btn-primary glyphicon glyphicon-search ver_galerias" data-evento="<?=$evento['id']?>" data-toggle="modal" data-target="#modal_galerias"></button></td>
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
                              <th>Editar</th>
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
                              <th>Editar</th>
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
                              <th>Editar</th>
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
        <!-- Modal Galerias -->
        <div class="modal fade" id="modal_galerias" tabindex="-1" role="dialog" aria-labelledby="ModalLabelGarlerias">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="ModalLabelGarlerias">Galeria</h4>
              </div>
              <div class="modal-body">
                  <div id="galeria" class="row"></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>  
        <!-- Modal Editar Programación -->
        <div class="modal fade" id="modal_editar_programcion" tabindex="-1" role="dialog" aria-labelledby="ModalLabelEditarProgramación">
          <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">                
                    <form id="actualizar_programacion">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="ModalLabelEditarProgramación">Conferencia</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="id" name="id"> 
                            <div class="form-group">
                                <label for="fecha">Fecha conferencia</label>
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" id="fecha" name="fecha"/>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>                       
                            </div> 
                            <div class="form-group">
                                <label for="perfil">Duración conferencia</label>
                                <input type="number" class="form-control" id="duracion" name="duracion" required=""/>                                                        
                            </div>                         
                            <div class="form-group">
                                <label for="nombre">Titulo conferencia</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="perfil">Descripción conferencia</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" required=""/>                                                        
                            </div>
                            <div class="form-group conferencistas">
                                <label for="conferencista">Conferencista</label>
                                <select class="form-control" id="conferencista" name="conferencista">
                                    <option></option>
                                    <!-- Traer conferencistas por ajax -->
                                </select>
                                <span>¿Nuevo conferencista? </span><button type="button" class="btn btn-success btn-xs glyphicon glyphicon-user" data-toggle="modal" data-target="#modal_crear_conferencista" id="crear_conferencista"></button>
                            </div>
                            <div class="form-group">
                                <label for="escenario">Escenario</label>
                                <select class="form-control" id="escenario" name="escenario">
                                    <option></option>
                                    <!-- Traer escenarios por ajax -->
                                </select>                            
                            </div> 
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn_actualizar_programacion">Guardar</button>
                        </div>
                    </form>                        
                </div>
            </div>
          </div>
        <!-- Modal crear conferencista -->
        <div class="modal fade" id="modal_crear_conferencista" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCrearConferencista">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form id="form_crear_conferencista" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="ModalLabelCrearConferencista">Crear Conferencista</h4>
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
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn_crear_conferencista">Crear</button>
                        </div>
                    </form>
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
                                    '<td><button class="btn btn-primary glyphicon glyphicon-pencil editar_programacion" type="button" data-programacion="'+items.id+'" data-toggle="modal" data-target="#modal_editar_programcion"></button></td>'+
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
                                    '<td><button class="btn btn-primary glyphicon glyphicon-pencil" type="button"></button></td>'+
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
                                    '<td><button class="btn btn-primary glyphicon glyphicon-pencil" type="button"></button></td>'+
                                '</tr>';                            
                        });
                        $("#tabla_testimonios").html(tabla_testimonios);
                    });                    
                });
                $(".ver_galerias").on("click",function(){
                    var evento=$(this).data("evento");
                    $.ajax({
                      method: "POST",
                      url: "<?=  base_url()?>admin/traer_galerias_evento",
                      data: { evento: evento}
                    })
                    .done(function( data ) {
                        var result= $.parseJSON(data);
                        var galeria='';      
                        $.each(result, function( llave, items) {
                            galeria=galeria+'<div class="col-md-6">'+
                                                '<img src="<?=  base_url()?>assets/img/galerias/'+items.imagen+'" alt="" class="img-rounded" heigth="250" width="250">'+
                                            '</div>';
                        });
                        $("#galeria").html(galeria);
                    });                    
                });
                
                $(document).on("click",".editar_programacion",function(){
                    var conferencia=$(this).data("programacion");
                    $.ajax({
                      method: "POST",
                      url: "<?=  base_url()?>admin/editar_programacion_evento",
                      data: { conferencia: conferencia}
                    })
                    .done(function( data ) {
                        var result= $.parseJSON(data);
                        var lista_conferencistas='<option></option>';
                        var lista_escenarios='<option></option>';
                        $.each(result.conferencistas, function( llave, items) {
                            lista_conferencistas=lista_conferencistas+'<option value="'+items.id+'">'+items.nombre+'</option>';                            
                        });                        
                        $("#conferencista").html(lista_conferencistas);
                        $.each(result.escenarios, function( llave, items) {
                            lista_escenarios=lista_escenarios+'<option value="'+items.id+'">'+items.nombre+'</option>';                            
                        });                        
                        $("#escenario").html(lista_escenarios);
                        $("#id").val(result.conferencia.id);
                        $("#fecha").val(result.conferencia.fecha);
                        $("#duracion").val(result.conferencia.duracion);
                        $("#titulo").val(result.conferencia.titulo);
                        $("#descripcion").val(result.conferencia.descripcion);
                        $("#conferencista").val(result.conferencia.conferencista);
                        $("#escenario").val(result.conferencia.escenario);
                    });
                });
                
                $(document).on("click","#btn_crear_conferencista",function(){
                    var formData = new FormData(document.getElementById("form_crear_conferencista"));
                    $.ajax(
                    {
                        data:formData,
                        type: "POST",
                        url: "<?= base_url()?>admin/crear_conferencista",
                        dataType: "html",
                        cache: false,
                        contentType: false,
                        processData: false
                    }).done(function (res){
                            var result=$.parseJSON(res);
                            var lista=  '';
                            $.each(result, function( llave, items) {
                                lista=lista+'<option value="'+items.id+'">'+items.nombre+'</option>';                                                            
                            });
                        $("#conferencista").html(lista);                               
                    });             
                });                
                
                $("#btn_actualizar_programacion").click(function(){
                    var dataString = $('#actualizar_programacion').serialize();                    
                    $.ajax({
                        type: "POST",
                        url: "<?=  base_url()?>admin/actualizar_programacion",
                        data: dataString
                    });                    
                    $('#modal_programacion').modal('hide');
                });
            });
        </script>        