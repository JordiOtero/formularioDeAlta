<?php
$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$telefono = $_POST ['telefono'];
$edad = $_POST ['edad'];
$fechaDeNacimiento = $_POST ['fechaDeNacimiento'];
$email = $_POST ['email'];

validacion($nombre, $apellido, $telefono, $edad, $fechaDeNacimiento, $email);
validarDatos ($edad, $telefono, $email);

function validacion ($nombre, $apellido, $telefono, $edad, $fechaDeNacimiento, $email){

    if ($nombre === "" || $apellido === "" || $telefono === "" || $edad === "" || $fechaDeNacimiento === "" || $email === ""){
        echo "Debe completar todos los campos!!";
        return false;
    }
}

function validarDatos ($edad, $telefono, $email){
    if (!is_numeric($edad) || !is_numeric($telefono) ){
        echo  "edad y/o telefono invalido/s";
        return false;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "La dirección de email no es válida";
        return false;
    }

}