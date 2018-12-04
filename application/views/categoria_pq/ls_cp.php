<div class="container">

<div class="card">
  <div class="card-body">
	<div class="row ">

<div class="col-6">
	     <div class="text-center mb-4">
        <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <u class="blog-header-logo text-dark" href="#">
          <h1>
            <i>Registrar Categoria </i>
          </h1>
        </u>
<?php echo form_open("Paquetes/Publicar_categoria_paquete",'class="form-signin"');?>



      </div>

    <div class="form-group">
         <?php echo form_input('categoria','','class="form-control " placeholder="Escribe Categoria" ' );?>
    </div>


      <div class="form-group">
    <?php echo form_input('descripcion','','class="form-control  " placeholder="Descripcion de categoria" ');?>
      </div>

        <p><?php echo form_submit('submit', 'Agregar','class="btn btn-lg btn-primary btn-block"');?></p>


        <?php echo form_close();?>
</div>

 

	<div class="col-6 ">


<div class="table-responsive">
<table id="ls_paquete_categoria" class="table table-striped table-bordered">
	  <thead>
	<tr>
		<th>Titulo</th>
		<th>Descripcion</th>
	</tr>
	  </thead>
	<tbody>
	<?php  
		if( !empty($Categorias) ) {
	foreach($Categorias as $categoria) {?>
		<tr>
            <td><?= $categoria->titulo_cp ?></td>
            <td><?= $categoria->descripcion_cp ?></td>
			<!--<td><?php #echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>-->
		</tr>
	<?php
	 }
	  }
	 ?>
    </tbody>


</table>
</div>
</div>
<?php 	
 ?>
</div>
</div>
</div>
</div>

