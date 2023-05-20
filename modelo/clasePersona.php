<?php

    class DatosPersona{

        public $Nombre;
        public $Apellido;
        public $Email;
        public $Edad;

        public function MostrarPropiedades(){
            echo 'Nombre: ' . $this->Nombre . "<br>";
            echo 'Apellido: ' . $this->Apellido . "<br>";
            echo 'Email: ' . $this->Email . "<br>";
            echo 'Edad: ' . $this->Edad . "<br>";
        }

    }


?>