<?php 

 class Pessoas{
    //  criando a classe - modelo
    // não se pode criar mais de uma classe em um arquivo.
    // tudo o que é classe se cria com letra maiuscula.

    // criando atributos(caracteristicas)
    // lembrar de colocar o tipo de visibilidade do arquivo(public, private e protected). Quando for privado só é possível acessar através de mediadores get e set. 
    private $nome;
    private $idade;
    private $cpf;
    
    // criando métodos (ações)
    public function getNome(){
        return $this->nome;
    }
     
    public function setNome($nome){
        // $nome = $novoNome; exemplo simplificado. 
        $this->nome = $nome; 
        // funciona para exemplificar a mudança do nome dentro da classe.
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;

    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;

    }

    public function cadastrarPessoa($con){
        $this->nome;

    }

 }
 

 ?>