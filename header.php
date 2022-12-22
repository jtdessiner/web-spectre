<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/spectre.min.css">
    <link rel="stylesheet" href="dist/spectre-exp.min.css">
    <link rel="stylesheet" href="dist/docs.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
    <link href="style.css" rel="stylesheet">
    <title>Spectre</title>
    <script src="libraries/p5.min.js"></script>
    <script src="libraries/p5.sound.min.js"></script>
    
</head>
<body>
  <script src="sketch.js"></script>
    <div class="container altura"> <!--Menu navegación superior-->
        <header class="navbar">
            <section class="navbar-section reloj"><p id="reloj"></p>
            </section>
            <section class="navbar-center">
              <img src="img/spectre-logo.svg" class="img-responsive alt="Spectre">
            </section>
            <section class="navbar-section">
                <button class="btn btn-primary">primary button</button>
              </section>
          </header>
    </div><!--Menu navegación superior-->
    <div id="sketch-container"></div>
    <!--Hero con fondo imagen-->
    <div class="hero posicion" style="background-image: url('img/home.jpg'); background-repeat: no-repeat; background-size: cover;">
            <div class="hero-body">
                <div class="m-20">
                <h1>Spectre</h1>
                <p>Diseño aparte</p>
                </div>
            </div>
    </div> <!--Hero con fondo imagen-->