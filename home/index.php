<?php

include_once "protect.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Roboto+Mono:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Portal | Docente</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/ia20000-removebg-preview.ico" type="image/x-icon">
</head>
<body>
    
    <!-- Header -->
    <header>
        <div id="header">
            <div class="title">
                <h2>Teacher's AI Support</h2>

                <style>
                    @media only screen and (max-width: 1367px) and (max-width: 1920px) {
                        .title h2{
                            margin-left: 100px;
                        }
                    }

                    @media only screen and (min-width: 1366px) {
                        .title h2{
                            margin-left: -30px;
                        }
                    }
                </style>

            </div>

            <div class="log">
                <p><i class="fa-solid fa-user"></i><a href="../login.php"> Logout</a></p>
            </div>
        </div>
    </header>

    <sec class="central">

        <nav class="barra-lateral">

            <div class="btn-expandir" id="btn-exp">
                <i class="fa-solid fa-bars"></i>
            </div>
            <ul>
                <li class="item-menu ativo">
                    <a href="../home/index.html">
                        <span class="icon"><i class="fa-solid fa-house"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>
                <hr>
                <li class="item-menu ativo"> 
                    <a href="../utilidades/favoritos.html">
                        <span class="icon"><i class="fa-solid fa-bookmark"></i></span>
                        <span class="txt-link">Favoritos</span>
                    </a>
                </li>
                <hr>
                <li class="item-menu ativo">
                    <a href="../utilidades/calendario.html">
                        <span class="icon"><i class="fa-solid fa-calendar-days"></i></span>
                        <span class="txt-link">Calendário</span>
                    </a>
                </li>
                <hr>
                <li class="item-menu ativo">
                    <a href="../tarefas/tarefas.html">
                        <span class="icon"><i class="fa-solid fa-clipboard-list"></i></span>
                        <span class="txt-link">Tarefas</span>
                    </a>
                </li>
                <hr>
                <li class="item-menu ativo">
                    <a href="../suporte/acessibilidade.html">
                        <span class="icon"><i class="fa-solid fa-universal-access"></i></span>
                        <span class="txt-link">Acessibilidade</span>
                    </a>
                </li>
                <hr>
                <li class="item-menu ativo">
                    <a href="../tarefas/desempenho.html">
                        <span class="icon"><i class="fa-solid fa-chart-simple"></i></span>
                        <span class="txt-link">Desempenho</span>
                    </a>
                </li>
                <hr>
                <li class="item-menu ativo">
                    <a href="../suporte/configuracoes.html">
                        <span class="icon"><i class="fa-solid fa-gear"></i></span>
                        <span class="txt-link">Configurações</span>
                    </a>
                </li>
                <hr>
                <li class="item-menu ativo">
                    <a href="../suporte/ajuda.html">
                    <span class="icon"><i class="fa-solid fa-circle-info"></i></span>
                    <span class="txt-link">Precisa de ajuda?</span>
                    </a>
                </li>
            </ul>
                
        </nav>

    <div class="search-box">
          <div class="divBusca">    
            <input type="text" class="txtBusca" placeholder="Buscar..."/>
            <div class="magnifying">
                <i class="fa-solid fa-magnifying-glass" id="magnifying"></i>
            </div>
          </div>
    </div>
    
    <h2 class="turmas-title">Minhas Turmas</h2>

    <div class="content" id="content">
        
        <div class="quadradu">
            <div class="box">
                <div class="nome">
                    <h4>Desenvolvimeto de Sistemas II</h4>
                    <h5>82676</h5>
                </div>
            </div>
        </div>
        <div class="quadradu">
            <div class="box">
                <div class="nome">
                    <h4>Desenvolvimento para Aplicativos Mobile</h4>
                    <h5>82676</h5>
                </div>
            </div>
        </div>
        <div class="quadradu">
            <div class="box">
                <div class="nome">
                    <h4>Teste de Sistemas</h4>
                    <h5>82676</h5>
                </div>
            </div>
        </div>
        <div class="quadradu">
            <div class="box">
                <div class="nome">
                    <h4>Banco de Dados</h4>
                    <h5>82676</h5>
                </div>
            </div>
        </div>
        <div class="quadradu">
            <div class="box">
                <div class="nome">
                    <h4>Trabalho de Conclusão de Curso</h4>
                    <h5>82676</h5>
                </div>
            </div>
        </div>
        <div class="quadradu1" >
            <div class="box-mais" onclick="createEditableDiv()">
                <div class="nome">
                  <h5 class="add">Adicionar Turma</h5>
                </div>
              </div>
        </div>
    </div>

    <script src="../js/script.js"></script>

</body>
</html>