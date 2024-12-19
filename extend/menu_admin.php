<nav>
  <a href="" data-activates="menu" class="button-collpase" ><i class="material-icons">menu</i></a>
</nav>
<ul id="menu" class="side-nav fixed grey lighten-4" >
  <li>
    <div class="userView" >
      <div class="background">
        <img src="../img/logo.jpeg"  >
      </div>
      <a href="../perfil/index.php">
        <img src="../usuarios/<?php echo $_SESSION['foto']; ?>" class="circle" alt="">
      </a>
      <br>
      <br>
      <br>
      <a href="../perfil/perfil.php" class="green-text"><?php echo $_SESSION['nombre']; ?></a>
      <a href="" class="green-text"><?php echo $_SESSION['correo']; ?></a>
    </div>
  </li>
  <li><a href="../inicio/index.php"><i class="material-icons">home</i> INICIO</a></li>
  <li><div class="divider"></div></li>

  <li><a href="../clientes/index.php"><i class="material-icons">person_add</i> ALTA DE CLIENTES</a></li>
  <li><div class="divider"></div></li>

  <li><a href="../detalleVenta/index.php"><i class="material-icons">insert_chart</i> DETALLE DE VENTA</a></li>
  <li><div class="divider"></div></li>

  <li><a href="../productos/index.php"><i class="material-icons">category</i> ALTA DE PRODUCTOS</a></li>
  <li><div class="divider"></div></li>

  <li><a href="../usuarios/index.php"><i class="material-icons">group_add</i> ALTA USUARIOS</a></li>
  <li><div class="divider"></div></li>

  <li><a href="../venta/index.php"><i class="material-icons">shopping_cart</i> ALTA DE VENTA</a></li>
  <li><div class="divider"></div></li>

  <li><a href="../index.php"><i class="material-icons">exit_to_app</i> Salir</a></li>
  <li><div class="divider"></div></li>

</ul>
