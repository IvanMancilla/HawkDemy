<!-- Bidvertiser2036502 -->
<!DOCTYPE html>
<html lang="es">
  <head>
    


    <!-- Required meta tags -->    
<script src="https://contextual.media.net/dmedianet.js?cid=8CUY5810N" async="async"></script>
    <meta name="description" content="Aquí encontrarás las mejores historias, artículos, leyendas, creepypastas, imágenes, Videos y mucho más contenido relacionado con el terror y lo paranormal">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Styles -->
    <link rel="shortcut icon" href="/images/design/hs.png">
    <link rel="stylesheet" type="text/css" href="/styles/styles.css?n=1">
    <link rel="stylesheet" type="text/css" href="/styles/parallax.css?n=1">
    <link rel="stylesheet" type="text/css" href="/styles/responsive.css?n=1">
    <link rel="stylesheet" type="text/css" href="/styles/animations.css?n=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--FONT -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
@yield('extraLinks')
@yield('title')    
  </head>
  <body  style="font-family: 'Montserrat', sans-serif;">
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark    fixed-top" style="background-color: transparent;transition: 0.4s;">
      <a id="log" class="navbar-brand" href="/"><img src="/images/design/hs.png" style="max-width: 60px; filter: invert(0%);" class="d-inline-block align-top zoom"> </a>
  
 <div class="showMobile "style=" color: #FECE78;">
   HAWKDEMY
 </div> 


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    
  <div class="collapse navbar-collapse navMobile" id="navbarNavDropdown">

    <ul class="navbar-nav" >
      <li class="nav-item itemNavMob itemNavDesk">
        <a class="nav-link itemNavMob itemNavDesk"  href="/" style="color: white " id="navbar-lnk" ><b>Inicio</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link itemNavMob itemNavDesk" href="/creepypastas" style="color: white " id="navbar-lnk2"><b>Creepypastas</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link itemNavMob itemNavDesk" href="/listaVideos" style="color: white " id="navbar-lnk3"><b>Videos</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link itemNavMob itemNavDesk" href="/articulos" style="color: white " id="navbar-lnk4"><b>Artículos</b></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link itemNavMob itemNavDesk" href="/acercaDe" style="color: white " id="navbar-lnk5"><b>Nosotros</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link itemNavMob itemNavDesk" href="/ayuda" style="color: white " id="navbar-lnk6"><b>Ayuda</b></a>
      </li>

      
    </ul>
  </div>


</nav>

    <div class="container-fluid" > 
@yield('content')

      <!-- FOOTER -->

<div class="container-fluid">
<div class="row " style="background-color: #ddd">
  <hr size="50" width="100%" >

<div  class="col-12 col-sm-6" align="left">
    <h3><u>SEDPC</u></h3>
    
    <h6>email: contacto@sedpcsa.com</h6>
    <h6>Tels.: 5610 1868 • 5610 5955</h6>
    <h6>Fax: 5610 5957</h6>
    <h6>www.sedpcsa.com</h6>
    <br><br><br><br> <br>
    <p style=" font-size: 10px;" >SEDPC S.A. de C.V. Cerrada de Orquídeas No. 4 - A, Colonia Pedregal de Santo Domingo, CP. 04369, Coyoacán, Mexico, D.F.</p>
  </div>
  <div class="col-12 col-sm-6" style="background-color: #ddd" align="center">
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.45946412719!2d-99.09979788578433!3d19.262375451094723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce03e3bb9a0a03%3A0xfcfe0467956832e4!2sSEDPC%20SA%20de%20CV!5e0!3m2!1ses-419!2smx!4v1583370172640!5m2!1ses-419!2smx" width="600" height="300" frameborder="0" style="border:0; max-width: 100%" allowfullscreen=""></iframe>
    <br><br>
  </div>
  
</div>
</div>

    </div> <!--END CONTAINER-->   
  

<!--Scroll nav-->
    <script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
nave();
window.onscroll = function() {scrollFunction()};

function nave(){
  if (window.innerWidth < 700) {
    
    document.getElementById("navbar").style.backgroundColor = "transparent";        
    document.getElementById("navbar").className = "navbar navbar-expand-lg navbar-dark  fixed-top";
    document.getElementById("navbar-lnk").style.color = "black";
    document.getElementById("navbar-lnk2").style.color = "black";
    document.getElementById("navbar-lnk3").style.color = "black";
    document.getElementById("navbar-lnk4").style.color = "black";
    document.getElementById("navbar-lnk5").style.color = "black";
    document.getElementById("navbar-lnk6").style.color = "black";
    
    document.getElementById("log").style.filter = "invert(00%)";
  }

}

function scrollFunction() {

  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    
    document.getElementById("navbar").style.backgroundColor = "white";        //#008F39
    document.getElementById("navbar").className = "navbar navbar-expand-lg navbar-dark  fixed-top";
    document.getElementById("navbar-lnk").style.color = "black";
    document.getElementById("navbar-lnk2").style.color = "black";
    document.getElementById("navbar-lnk3").style.color = "black";
    document.getElementById("navbar-lnk4").style.color = "black";
    document.getElementById("navbar-lnk5").style.color = "black";
    document.getElementById("navbar-lnk6").style.color = "black";
    
    /*document.getElementById("log").style.filter = "invert(100%)";*/
  } else {
    if (window.innerWidth <700) {
    document.getElementById("navbar").style.backgroundColor = "transparent";
    document.getElementById("navbar").className = "navbar navbar-expand-lg navbar-dark  fixed-top";
    document.getElementById("navbar-lnk").style.color = "black";
    document.getElementById("navbar-lnk2").style.color = "black";
    document.getElementById("navbar-lnk3").style.color = "black";
    document.getElementById("navbar-lnk4").style.color = "black";
    document.getElementById("navbar-lnk5").style.color = "black";
    document.getElementById("navbar-lnk6").style.color = "black";
    
    document.getElementById("log").style.filter = "invert(0%)";
  }else{
    document.getElementById("navbar").style.backgroundColor = "transparent";
    document.getElementById("navbar").className = "navbar navbar-expand-lg navbar-dark  fixed-top";
    document.getElementById("navbar-lnk").style.color = "white";
    document.getElementById("navbar-lnk2").style.color = "white";
    document.getElementById("navbar-lnk3").style.color = "white";
    document.getElementById("navbar-lnk4").style.color = "white";
    document.getElementById("navbar-lnk5").style.color = "white";
    document.getElementById("navbar-lnk6").style.color = "white";
    
    document.getElementById("log").style.filter = "invert(0%)";
  }
  }
}
</script>
@yield('extraScripts')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>