<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado Virtual</title>
    <?php include '../estilos/style_consulta.php'; ?>
</head>
<body>
<?php

include 'estoquedao.php';
include 'estoquemercado.php';

$cod = filter_input(INPUT_POST, 'cod');
$nome = filter_input(INPUT_POST, 'name');
$preco_compra = filter_input(INPUT_POST, 'preco_compra');
$preco_venda = filter_input(INPUT_POST, 'preco_venda');
$qnt = filter_input(INPUT_POST, 'qnt');
$data = filter_input(INPUT_POST, 'data');
$acao = filter_input(INPUT_POST, 'acao');

$estoquedao = new estoquedao();
$mercado = new mercado();

$mercado->setNome($nome);
$mercado->setPreco_Compra($preco_compra);
$mercado->setPreco_Venda($preco_venda);
$mercado->setQnt($qnt);
$mercado->setData_compra($data);

if ($acao == 'Cadastrar') {
    $estoquedao->CadastrarProduto($mercado);
}elseif($acao == 'Produtos'){
    $estoquedao->ConsultarProduto();
    if ($estoquedao->ConsultarProduto()) {
        echo '
            <header>
            <a class="logo" href="../paginas/principal.php"><img src="../estilos/mercado.png" height="50" width="50" alt="#"></a>
            <nav>
                <ul>
                    <li><a href="../paginas/principal.php" class="ancora_header">Home</a></li>
                    <li><a href="../paginas/form_compra.php" class="ancora_header">Comprar</a></li>
                    <li><a href="../paginas/form_estoque.php" class="ancora_header">Estoque</a></li>
                    <li><form action="./vendacontroller.php" method="post"><input type="submit" class="button_header" name="acao" value="Pedidos"></form></li>
                    <li><form action="./desconectar.php" method="post"><button class="button_header">Sair da conta</button></form></li>
                </ul>
            </nav>
            </header>
            <div class="container">
            <div class="cont">
            <h2>Produtos que temos em estoque</h2>
            <p>Logo abaixo você encontrará a nossa tabela do estoque, onde exibe o nome do produto, preço de compra e venda e muito mais</p>
        ';
        echo '
            <table>
            <tr>
            <th>Código produto</th>
            <th>Nome produto</th>
            <th>Preço de compra (R$)</th>
            <th>Preço de venda (R$)</th>
            <th>Quantidade de estoque</th>
            <th>Data</th>
            </tr>
        ';
        foreach($estoquedao->ConsultarProduto() as $produto){
            echo '<tr>';
            echo '<td>'. $produto['codigoproduto']. '</td>';
            echo '<td>'. $produto['nomeproduto']. '</td>';
            echo '<td>'. $produto['precocompra']. '</td>';
            echo '<td>'. $produto['precovenda']. '</td>';
            echo '<td>'. $produto['quantidadeproduto']. '</td>';
            echo '<td>'. $produto['datacompra']. '</td>';
            echo '</tr>';
        }
        echo '
            </table>
            </div>
            </div>
            <footer>
                <p id="p_footer" style="display: inline-block;">Direitos rezervados &copy; 2023</p>
                <a id="ancora_footer" href="https://www.flaticon.com/br/icones-gratis/mercado" title="mercado ícones">Mercado ícones criados por wanicon - Flaticon</a>
            </footer>
        ';
    }else{
        echo '
        <header>
        <a class="logo" href="../paginas/principal.php"><img src="../estilos/mercado.png" height="50" width="50" alt="#"></a>
        <nav>
            <ul>
                <li><a href="../paginas/principal.php" class="ancora_header">Home</a></li>
                <li><a href="../paginas/form_compra.php" class="ancora_header">Comprar</a></li>
                <li><a href="../paginas/form_estoque.php" class="ancora_header">Estoque</a></li>
                <li><form action="./vendacontroller.php" method="post"><input type="submit" class="button_header" name="acao" value="Pedidos"></form></li>
                <li><form action="./desconectar.php" method="post"><button class="button_header">Sair da conta</button></form></li>
            </ul>
        </nav>
        </header>
        <div class="container">
        <div class="cont">
        <h2>Produtos que temos em estoque</h2>
        <p>Logo abaixo você encontrará a nossa tabela do estoque, onde exibe o nome do produto, preço de compra e venda e muito mais</p><br>
        <h3>Nenhum produto, em estoque!</h3>
        <table>
        <tr>
        <th>Código produto</th>
        <th>Nome produto</th>
        <th>Preço de compra (R$)</th>
        <th>Preço de venda (R$)</th>
        <th>Quantidade de estoque</th>
        <th>Data</th>
        </tr>
        </table>
        </div>
        </div>
        <footer>
            <p id="p_footer" style="display: inline-block;">Direitos rezervados &copy; 2023</p>
            <a id="ancora_footer" href="https://www.flaticon.com/br/icones-gratis/mercado" title="mercado ícones">Mercado ícones criados por wanicon - Flaticon</a>
        </footer>
    ';
    }
}elseif ($acao == 'Apagar') {
    $estoquedao->ApagarProduto($mercado);
}
    
?>