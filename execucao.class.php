<?php
    //importacao
    require_once("automoveis.class.php");
    //nome da classe
    class Execucao {
        //objeto pessoa com visibilidade privada
        private $automovel1;
        

        public function __construct (){
            //objeto chamado pessoa que recebe a classe pessoa
            $automovel1 = new Automovel1();
            //passar um valor para o metodo setnome 
            $automovel1 -> setTipo("<b>Automovel 1:</b> "."<br>"."<b>Tipo: </b> Porsche"."<br>");
            //imprimir o valor do metodo getnome
            $automovel1 -> setCor("<b>Cor: </b> Cinza"."<br>");

            $automovel1 -> setPlaca("<b>Placa: </b> MHZ-4345"."<br>");

            $automovel1 -> setNmportas("<b>Numero de portas: </b> 2"."<br>");




            echo $automovel1->getTipo();
            echo $automovel1->getCor();
            echo $automovel1->getPlaca();
            echo $automovel1->getNmportas();
            $automovel1 = new Automovel1();



            
            
        }
        //Instancia
    }new Execucao();
    class Execucao2 {
        //objeto pessoa com visibilidade privada
        private $automovel2;
        

        public function __construct (){
            //objeto chamado pessoa que recebe a classe pessoa
            $automovel2 = new Automovel2();
            //passar um valor para o metodo setnome 
            $automovel2 -> setTipo("<br>"."<b>Automovel 2:</b> "."<br>"."<b>Tipo: </b> Ferrari"."<br>");
            //imprimir o valor do metodo getnome
            $automovel2 -> setCor("<b>Cor: </b> Vermelha"."<br>");

            $automovel2 -> setPlaca("<b>Placa: </b> JKL-0001"."<br>");

            $automovel2 -> setNmportas("<b>Numero de portas: </b> 4"."<br>");




            echo $automovel2->getTipo();
            echo $automovel2->getCor();
            echo $automovel2->getPlaca();
            echo $automovel2->getNmportas();
            $automovel2 = new Automovel2();



            
            
        }
    }new Execucao2();
?>