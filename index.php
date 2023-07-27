<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado Virtual</title>
    <?php include './estilos/style_login.php'; ?>
</head>
<body>
    <div class="container">
        <div class="form_login">
            <h2>Login</h2><br>
            <form action="./php/validar.php" method="post">
                <label>Usuario:</label><br>
                <input type="text" name="username"><br><br>
                <label>Senha:</label><br>
                <input type="password" name="userpassword"><br>
                <button type="submit">Logar</button>
            </form><br>
            <p>Não possui conta? <a href="./paginas/form_cadastrar_user.php">Clique aqui</a></p>
        </div>
    </div>
    <footer>
        <p id="p_footer" style="display: inline-block;">Direitos rezervados &copy; 2023</p>
        <a id="ancora_footer" href="https://www.flaticon.com/br/icones-gratis/mercado" title="mercado ícones">Mercado ícones criados por wanicon - Flaticon</a>
    </footer>
</body>
</html>