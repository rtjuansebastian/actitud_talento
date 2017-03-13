<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <h1>Programación del evento</h1>
            <form method="post" action="<?=  base_url()?>admin/agregar_programacion_evento">
                <div class="row" id="conferencias">
                    <div class="col-md-6" id="conferencia1">
                        <input type="hidden" id="evento" name="evento[]" value="<?=$evento?>"> 
                        <div class="form-group">
                            <label for="fecha">Fecha conferencia 1</label>
                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" id="fecha" name="fecha[]"/>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>                       
                        </div> 
                        <div class="form-group">
                            <label for="perfil">Duración conferencia 1</label>
                            <input type="number" class="form-control" id="duracion" name="duracion[]" required=""/>                                                        
                        </div>                         
                        <div class="form-group">
                            <label for="nombre">Titulo conferencia 1</label>
                            <input type="text" class="form-control" id="titulo" name="titulo[]" required=""/>
                        </div>
                        <div class="form-group">
                            <label for="perfil">Descripción conferencia 1</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion[]" required=""/>                                                        
                        </div>
                        <div class="form-group conferencistas">
                            <label for="conferencista">Conferencista de la conferencia 1</label>
                            <select class="form-control" id="conferencista" name="conferencista[]">
                                <option></option>
<?php
foreach ($conferencistas as $conferencista)
{
?>
                                <option value="<?=$conferencista['id']?>"><?=$conferencista['nombre']?></option>
<?php
}
?>
                            </select>
                            <span>¿Nuevo conferencista? </span><button type="button" class="btn btn-success btn-xs glyphicon glyphicon-user" data-toggle="modal" data-target="#modal_crear_conferencista" id="crear_conferencista"></button>
                        </div>
                        <div class="form-group">
                            <label for="escenario">Escenario conferencia 1</label>
                            <select class="form-control" id="escenario" name="escenario[]">
                                <option></option>
<?php
foreach ($escenarios as $escenario)
{
?>
                                <option value="<?=$escenario['id']?>"><?=$escenario['nombre']?></option>
<?php
}
?>
                            </select>                            
                        </div>                                                                   
                    </div>               
                </div>
                <button type="button" class="btn btn-default" id="agregar_conferencia">Agregar otra conferencia</button>
                <button type="button" class="btn btn-danger" id="eliminar_conferencia">Eliminar otra conferencia</button>
                <button type="submit" class="btn btn-primary">Crear programación</button>                 
            </form>
        </div>
        <!-- Modal -->
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
<?php $this->load->view("admin/footer");?>
<script>
    $(document).ready(function(){        
        
        var conferencistas;
        var escenarios;
        
        $('#datetimepicker1').datetimepicker({
            locale:'es',
            format:"YYYY-MM-DD HH:mm"
        });
        
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
                    var lista=  '<label for="conferencista">Conferencista</label>'+
                                    '<select class="form-control" id="conferencista" name="conferencista[]">'+
                                        '<option></option>';
                    $.each(result, function( llave, items) {
                        lista=lista+'<option value="'+items.id+'">'+items.nombre+'</option>';                            
                    });
                lista=lista+        '</select>'+
                                '<span>¿Nuevo conferencista? </span><button type="button" class="btn btn-success btn-xs glyphicon glyphicon-user" data-toggle="modal" data-target="#modal_crear_conferencista" id="crear_conferencista"></button>';
                $(".conferencistas").html(lista);                
                $('.selectpicker').selectpicker();                
            });             
        });
        
        var i=2;
        $("#agregar_conferencia").click(function(){            
            var conferencia=    '<div class="col-md-6" id="conferencia'+i+'">'+
                                    '<input type="hidden" id="evento" name="evento[]" value="<?=$evento?>"> '+
                                    '<div class="form-group">'+
                                        '<label for="fecha">Fecha conferencia '+i+'</label>'+
                                        '<div class="input-group date" id="datetimepicker1">'+
                                            '<input type="text" class="form-control" id="fecha" name="fecha[]"/>'+
                                            '<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>'+
                                            '</span>'+
                                        '</div>'+               
                                    '</div>'+
                                    '<div class="form-group">'+
                                        '<label for="perfil">Duración conferencia '+i+'</label>'+
                                        '<input type="number" class="form-control" id="duracion" name="duracion[]" required=""/>'+
                                    '</div>'+
                                    '<div class="form-group">'+
                                        '<label for="nombre">Titulo conferencia '+i+'</label>'+
                                        '<input type="text" class="form-control" id="titulo" name="titulo[]" required=""/>'+
                                    '</div>'+
                                    '<div class="form-group">'+
                                        '<label for="perfil">Descripción conferencia '+i+'</label>'+
                                        '<input type="text" class="form-control" id="descripcion" name="descripcion[]" required=""/>'+
                                    '</div>'+
                                    '<div class="form-group conferencistas">'+
                                        '<label for="conferencista">Conferencista conferencia '+i+'</label>'+
                                        '<select class="form-control" id="conferencista" name="conferencista[]">'+
                                            '<option></option>';
                var result=traer_conferencistas();
                $.each(result, function( llave, items) {
                    conferencia=conferencia+'<option value="'+items.id+'">'+items.nombre+'</option>';                            
                });
                conferencia=conferencia+'</select>'+
                                        '<span>¿Nuevo conferencista? </span><button type="button" class="btn btn-success btn-xs glyphicon glyphicon-user" data-toggle="modal" data-target="#modal_crear_conferencista" id="crear_conferencista"></button>'+
                                    '</div>'+
                                    '<div class="form-group">'+
                                        '<label for="escenario">Escenario conferencia '+i+'</label>'+
                                        '<select class="form-control" id="escenario" name="escenario[]">'+
                                            '<option></option>'+
<?php
foreach ($escenarios as $escenario)
{
?>
                                            '<option value="<?=$escenario['id']?>"><?=$escenario['nombre']?></option>'+
<?php
}
?>
                                        '</select>'+                                        
                                    '</div>'+                                                           
                                '</div>';
            $("#conferencias").append(conferencia);
            $("#datetimepicker"+i).datetimepicker({
                locale:'es',
                format:"YYYY-MM-DD HH:mm"
            });
            i++;
        });
        
        $(document).on("click","#eliminar_conferencia", function(e){
            $("#conferencia"+i).remove();
            i=i-1;
        });        
    });
</script>