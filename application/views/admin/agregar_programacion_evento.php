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
                        <div class="form-group">
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
<?php $this->load->view("admin/footer");?>
<script>
    $(document).ready(function(){        
        $('#datetimepicker1').datetimepicker({
            locale:'es'
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
                                    '<div class="form-group">'+
                                        '<label for="conferencista">Conferencista conferencia '+i+'</label>'+
                                        '<select class="form-control" id="conferencista" name="conferencista[]">'+
                                            '<option></option>'+
<?php
foreach ($conferencistas as $conferencista)
{
?>
                                            '<option value="<?=$conferencista['id']?>"><?=$conferencista['nombre']?></option>'+
<?php
}
?>
                                        '</select>'+
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
                locale:'es'
            });
            i++;
        });
        
        $(document).on("click","#eliminar_conferencia", function(e){
            $("#conferencia"+i).remove();
            i=i-1;
        });        
    });
</script>