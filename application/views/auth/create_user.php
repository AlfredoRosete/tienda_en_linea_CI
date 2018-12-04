



<div class="container">
  






<div class="card">
  <div class="card-body">

    <?php echo form_open("auth/create_user",'class="form-signin"');?>


<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_user");?>
<div class="text-center mb-4">
        <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <u class="blog-header-logo text-dark" href="#">
          <h1>
            Registra Usuario
          </h1>
        </u>
      
      <div id="infoMessage"></div>

      <p>Por favor llene los datos correctamente.</p>


      </div>

      <div class="form-group">
        <!-- <input type="text" name="identity" value="" id="identity"  class="form-control" placeholder="Correo"  />-->

          <?php echo form_input($first_name,'','class="form-control "placeholder="Nombre" ');?>
      </div>

      <div class="form-group">

        <?php echo form_input($last_name,'','class="form-control "  placeholder="Apellidos" ');?>
      </div>


 <?php
      if($identity_column!=='email') {
          echo form_error('identity');
          echo form_input($identity,'','class="form-control"');
          echo '<label for="inputPassword">Contraseña</label>';
      }
      ?>

      <div class="form-group">

<?php echo form_input($email,'','class="form-control " placeholder="Correo" "');?>

</div>

      <div class="form-group">

<?php echo form_input($phone,'','class="form-control" placeholder="Telefono" ');?>

</div>
      <div class="form-group">

<?php echo form_input($password,'','class="form-control" placeholder="Contraseña" ');?>

</div>
      <div class="form-group">

<?php echo form_input($password_confirm,'','class="form-control" placeholder="Confirmar contraseña" ');?>

</div>
 <p><?php echo form_submit('submit', 'Crear Usuario','class="btn btn-lg btn-primary btn-block"');?></p>
  </div>
</div>










</p>

<?php echo form_close();?>


</div>



