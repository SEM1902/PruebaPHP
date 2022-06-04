<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
	
			<label for="codigo">Referencia</label>
			<input value="<?php echo $producto->codigo ?>" class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe la refrencia">

			<label for="descripcion">Nombre:</label>
			<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"><?php echo $producto->descripcion ?></textarea>

			<label for="peso">Peso:</label>
			<input value="<?php echo $producto->peso ?>" class="form-control" name="peso" required type="number" id="peso" placeholder="Peso">

			<label for="precioCompra">Precio de producto</label>
			<input value="<?php echo $producto->precioCompra ?>" class="form-control" name="precioCompra" required type="number" id="precioCompra" placeholder="Precio de producto">

			<label for="existencia">Stock:</label>
			<input value="<?php echo $producto->existencia ?>" class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">

			<label for="fec_registro">Fecha de producto:</label>
			<input value="<?php echo $producto->fec_registro ?>" class="form-control" name="fec_registro" required type="date" id="fec_registro" placeholder="Cantidad o existencia">
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
