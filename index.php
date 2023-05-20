<?php
    require_once 'modelo/clasePersona.php';

    $classPer = new DatosPersona();
    $classPer -> Nombre = "Franco";
    $classPer -> Apellido = "Anghilante";
    $classPer -> Email = "example@mailto.com";
    $classPer -> Edad = 22;
    $classPer->MostrarPropiedades();
?>