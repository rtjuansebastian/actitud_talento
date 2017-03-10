<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <h1>Escenarios del evento</h1>
            <form method="post" action="<?=  base_url()?>admin/agregar_escenarios_evento">                            
                <div class="row" id="escenarios">
                    <div class="col-md-6" id="escenario1">                        
                        <input type="hidden" id="evento" name="evento[]" value="<?=$evento?>">
                        <div class="form-group">
                            <label for="nombre">Nombre escenario 1</label>
                            <input type="text" class="form-control" id="nombre" name="nombre[]" required=""/>
                        </div>
                        <div class="form-group">
                            <label for="capacidad">Capacidad escenario 1</label>
                            <input type="number" class="form-control" id="capacidad" name="capacidad[]" required=""/>                                                        
                        </div>                        
                    </div>                
                </div>
                <button type="button" class="btn btn-default" id="agregar_escenario">Agregar otro escenario</button>
                <button type="button" class="btn btn-danger" id="eliminar_escenario">Eliminar otro escenario</button>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
<?php $this->load->view("admin/footer");?>
<script>
    $(document).ready(function(){
        var i=2;
        $("#agregar_escenario").click(function(){
            var escenario=  '<div class="col-md-6" id="escenario'+i+'">  '+
                                '<input type="hidden" id="evento" name="evento[]" value="<?=$evento?>">'+
                                '<div class="form-group">'+
                                    '<label for="nombre">Nombre escenario '+i+'</label>'+
                                    '<input type="text" class="form-control" id="nombre" name="nombre[]" required=""/>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<label for="capacidad">Capacidad escenario '+i+'</label>'+
                                    '<input type="number" class="form-control" id="capacidad" name="capacidad[]" required=""/>'+
                                '</div>'+
                            '</div>';
            $("#escenarios").append(escenario);
            i++;
        });
        
        $(document).on("click","#eliminar_escenario", function(e){
            $("#escenario"+i).remove();
            i=i-1;
        });        
    });
</script>    