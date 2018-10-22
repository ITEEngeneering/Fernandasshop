<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">


    <!-- Estilos customizados para esse template -->
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
  </head>
</head>
<body>


  <style>
    .dropdown:hover>.dropdown-menu{
      display: block;
      }
      .zoom{
        overflow: hidden;
      }

      .zoom img{
       max-width: 100%;
        -moz-transition: all 0.3s;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        border-radius: 50%;
        border: 3px solid #ccc;
        box-shadow: 0px 0px 10px 5px;
      }

      .zoom:hover img{
      -moz-transition: scale(1.2);
        -webkit-transition: scale(1.2) ;
        transform: scale(1.2);
       border-radius: 0px;
      }
    .text-item{
     position: absolute;
      left: 5%;
      right: 5px;
      bottom: 20px;
      z-index: 10;
      padding-top: 20px;
      color: #ffffff;
      text-align: center;
      font-weight: 700;
      text-shadow: 0 1px 3px rgba(0,0,0,0.6);

    }
  </style>


<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php"><img src="imagens/icon.ico" width="50px" height="50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" aria-hidden="true" href="#"><Span class="glyphicon glyphicon-home"></Span> Home <span class="sr-only">(atual)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre nós</a>
            </li>
            <li class="nav-item dropdown">

<div class="dropdown">
  <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Produtos
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Alguma ação</a>
    <a class="dropdown-item" href="#">Outra ação</a>
    <a class="dropdown-item" href="#">Alguma coisa aqui</a>
  </div>

</div>




              </div>
            </li>
          </ul>
        </div>




<div class="row mr-5">

              <div class="col-lg-15">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Pesquisar">
                    <span class="input-group-btn">
                      <button class="btn btn-outline-success my-6 my-sm-6 mr-5" type="button">Go! <Span class="glyphicon glyphicon-user"></Span></button>
                    </span>

                </div>

              </div>

               <form class="form-inline mt-2 mt-md-0">





            <a class="btn btn-outline-success my-6 my-sm-6 mr-1" href="" role="button"><Span class="glyphicon glyphicon-user"></Span>Entrar</a>
            <a class="btn btn-outline-success my-6 my-sm-6" href="" role="button">Cadastrar-se</a>
        
          </form>


            </div>



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



<p><h1 class=" text-center text-body font-weight-bold underline" style="margin: 40px; text-decoration: underline;" >Categorias de Produtos</h1></p>
 <div class="row">



          <div class="col-lg-3 col-lg-offset-3 zoom">
            <img class=" img-responsive" src="imagens/unv.jpg" alt="Generic placeholder image" width="240" height="240">
            <p><a class="btn btn-primary" href="#" role="button" style="margin: 20px 0 0 40px;  ">Explorar</a></p>
          </div><!-- /.col-lg-4 -->


          <div class="col-lg-3 col-lg-offset-3 zoom">
            <img class="img-responsive" src="imagens/download.jpg" width="240" height="240">

            <p><a class="btn btn-primary" href="#" role="button" style="margin: 20px;">Explorar</a></p>
          </div><!-- /.col-lg-4 -->

          <div class="col-lg-3 col-lg-offset-3 zoom">
            <img class="img-responsive" src="imagens/servidor-lenovo-systemx-x3550-m4-xeon-e5-2630-230ghz-8gb-988101-MPE20274506466_042015-F-600x214.jpg" width="240" height="240">
            <p><a class="btn btn-primary" href="#" role="button" style="margin: 20px;">Explorar</a></p>
          </div><!-- /.col-lg-4 -->

          <div class="col-lg-3 col-lg-offset-3 zoom">
            <img class="img-responsive" src="imagens/polycom-vvx-311-business-media-phone-2200-48350-025-27.png" alt="Generic placeholder image" width="240" height="240">
              <p><a class="btn btn-primary" href="#" role="button" style="margin: 20px;">Explorar</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->




<p><h1 class=" text-center text-body font-weight-bold underline" style="margin: 40px; text-decoration: underline;" >Produtos mais vendidos</h1></p>

<!--Fim das bordas da categória -->
<footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="../../assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">Desenvolvido por IT & Electronic Engineering, LDA &copy; 2017-2018</small>
          </div>
          <div class="col-6 col-md">

          </div>
          <div class="col-6 col-md">
            <h5>Contacte-nos</h5>

            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Quem somos</h5>

          </div>


          <div class="col-6 col-md">
            <h5>Duvidas Frequentes</h5>

          </div>
        </div>
      </footer>
    </div>



</body>

<script src="js/jquery-3.3.1.slim.min.js" integrity="" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-3.3.1.slim.min.js"></script></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</html>
