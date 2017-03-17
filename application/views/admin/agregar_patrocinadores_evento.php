<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <h1>Patrocinadores del evento</h1>
            <form method="post" action="<?=  base_url()?>admin/agregar_patrocinadores_evento">                            
                <div class="row" id="patrocinadores">
                    <div class="col-md-6" id="patrocinador_1">                        
                        <input type="hidden" id="evento" name="evento[]" value="<?=$evento?>">
                        <div id="lista_patrocinadores">
                            <div class="form-group">
                                <label for="patrocinadores">Patrocinadores</label>
                                <select class="form-control selectpicker" id="patrocinador1" name="patrocinador[]">
                                    <option></option>
    <?php
    foreach ($patrocinadores as $patrocinador)
    {
    ?>
                                    <option value="<?=$patrocinador['id']?>"><?=$patrocinador['nombre']?></option>
    <?php
    }
    ?>
                                </select>                            
                            </div>
                            <div class="form-group">
                                <label for="patrocinadores">Precios</label>
                                <select class="form-control selectpicker" id="precio1" name="precio[]">
                                    <option></option>
    <?php
    foreach ($precios_patrocinadores as $precio)
    {
    ?>
                                    <option value="<?=$precio['id']?>"><?=$precio['nombre']?>. <?=$precio['precio']?></option>
    <?php
    }
    ?>
                                </select>                            
                            </div>                            
                        </div>
                    </div>                
                </div>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_crear_patrocinador">Crear patrocinador</button>
                <button type="button" class="btn btn-primary" id="agregar_otro_patrocinador">Agregar otro patrocinador</button>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
<!-- Modal -->
<div class="modal fade" id="modal_crear_patrocinador" tabindex="-1" role="dialog" aria-labelledby="ModalLabelCrearPatrocinador">
    <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="form_crear_patrocinador" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="ModalLabelCrearPatrocinador">Agregar un patrocinador nuevo</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nombre">nombre del patrocinador</label>
                            <input class="form-control" type="text" id="nombre" name="nombre" required=""/> 
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción del patrocinador</label>
                            <textarea class="form-control" rows="3" id="descripcion" name="descripcion"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input class="form-control" type="text" id="url" name="url" required=""/>
                        </div>
                        <div class="form-group">
                            <label for="imagen_patrocinador">Imagen</label>
                            <input class="form-control" type="file" id="imagen_patrocinador" name="imagen_patrocinador" required="" />
                        </div>                        

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" id="btn_agregar_patrocinador" data-dismiss="modal">Agregar</button>
                    </div>
                </form>
            </div>
    </div>
</div>
<?php $this->load->view("admin/footer");?> 
<script>
    $(document).ready(function(){
        $("#btn_agregar_patrocinador").click(function(){
            var formData = new FormData(document.getElementById("form_crear_patrocinador"));
            $.ajax(
            {
                data:formData,
                type: "POST",
                url: "<?= base_url()?>admin/crear_patrocinador",
                dataType: "html",
                cache: false,
                contentType: false,
                processData: false
            }).done(function (res){
                    var result=$.parseJSON(res);
                    var lista=  '<div class="form-group"><label for="patrocinadores">Patrocinadores</label>'+
                                '<select class="form-control selectpicker" id="patrocinadores" name="patrocinadores" multiple="">'+
                                    '<option></option>';
                    $.each(result, function( llave, items) {
                        lista=lista+'<option value="'+items.id+'">'+items.nombre+'</option>';                            
                    });
                lista=lista+ '</select></div>';   
                $("#lista_patrocinadores").html(lista);                
                $('.selectpicker').selectpicker();                
            });             
        });
        var i=2;
        $("#agregar_otro_patrocinador").click(function(){
            var patrocinador=   '<div class="col-md-6" id="patrocinador_'+i+'">'+
                                    '<input type="hidden" id="evento" name="evento[]" value="<?=$evento?>">'+
                                    '<div id="lista_patrocinadores">'+
                                        '<div class="form-group">'+
                                            '<label for="patrocinadores">Patrocinadores</label>'+
                                            '<select class="form-control selectpicker" id="patrocinador'+i+'" name="patrocinador[]">'+
                                                '<option></option>'+
                <?php
                foreach ($patrocinadores as $patrocinador)
                {
                ?>
                                                '<option value="<?=$patrocinador['id']?>"><?=$patrocinador['nombre']?></option>'+
                <?php
                }
                ?>
                                            '</select>'+
                                        '</div>'+
                                        '<div class="form-group">'+
                                            '<label for="patrocinadores">Precios</label>'+
                                            '<select class="form-control selectpicker" id="precio'+i+'" name="precio[]">'+
                                                '<option></option>'+
                <?php
                foreach ($precios_patrocinadores as $precio)
                {
                ?>
                                                '<option value="<?=$precio['id']?>"><?=$precio['nombre']?>. <?=$precio['precio']?></option>'+
                <?php
                }
                ?>
                                            '</select>'+
                                        '</div>'+                    
                                    '</div>'+
                                '</div>';            
            $("#patrocinadores").append(patrocinador);
            $(".selectpicker").selectpicker();
            i++;
        });
        
        $(document).on("click","#eliminar_patrocinador", function(e){
            $("#patrocinador_"+i).remove();
            i=i-1;
        });         
    });
</script> 