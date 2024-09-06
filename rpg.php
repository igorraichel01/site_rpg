<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>refugio rpg</title>
    <link rel="stylesheet" href="../estilo/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500&family=Ubuntu&display=swap" rel="stylesheet">

    <style>
        /* Styles para as tochas */
        .torch-container {
            position: fixed;
            top: 0;
            bottom: 0;
            width: 100px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            pointer-events: none;
            z-index: 9999; 
        }
        
        
       .torch {
            width: 50px;
            height: 100px;
            background-image: url('../imagens/tocha.gif'); 
            background-size: cover;
            animation: flameAnimation 1s infinite alternate;
            background-color: transparent; 
        }

        @keyframes flameAnimation {
            0% {
                opacity: 0.8;
            }
            50% {
                opacity: 1;
            }
            100% {
                opacity: 0.8;
            }
        }

        /* Estilos específicos para a tocha da esquerda */
        .torch-left {
            left: 0;
        }

        /* Estilos específicos para a tocha da direita */
        .torch-right {
            right: 0;
            transform: scaleX(-1); /* para inverter horizontalmente */
        }
    </style>
</head>
<body>

<header>
<nav class="navigation">
 
 <img src="../imagens/g5.png" alt="Logo" class="logo-image" >
 
   <a href="../php/rpg.php"> Home<ion-icon name="home" class="large-icon" ></ion-icon></a>
   <a href=" ../html/classes.html">Classes</a>
   <a href="salas.php">HEROIS</a>
   <a href="adm_mod.php">BATAT</a>
   <a href="contato.html">TICTAC</a>
   <a href="../html/fichas.html">Fichas</a>
   
   <input type="text" id="search-input" placeholder="Buscar...">
  <button class="search-button" onclick="realizarBusca()">Buscar</button>
  <button class="btnLogin-popup" onclick="redirecionar()">Login</button>


</nav>
</header>



<div class="container">
    <h1>Como Funciona a Criação de Personagens em RPG</h1>
    <p>A criação de personagens em RPG envolve escolhas cruciais que definirão a história e habilidades do seu herói. Aprofunde sua compreensão sobre raças, atributos, histórias de fundo e muito mais.</p>
    
    <div class="cards-container">
    <a href="../html/fichas.html" class="card-link">
        <div class="card-item">
            <img src="../imagens/card1.png" alt="Imagem 1">
            <h2>Passo 1</h2>
            <p>Escolha a raça do seu personagem, seja humano, elfo, anão ou uma das diversas opções </p>
        </div>
        </a>

        <a href=" ../html/classes.html" class="card-link">
        <div class="card-item">
          <img src="../imagens/card3.png" alt="Imagem 3">
            <h2>Passo 2</h2>
            <p>Elabore a história de fundo do seu personagem, criando um passado rico e motivador.</p>
        </div>
        </a>
        <a href="../html/atributos.html" class="card-link">
        <div class="card-item">
            <img src="../imagens/card2.png" alt="Imagem 2">
            <h2>Passo 3</h2>
            <p>Defina os atributos do seu personagem, como força, destreza e inteligência, rolando os dados e distribuindo pontos.</p>
        </div>
        </a>
      
    </div>
</div>

<!-- Container para a tocha da esquerda -->
<div class="torch-container torch-left">
    <div class="torch"></div>
</div>

<!-- Container para a tocha da direita -->
<div class="torch-container torch-right">
    <div class="torch"></div>
</div>

</body>
</html>
