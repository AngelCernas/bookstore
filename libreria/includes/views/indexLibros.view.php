<?php
	require_once("header.inc.php");
?>	

</section>
<div class="container">
    <h5 class="title is-5 has-text-centered"> Lista de libros</h5>
    <div class="column is-11 is-offset-1">
        <div>
        <p class="has-text-right"><button class="button is-primary" class="add" aria-label="close" onclick="$('#addUser').addClass('is-active')" ><i class="far fa-plus-square"></i>Agregar libro</button></p>

	<table class="table is-bordered is-striped is-fullwidth">
	  <thead>
	    <tr>
	       	<th>No.</th>
		    <th>Titulo</th>
		    <th>Autor</th>
            <th>Genero</th>
            <th>Idioma</th>
		    <th>Acciones</th>
		    
	    </tr>
	  </thead>
	  <tbody>
      <?php
      $i=1;
      foreach($usrtodos as $usr):
        ?>
		<tr>
	      <th><?php echo $i;?></th>
	      <td><?php echo $usr-> titulo;?></td>
          <td><?php echo $usr-> autor;?></td>
          <td><?php echo $usr-> genero;?></td>
          <td><?php echo $usr-> idioma;?></td>
            
	      <td>
 
  </a><button value="<?php echo $usr->id;?>" class="button is-success" class="button is-primary" onclick="cargaModal($(this).val());"><i class="fas fa-edit"></i> Editar </button>
	      	  <button value="<?php echo $usr->id ?>" class="button is-danger" class="button is-primary" onclick="borrar('delete.php?id=<?php echo $usr->id;?>');"><i class="fas fa-minus-circle"></i>Borrar</button>
	      </td>
	    </tr>

      <?php
        $i++; 
        endforeach; 
        ?>
        </tbody>
        </table>
            <!--p><strong>Nombre: </strong><?php echo $usuario[0] -> titulo;?></p>
            <p><strong>Correo: </strong><?php echo $usuario[0] -> autor;?></p -->
</div>
</div>
</div>
<div class="modal" id="addUser">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Agregar libro </p>
      <button class="delete" aria-label="close" onclick="$('#addUser').removeClass('is-active')"></button>
    </header>
    <section class="modal-card-body">
    <form action="crearUsuario.php" method="post">
<div class="field">
  <label class="label">Titulo</label>
  <div class="control">
    <input class="input" type="text" name="nombre" id="nombre" placeholder="e.g Alex Smith">
  </div>
  <div class="field">
  <label class="label">Autor</label>
  <div class="control">
    <input class="input" type="text" name="nombre" id="nombre" placeholder="e.g Alex Smith">
  </div>
  <div class="field">
  <label class="label">Genero</label>
  <div class="select">
  <select name="admin" id="admin">
    <option value="1">Aventura</option>
    <option value="1">Accion</option>
    <option value="1">Ficcion</option>
    <option value="1">Novelas</option>
  </select>
</div>
<div class="field">
  <label class="label">Idioma</label>
  <div class="control">
    <input class="input" type="text" name="idioma" id="idioma" placeholder="ingles">
  </div>
  <div class="field">
  <label class="label">Resumen</label>
  <div class="control">
  <textarea class="textarea" name="resumen" id="resumen"placeholder="e.g. Hello world"></textarea>
  </div>
</div>

  </div>
</div>

</div>


      <!-- Content ... -->
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success">Guardar Cambios</button>
      <input type="hidden" name="idU" id="idU">
     
    </footer>
  </div>
</div>
</form>

<?php
	require_once("footer.inc.php");
?>