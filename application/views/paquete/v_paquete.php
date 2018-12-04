<div class="container">

<div class="card">
  <div class="card-body">
	<div class="row ">

<div class="col-6">
	     <div class="text-center mb-4">
        <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <u class="blog-header-logo text-dark" href="#">
          <h1>
            <i>Crear Paquete </i>
          </h1>
        </u> 
         </div>

<?php echo form_open("Paquetes/Publicar_paquete",'class="form-signin"');?>


      <div class="form-group">
    <?php echo form_input('nombre_paquete','','class="form-control  " placeholder="Nombre del paquete" ');?>
      </div>
    
<select name="id_cp" class="form-control">
    <option value="">Seleccione un Categoria</option>
    <?php foreach ($Categorias as $categoria) {?>
    <option value="<?=$categoria->id_cp;?>"><?=$categoria->titulo_cp;?></option>
    <?php } ?>
</select>
<br>

   <select name="nivel_paquete"   class="form-control">
		  <option>Nivel de seccion</option>
		      <option value="Basico">Basico</option>
		      <option value="Estandar">Estandar</option>
		      <option value="Premium">Premium</option>
		</select>
<br>

        <p><?php echo form_submit('submit', 'Crear paquete','class="btn btn-lg btn-primary btn-block"');?></p>


        <?php echo form_close();?>
</div>

 

	<div class="col-6 ">


<div class="table-responsive">
<table id="ls_paquete_categoria" class="table table-striped table-bordered">
	  <thead>
	<tr>
		<th>Titulo</th>
		<th>Tipo de paquete</th>
		<th>Accion</th>
	</tr>
	  </thead>
	<tbody>
	<?php  
		if( !empty($Paquetes) ) {
	foreach($Paquetes as $paquete) {?>
		<tr>
            <td><?= $paquete->nombre_paquete ?></td>
            <td><?= $paquete->titulo_cp ?></td>
			<td><?php echo anchor("Paquetes/v_crear_paquete/".$paquete->id_paquete, 'Ajustar Paquete') ;?></td>
		</tr>
	<?php
	 }
	  }
	 ?>
    </tbody>


</table>
</div>
<a href="<?= base_url() ?>Paquetes/V_registrar" >Registrar usuario</a>
</div>
<?php 	
 ?>
</div>
</div>
</div>
</div>