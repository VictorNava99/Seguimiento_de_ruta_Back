<!DOCTYPE html>
<?php
  session_start();
  if (@!$_SESSION['user']) {
    header("Location:inicio.php");
  }
  ?>
<html>
<head>
  <meta charset="utf-8">
  <title>Seguimiento de ruta</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> -->
   <script type="text/javascript" src="jscripts.js"></script>
<!--   <link rel="shortcut icon" href="favicon.jpg"> -->
   <link rel="shortcut icon" href="frame.png">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="fonticons.css">

   <meta name="descripcion" content="Nuestra plataforma de seguimiento de ruta, ha evolucionado para participar en un emocionante proyecto de blockchain en colaboración con los estudiantes del Centro Universitario de Tonala. Nos hemos especializado en el seguimiento de la ruta 98-C, utilizando la tecnología blockchain para garantizar un rastreo transparente y confiable. Este proyecto representa la unión de la educación y la innovación tecnológica para crear un impacto significativo en la gestión de rutas.">
  <meta name="author" content="Alumnos del CUT">
</head>
<body class="fondo">

  <div class="contenedor">
    <header>
      <div>
        <a href="index.php"><img src="bannerk.png" class="banner"></a>
      </div>
    </header>
<!--
    <nav>
      <ul class="menu">
          <li>
          <a href="introduccion.php" title="Introduccion"><img src="introduccion.png" class="iconos"></a></li>
                <li>
                  <a href="modulo1.php" title="Modulo 1"><img src="modulo1.png" class="iconos"></a></li>
                <li>
                  <a href="modulo2.php" title="Modulo 2"><img src="modulo2.png" class="iconos"></a></li>
                <li>
                  <a href="modulo3.php" title="Modulo 3"><img src="modulo3.png" class="iconos"></a></li>
                <li>
                  <a href="lista-juegos.php" title="Juegos"><img src="juegos.png" class="iconos"></a></li>
                <li>
                  <a href="desconectar.php" title="Iniciar sesion / Registrarse"><img src="cerrar.png" class="iconos"></a></li>
           </ul>
    </nav> -->
<nav>
    <div class="media"></div>
    <ul class="menufonticons nav">
    <li class="menufonticons li1"><i class="fas fa-sort-alpha-up"></i> 
      <ul>
        <li class="modulomenuli"><a href="introduccion.php">INTRODUCCION</a>
        <li><a href="intro_abc.php"></a>
        <li><a href="intro_numbers.php"></a>
        <li><a href="intro_colors.php"></a>
        <li><a href="intro_objects.php"></a>
        <li><a href="intro_language.php"></a>  
      </ul>
     </li>
     
     <li class="menufonticons li1"><i class="fas fa-globe-americas"></i>
      <ul>
        <li class="modulomenuli"><a href="modulo1.php">MODULO 1</a>
        <li><a href="modulo1_countries.php"></a>
        <li><a href="modulo1_numbers.php"></a>
        <li><a href="modulo1_subjects.php"></a>
        <li><a href="modulo1_family.php"></a>
        <li><a href="modulo1_sports.php"></a>
      </ul>
     </li>


     <li class="menufonticons li1"><i class="fas fa-user-md"></i>
      <ul>
        <li class="modulomenuli"><a href="modulo2.php">MODULO 2</a>
        <li><a href="modulo2_jobs.php"></a>
        <li><a href="modulo2_chores.php"></a>
        <li><a href="modulo2_physical.php"></a>
        <li><a href="modulo2_parts.php"></a>
        <li><a href="modulo2_animals.php"></a>
        <li><a href="modulo2_character.php"></a>
      </ul>
     </li>


     <li class="menufonticons li2"><i class="fas fa-home"></i>
      <ul>
        <li class="modulomenuli"><a href="modulo3.php">MODULO 3</a>
        <li><a href="modulo3_items.php"></a>
        <li><a href="modulo3_furniture.php"></a>
        <li><a href="modulo3_house.php"></a>
      </ul>
       
     </li>


     <li class="menufonticons li2"><i class="fas fa-gamepad"></i>
      <ul>
        <li><a href="lista-juegos.php"> OTROS </a>
      </ul>


<!--  <li><i class="fas fa-door-closed"></i></li> -->
     <li class="menufonticons li2"><i class="fas fa-door-open"></i>
      <ul>
        <li><a href="desconectar.php">SALIDA</a>
      </ul>


  </ul>
</nav>

<!--- navegador --->
<!--
  <nav>
    <ul>
      <li><a href="#">Introduction</a>
      <ul>
        <li><a href="#">Alphabet</a>
        <li><a href="#">Numbers 0-10</a>
        <li><a href="#">Colors</a>
        <li><a href="#">Classroom objects</a>
        <li><a href="#">Classroom language</a>  
      </ul>
      <li><a href="#">Module 1</a>
      <ul>
        <li><a href="#">Countries and nationalities</a>
        <li><a href="#">Numbers 11-100</a>
        <li><a href="#">School subjects</a>
        <li><a href="#">Members of the Family</a>
        <li><a href="#">Sports</a>
      </ul>
      <li><a href="#">Module 2</a>
        <ul>
        <li><a href="#">Jobs</a>
        <li><a href="#">Household chores</a>
        <li><a href="#">Physical appereance</a>
        <li><a href="#">Parts of the body</a>
        <li><a href="#">Animals</a>
        <li><a href="#">Adjectives describing character</a>
      </ul>
      <li><a href="#">Module 3</a>
        <ul>
        <li><a href="#">Personal items</a>
        <li><a href="#">Household items / Furniture</a>
        <li><a href="#">Rooms and parts of a house</a>
      </ul>
      <li><a href="#">Games</a>

      <li><a href="#">Exit</a>
    </ul>
  </nav> -->
<!-- Seccion 1 -->
       <br>
       <p class="titulomodulo">Tema</p>

    <section class="contenido1">

    <div class="indexFeatElem indexTop indexLeft" style="background:none;width:1000px;">
        <div class="indexLeftImage" style="width:250px;height:250px;">
           <marquee direction="up" scrolldelay="500" class="imagenmarquee" onMouseOut="this.start()" onMouseOver="this.stop()">
            <a href="modulo3_objetos.php"><img src="fonki.png" class="imagenmodulo"></a>
            <a href="modulo3_furniture.php"><img src="muebles.png" class="imagenmodulo"></a>
            <a href="modulo3_house.php"><img src="house.png" class="imagenmodulo"></a>
          </marquee>
        </div>
        <div class="indexRightContent" style="">
        <div class="indexRightContentQuestions questionYellow"></div>
        <a href=""><div class="indexRightContentQuestions questionLightBlue"></div></a>
        <a href="modulo3_furniture.php"><div class="indexRightContentQuestions questionBlue"> </div></a>
        <a href="modulo3_house.php"><div class="indexRightContentQuestions questionLightBlue"></div>
        
        </div>
      </div>

      <article>
        <h2 class="nava"></h2>
      </article>
    </section>

        <aside class="barralateral1">
      <div class="indexFeatElemRight indexFact" style="width:325px;height:250px;">
        <br>
          <div class="indexFactText"><br> <br>  <br>  <br> <br> </div>
        <a href="http"><div class="indexFactMore"></div></a>     
      </div>
    </aside>
<!-- Termina seccion 1 -->

<!-- Seccion 2 -->
 <!-- Deshabilitador
       <section class="contenido2_mod3">

    <div class="indexFeatElem indexTop indexLeft" style="background:none;width:1000px;">
        <div class="indexLeftImage" style="width:250px;height:300px;">
          <marquee direction="up" scrolldelay="500" class="imagenmarquee" onMouseOut="this.start()" onMouseOver="this.stop()">
            <a href="#"><img src="batteries.gif" class="imagenmodulo"></a>
            <a href="#"><img src="batteries.gif" class="imagenmodulo"></a>
            <a href="#"><img src="batteries.gif" class="imagenmodulo"></a>
            <a href="#"><img src="batteries.gif" class="imagenmodulo"></a>
            <a href="#"><img src="batteries.gif" class="imagenmodulo"></a>
          </marquee>
        </div>
        <div class="indexRightContent" style="">
        <div class="indexRightContentQuestions questionYellow">FUNCIONES COMUNICATIVAS</div>
        <a href="modulo3_.php"><div class="indexRightContentQuestions questionLightBlue">Los demostrativos</div></a>
        <a href="modulo3_.php"><div class="indexRightContentQuestions questionBlue">Forma plural de los objetos</div></a>
        <a href="modulo3_.php"><div class="indexRightContentQuestions questionLightBlue">Preposiciones de lugar</div></a>
        <a href="modulo3_.php"><div class="indexRightContentQuestions questionBlue">El verbo Haber</div></a>
        <a href="modulo3_.php"><div class="indexRightContentQuestions questionLightBlue">El presente progresivo</div></a>
        </div>
      </div>

      <article>
        <h2 class="nava"></h2>
      </article>
    </section>

    <aside class="barralateral1_mod3">

        <div class="indexRightContent" style="">
        <div class="indexRightContentQuestions questionYellow">ESTRUCTURAS GRAMATICALES</div>
        <a href="modulo3_.php"><div class="indexRightContentQuestions questionLightBlue">Los demostrativos</div></a>
        <a href="modulo3_.php"><div class="indexRightContentQuestions questionBlue">Forma plural de los objetos</div></a>
        <a href="modulo3_.php"><div class="indexRightContentQuestions questionLightBlue">Preposiciones de lugar</div></a>
        <a href="modulo3_.php"><div class="indexRightContentQuestions questionBlue">El verbo Haber</div></a>
        <a href="modulo3_.php"><div class="indexRightContentQuestions questionLightBlue">El presente progresivo</div></a>
        </div>
   </aside> -->

   <section class="contenidoexamen">
     <p class="examenmodulo"><a href=""> Aviso  </a></p>
   </section>
      
<!-- Termina seccion 2 -->

<!--    <footer>
      <h3>Pie de pagina.</h3>
    </footer> -->

   <!-- FOOTER -->
    <footer>
    <div id="skinny-footer">

    <span class="footer-links">
        <a href="aboutus.html" target="_blank">Acerca de nosotros</a>
        <a href="terminos.html" target="_blank">Terminos y condiciones</a>
        <a id="mail-link" href="mailto:misfliskids@gmail.com">Contactanos!</a>
    </span>
    <br>
    <br>
    <hr>
    <span class="last-updated"> Ultima Actualizacion: 6 de noviembre de 2023 </span>  
    <span id="sfcnefgtggnkrjwl64ldz2p3h8xacaa8gjj" class="visitantes">
      
    </span>
    <script type="text/javascript" src="https://counter5.wheredoyoucomefrom.ovh/private/counter.js?c=nefgtggnkrjwl64ldz2p3h8xacaa8gjj&down=async" async></script>

<!--    <span class="contact"><a id="mail-link" href="mailto:misflis@gmail.com">Contactanos</a></span> -->
    <span class="webmaster">Tutor: Mtro. Cesar Garcia/ Samir Sarwerzide</span>    
    <span class="webdirector">Centro Univercitario de Tonalá </span>
    <span class="webprogramer">Ruta del C-98 </span>
    <!--div oculto -->
    
    <div style="display: none;"> 
    <noscript>
      <a href="https://www.contadorvisitasgratis.com" title="contador de visitas para web">
      <img src="https://counter5.wheredoyoucomefrom.ovh/private/contadorvisitasgratis.php?c=nefgtggnkrjwl64ldz2p3h8xacaa8gjj" border="0" title="contador de visitas para web" alt="contador de visitas para web"></a></noscript>
    <a href="https://www.contadorvisitasgratis.com" title="contador de visitas para web">
      <img src="https://counter5.wheredoyoucomefrom.ovh/private/contadorvisitasgratis.php?c=nefgtggnkrjwl64ldz2p3h8xacaa8gjj" border="0" title="contador de visitas para web" alt="contador de visitas para web"></a>
    </div><!-- Termina div oculto -->
    <!-- script mailer -->
    <script>
        var prefix = "mail";
        prefix = prefix + "to:";
        prefix = prefix + "info";
        prefix = prefix + "@";
        $("#mail-link").attr('href', prefix + $('#mail-link').attr('href'));
    </script>
</div> </footer>
  </div>

</body>
</html>