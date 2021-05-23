<?php 

   require "validaciones.php";

   function insertar($nombre,$apellido,$telefono,$edad,$fechadenacimiento,$email){
       $conexion = new mysqli("127.0.0.1","root","","KAIRA");
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
       echo "Ta pronto";
   
