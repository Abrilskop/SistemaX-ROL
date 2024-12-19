<!-- Llamamos a la cabecera -->
<?php
	include "../extend/header.php";
?>

<!--Panel-->
<div class="row">
  <div class="col s12">
  <div class="card">
    	<div class="card-content">
    		 <center><span class="card-title">VENTAS</span></center>
    		 <p>ALTA DE VENTAS</p>
         <div class="input-field">
          <input type="text" name="descripcion" required autofocus title="DEBE DE CONTENER ENTRE 1 Y 15 CARACTERES, SOLO LETRAS" pattern="[A-Za-z]{1,15}" id="descripcion" onblur="may(this.value, this.id)">
          <label for="descripcion">Descripcion:</label>
        </div>
        <div class="afirmar"></div>
    	</div>
    </div>
  </div>
</div>

<!-- Terminamos la página -->
<?php
	include "../extend/scripts.php";
?>

<!--Botones-->
<div class="fixed-action-btn vertical click-to-toggle " >
  <a  class="btn-floating red">
    <i class="material-icons" >mode_edit</i>
  </a>
  <ul>
    <li><a href="inicio.html" class="btn-floating yellow"><i class="material-icons">add</i></a></li>
    <li><a href="carrito.html" class="btn-floating orange"><i class="material-icons">replay</i></a></li>
    <li><a href="compartido.html" class="btn-floating purple"><i class="material-icons">repeat</i></a></li>
    <li><a href="index.html" class="btn-floating pink"><i class="material-icons">send</i></a></li>
  </ul>
</div>


<script>
  $('.fixed-action-btn').openFAB();
</script>
<script>
  $('.button-collpase').sideNav();
</script>
<!-- Scripts -->
    <script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="./js/materialize.min.js"></script>

</body>
</html>