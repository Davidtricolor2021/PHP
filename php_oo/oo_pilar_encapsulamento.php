<?php

    class Pai {
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        /*
        public function getNome() {
            return $this->nome;
        }

        public function setNome($value) {

            if(strlen($value) >= 3) {
            $this->nome = $value;
            }
        }

        public function getSobrenome() {
            return $this->sobrenome;
        }

        public function setSobrenome($value) {

            if(strlen($value) >= 3) {
            $this->sobrenome = $value;
            }
        }
        */

        public function __get($attr) {
            return $this->$attr;
        }

        public function __set($attr, $value) {
            $this->$attr = $value;
        }
        
        private function executarMania() {
            echo 'Assobiar';
        }

        protected function responder() {
            echo 'Oi';
        }

        public function executarAcao() {
            $x = rand(1, 10);

            if ($x >= 1 && $x <= 8) {
                $this->responder();
            } else {
                $this->executarMania();
            }   
        }
    }

    class Filho extends Pai {
        public function __construct(){
            //exibir os métodos do objeto
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        private function executarMania() {
            echo 'Cantar';
        }

        /*
        public function getAtributo($attr) {
            return $this->$attr;
        }

        public function setAtributo($attr, $value) {
            $this->$attr = $value;
        }
        */

    }

    
    $filho = new Filho();
    echo '<pre>';
    print_r($filho);
    echo '</pre>';

    $filho->executarAcao();

    /*
    echo $filho->__get('nome');

    $filho->__set('nome', 'David');
    echo '<br/ >';
    echo $filho->__get('nome');

    echo '<pre>';
    print_r($filho);
    echo '</pre>';
    */    

    /*
    $filho->setAtributo('nome', 'David');
    echo '<pre>';
    print_r($filho);
    echo '</pre>';
    echo '<br />';
    echo $filho->getAtributo('nome');
    */

    /*
    echo '<br />';
    echo $filho->getAtributo('nome');
    */

    /*
    $pai = new Pai();
    echo $pai->executarAcao();
    */

    /*
    $pai = new Pai();
    echo $pai->getNome();
    $pai->setNome('David');
    echo '<br />';  
    echo $pai->getNome();
    echo '<hr />';

    $pai = new Pai();
    echo $pai->getSobrenome();
    $pai->setSobrenome('Eduardo');
    echo '<br />';  
    echo $pai->getSobrenome();
       
    $pai = new Pai();
    echo $pai->nome;
    echo $pai->sobrenome;
    $pai->nome = 'David';
    $pai->sobrenome = 'Eduardo';
    echo '<br />';
    echo '<hr />';
    echo $pai->nome;
    echo $pai->sobrenome;
    */

?>