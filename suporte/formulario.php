<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Formulário</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Roboto+Mono:wght@300;400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="shortcut icon" href="../images/ia20000-removebg-preview.ico" type="image/x-icon">
</head>

<body>
    <!-- Header -->
    <header>
        <div id="header">

            <div class="btn-expandir" id="btn-exp">
                <i class="fa-solid fa-bars"></i>
            </div>

            <h3>Teacher's AI Support</h3>

            <div class="log">
                <p><i class="fa-solid fa-user"></i><a href="../login.php"> Logout</a></p>
            </div>
        </div>
    </header>

    <nav class="barra-lateral">

        <ul>
            <li class="item-menu">
                <a href="../home/index.html">
                    <span class="icon"><i class="fa-solid fa-house"></i></span>
                    <span class="txt-link">Home</span>
                </a>
            </li>
            <hr>
            <li class="item-menu">
                <a href="../utilidades/favoritos.html">
                    <span class="icon"><i class="fa-solid fa-bookmark"></i></span>
                    <span class="txt-link">Favoritos</span>
                </a>
            </li>
            <hr>
            <li class="item-menu">
                <a href="../utilidades/calendario.html">
                    <span class="icon"><i class="fa-solid fa-calendar-days"></i></span>
                    <span class="txt-link">Calendário</span>
                </a>
            </li>
            <hr>
            <li class="item-menu">
                <a href="../tarefas/tarefas.html">
                    <span class="icon"><i class="fa-solid fa-clipboard-list"></i></span>
                    <span class="txt-link">Tarefas</span>
                </a>
            </li>
            <hr>
            <li class="item-menu">
                <a href="../suporte/acessibilidade.html">
                    <span class="icon"><i class="fa-solid fa-universal-access"></i></span>
                    <span class="txt-link">Acessibilidade</span>
                </a>
            </li>
            <hr>
            <li class="item-menu">
                <a href="../tarefas/desempenho.html">
                    <span class="icon"><i class="fa-solid fa-chart-simple"></i></span>
                    <span class="txt-link">Desempenho</span>
                </a>
            </li>
            <hr>
            <li class="item-menu ati">
                <a href="../suporte/configuracoes.html">
                    <span class="icon"><i class="fa-solid fa-gear"></i></span>
                    <span class="txt-link">Configurações</span>
                </a>
            </li>
            <hr>
            <li class="item-menu">
                <a href="../suporte/ajuda.html">
                    <span class="icon"><i class="fa-solid fa-circle-info"></i></span>
                    <span class="txt-link">Ajuda</span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="formulario">

        <h2>Formulário</h2>

        <h4>Preencha o formulário abaixo e entre em contato com a gente!</h4>

        <form action="./email/envio-email.php" class="form">

            <div class="cont">
                <label for="inputNome">Nome:</label>
                <input type="text" name="nome" placeholder="Digite seu nome" required>
            </div>

            <div class="cont">
                <label for="inputEmail">Email:</label>
                <input type="email" name="email" id="email" placeholder="Digite seu email" required>
            </div>

            <div class="cont">
                <label for="inputTelefone">Telefone:</label>
                <input type="tel" name="telefone" id="telefone" placeholder="Digite seu número" required>
            </div>

            <div class="cont">
                <label for="textAreaMensagem">Digite a sua mensagem:</label>
                <textarea name="mensagem" id="mensagem" rows="4" placeholder="Digite sua mensagem" required></textarea>
            </div>

            <div class="botao">
                <button type="submit">Enviar</button>
            </div>
        </form>

    </div>

    <script src="../js/sidebar.js"></script>
</body>

</html>