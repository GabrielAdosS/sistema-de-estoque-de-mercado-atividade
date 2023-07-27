<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado</title>
    <?php include '../estilos/style_casdastro.php'; ?>
</head>
<body>
    <div class="container">
        <div class="form_cadastrar">
            <h2>Cadastrar</h2><br>
            <form action="../php/cadastrar.php" method="post">
                <label>Usuario:</label><br>
                <input type="text" name="username"><br><br>
                <label>Senha:</label><br>
                <input type="password" name="userpassword"><br>
                <button type="submit">Cadastrar</button>
            </form>
            <a href="../index.php">Voltar</a>
        </div>
    </div>
    <footer>
        <p id="p_footer" style="display: inline-block;">Direitos rezervados &copy; 2023</p>
        <a id="ancora_footer" href="https://www.flaticon.com/br/icones-gratis/mercado" title="mercado ícones">Mercado ícones criados por wanicon - Flaticon</a>
    </footer>
</body>
</html>