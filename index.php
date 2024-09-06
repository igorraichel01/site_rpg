<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Nova+Cut&display=swap" rel="stylesheet">
  </head>
  

  <body>
   <header>
    
      <nav class="navigation">
 
        <img src="../imagens/g5.png" alt="Logo" class="logo-image" style="width: 250px;">
        
          <a href="index.php"><ion-icon name="home" class="large-icon" ></ion-icon></a>
          <a href="teste.php">Meu aprendizado</a>
          <a href="salas.php"></a>
          <a href="adm_mod.php"></a>
          <a href="contato.html"></a>
          <a href="contato.html">Fichas</a>
          
          <input type="text" id="search-input" placeholder="Buscar...">
         <button class="search-button" onclick="realizarBusca()">Buscar</button>
         <button class="btnLogin-popup" onclick="redirecionar()">Login</button>
     
       
     </nav>
   </header>

   <div class="container">
 
   <div class="row">
        <div class="col-md-3">
            <!-- Card à esquerda -->
            <div class="card">
                <img src="../imagens/dado1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">DICAS RPG</h5>
                    <p class="card-text">Entenda Classes.</p>
                </div>
            </div>
        </div>
    <div class="col-md-6">

   <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../imagens/1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../imagens/2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../imagens/4.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../imagens/3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
 </div>
 </div>

 <div class="col-md-3">
            <!-- Card à direita -->
            <div class="card">
                <img src="../imagens/dado2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card à Direita</h5>
                    <p class="card-text">Conteúdo do card à direita.</p>
                </div>
            </div>
        </div>

</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="../imagens/barbaro.jpg" class="card-img-top" alt="Imagem 1">
                <div class="card-body">
                    <h5 class="card-title"><a href="link1.html">Bárbaro</a></h5>
                    <p class="card-text">Guia do bábaro</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="../imagens/bardo.jpg" class="card-img-top" alt="Imagem 2">
                <div class="card-body">
                    <h5 class="card-title"><a href="link2.html">Bardo</a></h5>
                    <p class="card-text">Guia do bardo</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="imagem3.jpg" class="card-img-top" alt="Imagem 3">
                <div class="card-body">
                    <h5 class="card-title"><a href="link3.html">Título do Card 3</a></h5>
                    <p class="card-text">Descrição do Card 3.</p>
                </div>
            </div>
        </div>
    </div>
</div>
    <h1>Nosso conteúdo</h1>


    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>