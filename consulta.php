<?

include 'conectarBD.php';

$profesion = $_GET['profesion'];

$sql = "SELECT * FROM empleados WHERE profesion = '$profesion' ";


if ($resul = $mysqli->query($consulta)) {

    $registros = array();
    
    while ($fila = $resul->fetch_assoc()) {
        $registros[] = $fila;
    }
}


echo Json_encode($registros);

?>
