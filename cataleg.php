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
        <li class="active"><a href="#">Cataleg</a></li>
        <li><a href="generes.php">Generes</a></li>
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
  <table class="table table-striped table-bordered">


  <?php
    include_once("dades/dades.php");
    $cadena= "select * from catalegjocs";
    $result = $conexion->query($cadena);
    $conexion->close();
    $cont =0;
    while ($registre=$result->fetch_assoc()) {

      if ($cont<3){
      echo'<td style="text-align:center"><a href=""><img class="caratula" src="caratules/'.$registre['id'].'_.png"><br>'.$registre['titol'].'</a></td>';
    }else{
      $cont=0;
      echo'<td style="text-align:center"><a href=""><img class="caratula" src="caratules/'.$registre['id'].'_.png"><br>'.$registre['titol'].'</a></td></tr>';
    }
    $cont++;
    }
   ?>



   </table>



   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
var a;
$(document).ready(function(){
  $(".caratula").mouseenter(function(){
      a= $(this).attr('src').substring(0,11);
      $(this).attr('src',a+'.png');
  });
  $(".caratula").mouseleave(function(){
      a= $(this).attr('src').substring(0,11);
      $(this).attr('src',a+'_.png');
  });
});
</script>
</div>

<!-- =================[PEU DE LA PÀGINA]=================== -->
<footer class="container-fluid text-center">
  <p>Grup 1: Andrés Moreno, Jordi Simó, Noelia Barrera, Javier Lopez </p>
  <p>Professor: Alex Milian</p>
</footer>

</body>
</html>
