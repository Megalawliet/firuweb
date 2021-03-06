<!DOCTYPE html>
<html lang="en">
<head>
  <title>FiruGames</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="StyleSheet" href="./css/estil.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!-- =================[CAPÇALERA DE LA PÀGINA]=================== -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">FiruGames</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Inici</a></li>
        <li><a href="cataleg.php">Cataleg</a></li>
        <li class="active"><a href="#">Generes</a></li>
        <li><a href="info.html">Info</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="contacte.html">Contacte</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item">
          <img class="first-slide" src="imatges/3.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><a href="#">FiruGames</a></h1>
              <p> </p>
            </div>
          </div>
        </div>
        <div class="item active">
          <img class="second-slide" src="imatges/2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><a href="#">FiruGames</a></h1>
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="https://getbootstrap.com/docs/3.3/examples/carousel/#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="https://getbootstrap.com/docs/3.3/examples/carousel/#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
<!-- =================[COS DE LA PÀGINA]=================== -->

<div id="contenedor" class="container-fluid bg-3 text-center">
  <h3>Info</h3><br>

    <h4>FiruGames és una web per a poder veure nous videojocs, vells videojocs i videojocs no tant vells però que tots han tingut una gran valoració o han sigut grans jocs amb no molt d'èxit. Aquest podran ser de diferents plataformes i també podrem veure diferents valoracions i comentaris de professionals de proves amb videojocs .</h4>
    <img src="imatges/info.png">

</div>

<!-- =================[PEU DE LA PÀGINA]=================== -->
<footer class="container-fluid text-center">
        <p>Grup 1: Andrés Moreno, Jordi Simó, Noelia Barrera, Javier López </p>
        <p>Professor: Àlex Milián Sangüessa</p>
        <a href="avis_legal.html">Avís legal</a>
</footer>

</body>
</html>
