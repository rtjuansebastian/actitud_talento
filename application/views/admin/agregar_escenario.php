<?php $this->load->view("admin/header_admin");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form method="post" action="<?=  base_url()?>admin/agregar_escenario">
                        <div class="form-group">
                            <label for="evento">Evento</label>
                            <select class="form-control" id="evento" name="evento">
<?php
foreach ($eventos as $evento)
{
?>
                                <option value="<?=$evento['id']?>"><?=$evento['nombre']?></option>
<?php
}
?>
                            </select>                        
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required=""/>
                        </div>
                        <div class="form-group">
                            <label for="capacidad">Capacidad</label>
                            <input type="number" class="form-control" id="capacidad" name="capacidad" required=""/>                                                        
                        </div>
                        <button class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
<?php $this->load->view("admin/footer");?>