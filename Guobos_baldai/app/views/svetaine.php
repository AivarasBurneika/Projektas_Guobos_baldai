<?php
    require __DIR__ . '../../src/app.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/php; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Parallax Template - Materialize</title>

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
        <!-- Images Section -->
      <div class="row">
        <div class="col s12 center">
          <h3 class="text-black" class="header center teal-text text-lighten-2">Svetainės baldai</h3>
            <p class="text-black">Gaminant svetainės baldus mūsų naudojamos technologijos leidžia patenkinti net pačių išrankiausių klientų poreikius. Baldų projektavime skiriamas itin didelis dėmesys net menkiausioms detalėms. Gaminame įvairius, tinkamiausius Jūsų interjerui baldus. Visi svetainės baldai patogūs, funkcionalūs ir dailūs.</p>
        </div>
      </div>
      <div class="row" >
        <div class="col s12 m6 l4">
          <div  class="icon-block">
            <div class="box1">
              <img id="svetaines1" class="myImg" src="../images/svetaine/svetaine1.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img id="svetaines2" class="myImg" src="../images/svetaine/svetaine2.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4" class="eile">
          <div  class="icon-block">
            <div class="box1">
              <img id="svetaines3" class="myImg" src="../images/svetaine/svetaine3.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img id="svetaines4" class="myImg" src="../images/svetaine/svetaine4.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img id="svetaines5" class="myImg" src="../images/svetaine/svetaine5.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img id="svetaines6" class="myImg" src="../images/svetaine/svetaine6.jpg" alt="">
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
      <div class="boxSvetaine">
      </div>
      <a class="next" id="forward" >&#10095;</a>
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
        <form id="contact" action="../views/svetaine.php" method="post" class="col s12 forma">
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
    <div class="section no-pad-bot">
      <div class="container">
      </div>
    </div>
    <div class="parallax"><img src="../images/main_page/sistemos.jpg" alt="Unsplashed background img 3"></div>
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
            <li><a class="black-text" href="../views/virtuve.php">Virtuvės baldai</a></li>
            <li><a class="black-text" href="../views/svetaine.php">Svetainės baldai</a></li>
            <li><a class="black-text" href="../views/sistemos.php">Slankiojančios sistemos</a></li>
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
          <p class="black-text" class="social"><i class="fa fa-facebook-official" style="font-size:36px"></i><i class="fa fa-twitter-square" style="font-size:36px"></i></p>
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
    $(".boxSvetaine").empty();
    var img = $("<img />");
    img.prop("src", "../images/svetaine/svetaine" + imageNumber + ".jpg");
    $(".boxSvetaine").append(img);
  };
  </script>
  </body>
</html>
