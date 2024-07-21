<?php
header("Access-Control-Allow-Origin:*");

require_once '../modelo/modelo_agenda.php';




$request = $_GET['request'];
switch ($request){
    case "agregaragenda":
        agregaragenda();
        break;
    case "obteneragenda":
        obteneragenda();
        break;
    case "eliminaragenda":
        eliminaragenda();
        break;
    case "modificaragenda":
        modificaragenda();
        break;
}

function agregaragenda(){
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $estado = $_POST['estado'];
    $result = (new agenda())->agregaragenda($nombre, $fecha, $hora, $estado);
    echo json_encode($result);
}

function obteneragenda(){
    $result = (new agenda())->obteneragenda();
    echo json_encode($result);
}
  
function eliminaragenda(){
    $id = $_POST['id'];
    $resultado = (new agenda())->eliminaragenda($id);
    echo json_encode($resultado);

}

function modificaragenda(){
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $estado = $_POST['estado'];
    $resultado = (new agenda())->modificaragenda($nombre,$fecha, $hora, $estado);
    echo json_encode($resultado);
}


/*$funcion = $_GET['funcion'];

switch ($funcion) {
    case "agregar":
      agregarAgenda();
    break;
    case "eliminar":
     eliminarAgenda();
    break;
    case "modificar":
        modificarAgenda();
    break;
    case "obtener":
        obtenerAgenda();
    break;

}

function agregarAgenda(){
    //$id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $estado = $_POST['estado'];
    $resultado = (new agenda())->agregarAgenda($nombre, $fecha, $hora, $estado);
    echo json_encode($resultado);
 }

 function modificarAgenda(){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $estado = $_POST['estado'];
    $resultado = (new agenda())->modificarAgenda($id, $nombre, $fecha, $hora, $estado);   
    echo json_encode($resultado) ;
}
function eliminarAgenda(){
    $id = $_POST['id'];
    $resultado = (new agenda())->eliminarAgenda($id);
    echo json_encode($resultado);

}
function obtenerAgenda(){
    $resultado = (new agenda())->obtenerAgenda();   
    echo json_encode($resultado);
}*/
?>