<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form method="post" action="<?=  base_url()?>admin/agregar_evento" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required=""/>
                        </div>
                        <div class="form-group">
                            <label for="pais">País</label>
                            <select class="form-control selectpicker" id="pais" name="pais">
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
                            <textarea class="form-control" rows="3" id="descripcion" name="descripcion"></textarea>                                                        
                        </div>
                        <div class="form-group">
                            <label for="lugar">Lugar</label>
                            <input type="text" class="form-control" id="lugar" name="lugar" required=""/>                                                        
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" id="fecha" name="fecha"/>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>                       
                        </div>
                        <div class="form-group">
                            <label for="coordenadas">Coordenadas</label>
                            <input type="text" class="form-control" id="coordenadas" name="coordenadas" required=""/>                                                        
                        </div>                        
                        <div class="form-group">
                            <label for="cupos">Cupos</label>
                            <input type="number" class="form-control" id="cupos" name="cupos" required=""/>                                                        
                        </div>
                        <div class="form-group">
                            <label for="dias">Días</label>
                            <input type="number" class="form-control" id="dias" name="dias" required=""/>                                                        
                        </div>        
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono" required=""/>                                                        
                        </div>                  
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required=""/>                                                        
                        </div>                                          
                        <div class="form-group">
                            <label for="video">Video</label>
                            <input type="text" class="form-control" id="video" name="video" required=""/>                                                        
                        </div>                                          
                        <div class="form-group">
                            <label for="imagen_fondo" class="col-sm-2"><p class="text-left">Imagen de Fondo</p></label>
                            <input type="file" class="form-control" name="imagen_fondo" id="imagen_fondo"/>
                        </div>                       
                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="text" class="form-control" id="twitter" name="twitter"/>                            
                        </div>
                        <div class="form-group">
                            <label for="dribbble">Dribbble</label>
                            <input type="text" class="form-control" id="dribbble" name="dribbble"/>                            
                        </div>                        
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" class="form-control" id="facebook" name="facebook"/>                                
                        </div>                        
                        <div class="form-group">
                            <label for="google_plus">Google Plus</label>
                            <input type="text" class="form-control" id="google_plus" name="google_plus"/>                            
                        </div>
                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <input type="text" class="form-control" id="instagram" name="instagram"/>                            
                        </div>
                        <div class="form-group">
                            <label for="pinterest">Pinterest</label>
                            <input type="text" class="form-control" id="pinterest" name="pinterest"/>                            
                        </div>                        
                        <div class="form-group">
                            <label for="skype">Skype</label>
                            <input type="text" class="form-control" id="skype" name="skype"/>                            
                        </div>                                                
                        <button class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
<?php $this->load->view("admin/footer");?>
<script>
    $(document).ready(function(){        
        $('#datetimepicker1').datetimepicker({
            locale:'es',
            format:"YYYY-MM-DD"
        });
    });
</script>