<div class="container">
	
<?php 
foreach($Paquetes as $paquete) {
 ?>
	 
      <div class="card">
  <div class="card-body">
  	<h3>Detalles de paquete </h3>

	<div class="row  justify-content-md-center ">

<div class="col align-self-center">
	     <div class="text-center mb-4">
        <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <u class="blog-header-logo text-dark" href="#">
          <h1>
            <i> <?= $paquete->nombre_paquete ?> </i>
            <h6> Titulo de paquete </h6>


          </h1>
        </u> 
    </div>

</div>
</div>
</div>

</div>

<?php } ?>
</div>