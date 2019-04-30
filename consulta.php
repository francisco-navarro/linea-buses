<?
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'conectarBD.php';

$profesion = $_GET['profesion'];

$sql = "SELECT * FROM empleados WHERE profesion = '$profesion' ";

$registros = array();

while ($fila = $resul->fetch_assoc()) {
    $registros[] = $fila;
}

echo Json_encode($registros);

?>
