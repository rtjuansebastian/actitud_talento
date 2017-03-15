<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Eventos</h1>
<?php
foreach ($eventos as $evento)
{
?>
                    <button type="button" class="btn btn-primary btn-xs glyphicon glyphicon-pencil navbar-right editar_evento" data-evento="<?=$evento['id']?>" data-toggle="modal" data-target="#modal_editar_evento"></button>
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
                                <td>Color del tema</td>                            
                                <td><img src="<?=  base_url()?>assets/img/<?=$evento['color']?>.png" width="50" height="50"></td>
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
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_crear_programacion" id="crear_programacion">Crear conferencia</button>
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
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_crear_pregunta" id="crear_pregunta">Crear pregunta</button>
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
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_crear_testimonio" id="crear_testimonio">Crear testimonio</button>
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
        <!-- Modal Editar Evento -->
        <div class="modal fade" id="modal_editar_evento" tabindex="-1" role="dialog" aria-labelledby="ModalLabelEditarEvento">
          <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">                
                    <form id="actualizar_evento" enctype="multipart/form-data">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="ModalLabelEditarEvento">Evento</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="id_evento" name="id"> 
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre_evento" name="nombre" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="profesion">País</label>
                                <select class="form-control" id="pais_evento" name="pais">
                                    <option></option>
    <?php
    foreach ($paises as $pais)
    {
    ?>
                                    <option value="<?=$pais['id']?>"><?=$pais['nombre']?></option>
    <?php
    }
    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea class="form-control" rows="3" id="descripcion_evento" name="descripcion"></textarea>                                                        
                            </div>
                            <div class="form-group">
                                <label for="lugar">Lugar</label>
                                <input type="text" class="form-control" id="lugar_evento" name="lugar" required=""/>                                                        
                            </div>
                            <div class="form-group">
                                <label for="fecha">Fecha</label>
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" id="fecha_evento" name="fecha"/>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>                       
                            </div>
                            <div class="form-group">
                                <label for="perfil">Coordenadas</label>
                                <input type="text" class="form-control" id="coordenadas_evento" name="coordenadas" required=""/>                                                        
                            </div>                        
                            <div class="form-group">
                                <label for="cupos">Cupos</label>
                                <input type="number" class="form-control" id="cupos_evento" name="cupos" required=""/>                                                        
                            </div>
                            <div class="form-group">
                                <label for="dias">Días</label>
                                <input type="number" class="form-control" id="dias_evento" name="dias" required=""/>                                                        
                            </div>        
                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" class="form-control" id="telefono_evento" name="telefono" required=""/>                                                        
                            </div>                  
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email_evento" name="email" required=""/>                                                        
                            </div>                                          
                            <div class="form-group">
                                <label for="video">Video</label>
                                <input type="text" class="form-control" id="video_evento" name="video" required=""/>                                                        
                            </div>
                            <div class="form-group">
                                <label for="profesion">Color</label>
                                <select class="form-control image-picker show-html" id="color" name="color">
                                    <option data-img-src="http://cambioycultura.org/assets/img/blue-1.png" value="blue-1">Azul 1</option>
                                    <option data-img-src="http://cambioycultura.org/assets/img/blue-2.png" value="blue-2">Azul 2</option>
                                    <option data-img-src="http://cambioycultura.org/assets/img/green-1.png" value="green-1">Verde 1</option>
                                    <option data-img-src="http://cambioycultura.org/assets/img/green-2.png" value="green-2">Verde 2</option>
                                    <option data-img-src="http://cambioycultura.org/assets/img/orange-1.png" value="orange-1">Naranja 1</option>
                                    <option data-img-src="http://cambioycultura.org/assets/img/orange-2.png" value="orange-2">Naranja 2</option>
                                    <option data-img-src="http://cambioycultura.org/assets/img/pink.png" value="pink">Rosa</option>
                                    <option data-img-src="http://cambioycultura.org/assets/img/purple-1.png" value="purple-1">Morado 1</option>
                                    <option data-img-src="http://cambioycultura.org/assets/img/purple-2.png" value="purble-2">Morado 2</option>
                                    <option data-img-src="http://cambioycultura.org/assets/img/red-1.png" value="red-1">Rojo 1</option>
                                    <option data-img-src="http://cambioycultura.org/assets/img/red-2.png" value="red-2">Rojo 2</option>
                                    <option data-img-src="http://cambioycultura.org/assets/img/yellow-1.png" value="yellow-1">Amarillo 1</option>
                                    <option data-img-src="http://cambioycultura.org/assets/img/yellow-2.png" value="yellow-2">Amarillo 2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="imagen_fondo" class="col-sm-2"><p class="text-left">Imagen de Fondo</p></label>
                                <input type="file" class="form-control" name="imagen_fondo" id="imagen_fondo_evento"/>
                            </div>                       
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="text" class="form-control" id="twitter_evento" name="twitter"/>                            
                            </div>
                            <div class="form-group">
                                <label for="twitter">Dribbble</label>
                                <input type="text" class="form-control" id="dribbble_evento" name="dribbble"/>                            
                            </div>                        
                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input type="text" class="form-control" id="facebook_evento" name="facebook"/>                                
                            </div>                        
                            <div class="form-group">
                                <label for="google_plus">Google Plus</label>
                                <input type="text" class="form-control" id="google_plus_evento" name="google_plus"/>                            
                            </div>
                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input type="text" class="form-control" id="instagram_evento" name="instagram"/>                            
                            </div>
                            <div class="form-group">
                                <label for="pinterest">Pinterest</label>
                                <input type="text" class="form-control" id="pinterest_evento" name="pinterest"/>                            
                            </div>                        
                            <div class="form-group">
                                <label for="skype">Skype</label>
                                <input type="text" class="form-control" id="skype_evento" name="skype"/>                            
                            </div>     
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_eliminar_evento">Eliminar evento</button>
                          <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn_actualizar_evento">Guardar</button>
                        </div>
                    </form>                        
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
                            <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_eliminar_programacion">Eliminar</button>
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
        <!-- Modal editar pregunta -->
        <div class="modal fade" id="modal_editar_pregunta" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCrearConferencista">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form id="form_editar_pregunta">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="ModalLabelCrearConferencista">Editar pregunta</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="id_pregunta" name="id">
                            <div class="form-group">
                                <label for="nombre">Pregunta</label>
                                <input type="text" class="form-control" id="pregunta" name="pregunta" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="profesion">Respuesta</label>
                                <textarea class="form-control" rows="3" id="respuesta" name="respuesta" required=""></textarea>
                            </div>                             
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_eliminar_pregunta">Eliminar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn_editar_pregunta">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal editar testimonio -->
        <div class="modal fade" id="modal_editar_testimonio" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCrearConferencista">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form id="form_editar_testimonio" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="ModalLabelCrearConferencista">Editar testimonio</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="id_testimonio" name="id">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre_testimonio" name="nombre" required=""/>                            
                            </div>                               
                            <div class="form-group">
                                <label for="nombre">Testimonio</label>
                                <textarea class="form-control"rows="3" id="testimonio" name="testimonio" required=""></textarea>
                            </div>
                            <div class="form-group">
                                <label for="imagen" class="col-sm-2"><p class="text-left">Imagen</p></label>
                                <input type="file" class="form-control" name="imagen" id="imagen_testimonio"/>
                            </div>                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_eliminar_testimonio">Eliminar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn_editar_testimonio">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>        
        <!-- Modal editar galeria -->
        <div class="modal fade" id="modal_editar_galeria" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCrearConferencista">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form id="form_editar_galeria" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="ModalLabelCrearConferencista">Editar galeria</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="id_galeria" name="id">
                            <input type="hidden" id="evento_galeria" name="evento">
                            <div class="form-group">
                                <label for="imagen" class="col-sm-2"><p class="text-left">Imagen</p></label>
                                <input type="file" class="form-control" name="imagen" id="imagen_galeria"/>
                            </div>                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn_editar_galeria">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal crear programacion -->
        <div class="modal fade" id="modal_crear_programacion" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCrearProgramacion">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form id="form_crear_programacion" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="ModalLabelCrearProgramacion">Crear Conferencia</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="evento_crear_programacion" name="evento"> 
                            <div class="form-group">
                                <label for="fecha">Fecha</label>
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" id="fecha" name="fecha"/>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>                       
                            </div> 
                            <div class="form-group">
                                <label for="perfil">Duración</label>
                                <input type="number" class="form-control" id="duracion" name="duracion" required=""/>                                                        
                            </div>                         
                            <div class="form-group">
                                <label for="nombre">Titulo</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="perfil">Descripción</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" required=""/>                                                        
                            </div>
                            <div class="form-group conferencistas">
                                <label for="conferencista">Conferencista</label>
                                <select class="form-control" id="conferencista_crear_programacion" name="conferencista">
                                    <option></option>
                                </select>
                                <span>¿Nuevo conferencista? </span><button type="button" class="btn btn-success btn-xs glyphicon glyphicon-user" data-toggle="modal" data-target="#modal_crear_conferencista" id="crear_conferencista"></button>
                            </div>
                            <div class="form-group">
                                <label for="escenario">Escenario</label>
                                <select class="form-control" id="escenario_crear_programacion" name="escenario">
                                    <option></option>
                                </select>                            
                            </div>                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn_crear_programacion">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
        <!-- Modal crear pregunta -->
        <div class="modal fade" id="modal_crear_pregunta" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCrearPregunta">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form id="form_crear_pregunta" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="ModalLabelCrearPregunta">Crear Pregunta</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="evento_crear_pregunta" name="evento">                       
                            <div class="form-group">
                                <label for="pregunta">Pregunta</label>
                                <input type="text" class="form-control" id="pregunta" name="pregunta" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="respuesta">Respuesta</label>
                                <textarea class="form-control"rows="3" id="respuesta" name="respuesta" required=""></textarea>
                            </div>                         
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn_crear_pregunta">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal crear testimonio -->
        <div class="modal fade" id="modal_crear_testimonio" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCrearTestimonio">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form id="form_crear_testimonio" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="ModalLabelCrearTestimonio">Crear Testimonio</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="evento_crear_testimonio" name="evento">                       
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required=""/>                                                        
                            </div>                              
                            <div class="form-group">
                                <label for="testimonio">Testimonio</label>
                                <textarea class="form-control"rows="3" id="testimonio" name="testimonio" required=""></textarea>
                            </div>                   
                            <div class="form-group">
                                <label for="imagen" class="col-sm-2"><p class="text-left">Imagen</p></label>
                                <input type="file" class="form-control" name="imagen" id="imagen_testimonio"/>
                            </div>                             
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn_crear_testimonio">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>        
<?php $this->load->view("admin/footer"); ?>
        <script>
            $(document).ready(function(){        
                
                $("#color").imagepicker();
                var conferencistas;
                var escenarios;
                function traer_conferencistas()
                {
                    $.ajax(
                    {
                        type: "POST",
                        url: "<?= base_url()?>admin/traer_conferencistas",
                        async:false,
                        success:function(data)
                        {
                            var result=$.parseJSON(data);
                            conferencistas=result;
                        }
                    });

                    return conferencistas;
                }                
                
                function traer_escenarios_evento(evento)
                {
                    $.ajax(
                    {
                        type: "POST",
                        data: {evento:evento},
                        url: "<?= base_url()?>admin/traer_escenarios_evento",
                        async:false,
                        success:function(data)
                        {
                            var result=$.parseJSON(data);
                            escenarios=result;
                        }
                    });

                    return escenarios;
                }                                
                
                $('.date').datetimepicker({
                    locale:'es',
                    format:"YYYY-MM-DD HH:mm"
                });                
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
                        $("#crear_programacion").data("evento",evento);
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
                                    '<td><button class="btn btn-primary glyphicon glyphicon-pencil editar_pregunta" type="button" data-pregunta="'+items.id+'" data-toggle="modal" data-target="#modal_editar_pregunta"></button></td>'+
                                '</tr>';                            
                        });
                        $("#tabla_preguntas").html(tabla_preguntas);
                        $("#crear_pregunta").data("evento",evento);
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
                                    '<td><button class="btn btn-primary glyphicon glyphicon-pencil editar_testimonio" type="button" data-testimonio="'+items.id+'" data-toggle="modal" data-target="#modal_editar_testimonio"></button></td>'+
                                '</tr>';                            
                        });
                        $("#tabla_testimonios").html(tabla_testimonios);
                        $("#crear_testimonio").data("evento",evento);
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
                                                '<button class="btn btn-primary glyphicon glyphicon-pencil editar_galeria" type="button" data-galeria="'+items.id+'" data-toggle="modal" data-target="#modal_editar_galeria"></button>'+
                                            '</div>';
                        });
                        $("#galeria").html(galeria);
                    });                    
                });
                
                $(document).on("click",".editar_evento",function(){
                    var evento=$(this).data("evento");
                    $.ajax({
                      method: "POST",
                      url: "<?=  base_url()?>admin/editar_evento_evento",
                      data: { evento: evento}
                    })
                    .done(function( data ) {                        
                        var result= $.parseJSON(data);
                        $("#id_evento").val(result.id);
                        $("#nombre_evento").val(result.nombre);
                        $("#pais_evento").val(result.pais);
                        $("#descripcion_evento").val(result.descripcion);
                        $("#lugar_evento").val(result.lugar);
                        $("#fecha_evento").val(result.fecha);
                        $("#coordenadas_evento").val(result.coordenadas);
                        $("#cupos_evento").val(result.cupos);
                        $("#dias_evento").val(result.dias);
                        $("#telefono_evento").val(result.telefono);
                        $("#email_evento").val(result.email);
                        $("#video_evento").val(result.video);
                        $("#color").val(result.color);
                        $("#twitter_evento").val(result.twitter);
                        $("#dribbble_evento").val(result.dribbble);
                        $("#facebook_evento").val(result.facebook);
                        $("#google_plus_evento").val(result.google_plus);
                        $("#instagram_evento").val(result.instagram);
                        $("#pinterest_evento").val(result.pinterest);
                        $("#skype_evento").val(result.skype);   
                    });
                });
                
                
                $("#btn_actualizar_evento").click(function(){
                    var formData = new FormData(document.getElementById("actualizar_evento"));
                    $.ajax(
                    {
                        data:formData,
                        type: "POST",
                        url: "<?= base_url()?>admin/actualizar_evento_evento",
                        dataType: "html",
                        cache: false,
                        contentType: false,
                        processData: false
                    });                
                    location.reload();
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
                        
                        $("#btn_eliminar_programacion").data("programacion",conferencia);
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
                        url: "<?=  base_url()?>admin/actualizar_programacion_evento",
                        data: dataString
                    });                    
                    $('#modal_programacion').modal('hide');
                });
                
                $(document).on("click",".editar_pregunta",function(){
                    var pregunta=$(this).data("pregunta");
                    $.ajax({
                      method: "POST",
                      url: "<?=  base_url()?>admin/editar_pregunta_evento",
                      data: { pregunta: pregunta}
                    })
                    .done(function( data ) {
                        var result= $.parseJSON(data);
                        $("#id_pregunta").val(result.id);
                        $("#pregunta").val(result.pregunta);
                        $("#respuesta").val(result.respuesta);
                        
                        $("#btn_eliminar_pregunta").data("pregunta",pregunta);
                    });
                });
                
                
                $("#btn_editar_pregunta").click(function(){
                    var dataString = $('#form_editar_pregunta').serialize();                    
                    $.ajax({
                        type: "POST",
                        url: "<?=  base_url()?>admin/actualizar_pregunta_evento",
                        data: dataString
                    });
                    $('#modal_preguntas').modal('hide');
                });
                
                $(document).on("click",".editar_testimonio",function(){
                    var testimonio=$(this).data("testimonio");
                    $.ajax({
                      method: "POST",
                      url: "<?=  base_url()?>admin/editar_testimonio_evento",
                      data: { testimonio: testimonio}
                    })
                    .done(function( data ) {
                        var result= $.parseJSON(data);
                        $("#id_testimonio").val(result.id);
                        $("#nombre_testimonio").val(result.nombre);
                        $("#testimonio").val(result.testimonio);
                        
                        $("#btn_eliminar_testimonio").data("testimonio",testimonio);
                    });
                });
                
                
                $("#btn_editar_testimonio").click(function(){
                    var formData = new FormData(document.getElementById("form_editar_testimonio"));
                    $.ajax(
                    {
                        data:formData,
                        type: "POST",
                        url: "<?= base_url()?>admin/actualizar_testimonio_evento",
                        dataType: "html",
                        cache: false,
                        contentType: false,
                        processData: false
                    });                
                    $('#modal_testimonios').modal('hide');
                    location.reload();
                });
                
                $(document).on("click",".editar_galeria",function(){
                    var galeria=$(this).data("galeria");
                    $.ajax({
                      method: "POST",
                      url: "<?=  base_url()?>admin/editar_galeria_evento",
                      data: { galeria: galeria}
                    })
                    .done(function( data ) {
                        var result= $.parseJSON(data);
                        $("#id_galeria").val(result.id);
                        $("#evento_galeria").val(result.evento);
                    });
                });
                
                
                $("#btn_editar_galeria").click(function(){
                    var formData = new FormData(document.getElementById("form_editar_galeria"));
                    $.ajax(
                    {
                        data:formData,
                        type: "POST",
                        url: "<?= base_url()?>admin/actualizar_galeria_evento",
                        dataType: "html",
                        cache: false,
                        contentType: false,
                        processData: false
                    });                
                    $('#modal_galerias').modal('hide');
                    location.reload();
                });
                
                $("#crear_programacion").click(function(){
                    var evento=$(this).data("evento");
                    var listado_conferencistas=traer_conferencistas(); 
                    var lista='<option></option>';
                    $.each(listado_conferencistas, function( llave, items) {
                        lista=lista+'<option value="'+items.id+'">'+items.nombre+'</option>';                                                            
                    });       
                    $("#conferencista_crear_programacion").html(lista);
                    var listado_escenarios=traer_escenarios_evento(evento);
                    lista='<option></option>';
                    $.each(listado_escenarios, function( llave, items) {
                        lista=lista+'<option value="'+items.id+'">'+items.nombre+'</option>';                                                            
                    }); 
                    $("#escenario_crear_programacion").html(lista);
                    $("#evento_crear_programacion").val(evento);
                });
                
                $("#btn_crear_programacion").click(function(){
                    var formData = new FormData(document.getElementById("form_crear_programacion"));
                    $.ajax(
                    {
                        data:formData,
                        type: "POST",
                        url: "<?= base_url()?>admin/crear_programacion_evento",
                        dataType: "html",
                        cache: false,
                        contentType: false,
                        processData: false
                    });                
                    $('#modal_programacion').modal('hide');              
                });
                $("#crear_pregunta").click(function(){
                    var evento=$(this).data("evento");
                    $("#evento_crear_pregunta").val(evento);
                });
                
                $("#btn_crear_pregunta").click(function(){
                    var formData = new FormData(document.getElementById("form_crear_pregunta"));
                    $.ajax(
                    {
                        data:formData,
                        type: "POST",
                        url: "<?= base_url()?>admin/crear_pregunta_evento",
                        dataType: "html",
                        cache: false,
                        contentType: false,
                        processData: false
                    });                
                    $('#modal_preguntas').modal('hide');              
                });
                $("#crear_testimonio").click(function(){
                    var evento=$(this).data("evento");
                    $("#evento_crear_testimonio").val(evento);
                });
                
                $("#btn_crear_testimonio").click(function(){
                    var formData = new FormData(document.getElementById("form_crear_testimonio"));
                    $.ajax(
                    {
                        data:formData,
                        type: "POST",
                        url: "<?= base_url()?>admin/crear_testimonio_evento",
                        dataType: "html",
                        cache: false,
                        contentType: false,
                        processData: false
                    });                
                    $('#modal_testimonios').modal('hide');              
                });
                
                $("#btn_eliminar_programacion").click(function(){
                    var programacion=$(this).data("programacion");
                    $.ajax({
                        type: "POST",
                        url: "<?=  base_url()?>admin/eliminar_programacion_evento",
                        data: {programacion:programacion}
                    });                    
                    $('#modal_programacion').modal('hide');                    
                });
                
                $("#btn_eliminar_pregunta").click(function(){
                    var pregunta=$(this).data("pregunta");
                    $.ajax({
                        type: "POST",
                        url: "<?=  base_url()?>admin/eliminar_pregunta_evento",
                        data: {pregunta:pregunta}
                    });                    
                    $('#modal_preguntas').modal('hide');                    
                }); 
                
                $("#btn_eliminar_testimonio").click(function(){
                    var testimonio=$(this).data("testimonio");
                    $.ajax({
                        type: "POST",
                        url: "<?=  base_url()?>admin/eliminar_testimonio_evento",
                        data: {testimonio:testimonio}
                    });                    
                    $('#modal_testimonios').modal('hide');                    
                }); 
                
                $("#btn_eliminar_evento").click(function(){
                    if(confirm('¿Estas seguro de eliminar este evento?'))
                    {
                        var id= $("#id_evento").val();
                        $.ajax(
                        {
                            method: "POST",
                            url: "<?php echo base_url(); ?>admin/eliminar_evento",
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