<?php

include_once "./login/bd/connect.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $connect->real_escape_string($_POST['username']);
    $password = $connect->real_escape_string($_POST['password']);

    if (strlen($username) > 0 && strlen($password) > 0) {

        $sql_code = "SELECT * FROM usuario WHERE username = '$username' AND password = '$password'";
        $sql_query = $connect->query($sql_code) or die("Falha na execução do código SQL: " . $connect->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['username'] = $usuario['username'];
            session_start();

            header("Location: ../home/index.php");
        } else {
            // Mensagem de erro se as credenciais forem inválidas.
            echo "Nome de usuário ou senha incorretos.";
        }
    } 
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's IA</title>
    <link rel="stylesheet" href="./login/css/all.css">
    <link rel="shortcut icon" href="./images/ia20000-removebg-preview.ico" type="image/x-icon">
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form class="login-form" action="" method="post">
            <div class="form-group">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="forgot-password">
                <a href="../login/forgot-password/recovery.html">
                    <p>Esqueceu a sua senha?</p>
                </a>
            </div>

            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>

</html>