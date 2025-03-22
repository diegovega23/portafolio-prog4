<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="stylesheet" href="../css/stylescomentarios.css">
    <link rel="icon" type="image/png" href="../imagenes/logo.png">
        <title>Comentarios</title>
    </head>
    <header>
  <ul class="fuente">
    <li><a href="../html/index.html"> Inicio</a></li>
      <li><a href="../html/jugadorfav.html"> Mi jugador favorito</a></li>
      <li><a href="../html/mundial.html">Mundiales</a></li>
      <li><a href="../html/club.html">Club Favorito</a></li>
      <li><a href="../php/index.php">comentarios</a></li>
  </ul>
</header>

</body>
    <body>
        <!-- Comentario-->
        <form method="POST" action="../php/enviarcomentario.php">
            <section id="contact">
                <div class="container px-4">
                    <div class="row gx-4 justify-content-center">
                        <div class="col-lg-8">
                            <h2>Comentarios</h2>
                            <br>
                                <br>
                                    <br>
                                <div class="formdiseno">
                                    <label for="usuario" class="form-label">usuario</label>
                                    <input class="form-control" name="usuario" type="text" id="usuario" placeholder="ingresa tu usuario" required >
                                    </div>
                            <br>

                                    <br>
                                <div class="formdiseno">
                                    <label for="nombre" class="form-label">Nombre y apellido</label>
                                    <input class="form-control" name="nombre" type="text" id="nombre" placeholder="ingresa tu nombre y apellido" required >
                                    </div>
                            <br>
                            <br>
                                <div class="formdiseno">
                                    <label for="correo" class="form-label">correo electronico</label>
                                    <input class="form-control" name="correo" type="text" id="correo" placeholder="ingresa tu correo" required >
                                    </div>
                            <br>
                                    <div class="form-control-comment">
                                    <label for="comentario" class="form-label">Comentario:</label>
                                    <textarea class="form-control" name="comentario" cols="30" rows="5" type="text" id="comentario" 
                                    placeholder="Escribe tu comentario"></textarea>
                                    </div>
                            <br>
                            
                            <input class="btn btn-primary" type="submit"  value="Enviar Comentario">

                            
                                    <?php

$conexion=mysqli_connect("localhost","root","","portafolio"); 
$resultado= mysqli_query($conexion, 'SELECT * FROM tabla_portafolio');

while($comentario = mysqli_fetch_object($resultado)){

    ?>

    <b><?php echo($comentario->usuario);  ?>
    </b>(<?php echo ($comentario->nombre); ?>)
    </b>(<?php echo ($comentario->correo); ?>)
</b>(<?php echo ($comentario->fecha); ?>) comentario: 
    <br />
    <?php echo ($comentario->comentario);?>
    <br />
    <hr />
    <?php
} 
?>

    <!-- todo el header-->
    <footer class="footer">
    <ul class="social-icon">
      <li class="icon-elem">
        <a href="https://www.instagram.com/diego_vega_23/" class="icon">
          <ion-icon name="logo-instagram"></ion-icon>
        </a>
      </li>
      <li class="icon-elem">
        <a href="https://www.facebook.com/diegoandres.vegavillarroel" class="icon">
          <ion-icon name="logo-facebook"></ion-icon>
        </a>
      </li>
      <li class="icon-elem">
        <a href="https://portalunimar.unimar.edu.ve/" class="icon">
          <ion-icon name="home"></ion-icon>
        </a>
      </li>
    </ul>
    <ul class="menu">
      <li class="menu-elem">
        <a href="C:\Users\diego\OneDrive\Desktop\prog4\index.html" class="menu-icon"> inicio </a>
      </li>
      <li class="menu-elem">
        <a href="https://www.youtube.com/watch?v=mNbnV3aN3KA&t=615s" class="menu-icon"> Secreto </a>
      </li>
      <li class="menu-elem">
        <a href="https://www.apuestasroyal.com/" class="menu-icon"> Ganar dinero </a>
      </li>
      <li class="menu-elem">
        <a href="C:\Users\diego\OneDrive\Desktop\prog4\secreto2.html" class="menu-icon"> Secreto 2 </a>
      </li>
    </ul>

  </footer>
  <script
  type="module"
  src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
></script>
<script
  nomodule
  src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
></script>
</body>