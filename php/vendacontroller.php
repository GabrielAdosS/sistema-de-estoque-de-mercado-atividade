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

include 'vendadao.php';
include 'vendamercado.php';

$cod = filter_input(INPUT_POST, 'cod');
$name = filter_input(INPUT_POST, 'name');
$data = filter_input(INPUT_POST, 'data');
$quant = filter_input(INPUT_POST, 'qnt');
$acao = filter_input(INPUT_POST, 'acao');

$vendadao = new vendadao();
$venda = new vendamercado();

$venda->setCod($cod);
$venda->setNome($name);
$venda->setData($data);
$venda->setQuant($quant);
$venda->setVenda($cod);

if ($acao == 'Comprar') {
    $vendadao->cadastrarCompra($venda);
}elseif ($acao == 'Cancelar') {
    $vendadao->cancelarCompra($venda);
}elseif ($acao == 'Pedidos') {
    $vendadao->consultarCompra();
    if($vendadao->consultarCompra()){
    echo '
            <header>
            <a class="logo" href="../paginas/principal.php"><img src="../estilos/mercado.png" height="50" width="50" alt="#"></a>
            <nav>
                <ul>
                    <li><a href="../paginas/principal.php" class="ancora_header">Home</a></li>
                    <li><a href="../paginas/form_compra.php" class="ancora_header">Comprar</a></li>
                    <li><a href="../paginas/form_estoque.php" class="ancora_header">Estoque</a></li>
                    <li><form action="./estoquecontroller.php" method="post"><input type="submit" class="button_header" value="Produtos" name="acao"></form></li>
                    <li><form action="./desconectar.php" method="post"><button class="button_header">Sair da conta</button></form></li>
                </ul>
            </nav>
            </header>
            <div class="container">
            <div class="cont">
            <h2>Pedidos registrados</h2>
            <p>Logo abaixo você encontrará a nossa tabela de pedidos, onde exibe o número do produto, a quantidade requisitada e muito mais</p>
        ';
        echo '
            <table>
            <tr>
            <th>Código da venda</th>
            <th>Nome do produto</th>
            <th>Data de compra</th>
            <th>Quantidade de Compra</th>
            <th>Código do produto</th>
            </tr>
        ';
        foreach($vendadao->consultarCompra() as $produto){
            echo '<tr>';
            echo '<td>'. $produto['codigovenda']. '</td>';
            echo '<td>'. $produto['nomevenda']. '</td>';
            echo '<td>'. $produto['datavenda']. '</td>';
            echo '<td>'. $produto['quantidadevenda']. '</td>';
            echo '<td>'. $produto['vendaestoque']. '</td>';
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
    }else {
        echo '
        <header>
        <a class="logo" href="../paginas/principal.php"><img src="../estilos/mercado.png" height="50" width="50" alt="#"></a>
        <nav>
            <ul>
                <li><a href="../paginas/principal.php" class="ancora_header">Home</a></li>
                <li><a href="../paginas/form_compra.php" class="ancora_header">Comprar</a></li>
                <li><a href="../paginas/form_estoque.php" class="ancora_header">Estoque</a></li>
                <li><form action="./estoquecontroller.php" method="post"><input type="submit" class="button_header" value="Produtos" name="acao"></form></li>
                <li><form action="./desconectar.php" method="post"><button class="button_header">Sair da conta</button></form></li>
            </ul>
        </nav>
        </header>
        <div class="container">
        <div class="cont">
        <h2>Pedidos registrados</h2>
        <p>Logo abaixo você encontrará a nossa tabela de pedidos, onde exibe o número do produto, a quantidade requisitada e muito mais</p><br>
        <h3>Nenhum pedido encontrado!</h3>
        <table>
        <tr>
        <th>Código da venda</th>
        <th>Nome do produto</th>
        <th>Data de compra</th>
        <th>Quantidade de Compra</th>
        <th>Código do produto</th>
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
}

?>