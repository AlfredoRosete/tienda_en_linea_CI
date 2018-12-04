<div class="container">
 
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>

  <div class="row justify-content-center">
    <div class="col-7">
      <div class="card">
  <div class="card-body">
	<div class="row  justify-content-md-center ">

<div class="col align-self-center">
	     <div class="text-center mb-4">
        <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <u class="blog-header-logo text-dark" href="#">
          <h1>
            <i>Agregar Caracteristicas </i>
          </h1>
        </u> 
    </div>

<?php echo form_open("Secciones/agregar_detalles",'class="form-signin"');?>

     


      <input type="hidden" value="<?= $id_seccion ?>" name="id_seccion"> 

		<select name="tipo_ds" class="form-control">
		  <option>Elementos</option>
		      <option value="Entrada">Entrada</option>
		      <option value="Plato_fuete">Plato fuerte</option>
		      <option value="postre">Postre</option>
		      <option value="interior">Interior</option>
		      <option value="exterior">Exterior</option>
		</select>
<br>





 <div class="field_wrapper">

    	 <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text">
      	<a href="javascript:void(0);" class="add_button" title="Add field">

      		Agregar Elemento
      	</a>
      </div>
    </div>
        <input type="text" class="form-control" name="field_name[]" value=""/>
  </div>

        
</div>

        <p><?php echo form_submit('submit', 'Agregar','class="btn btn-lg btn-primary btn-block"');?></p>


        <?php echo form_close();?>
</div>





 

	
<?php 	
 ?>
</div>
</div>
</div>
    </div>
  

  <div class="col-5">
<div class="table-responsive">
<table id="ls_paquete_categoria" class="table table-striped table-bordered">
	  <thead>
	<tr>
		<th>Nombre de la seccion</th>
		<th>Elementos </th>
	</tr>
	  </thead>
	<tbody>
	<?php  
		if( !empty($detalle_secciones) ) {
	foreach($detalle_secciones as $detalle_seccione) {?>
		<tr>
            <td><?= $detalle_seccione->tipo_ds ?></td>
            <td><?= $detalle_seccione->elemento ?></td>
		
		</tr>
	<?php
	 }
	  }
	 ?>
    </tbody>


</table>
</div>
</div>


  </div>



</div>






<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input class="form-control" type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img style="width: 5%"src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWU7sZesFz3vz2n7N6jdIa_DCuL008SU6jI6I19b4WWDzHx2ANWQ"/></a></div><br/>'; //New input field html 
    var x = 1; //Initial field counter is 1
    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
