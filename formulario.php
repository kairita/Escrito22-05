<?php 

   require "validaciones.php";
   require "conexionbd.php";

   function insertar($nombre,$apellido,$telefono,$edad,$fechadenacimiento,$email){
       $conexion = new mysqli(IP,USUARIO,PASS,NOMBREBD);
       $sql = "INSERT INTO persona(nombre,apellido,telefono,edad,fechadenacimiento,email) VALUES ('$nombre','$apellido','$telefono','$edad','$fechadenacimiento','$email')";
       $conexion -> query($sql);
       $conexion -> close();
   }
   
   
        insertar(
           $_POST['nombre'],
           $_POST['apellido'],
           $_POST['telefono'],
           $_POST['edad'],
           $_POST['fechadenacimiento'],
           $_POST['email']
       );
       echo "Datos ingresados con éxito";
   
