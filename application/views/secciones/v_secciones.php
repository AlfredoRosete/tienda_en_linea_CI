<div class="container">
 
 <br>
 <br>
<div class="card">
  <div class="card-body">
	<div class="row ">

<div class="col-6">
	     <div class="text-center mb-4">
        <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <u class="blog-header-logo text-dark" href="#">
          <h1>
            <i>Registrar Seccion </i>
          </h1>
        </u>
<?php echo form_open("Secciones/agregar_seccion",'class="form-signin"');?>

      </div>

  <div class="form-group">
    <?php echo form_input('seccion','','class="form-control  " placeholder="Nombre de seccion" ');?>
      </div>


	   <select name="tipo_seccion" class="form-control">
		  <option>Selecciona una seccion</option>
		      <option value="Comida">Comida</option>
		      <option value="Decoracion">Decoracion</option>

		</select>



    
	<select  name="id_cp" class="form-control">
    <option value="">Seleccione un categoria</option>
    <?php foreach ($Categorias as $categoria) {?>
    <option value="<?=$categoria->id_cp;?>"><?=$categoria->titulo_cp;?></option>
    <?php } ?>
	</select>


   <select name="nivel_seccion"   class="form-control">
		  <option>Nivel de seccion</option>
		      <option value="Basico">Basico</option>
		      <option value="Estandar">Estandar</option>
		      <option value="Premium">Premium</option>
		</select>

        <p><?php echo form_submit('submit', 'Agregar','class="btn btn-lg btn-primary btn-block"');?></p>


        <?php echo form_close();?>
</div>

 

	<div class="col-6 ">


<div class="table-responsive">
<table id="ls_paquete_categoria" class="table table-striped table-bordered">
	  <thead>
	<tr>
		<th>Nombre de la seccion</th>
		<th>Categoria de paquete </th>
		<th>tipo de seccion </th>
		<th>Nivel de seccion</th>
		<th>Accion</th>
	</tr>
	  </thead>
	<tbody>
	<?php  
		if( !empty($secciones) ) {
	foreach($secciones as $seccion) {?>
		<tr>
            <td><?= $seccion->nombre_de_seccion ?></td>
            <td><?= $seccion->titulo_cp ?></td>
            <td><?= $seccion->tipo_seccion ?></td>
            <td><?= $seccion->nivel_seccion ?></td>
			<td><?php echo anchor("Secciones/detalle/".$seccion->id_seccion, 'Agregar caracteristicas') ;?></td>
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