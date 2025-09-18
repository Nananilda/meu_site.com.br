<?php
//classe pai - Usuario
    class Usuario{
        protected $nome;
        protected $email;
        //protected fica visivel para as classes filhos, quando herda
        public function __construct($nome, $email){
            $this->nome = $nome;
            $this->email = $email;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getEmail(){
            return $this->email;
            //não necessita de parâmetro pois tem o objeto (dentro do parênteses)
        }
        public function exibirInfo(){
            return "Nome: {$this->nome} | Email: {$this->email}";
        }
    }
?>