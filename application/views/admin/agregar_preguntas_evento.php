<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <h1>Preguntas frecuentes del evento</h1>
            <form method="post" action="<?=  base_url()?>admin/agregar_preguntas_evento">                            
                <div class="row" id="preguntas">
                    <div class="col-md-6" id="pregunta1">                        
                        <input type="hidden" id="evento" name="evento[]" value="<?=$evento?>">
                        <div class="form-group">
                            <label for="nombre">Pregunta 1</label>
                            <input type="text" class="form-control" id="pregunta" name="pregunta[]" required=""/>
                        </div>
                        <div class="form-group">
                            <label for="capacidad">Respuesta 1</label>
                            <input type="text" class="form-control" id="respuesta" name="respuesta[]" required=""/>                                                        
                        </div>                        
                    </div>                
                </div>
                <button type="button" class="btn btn-default" id="agregar_pregunta">Agregar otra pregunta</button>
                <button type="button" class="btn btn-danger" id="eliminar_pregunta">Eliminar otra pregunta</button>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
<?php $this->load->view("admin/footer");?>
<script>
    $(document).ready(function(){
        var i=2;
        $("#agregar_pregunta").click(function(){
            var pregunta=  '<div class="col-md-6" id="pregunta'+i+'">  '+
                                '<input type="hidden" id="evento" name="evento[]" value="<?=$evento?>">'+
                                '<div class="form-group">'+
                                    '<label for="nombre">Pregunta '+i+'</label>'+
                                    '<input type="text" class="form-control" id="pregunta" name="pregunta[]" required=""/>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<label for="capacidad">Respuesta '+i+'</label>'+
                                    '<input type="text" class="form-control" id="respuesta" name="respuesta[]" required=""/>'+
                                '</div>'+
                            '</div>';
            $("#preguntas").append(pregunta);
            i++;
        });
        
        $(document).on("click","#eliminar_pregunta", function(e){
            $("#pregunta"+i).remove();
            i=i-1;
        });        
    });
</script>  