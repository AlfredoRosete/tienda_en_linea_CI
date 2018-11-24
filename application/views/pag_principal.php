<body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#">Mi pedido</a>
          </div>
          <div class="col-4 text-center">
            <u class="blog-header-logo text-dark" href="#">MI EMPRESA</u>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="<?=base_url('auth/login'); ?>">Sign up</a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="#">World</a>
          <a class="p-2 text-muted" href="#">U.S.</a>
          <a class="p-2 text-muted" href="#">Technology</a>
          <a class="p-2 text-muted" href="#">Design</a>
          <a class="p-2 text-muted" href="#">Culture</a>
          <a class="p-2 text-muted" href="#">Business</a>
          <a class="p-2 text-muted" href="#">Politics</a>
          <a class="p-2 text-muted" href="#">Opinion</a>
          <a class="p-2 text-muted" href="#">Science</a>
          <a class="p-2 text-muted" href="#">Health</a>
          <a class="p-2 text-muted" href="#">Style</a>
          <a class="p-2 text-muted" href="#">Travel</a>
        </nav>
      </div>

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>

    </div>

    <style type="text/css">
      .blog-header {
    line-height: 1;
    border-bottom: 1px solid #e5e5e5;
}
.blog-header-logo {
    font-family: "Playfair Display", Georgia, "Times New Roman", serif;
    font-size: 2.25rem;
}
    </style>

    <main role="main" class="container">
      <div class="row">
     
                 <?php 

            foreach ($consulta->result() as $row) {
          ?>

             <div class="col-md-4 ">
                  <div class="card mb-4 shadow-sm " style="word-wrap: break-word; max-width:320px;width:320px;">
                                    
                      <center>
                        <img src="https://eliveg.com/wp-content/uploads/2018/01/cropped-logo_eliveg_fb.png" class="img-circle img-responsive img-thumbnail m-b-10" style="margin-bottom: 10px" alt="profile-image">

                      </center>
                        

<div class="card-body">
                      <h4 class="header-title m-t-40 m-b-10"> <?= $row->name ?>  &nbsp;    <span style="    font-size: 96%;
          " class="badge badge-primary pull-right m-t-0"> Precio:   $<?=  number_format($row->price, 2, '.' , ',') ?>  <i class="zmdi zmdi-trending-up"></i> </span>
          </h4>

           

                  <p class="card-text">
                          
                          <?= $row->description ?>
                           </p>
                            <div class="">
                             <?php if(isset($row->quantity)){  ?>



          <div class="input-group">
                                          <input type="number"  min="1"  id=""   class="form-control" value="<?= $row->quantity  ?>"  placeholder=" Nº Producto"  disabled>
                                          <div class="input-group-btn">
               <button type="button"  class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-20 "  disabled > <span class='glyphicon glyphicon-shopping-cart'></span>Agregado</button>                                         
                                          </div>
                                      </div> 

                                      
                         <?php }else{  ?> 
                              <form class="form-horizontal" role="form">
                                       <div class="input-group">
                                          <input type="number"  min="1"  id="id_product2<?=$row->id_product ?>"   class="form-control" placeholder=" Nº Producto">
                                          <div class="input-group-btn">
               <button type="button"  class="btn btn-info" onclick="add( <?=$row->id_product ?>,<?=$row->price;?>)" ><span class='glyphicon glyphicon-shopping-cart'></span>Agregar al carrito</button>                                         
                                          </div>
                                      </div> 
                                 </form>
                         <?php }  ?> 

                                     

                             </div>
                  </div>
                  </div>
              </div>

          <?php
            }
           ?>



      </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer">
   
        <a href="#">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>