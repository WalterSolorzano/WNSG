<!DOCTYPE html>
<html lang="en-us" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="utf-8">
    <title>Inicio</title>
      <script src="push.min.js"></script>
        <link rel="icon" href="W.ico" />
    <style>
    *{
      border-radius:6px;
      margin:0px;
      padding:0px;
      font-family:Sans-serif,Verdana,Open Sans,Droid Sans,Roboto,Scada,Sansita;
  }
    body{
background:#4b4b4beb;
    }
.contenedor{
  width: 100%;
  max-width: 1000px;
  margin: 0 auto;
  overflow: hidden;
}

.main{
  width: 100%;
  border:solid 1px #ffffff;
  background:#4b4b4b;
  color:#ffffff;
  padding: 20px;
  float:left;
  box-sizing: border-box;
}
.PHP{
      border:solid 1px #ffffff;
    width:100%;
    background:#75ffb4db;
    color:black;
    float:left;
    padding:14px;
    box-sizing: border-box;
        font-family:fantasy,Sans-serif,Verdana;
}

.dos{
      border:solid 1px #ffffff;
    width: 100%;
    background: ##4b4b4beb;
    padding: 20px;
    float:left;
    box-sizing: border-box;
}
.tres{
  width: 100%;
  background:#313131;
  padding: 20px;
  float: left;
  box-sizing: border-box;
  border:solid 2px black;
    
}

.tres h3,h6{
  color:#ffffff;
  background: transparent;
}

.tres h3,h6:hover{
  background:blue;
  color:#ffffff;
  border-radius: 10px;
  border: solid 1px black;
}

header nav  a
{
      display:inline-block;
color:#fff;
text-decoration:none;
padding:3px 3px;
line-height:normal;
font-size:18px;
font-weight:bold;
-webkit-transition:all 500ms ease;
-o-transition:all 500ms ease;
transition:all 500ms ease;
}




header {
          width:100%;
          overflow:hidden;
          background:black;
          margin-bottom:5px;
          border: solid 1px blue;
}

.wrapper {
  width:100%;
  max-width:900px;
  margin: auto;
  overflow: hidden;
}

.logo img:hover{
    background:#fff9f97d;
}
.logo img{
  width: 100%;
  height: auto;
}


header nav {
    float:left;
    line-height:40px;
}




header nav  a:hover {
               background:#ffffff;
               color:blue;
               border-radius:40px;
}

  @media screen and (max-width: 700px){
    body{
    background:#4b4b4beb;
    }
    
    .logo img{
        width:100%;
        height:55%;
    }
    .main img{
        width:45%;
        height:18%;
    }
    .main{
      width: 100%;
        font-size: 17px;
    }
    .dos{
      width:100%;
        font-size: 17px;
    }
    .tres{
      width: 100%;
        font-size: 17px;
        background:#383838;
        color:#ffffff;
    }
    .tres a{
      background:#383838;
      color:#a7a7a7;
    }
    .tres a:hover{
    color:#dedddd;
    }
.PHP{
    width: 100%;
    background:#ffffff;
    color:green;
      font-size: 17px;
          font-family:fantasy,Sans-serif,Verdana,Sansita;
}
.social{
  top: 200px;
}

header nav  a
{
padding:2px 3px;
line-height:normal;
font-size:16px
}



p{
  font-size: 16px;
}


h1,h2,h3,h4,h5{
  font-size: 18px;
}
}
.Descargar {
  font-size: 32px
  color:#90ba00;
}
.Descargar:hover {
  font-size:33px;
  color:#ffffff;
}

.uno{
    background:#ffffff;
    color:black;
  }

.main a
  {
color:#fff;
color:orange;
  }

.main a:hover{
  background:#ffffff;
  color:orange;
}
.social ul li .icon-facebook {background:#3b59987d;} /* Establecemos los colores de cada red social, aprovechando su class */
.social ul li .icon-twitter {background: #00abf091;}
.social ul li .icon-mail {background: #6666668a;}
.social ul li .icon-youtube1 {background: #d9523287;}

.social ul li a:hover {
background: #000; /* Cambiamos el fondo cuando el usuario pase el mouse */
padding: 10px 25px; /* Hacemos mas grande el espacio cuando el usuario pase el mouse */
}
.social ul {
list-style: none;
}
.social ul li a{
display: inline-block;
color:#fff;
background: #000;
padding: 10px 10px;
text-decoration: none;}

@font-face {
  font-family: 'icomoon';
  src:  url('fonts/icomoon.eot?84hrgr');
  src:  url('fonts/icomoon.eot?84hrgr#iefix') format('embedded-opentype'),
    url('fonts/icomoon.ttf?84hrgr') format('truetype'),
    url('fonts/icomoon.woff?84hrgr') format('woff'),
    url('fonts/icomoon.svg?84hrgr#icomoon') format('svg');
  font-weight: normal;
  font-style: normal;
}

[class^="icon-"], [class*=" icon-"] {
  /* use !important to prevent issues with browser extensions that change fonts */
  font-family: 'icomoon' !important;
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;

  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.icon-mail:before {
  content: "\ea83";
}
.icon-google:before {
  content: "\ea88";
}
.icon-facebook:before {
  content: "\ea90";
}
.icon-twitter:before {
  content: "\ea96";
}
.icon-youtube1:before {
  content: "\ea9d";
}
.main img{
    width:50%;
    height:20%;
}
    </style>
  </head>
  <body>
          <script>
    Push.create("Bienbenido", {
    body: "Esto es una prueba",
    icon: 'https://img.lovepik.com/element/40031/9752.png_860.png' ,
    timeout: 4000,
    onClick: function () {
        window.location="https://waltersolorzano.000webhostapp.com";
        this.close();
    }
});
</script>
    <div class="contenedor">
      <header>
 <div class="wrapper">
 <div class="logo"><img src="Logoxd.png"width="240px" height="100px"></div>
</div>
 <nav>
      <a href="Proyectos.html">Cursos</a>
<a href="Otros.html">Otros</a>
    <a href="Contacto.html">Contacto</a>
   </nav>
 </header>




<div class="PHP">
  <?php

      function contador()
      {
          $archivo = "contador.txt"; //el archivo que contiene en numero
          $f = fopen($archivo, "r"); //abrimos el archivo en modo de lectura
          $contaor = 0;
          if($f)
        {
              $contador = fread($f, filesize($archivo)); //leemos el archivo
              $contador = $contador + 1; //sumamos +1 al contador
              fclose($f);
          }
          $f = fopen($archivo, "w+");
          if($f)
          {
              fwrite($f, $contador);
              fclose($f);
          }
          return $contador;
      }
      $visitante = contador();
      echo "Eres el visitante numero: " . $visitante;
   ?>
   </div>
   <div class="main">
  <br>
<iframe src="https://www.powr.io/plugins/countdown-timer/view/19366776" style="width:100%;" height="187px" frameborder="0"></iframe>
  <br>
  <br>
  <br>
  <img src="tenor.gif" alt="Hola-Hello!"/>
  <br>
  <h4>-La pagina web presenta errores con algunos dispisitivos moviles-Como:Galaxy J2 </h4>
  <br>
  <p>Hola, Bienbenidos a mi sitio web, Espero que te guste mucho <br>
y puedes visistar cursos MUY BUENOS en Youtube En <a class="YT"href="https://www.youtube.com/user/FalconMasters">FalconMaster.</a></p>
<br>
<h1>Gracias 🙂</h1>
<div class="Descargar">
  <a href="index1.html">MIRA!!</a>
</div>
</div>
    <div class="dos">
      <div class="social">
       <ul>
         <li><a href="http://www.facebook.com/WalterNoelSG" class="icon-facebook"></a></li>
         <li><a href="http://www.twitter.com/WALTERNOEL13"  class="icon-twitter"></a></li>
         <li><a href="mailto:ws692888@gmail.com" class="icon-mail"></a></li>
         <li><a href="https://www.youtube.com/channel/UCf16H-CvzE9CEjxFRv6jtvg?view_as=subscriber" target="_blank" class="icon-youtube1"></a></li>
       </ul>
     </div>
    <!-- <img src="http://www.codigos-qr.com/qr/php/qr_img.php?d=https%3A%2F%2Fwaltersolorzano.000webhostapp.com%2Findex.php&s=8&e=m" alt="Generador de Códigos QR Codes"/>-->
<h1>Sigeme</h1>
<br>
<script src="https://apis.google.com/js/platform.js"></script>

<div class="g-ytsubscribe" data-channel="HolaSoyGerman" data-layout="default" data-count="default"></div>

    </div>
<div class="tres">

<br>
<br>
<br>
<br>
<h1><a href="xd.html">ADMIN</a></h1>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<a href="#">©copiright|
    Todos los derechos reservados|
     WSG</a>

     <h6>Este sitio esta sujeto a cambios "Completos del sitio"</h6>
</div>
</div>
  </body>
</html>
