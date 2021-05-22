<?php
$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$telefono = $_POST ['telefono'];
$edad = $_POST ['edad'];
$fechaDeNacimiento = $_POST ['fechaDeNacimiento'];
$email = $_POST ['email'];

validacion($nombre, $apellido, $telefono, $edad, $fechaDeNacimiento, $email);

function validacion ($nombre, $apellido, $telefono, $edad, $fechaDeNacimiento, $email){

    if ($nombre === "" || $apellido === "" || $telefono === "" || $edad === "" || $fechaDeNacimiento === "" || $email === ""){
        echo "Debe completar todos los campos!!";
        return false;
    }
}