<?php

session_start();

if ((!isset($_SESSION['username']) == true) && (!isset($_SESSION['userpassword']) == true)) {
    header('Location: ../index.php');
}

$name = $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado Virtual</title>
    <?php include '../estilos/style_principal.php'; ?>
</head>
<body>
    <header>
        <a class="logo" href="./principal.php"><img src="../estilos/mercado.png" height="50" width="50" alt="#"></a>
        <nav>
            <ul>
                <li><a href="./principal.php" class="ancora_header">Home</a></li>
                <li><a href="./form_compra.php" class="ancora_header">Comprar</a></li>
                <li><a href="./form_estoque.php" class="ancora_header">Estoque</a></li>
                <li><form action="../php/vendacontroller.php" method="post"><input type="submit" class="button_header" name="acao" value="Pedidos"></form></li>
                <li><form action="../php/estoquecontroller.php" method="post"><input class="button_header" type="submit" name="acao" value="Produtos"></form></li>
                <li><form action="../php/desconectar.php" method="post"><button class="button_header">Sair da conta</button></form></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="cont">
        <h3>Bem-Vindo <?php echo $name; ?>,</h3>
            <h2>Estoque e compre produtos de mercado em um só lugar: conheça o site Mercado Virtual</h2><br>
            <p id="texto">
            Se você deseja comprar comida de um mercado sem precisar sair de casa, um site de e-commerce de alimentos pode ser a solução perfeita para você.<br><br>
            Existem muitos sites que permitem que você compre alimentos de diferentes mercados e lojas online, tornando o processo de compra de alimentos muito mais conveniente e fácil.<br><br>
            Ao utilizar um site de e-commerce de alimentos, você pode escolher entre uma ampla variedade de produtos de diferentes marcas e mercados. Você pode estocar alimentos em grande quantidade, economizando tempo e dinheiro, além de ter acesso a ofertas exclusivas e preços especiais.<br><br>
            Com um site de e-commerce de alimentos, você pode fazer compras a qualquer hora e em qualquer lugar, sem precisar se preocupar com horários de funcionamento ou filas no mercado. Além disso, muitos sites oferecem entrega rápida e frete grátis em compras acima de um determinado valor, o que torna o processo ainda mais conveniente.<br><br>
            Outra vantagem de utilizar um site de e-commerce de alimentos é a possibilidade de encontrar produtos que talvez não estejam disponíveis em seu mercado local. Você pode pesquisar e comprar alimentos de outras regiões, países ou culturas, explorando novos sabores e ingredientes.<br><br>
            Por fim, é importante lembrar que, ao utilizar um site de e-commerce de alimentos, é preciso tomar alguns cuidados, como verificar a reputação do site e dos fornecedores, comparar preços e ler atentamente as políticas de devolução e troca. Além disso, é importante garantir que os alimentos comprados estejam dentro da data de validade e que sejam armazenados corretamente em sua casa.<br><br>
            Em resumo, um site de e-commerce de alimentos pode oferecer uma série de vantagens para quem deseja estocar e comprar comida de um mercado sem precisar sair de casa. Com a conveniência e a variedade de produtos disponíveis, você pode desfrutar de uma experiência de compra mais prática e acessível.
            </p>
        </div>
    </div>
    <footer>
        <p id="p_footer" style="display: inline-block;">Direitos rezervados &copy; 2023</p>
        <a id="ancora_footer" href="https://www.flaticon.com/br/icones-gratis/mercado" title="mercado ícones">Mercado ícones criados por wanicon - Flaticon</a>
    </footer>
</body>
</html>