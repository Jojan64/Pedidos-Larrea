<?php 

     class conectar  {
        public function conexion(){
            $conexion = mysqli_connect('localhost', 'root', '', 'import');
            $conexion->set_charset('utf8');
            return $conexion;
        }
     }

    $elido = $_POST['elid'];

    $poster= ($elido);

    $obj = new conectar();
    $conexion = $obj->conexion();

    $sql="SELECT * from historial ";
    $result = mysqli_query($conexion,$sql);
    // $ver = mysqli_fetch_row($result);

    while ($ver = mysqli_fetch_row($result)) {



        if(($ver[1]) == trim($elido) ){
            echo "<tr>";
             echo "<td>".$ver[0]."</td>";
             echo "<td>".$ver[2]."</td>";
             echo "<td>".$ver[3]."</td>"; 
            echo "</tr>";           
        }else{
        }
    
    }
    // echo ($_POST['elid']);
        // return $datos;  
      // echo json_encode($obj->obtenDatosv($_POST['elid']));
 ?>