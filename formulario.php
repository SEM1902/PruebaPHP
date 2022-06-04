<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
		<label for="codigo">Referencia:</label>
		<input class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escriba la Referencia">

		<label for="descripcion">Nombre:</label>
		<textarea required id="descripcion" name="descripcion"  class="form-control"></textarea>

		<label for="precioVenta">Peso:</label>
		<input class="form-control" name="peso" required type="number" id="precioVenta" placeholder="Peso del producto en gr">

		<label for="precioCompra">Precio</label>
		<input class="form-control" name="precioCompra" required type="number" id="precioCompra" placeholder="Precio de Producto">

		<label for="existencia">Stock:</label>
		<input class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">

		<label for="precioCompra">Fecha:</label>
		<input class="form-control" name="fec_registro" required type="date" id="fec_registro">
		
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>