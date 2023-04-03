<?php
    namespace B;
    
    class Cliente implements CadastroInterface{
        public $nome= 'Jamilton';

        public function __get($attr){
            return $this->$attr;
        }

        public function remover(){
            echo "remover";
        }

        public function __construct(){
            echo "<pre>";
            print_r(get_class_methods($this));
        }

        public function salvar(){
            echo "salvar";
        }
    }

    interface CadastroInterface{
        public function remover();
    }
?>