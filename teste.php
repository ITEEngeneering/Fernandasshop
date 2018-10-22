<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
     <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
  </head>
</head>
<body>

 <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><img src="imagens/icon.ico" width="50px" height="50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" aria-hidden="true" href="#">Home <span class="sr-only">(atual)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre nós</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
              <div class="dropdown-menu" aria-labelledby="dropdown10">
                <a class="dropdown-item" href="#">Vestidos</a>
                <a class="dropdown-item" href="#">calsas</a>
                <a class="dropdown-item" href="#">Sapatos</a>
              </div>
            </li>
          </ul>
        </div>

        <div class="row mr-5">
              
              <div class="col-lg-15">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Pesquisar">
                    <span class="input-group-btn">
                      <button class="btn btn-outline-success my-6 my-sm-6 mr-5" type="button">Go!</button>
                    </span>
                  
                </div>
                
              </div>
              

            </div>
          <form class="form-inline mt-2 mt-md-0">
            
            
            


            <a class="btn btn-outline-success my-6 my-sm-6 mr-1" href="" role="button">Entrar</a>
            <a class="btn btn-outline-success my-6 my-sm-6" href="" role="button">Cadastrar-se</a>
          </form>
        </div>
      </nav>
    </header>



<main role="main">
<!--Indicadores dos slides -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
<!--Fim indicadores dos slides-->

<!--Imagens dos Slides -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="imagens/foto1.jpg" alt="First slide">
          </div>

          <div class="carousel-item">
            <img class="second-slide" src="imagens/foto2.jpg" alt="Second slide">
          </div>

          <div class="carousel-item">
            <img class="third-slide" src="imagens/foto3.jpg" alt="Third slide">
          </div>
        </div>
<!--Fim imagens dos Slides-->

<!--Indicadores de avançar e voltar nos slides -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Voltar</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Avançar</span>
        </a>
      </div>
<!--Fim indicadores de avançar e voltar nos slides -->


 <!--Bordas da categória-->   


<div class="container marketing">

<p><h1 class=" text-center text-body font-weight-bold underline" style="margin: 40px; text-decoration: underline;" >Categórias de Produtos</h1></p>
 <div class="row">
          <div class="col-lg-3">
            <img class="rounded" src="imagens/foto1.jpg" data-zoom-image="imagens/foto2.jpg" alt="Generic placeholder image" width="240" height="240">
            <p><a class="btn btn-primary" href="#" role="button" style="margin: 20px 0 0 40px;  ">Explorar</a></p>
          </div><!-- /.col-lg-4 -->


          <div class="col-lg-3">
            <img class="rounded" src="imagens/foto2.jpg" width="240" height="240">
         
            <p><a class="btn btn-primary" href="#" role="button" style="margin: 20px;">Explorar</a></p>
          </div><!-- /.col-lg-4 -->

          <div class="col-lg-3">
            <img class="rounded" src="imagens/foto2.jpg" width="240" height="240">
            <p><a class="btn btn-primary" href="#" role="button" style="margin: 20px;">Explorar</a></p>
          </div><!-- /.col-lg-4 -->

          <div class="col-lg-3">
            <img class="rounded" src="imagens/foto3.jpg" alt="Generic placeholder image" width="240" height="240">
              <p><a class="btn btn-primary" href="#" role="button" style="margin: 20px;">Explorar</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->




<p><h1 class=" text-center text-body font-weight-bold underline" style="margin: 40px; text-decoration: underline;" >Produtos mais vendidos</h1></p>
<!--Fim das bordas da categória -->



</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>