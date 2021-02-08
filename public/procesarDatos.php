<?php
function conPun ($num)
{
    if ($num == 2) {
        $num = $num - 1; 
    } elseif ($num == 3) {
        $num = $num - 2; 
    } 
    return $num;
}

    $nombre=$_POST ["inputNombre"];
    $direccion=$_POST ["inputDireccion"];
    $edad=$_POST ["inputEdad"];
    $sexo=$_POST ["inputSexo"];
    $telefono=$_POST ["inputTelefono"];
    $p1=$_POST ["pregunta1"];
    $p2=$_POST ["pregunta2"];
    $p3=$_POST ["pregunta3"];
    $p4=$_POST ["pregunta4"];
    $p5=$_POST ["pregunta5"];
    $p6=$_POST ["pregunta6"];
    $p7=$_POST ["pregunta7"];
    $tipo= "";
    $suma= $p1 + $p2 + $p3 + $p4 + $p5 + $p6 + $p7;
    $sumanaranja= conPun($p1) + conPun($p2) + conPun($p3) + conPun($p4) + conPun($p5) + conPun($p6) + conPun($p7);

    if ($p3 > 1 || $suma >= 10 || $sumanaranja > 4){
        $tipo = "urgencias";
    }

    elseif ($suma <= 8 && $suma > 6 || $sumanaranja == 3 || $sumanaranja == 4) {
        $tipo = "consulta externa";
    }

    elseif ($sumanaranja < 3) {
        $tipo = "adios";
    }

 
try {
    $db = new PDO ('mysql:host=127.0.0.1;dbname=covid_19;charset=utf8','root','');
    echo 'Conexion Establecida';
    
    $query = "INSERT INTO pacientes (nombre, direccion, telefono, edad, sexo, tipo) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $db->prepare($query);
    $exito = $stmt->execute([$nombre, $direccion, $telefono, $edad, $sexo, $tipo]);

} catch (PDOException $errCon) {
    echo 'Error de conexion a la base:'.$errCon -> getMessage ();
} catch (PDOException $ex) {
    echo 'Ocurrio un error inesperado:'.$ex -> getMessage ();
} 

?>
