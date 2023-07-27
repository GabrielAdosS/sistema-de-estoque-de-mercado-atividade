<?php

class mercado {
    private $codigoproduto,
            $nomeproduto,
            $precocompra,
            $precovenda,
            $quantidadeproduto,
            $datacompra;

    public function getCod(){
        return $this->codigoproduto;
    }
    public function setCod($cod){
        return $this->codigoproduto = $cod;
    }
    public function getNome(){
        return $this->nomeproduto;
    }
    public function setNome($nome){
        return $this->nomeproduto = $nome;
    }
    public function getPreco_Compra(){
        return $this->precocompra;
    }
    public function setPreco_Compra($compra){
        return $this->precocompra = $compra;
    }
    public function getPreco_Venda(){
        return $this->precovenda;
    }
    public function setPreco_Venda($venda){
        return $this->precovenda = $venda;
    }
    public function getQnt(){
        return $this->quantidadeproduto;
    }
    public function setQnt($quantidade){
        return $this->quantidadeproduto = $quantidade;
    }
    public function getData_compra(){
        return $this->datacompra;
    }
    public function setData_compra($data){
        return $this->datacompra = $data;
    }
}


?>