   
   <div class="container">
    <br>
       <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center ">
           <table id="ls_pedidos" class="table table-striped table-bordered">
        <thead>
            <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Descripcion</th>
        <th>Codigo de producto</th>
            </tr>
        </thead>
        <tbody>

          <?php 

            foreach ($consulta->result() as $row) {
          ?>
            <tr>
            <td><?= $row->name ?> </td>
            <td>$<?=  number_format($row->price, 2, '.' , ',') ?> </td>
            <td><?= $row->description ?></td>
            <td><?= $row->codigo_producto ?></td>
            </tr>

          <?php 

           }

          ?>
           
        </tbody>
        <tfoot>
            <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Descripcion</th>
            </tr>
        </tfoot>
    </table> 
       </div>
      
   </div>
   
