<?php
$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$telefono = $_POST ['telefono'];
$edad = $_POST ['edad'];
$fechaDeNacimiento = $_POST ['fechaDeNacimiento'];
$email = $_POST ['email'];

validacion($nombre, $apellido, $telefono, $edad, $fechaDeNacimiento, $email);
validarDatos ($nombre, $apellido, $edad, $telefono, $email, $fechaDeNacimiento);



function validacion ($nombre, $apellido, $telefono, $edad, $fechaDeNacimiento, $email){

    if ($nombre === "" || $apellido === "" || $telefono === "" || $edad === "" || $fechaDeNacimiento === "" || $email === ""){
        echo "Debe completar todos los campos!!";
        return false;
    }
  
}

function validarDatos ($nombre, $apellido, $edad, $telefono, $email, $fechaDeNacimiento){
    if (!is_numeric($edad) || !is_numeric($telefono) ){
        echo  "edad y/o telefono invalido/s";
        return false;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "La dirección de email no es válida";
        return false;
    }
    guardarDatos($nombre, $apellido, $edad, $telefono, $email, $fechaDeNacimiento);
}


function guardarDatos($nombre, $apellido, $edad, $telefono, $email, $fechaDeNacimiento)
{
    /*$conexion = new mysqli(
        'localhost',
        'usuario',
        'password',
        'nombre'
    );

    $sql = "INSERT INTO personas(nombre, apellido, edad, telefono, email, fechaDeNacimiento) VALUES(
        '{$nombre}',
        '{$apellido}',
        {$edad},
        '{$telefono},
        '{$email},
        '{$fechaDeNacimiento}
        ');";
    $conexion->query($sql);
        */
    echo 'Datos guardados correctamente';
    return true;
}
