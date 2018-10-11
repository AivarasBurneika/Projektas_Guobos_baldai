<?php
    require __DIR__ . '../../src/app.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/php; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Guobos baldai</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style media="screen">

  .text-black{
    text-align: center;
  }

  </style>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="../../public/index.php" class="brand-logo" ><img src="../images/main_page/logo.png" class="logo" alt="Logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="../views/virtuve.php" >Virtuvės baldai</a></li>
        <li><a href="../views/svetaine.php">Svetainės baldai</a></li>
        <li><a href="../views/sistemos.php">Slankiojančios sistemos</a></li>
        <li><a href="#apieMus">Apie mus</a></li>
        <li><a href="#kontaktai">Kontaktai</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="../views/virtuve.php" >Virtuvės baldai</a></li>
        <li><a href="../views/svetaine.php">Svetainės baldai</a></li>
        <li><a href="../views/sistemos.php">Slankiojančios sistemos</a></li>
        <li class="sidenav-close"><a href="#apieMus">Apie mus</a></li>
        <li class="sidenav-close"><a href="#kontaktai">Kontaktai</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="container">
    <div class="section">
        <!-- Icon Section -->
      <div class="row">
        <div class="col s12 center">
          <br>
          <h4>Atliktų darbų su slankiojančiomis sistemomis ir spintų pavyzdžiai </h4>
        </div>
      </div>

      <div class="row" >
        <div class="col s12 m6 l4">
          <div  class="icon-block">
            <div class="box1">
              <img id="sistemosb1" class="myImg" src="../images/slankiojancios_sistemos/sistemos1.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img id="sistemosb2" class="myImg" src="../images/slankiojancios_sistemos/sistemos2.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img id="sistemosb3" class="myImg" src="../images/slankiojancios_sistemos/sistemos3.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div  class="icon-block">
            <div class="box1">
              <img id="sistemosb4" class="myImg" src="../images/slankiojancios_sistemos/sistemos4.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img id="sistemosb5" class="myImg" src="../images/slankiojancios_sistemos/sistemos5.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img id="sistemosb6" class="myImg" src="../images/slankiojancios_sistemos/sistemos6.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12 center">
          <table >
            <tr>
              <th>Profesionalus projektavimas</th>
              <th>Nemokamas montavimas</th>
              <th>Kokybiški ir patogūs baldai</th>
              <th>Geriausia kaina</th>
              <th>Nemokamas pristatymas</th>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- The Modal -->
  <div id="myModal" class="modal">
    <!-- Modal Content (The Image) -->
    <!-- The Close Button -->
    <span class="close">&times;</span>
    <input type="text" id="imageNumber" value="" hidden>
    <!-- Modal Caption (Image Text) -->
  <a class="prev" id="back" >&#10094;</a>
  <div class="boxSistemos">
  </div>
  <a class="next" id="forward" >&#10095;</a>
</div>

  <!-- fixed action button -->
  <div class="fixed-action-btn susisiekime">
    <button  id="download-button" class="btn-large waves-effect waves-light btn amber darken-4 modal-trigger orderButton" data-target="modal1"><b>Turite klausimų? Susisiekime</b></button>
  </div>
  <!-- iššokanti forma -->
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content white" id="formContent" >
      <!-- The Close Button -->
        <span class="close">&times;</span>
      <div class="row center black-text text-darken-2">
        <h5><b>Užsakymo forma</b></h5>
      </div>
      <div class="row">
        <form id="contact" action="../views/sistemos.php" method="post" class="col s12 forma">
          <div class="row modal-form-row">
            <div class="input-field col s12">
              <input id="kliento_vardas" type="text" name="vardas" class="validate" required autofocus>
              <label for="kliento_vardas">Įrašykite savo vardą</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="kliento_pastas" type="email" name="email" class="validate" required>
              <label for="kliento_pastas">Įrašykite savo elektroninio pašto adresą</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="kliento_zinute" type="text" name="message" class="materialize-textarea validate" required></textarea>
              <label for="kliento_zinute">Aprašykite savo svajonių baldą, o mes jį pagaminsime</label>
            </div>
          </div>
          <div class="row center">
          <button class="modal-action modal-close center btn waves-effect waves-light btn amber darken-4" name="submit" type="submit" id="contact-submit">Pateikti Užklausą</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div class="parallax-container valign-wrapper">
    <div class="parallax"><img src="../images/slankiojancios_sistemos/sistemos7.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal brown lighten-5 black-text">
    <div  class="container">
      <div  class="row">
        <div class="col l6 s12">
          <h5 class="black-text" id="apieMus">Apie mus</h5>
          <p class="black-text">Guobos baldai – tai nestandartinių baldų projektavimas ir gamyba pagal individualius užsakymus. Mes gaminame: virtuvės, prieškambario, miegamojo, vonios, svetainės, biuro, vaiko kambario baldus, slankiojančias sistemas ir visus kitus nestandartinius baldus.</p>
        </div>
        <div class="col l3 s12">
          <h5 class="black-text">Nuorodos</h5>
          <ul >
            <li ><a class="black-text" href="../../public/index.php">Pradžia</a></li>
            <li><a class="black-text" href="virtuve.php">Virtuvės baldai</a></li>
            <li><a class="black-text" href="svetaine.php">Svetainės baldai</a></li>
            <li><a class="black-text" href="sistemos.php">Slankiojančios sistemos</a></li>
          </ul>
        </div>
        <div  class="col l3 s12">
          <h5 class="black-text" id="kontaktai">Kontaktai</h5>
          <ul>
            <li>Laisvės pr. 60, Vilnius</li>
            <li><a class="black-text" href="callto:+37065669099">Tel: +37065669099</a></li>
            <li><a class="black-text" href="http://www.guobosbaldai.lt">www.guobosbaldai.lt</a></li>
            <li><a class="black-text" href="mailto:info@guobosbaldai.lt">info@guobosbaldai.lt</a></li>
          </ul>
          <a class="black-text" href="https://www.facebook.com/Guobos-baldai-246022925538150/" target="_blank">
            <i  class="fa fa-facebook-official" style="font-size:36px"></i>
          </a>
          <a class="black-text" href="https://twitter.com/" target="_blank">
            <i class="fa fa-twitter-square" style="font-size:36px"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="footer-copyright black-text" >
      <div class="container" >
      Made by <a class="black-text">Vaida, Aivaras, Asta</a>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>
  <script type="text/javascript">
  function changeImage(imageNumber) {
    $(".boxSistemos").empty();
    var img = $("<img />");
    img.prop("src", "../images/slankiojancios_sistemos/sistemos" + imageNumber + ".jpg");
    $(".boxSistemos").append(img);
  };
  </script>
  </body>
</html>
