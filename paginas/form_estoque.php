<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado virtual</title>
    <?php include '../estilos/style_form_estoque.php' ?>
</head>
<body>
    <header>
        <a class="logo" href="./principal.php"><img src="../estilos/mercado.png" height="50" width="50" alt="#"></a>
        <nav>
            <ul>
                <li><a href="./principal.php" class="ancora_header">Home</a></li>
                <li><a href="./form_compra.php" class="ancora_header">Comprar</a></li>
                <li><form action="../php/estoquecontroller.php" method="post"><input class="button_header" name="acao" type="submit" value="Produtos"></form></li>
                <li><form action="../php/vendacontroller.php" method="post"><input type="submit" class="button_header" name="acao" value="Pedidos"></form></li>
                <li><form action="../php/desconectar.php" method="post"><button class="button_header">Sair da conta</button></form></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="cont">
            <h2>Formulário de cadastro do produto</h2>
            <p>logo abaixo você irá encontrar um formulário para poder cadastrar um produto em nosso site,  por favor preencha os campos com o que e pedido.</p>
            <form action="../php/estoquecontroller.php" method="post" id="cadastrar">
                <div id="form">
                    <label for="">Nome do produto:</label><br>
                    <input type="text" name="name" class="form_input" required><br><br>
                    <label for="">Preço de compra:</label><br>
                    <input type="number" name="preco_compra" class="form_input" required><br><br>
                    <label for="">Preço de venda:</label><br>
                    <input type="number" name="preco_venda" class="form_input" required><br><br>
                    <label for="">Quantidade do produto:</label><br>
                    <input type="number" name="qnt" class="form_input" required><br><br>
                    <label for="">Data de compra:</label><br>
                    <input type="date" name="data" class="form_input" required><br><br>
                    <input type="submit" name="acao" class="button_form" value="Cadastrar">
                </div>
            </form>
            <h2>Formulário para apagar um produto do estoque</h2>
            <p>logo abaixo você irá encontrar um formulário para poder apagar um produto do nosso estoque,  por favor preencha os campos com o que e pedido.</p>
            <form action="../php/estoquecontroller.php" method="post" id="cadastrar">
                <div id="form">
                    <label for="">Nome do produto:</label><br>
                    <input type="text" name="name" class="form_input" required><br><br>
                    <input type="submit" name="acao" class="button_form" value="Apagar">
                </div>
            </form>
        </div>
    </div>
    <footer>
        <p id="p_footer" style="display: inline-block;">Direitos rezervados &copy; 2023</p>
        <a id="ancora_footer" href="https://www.flaticon.com/br/icones-gratis/mercado" title="mercado ícones">Mercado ícones criados por wanicon - Flaticon</a>
    </footer>
</body>
</html>