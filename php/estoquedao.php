<?php

include 'conexao.php';

class estoquedao {
    /**CRUD */
    public function CadastrarProduto(Mercado $e){
        $sql = 'INSERT into estoquemercado(nomeproduto, precocompra, precovenda, quantidadeproduto, datacompra) values (?, ?, ?, ?, ?)';

        $banco = new Conexao();
        $db = $banco->getConexao();

        $value = $db->prepare($sql);

    
        $value->bindValue(1, $e->getNome());
        $value->bindValue(2, $e->getPreco_Compra());
        $value->bindValue(3, $e->getPreco_venda());
        $value->bindValue(4, $e->getQnt());
        $value->bindValue(5, $e->getData_compra());

        $result = $value->execute();

        if ($result) {
            header('Location: ../paginas/principal.php');
        }
    }
    public function ConsultarProduto(){
        $sql = 'SELECT * from estoquemercado';

        $db = new conexao();

        $db_init = $db->getConexao();

        $value = $db_init->prepare($sql);
        $result = $value->execute();

        if ($value->rowCount()>0) {
            $valores = $value->fetchAll(\PDO::FETCH_ASSOC);
            return $valores;
        }
    }
    public function ApagarProduto(Mercado $e){
        $sql = 'DELETE from estoquemercado where nomeproduto=?';

        $db = new conexao();

        $db_init = $db->getConexao();

        $value = $db_init->prepare($sql);
        $value->bindValue(1, $e->getNome());
        $result = $value->execute();

        if ($result) {
            header('Location: ../paginas/principal.php');
        }
    }
}
?>