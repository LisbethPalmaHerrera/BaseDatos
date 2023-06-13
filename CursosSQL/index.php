<!DOCTYPE html>
<html>
    <head>
        <title>Proyecto Bjob</title>
        <meta name="Bjob" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/cursoSQL/style.css" type="text/css">
        <script type="text/javascript" src="/index.js"></script>
    </head>
    <body>
            
            <form class="form" method="POST" action="" id="formulario"> 
                <h2 id="tituloForm" >Formulario de registro</h2>
                <output>Nombre :</output>
                <div class="container_input">
                    <input name="inputName" type="text" placeholder="Nombre" style="background-color: white;width: 90%;" required ><em>(requerido)</em>
                </div>

                <output>Apellido :</output>
                <div class="container_input">
                    <input name="inputapellido" type="text" placeholder="Nombre" style="background-color: white;width: 90%;" required ><em>(requerido)</em>
                </div>

                 <output>Email :</output>
                 <div class="container_input">
                    <input name="inputEmail" type="email" placeholder="lisbeth@example.com" style="background-color: white;width: 90%;" required/><em>(requerido)</em>
                </div>
                
                <center> <input type="submit" value="Enviar" /></center>
            </form>
    </body>
</html>

<?php
    if($_POST){
        
        $nombre = $_POST['inputName'];
        $apellido = $_POST['inputapellido'];
        $email = $_POST['inputEmail']; 
    

    //conexion PDO 
    $servername = "localhost";
    $username="root";
    $password="";
    $dbname="cursosql";
    //echo '<script>alert("Mensaje de alerta 1");</script>';
    // create conexion 
    $conn =new mysqli($servername, $username, $password, $dbname);
    // check conexion 
    if($conn -> connect_error){
        die("conection failed:". $conn->connect_error);
    }
      
    $sql = "INSERT INTO empleado (nombre,apellido,email ) VALUES ('$nombre','$apellido','$email')" ; 
    
    if ($conn->query($sql)===TRUE){
        echo "New record created successfuly";

    }else{
        echo"Error".$sql."</br>".$conn->error;
    }

    $conn->close();
    }
?>