<?

include conectarBD.php;

$profesion = $_GET['profesion'];

$conexion = new mysqli('localhost', 'root', 'root', 'bd_empleados_enl');

$sql = "SELECT * FROM empleados WHERE profesion = '$profesion' ";

$registros = array();

while ($fila = $resul->fetch_assoc()) {
    $registros[] = $fila;
}

echo Json_encode($registros);

?>
