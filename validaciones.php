<?php 
  function ValidarCampos() {
        if( empty($_POST['nombre'])){
            echo "Ingrese su nombre <br><br>";
        }
        if( empty($_POST['apellido'])){
            echo "Ingrese su apellido <br><br>";
        }
        if( empty($_POST['telefono'])){
            echo "Ingrese su número de teléfono <br><br>";
        }
        if( empty($_POST['edad'])){
            echo "Ingrese su edad <br><br>";
        }
        if( empty($_POST['fechadenacimiento'])){
            echo "Ingrese su fecha de naciemiento <br><br>";
        }
        if( empty($_POST['email'])){
            echo "Ingrese su email <br><br>";
        }
        if(!is_numeric($_POST['edad'])){

            echo "La edad debe ser ingresada en números <br><br>";
        }
        if(!is_numeric($_POST['telefono'])){
            echo "El teléfono debe ser ingresado en números <br><br>";
        }
  }
  ValidarCampos();
 

  