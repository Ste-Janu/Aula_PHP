<?php

    class Exemplo {

        public static $atributo1 = "Eu sou um atributo estático";
        public $atributo2 = "Eu sou um atributo normal";

        public static function metodo1(){
            echo "Eu sou um metodo estático";
        }

        public function metodo2(){
            echo "Eu sou um metodo normal";
        }

    }

    echo Exemplo::$atributo1;
    echo "<br/>";
    echo Exemplo::metodo1();

?>