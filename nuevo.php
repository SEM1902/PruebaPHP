<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["codigo"]) || !isset($_POST["descripcion"]) || !isset($_POST["peso"]) || !isset($_POST["precioCompra"]) || !isset($_POST["existencia"])  || !isset($_POST["fec_registro"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$codigo = $_POST["codigo"];
$descripcion = $_POST["descripcion"];
$peso = $_POST["peso"];
$precioCompra = $_POST["precioCompra"];
$existencia = $_POST["existencia"];
$fec_registro = $_POST["fec_registro"];

$sentencia = $base_de_datos->prepare("INSERT INTO productos(codigo, descripcion, peso, precioCompra, existencia, fec_registro) VALUES (?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$codigo, $descripcion, $peso, $precioCompra, $existencia, $fec_registro]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>