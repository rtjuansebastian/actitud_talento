<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <h1>Patrocinadores del evento</h1>
            <form method="post" action="<?=  base_url()?>admin/agregar_testimonios_evento" enctype="multipart/form-data">                            
                <div class="row" id="testimonios">
                    <div class="col-md-6" id="testimonio1">                        
                        <input type="hidden" id="evento" name="evento[]" value="<?=$evento?>">
                        <div class="form-group">
                            <label for="conferencista">Patrocinadores</label>
                            <select class="form-control selectpicker" id="patrocinadores" name="patrocinadores" multiple="">
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
                    </div>                
                </div>
                <button type="button" class="btn btn-default">Crear patrocinador</button>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
<?php $this->load->view("admin/footer");?> 
<script>
    $(document).ready(function(){
       
    });
</script> 