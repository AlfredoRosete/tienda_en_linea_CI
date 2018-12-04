<div class="container">
  

<div class="card">
  <div class="card-body">

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

        <p><?php echo form_submit('submit', lang('login_submit_btn'),'class="btn btn-lg btn-primary btn-block"');?></p>


        <?php echo form_close();?>
</div>
</div>
</div>
  