<title>Cargando</title>

<?php 
    session_start();
   $user = "root";
   $pass="";
   $host="localhost";
   $dataBase="SistemaWeb";
    
    $connection = mysqli_connect($host,$user,$pass,$dataBase);
    if ($connection->connect_error) {
        die("Database connection failed: " . $connection->connect_error);
    }
    
    $matriculaModificar = $_SESSION['matricula'];
    
    $instruccion_SQL="DELETE from tablacoches where matricula='$matriculaModificar'";

    $resultado = mysqli_query($connection, $instruccion_SQL) or die (mysqli_error($connection));

    if(!$resultado){
        echo"Hubo Algun Error";
    }else{
        echo"<script>alert('Se ha eliminado el coche con matricula= $matriculaModificar' ); window.location='mostrarCochesQueAlquilan.php'</script>";
    }