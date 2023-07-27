<?php

class vendamercado {
    private $codigovenda ,$nomevenda ,$datavenda, $quantidadevenda, $vendaestoque;

    public function getCod() {
        return $this->codigovenda;
    }
    public function setCod($cod){
        return $this->codigovenda = $cod;
    }
    public function getNome(){
        return $this->nomevenda;
    }
    public function setNome($name){
        return $this->nomevenda = $name;
    }
    public function getData(){
        return $this->datavenda;
    }
    public function setData($data){
        return $this->datavenda = $data;
    }
    public function getQuant(){
        return $this->quantidadevenda;
    }
    public function setQuant($qnt){
        return $this->quantidadevenda = $qnt;
    }
    public function getVenda(){
        return $this->vendaestoque;
    }
    public function setVenda($venda){
        return $this->vendaestoque = $venda;
    }
}

?>