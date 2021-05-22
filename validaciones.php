<?php 
  function ValidarCampo() {
        if ($_POST['nombre'] === ""){
            echo "Ingrese su nombre <br><br>";
        }
        if ($_POST['apellido'] === ""){
            echo "Ingrese su apellido <br><br>";
        }
        if ($_POST['telefono'] === ""){
            echo "Ingrese su número de teléfono <br><br>";
        }
        if ($_POST['edad'] === ""){
            echo "Ingrese su edad <br><br>";
        }
        if ($_POST['fechadenacimiento'] === ""){
            echo "Ingrese su fecha de naciemiento <br><br>";
        }
        if ($_POST['email'] === ""){
            echo "Ingrese su email <br><br>";
        }
  }
  ValidarCampo();

  function ValidarNumero(){
    





  }