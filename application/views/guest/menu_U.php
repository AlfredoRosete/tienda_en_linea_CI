<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Carrito de compras</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Lista de pedidos <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Lista de usuarios</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a href="<?= base_url('auth/logout'); ?>" class="btn  my-2 my-sm-0"  type="submit">Cerrar sesion</a>
        </form>
      </div>
    </nav>
