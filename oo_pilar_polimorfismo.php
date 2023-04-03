<?php 

    class Carro extends Veiculo {

        public $teto_solar = true;
        
        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar(){
            echo "Abrir teto solar";
        }

        function alterarPosicaoVolante(){
            echo "Alterar Posição Volante";
        }
    }

    class Moto extends Veiculo{

        public $contraPesoGuidao = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar(){
            echo "Empinar";
        }
    }

    class Veiculo{
        
        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo "Acelerar";
        }

        function freiar(){
            echo "Freiar";
        }

        function trocarMarcha(){
            echo "Desengatar embreagem com o pé e engatar marcha com a mão";
        }

    }

    $carro = new Carro('abc1234', "vermelho");
    // $moto = new Moto('cde5678', 'preta');

    $carro->trocarMarcha();
    
?> 