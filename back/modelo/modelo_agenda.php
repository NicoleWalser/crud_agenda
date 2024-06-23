<?php
require_once  '../conexion/conexion.php';

class agenda {

    function obtenerAgenda(){
        $connection = connection();
        $sql = "SELECT * FROM tareas";
        $respuesta = $connection->query($sql);
        $agenda = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $agenda;
    }

    public function agregarAgenda( $nombre, $fecha, $hora, $estado){
       try {
        $sql = "INSERT INTO tereas(id,nombre,fecha,hora,estado) VALUES(0, '$nombre', '$fecha','$hora', '$estado');";
        $connection = connection();
        $respuesta = $connection->query($sql);
        //echo $sql;
        return $respuesta;
       }
        catch(Exception $e){
            $error = $e ->getMessage();
            echo $error;
        }
        
        
    }
  
    function eliminarAgenda($id){
        $connection = connection();
        $sql = "DELETE FROM agenda WHERE (id ='$id');";
        $respuesta = $connection->query($sql);
        return $respuesta;
    }
    
    public function modificarAgenda($id, $nombre, $fecha, $hora, $estado){
        $sql = "UPDATE agenda SET id='$id',nombre ='$nombre',fecha='$fecha',hora='$hora', estado='$estado' WHERE id = $id";  
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;

}
}