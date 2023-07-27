<?php

include 'conexao.php';

class vendadao {
    /*CRUD*/
    public function cadastrarCompra(vendamercado $v){
        $sql = 'INSERT into vendamercado(nomevenda, datavenda, quantidadevenda, vendaestoque) values (?, ?, ?, ?)';

        $db = new conexao();
        $db_init = $db->getConexao();

        $value = $db_init->prepare($sql);
        $value->bindValue(1, $v->getNome());
        $value->bindvalue(2, $v->getData());
        $value->bindvalue(3, $v->getQuant());
        $value->bindvalue(4, $v->getVenda());

        $result = $value->execute();

        if ($result) {
            header('Location: ../paginas/form_compra.php');
        }
    }
    public function cancelarCompra(Vendamercado $v){
        $sql = 'DELETE from vendamercado where codigovenda=?';

        $db = new conexao();
        $db_init = $db->getConexao();

        $value = $db_init->prepare($sql);
        $value->bindValue(1, $v->getCod());

        $result = $value->execute();

        if ($result) {
            header('Location: ../paginas/form_compra.php');
        }
    }
    public function consultarCompra(){
        $sql = 'SELECT * from vendamercado';

        $db = new conexao();
        $db_init = $db->getConexao();

        $value = $db_init->prepare($sql);
        $value->execute();

        if ($value->rowCount()>0) {
            $result = $value->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }
    }
}

?>